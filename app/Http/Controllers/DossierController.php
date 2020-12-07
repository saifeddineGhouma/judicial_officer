<?php

namespace App\Http\Controllers;

use App\Client;
use App\Dossier;
use App\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class DossierController extends Controller
{
    public function index()
    {
        $dossiers= Dossier::latest()->get();
        return view('dossiers.index',compact('dossiers')) ;

    }
    public function create($client_id=null)
    {
        $client=Client::find($client_id);
        return view('dossiers.create',compact('client'));
    }
    public function store(Request $request)
    {
        
            $dossier = new Dossier();
            $dossier= $dossier->create($request->all());
              $this->saveFile($request->file,$dossier);

              $this->saveFacture($request->price);
              Session::flash('success', 'add successfull!'); 
           return back() ;

    }

    private function saveFile($images,$dossier)
    {
        foreach($images as $image)
          {
              $file = new File();
              $file->dossier_id = $dossier->id ;
                  $name = time() . '_' . $image->getClientOriginalName();
                  $path = 'files/'.$dossier->name;
                  $image->move($path, $name);
                  $file->file = $name;
              $file->save();

          }
        
    }
}
