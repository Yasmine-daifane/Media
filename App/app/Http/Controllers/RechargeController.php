<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RechargeBalance;

class RechargeController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'balanceAmount' => 'required|numeric',
            'paymentMethod' => 'required|string',
            'paymentReceipt' => 'nullable|file|mimes:jpg,jpeg,png,pdf',
            'comment' => 'nullable|string',
            'termsConditions' => 'accepted',
        ]);

        // Store the recharge request in the database
        $recharge = new RechargeBalance();
        $recharge->price = $request->balanceAmount;
        $recharge->user_id = auth()->id(); // Assuming user is authenticated
        $recharge->save();

        // Send notification to admin for confirmation (optional)
        // Notify admin...

        // Redirect user with a success message
        return redirect()->route('services.index')->with('success', 'Recharge request submitted. Please wait for admin confirmation.');
    }
}
