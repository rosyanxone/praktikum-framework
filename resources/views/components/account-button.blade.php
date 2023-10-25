<div class="relative">
    <button onclick="
        document.querySelector('#drop-down').classList.toggle('hidden');
        document.querySelector('#icon-more').classList.toggle('hidden');
        document.querySelector('#icon-less').classList.toggle('hidden');
        " class="group px-8 flex items-center gap-x-4" title="Account Center">
        <div class="w-12 h-12 rounded-full overflow-hidden group-hover:scale-105 transition">
            <img src="https://avatars.githubusercontent.com/{{ Auth::user()->username }}" alt="" class="object-cover ">
        </div>
        <div>
            <p>{{ strtok(Auth::user()->name, ' ') }}</p>
        </div>
        <div class="w-6 h-6">
            <svg id="icon-more" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24" class="block"><path d="M480-345 240-585l56-56 184 184 184-184 56 56-240 240Z"/></svg>
            <svg id="icon-less" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24" class="hidden"><path d="m296-345-56-56 240-240 240 240-56 56-184-184-184 184Z"/></svg>
        </div>
    </button>
    <div id="drop-down" class="hidden w-full absolute z-10 mt-4 bg-white flex-col divide-y-2 shadow-md rounded-b-md overflow-hidden">
        <a href="#" class="flex p-4 gap-2 hover:bg-slate-50">
            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24" class="fill-gray-400"><path d="M234-276q51-39 114-61.5T480-360q69 0 132 22.5T726-276q35-41 54.5-93T800-480q0-133-93.5-226.5T480-800q-133 0-226.5 93.5T160-480q0 59 19.5 111t54.5 93Zm246-164q-59 0-99.5-40.5T340-580q0-59 40.5-99.5T480-720q59 0 99.5 40.5T620-580q0 59-40.5 99.5T480-440Zm0 360q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q53 0 100-15.5t86-44.5q-39-29-86-44.5T480-280q-53 0-100 15.5T294-220q39 29 86 44.5T480-160Zm0-360q26 0 43-17t17-43q0-26-17-43t-43-17q-26 0-43 17t-17 43q0 26 17 43t43 17Zm0-60Zm0 360Z"/></svg>
            Akun Saya
        </a>
        <a href="{{ route('logout') }}" onclick="return confirm('Are you sure?')" class="flex p-4 gap-2 hover:bg-slate-50">
            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24" class="fill-gray-400"><path d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h280v80H200v560h280v80H200Zm440-160-55-58 102-102H360v-80h327L585-622l55-58 200 200-200 200Z"/></svg>
            Keluar
        </a>
    </div>
</div>
