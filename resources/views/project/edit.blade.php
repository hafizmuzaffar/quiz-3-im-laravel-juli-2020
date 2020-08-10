@extends('layouts.master')

@section('content')
    <form action="{{ route('projects.update',$project->id) }}" method="post">
        {{ csrf_field() }} @method('PUT')
        <label for="name">name</label>
        <input type="text" name="name" id="name" class="form-control" value="{{ $project->name }}">
        <label for="name">deskripsi</label>
        <input type="text" name="deskripsi" id="deskripsi" class="form-control" value="{{ $project->deskripsi }}">
        <label for="name">tanggal mulai</label>
        <input type="date" name="tanggal_mulai" id="tanggal_mulai" class="form-control" value="{{ $project->tanggal_mulai }}">
        <label for="name">deadline</label>
        <input type="date" name="deadline" id="deadline" class="form-control" value="{{ $project->deadline }}">

        <button type="submit" class="btn btn-primary mt-4">Submit</button>
    </form>
@endsection