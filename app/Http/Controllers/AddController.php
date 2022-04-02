<?php

namespace App\Http\Controllers;
use App\Models\book;

use Illuminate\Http\Request;

class AddController extends Controller
{
    public function addbooks(){
        return view('user.addbooks');
    }

    public function addclothes(){
        return view('user.addclothes');
    }

    public function addfurnitures(){
        return view('user.addfurnitures');
    }

    public function addmedications(){
        return view('user.addmedications');
    }


}
