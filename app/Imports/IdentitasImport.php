<?php

namespace App\Imports;

use App\Identitas;
use App\Pengukuran;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Facades\Auth;

class IdentitasImport implements ToModel
{

    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        // dd($row[13]);
        return new Identitas([
            'no'=> $row[0],
            'nik'=> $row[1],
            'nama_anak_i'=> $row[2],
            'tgl_lahir' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject(intval($row[3]))->format('Y-m-d'),
            'jenis_kelamin' => $row[4],
            'nama_ortu' => $row[5],
            'nik_ortu' => $row[6],
            'hp_ortu' => $row[7],
            'pkm' => $row[8],
            'kel' => $row[9],
            'posyandu' => $row[10],
            'rt' => $row[11],
            'rw' => $row[12],
            'alamat' => $row[13],
        ]);
    }
}
