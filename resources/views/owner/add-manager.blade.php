@extends('layouts.master')

@section('content')
    <form action="{{ route('add.manager.proses',$project->id) }}" method="get">
    {{ csrf_field() }}
    <label for="manager">Manager</label>
    <select name="manager_id" id="manager_id" class="form-control">
        @foreach ($managers as $item)
            <option value="{{ $item->id }}">{{ $item->name }}</option>
        @endforeach
    </select>

    <button type="submit" class="btn btn-primary">save</button>
    </form>
@endsection