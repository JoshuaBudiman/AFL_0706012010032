<?php

namespace App\Http\Controllers;

use App\Models\Classification;
use Illuminate\Http\Request;

class ClassificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('klasifikasi', ['title'=>'Klasifikasi', 'pagetitle'=>'Klasifikasi Instrumen', 
        'classification'=>Classification::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createClassification', ['title'=>'Create Classification', 'pagetitle'=>'Create Instrument Classification']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   $this->validate($request,[
        'class_code'=>'required',
        'class_name'=>'required',
        'description'=>'required'
        ]);
        Classification::create([
            'class_code'=>$request->class_code,
            'class_name'=>$request->class_name,
            'description'=>$request->description
        ]);
        return redirect(route('classification.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Classification  $classification
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('showClassification', ['title'=>'Classification Details', 
        'pagetitle'=>'Classification Details', 
        'class'=>Classification::where('class_code',$id)->first()]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Classification  $classification
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $class = Classification::where('class_code', $id)->first();
        return view('editClassification',['title'=>'Edit Classification',
        'pagetitle'=>'Edit Classification', 'class'=>$class]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Classification  $classification
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'class_code'=>'required',
            'class_name'=>'required',
            'description'=>'required'
            ]);
        $class = Classification::where('class_code', $id)->first();

        $class->update([
            'class_code'=>$request->class_code,
            'class_name'=>$request->class_name,
            'description'=>$request->description
        ]);
        return redirect(route('classification.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Classification  $classification
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $class = Classification::where('class_code', $id)->first();
        $class->delete();
        return redirect(route('classification.index'));
    }
}
