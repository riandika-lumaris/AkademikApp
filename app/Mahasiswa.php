<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = "mahasiswa";
    protected $primaryKey = "nrp";
    protected $keyType = "string";
    protected $fillable = ["nrp","nama","dosen_wali"];

    public $timestamps = false;

    public function dosen() {
        return $this->belongsTo("App\Dosen", "dosen_wali");
    }
}
