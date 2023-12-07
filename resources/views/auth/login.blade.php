<link rel="stylesheet" href="assets/frontend/css/form.css">
<title>Attorlytic Login Form</title>

<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status :status="session('status')" />

    <div class="wrapper">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <!-- Email Address -->
            <h2>Login</h2>
            <div class="input-field">
                <x-input-error :messages="$errors->get('email')"/>
                <input type="text" required id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                <label for="email" :value="__('Email')" >Enter your email</label>
            </div>
        
            <!-- Password -->
            <div class="input-field">
                <x-input-error :messages="$errors->get('password')" />
                <input required id="password" type="password" name="password" required autocomplete="current-password" />
                <label for="password" :value="__('Password')">Enter your password</label>
            </div>
        
            <!-- Remember Me -->
            <div class="forget">
                <label for="remember_me" >
                  <input type="checkbox" id="remember_me" type="checkbox" name="remember">
                  <p>{{ __('Remember me') }}</p>
                </label>
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
            </div>
            <button type="submit">{{ __('Log in') }}</button>

            <div class="login">
                <p>Don't have an account? <a href="{{ route('register') }}">Register</a></p>
            </div>
        </form>
    </div>
</x-guest-layout>
