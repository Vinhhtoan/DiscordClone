<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('storage/uploads/servers/1721626270_discord.jpeg')}}" type="image">
    @vite('resources/css/app.css')
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Home</title>
</head>
<body class="h-full bg-[#2B2D31] w-full">
    @if (session('status'))
    <div id="sessionStatus" style="color: green;">
        {{ session('status') }}
    </div>
    @endif
    
    <div class="flex h-screen w-screen absolute">
        <x-server-side-bar :userServers="$userServers"/>
        @livewire('friendlist')
        @livewire('friendmanage')
    </div>
    <x-modal.server-create/>

    {{-- <x-modal.server-update :servers="$servers"/> --}}
  
    
    <script src="{{ asset('js/home.js') }}"></>
</body>
</html>