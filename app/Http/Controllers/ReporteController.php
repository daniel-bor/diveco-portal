<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReporteController extends Controller
{
    public function showReport()
    {
        // Lógica para mostrar el reporte
        // Obtener la url del reporte de Power BI desde env
        $reportURL = env('POWER_BI_REPORT_URL');
        return view('reports.panel-bi', compact('reportURL'));
    }
}
