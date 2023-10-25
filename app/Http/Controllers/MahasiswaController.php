<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function tambah(){
        return view('staff.crud.add', [
            'dosens' => Dosen::all()
        ]);
    }

    public function store(Request $request){
        // Validate Input
        $validateData = $request->validate([
            'nim' => 'required|string|max:20',
            'nama' => 'required|string',
            'kelas' => 'required|string',
            'angkatan' => 'required|integer',
            'dosen_id' => 'required'
        ]);


        Mahasiswa::create($validateData);
        
        return redirect()->route('staff.mahasiswa')->with('success','Mahasiswa Berhasil Ditambahkan');
    }
}
