<?php

namespace App\Http\Controllers;
use App\Models\PaketWisata;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    function index(){
        $paketwisata = PaketWisata::orderBy('id','desc')->get();
        return view('destination', [
            'paketwisata' => $paketwisata]);
    }

    function create(){
        return view('reservasi.create');
    }
}
