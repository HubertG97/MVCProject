<?php

namespace App\Http\Controllers;

use App\Cryptocurrency;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class CryptocurrenciesController extends Controller
{
    public function store(){

        $data = request()->validate([
            'name' => 'required|min:3',
            'ticker' => 'required|min:3'
        ]);

        $cryptocurreny = new Cryptocurrency();
        $cryptocurreny->name = request('name');
        $cryptocurreny->ticker = request('ticker');
        $cryptocurreny->user_id = Auth::id();
        $cryptocurreny->save();

        return back();
    }
}
