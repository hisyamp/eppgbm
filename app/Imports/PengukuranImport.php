<?php

namespace App\Imports;

use App\Identitas;
use App\Pengukuran;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Facades\Auth;

class PengukuranImport implements ToModel
{

    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Pengukuran([
            'nama_anak_p'=> $row[0],
            'tinggi'=> $row[1],
            'berat'=> $row[2],
            'cara_ukur' => $row[3],
        ]);
    }
}
