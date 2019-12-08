<?php

namespace App\Http\Controllers;

use App\Cryptocurrency;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;


class CryptocurrenciesController extends Controller
{
    public function indexAll(){

        $cryptocurrencies = Cryptocurrency::all();
        $likeCount = $this->getLikeCount();
        $dislikeCount = $this->getDislikeCount();
        return view('home', [
            'cryptocurrencies' => $cryptocurrencies,
            'likeCount' => $likeCount,
            'dislikeCount' => $dislikeCount,
        ]);
    }

    public function index(){

        $cryptocurrencies = Cryptocurrency::where('user_id', Auth::id())->get();
        return view('cryptocurrencies.index', [
            'cryptocurrencies' => $cryptocurrencies,
        ]);
    }

    public function create(){
        $cryptocurrencies = Cryptocurrency::all();
        return view('cryptocurrencies.create', compact('cryptocurrencies'));
    }
    public function getLikeCount(){
        return $likeCount = DB::table('Ratings')->where([
            ['like', '=', '1'],
            ['cryptocurrency_id', '=', '1'],
        ])->count();



    }
    public function getDislikeCount(){
        return $likeCount = DB::table('Ratings')->where([
            ['like', '=', '0'],
            ['cryptocurrency_id', '=', '1'],
        ])->count();



    }
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

        return redirect('cryptocurrencies');
    }
    public function show(Cryptocurrency $cryptocurrency){


        return view('cryptocurrencies.show', compact('cryptocurrency'));
    }

    public function edit(Cryptocurrency $cryptocurrency){

        return view('cryptocurrencies.edit', compact('cryptocurrency'));
    }
}
