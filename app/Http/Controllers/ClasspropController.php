<?php

namespace App\Http\Controllers;

use App\property;
use App\classroom;
use App\classprop;
use Illuminate\Http\Request;

class ClasspropController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        //
        $classprop = property::all();
        $id;
        return view('classprops/index',compact('classprop','id'));
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
        //
        $classprop = new classprop;
        for ($i=0; $i < 5; $i++) { 
            # code...
            $classprop->id_properties = $request->id;
            $classprop->id_classrooms = $request->classroom;
            $classprop->total = $request->jlh;
            $classprop->save();
        }
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\classprop  $classprop
     * @return \Illuminate\Http\Response
     */
    public function show(classprop $classprop)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\classprop  $classprop
     * @return \Illuminate\Http\Response
     */
    public function edit(classprop $classprop)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\classprop  $classprop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, classprop $classprop)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\classprop  $classprop
     * @return \Illuminate\Http\Response
     */
    public function destroy(classprop $classprop)
    {
        //
    }
}
