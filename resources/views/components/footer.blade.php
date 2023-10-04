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
<p class="p-4 bg-black text-center text-white">© 2023 Informatika | Universitas Mulawarman</p>
