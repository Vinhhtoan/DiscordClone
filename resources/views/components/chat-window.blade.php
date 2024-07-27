@props(['channelInfo'])
<div class="w-full h-full bg-[#313338] relative">
    <div class=" border-b-[1.5px] border-zinc-800 shadow-sm flex items-center justify-between">
        <div class="flex items-center gap-3 px-4 py-1">
            <p class="text-gray-400 text-[26.5px]">#</p>
            <p class="text-white text-[15px] font-semibold">{{$channelInfo->name}}</p>
        </div>
        <div class="flex gap-2 pr-4">
            <svg class="stroke-[#B5BAC1]" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-bell"><path d="M6 8a6 6 0 0 1 12 0c0 7 3 9 3 9H3s3-2 3-9"/><path d="M10.3 21a1.94 1.94 0 0 0 3.4 0"/></svg>
            <svg class="stroke-[#B5BAC1]" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-users"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
            <input class="rounded-md outline-none bg-[#1E1F22] text-gray-400 px-[4px] text-[13px] font-semibold w-[150px]" type="text" placeholder="Search">
            <svg class="stroke-[#B5BAC1]" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mail"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
        </div>
    </div>
    <div class="p-3">
        <h1 class="text-white text-[30px] font-bold">Welcome to #{{$channelInfo->name}}!</h1>
        <p class="text-gray-400 text-[14px]">This is the start of the {{$channelInfo->name}} channel.</p>
    </div>
    <div class="absolute bottom-6 w-[97%] bg-[#383A40] rounded-lg mx-5 flex justify-between items-center">
            <div class="p-3 flex gap-3">
                <div class="rounded-full bg-[#B5BAC1]">
                    <svg class="stroke-[#383A40] " xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-plus"><path d="M5 12h14"/><path d="M12 5v14"/></svg>
                </div>
                <input class="outline-none bg-[#383A40] text-[#BCBFC3] w-[1250px]" type="text" placeholder="Message">
            </div>
            <svg class="mr-2 stroke-[#B5BAC1]" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-smile"><circle cx="12" cy="12" r="10"/><path d="M8 14s1.5 2 4 2 4-2 4-2"/><line x1="9" x2="9.01" y1="9" y2="9"/><line x1="15" x2="15.01" y1="9" y2="9"/></svg>
    </div>
</div>
