<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;


class LocationController extends Controller
{
    public function getAllLocation()
{
    $locations = Location::get();
    //$departments = Department::get();
    return view('location')->with(['locations' => $locations]);
}

    public function editLocation($id)
    {
        $Location = Location::where('id', $id)->first();
        return view('edit.edit-location')->with(['location' => $Location]);
    }
    public function viewLocation($id)
    {
        $Location = Location::where('id', $id)->first();
        return view('view.view-location')->with(['location' => $Location]);
    }

    public function saveLocation(Request $request)
    {
        $validatedData = $request->validate([
            'locationCode' => 'required',
            'locationName' => 'required',
        ]);

        $location = Location::create([
            'code' => $request->locationCode,
            'name' => $request->locationName,
        ]);


        if ($location) {
            return redirect('/location')->with(['message' => 'success']);
        } else {
            return redirect('/add_location')->with(['message' => 'error']);
        }
    }
    public function updateLocation(Request $request)
    {
        $locationData = [
            'code' => $request->locationCode,
            'name' => $request->locationName,
        ];

        $locationUpdate = Location::where('id', $request->location_id)->update($locationData);

        if ($locationUpdate) {
            return redirect('/location')->with(['message' => 'success']);
        } else {
            return redirect()->back()->with(['message' => 'error']);
        }
    }
}
