<link rel="stylesheet" href="assets/frontend/css/form.css">
<title>Attorlytic Register Form</title>

<x-guest-layout>
    <div class="wrapper">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <h2>Register</h2>
            <!-- Name -->
            <div class="input-field">
                <x-input-error :messages="$errors->get('name')"/>
                    <input type="text" required id="name" type="name" name="name" :value="old('name')" required
                    autofocus autocomplete="username" />
                <label for="name" :value="__('Name')">Enter your name</label>
            </div>

            <!-- Email Address -->
            <div class="input-field">
                <x-input-error :messages="$errors->get('email')" />
                <input type="text" required id="email" type="email" name="email" :value="old('email')" required
                    autofocus autocomplete="username" />
                <label for="email" :value="__('Email')">Enter your email</label>
            </div>

            <!-- Password -->
            <div class="input-field">
                <x-input-error :messages="$errors->get('password')" />
                <input required id="password" type="password" name="password" required
                    autocomplete="new-password" />
                <label for="password" :value="__('Password')">Enter your password</label>
            </div>

            <!-- Confirm Password -->
            <div class="input-field">
                <x-input-error :messages="$errors->get('password')" />
                <input required id="password_confirmation" type="password" name="password_confirmation" required
                    autocomplete="new-password" />
                <label for="password_confirmation" :value="__('Confirm Password')">Enter your password</label>
            </div>

            <button type="submit">{{ __('Register') }}</button>

            <div class="register">
                <p>Already registered? <a href="{{ route('login') }}">Login</a></p>
            </div>
        </form>
    </div>
</x-guest-layout>