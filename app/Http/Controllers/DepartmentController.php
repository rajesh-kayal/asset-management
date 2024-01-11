<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;


class DepartmentController extends Controller
{
    public function getAllDepartment()
    {
        $Departments = Department::get();
        return view('Department')->with(['departments' => $Departments]);
    }

    public function editDepartment($id)
    {
        $Department = Department::where('id', $id)->first();
        return view('edit.edit-department')->with(['department' => $Department]);
    }
    public function viewDepartment($id)
    {
        $Department = Department::where('id', $id)->first();
        return view('view.view-department')->with(['department' => $Department]);
    }

    public function saveDepartment(Request $request)
    {
        $validatedData = $request->validate([
            'programCode' => 'required',
            'departmentCode' => 'required',
            'programName' => 'required',
            'departmentDescription' => 'required',
        ]);


        $department = Department::create([
            'program_code' => $request->programCode,
            'department_code' => $request->departmentCode,
            'program_name' => $request->programName,
            'department_description' => $request->departmentDescription,
        ]);

        if ($department) {
            return redirect('/department')->with(['message' => 'success']);
        } else {
            return redirect('/add_department')->with(['message' => 'error']);
        }
    }
    public function updateDepartment(Request $request)
    {
        $departmentData = [
            'program_code' => $request->programCode,
            'department_code' => $request->departmentCode,
            'program_name' => $request->programName,
            'department_description' => $request->departmentDescription,
        ];

        $departmentUpdate = Department::where('id', $request->department_id)->update($departmentData);

        if ($departmentUpdate) {
            return redirect('/department')->with(['message' => 'success']);
        } else {
            return redirect()->back()->with(['message' => 'error']);
        }
    }




}
