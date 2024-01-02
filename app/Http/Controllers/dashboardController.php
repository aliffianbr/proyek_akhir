<?php

namespace App\Http\Controllers;

use App\Charts\GenderChart;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function index(GenderChart $chart)
    {
        return view('dashboard.dashboard', ['chart' => $chart->build()]);
    }
}
