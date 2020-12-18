<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Khill\Lavacharts\DataTables\DataTable;
use Khill\Lavacharts\Laravel\LavachartsFacade;
use Khill\Lavacharts\Lavacharts;
use League\Csv\Reader;

class CsvController extends Controller
{
    public function upload(){
        return view('csv_import');
    }

    public function proses_upload(Request $request){
        $this->validate($request, [
            'file' => 'required',
        ]);

        // menyimpan data file yang diupload ke variabel $file
        $file = $request->file('file');

        // nama file
        echo 'File Name: '.$file->getClientOriginalName();
        echo '<br>';

        // ekstensi file
        echo 'File Extension: '.$file->getClientOriginalExtension();
        echo '<br>';

        // real path
        echo 'File Real Path: '.$file->getRealPath();
        echo '<br>';

        // ukuran file
        echo 'File Size: '.$file->getSize();
        echo '<br>';

        // tipe mime
        echo 'File Mime Type: '.$file->getMimeType();

        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'data_file';

        // upload file
        $file->storeAs($tujuan_upload, $file->getClientOriginalName());
    }

    public function read_csv(Request $request)
    {
        $csv = Reader::createFromPath(storage_path('app/data_file').'/'."companies.csv",'r');

        //get the first row, usually the CSV header
        $headers = $csv->fetchOne();

        //get all rows starting from the 1th row (without headers)
        //$data = $csv->setOffset(0)->setLimit(25)->fetchAll();
        $data = $csv->setOffset(1)->fetchAll();
        //return response()->json([
        //    'data' => $data
        //], 200);
        //pagination
        $data = $this->paginate($data);

        return view('csv_table', compact( 'headers', 'data'));
    }

    public function read_csv_detail(Request $request)
    {
        $roe = \Lava::DataTable();
        $roe->addStringColumn('ROE')
            ->addNumberColumn('Percent')
            ->addRow(['ROE_FV14', 53.9])
            ->addRow(['ROE_FV15', 54.47]);

        \Lava::PieChart('ROE', $roe, [
            'title' => 'ROE FV14 vs FV15'
        ]);

        $revenue = \Lava::DataTable();
        $revenue->addStringColumn('RWA')
            ->addNumberColumn('Sales')
            ->addNumberColumn('Net Worth')
            ->addRow(['RWA FY14', 19901375, 19901375])
            ->addRow(['REVENUE FY14', 300000, 19901375])
            ->addRow(['RWA FY15', 17796037, 19901375])
            ->addRow(['REVENUE FY15', 574000, 17796037]);

        \Lava::ComboChart('Revenue', $revenue, [
            'title' => 'Revenue & RWA FV14 vs FV15',
            'seriesType' => 'bars',
            'series' => [
                1 => ['type' => 'line']
            ],
            'legend' => [
                'position' => 'none'
            ],
        ]);

        $eop = \Lava::DataTable();
        $eop->addStringColumn('EOP')
            ->addNumberColumn('Max Temp')
            ->addRow(['TotalLimits_EOP_FY14',  410124880])
            ->addRow(['TotalLimits_EOP_FY15',  461807017]);

        \Lava::LineChart('EOP', $eop, [
            'title' => 'Total Limit EOP FY14 vs FY15',
            'legend' => [
                'position' => 'none'
            ],
        ]);

        $average = \Lava::DataTable();
        $average->addStringColumn('Average')
            ->addNumberColumn('FY14')
            ->addNumberColumn('FY15')
            ->addRow(['Avg Regulatory Capital',  3000000, 4000000])
            ->addRow(['NPAT Allocation',  1000000, 1200000])
            ->addRow(['TotalLimits EOP',  21000000, 18000000])
            ->addRow(['Deposits EOP',  5000000, 5500000]);

        \Lava::BarChart('Average', $average, [
            'title' => 'Company Average Activity FY14 vs FY15',
            'legend' => [
                'position' => 'none'
            ],
        ]);

        return view('csv_table_detail', compact( 'roe','revenue','eop'));
    }





    /**
     * Gera a paginação dos itens de um array ou collection.
     *
     * @param array|Collection      $items
     * @param int   $perPage
     * @param int  $page
     * @param array $options
     *
     * @return LengthAwarePaginator
     */
    public function paginate($items, $perPage = 10, $page = null, $options = [])
    {
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);

        $items = $items instanceof Collection ? $items : Collection::make($items);

        return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
    }
}
