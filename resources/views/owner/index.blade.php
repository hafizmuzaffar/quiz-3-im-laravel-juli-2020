@extends('layouts.master')
@section('content')
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama Project</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($project as $item)
            <tr>
                <td>asdasd</td>
                <td>detail</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection