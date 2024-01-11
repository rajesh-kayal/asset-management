<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendor;

class VendorController extends Controller
{
    public function getAllVendor()
    {
        $Vendor = Vendor::get();
        return view('Vendor')->with(['Vendores' => $Vendor]);
    }

    public function saveVendor(Request $request)
    {
        // $validatedData = $request->validate([
        //     'vendor_name' => 'required',
        //     'phone' => 'required',
        //     'mobile' => 'required',
        //     'primary_contact' => 'required',
        //     'email' => 'required|email',
        //     'description' => 'nullable',
        //     'address_line1' => 'required',
        //     'city' => 'required',
        //     'state' => 'required',
        //     'address_line2' => 'nullable',
        //     'country' => 'required',
        //     'zip_code' => 'required',
        // ]);

        $vendor = new Vendor();
        $vendor->vendor_name = $request->vendor_name;
        $vendor->phone = $request->phone;
        $vendor->mobile = $request->mobile;
        $vendor->primary_contact = $request->primary_contact;
        $vendor->email = $request->email;
        $vendor->description = $request->description;
        $vendor->address_line1 = $request->address_line1;
        $vendor->city = $request->city;
        $vendor->state = $request->state;
        $vendor->address_line2 = $request->address_line2;
        $vendor->country = $request->country;
        $vendor->zip_code = $request->zip_code;

        if ($vendor->save()) {
            return redirect('/vendor')->with(['message' => 'success']);
        } else {
            return redirect('/add_vendor')->with(['message' => 'error']);
        }
    }
    public function editvendor($id)
    {
        $vendor = vendor::where('id', $id)->first();
        return view('edit.edit_vendor')->with(['vendor' => $vendor]);
    }
    public function viewVendor($id)
    {
        $vendor = vendor::where('id', $id)->first();
        return view('view.view_vendor')->with(['vendor' => $vendor]);
    }
    public function updateVendor(Request $request)
    {
        $data = [
            'vendor_name' => $request->vendor_name,
            'phone' => $request->phone,
            'mobile' => $request->mobile,
            'primary_contact' => $request->primary_contact,
            'email' => $request->email,
            'description' => $request->description,
            'address_line1' => $request->address_line1,
            'city' => $request->city,
            'state' => $request->state,
            'address_line2' => $request->address_line2,
            'country' => $request->country,
            'zip_code' => $request->zip_code,
        ];

        $affectedRows = Vendor::where('id', $request->vendor_id)->update($data);

        if ($affectedRows) {
            return redirect('/vendor')->with(['message' => 'success']);
        } else {
            return redirect()->back()->with(['message' => 'error']);
        }
    }
}
