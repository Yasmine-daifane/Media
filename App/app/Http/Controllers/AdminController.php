<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Services;


class AdminController extends Controller
{
    public function index()
    {
        $services = Services::all(); // Replace with your service retrieval logic
        return view('admin.dashboard', compact('services'));
    }
}
