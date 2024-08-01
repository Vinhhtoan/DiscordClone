@props(['servers','userName'])
<div class="w-[240px] shrink-0  h-full  bg-[#2B2D31]">
    <div class="flex flex-col justify-between h-full">
        <div>
            <div class="border-b-[1px] border-stone-900 shadow-sm flex justify-between items-center hover:bg-[#35373C]">
                <h3 class="mx-4 my-3 text-white font-semibold text-[16px]">{{$servers->name}}</h3>
                <button><svg class="my-3 mr-4 stroke-gray-300 w-5 h-5 hover:stroke-white" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-down"><path d="m6 9 6 6 6-6"/></svg></button>
            </div>
            <div class="border-b-[1px] border-zinc-700">
                <div class="flex items-center gap-0.5 mx-2 my-3 rounded-md hover:bg-[#35373C]">
                    <svg class="mx-1.5 my-1.5 stroke-gray-400 w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar"><path d="M8 2v4"/><path d="M16 2v4"/><rect width="18" height="18" x="3" y="4" rx="2"/><path d="M3 10h18"/></svg>
                    <h2 class="text-gray-400 text-[15px] font-semibold">Events</h2>
                </div>
            </div>
                <x-channel-manage.channel-format typeOfChannel="Text" />
                <x-channel-manage.channel-format typeOfChannel="Voice"/>
        </div>
        <x-channel-manage.user-settings :userName="$userName"/>
    </div>

</div>