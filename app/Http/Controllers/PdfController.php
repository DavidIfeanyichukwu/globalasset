<?php


namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Examdpi;
use DB;
use PDF;

class PdfController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function create($id){
        $examdpi = Examdpi::find($id);
        $pdf = PDF::loadView('pdf-template/Examdpi', compact('examdpi'));
        return $pdf->download($examdpi->test_house . '.pdf');
    }
}