@extends('layouts.login_admin')

@section('content')
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <form method="POST" action="{{ route('admin.login') }}" class="login100-form validate-form">
                @csrf
                
                <span class="login100-form-title p-b-26">
                    {{ __('Login') }}
                </span>
                
                <!-- Email Address -->
                <div class="wrap-input100 validate-input" data-validate="Valid email is: a@b.c">
                    <input class="input100" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username">
                    <span class="focus-input100" data-placeholder="{{ __('Email') }}"></span>
                </div>
                <!-- Error Message for Email -->
                <x-input-error :messages="$errors->get('email')" class="mt-2 text-danger small" />
                
                <!-- Password -->
                <div class="wrap-input100 validate-input" data-validate="Enter password">
                    <span class="btn-show-pass">
                        <i class="zmdi zmdi-eye"></i>
                    </span>
                    <input class="input100" type="password" name="password" required autocomplete="current-password">
                    <span class="focus-input100" data-placeholder="{{ __('Password') }}"></span>
                </div>
                <!-- Error Message for Password -->
                <x-input-error :messages="$errors->get('password')" class="mt-2 text-danger small" />

                <div class="container-login100-form-btn">
                    <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                        <button class="login100-form-btn">
                            {{ __('Login') }}
                        </button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>

<div id="dropDownSelect1"></div>
@endsection
