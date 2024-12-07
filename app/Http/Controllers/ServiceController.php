<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    // Serve the service page
    public function showServicePage()
    {
        return view('service'); // Renders the Blade view
    }

    // Add a service
    public function addService(Request $request)
    {
        // Handle adding the service (logic here)
        return response()->json(['message' => 'Service added successfully!']);
    }

    // Remove a service
    public function removeService(Request $request)
    {
        // Handle removing the service (logic here)
        return response()->json(['message' => 'Service removed successfully!']);
    }
}
