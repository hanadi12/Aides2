<?php

namespace App\Http\Controllers;
use App\Models\furnitures;

use Illuminate\Http\Request;

class AddfurnituresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.addfurnitures');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'username'    =>  'required',
            'furnituresimage'     =>  'required'
        ]);
        $furnitures = new furnitures([
            'nameuser'    =>  $request->get('username'),
            'typefurnitures'    =>  $request->get('typefurnitures'),
            'numuser'    =>  $request->get('numuser'),
            'cityuser'    =>  $request->get('cityuser'),
            'furnituresimage'   =>  $request->get('furnituresimage')

        ]);

        if( $request->hasfile("furnituresimage"))
        {
            $file=$request->file("furnituresimage");
            $extention = $file->getClientOriginalExtension();
            $filename= time().'.'.$extention;
            $file->move('uploads/furnitures', $filename);
            $furnitures->furnituresimage=$filename;
        }

        $furnitures->save();
        // return redirect()->route('user.addbooks')->with('success', 'Data Added');
        return back()->withInput();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
