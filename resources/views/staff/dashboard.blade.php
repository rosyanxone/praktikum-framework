@extends('layouts.global')
@section('title')
Dashboard - Staff
@endsection

@section('content')
<div class="w-full h-full flex">
    @include('components.sidebar')
    <div class="w-full h-screen flex gap-4 flex-col bg-slate-100">
        @include('components.header', ['nama' => 'Tegar', 'gambar' => 'https://avatars.githubusercontent.com/tegarfn'])

        <div class="w-auto h-[400px] mx-4 gap-4 flex">
            <div class="basis-1/3 h-full p-8 bg-white rounded-lg drop-shadow-md">
                <p class="text-xl font-bold">Data Mahasiswa</p>
            </div>
            <div class="basis-1/3 h-full p-8 bg-white rounded-lg drop-shadow-md">
                <p class="text-xl font-bold">Data Kelas</p>
            </div>
            <div class="basis-1/3 h-full p-8 bg-white rounded-lg drop-shadow-md">
                <p class="text-xl font-bold">Data Kelas</p>
            </div>
        </div>
        <div class="h-full mx-4 p-8 bg-white rounded-lg drop-shadow-md">
            <p class="text-xl font-bold">Pesan Terbaru</p>
        </div>
        <div class="h-full mx-4 p-8 bg-white rounded-lg drop-shadow-md">
            <p class="text-xl font-bold">Aktivitas Terbaru</p>
        </div>
    </div>
</div>
@endsection
