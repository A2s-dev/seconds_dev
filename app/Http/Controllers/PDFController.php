<?php

namespace App\Http\Controllers;

use PDF;

class PDFController extends Controller
{
    public function exportHorizontal()
    {
        $pdf = PDF::loadView('pdf.horizontal')
            ->setPaper('portrait')
            ->setWarnings(false);

        return $pdf->stream();
    }

    public function exportVertical()
    {
        $pdf = PDF::loadView('pdf.vertical')
            ->setPaper('a4', 'landscape')
            ->setWarnings(false);

        return $pdf->stream();
    }
}
