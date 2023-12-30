<?php

namespace App\Http\Controllers;

use App\Models\banner;
use Illuminate\Http\Request;

class bannerController extends Controller
{ 
    /**
     * Display a listing of the resource.
     */
    public function banner_list()
    {
        $banners = banner::orderBy('id', 'desc')->get();
        return view('admin.banner.banner_list', compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data= new banner;
        $data->title=$request->title;
        $data->sub_title=$request->sub_title;
        $data->button=$request->button;
        $data->button_2=$request->button_2;
        $data->button_link=$request->button_link;
        $data->button_2_link=$request->button_2_link;
        $data->desc=$request->desc;
        $data->save();

        return response()->json(['message' => 'Banner Add Success']);

    }

    /**
     * Display the specified resource.
     */
    public function show(banner $banner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(banner $banner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, banner $banner)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(banner $banner)
    {
        //
    }
}
