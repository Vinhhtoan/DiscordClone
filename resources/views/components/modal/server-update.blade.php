@props(['servers'])
<div id="updateServerModal" class="hidden">
    <form action="" method="POST" id="updateServerForm" class="updatemodal fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-65" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="bg-[#313338] p-6 rounded max-w-lg w-full relative flex flex-col justify-center" role="document">
            <div class="flex flex-col items-center justify-center">
                <span id="closeUpdateModalBtn" class="close absolute top-1 right-3 text-gray-400 text-[30px] cursor-pointer hover:text-red-500">&times;</span>
                <h2 class="text-white font-bold mb-2 text-[25px]">Update Server</h2>
                <p class="text-gray-400">Give your new server a personality with a name and a icon. You can always change it later.</p>
                <div class="cursor-pointer w-[70px] h-[70px] rounded-full border-2 border-dashed flex flex-col items-center justify-center ">
                    <svg class="stroke-gray-300 w6-h6" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-camera"><path d="M14.5 4h-5L7 7H4a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2h-3l-2.5-3z"/><circle cx="12" cy="13" r="3"/></svg>
                    <div class="text-[12px] font-bold text-gray-300">UPLOAD</div>
                    <input type="file" name="image" class="absolute opacity-0">
                </div>
               
            </div>
            <div class="flex flex-col">
                <label class="text-gray-300 font-semibold text-[12px]" for="name">SERVER NAME</label>
                <input class="bg-zinc-900 text-white rounded-sm my-2 pl-2 py-2 text-[14px]" type="text" name="name" placeholder="eg:UserServer..." value="">
                <p class="text-[10px] text-gray-200">By creating a server,you agree to Discord's Community Guidelines.</p>
            </div>
            <input type="hidden" name="server_id" id="serverId" value="">
            <button type="submit" id="saveUpdateChangesBtn" class="px-4 py-2 mt-4 text-white bg-slate-500 rounded hover:bg-slate-600">Update</button>
        </div>
    </form>
</div>