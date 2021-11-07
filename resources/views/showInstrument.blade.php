@extends('layout.mainlayout')

@section('title', $title)

@section('pagetitle', $pagetitle)

@section('main_content')
<div class="mt-4 p-5 bg-success text-white rounded">
    <h1>{{$inst['inst_name']}}</h1>
    <div class="d-flex justify-content-center">
        <img class="img-fluid" src="{{$inst['inst_url']}}" alt="">
    </div>
    
    <p>Klasifikasi Instrumen: {{$inst['inst_class']}}</p>
    <p>Cara Bermain: {{$inst['inst_play']}}</p>
    <p>Deskripsi: {{$inst['description']}}</p>
</div>

@endsection