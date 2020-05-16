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
                        <div class="col">
                            <label for="firstname" style="display:none"></label>
                            <input id="firstname" type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" required autocomplete="firstname" placeholder="First Name" autofocus>

                            @error('firstname')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="lastname" style="display:none"></label>
                            <input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" placeholder="Last Name" autofocus>

                            @error('lastname')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="register_email" style="display:none"></label>

                        <div class="col">
                            <input id="register_email" type="email" class="form-control @error('register_email') is-invalid @enderror" name="register_email" value="{{ old('register_email') }}" required autocomplete="email" placeholder="Email Address">

                            @error('register_email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="register_password" style="display:none"></label>

                        <div class="col">
                            <input id="register_password" type="password" class="form-control @error('register_password') is-invalid @enderror" name="register_password" required autocomplete="new-password" placeholder="Password">

                            @error('register_password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="register_password-confirm" style="display:none"></label>

                        <div class="col">
                            <input id="register_password-confirm" type="password" class="form-control" name="register_password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                        </div>
                    </div>

                    <div class="form-group row text-center">
                        <div class="col">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="male" value=0>
                                <label class="form-check-label" for="male">Male</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="female" value=1>
                                <label class="form-check-label" for="female">Female</label>
                            </div>
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
