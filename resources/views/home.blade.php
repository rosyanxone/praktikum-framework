@extends('layouts.global')

@section('title')
Beranda - Informatika | Universitas Mulawarman
@endsection

@section('content')
@include('components.navigation-bar')
{{-- Hero --}}
<section class="h-[700px] relative">
    <img src="{{ asset('assets/images/gedung-baru-teknik.jpg') }}" alt="Kampus Informatika" class="absolute w-full h-full object-cover -z-10 brightness-50">
    <div class="h-full flex flex-col place-content-center text-center text-white">
        <h1 class="font-bold text-5xl">PUSAT STUDI KOMPUTER DAN INFORMATIKA</h1><br>
        <p class="text-2xl">Program Studi Informatika | Universitas Mulawarman</p>
    </div>
</section>

{{-- Tentang Informatika --}}
<section class="h-[400px] bg-gradient-to-tr from-blue-800 to-blue-950">
    <div class="container flex flex-row m-auto h-full p-8 gap-48 items-center">
        <div class="flex flex-col text-white">
            <h2 class="font-bold text-3xl">Tentang Program Studi Informatika</h2><br>
            <p class="text-justify">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae velit
                necessitatibus incidunt unde officia iure facere voluptates praesentium hic enim doloremque
                voluptatum repellat laborum obcaecati dolorum voluptate neque quos, officiis dicta impedit accusamus
                pariatur error voluptatibus vel. Eum ex, minima, beatae consectetur doloribus dolorum eaque,
                temporibus nisi amet dolores quasi.</p>
        </div>
        <img src="{{ asset('assets/images/logo-informatika-white.png') }}" alt="Logo Informatika" class="h-[200px]">
    </div>
</section>

{{-- Kaprodi --}}
<section class="h-[500px] bg-white">
    <div class="container flex flex-row m-auto h-full p-8 gap-24 items-center">
        <img src="{{ asset('assets/images/ka-prodi.jpg') }}" alt="Gambar Kepala Program Studi"class="h-[300px] rounded-lg">
        <div class="flex flex-col my-auto">
            <h2 class="font-bold text-3xl">Kepala Program Studi Informatika</h2>
            <h3 class="font-semibold text-2xl">Indah Fitri Astuti, S.Kom., M.Cs.</h3><br>
            <p class="text-justify">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iure reprehenderit
                ipsa culpa itaque vel et repellat amet cumque architecto cum magnam fugiat corrupti, fuga sapiente,
                assumenda doloribus maiores quae quos blanditiis eaque, tenetur distinctio! Nisi vero, incidunt,
                omnis voluptate in eum itaque perferendis modi repudiandae quam quis aliquam hic recusandae.</p>
        </div>
    </div>
</section>

