<?php

namespace App\Http\Controllers;
use App\Models\TechnicalReport;

class TechnicalController extends Controller
{   
    // In TechnicalController.php — add this method
    public function technical() {
        $report1 = TechnicalReport::find(1);
        $report2 = TechnicalReport::find(2);
        $report3 = TechnicalReport::find(3);
        return view('reports.technical', compact('report1', 'report2', 'report3'));
    }
    
}
