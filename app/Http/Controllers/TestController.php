<?php

namespace App\Http\Controllers;

use App\Http\Requests\CsvImportRequest;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;

class TestController extends Controller
{
    public function index(Request $request)
    {
        if($request->session()->has('key')){
            //echo $request->session()->get('key');
            $cek = array($request->session()->get('key'));
            echo $cek;
        }else{
            echo 'Tidak ada data dalam session.';
        }
    }

    public function store(Request $request){
        $request->session()->put('key', 'Om Bagoes');
        echo 'Menyimpan session nama=Om Bagoes';
    }

    public function destroy(Request $request){
        $request->session()->forget('key');
        echo 'Menghapus session name';
    }


    public function show()
    {
        return view('test');
    }

    public function save(CsvImportRequest $request)
    {
        $path = $request->file('csv_file')->getRealPath();

        $data = array_map('str_getcsv', file($path));

        $request->session()->put('key', $data);
        echo 'Berhasil menyimpan session';
    }

    public function coba()
    {
        $myArray = [
            ['id'=>1, 'title'=>'Laravel CRUD'],
            ['id'=>2, 'title'=>'Laravel Ajax CRUD'],
            ['id'=>3, 'title'=>'Laravel CORS Middleware'],
            ['id'=>4, 'title'=>'Laravel Autocomplete'],
            ['id'=>5, 'title'=>'Laravel Image Upload'],
            ['id'=>6, 'title'=>'Laravel Ajax Request'],
            ['id'=>7, 'title'=>'Laravel Multiple Image Upload'],
            ['id'=>8, 'title'=>'Laravel Ckeditor'],
            ['id'=>9, 'title'=>'Laravel Rest API'],
            ['id'=>10, 'title'=>'Laravel Pagination'],
        ];

        $data = $this->paginate($myArray);

        return view('paginate', compact('data'));
    }

    public function paginate($items, $perPage = 5, $page = null, $options = [])
    {
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
        $items = $items instanceof Collection ? $items : Collection::make($items);
        return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
    }
}
