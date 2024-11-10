<?php

namespace App\Helpers;

use App\Models\Transaction;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;

class SubscriptionHelper
{
    /**
     * Check if the user's subscription plan is active.
     *
     * @param int $userId
     * @return bool
     */
    public static function isActive(int $userId): bool
    {
        // Log the userId being checked
        Log::info('Checking subscription status for user ID: ' . $userId);

        // Get the latest active transaction for the user
        $latestTransaction = Transaction::where('user_id', $userId)
            ->where('status', 'approved')  // Assuming 'active' status indicates active subscription
            ->latest('purchase_date')
            ->first();
        
        // Log the transaction result
        if (!$latestTransaction) {
            Log::warning('No active transaction found for user ID: ' . $userId);
            return false;
        }

        // Check if the plan is still active (e.g., 30 days subscription duration)
        $expiryDate = Carbon::parse($latestTransaction->purchase_date)->addMonths($latestTransaction->month);
        
        // Log the expiry date check
        Log::info('User ID ' . $userId . ' has subscription plan that expires on: ' . $expiryDate->toDateString());
        
        return $expiryDate->isFuture();
    }

    /**
     * Check if a user's subscription plan has expired.
     *
     * @param int $userId
     * @return bool
     */
    public static function isExpired(int $userId): bool
    {
        // Log the check for expiration
        Log::info('Checking if subscription is expired for user ID: ' . $userId);
        return !self::isActive($userId);
    }

    /**
     * Get the remaining days for the user's active subscription plan.
     *
     * @param int $userId
     * @return int
     */
    public static function remainingDays(int $userId): int
    {
        Log::info('Calculating remaining days for user ID: ' . $userId);

        $latestTransaction = Transaction::where('user_id', $userId)
            ->where('status', 'approved')  // Assuming 'active' status indicates active subscription
            ->latest('purchase_date')
            ->first();

        if (!$latestTransaction) {
            Log::warning('No active transaction found for user ID: ' . $userId);
            return 0;
        }

        // Calculate the expiry date
        $expiryDate = Carbon::parse($latestTransaction->purchase_date)->addMonths($latestTransaction->month);
        
        // Log the remaining days calculation
        Log::info('User ID ' . $userId . ' has subscription plan that expires in ' . $expiryDate->diffInDays(Carbon::now()) . ' days.');
        
        // Calculate the remaining days
        return $expiryDate->diffInDays(Carbon::now());
    }

    /**
     * Get the user's current subscription plan details.
     *
     * @param int $userId
     * @return \App\Models\Plan|null
     */
    public static function getCurrentPlan(int $userId)
    {
        Log::info('Fetching current subscription plan for user ID: ' . $userId);

        $latestTransaction = Transaction::where('user_id', $userId)
            ->where('status', 'approved')  // Assuming 'active' status indicates active subscription
            ->latest('purchase_date')
            ->first();

        if (!$latestTransaction) {
            Log::warning('No active transaction found for user ID: ' . $userId);
            return null;
        }

        // Log the plan details
        Log::info('User ID ' . $userId . ' has subscription plan: ' . $latestTransaction->plan->name);
        
        return $latestTransaction->plan;
    }
}
