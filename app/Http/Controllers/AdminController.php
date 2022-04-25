<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin($id, $name){
        return view('Admin.admin_view', compact('id','name'));
    }
}
