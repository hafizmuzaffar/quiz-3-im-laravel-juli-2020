@extends('layouts.master')

@section('content')
    <form action="{{ route('staffs.update',$staff->id) }}" method="post">
        {{ csrf_field() }} @method('PUT')
        <label for="name">name</label>
        <input type="text" name="name" id="name" class="form-control" value="{{ $staff->name }}">
        <button type="submit" class="btn btn-primary mt-4">Submit</button>
    </form>
@endsection