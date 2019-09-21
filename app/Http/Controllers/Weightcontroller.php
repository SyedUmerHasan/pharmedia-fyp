<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Weightcontroller extends Controller
{
    public function index()
    {
        return view('admin.admin_pages.weight.list_weight');
    }
}
