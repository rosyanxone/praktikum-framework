@extends('layouts.global')
@section('title')
Pesan - Staff
@endsection

@section('content')
<div class="w-full h-full flex">
    @include('components.sidebar')
    <div class="w-full h-screen flex flex-col bg-slate-100">
        @include('components.header', ['nama' => 'Tegar', 'gambar' => 'assets/images/ka-prodi.jpg'])

    </div>
</div>
@endsection
