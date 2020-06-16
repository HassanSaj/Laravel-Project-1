@extends('layouts.app')

@section('content')

<div class="container">
     <br><br><br>
    <div class="row justify-content-center">

        <div class="col-md-8">
            <div class="card" style="border: none;border-radius: 25px;">
                <div class="card-header" style="background: #3681f7; color: white;">{{ trans('sentence.Login') }}</div>

                <div class="card-body" style="background: #f2f2f2;">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ trans('sentence.Login') }}</label>

                            <div class="col-md-6">
                                <input style="border-radius: 50px;" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ trans('sentence.Password') }}</label>

                            <div class="col-md-6">
                                <input style="border-radius: 50px;" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ trans('sentence.RememberMe') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button style="width: 100%; border-radius:50px;" type="submit" class="btn btn-success">
                                    {{ trans('sentence.Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ trans('sentence.Forgot') }}
                                    </a>
                                @endif
                            </div>
                        </div>

                        <hr>

                        <div class="row">
                            <div class="col-md-12 row-block">
                                <a href="{{ url('/auth/redirect/facebook') }}" class="btn btn-lg btn-primary btn-block" style="color: #fff;background-color: #3b5998;border-color: rgba(0,0,0,0.2);">
                                    <strong><i class="fa fa-facebook"></i> {{ trans('sentence.Facebook') }}</strong>
                                </a>
                            </div>
                        </div>
                        <br/>
                        <div class="row">
                            <div class="col-md-12 row-block">
                                <a href="{{ url('auth/redirect/google') }}" class="btn btn-lg btn-primary btn-block" style="color: #fff;
    background-color: #dd4b39;
    border-color: rgba(0,0,0,0.2);">
                                    <strong><i class="fa fa-google"></i> {{ trans('sentence.Google') }}</strong>
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
