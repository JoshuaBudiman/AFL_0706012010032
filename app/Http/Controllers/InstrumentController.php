<?php

namespace App\Http\Controllers;

use App\Models\Classification;
use App\Models\Instrument;
use Illuminate\Http\Request;

class InstrumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('instrumen', ['title'=>'Instrumen', 'pagetitle'=>'Instrumen Musik',
         'instrument'=>Instrument::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   $class = Classification::all();
        return view('createInstrument', ['title'=>'Create Instrument', 'pagetitle'=>'Create New Instrument',
         'class'=>$class]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   $this->validate($request,[
        'inst_name'=>'required',
        'inst_url'=>'required',
        'inst_class'=>'required',
        'inst_play'=>'required',
        'description'=>'required'
        ]);
        Instrument::create([
            'inst_name'=>$request->inst_name,
            'inst_url'=>$request->inst_url,
            'inst_class'=>$request->inst_class,
            'inst_play'=>$request->inst_play,
            'description'=>$request->description
        ]);
        return redirect(route('instrument.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Instrument  $instrument
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('showInstrument', ['title'=>'Instrument Detail', 
        'pagetitle'=>'Instrument Details', 
        'inst'=>Instrument::where('id', $id)->first()]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Instrument  $instrument
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $class = Classification::all();
        $inst = Instrument::where('id', $id)->first();
        return view('editInstrument',['title'=>'Edit Instrument', 'pagetitle'=>'Edit Instrument',
         'inst'=>$inst, 'class'=>$class]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Instrument  $instrument
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   $this->validate($request,[
        'inst_name'=>'required',
        'inst_url'=>'required',
        'inst_class'=>'required',
        'inst_play'=>'required',
        'description'=>'required'
        ]);
        $inst = Instrument::findOrFail($id);
        $inst->update([
            'inst_name'=>$request->inst_name,
            'inst_url'=>$request->inst_url,
            'inst_class'=>$request->inst_class,
            'inst_play'=>$request->inst_play,
            'description'=>$request->description
        ]);
        return redirect(route('instrument.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Instrument  $instrument
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $inst = Instrument::findOrFail($id);
        $inst->delete();
        return redirect(route('instrument.index'));
    }
}
