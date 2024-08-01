<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Ditcord | {{$servers->name}} </title>
    @vite('resources/css/app.css')
</head>
<body class="h-full bg-[#2B2D31] w-full">
    @if (session('status'))
    <div id="sessionStatus" style="color: green;">
        {{ session('status') }}
    </div>
    @endif

    <div class="flex h-screen w-screen absolute">
        <x-server-side-bar :userServers="$userServers" />
        <x-empty-channel-list :servers="$servers" :userName="$userName"/>
       
    </div>
    <x-modal.server-create/>
    {{-- <x-modal.server-update :servers="$servers"/>--}}
    <x-modal.channel-create :servers="$servers"/> 
    
    <script src="{{ asset('js/emptychannel.js') }}"></script>
</body>
</html>