<?php

namespace App\Http\Controllers;
use App\Models\medications;

use Illuminate\Http\Request;

class AddmedicationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.addmedications');
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
            'medicationsimage'     =>  'required'
        ]);
        $medications = new medications([
            'nameuser'    =>  $request->get('username'),
            'typemedications'    =>  $request->get('typemedications'),
            'numuser'    =>  $request->get('numuser'),
            'cityuser'    =>  $request->get('cityuser'),
            'medicationsimage'   =>  $request->get('medicationsimage')

        ]);

        if( $request->hasfile("medicationsimage"))
        {
            $file=$request->file("medicationsimage");
            $extention = $file->getClientOriginalExtension();
            $filename= time().'.'.$extention;
            $file->move('uploads/medications', $filename);
            $medications->medicationsimage=$filename;
        }

        $medications->save();
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
