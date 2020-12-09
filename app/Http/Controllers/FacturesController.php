<?php

namespace App\Http\Controllers;

use App\Facture;
use Illuminate\Http\Request;

class FacturesController extends Controller
{
    public function index()
    {
        $factures = Facture::all();
        return view('factures.index');
    }
}
