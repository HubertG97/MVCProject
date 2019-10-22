<?php

namespace App\Http\Controllers;

use App\Cryptocurrency;
use Illuminate\Http\Request;

class CryptocurrenciesController extends Controller
{
    public function store(){
        $cryptocurreny = new Cryptocurrency();
        $cryptocurreny->name = request('name');
        $cryptocurreny->ticker = request('ticker');
        $cryptocurreny->save();

        return back();
    }
}
