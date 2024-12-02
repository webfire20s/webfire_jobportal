<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Transaction extends Model
{
    use HasFactory;

    protected $table = 'transactions';

    protected $primaryKey = 'id';

    protected $fillable = [
        'user_id',
        'plan_id',
        'receipt_url',
        'month',
        'price',
        'status',
        'purchase_date',
    ];
    
    /**
     * Get the expiration date of the user's active subscription for a given plan.
     *
     * @param int $userId
     * @param int $planId
     * @return Carbon|null  // Returns the expiration date or null if not active.
     */
    public static function getActivePlanExpiryDate(int $userId, int $planId): ?Carbon
    {
        // Get the latest active transaction for the user and plan
        $latestTransaction = self::where('user_id', $userId)
            ->where('plan_id', $planId)
            ->where('status', 'active')
            ->latest('purchase_date')
            ->first();
    
        if (!$latestTransaction) {
            return null; // No active transaction found
        }
    
        // Get the plan details
        $plan = Plan::find($planId);
        if (!$plan) {
            return null; // Plan not found
        }
    
        // Calculate the expiration date
        $expiryDate = Carbon::parse($latestTransaction->purchase_date)->addMonths($plan->duration);
    
        // Return the expiration date as a Carbon instance
        return $expiryDate->isFuture() ? $expiryDate : null;
    }


    /**
     * Check if the user's current subscription for this plan is active.
     *
     * @param int $userId
     * @return bool
     */
    public static function isActive(int $userId, int $planId): bool
    {
        // Get the latest active transaction for the user and plan
        $latestTransaction = self::where('user_id', $userId)
            ->where('plan_id', $planId)
            ->where('status', 'active')
            ->latest('purchase_date')
            ->first();

        if (!$latestTransaction) {
            return false; // No active transaction found
        }

        // Get the plan duration (in months)
        $plan = Plan::find($planId);
        if (!$plan) {
            return false; // Plan not found
        }

        // Calculate the expiration date of the current subscription
        $expiryDate = Carbon::parse($latestTransaction->purchase_date)->addMonths($plan->duration);

        // If the expiry date is in the future, the subscription is still active
        return $expiryDate->isFuture();
    }

    /**
     * Renew or create a new subscription for the user to this plan.
     *
     * @param int $userId
     * @param int $planId
     * @param string $receiptUrl
     * @return Transaction|null
     */
    public static function renewSubscription(int $userId, int $planId, string $receiptUrl): ?Transaction
    {
        // Check if the current subscription is active
        if (self::isActive($userId, $planId)) {
            return null; // No need to renew if active
        }

        // Get the plan details
        $plan = Plan::find($planId);
        if (!$plan) {
            return null; // Invalid plan ID
        }

        // Create a new transaction (purchase)
        $transaction = new self([
            'user_id' => $userId,
            'plan_id' => $planId,
            'receipt_url' => $receiptUrl,
            'month' => $plan->duration, // Use the plan's duration for subscription
            'price' => $plan->price,
            'status' => 'active',
            'purchase_date' => Carbon::now(),
        ]);

        // Save the transaction to the database
        $transaction->save();

        return $transaction; // Return the newly created transaction
    }
    protected $casts = [
        'purchase_date' => 'datetime', // This will cast 'purchase_date' to a Carbon instance
    ];

    public function plan()
    {
        return $this->belongsTo(Plan::class);  // A transaction belongs to a plan
    }
    public function user()
    {
        return $this->belongsTo(User::class);  // Define the inverse relationship
    }
}
