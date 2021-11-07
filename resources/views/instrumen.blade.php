@extends('layout.mainlayout')

@section('title', $title)

@section('pagetitle', $pagetitle)

@section('main_content')

<br>
<a class="btn btn-success" href="{{route('instrument.create')}}">Create New Instrument</a>
<br>
<div class="table-resposive-sm">
  <table class="table table-bordered table-striped text-center">
    <tr>
        <th>No.</th>
        <th>Nama Instrumen</th>
        <th>Gambar Instrumen</th>
        <th>Klasifikasi</th>
        <th>Cara Bermain</th>
        <th>Deskripsi</th>
        <th>Actions</th>
    </tr>
    @foreach ($instrument as $inst)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$inst['inst_name']}}</td>
            <td class="col-sm-3">
                <img class='img-fluid img-thumbnail' src="{{$inst['inst_url']}}" alt=""></td>
            <td><a href="{{route('classification.show', $inst->classification->class_code)}}">{{$inst->classification->class_name}}</a></td>
            <td>{{$inst['inst_play']}}</td>
            <td>{{$inst['description']}}</td>
            <td>
                <form action="{{route('instrument.destroy', $inst->id)}}" method="POST">
                        <a class="btn btn-info" href="{{route('instrument.show', $inst->id)}}">Show</a>
                        <a class="btn btn-primary" href="{{route('instrument.edit', $inst->id)}}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>  
</div>


@endsection