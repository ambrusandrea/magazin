@extends('layouts.app-master')
@section('content')
<div class="bg-light p-4 rounded">
    <h1>Adaugare utilizatori</h1>
    
    <div class="container mt-4">
        <form method="POST" action="">
            @csrf
            <div class="mb-3">
                <label for="nume" class="form-label">Nume</label>
                <input value="{{ old('nume') }}" type="text" class="form-control" name="nume" placeholder="Nume"
                    required>
                @if ($errors->has('nume'))
                <span class="text-danger text-left">{{ $errors->first('nume') }}</span>
                @endif
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input value="{{ old('email') }}" type="email" class="form-control" name="email"
                    placeholder="Adredsa email" required>
                @if ($errors->has('email'))
                <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                @endif
            </div>
            <div class="mb-3">
                <label for="parola" class="form-label">Parola</label>
                <input  type="text" class="form-control" name="parola" required>
                @if ($errors->has('username'))
                <span class="text-danger text-left">{{ $errors->first('parola') }}</span>
                @endif
            </div>
            <button type="submit" class="btn btn-primary">Salveaza</button>
            <a href="{{ route('users.index') }}" class="btn btn-default">Inapoi</a>
        </form>
    </div>
</div>
@endsection