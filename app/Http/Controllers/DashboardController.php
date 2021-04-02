<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Activitylog\Models\Activity;

class DashboardController extends Controller
{
    public function index()
    {
        return view('amrani.dashboard.index')->with([
            'activities'    =>  Activity::all()
        ]);
    }
}
