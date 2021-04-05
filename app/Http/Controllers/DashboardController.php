<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Intermediaire;
use Spatie\Activitylog\Models\Activity;

class DashboardController extends Controller
{
    public function index()
    {
        return view('amrani.dashboard.index')->with([
            'activities'    =>  Activity::orderBy('created_at', 'desc')->get()
        ]);
    }

    public function getTotals(){
        $totals = [
            'total_clients'          =>   Client::count(),
            'total_intermediaires'   =>   Intermediaire::count()
        ];
        return $totals;
    }
}
