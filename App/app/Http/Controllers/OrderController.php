<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use App\Models\TypeService;
use App\Models\UserTypeService;
use App\Services\OrderService; // Add this line at the top
use App\Notifications\SubscriptionEndingNotification;
use App\Notifications\SubscriptionExpiredNotification;


class OrderController extends Controller
{
    public function order(Request $request)
    {
        $request->validate([
            'orderOption' => 'required|exists:type_services,id',
        ]);
    
        // Use the OrderService to place the order
        $orderService = new \App\Services\OrderService();
        $orderService->placeOrder($request->orderOption);
    
        return redirect()->back()->with('status', 'Order placed successfully!');
    }
}