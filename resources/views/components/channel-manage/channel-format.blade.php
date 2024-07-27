@props(['userServers'])
<div class="flex justify-between items-center mt-3 group">
    <div class="flex items-center gap-[2px]">
        <svg class="ml-0.5 w-3 h-3 stroke-gray-300" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right"><path d="m9 18 6-6-6-6"/></svg>
        <p class="text-gray-400 text-[12px] font-semibold uppercase group-hover:text-white">{{$typeOfChannel}} Channels</p>
    </div>
    <button id="openCreateChannel"><svg class="channelmodal my-2 mr-5 w-4 h-4 stroke-gray-300 hover:stroke-white" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-plus"><path d="M5 12h14"/><path d="M12 5v14"/></svg></button>
</div>