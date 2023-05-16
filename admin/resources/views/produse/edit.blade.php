@extends('layouts.app-master-produse')
@section('content')
<div class="bg-light p-4 rounded">
    <h1>Actualizeaza produse</h1>
    <div class="lead">

    </div>

    <div class="container mt-4">
        <form method="post" action="{{ route('produse.update', $produs->id) }}" enctype="multipart/form-data">
            
            @csrf
            <div class="mb-3">
                <label for="nume" class="form-label">Nume</label>
                <input value="{{ $produs->nume }}" type="text" class="form-control" name="nume" placeholder="Nume"
                    required>
                @if ($errors->has('name'))
                <span class="text-danger text-left">{{ $errors->first('nume') }}</span>
                @endif
            </div>
            <div class="mb-3">
                <label for="nume_imagine" class="form-label">Imagine</label>
                <input value="{{ $produs->nume_imagine }}" type="file" class="form-control" name="nume_imagine"
                    placeholder="Adaugati o imagine" >
                @if ($errors->has('nume_imagine'))
                <span class="text-danger text-left">{{ $errors->first('nume_imagine') }}</span>
                @endif
            </div>
            <div class="mb-3">
                <label for="descriere" class="form-label">Descriere</label>
                <input value="{{ $produs->descriere }}" type="text" class="form-control" name="descriere"
                    placeholder="descriere" required>
                @if ($errors->has('descriere'))
                <span class="text-danger text-left">{{ $errors->first('descriere') }}</span>
                @endif
            </div>
            <div class="mb-3">
                <label for="pret" class="form-label">Pret</label>
                <input type="decimal" value="{{ $produs->pret }}"  class="form-control" name="pret" required>
                @if ($errors->has('pret'))
                <span class="text-danger text-left">{{ $errors->first('pret') }}</span>
                @endif
            </div>
            <button type="submit" class="btn btn-primary">Actualizeaza produs</button>
            <a href="{{ route('produse.index') }}" class="btn btn-default">Anuleaza</button>
        </form>
    </div>
</div>
@endsection