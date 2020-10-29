@extends('layouts.app')

@section('main')
    <h2>Drinks</h2>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>id</th>
                <th>Tipologia</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($drinks as $drink)
            <tr>
                <td>{{$drink->name}}</td>
                <td>{{$drink->id}}</td>
                <td>{{$drink->tipology}}</td>
                <td><a href="">mostra</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection

