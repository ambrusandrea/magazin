@extends('layouts.app-master')

@section('content')
    <h1>Coșul tău</h1>
    
    <table>
        <thead>
            <tr>
                <th>Nume</th>
                <th>Cantitate</th>
                <th>Preț</th>
                <th>Imagine</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cos as $produs)
                <tr>
                    <td>{{ $produs->nume }}</td>
                    <td>{{ $produs->cantitate }}</td>
                    <td>{{ $produs->pret }}</td>
                    <td><img src="{{ $produs->imagine }}"></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
