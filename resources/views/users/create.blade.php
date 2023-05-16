@extends('layouts.app-master')
@section('content')
    <div class="bg-light p-4 rounded">
        <h1>Adauga un utilizator nou</h1>
   <!-- <div class="lead">Adauga un utilizator nou</div> -->

    <div class="container mt-4">
    <form method="POST" action="">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nume</label>
                <input value="{{ old('name') }}"
                    type="text"
                    class="form-control"
                    name="name"
                    placeholder="Name" required>
            @if ($errors->has('name'))
                <span class="text-danger text-left">{{ $errors->first('name') }}</span>
            @endif
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input value="{{ old('email') }}"
            type="email"
            class="form-control"
            name="email"
            placeholder="Adresa email" required>
        @if ($errors->has('email'))
            <span class="text-danger text-left">{{ $errors->first('email') }}</span>
        @endif
    </div>

    <div class="mb-3">
        <label for="username" class="form-label">Nume utilizator</label>
        <input value="{{ old('username') }}"
            type="text"
            class="form-control"
            name="username"
            placeholder="Nume utilizator" required>
        @if ($errors->has('username'))
            <span class="text-danger text-left">{{ $errors->first('username') }}</span>
         @endif
    </div>

    <div class="mb-3">
        <label for="password" class="form-label">Parola</label>
        <input value="{{ old('password') }}"
            type="text"
            class="form-control"
            name="password"
            placeholder="Parola" required>
        @if ($errors->has('password'))
            <span class="text-danger text-left">{{ $errors->first('password') }}</span>
         @endif
    </div>

 <button type="submit" class="btn btn-primary">Salveaza utilizator</button>
    <a href="{{ route('users.index') }}" class="btn btn-default">Inapoi</a>
    </form>
 </div>
 </div>
@endsection
