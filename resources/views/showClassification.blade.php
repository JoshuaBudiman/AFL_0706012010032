@extends('layout.mainlayout')

@section('title', $title)

@section('pagetitle', $pagetitle)

@section('main_content')
<div class="mt-4 p-5 bg-success text-white rounded">
    <h1>{{$class['class_name']}}</h1>
    <p>Code: {{$class['class_code']}}</p>
    <p>Deskripsi: {{$class['description']}}</p>
</div>
<div class="mt-4 p-5 bg-primary">
    <h1>Daftar Instrumen</h1>
    <table class=" table table-striped table-bordered text-center">
        <tr>
            <th>No.</th>
            <th>Nama Instrumen</th>
            <th>Gambar Instrumen</th>
            <th>Cara Bermain</th>
            <th>Deskripsi</th>
        </tr>
        @foreach ($class->instruments as $inst)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$inst['inst_name']}}</td>
                <td class="col-sm-3">
                    <img class='img-fluid img-thumbnail' src="{{$inst['inst_url']}}" alt="">
                </td>
                <td>{{$inst['inst_play']}}</td>
                <td>{{$inst['description']}}</td>
            </tr>
        @endforeach
    </table>
</div>

@endsection