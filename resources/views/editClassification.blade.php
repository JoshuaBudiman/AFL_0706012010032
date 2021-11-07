@extends('layout.mainlayout')

@section('title', $title)

@section('pagetitle', $pagetitle)

@section('main_content')
@csrf
    <form action="{{route('classification.update', $class->class_code)}}" method="post">
        @csrf
        <input type="hidden" name="_method" value="PATCH">
        <label class="form-label" for="class_code">Kode Klasifikasi:</label>
        <input class="form-control" type="text" name="class_code" id="class_code" value="{{$class->class_code}}">
        <label class="form-label" for="class_name">Nama Sumber Bunyi:</label>
        <input class="form-control" type="text" name="class_name" id="class_name" value="{{$class->class_name}}">
        <label class="form-label" for="description">Deskripsi:</label>
        <input class="form-control" type="text" name="description" id="description" value="{{$class->description}}">
        
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