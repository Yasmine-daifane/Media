<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RechargeBalance;
use Illuminate\Support\Facades\Auth;

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

        // Update the user's balance
        $user = auth()->user();
        $user->balance += $request->balanceAmount;
        $user->save();

        // Optionally, notify admin here if needed

        // Redirect user with a success message
        return redirect()->route('services.index')->with('success', 'Recharge request submitted. Please wait for admin confirmation.');
    }

    public function recharge(Request $request)
    {
        $request->validate([
            'amount' => 'required|numeric|min:0.01',
        ]);

        $user = Auth::user();

        // Create a new recharge record
        RechargeBalance::create([
            'price' => $request->amount,
            'date' => now(),
            'user_id' => $user->id,
        ]);

        // Update the user's balance
        $user->balance += $request->amount;
        $user->save();

        return redirect()->back()->with('status', 'Balance recharged successfully!');
    }
}