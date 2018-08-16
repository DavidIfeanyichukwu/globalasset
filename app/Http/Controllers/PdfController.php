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
        $name = $examdpi->test_house . 'Certificate of Test Examination and DPI' . $examdpi->create_date;
        return $pdf->download($name . '.pdf');
    }
}