<?php

namespace App\Http\Controllers;
use App\Rating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RatingsController extends Controller
{

    public function store(){



        $rating = new Rating();
        $rating->user_id = Auth::id();
        $rating->cryptocurrency_id = request('id');
        $rating->like = request('rating');

        $rating->save();

        return back();
    }
}
