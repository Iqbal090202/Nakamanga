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

                <div class="d-flex justify-content-center form_container" id="top_register">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="input-group mb-3" id="register_login">
                            <div class="input-group-append" id="icon_register">
                                <span class="input-group-text"><i class="fa fa-user"></i></span>
                            </div>

                            <div class="register_input"> 
                                <input id="name" type="text" placeholder="Name" class="form-control input_user{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="input-group mb-3" id="register_login">
                            <div class="input-group-append" id="icon_register">
                                <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                            </div>

                            <div class="register_input">
                                <input id="email" type="email" placeholder="Email" class="form-control input_user{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="input-group mb-3" id="register_login">
                            <div class="input-group-append" id="icon_register">
                                <span class="input-group-text"><i class="fa fa-lock"></i></span>
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

                        <div class="input-group mb-3" id="register_login">
                            <div class="input-group-append" id="icon_register">
                                <span class="input-group-text"><i class="fa fa-lock"></i></span>
                            </div>

                            <div class="register_input">
                                <input id="password-confirm" placeholder="Confirm Password" type="password" class="form-control input_user" name="password_confirmation" required>
                            </div>
                        </div>

                        <div>
                            <div class="d-flex justify-content-center mt-3 login_container">
                                <button type="submit" class="btn">
                                    <i class="fa fa-pencil"></i> {{ __('Register') }}
                                </button>
                            </div>
                        </div><br><br><br>
                    </form>
                </div>
        </div>
    </div>
</div>
@endsection
