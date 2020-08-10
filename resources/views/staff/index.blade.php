@extends('layouts.master')

@section('content')
<a href="{{ route('staffs.create') }}" class="btn btn-primary">add staff</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($staffs as $staff)
            <tr>
                <td>{{ $staff->name }}</td>
                <td>
                    <a href="{{ route('staffs.edit',$staff->id) }}">edit</a>
                    <a ><form action="{{ route('staffs.destroy',$staff->id) }}" method="post">
                    {{ csrf_field() }} @method('delete') <button>delete</button>
                    </form></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection