<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\IdentitasImport;


class ExcelController extends Controller
{
    public function import_identitas(Request $request) 
	{
        try {
            $file = $request->file('file1');
            $nama_file = $file->getClientOriginalName();
            $file->move('file_identitas',$nama_file);
            // dd("aaa");
            // import data
            Excel::import(new IdentitasImport, public_path('/file_identitas/'.$nama_file));
            return redirect('/')->with('alert1', 'Data Berhasil Ditambahkan!');
        }catch (Exception $e) {
            dd($e->getmessage());
            return redirect('/')->with('error', 'ok');
        }
	}

    public function import_pengukuran(Request $request) 
	{
        try {
            $file = $request->file('file2');
            $nama_file = $file->getClientOriginalName();
            $file->move('file_pengukuran',$nama_file);
            
            // import data
            Excel::import(new IdentitasImport, public_path('/file_pengukuran/'.$nama_file));
            return redirect('/')->with('alert2', 'Data Berhasil Ditambahkan!');
        }catch (Exception $e) {
            dd($e->getmessage());
            return redirect('/')->with('error', 'ok');
        }
	}
}
