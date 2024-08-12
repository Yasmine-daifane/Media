<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserTypeService;
use App\Models\RechargeBalance;
use Illuminate\Support\Facades\Auth;
use App\Models\Services;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $services = Services::all();
        $user = Auth::user(); // Get the authenticated user
        $userTypeServiceCount = $user->userTypeServices()->count();
      
        $totalRechargeAmount = RechargeBalance::where('user_id', $user->id)->sum('price'); // Calculate total recharge amount

        $totalBalance = $user->balance; // Get the user's balance directly

        // Fetch transactions for the user with related services and plans
        $transactions = UserTypeService::with('typeService.planService.services')
            ->where('user_id', $user->id)
            ->get();

        // Handle timeframe selection for the chart
        $timeframe = $request->input('timeframe', 'month'); // Default to 'month' if no timeframe is selected
        $orderedServices = $this->getOrderedServicesSummary($user->id, $timeframe);

        // Prepare data for the chart
        $chartData = [];
        foreach ($orderedServices as $orderedService) {
            $timeFrameLabel = $this->getTimeFrameLabel($orderedService, $timeframe);
            $chartData[$timeFrameLabel][$orderedService->typeService->planService->services->title] = $orderedService->count;
        }

        return view('dashboard', compact('services', 'transactions', 'totalRechargeAmount', 'userTypeServiceCount', 'totalBalance', 'chartData', 'timeframe'));
    }

    private function getOrderedServicesSummary($userId, $timeframe)
    {
        $query = UserTypeService::with('typeService.planService.services')
            ->selectRaw('type_service_id, COUNT(*) as count, YEAR(date) as year');
    
        if ($timeframe === 'month') {
            $query->selectRaw('MONTH(date) as month');
        } elseif ($timeframe === 'week') {
            $query->selectRaw('WEEK(date) as week');
        }
    
        // Adjust GROUP BY clause based on the selected timeframe
        if ($timeframe === 'week') {
            $query->groupBy('type_service_id', 'week', 'year');
        } elseif ($timeframe === 'year') {
            $query->groupBy('type_service_id', 'year');
        } else {
            $query->groupBy('type_service_id', 'month', 'year');
        }
    
        return $query->where('user_id', $userId)
            ->orderBy('year', 'desc')
            ->when($timeframe === 'month', function($q) {
                return $q->orderBy('month', 'desc');
            })
            ->get();
    }
    

    private function getTimeFrameLabel($orderedService, $timeframe)
    {
        if ($timeframe === 'week') {
            return 'Week ' . $orderedService->week . '/' . $orderedService->year;
        } elseif ($timeframe === 'year') {
            return 'Year ' . $orderedService->year;
        } else {
            return $orderedService->month . '/' . $orderedService->year;
        }
    }
}
