<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\book;
use App\Models\clothes;
use App\Models\furnitures;
use App\Models\medications;

class AdminController extends Controller
{
    public function index()
    {

        return view('admin.adminhome');
    }




    public function user()
    {
        $data=user::all();
        return view('admin.users',compact("data"));
    }



    public function deleteuser($id)
    {
        $data=user::find($id);
        $data->delete();
        return redirect()->back();
    }



    // BOOKS
    public function book()
    {
        $books=book::all();
        return view('admin.books',compact("books"));
    }



    public function deletebooks($id)
    {
        $books=book::find($id);
        $books->delete();
        return redirect()->back();
    }

    // CLOTHES
    public function clothes()
    {
        $data=clothes::all();
        return view('admin.clothes',compact("data"));
    }



    public function deleteclothes($id)
    {
        $data=clothes::find($id);
        $data->delete();
        return redirect()->back();
    }
    // FURNITURES
    public function furnitures()
    {
        $data=furnitures::all();
        return view('admin.furnitures',compact("data"));
    }



    public function deletefurnitures($id)
    {
        $data=furnitures::find($id);
        $data->delete();
        return redirect()->back();
    }

    // MEDICATIONS
    public function medications()
    {
        $data=medications::all();
        return view('admin.medications',compact("data"));
    }



    public function deletemedications($id)
    {
        $data=medications::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function card(){


        // return view('search.displayBooks', [
        //     'numB' => DB::table('books')->count();

        // ]);

    }









}
