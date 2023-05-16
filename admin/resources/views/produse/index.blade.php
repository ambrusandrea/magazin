@extends('layouts.app-master-produse')
@section('content')
<div class="bg-light p-4 rounded">
    <h1>Produse</h1>
    <div class="lead">
        Gestioneaza produse
        <a href="{{ route('produse.create') }}" class="btn btn-primary btn-sm float-right">Adauga un produs nou</a>
    </div>

    <div class="mt-2">
        @include('layouts.partials-produse.messages')
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col" width="1%">#</th>
                <th scope="col" width="15%">Nume</th>
                <th scope="col">Imagine</th>
                <th scope="col" width="10%">Descriere</th>
                <th scope="col" width="10%">Pret</th>
                <th scope="col" width="1%" colspan="3"></th>
            </tr>
        </thead>
        <tbody>
            @foreach($produse as $produs)
            <tr>
                <th scope="row">{{ $produs->id }}</th>
                <td>{{ $produs->nume }}</td>
                <td>{{ $produs->nume_imagine}}</td>
                <td>{{ $produs->descriere}}</td>
                <td>{{ $produs->pret}}</td>

                <td>
                    <form action="{{ route('produse.destroy',$produs->id) }}" method="POST">

                <td><a href="{{ route('produse.show', $produs->id) }}" class="btn btn-warning btnsm">Vizualizaeaza</a>
                </td>
                <td><a href="{{ route('produse.edit', $produs->id) }}" class="btn btn-info btnsm">Editeaza</a></td>

                @csrf
                @method('DELETE')

               <td> <button type="submit" class="btn btn-danger">Delete</button></td>
                </form>
                
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex">
        {!! $produse->links() !!}
    </div>
</div>
@endsection