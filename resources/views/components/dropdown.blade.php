<div   
    x-data = "{show :false}"
    x-show = "show"
    x-on:open-dropdown.window="show=true" 
    x-on:close-dropdown.window="show=false" 
>
<div >
    <div class="w-screen h-screen absolute z-50 top-0 left-[-72px]"
        x-on:click="alert('hello')"
    >

    </div>
    <div class="bg-[#111214] z-50 absolute rounded-md text-gray-400 w-[230px] ml-1 mt-14">
        <div x-data x-on:click="$dispatch('openmodal')" class="flex justify-between hover:bg-[#5a64ca] hover:text-white mx-2 my-2 px-2 py-1 rounded-sm">
            <p>Invite People</p>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user-round-plus"><path d="M2 21a8 8 0 0 1 13.292-6"/><circle cx="10" cy="8" r="5"/><path d="M19 16v6"/><path d="M22 19h-6"/></svg>
        </div>
    </div>
</div>
 
</div>
