<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Tightenco\Ziggy\Ziggy;

class AppController extends Controller
{
    public function ziggy(Request $request)
    {
        return (new Ziggy());
    }

    public function dashboard(Request $request)
    {
        return inertia('Dashboard');
    }
}
