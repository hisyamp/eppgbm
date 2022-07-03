<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengukuran extends Model
{
    protected $table = "pengukuran";

    protected $guarded = [];

    protected $primaryKey = 'id_pengukuran';

    public $timestamps = false;
}
