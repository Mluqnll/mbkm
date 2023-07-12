<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table="mahasiswa";
    public $primaryKey = "nim";

    public function Nilai()
    {
        return $this -> belongsTo(Nilai::class, 'nim');
    }
}
