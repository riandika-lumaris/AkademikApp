<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;
use App\Dosen;

class AkademikController extends Controller
{
    public function master_mhs() {
        $mahasiswa = Mahasiswa::all();
        $dosen = Dosen::all();
        return view("master.mhs", [
            "mahasiswa" => $mahasiswa,
            "dosen" => $dosen
        ]);
    }

    public function search_mhs($nrp) {
        $mahasiswa = Mahasiswa::find($nrp);
        echo "NRP: " . $mahasiswa->nrp . "<br />";
        echo "Nama: " . $mahasiswa->nama . "<br />";
    }

    public function insert_mhs(Request $request) {
        // $mahasiswa = new Mahasiswa();
        // $mahasiswa->nrp = $request->nrp;
        // $mahasiswa->nama = $request->nama;
        // $mahasiswa->dosen_wali = $request->dosen_wali;

        // $mahasiswa->save();

        // Mahasiswa::create([
        //     "nrp" => $request->nrp,
        //     "nama" => $request->nama,
        //     "dosen_wali" => $request->dosen_wali
        // ]);

        $dosen = Dosen::find($request->dosen_wali);
        $dosen->mahasiswa()->create([
            "nrp" => $request->nrp,
            "nama" => $request->nama,
        ]);

        return redirect("/master_mhs");
    }
}
