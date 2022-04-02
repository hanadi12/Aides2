<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function searchbooks(){
        return view('user.searchbooks');
    }

    public function searchclothes(){
        return view('user.searchclothes');
    }

    public function searchfurnitures(){
        return view('user.searchfurnitures');
    }

    public function searchmedications(){
        return view('user.searchmedications');
    }
}
