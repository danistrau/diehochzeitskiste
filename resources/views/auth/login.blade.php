@extends('layouts.master') @section('container')
<main>
    <section class="main">
        <h1 class="subheader">Login-Bereich</h1>
        <div class="main-form">
            <h2>Login</h2>
            <form class="form" id="form" method="POST" action="{{ route('login') }}">
                @csrf
                <div>
                    <label for="email">{{ __("E-Mail Adresse") }}</label>
                    <div>
                        <input
                            type="email"
                            id="email"
                            name="email"
                            placeholder="max.muster@mann.at"
                            required
                            value="{{ old('email') }}"
                            required
                            autocomplete="email"
                            autofocus
                            class=" @error('email') is-invalid @enderror"
                        />
                        @error('email')
                        <span class="invalid-feedback" role="alert"
                            ><strong>{{ $message }}</strong></span
                        >
                        @enderror
                    </div>
                </div>
                <div>
                    <label for="password">{{ __("Passwort") }}</label>
                    <div>
                        <input
                            type="password"
                            id="password"
                            name="password"
                            placeholder="Passwort"
                            class="@error('password') is-invalid @enderror"
                            required
                            autocomplete="current-password"
                        />
                        @error('password')
                        <span class="invalid-feedback" role="alert"
                            ><strong>{{ $message }}</strong></span
                        >
                        @enderror
                    </div>
                </div>
                <div>
                    <input type="checkbox" name="remember_token"
                    id="remember_token"
                    {{ old("remember_token") ? "checked" : "" }}>
                    <label for="remember_token">{{ __("Merken") }}</label>
                </div>
                <div>
                    <button type="submit">{{ __("Login") }}</button>
                </div>
            </form>
        </div>
    </section>
</main>
@endsection
