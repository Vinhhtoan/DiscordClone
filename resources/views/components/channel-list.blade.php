@props(['channels','servers','userName'])
<div class="w-[240px] shrink-0 h-full  bg-[#2B2D31] relative">
    <div class="flex flex-col justify-between h-full">
        <div>
            <x-dropdown />
            <div x-data x-on:click="$dispatch('open-dropdown')" class="border-b-[1px] border-stone-900 shadow-sm flex justify-between items-center hover:bg-[#35373C]">
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
                @foreach ($channels as $channel)
                    <a href="{{ route('servers.index', ['serverId' => $servers->id, 'channelId' => $channel->id]) }}" class="mx-3 px-1 flex items-center rounded-md hover:bg-zinc-700 cursor-pointer justify-between">
                        <div class="flex items-center gap-2">
                            <p class="text-gray-400 text-[25px]">#</p>
                            <p class="text-gray-400 text-[14px] font-semibold">{{$channel->name}}</p>
                        </div>
                        <div class="flex items-center gap-1.5 ">
                            <button id="openUpdateChannel"><svg class="w-4 h-4 stroke-gray-300 hover:stroke-white" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-settings"><path d="M12.22 2h-.44a2 2 0 0 0-2 2v.18a2 2 0 0 1-1 1.73l-.43.25a2 2 0 0 1-2 0l-.15-.08a2 2 0 0 0-2.73.73l-.22.38a2 2 0 0 0 .73 2.73l.15.1a2 2 0 0 1 1 1.72v.51a2 2 0 0 1-1 1.74l-.15.09a2 2 0 0 0-.73 2.73l.22.38a2 2 0 0 0 2.73.73l.15-.08a2 2 0 0 1 2 0l.43.25a2 2 0 0 1 1 1.73V20a2 2 0 0 0 2 2h.44a2 2 0 0 0 2-2v-.18a2 2 0 0 1 1-1.73l.43-.25a2 2 0 0 1 2 0l.15.08a2 2 0 0 0 2.73-.73l.22-.39a2 2 0 0 0-.73-2.73l-.15-.08a2 2 0 0 1-1-1.74v-.5a2 2 0 0 1 1-1.74l.15-.09a2 2 0 0 0 .73-2.73l-.22-.38a2 2 0 0 0-2.73-.73l-.15.08a2 2 0 0 1-2 0l-.43-.25a2 2 0 0 1-1-1.73V4a2 2 0 0 0-2-2z"/><circle cx="12" cy="12" r="3"/></svg></button>
                            <form action="{{route('channel.delete',['serverId'=>$servers->id,'channelId'=>$channel->id])}}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" value="Delete"><svg class="hover:stroke-red-500 w-4 h-4 mt-1.5 stroke-gray-300" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trash-2"><path d="M3 6h18"/><path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"/><path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"/><line x1="10" x2="10" y1="11" y2="17"/><line x1="14" x2="14" y1="11" y2="17"/></svg></button>
                            </form>
                        </div>
                    </a>
                @endforeach
                <x-channel-manage.channel-format typeOfChannel="Voice"/>
        </div>
        <x-channel-manage.user-settings :userName="$userName"/>
  
    </div>

</div>
