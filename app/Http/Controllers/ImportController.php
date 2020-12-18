<?php

namespace App\Http\Controllers;

use App\CsvData;
use App\Http\Requests\CsvImportRequest;
use App\Imports\UsersImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ImportController extends Controller
{
    public function getImport()
    {
        return view('import');
    }

    public function parseImport(CsvImportRequest $request)
    {
        $path = $request->file('csv_file')->getRealPath();

        $data = array_map('str_getcsv', file($path));

        $totalData = count($data);
        if (count($data) > 0) {
            $csv_header_fields = $data[0];
            $csv_data = array_slice($data, 1, 10);

            ##dd($csv_data);
        } else {
            return redirect()->back();
        }

        return view('import_fields', compact( 'csv_header_fields', 'csv_data'));

    }
}
