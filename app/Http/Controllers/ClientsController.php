<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;
use Session ;
class ClientsController extends Controller
{
    public function index()
    {
        return view('clients.index');

    }
    public function create()
    {
        return view('clients.create');
    }
    public function store(Request $request)
    {
        $client = new Client();
        
        $client::create($request->all());
       if($client)
       {
           Session::flash('success', 'add successfull!'); 
           return back() ;
       }

    }

    public function list()
    {
        $clients = Client::latest()->get();
        return view('clients.list',compact('clients'));
    }
}
