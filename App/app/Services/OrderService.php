<?php

namespace App\Services;

use App\Models\UserTypeService;
use App\Models\TypeService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;

class OrderService
{
    public function placeOrder($typeServiceId)
    {
        $typeService = TypeService::findOrFail($typeServiceId);
        $user = Auth::user();

        // Calculate the final price with discounts
        $finalPrice = $this->calculateFinalPrice($typeService);

        // Debugging: Log the user's balance and final price
        \Log::info('User ID: ' . $user->id);
        \Log::info('User Balance Before Order: ' . $user->balance);
        \Log::info('Final Price: ' . $finalPrice);

        // Ensure the user has enough balance
        if ($user->balance < $finalPrice) {
            throw new \Exception('Insufficient balance.');
        }

        // Deduct the price from the user's balance
        $user->balance -= $finalPrice;
        $user->save(); // Save the updated balance

        // Log the updated balance
        \Log::info('User Balance After Deduction: ' . $user->balance);

        // Create the user type service record
        return UserTypeService::create([
            'user_id' => $user->id,
            'type_service_id' => $typeServiceId,
            'pricefinal' => $finalPrice,
            'date' => Carbon::now(),
            'expiration_date' => Carbon::now()->addDays($typeService->duration),
        ]);
    }

    private function calculateFinalPrice($typeService)
    {
        $price = $typeService->price;

        // Apply discounts based on duration
        if ($typeService->duration == 6) {
            $price *= 0.85; // 15% discount
        } elseif ($typeService->duration == 12) {
            $price *= 0.75; // 25% discount
        }

        // Debugging: Log the calculated price
        \Log::info('Calculated Price: ' . $price);

        return $price;
    }
}