@props(['servers'])
<div id="crud-modal" class="hidden">
  <div  tabindex="-1" aria-hidden="true" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-65">
      <div class="relative p-4 w-full max-w-md max-h-full">
          <div class="relative bg-white rounded-lg shadow dark:bg-[#313338]">
              <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                  <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                      Create Channel
                  </h3>
                  <button id="closeChannel" type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="crud-modal">
                      <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                      </svg>
                      <span class="sr-only">Close modal</span>
                  </button>
              </div>
              <form method="POST" action="{{route('channels.storage',['serverId'=>$servers->id])}}" class="p-4 md:p-5">
                @csrf
                  <div class="grid gap-4 mb-4 grid-cols-2">
                      <div class="col-span-2">
                          <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">CHANNEL NAME</label>
                          <input type="text" name="name" id="name" class="bg-[#1E1F22] px-2 py-2 border border-gray-300 text-white text-sm rounded-lg w-full outline-none" placeholder="New-channel" required="">
                      </div>
                  </div>
                  <button type="submit" class="text-white inline-flex items-center bg-[#5865F2] hover:bg-[#414891] font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                      <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                      Create Channel
                  </button>
              </form>
          </div>
      </div>
  </div> 
</div> 