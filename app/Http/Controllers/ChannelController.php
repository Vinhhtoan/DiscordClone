<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Channel;
use App\Models\Server;

class ChannelController extends Controller
{
    public function index($serverId, $ChannelId) {
        $servers = Server::find($serverId);
        $channels = Channel::where('server_id', $serverId)->get();
        $channelInfo = Channel::where('id',$ChannelId)->first();
        $userServers = Server::where('owner_id', auth()->id())->get();
        if (!$servers) {
            abort(403);
        }
        if($servers->owner_id != auth()->id() ) {
            abort(403);
        }
        return view('index', [
            'servers' => $servers,
            'channels' => $channels,
            'channelInfo' => $channelInfo,
            'userServers' => $userServers,
        ]);
    }
    public function storage(Request $req, $serverId) {
        $data = $req->validate([
            'name' => 'required',
            
        ]);
        $server = Server::where('id', $serverId)
                        ->where('owner_id', auth()->id())
                        ->first();  
        if (!$server) {
            return response()->json(['message' => 'Unauthorized or server not found'], 403);                  
        }
        $channel = new Channel();
        $channel->name = $data['name'];
        $channel->server_id = $serverId; 
        $channel->user_id = auth()->id();
        $channel->save();

        return redirect(route('servers.index',['serverId'=>$server->id,'channelId'=>$channel->id]));
    
    }
    // public function update(Channel $channel, Request $req) {
    //     $data = $req ->validate([
    //         'name' => 'required'
    //     ]); 
    //     $channel -> update($data);
    //     return redirect(route('home'));
    // }
    
    public function delete($serverId, $channelId)
    {
        $channel = Channel::where('id', $channelId)->where('server_id', $serverId)->first();

        if (!$channel) {
            return redirect()->route('servers.index', ['serverId' => $serverId])
                             ->withErrors(['error' => 'Channel not found.']);
        }
        $channel->delete();
        $remainingChannels = Channel::where('server_id', $serverId)->get();
        if ($remainingChannels->isEmpty()) {
            return redirect()->route('servers.index', ['serverId' => $serverId])
                             ->with('success', 'Channel deleted successfully. No channels left in this server.');
        } else {
            // Redirect to the first remaining channel
            return redirect()->route('servers.index', ['serverId' => $serverId, 'channelId' => $remainingChannels->first()->id])
                             ->with('success', 'Channel deleted successfully.');
        }
    }
    // public function search(Request $request)
    // {
    //     $channels = Channel::query();

    //     if ($request->has('search')) {
    //         $request->validate([
    //             'search' => 'required|string',
    //         ]);
    //         $search = $request->input('search');
    //         $channels = $channels->whereRaw('LOWER(name) LIKE ?', ['%' . strtolower($search) . '%']);
    //     }
        
    //     $channels = $channels->get();
        
    //     return view('home', compact('channels'));
    // }
}
