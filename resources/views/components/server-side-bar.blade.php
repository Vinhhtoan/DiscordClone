@props(['userServers'])
<div class="w-[72px] shrink-0 h-full  bg-[#1E1F22] flex flex-col items-center gap-3 relative">
    <x-server.server-icon class="mt-3 mb-2"/>

    @foreach ($userServers as $userServer)
        @php
            $firstChannel = $userServer->channels->first();
            $firstChannelId = $firstChannel ? $firstChannel->id : null;
        @endphp

        <a href="{{ route('servers.index', ['serverId' => $userServer->id, 'channelId' => $firstChannelId]) }}">
            <img class='rounded-full w-12 h-12 hover:rounded-xl' src="{{ asset('storage/' . $userServer->image)}}" >
        </a>
    @endforeach
    <a  id="openModalBtn" class="transition-all duration-75 ease-in-out rounded-full w-12 h-12 hover:rounded-xl bg-[#313338] flex items-center justify-center group hover:bg-[#23A559] ">
        <svg class="stroke-[#23A559] group-hover:stroke-white " xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M5 12h14"/>
            <path d="M12 5v14"/>
        </svg>
    </a>
    <div class="absolute bottom-5">
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" >
                <svg class="stroke-white hover:stroke-red-500" xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"/><polyline points="16 17 21 12 16 7"/><line x1="21" x2="9" y1="12" y2="12"/></svg>
            </button>
        </form>
    </div>
 

</div> 
