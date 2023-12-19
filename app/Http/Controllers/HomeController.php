<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function __invoke()
    {

        $settings = Setting::first();
        return view('front.index', compact('settings'));
    }
}
