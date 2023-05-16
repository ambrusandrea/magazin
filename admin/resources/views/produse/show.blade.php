@extends('layouts.app-master-produse')
@section('content')
<div class="bg-light p-4 rounded">
    <h1>Vizualizeaza produse</h1>
    <div class="lead">

    </div>

    <div class="container mt-4">
        <div>
            Nume: {{ $produs->name }}
        </div>
        <div>
            Imagine: {{ $produs->nume_imagine }}
        </div>
        <div>
            Descriere: {{ $produs->descriere }}
        </div>
        <div>
            Pret: {{ $produs->pret }}
        </div>
    </div>
</div>
<div class="mt-4">
    <a href="{{ route('produse.edit', $produs->id) }}" class="btn btn-info">Editeaza</a>
    <a href="{{ route('produse.index') }}" class="btn btn-default">Inapoi</a>
</div>
@endsection