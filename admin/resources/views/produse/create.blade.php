@extends('layouts.app-master-produse')
@section('content')
<div class="bg-light p-4 rounded">
    <h1>Adauga un produs nou</h1>

    <div class="container mt-4">
        <form method="POST" action="{{ route('produse.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="nume" class="form-label">Nume</label>
                <input value="{{ old('nume') }}" type="text" class="form-control" name="nume" placeholder="Nume"
                    required>
            </div>
            <div class="mb-3">
                <label for="nume_imagine" class="form-label">Imagine</label>
                <input value="{{ old('nume_imagine') }}" type="file" class="form-control" name="nume_imagine"
                    placeholder="Adauga o imagine"  required>
            </div>
            <div class="mb-3">
                <label for="descriere" class="form-label">Descriere</label>
                <input value="{{ old('descriere') }}" type="text" class="form-control" name="descriere"
                    placeholder="Descriere" required>
            </div>
            <div class="mb-3">
                <label for="pret" class="form-label">Pret</label>
                <input type="decimal" value="{{ old('pret') }}"  class="form-control" name="pret"
                    placeholder="Pret" required>
            </div>
            <button type="submit" class="btn btn-primary">Salveaza produs</button>
            <a href="{{ route('produse.index') }}" class="btn btn-default">Inapoi</a>
        </form>
    </div>
</div>
@endsection