<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainThemeController extends Controller
{
    public function HomePage()
    {
        return view("usertheme.index");
    }
    public function AboutUsPage(){
        return view("usertheme.aboutus");
    }
    public function Services(){
        return view("usertheme.services");
    }
}
