<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;
use App\Helpers\SubscriptionHelper;

class CheckPlanActive
{
    public function handle(Request $request, Closure $next)
    {
        $userId = Auth::id();

        // Check if the user has an active plan (you can adjust your logic based on your plan expiration rules)
        $isExpired = SubscriptionHelper::isExpired($userId);

        // If no active plan found, redirect to plans page
        if ($isExpired) {
            return redirect()->route('plans.page')->with('error', 'Your plan is inactive. Please purchase a new plan.');
        }

        return $next($request);
    }
}
