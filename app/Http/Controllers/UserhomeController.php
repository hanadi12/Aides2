<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB ;
use Illuminate\Http\Request;
use App\Http\Controllers\UserhomeController;
use App\Models\book;
use App\Models\clothes;
use App\Models\furnitures;
use App\Models\medications;




class UserhomeController extends Controller
{

    public function home(){
        return view('home');
    }

    public function add(){
        return view('user.add');
    }

    public function search(){
        return view('user.search');
    }

    public function virtualReality(){
        return view('user.virtualReality');
    }

    public function show(){
        return view('profile.show');
    }


    public function display()
    {



        return view('user.userhome', [
            'books' => DB::table('books')->get(),
            'clothes'=>DB::table('clothes')->get(),
            'furnitures'=>DB::table('furnitures')->get(),
            'medications'=>DB::table('medications')->get()
        ]);


    }








}
