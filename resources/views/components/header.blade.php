
<div class="w-full h-auto py-4 bg-white flex divide-x-2">
    <div class="w-full px-8 flex justify-between items-center">
        <div class="h-6 w-6">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" class="fill-gray-400">
                <path d="M380-320q-109 0-184.5-75.5T120-580q0-109 75.5-184.5T380-840q109 0 184.5 75.5T640-580q0 44-14 83t-38 69l224 224q11 11 11 28t-11 28q-11 11-28 11t-28-11L532-372q-30 24-69 38t-83 14Zm0-80q75 0 127.5-52.5T560-580q0-75-52.5-127.5T380-760q-75 0-127.5 52.5T200-580q0 75 52.5 127.5T380-400Z"/>
            </svg>
        </div>
        <div class="flex">
            <a href="" class="h-6 w-6">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" class="fill-gray-400">
                    <path d="M200-200q-17 0-28.5-11.5T160-240q0-17 11.5-28.5T200-280h40v-280q0-83 50-147.5T420-792v-28q0-25 17.5-42.5T480-880q25 0 42.5 17.5T540-820v28q80 20 130 84.5T720-560v280h40q17 0 28.5 11.5T800-240q0 17-11.5 28.5T760-200H200Zm280-300Zm0 420q-33 0-56.5-23.5T400-160h160q0 33-23.5 56.5T480-80ZM320-280h320v-280q0-66-47-113t-113-47q-66 0-113 47t-47 113v280Z"/>
                </svg>
            </a>
        </div>
    </div>
    <div class="px-8 flex items-center gap-x-4">
        <div class="w-12 h-12 rounded-full overflow-hidden">
            <img src="{{ asset($gambar) }}" alt="" class="object-cover">
        </div>
        <div>
            <p>{{ $nama }}</p>
        </div>
        <div class="w-6 h-6">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960">
                <path d="M480-362q-8 0-15-2.5t-13-8.5L268-557q-11-11-11-28t11-28q11-11 28-11t28 11l156 156 156-156q11-11 28-11t28 11q11 11 11 28t-11 28L508-373q-6 6-13 8.5t-15 2.5Z"/>
            </svg>
        </div>
    </div>
</div>
