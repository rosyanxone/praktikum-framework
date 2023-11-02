<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use GuzzleHttp\Client;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MahasiswaController extends Controller
{
    public function index(){
        $endpoint = env('BASE_ENV').'/api/staff/data/mahasiswa';

        $client = new Client();

        $response = $client->request('GET', $endpoint);
        $data = json_decode($response->getBody(), true);

        return view('staff.mahasiswa',[
            'mahasiswa'=>$data
        ]);
        
    }
    public function tambah(){
        return view('staff.crud.add', [
            'dosens' => Dosen::all()
        ]);
    }
    public function storetoAPI(Request $request){

        $endpoint = env('BASE_ENV').'/api/staff/data/mahasiswa/tambah';

        // Validate Input
        $validateData = $request->validate([
            'nim' => 'required|string|max:20',
            'nama' => 'required|string',
            'kelas' => 'required|string',
            'angkatan' => 'required|integer',
            'dosen_id' => 'required'
        ]);

        Http::asForm()->post($endpoint,$validateData); 

        return redirect()->route('staff.mahasiswa')->with('success','Data Mahasiswa Berhasil Ditambahkan');
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
        $endpoint = env('BASE_ENV').'/api/staff/data/mahasiswa/edit';

        $validateData = $request->validate([
            'nim' => 'required|string|max:20',
            'nama' => 'required|string',
            'kelas' => 'required|string',
            'angkatan' => 'required|integer',
            'dosen_id' => 'required',
            'id'=>$id
        ]);

        Http::asForm()->post($endpoint,$validateData); 


        return redirect()->route('staff.mahasiswa')->with('success','Data Mahasiswa Berhasil Diubah');
    }

    public function delete($id){
        $endpoint = env('BASE_ENV').'/api/staff/data/mahasiswa/hapus';

        Http::asForm()->post($endpoint,['id'=>$id]); 

        return redirect()->route('staff.mahasiswa')->with('success','Data Mahasiswa Berhasil Dihapus');
    }
}
