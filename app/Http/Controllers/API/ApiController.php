<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getMahasiswa()
    {
        $mahasiswa = Mahasiswa::with('dosen')->get();

        $response = [
            'status' => 'success',
            'message' => 'Data Berhasil Diambil',
            'data' => $mahasiswa
        ];
        return response()->json($response);
    }

    public function createMahasiswa(Request $request)
    {

        $validateData = $request->validate([
            'nim' => 'required|string|max:20',
            'nama' => 'required|string',
            'kelas' => 'required|string',
            'angkatan' => 'required|integer',
            'dosen_id' => 'required'
        ]);


        $mahasiswa = Mahasiswa::create($validateData);

        $respon = [
            'status' => 'success',
            'message' => 'Data Berhasil ditambah',
            'data' => $mahasiswa,
        ];
        return response()->json($respon);
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
        $respon = [
            'status' => 'success',
            'message' => 'Data Berhasil Diubah',
            'data' => $mahasiswa,
        ];
        return response()->json($respon);
    }

    public function destroy(Request $request){
        $id = $request->id;
        $mahasiswa = Mahasiswa::findOrFail($id);
        $mahasiswa->delete();
        $respon = [
            'status' => 'success',
            'message' => 'Data Berhasil dihapus',
        ];
        return response()->json($respon);
    }
}
