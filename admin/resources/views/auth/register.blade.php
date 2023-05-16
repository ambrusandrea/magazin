@extends('auth.layouts')

@section('content')

<div class="row justify-content-center mt-5">
    <div class="col-md-8">

        <div class="card">
            <div class="card-header">Register</div>
            <div class="card-body">
                <form action="{{ route('store') }}" method="post">
                    @csrf
                    <div class="mb-3 row">
                        <label for="nume" class="col-md-4 col-form-label text-md-end text-start">nume</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('nume') is-invalid @enderror" id="nume" name="nume" value="{{ old('nume') }}">
                            @if ($errors->has('nume'))
                                <span class="text-danger">{{ $errors->first('nume') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="email" class="col-md-4 col-form-label text-md-end text-start">Email Address</label>
                        <div class="col-md-6">
                          <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="parola" class="col-md-4 col-form-label text-md-end text-start">parola</label>
                        <div class="col-md-6">
                          <input type="password" class="form-control @error('parola') is-invalid @enderror" id="parola" name="parola">
                            @if ($errors->has('parola'))
                                <span class="text-danger">{{ $errors->first('parola') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="parola_confirmation" class="col-md-4 col-form-label text-md-end text-start">Confirm parola</label>
                        <div class="col-md-6">
                          <input type="password" class="form-control" id="parola_confirmation" name="parola_confirmation">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Register">
                    </div>
                    
                </form>
            </div>
        </div>
    </div>    
</div>
    
@endsection