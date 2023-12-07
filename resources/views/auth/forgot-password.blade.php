<link rel="stylesheet" href="assets/frontend/css/form.css">
<title>Attorlytic Password Recovery Form</title>

<x-guest-layout>

    <div class="wrapper">
        <h2>Recovery</h2>
        <p>Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.</p>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div class="input-field">
                <x-input-error :messages="$errors->get('email')"/>
                <input type="text" required id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                <label for="email" :value="__('Email')" >Enter your email</label>
            </div>

            <button type="submit">{{ __('Email Password Reset Link') }}</button>
        </form>
    </div>
</x-guest-layout>