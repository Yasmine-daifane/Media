<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RechargeBalance;

class RechargeController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'balanceAmount' => 'required|numeric',
            'paymentMethod' => 'required|string',
            'paymentReceipt' => 'nullable|image|mimes:jpg,jpeg,png', // Ensure it's an image
            'comment' => 'nullable|string',
            'termsConditions' => 'accepted',
        ]);

        // Store the recharge request in the database
        $recharge = new RechargeBalance();
        $recharge->price = $request->balanceAmount;
        $recharge->payment_method = $request->paymentMethod;
        $recharge->user_id = auth()->id(); // Assuming user is authenticated
        $recharge->date = now()->format('Y-m-d'); // Set the date to the current date

        // Handle the payment receipt file upload
        if ($request->hasFile('paymentReceipt')) {
            $file = $request->file('paymentReceipt');
            $path = $file->store('receipts', 'public');
            $recharge->payment_receipt = $path;
        }

        // Store the comment
        $recharge->comment = $request->comment;

        // Save the recharge data to the database
        $recharge->save();

        // Optionally, notify admin here if needed

        // Redirect user with a success message
        return redirect()->route('services.index')->with('success', 'Recharge request submitted. Please wait for admin confirmation.');
    }
}
