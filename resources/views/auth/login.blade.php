@extends('layouts.app')

@section('content')
<style>
          .brand_logo_container{
      position: absolute;
      height: 100px;
      width: 100px;
      top: -75px;
      border-radius: 50%;
      padding: 10px;
      text-align: center;
    }
    .brand_logo{
      height: 150px;
      width: 150px;
      border-radius: 50%;
      border: 2px solid white;
      text-align: center;
    }
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-5">
            <div class="card" style="background: black; color: #fff;">
                <div class="d-flex justify-content-center">
                    <div class="brand_logo_container mb-5">
                      <img src="{{ asset('/images/schoollogo.jpg') }}" class="brand_logo mb-5">
                    </div>
                  </div>
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                                      <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address or regnumber') }}</label>

                            <div class="col-md-6">
                                <input id="regnumber" type="text" class="form-control @error('regnumber') is-invalid @enderror" name="regnumber" value="{{ old('regnumber') }}" required autocomplete="regnumber" autofocus>

                                @error('regnumber')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-warning btn-block">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
