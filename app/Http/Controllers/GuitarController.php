<?php

namespace App\Http\Controllers;

use App\Models\Guitar;
use App\Http\Resources\GuitarResource;
use App\Http\Requests\StoreGuitarRequest;
use App\Http\Requests\UpdateGuitarRequest; 

class GuitarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datas = Guitar::get();
        return GuitarResource::collection($datas);
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
     * @param  \App\Http\Requests\StoreGuitarRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGuitarRequest $request)
    {
        return $request->store();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Guitar  $guitar
     * @return \Illuminate\Http\Response
     */
    public function show(Guitar $guitar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Guitar  $guitar
     * @return \Illuminate\Http\Response
     */
    public function edit(Guitar $guitar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGuitarRequest  $request
     * @param  \App\Models\Guitar  $guitar
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGuitarRequest $request, $id)
    {
        //
        return $request->update($id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Guitar  $guitar
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $data = Guitar::findOrFail($id); 
        $data->delete();
        return response()->json([
            'message' =>'prior order delete'
        ]);
    }
}
