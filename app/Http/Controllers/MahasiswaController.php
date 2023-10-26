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
        
        return redirect()->route('staff.mahasiswa')->with('success','Data Mahasiswa Berhasil Ditambahkan');
    }

    public function edit($id){
        return view('staff.crud.edit',[
            'mahasiswas' => Mahasiswa::all()->where('id', $id)->first(),
            'dosens' => Dosen::all(),
        ]);
    }

    public function update(Request $request, $id){
        $request->validate([
            'nim' => 'required|string|max:20',
            'nama' => 'required|string',
            'kelas' => 'required|string',
            'angkatan' => 'required|integer',
            'dosen_id' => 'required'
        ]);

        $mahasiswa = Mahasiswa::findOrFail($id);
        $mahasiswa->update([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'angkatan' => $request->angkatan,
            'dosen_id' => $request->dosen_id,
        ]);
        return redirect()->route('staff.mahasiswa')->with('success','Data Mahasiswa Berhasil Diubah');
    }

    public function delete($id){
        $mahasiswa = Mahasiswa::findOrFail($id);
        $mahasiswa->delete();
        return redirect()->route('staff.mahasiswa')->with('success','Data Mahasiswa Berhasil Dihapus');
    }
}
