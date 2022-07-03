<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Identitas extends Model
{
    protected $table = "identitas";

    protected $guarded = [];

    protected $primaryKey = 'id_identitas';

    public $timestamps = false;
}
