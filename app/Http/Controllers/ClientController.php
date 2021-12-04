<?php

namespace App\Http\Controllers;

use App\Models\Client;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    
    public function index(){
        return view('client.index');
    }

    public function store(Request $request)
    {
        Client::create($request->all());
        return redirect()->route('home');
    }

    public function show( )
    {
        $clients = Client::all();
        return view('client.show',compact('clients'));
    }
}
