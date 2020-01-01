@extends('layouts.welcome-layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <h1 class="font-weight-bold mt-5">Connect with your friends!</h1>
                <h3 class="mt-5"><i class="fa fa-photo mr-3"></i>Check out others' photos</h3>
                <h3 class="mt-5"><i class="fa fa-database mr-3"></i>We totally don't collect your data!</h3>
                <h3 class="mt-5"><i class="fa fa-buysellads mr-3"></i>We'll promote your campaign ads regardless of its authenticity!</h3>
            </div>
            <div class="col-md-4">
                <h1 class="font-weight-bolder">Sign up</h1>
                <h3 class="font-weight-bold">It's quick and easy</h3>
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="form-group row">
                        <label for="name" style="display:none"></label>
                        <div class="col">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Firstname Lastname" autofocus>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email" style="display:none"></label>

                        <div class="col">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email Address">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" style="display:none"></label>

                        <div class="col">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password-confirm" style="display:none"></label>

                        <div class="col">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-success">
                                Sign up!
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
