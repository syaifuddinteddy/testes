<?php

namespace App\Imports;

use App\CsvData;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class UsersImport implements ToCollection
{
    public function collection(Collection $rows)
    {
        foreach ($rows as $row)
        {
            CsvData::create([
                'csv_filename' => $row[0],
                'csv_header' => $row[1],
                'csv_data' => $row[2],
            ]);
        }
    }
}
