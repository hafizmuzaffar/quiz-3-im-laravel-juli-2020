@extends('layouts.master')

@section('content')
    <form action="{{ route('managers.store') }}" method="post">
        {{ csrf_field() }}
        <label for="name">name</label>
        <input type="text" name="name" id="name" class="form-control">
        <button type="submit" class="btn btn-primary mt-4">Submit</button>
    </form>
@endsection