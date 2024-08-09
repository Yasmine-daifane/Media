<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserTypeService;
use App\Models\RechargeBalance;
use Illuminate\Support\Facades\Auth;
use App\Models\Services; // Ensure this line is added

class DashboardController extends Controller
{
    public function index()
    {
        $services = Services::all();
        $user = Auth::user(); // Get the authenticated user
        $userTypeServiceCount = $user->userTypeServices()->count();
        $orderCount = UserTypeService::count();
        $totalBalance = $user->balance; // Get the user's balance directly

        return view('dashboard', compact('services', 'orderCount', 'userTypeServiceCount', 'totalBalance'));
    }
}