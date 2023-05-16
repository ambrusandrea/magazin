@extends('layouts.app-master')
@section('content')
<div class="bg-light p-4 rounded">
    <h1>Utilizatori</h1>
    <div class="lead">
       Gestioneaza utilizatorii
    </div>
<div>
<a href="{{ route('users.create') }}" class="btn btn-primary btn-sm float-right">Adauga utilizator</a>
</div>

    <div class="mt-2">
        @include('layouts.partials.messages')
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col" width="1%">#</th>
                <th scope="col" width="15%">Nume</th>
                <th scope="col">Email</th>
              
                <th scope="col" width="1%" colspan="3"></th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <th scope="row">{{ $user->id }}</th>
                <td>{{ $user->nume }}</td>
                <td>{{ $user->email }}</td>
                
                <td><a href="{{ route('users.show', $user->id) }}" class="btn btn-warning btnsm">Vizualizeaza</a></td>
                <td><a href="{{ route('users.edit', $user->id) }}" class="btn btn-info btnsm">Editeaza</a></td>
                <td>
                    {!! Form::open(['method' => 'Sterge','route' => ['users.destroy',
                    $user->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex">
        {!! $users->links() !!}
    </div>
</div>
@endsection