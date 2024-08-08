<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Services; // Adjust according to your actual model and namespace

class ServicesController extends Controller
{
    public function index()
    {
        // Fetch services from the database
        $services = Services::all(); // Adjust to your actual query needs

        // Return the view with services data
        return view('services.index', compact('services'));
    }



    public function showPacks($id)
    {
        $service = Services::findOrFail($id);
        // Retrieve the packs associated with the service
        $packs = $service->planServices; // Adjust as necessary based on your relationships
        // Fetch all services if needed
        $services = Services::all(); // Fetch all services
        return view('services.packs', compact('service', 'packs', 'services')); // Pass services to the view
    }


}