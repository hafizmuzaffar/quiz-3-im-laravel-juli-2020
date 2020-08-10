@extends('layouts.master')

@section('content')
<a href="{{ route('projects.create') }}" class="btn btn-primary">add project</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama</th>
                <th>deskripsi</th>
                <th>tanggal mulai</th>
                <th>deadline</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
            <tr>
                <td>{{ $project->name }}</td>
                <td>{{ $project->deskripsi }}</td>
                <td>{{ $project->tanggal_mulai }}</td>
                <td>{{ $project->deadline }}</td>
                <td>{{ $project->status }}</td>
                <td>
                    <a href="{{ route('projects.edit',$project->id) }}">edit</a>
                    <a ><form action="{{ route('projects.destroy',$project->id) }}" method="post">
                    {{ csrf_field() }} @method('delete') <button>delete</button>
                    </form></a>
                    <a href="{{ route('manager.add.project',$project->id) }}">tambah manager</a>
                    <a href="{{ route('staff.add.project',$project->id) }}">tambah staff</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection