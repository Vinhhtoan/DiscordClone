<div 
    x-data="{open : false}"
    x-show ="open"
    x-on:openmodal.window="open=true"
    x-on:closemodal.window="open=false"
> 
    <div x-on:click="open=false" tabindex="-1" aria-hidden="true" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-65">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <div class="relative bg-white rounded-lg shadow dark:bg-[#313338]">
                <div class="flex items-center justify-between p-4 md:p-5  rounded-t">
                    <p class="text-lg font-semibold text-gray-900 dark:text-white">
                        Invite friends to ... Server
                    </p>
                    <button x-on:click="$dispatch('closemodal')"  type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" >
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                         </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <div class="mx-2.5">
                    <input class="outline-none px-3 py-1 text-gray-300 w-full bg-[#1E1F22] rounded-md" placeholder="Search for friends" type="text" name="" id="">
                </div>
                <div class="mt-6">
                    <div class="flex ml-2 hover:bg-[#3d3f46] justify-between  group">
                        <div class="flex gap-3 items-center pl-2 py-1">
                            <img src="{{ asset('storage/uploads/servers/1721626270_discord.jpeg')}}" class="w-8 h-8 rounded-full">
                            <p class="text-gray-400">FriendName</p>
       <div x-on:click="open=false" tabindex="-1" aria-hidden="true" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-65">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <div class="relative bg-white rounded-lg shadow dark:bg-[#313338]">
                <div class="flex items-center justify-between p-4 md:p-5  rounded-t">
                    <p class="text-lg font-semibold text-gray-900 dark:text-white">
                        Invite friends to ... Server
                    </p>
                    <button x-on:click="$dispatch('closemodal')"  type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" >
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                         </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <div class="mx-2.5">
                    <input class="outline-none px-3 py-1 text-gray-300 w-full bg-[#1E1F22] rounded-md" placeholder="Search for friends" type="text" name="" id="">
                </div>
                <div class="mt-6">
                    <div class="flex ml-2 hover:bg-[#3d3f46] justify-between  group">
                        <div class="flex gap-3 items-center pl-2 py-1">
                            <img src="{{ asset('storage/uploads/servers/1721626270_discord.jpeg')}}" class="w-8 h-8 rounded-full">
                            <p class="text-gray-400">FriendName</p>
                        </div>
                        <button class="text-white rounded-sm border border-[#296D48] px-3 py-1 mr-2 my-1.5 group-hover:bg-[#296d38]">Invite</button>
                    </div>
                    <div class="flex ml-2 hover:bg-[#3d3f46] justify-between  group">
                        <div class="flex gap-3 items-center pl-2 py-1">
                            <img src="{{ asset('storage/uploads/servers/1721626270_discord.jpeg')}}" class="w-8 h-8 rounded-full">
                            <p class="text-gray-400">FriendName</p>
                        </div>
                        <button class="text-white rounded-sm border border-[#296D48] px-3 py-1 mr-2 my-1.5 group-hover:bg-[#296d38]">Invite</button>
                    </div>
                </div>
            
            </div>
        </div>
</div> 