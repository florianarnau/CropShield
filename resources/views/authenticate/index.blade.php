@extends('layouts.login')

@section('content')

<form action="{{ route('authenticate.store') }}" method="POST">
    <img src="{{ asset('images/logo.png') }}" class="logo-CropShield" alt="Logo de CropShield">
    @csrf
    <input type="email" id="email" placeholder="Email" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

    @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror

    <input id="password" placeholder="Mot de passe" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

    @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror

    <button type="submit" class="btn btn-primary">
        {{ __('Connexion') }}
    </button>

    @if (Route::has('password.request'))
        <a class="btn btn-link" href="{{ route('password.request') }}">
            {{ __('Mot de passe oublié ?') }}
        </a>
    @endif

</form>

@endsection
