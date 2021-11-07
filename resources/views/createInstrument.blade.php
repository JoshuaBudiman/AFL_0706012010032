@extends('layout.mainlayout')

@section('title', $title)

@section('pagetitle', $pagetitle)

@section('main_content')
@csrf
    <form action="{{route('instrument.store')}}" method="post">
        @csrf
        <label class="form-label" for="inst_name">Nama Instrumen:</label>
        <input class="form-control" type="text" name="inst_name">
        <label class="form-label" for="inst_url">URL Instrumen:</label>
        <input class="form-control" type="text" name="inst_url">
        <label class="form-label" for="inst_class">Klasifikasi Instrumen:</label>
        <select class="form-select" name="inst_class" >
            <option value="" selected disabled hidden>Pilih</option>
            @foreach ($class as $cla)
                <option value="{{$cla['class_code']}}">{{$cla['class_name']}}</option>
            @endforeach
        </select>
        <label class="form-label" for="inst_play">Cara Bermain Instrumen:</label>
        <select class="form-select" type="text" name="inst_play">
            <option value="Dipukul">Dipukul</option>
            <option value="Dipetik">Dipetik</option>
            <option value="Ditiup">Ditiup</option>
            <option value="Digesek">Digesek</option>
            <option value="Ditekan">Ditekan</option>
            <option value="Digoyang">Digoyang</option>
        </select>
        <label class="form-label" for="description">Deskripsi:</label>
        <input class="form-control" type="text" name="description">
        
        <br>
        <button class="btn btn-primary" type="submit">Submit</button>
    </form>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
@endsection