{{-- Data Statistik --}}
<section class="h-[400px] flex flex-col">
    <div class="h-1/3 py-8 bg-blue-900 flex justify-center items-center">
        <div class="h-full flex gap-4 items-center">
            <h3 class="text-white text-5xl font-bold align-middle">Terakreditasi B</h3>
            <svg class="h-full" xmlns="http://www.w3.org/2000/svg" fill="#FFFFFF" viewBox="0 -960 960 960">
                <path d="m438-452-58-57q-11-11-27.5-11T324-508q-11 11-11 28t11 28l86 86q12 12 28 12t28-12l170-170q12-12 11.5-28T636-592q-12-12-28.5-12.5T579-593L438-452ZM326-90l-58-98-110-24q-15-3-24-15.5t-7-27.5l11-113-75-86q-10-11-10-26t10-26l75-86-11-113q-2-15 7-27.5t24-15.5l110-24 58-98q8-13 22-17.5t28 1.5l104 44 104-44q14-6 28-1.5t22 17.5l58 98 110 24q15 3 24 15.5t7 27.5l-11 113 75 86q10 11 10 26t-10 26l-75 86 11 113q2 15-7 27.5T802-212l-110 24-58 98q-8 13-22 17.5T584-74l-104-44-104 44q-14 6-28 1.5T326-90Zm52-72 102-44 104 44 56-96 110-26-10-112 74-84-74-86 10-112-110-24-58-96-102 44-104-44-56 96-110 24 10 112-74 86 74 84-10 114 110 24 58 96Zm102-318Z" />
            </svg>
        </div>
    </div>
    <div class="h h-2/3 flex flex-row">
        {{-- Mahasiswa --}}
        <div class="basis-1/4 bg-blue-700 relative flex justify-center items-center">
            <svg class="h-full w-full opacity-20 absolute" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 -960 960 960">
                <path d="M40-240q-17 0-28.5-11.5T0-280v-23q0-44 44-70.5T160-400q13 0 24.5 1t22.5 3q-14 20-20.5 43t-6.5 49v64H40Zm240 0q-17 0-28.5-11.5T240-280v-24q0-65 66.5-105.5T480-450q108 0 174 40.5T720-304v24q0 17-11.5 28.5T680-240H280Zm500 0v-64q0-26-7-49t-20-43q11-2 22.5-3t24.5-1q72 0 116 26.5t44 70.5v23q0 17-11.5 28.5T920-240H780ZM480-370q-57 0-102 15.5T325-320h310q-9-20-53.5-35T480-370Zm-320-70q-33 0-56.5-23.5T80-520q0-33 23.5-56.5T160-600q33 0 56.5 23.5T240-520q0 33-23.5 56.5T160-440Zm640 0q-33 0-56.5-23.5T720-520q0-33 23.5-56.5T800-600q33 0 56.5 23.5T880-520q0 33-23.5 56.5T800-440Zm-320-40q-50 0-85-35t-35-85q0-50 35-85t85-35q50 0 85 35t35 85q0 50-35 85t-85 35Zm0-160q-17 0-28.5 11.5T440-600q0 17 11.5 28.5T480-560q17 0 28.5-11.5T520-600q0-17-11.5-28.5T480-640Zm0 320Zm0-280Z" />
            </svg>
            <div class="flex flex-col justify-center items-center w-full h-full text-white absolute">
                <p class="text-6xl font-extrabold">1000+</p><br>
                <h3 class="text-2xl font-medium">Mahasiswa</h3>
            </div>
        </div>

        {{-- Dosen & Staff --}}
        <div class="basis-1/4 bg-blue-800 relative flex justify-center items-center">
            <svg class="h-4/5 w-full opacity-20 absolute" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 -960 960 960">
                <path d="M40-272q0-34 17.5-62.5T104-378q62-31 126-46.5T360-440q66 0 130 15.5T616-378q29 15 46.5 43.5T680-272v32q0 33-23.5 56.5T600-160H120q-33 0-56.5-23.5T40-240v-32Zm800 112H738q11-18 16.5-38.5T760-240v-40q0-44-24.5-84.5T666-434q51 6 96 20.5t84 35.5q36 20 55 44.5t19 53.5v40q0 33-23.5 56.5T840-160ZM360-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47Zm400-160q0 66-47 113t-113 47q-11 0-28-2.5t-28-5.5q27-32 41.5-71t14.5-81q0-42-14.5-81T544-792q14-5 28-6.5t28-1.5q66 0 113 47t47 113ZM120-240h480v-32q0-11-5.5-20T580-306q-54-27-109-40.5T360-360q-56 0-111 13.5T140-306q-9 5-14.5 14t-5.5 20v32Zm240-320q33 0 56.5-23.5T440-640q0-33-23.5-56.5T360-720q-33 0-56.5 23.5T280-640q0 33 23.5 56.5T360-560Zm0 320Zm0-400Z" />
            </svg>
            <div class="flex flex-col justify-center items-center w-full h-full text-white absolute">
                <p class="text-6xl font-extrabold">100+</p><br>
                <h3 class="text-2xl font-medium">Dosen & Staff</h3>
            </div>
        </div>

        {{-- Mata Kuliah Pilihan --}}
        <div class="basis-1/4 bg-blue-700 relative flex justify-center items-center">
            <svg class="h-4/5 w-full opacity-20 absolute" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 -960 960 960">
                <path d="M240-80q-33 0-56.5-23.5T160-160v-640q0-33 23.5-56.5T240-880h480q33 0 56.5 23.5T800-800v640q0 33-23.5 56.5T720-80H240Zm0-80h480v-640h-80v245q0 12-10 17.5t-20-.5l-49-30q-10-6-20.5-6t-20.5 6l-49 30q-10 6-20.5.5T440-555v-245H240v640Zm0 0v-640 640Zm200-395q0 12 10.5 17.5t20.5-.5l49-30q10-6 20.5-6t20.5 6l49 30q10 6 20 .5t10-17.5q0 12-10 17.5t-20-.5l-49-30q-10-6-20.5-6t-20.5 6l-49 30q-10 6-20.5.5T440-555Z" />
            </svg>
            <div class="flex flex-col justify-center items-center w-full h-full text-white absolute">
                <p class="text-6xl font-extrabold">50+</p><br>
                <h3 class="text-2xl font-medium">Mata Kuliah Pilihan</h3>
            </div>
        </div>

        {{-- Alumni --}}
        <div class="basis-1/4 bg-blue-800 relative flex justify-center items-center">
            <svg class="h-4/5 w-full opacity-20 absolute" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 -960 960 960">
                <path d="M242-249q-20-11-31-29.5T200-320v-192l-96-53q-11-6-16-15t-5-20q0-11 5-20t16-15l338-184q9-5 18.5-7.5T480-829q10 0 19.5 2.5T518-819l381 208q10 5 15.5 14.5T920-576v256q0 17-11.5 28.5T880-280q-17 0-28.5-11.5T840-320v-236l-80 44v192q0 23-11 41.5T718-249L518-141q-9 5-18.5 7.5T480-131q-10 0-19.5-2.5T442-141L242-249Zm238-203 274-148-274-148-274 148 274 148Zm0 241 200-108v-151l-161 89q-9 5-19 7.5t-20 2.5q-10 0-20-2.5t-19-7.5l-161-89v151l200 108Zm0-241Zm0 121Zm0 0Z" />
            </svg>
            <div class="flex flex-col justify-center items-center w-full h-full text-white absolute">
                <p class="text-6xl font-extrabold">5000+</p><br>
                <h3 class="text-2xl font-medium">Alumni</h3>
            </div>
        </div>
    </div>
