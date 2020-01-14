<?php

namespace App\Http\Controllers;
use App\Rating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RatingsController extends Controller
{

    public function store(){

        if(request('rating')){
            $rating = new Rating();
            $rating->user_id = Auth::id();
            $rating->cryptocurrency_id = request('id');
            $rating->like = request('rating');

            $rating->save();
        }
        elseif(request('rating') == 0){
            $rating = Rating::where(
                [
                    'user_id' => Auth::id(),
                    'cryptocurrency_id' => request('id')
                ]);

            $rating->delete();
        }



        return back();
    }
}
