<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    protected $table = "dosen";
    protected $primaryKey = "kode";
    protected $keyType = "string";
    protected $fillable = ["kode", "nama"];

    public $timestamps = false;

    public function mahasiswa() {
        return $this->hasMany("App\Mahasiswa", "dosen_wali");
    }
}
