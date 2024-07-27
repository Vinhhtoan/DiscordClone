<?php

namespace App\Http\Controllers;

use App\Models\Channel;
use App\Models\Server;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {

        $user = Auth::user();
        $channels = Channel::all();
        $userServers = Server::where('owner_id', auth()->id())->get();
       
        return view('home', [
            'user' => $user,
            'channels' => $channels,
            'userServers' => $userServers,
        ]);
    }
}   
