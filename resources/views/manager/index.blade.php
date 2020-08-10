@extends('layouts.master')

@section('content')
<a href="{{ route('managers.create') }}" class="btn btn-primary">add manager</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($managers as $manager)
            <tr>
                <td>{{ $manager->name }}</td>
                <td>
                    <a href="{{ route('managers.edit',$manager->id) }}">edit</a>
                    <a ><form action="{{ route('managers.destroy',$manager->id) }}" method="post">
                    {{ csrf_field() }} @method('delete') <button>delete</button>
                    </form></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection