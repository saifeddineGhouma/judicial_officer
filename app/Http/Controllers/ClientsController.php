<?php

namespace App\Http\Controllers;

use App\Client;
use App\Dossier;
use App\Email;
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
        
        $client =  $client::create($request->all());
       if($client)
       {
           $this->saveEmail($request->emails,$client) ;
           Session::flash('success', 'add successfull!'); 
           return back() ;
       }

    }
    private function saveEmail($emails,$client)
    {
        foreach($emails as $adressmail)
        {
           
            $email = new Email();
            $email->email = $adressmail ;
            $email->client_id = $client->id ;
            $email->save();

        }
    }
    public function list()
    {
        $clients = Client::latest()->get();
        return view('clients.list',compact('clients'));
    }
    public function  show($client_id )
    {
       $client= Client::find($client_id);
        return view('clients.show',compact('client'));

    }
    
}
