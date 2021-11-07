@extends('layout.mainlayout')

@section('title', $title)

@section('pagetitle', $pagetitle)

@section('main_content')
@csrf
    <form action="{{route('instrument.update', $inst->id)}}" method="post">
        @csrf
        <input type="hidden" name="_method" value="PATCH">
        <label class="form-label" for="inst_name">Nama Instrumen:</label>
        <input class="form-control" type="text" name="inst_name" id="inst_name" value="{{$inst->inst_name}}">
        <label class="form-label" for="inst_url">URL Instrumen:</label>
        <input class="form-control" type="text" name="inst_url" id="inst_url" value="{{$inst->inst_url}}">
        <label class="form-label" for="inst_class">Klasifikasi Instrumen:</label>
        <select class="form-select" name="inst_class" >
            @foreach ($class as $cla)
            @if ($cla['class_code']==$inst['inst_class'])
            <option value="{{$cla['class_code']}}" selected>{{$cla['class_name']}}</option>
            @else
            <option value="{{$cla['class_code']}}">{{$cla['class_name']}}</option>
            @endif
            @endforeach
        </select>
        <label class="form-label" for="inst_play">Cara Bermain Instrumen:</label>
        <select class="form-select" type="text" name="inst_play">
            <option hidden value="{{$inst->inst_play}}">{{$inst->inst_play}}</option>
            <option value="Dipukul">Dipukul</option>
            <option value="Dipetik">Dipetik</option>
            <option value="Ditiup">Ditiup</option>
            <option value="Digesek">Digesek</option>
            <option value="Ditekan">Ditekan</option>
            <option value="Digoyang">Digoyang</option>
        </select>
        <label class="form-label" for="description">Deskripsi:</label>
        <input class="form-control" type="text" name="description" id="description" value="{{$inst->description}}">
        
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