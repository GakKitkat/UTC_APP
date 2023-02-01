<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Admin_Controller extends Controller
{
    public function dashboard(){
        // ต้องสร้างเงื่อนไขกำกับอีกห้ามลืม
        return view('admin.dashboard');
    }

    public function navbarband(){
        return view('layout.navbar');
    }

}
