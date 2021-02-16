<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Charts\UserChart;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;

class UserChartController extends Controller
{
    $chart_options = [
        'chart_title' => 'Users by months',
        'report_type' => 'group_by_date',
        'model' => 'App\Models\User',
        'group_by_field' => 'created_at',
        'group_by_period' => 'month',
        'chart_type' => 'bar',
    ];
    $chart1 = new LaravelChart($chart_options);
    
    return view('dashboard', compact('chart1'));
    
       
}
