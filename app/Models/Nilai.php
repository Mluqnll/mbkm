<?php

namespace App\Models;

use App\Models\Model;
use App\Models\Mahasiswa;

class Nilai extends Model
{
    protected $table="nilai";

    public function Mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class, 'nim_mahasiswa');
    }
}
