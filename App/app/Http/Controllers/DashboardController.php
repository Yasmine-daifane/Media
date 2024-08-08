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
        $userTypeServiceCount = Auth::user()->userTypeServices()->count();
        $orderCount = UserTypeService::count();
        $totalBalance = RechargeBalance::sum('price');


        return view('dashboard', compact('services', 'orderCount', 'userTypeServiceCount', 'totalBalance'));
    }
}