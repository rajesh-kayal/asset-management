<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AssetClass;
use Carbon\Carbon;

class AssetClassController extends Controller
{
    public function getAllClass()
    {
        $class = AssetClass::get();
        return view('class')->with(['classes' => $class]);
    }


    public function classIdview()
    {
        $nextClassId = AssetClass::latest('id')->first(); // Use first instead of last

    // Increment the ID to get the next one
    $nextClassId = $nextClassId ? sprintf('%03d', $nextClassId->id + 1) : '001';

    return view('add.add_class', ['nextClassId' => $nextClassId]);

    }

    public function AssetClassStore(Request $request)
    {
        $validatedData = $request->validate([
            'class_description' => 'required',
            'asset_life' => 'required|integer',
            'Rate_of_def_c_act' => 'required',
            'Rate_of_def_it_act' => 'required'
        ]);


        // $currentYear = Carbon::now()->year;
        // $classCount = AssetClass::whereYear('created_at', $currentYear)->count() + 1;
        // $classId = 'IVDFA/' . $currentYear . '/' . str_pad($classCount, 3, '0', STR_PAD_LEFT);

        $assetClass = new AssetClass();
        // $assetClass->class_id = $classId;
        $assetClass->class_id = $request->next_class_id;
        $assetClass->class_description = $request->class_description;
        $assetClass->asset_life = $request->asset_life;
        $assetClass->Rate_of_def_c_act = $request->Rate_of_def_c_act;
        $assetClass->Rate_of_def_it_act = $request->Rate_of_def_it_act;
        $assetClass->save();

        if ($assetClass) {
            return redirect('/class')->with(['message' => 'success']);
        } else {
            return redirect('/add_class')->with(['message' => 'error']);
        }
    }

    public function editClass($id)
{
    $class = AssetClass::where('id', $id)->first();
    return view('edit.edit_class')->with(['class' => $class]);
}

    public function viewClass($id)
    {
        $class = AssetClass::where('id', $id)->first();
        return view('view.view_class')->with(['class' => $class]);
    }

    public function updateClass(Request $request)
    {

        $data = [

            'class_description' => $request->class_description,
            'asset_life' => $request->asset_life,
            'Rate_of_def_c_act' => $request->Rate_of_def_c_act,
            'Rate_of_def_it_act' => $request->Rate_of_def_it_act
        ];


        $affectedRows = AssetClass::where('id', $request->hid)->update($data);

        if ($affectedRows) {
            return redirect('/class')->with(['message' => 'success']);
        } else {
            return redirect()->back()->with(['message' => 'error']);
        }
    }

    }
