<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service; // Import the Service model

class ServiceController extends Controller
{
    // Serve the service page
    public function showServicePage()
    {
        return view('service'); // Renders the Blade view
    }

    // Fetch all services from the database
    public function getServices()
    {
        $services = Service::all(); // Fetch all services
        return response()->json($services, 200); // Return as JSON
    }

    //Fetch a specific service by its ID
    public function getService(Request$req){
        $id=$req->input('id');
        return response()->json(Service::find($id),200);
    }

    //Update a specific service's details
    public function setService(Request$req){
        //Check If Service Exists
        $id=$req->input('id');
        $service=Service::find($id);
        if(!$service)
            return response()->json(['error'=>'Service not found (ID : '.$id.')'],404);
        //Validate Input
        $validated=$req->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'description' => 'required|string',
        ]);
        //Update Details
        $service->update($req->all());
        return response()->json(['message'=>'Service updated successfully!'],200);
    }

    // Add a service
    public function addService(Request $request)
    {
        // Validate and add the service to the database
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'description' => 'required|string',
        ]);

        $service = Service::create($validated);

        return response()->json([
            'message' => 'Service added successfully!',
            'service' => $service,
        ], 201);
    }

    // Remove a service
    public function removeService(Request $request)
    {
        $id = $request->input('id');
        $service = Service::find($id);

        if (!$service) {
            return response()->json(['message' => 'Service not found'], 404);
        }

        $service->delete();

        return response()->json(['message' => 'Service removed successfully!'], 200);
    }

    //Update a service
    public function updateService(Request$req){
        // Validate and add the service to the database
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'description' => 'required|string',
        ]);
        //Fetch Service
        $service->find($id);
        if(!$service)return$response->json(['message'=>'Service Not Found'],404);
        //Update Service Details
        $service->update($validated);
        return response()->json(['message'=>'Service updated successfully!',200]);
    }
}
