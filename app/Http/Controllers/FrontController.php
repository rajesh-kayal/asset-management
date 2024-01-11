<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function dashboard(){
        return view('index');
    }
    public function category(){
        return view('category');
    }
    public function class(){
        return view('class');
    }
    public function asset(){
        return view('asset');
    }
    public function vendor(){
        return view('vendor');
    }
    public function location(){
        return view('location');
    }
    public function department()
    {
        return view('department');
    }
    public function report(){
        return view('report');
    }
    public function user(){
        return view('user');
    }


    public function new_pro(){
        return view('new-pro');
    }
    public function product(){
        return view('product');
    }




    public function add_category(){
        return view('add.add_category');
    }
    public function add_class(){
        return view('add.add_class');
    }
    public function add_vendor(){
        return view('add.add_vendor');
    }
    public function add_asset(){
        return view('add.add-asset');
    }
    public function add_location(){
        return view('add.add-location');
    }
    public function add_department()
    {
        return view('add.add-department');
    }
    public function add_user()
    {
        return view('add.add_user');
    }


}
