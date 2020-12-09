<?php

namespace App\Http\Controllers;

use App\Dossier;
use App\File;
use Illuminate\Http\Request;

class FilesController extends Controller
{

    public function getAll()
    {
        $files = File::all();
        return view('files.indexAll',compact('files'));
    }
    public function index(Dossier $dossier)
    {

        $files = $dossier->files;
        return view('files.index',compact('files'));
    }
}
