<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Services;

class ServicesController extends Controller
{
    public function index()
    {
        // Fetch all services from the database
        $services = Services::all();

        // Return the view with services data
        return view('services.index', compact('services'));
    }

    public function showPacks($id)
    {
        // Fetch the service by ID or fail if not found
        $service = Services::findOrFail($id);

        // Retrieve the packs associated with the service
        // Adjust this based on your actual relationship in the Services model
        $packs = $service->planServices; // Assuming `planServices` is the relationship name

        // Fetch all services if needed for navigation or other purposes
        $services = Services::all();

        // Return the view with the selected service, its packs, and all services
        return view('services.packs', compact('service', 'packs', 'services'));
    }

    public function show($id)
    {
        // Fetch the service by ID with its related packs and typeServices
        $service = Services::with('planServices.typeServices')->findOrFail($id);

        // Extract packs for passing to the view
        $packs = $service->planServices;

        // Return the view with the service and its packs
        return view('services.show', compact('service', 'packs'));
    }
}
