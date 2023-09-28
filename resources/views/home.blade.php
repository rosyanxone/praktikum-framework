<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="icon" type="image/png" href="{{ asset('assets/images/logo-informatika.png') }}">

        <title>Informatika - Universitas Mulawarman</title>
        @vite('resources/css/app.css')
    </head>
    <body>
        {{-- Navigation Bar --}}
        <nav class="flex flex-row p-8 justify-between items-center bg-white z-10 sticky top-0">
            <a href="#" class="basis-1/4">
                <img src="{{ asset('assets/images/logo-informatika-full.png') }}" alt="Logo Informatika" class="w-fit h-12">
            </a>
            <ul class="flex flex-row gap-12 justify-center basis-1/2">
                <li><a href="#">Tentang</a></li>
                <li><a href="#">Akademik</a></li>
                <li><a href="#">Kampus</a></li>
                <li><a href="#">Riset</a></li>
                <li><a href="#">Berita & Acara</a></li>
            </ul>
            <div class="basis-1/4 flex justify-end">
                <a href="" class="group relative bg-blue-900 px-8 py-4 w-36 rounded-lg font-bold flex justify-center gap-4 hover:scale-105 group/expand-hover:px-10 hover:bg-blue-800 transition ease-in">
                    <p class="invisible">Portal</p>
                    <p class="absolute text-white group-hover:-translate-x-[40%] transition ease-out">Portal</p>
                    <span class="absolute invisible group-hover:visible group-hover:inline-block group-hover:translate-x-[150%] transition ease-out ">
                        <svg class="fill-white" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="M647-440H200q-17 0-28.5-11.5T160-480q0-17 11.5-28.5T200-520h447L451-716q-12-12-11.5-28t12.5-28q12-11 28-11.5t28 11.5l264 264q6 6 8.5 13t2.5 15q0 8-2.5 15t-8.5 13L508-188q-11 11-27.5 11T452-188q-12-12-12-28.5t12-28.5l195-195Z"/></svg>
                    </span>
                </a>
            </div>
        </nav>

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
            <div class="h-1/3 bg-blue-900 flex justify-center items-center">
                <div class="h-1/3 flex  gap-4">
                    <h3 class="text-white text-5xl font-bold">Terakreditasi B</h3>
                    <svg class="h-full" xmlns="http://www.w3.org/2000/svg" fill="#FFFFFF" viewBox="0 -960 960 960"><path d="m438-452-58-57q-11-11-27.5-11T324-508q-11 11-11 28t11 28l86 86q12 12 28 12t28-12l170-170q12-12 11.5-28T636-592q-12-12-28.5-12.5T579-593L438-452ZM326-90l-58-98-110-24q-15-3-24-15.5t-7-27.5l11-113-75-86q-10-11-10-26t10-26l75-86-11-113q-2-15 7-27.5t24-15.5l110-24 58-98q8-13 22-17.5t28 1.5l104 44 104-44q14-6 28-1.5t22 17.5l58 98 110 24q15 3 24 15.5t7 27.5l-11 113 75 86q10 11 10 26t-10 26l-75 86 11 113q2 15-7 27.5T802-212l-110 24-58 98q-8 13-22 17.5T584-74l-104-44-104 44q-14 6-28 1.5T326-90Zm52-72 102-44 104 44 56-96 110-26-10-112 74-84-74-86 10-112-110-24-58-96-102 44-104-44-56 96-110 24 10 112-74 86 74 84-10 114 110 24 58 96Zm102-318Z" />
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
                    <img src="{{ asset('assets/images/ka-prodi.jpg') }}" alt="" class="w-1/3 h-full rounded-s-3xl object-cover">
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
                    <img src="{{ asset('assets/images/ka-prodi.jpg') }}" alt="" class="w-1/3 h-full rounded-s-3xl object-cover">
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
                    <img src="{{ asset('assets/images/ka-prodi.jpg') }}" alt="" class="w-1/3 h-full rounded-s-3xl object-cover">
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
        <section class="h-[500px] bg-white flex flex-col items-center overflow-hidden">
            <h2 class="h-2/5 text-4xl font-bold flex items-center">Kampus Merdeka</h2>
            <p>Coming Soon!</p>
        </section>

        {{-- Kegiatan --}}
        <section class="h-[500px] bg-white flex flex-col items-center overflow-hidden">
            <h2 class="h-2/5 text-4xl font-bold flex items-center">Kegiatan Mahasiswa</h2>
            <p>Coming Soon!</p>
        </section>

        {{-- Berita Terbaru --}}
        <section class="h-[500px] bg-white flex flex-col items-center overflow-hidden">
            <h2 class="h-2/5 text-4xl font-bold flex items-center">Berita Terkini</h2>
            <p>Coming Soon!</p>
        </section>

        {{-- Footer --}}
        <footer class="h-auto bg-slate-900 flex justify-center text-slate-600">
            <div class="container py-8 flex">
                {{-- Logo --}}
                <div class="basis-1/4 flex gap-4">
                    <img src="{{ asset('assets/images/logo-unmul.png') }}" alt="Logo Universitas Mulawarman" class="h-20">
                    <img src="{{ asset('assets/images/logo-informatika.png') }}" alt="Logo Program Studi Informatika" class="h-20">
                </div>
                {{-- Halaman Lain --}}
                <div class="basis-1/4 flex flex-col gap-1">
                    <h5 class="text-slate-300 font-medium pb-2">Halaman Lain</h5>
                    <a href="#" class="p-2 mr-16 rounded-lg hover:bg-slate-800 hover:text-white transition ease-in">Beranda</a>
                    <a href="#" class="p-2 mr-16 rounded-lg hover:bg-slate-800 hover:text-white transition ease-in">Tentang</a>
                    <a href="#" class="p-2 mr-16 rounded-lg hover:bg-slate-800 hover:text-white transition ease-in">Akademik</a>
                    <a href="#" class="p-2 mr-16 rounded-lg hover:bg-slate-800 hover:text-white transition ease-in">Kampus</a>
                    <a href="#" class="p-2 mr-16 rounded-lg hover:bg-slate-800 hover:text-white transition ease-in">Riset</a>
                    <a href="#" class="p-2 mr-16 rounded-lg hover:bg-slate-800 hover:text-white transition ease-in">Berita & Acara</a>
                </div>
                {{-- Kontak dan Lokasi --}}
                <div class="basis-1/4 flex flex-col gap-1">
                    <h5 class="text-slate-300 font-medium pb-2">Lokasi & Kontak</h5>
                    <div class="bg-slate-500 h-36 mr-16 rounded-lg mb-2"></div>
                    <a href="#" class="group flex gap-2 p-2 mr-16 rounded-lg hover:bg-slate-800 hover:text-white transition ease-in">
                        <svg class="fill-slate-800 group-hover:fill-slate-300 transition ease-in" sxmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="M160-160q-33 0-56.5-23.5T80-240v-480q0-33 23.5-56.5T160-800h640q33 0 56.5 23.5T880-720v480q0 33-23.5 56.5T800-160H160Zm640-480L501-453q-5 3-10.5 4.5T480-447q-5 0-10.5-1.5T459-453L160-640v400h640v-400ZM480-520l320-200H160l320 200ZM160-640v10-59 1-32 32-.5 58.5-10 400-400Z"/></svg>
                        <p>informatika@ft.unmul.ac.id</p>
                    </a>
                    <a href="#" class="group flex gap-2 p-2 mr-16 rounded-lg hover:bg-slate-800 hover:text-white transition ease-in">
                        <svg class="fill-slate-800 group-hover:fill-slate-300 transition ease-in" sxmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 496 512"><path d="M248,8C111.033,8,0,119.033,0,256S111.033,504,248,504,496,392.967,496,256,384.967,8,248,8ZM362.952,176.66c-3.732,39.215-19.881,134.378-28.1,178.3-3.476,18.584-10.322,24.816-16.948,25.425-14.4,1.326-25.338-9.517-39.287-18.661-21.827-14.308-34.158-23.215-55.346-37.177-24.485-16.135-8.612-25,5.342-39.5,3.652-3.793,67.107-61.51,68.335-66.746.153-.655.3-3.1-1.154-4.384s-3.59-.849-5.135-.5q-3.283.746-104.608,69.142-14.845,10.194-26.894,9.934c-8.855-.191-25.888-5.006-38.551-9.123-15.531-5.048-27.875-7.717-26.8-16.291q.84-6.7,18.45-13.7,108.446-47.248,144.628-62.3c68.872-28.647,83.183-33.623,92.511-33.789,2.052-.034,6.639.474,9.61,2.885a10.452,10.452,0,0,1,3.53,6.716A43.765,43.765,0,0,1,362.952,176.66Z"/></svg>
                        <p>+62 812 3456 7890</p>
                    </a>
                </div>
                {{-- Sosial Media --}}
                <div class="basis-1/4 flex flex-col gap-1">
                    <h5 class="text-slate-300 font-medium mb-2">Sosial Media</h5>
                    <div class="flex flex-row">
                        <a href="#" class="group p-4 rounded-full hover:bg-slate-800 transition ease-in">
                            <svg class="fill-slate-700 group-hover:fill-slate-300 transition ease-in" sxmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 0 448 512"><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg>
                        </a>
                        <a href="#" class="group p-4 rounded-full hover:bg-slate-800 transition ease-in">
                            <svg class="fill-slate-700 group-hover:fill-slate-300 transition ease-in" xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 0 576 512"><path d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"/></svg>
                        </a>
                    </div>


                </div>
            </div>
        </footer>
        {{-- Copyright --}}
        <p class="p-4 bg-black text-center text-white">© 2023 Informatika | Universitas Mulawarman</p>
    </body>
</html>
