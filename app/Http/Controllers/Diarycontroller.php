<?php

namespace App\Http\Controllers;

use App\Models\diary;
use Illuminate\Http\Request;

class Diarycontroller extends Controller
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
        return view('diary.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate the user input
        $request->validate([
            'title' => 'required',
            'body' => 'required',
            'img' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
    ]);
        //create new Product
        diary::create($request->all());

        //Send friendly message
        return redirect()->route('diary.index')->with('success','Product created succesfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\diary  $diary
     * @return \Illuminate\Http\Response
     */
    public function show(diary $diary)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\diary  $diary
     * @return \Illuminate\Http\Response
     */
    public function edit(diary $diary)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\diary  $diary
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, diary $diary)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\diary  $diary
     * @return \Illuminate\Http\Response
     */
    public function destroy(diary $diary)
    {
        //
    }
}
