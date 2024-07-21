<?php

namespace App\Http\Controllers;

use App\Imports\CustomersExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class CustomersExportController extends Controller
{
    /**
     * Handle the export request.
     *
     * @return \Illuminate\Http\Response|\Symfony\Component\HttpFoundation\BinaryFileResponse
     */
    public function export()
    {
        return Excel::download(new CustomersExport, 'customers.xlsx');
    }
}
