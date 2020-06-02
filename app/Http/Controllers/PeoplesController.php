<?php

namespace App\Http\Controllers;

use App\People;
use Illuminate\Http\Request;

class PeoplesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peoples = People::all();
        return view('peoples.index', compact('peoples'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('peoples.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email:rfc,filter|unique:peoples,email',
            'alamat' => 'required'
        ]);
        
        People::create($request->all());
        
        return redirect('/peoples')->with('status', 'Data berhasil ditambhkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\People  $people
     * @return \Illuminate\Http\Response
     */
    public function show(People $people)
    {
        return view('peoples.show', compact('people'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\People  $people
     * @return \Illuminate\Http\Response
     */
    public function edit(People $people)
    {
        return view('peoples.edit', compact('people'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\People  $people
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, People $people)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email:filter',
            'alamat' => 'required'
        ]);

        People::where('id', $people->id)
                    ->update([
                        'nama' => $request->nama,
                        'email' => $request->email,
                        'alamat' => $request->alamat
                    ]);
        
        return redirect('/peoples')->with('status', 'Data berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\People  $people
     * @return \Illuminate\Http\Response
     */
    public function destroy(People $people)
    {
        People::destroy($people->id);

        return redirect('/peoples')->with('status', 'Data berhasil dihapus!');
    }
}
