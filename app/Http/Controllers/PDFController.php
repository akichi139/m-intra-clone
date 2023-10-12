<?php

namespace App\Http\Controllers;

use App\Models\SaleOrder;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class PDFController extends Controller
{
    public function pdf($id){
        $sale_order = SaleOrder::find($id);

        PDF::setOptions([
            'dpi' => 150,
            'defaultFont' => 'THSarabunNew'
        ]);

        $pdf = Pdf::loadView('invoice.pdf', compact('sale_order'));

        // return view('invoice.pdf', compact('sale_order'));
        
        return $pdf->stream();
    }
}
