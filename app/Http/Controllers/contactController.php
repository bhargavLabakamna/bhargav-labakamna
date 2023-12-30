<?php

namespace App\Http\Controllers;

use App\Models\contact;
use Illuminate\Http\Request;

class contactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function contact_list()
    {
        // $contacts=contact::all();
        // $contacts = Contact::orderBy('id', 'desc')->get();
        // $data=compact('contacts');
        // return view('admin.contact_list')->with($data);
        $contacts = Contact::orderBy('id', 'desc')->get();
return view('admin.contact_list', compact('contacts'));

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
        // return ('dfsd');
        $data=new contact;
        $data->name=$request->name;
        $data->email=$request->email;
        $data->mobile=$request->mobile;
        $data->subject=$request->subject;
        $data->message=$request->message;
        $data->save();
        return["data"=>"Contact Add Success"];
        //return redirect('/')->with('success','User Register Success');
    }

    /**
     * Display the specified resource.
     */
    public function show(contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(contact $contact)
    {
        //
    }
}
