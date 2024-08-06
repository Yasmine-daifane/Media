<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserTypeService;
use App\Models\RechargeBalance;
use Illuminate\Support\Facades\Auth; // Add this line



class DashboardController extends Controller
{
    public function index()
    {
        $userTypeServiceCount = Auth::user()->userTypeServices()->count();
        $orderCount = UserTypeService::count();
        $totalBalance = RechargeBalance::sum('price');

        return view('dashboard', compact('userTypeServiceCount', 'orderCount', 'totalBalance'));
    }
}
