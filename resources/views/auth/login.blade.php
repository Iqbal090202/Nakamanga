@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-center h-100" id="form_login">
        <div class="user_card">
                <div class="d-flex justify-content-center">
                    <div class="brand_logo_container">
                        <img src="/img/logon.jpeg" class="brand_logo" alt="Logo">
                    </div>
                </div>

                <div class="d-flex justify-content-center form_container">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="input-group mb-3" id="input_login">
                            <div class="input-group-append" id="icon_register">
                                <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                            </div>

                            <div class="register_input">
                                <input id="email" type="email" placeholder="Email" class="form-control input_user{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="input-group mb-2" id="input_pw">
                            <div class="input-group-append" id="icon_register">
                                <span class="input-group-text"><i class="fa fa-key"></i></span>
                            </div>

                            <div class="register_input">
                                <input id="password" type="password" placeholder="Password" class="form-control input_user{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group" id="input_remember">
                            <div class="custom-control custom-checkbox">
                                <div class="form-check">
                                    <input class="custom-control-input" type="checkbox"   name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="custom-control-label" for="remember" id="remember">Remember me</label>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="d-flex justify-content-center mt-3 login_container">
                                <button type="submit" class="btn">
                                   <i class="fa fa-sign-in"></i> {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn" href="{{ route('password.request') }}">
                                        <i class="fa fa-question-circle"></i> {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
        </div>
    </div>
</div>
@endsection
