@extends('layout.mainlayout')

@section('title', $title)

@section('pagetitle', $pagetitle)

@section('main_content')
<a class="btn btn-success" href="{{route('classification.create')}}">Create New Classification</a>
<br>
<br>
<table class="table table-bordered table-striped text-center">
    <tr>
        <th>No.</th>
        <th>Code</th>
        <th>Sumber Bunyi</th>
        <th>Deskripsi</th>
        <th>Actions</th>
    </tr>
    @foreach ($classification as $class)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$class['class_code']}}</td>
            <td>{{$class['class_name']}}</td>
            <td>{{$class['description']}}</td>
            <td>
                <form action="{{route('classification.destroy', $class->class_code)}}" method="POST">
                        <a class="btn btn-info" href="{{route('classification.show', $class->class_code)}}">Show</a>
                        <a class="btn btn-primary" href="{{route('classification.edit', $class->class_code)}}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>

@endsection