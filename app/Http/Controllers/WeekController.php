<?php

namespace App\Http\Controllers;
use App\Models\WeeklyReport;

class WeekController extends Controller
{
    public function index(){
        $weeks = WeeklyReport::all();
        
        return view('reports.weekly', compact('weeks'));
    }

    public function show(WeeklyReport $weeklyReport){
        
        return view('reports.show', compact('weeklyReport'));
    }   
}
