@extends('layouts.master')

@section('content')
    <form action="{{ route('projects.store') }}" method="post">
        {{ csrf_field() }}
        <label for="name">name</label>
        <input type="text" name="name" id="name" class="form-control">
        <label for="name">deskripsi</label>
        <input type="text" name="deskripsi" id="deskripsi" class="form-control">
        <label for="name">tanggal mulai</label>
        <input type="date" name="tanggal_mulai" id="tanggal_mulai" class="form-control">
        <label for="name">deadline</label>
        <input type="date" name="deadline" id="deadline" class="form-control">

        <button type="submit" class="btn btn-primary mt-4">Submit</button>
    </form>
@endsection