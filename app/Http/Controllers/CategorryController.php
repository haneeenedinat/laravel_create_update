<?php

namespace App\Http\Controllers;

use App\Models\Categorry;
use Illuminate\Http\Request;

class CategorryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Categorry.create');


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

        Categorry::create([
            'categorries_name'=>$request->categorries_name,
        ]);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categorry  $categorry
     * @return \Illuminate\Http\Response
     */
    public function show(Categorry $categorry)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Categorry  $categorry
     * @return \Illuminate\Http\Response
     */
    public function edit(Categorry $categorry)
    {
        //
        return view('Categorry.edit',compact("categorry"));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Categorry  $categorry
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categorry $categorry)
    {
        //
        $categorry->update($request->all());
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categorry  $categorry
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categorry $categorry)
    {
        //
        $categorry->deleteOrFail(); 
        return redirect()->back();
    }
}
