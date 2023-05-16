@extends('layouts.app-master')
@section('content')
    <div class="bg-light p-4 rounded">
        <h1>Utilizatori</h1>

    <div class="lead">
 Gestioneaza utilizatorii
 <a href="{{ route('users.create') }}" class="btn btn-primary btn-sm float-right">Adauga utilizator nou</a>
 </div>

 <div class="mt-2">
 @include('layouts.partials.messages')
 </div>
 <table class="table table-striped">
 <thead>
 <tr>
 <th scope="col" width="1%">#</th>
 <th scope="col" width="15%">Nume</th>
 <th scope="col" width="30%">Email</th>
 <th scope="col" width="10%">Nume utilizator</th>
 <th scope="col" width="10%">Parola</th>
 <th scope="col" width="1%" colspan="3"></th>
 </tr>
 </thead>
 <tbody>
 @foreach($users as $user)
 <tr>
 <th scope="row">{{ $user->id }}</th>
 <td>{{ $user->name }}</td>
 <td>{{ $user->email }}</td>
 <td>{{ $user->username }}</td>
 <td>{{ $user->password }}</td>
 <td><a href="{{ route('users.show', $user->id) }}" class="btn btn-warning btnsm">Vizualizaeaza</a></td>
 <td><a href="{{ route('users.edit', $user->id) }}" class="btn btn-info btnsm">Editeaza</a></td>
 <td>
 {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
 {!! Form::submit('Sterge', ['class' => 'btn btn-danger btn-sm']) !!}
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