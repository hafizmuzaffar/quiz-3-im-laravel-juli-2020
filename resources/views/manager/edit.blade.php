@extends('layouts.master')

@section('content')
    <form action="{{ route('managers.update',$manager->id) }}" method="post">
        {{ csrf_field() }} @method('PUT')
        <label for="name">name</label>
        <input type="text" name="name" id="name" class="form-control" value="{{ $manager->name }}">
        <button type="submit" class="btn btn-primary mt-4">Submit</button>
    </form>
@endsection