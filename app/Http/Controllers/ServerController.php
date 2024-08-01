<?php

namespace App\Http\Controllers;

use App\Models\Channel;
use App\Models\Server;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServerController extends Controller
{
    public function index($serverId, Server $server) {
        $userServers = Server::where('owner_id', auth()->id())->get();
        $userName = User::where('id', auth()->id())->first()->getAttributes()['name']; 
        $servers = Server::find($serverId);
        if (!$servers) {
            abort(403);
        }
        if($servers->owner_id != auth()->id() ) {
            abort(403);
        }
        $channels = Channel::where('server_id', $serverId)->get();
        if ($channels->isEmpty()) {
            return view('emptychannel',['serverId' => $serverId, 'servers'=>$servers, 'userServers'=>$userServers,'userName'=>$userName]);
        }
        $channel = $channels->first();
        return redirect()->route('index',['serverId'=>$servers->id,'channelId'=>$channel->id]);
    }
    public function store(Request $req){
        $req -> validate([
            'name' => 'required|max:255|string',
            'image' => 'nullable|mimes:png,jpg,jpeg|max:2048' 
        ]);
        
        if ($req->hasFile('image')) {
            $image = $req->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $imagePath = $image->storeAs('uploads/servers', $imageName, 'public');
        }
        Server::create([
            'name' => $req->name,
            'image' => $imagePath,
            'owner_id' => auth()->id() 
        ]);
        $latestServer = Server::where('owner_id', auth()->id())->latest()->first();
        return redirect()->route('servers.index', ['serverId' => $latestServer->id])->with('status', 'Server Created');
        
    }
    public function update(Request $req, $id) {
        $data = $req->validate([
            'name' => 'required|max:255|string',
            'image' => 'nullable|mimes:png,jpg,jpeg|max:2048' 
        ]);   
        $server = Server::findOrFail($id);
    
        if ($req->hasFile('image')) {
            if ($server->image) {
                Storage::disk('public')->delete($server->image);
            }
            $image = $req->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $imagePath = $image->storeAs('uploads/servers', $imageName, 'public');
            $server->image = $imagePath;
        }
        $server->name = $data['name'];
        $server->save();
        return redirect(route('servers.index',['serverId'=>$server->id]))->with('status', 'Server Updated');
    }

}
