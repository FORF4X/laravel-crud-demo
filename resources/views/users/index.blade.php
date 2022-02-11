@extends('users.layout')

@section('content')

    <table>
        <tr>
            <th>Name</th>
            <th>Country</th>
            <th>Date</th>
        </tr>

        @foreach($users as $user)
        <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->country->name }}</td>
            <td>{{ $user->date_of_birth }}</td>
        </tr>
        @endforeach
    </table>

@endsection