</section>

{{-- Riset Terbaru --}}
<section class="h-[600px] bg-white flex flex-col items-center">
    <h2 class="h-1/5 text-4xl font-bold flex items-center">Riset Terbaru</h2>
    <div class="container h-3/5 gap-8 grid grid-cols-3">
        {{-- card 1 --}}
        <div class="h-64 w-auto flex bg-white rounded-3xl drop-shadow-lg">
            <img src="https://avatars.githubusercontent.com/Nizares" alt="" class="w-1/3 h-full rounded-s-3xl object-cover">
            <div class="w-2/3 flex flex-col p-8 justify-between divide-y">
                <div>
                    <h4 class="truncate font-bold text-2xl">Identifikasi Kematangan Tempe menggunakan Convolutional
                        Neural Network (CNN)</h4>
                    <p class="font-medium text-lg">Tegar Fitrah Naba Atthoriq</p>
                </div>
                <p><br>
                    Seminar Proposal<br>
                    Selasa, 28 November 2023<br>
                    D210
                </p>
            </div>
        </div>

        {{-- card 2 --}}
        <div class="h-64 w-auto flex bg-white rounded-3xl drop-shadow-lg">
            <img src="https://avatars.githubusercontent.com/FerryFn" alt="" class="w-1/3 h-full rounded-s-3xl object-cover">
            <div class="w-2/3 flex flex-col p-8 justify-between divide-y">
                <div>
                    <h4 class="truncate font-bold text-2xl">Identifikasi Kematangan Tempe menggunakan Convolutional
                        Neural Network (CNN)</h4>
                    <p class="font-medium text-lg">Tegar Fitrah Naba Atthoriq</p>
                </div>
                <p><br>
                    Seminar Proposal<br>
                    Selasa, 28 November 2023<br>
                    D210
                </p>
            </div>
        </div>

        {{-- card 3 --}}
        <div class="h-64 w-auto flex bg-white rounded-3xl drop-shadow-lg">
            <img src="https://avatars.githubusercontent.com/tegarfn" alt="" class="w-1/3 h-full rounded-s-3xl object-cover">
            <div class="w-2/3 flex flex-col p-8 justify-between divide-y">
                <div>
                    <h4 class="truncate font-bold text-2xl">Identifikasi Kematangan Tempe menggunakan Convolutional
                        Neural Network (CNN)</h4>
                    <p class="font-medium text-lg">Tegar Fitrah Naba Atthoriq</p>
                </div>
                <p><br>
                    Seminar Proposal<br>
                    Selasa, 28 November 2023<br>
                    D210
                </p>
            </div>
        </div>
    </div>
    <div class="h-1/5 flex justify-center">
        <a href="#" class="group h-fit px-8 py-4 border-2 border-blue-900 flex gap-4 rounded-lg hover:bg-blue-900 transition ease-in">
            <p class="font-medium group-hover:text-white transition ease-in">Lihat Riset Lainnya</p>
            <svg class="group-hover:fill-white transition ease-in" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="M647-440H200q-17 0-28.5-11.5T160-480q0-17 11.5-28.5T200-520h447L451-716q-12-12-11.5-28t12.5-28q12-11 28-11.5t28 11.5l264 264q6 6 8.5 13t2.5 15q0 8-2.5 15t-8.5 13L508-188q-11 11-27.5 11T452-188q-12-12-12-28.5t12-28.5l195-195Z"/></svg>
        </a>
    </div>
</section>

{{-- Partner & Kerjasama --}}
<section class="h-[500px] bg-gradient-to-br from-cyan-600 to-blue-800 flex flex-col items-center overflow-hidden">
    <h2 class="h-2/5 text-4xl font-bold text-white flex items-center">Kemitraan & Kerjasama</h2>
    <div class="w-full h-2/5 flex items-center">
        <div class="py-12 space-x-4">
            <div class="w-[calc(350px*16)] flex animate-scroll">
                <div class="w-[350px] h-[150px] mx-4 p-16 bg-white rounded-lg flex items-center justify-center ">
                    <img src="{{ asset('assets/images/google.svg') }}" alt="" class="object-contain">
                </div>
                <div class="w-[350px] h-[150px] mx-4 p-12 bg-white rounded-lg flex items-center justify-center ">
                    <img src="{{ asset('assets/images/kemenkominfo.jpg') }}" alt="" class="object-cover">
                </div>
                <div class="w-[350px] h-[150px] mx-4 bg-white rounded-lg flex items-center justify-center ">
                    <img src="{{ asset('assets/images/mikrotik.png') }}" alt="" class="object-contain">
                </div>
                <div class="w-[350px] h-[150px] mx-4 p-4 bg-white rounded-lg flex items-center justify-center ">
                    <img src="{{ asset('assets/images/huawei.webp') }}" alt="" class=" h-full object-contain">
                </div>
                <div class="w-[350px] h-[150px] mx-4 p-16 bg-white rounded-lg flex items-center justify-center ">
                    <img src="{{ asset('assets/images/oracle.png') }}" alt="" class="object-contain">
                </div>
                <div class="w-[350px] h-[150px] mx-4 p-16 bg-white rounded-lg flex items-center justify-center ">
                    <img src="{{ asset('assets/images/cisco.png') }}" alt="" class="object-contain">
                </div>
                <div class="w-[350px] h-[150px] mx-4 p-8 bg-white rounded-lg flex items-center justify-center ">
                    <img src="{{ asset('assets/images/agate.png') }}" alt="" class="object-contain">
                </div>
                <div class="w-[350px] h-[150px] mx-4 p-16 bg-white rounded-lg flex items-center justify-center ">
                    <img src="{{ asset('assets/images/telkom.png') }}" alt="" class="object-cover">
                </div>

                <div class="w-[350px] h-[150px] mx-4 p-16 bg-white rounded-lg flex items-center justify-center ">
                    <img src="{{ asset('assets/images/google.svg') }}" alt="" class="object-contain">
                </div>
                <div class="w-[350px] h-[150px] mx-4 p-12 bg-white rounded-lg flex items-center justify-center ">
                    <img src="{{ asset('assets/images/kemenkominfo.jpg') }}" alt="" class="object-cover">
                </div>
                <div class="w-[350px] h-[150px] mx-4 bg-white rounded-lg flex items-center justify-center ">
                    <img src="{{ asset('assets/images/mikrotik.png') }}" alt="" class="object-contain">
                </div>
                <div class="w-[350px] h-[150px] mx-4 p-4 bg-white rounded-lg flex items-center justify-center ">
                    <img src="{{ asset('assets/images/huawei.webp') }}" alt="" class=" h-full object-contain">
                </div>
                <div class="w-[350px] h-[150px] mx-4 p-16 bg-white rounded-lg flex items-center justify-center ">
                    <img src="{{ asset('assets/images/oracle.png') }}" alt="" class="object-contain">
                </div>
                <div class="w-[350px] h-[150px] mx-4 p-16 bg-white rounded-lg flex items-center justify-center ">
                    <img src="{{ asset('assets/images/cisco.png') }}" alt="" class="object-contain">
                </div>
                <div class="w-[350px] h-[150px] mx-4 p-8 bg-white rounded-lg flex items-center justify-center ">
                    <img src="{{ asset('assets/images/agate.png') }}" alt="" class="object-contain">
                </div>
                <div class="w-[350px] h-[150px] mx-4 p-16 bg-white rounded-lg flex items-center justify-center ">
                    <img src="{{ asset('assets/images/telkom.png') }}" alt="" class="object-cover">
                </div>
            </div>
        </div>
    </div>
</section>

{{-- MBKM --}}
<section class="h-[800px] flex items-center overflow-hidden my-16">
    <div class="basis-1/3 h-full px-24 py-16 bg-gradient-to-tr from-blue-950 to-blue-800 overflow-hidden relative flex flex-col justify-center items-center">
        <img src="{{ asset('assets/images/kampus-merdeka-white.png') }}" alt="" class="basis-1/2 object-contain">
        <div class="basis-1/2 flex items-center">
            <p class="text-justify text-xl font-medium text-white">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Temporibus harum fugit est suscipit repellat minima veritatis qui labore!</p>
        </div>
    </div>
    <div class="basis-2/3 h-full flex flex-col">
        <div class="basis-1/2 w-full flex">
            <div class="basis-1/3 h-full bg-blue-950 overflow-hidden relative flex justify-center items-center">
                <img src="{{ asset('assets/images/gedung-baru-teknik.jpg') }}" alt="" class="h-full w-full absolute object-cover hover:scale-110 brightness-50 transition ease-in">
                <div class="absolute">
                    <h2 class="font-bold text-2xl text-white pb-2">Studi Independen</h2><hr>
                </div>
            </div>
            <div class="basis-1/3 h-full bg-blue-950 overflow-hidden relative flex justify-center items-center">
                <img src="{{ asset('assets/images/gedung-baru-teknik.jpg') }}" alt="" class="h-full w-full absolute object-cover hover:scale-110 brightness-50 transition ease-in">
                <div class="absolute">
                    <h2 class="font-bold text-2xl text-white pb-2">Magang</h2><hr>
                </div>
            </div>
            <div class="basis-1/3 h-full bg-blue-950 overflow-hidden relative flex justify-center items-center">
                <img src="{{ asset('assets/images/gedung-baru-teknik.jpg') }}" alt="" class="h-full w-full absolute object-cover hover:scale-110 brightness-50 transition ease-in">
                <div class="absolute">
                    <h2 class="font-bold text-2xl text-white pb-2 text-center">Pertukaran Mahasiswa<br>Merdeka</h2><hr>
                </div>
            </div>
        </div>
        <div class="basis-1/2 w-full flex">
            <div class="basis-1/3 h-full bg-blue-950 overflow-hidden relative flex justify-center items-center">
                <img src="{{ asset('assets/images/gedung-baru-teknik.jpg') }}" alt="" class="h-full w-full absolute object-cover hover:scale-110 brightness-50 transition ease-in">
                <div class="absolute">
                    <h2 class="font-bold text-2xl text-white pb-2">Kedaireka</h2><hr>
                </div>
            </div>
            <div class="basis-1/3 h-full bg-blue-950 overflow-hidden relative flex justify-center items-center">
                <img src="{{ asset('assets/images/gedung-baru-teknik.jpg') }}" alt="" class="h-full w-full absolute object-cover hover:scale-110 brightness-50 transition ease-in">
                <div class="absolute">
                    <h2 class="font-bold text-2xl text-white pb-2">Bangkit Academy</h2><hr>
                </div>
            </div>
            <div class="basis-1/3 w-full bg-gradient-to-r from-sky-700 to-blue-800 flex justify-center items-center">
                <h2 class="font-bold text-2xl text-white pb-2 mr-4">Lainnya</h2>
                <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24" fill="white"><path d="M647-440H200q-17 0-28.5-11.5T160-480q0-17 11.5-28.5T200-520h447L451-716q-12-12-11.5-28t12.5-28q12-11 28-11.5t28 11.5l264 264q6 6 8.5 13t2.5 15q0 8-2.5 15t-8.5 13L508-188q-11 11-27.5 11T452-188q-12-12-12-28.5t12-28.5l195-195Z"/></svg>
            </div>
        </div>
    </div>
</section>

{{-- Kegiatan --}}
<section class="h-[800px] bg-slate-300 flex items-center overflow-hidden">
    <div class="basis-1/2 h-full flex flex-col">
        <div class="basis-1/2 w-full flex">
            <div class="basis-1/2 w-full px-8 bg-blue-900 flex flex-col justify-center">
                <h2 class="font-bold text-2xl text-white pb-2">Praktikum</h2>
                <hr><br>
                <p class="text-lg text-white text-justify">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magni ex laborum eaque dolor voluptatibus provident?</p>
            </div>
            <div class="basis-1/2 w-full overflow-hidden">
                <img src="{{ asset('assets/images/gedung-baru-teknik.jpg') }}" class="h-full object-cover hover:scale-110 transition ease-in">
            </div>
        </div>
        <div class="basis-1/2 w-full flex">
            <div class="basis-1/2 w-full overflow-hidden">
                <img src="{{ asset('assets/images/gedung-baru-teknik.jpg') }}" class="h-full object-cover hover:scale-110 transition ease-in">
            </div>
            <div class="basis-1/2 w-full px-8 bg-blue-900 flex flex-col justify-center">
                <h2 class="font-bold text-2xl text-white pb-2">Study Club</h2>
                <hr><br>
                <p class="text-lg text-white text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum corrupti voluptates quo.</p>
            </div>
        </div>
    </div>
    <div class="group basis-1/2 h-full bg-blue-950 overflow-hidden relative flex justify-center items-center">
        <img src="{{ asset('assets/images/gedung-baru-teknik.jpg') }}" alt="" class="h-full w-full absolute object-cover group-hover:scale-105 group-hover:brightness-75 transition ease-in">
        <div class="absolute hidden group-hover:block">
            <h2 class="font-bold text-4xl text-white pb-2">Kegiatan Mahasiswa</h2><hr>
        </div>
    </div>
</section>

{{-- Berita Terbaru --}}
<section class="h-[500px] bg-white flex flex-col items-center overflow-hidden">
    <h2 class="h-2/5 text-4xl font-bold flex items-center">Berita Terkini</h2>
    <p class="text-slate-400">Tidak ada berita</p>
</section>
@include('components.footer')
@endsection
