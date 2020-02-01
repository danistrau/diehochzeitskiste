@extends('layouts.master') @section('container')
<main>
    <section class="main">
        <h1 class="subheader">Anmeldung der Hochzeitskiste</h1>
        <div class="main-form">
            <h2>Registrierung</h2>
            <form class="form" method="POST" action="{{ route('register') }}">
                @csrf

                <div>
                    <label for="name">{{ __("Name") }}</label>

                    <div>
                        <input id="name"  placeholder="Max Mustermann" type="text" @error('name') is-invalid
                        @enderror" name="name" value="{{ old("name") }}"
                        required autocomplete="name" autofocus> @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div>
                    <label for="email">{{ __("E-Mail Adresse") }}</label>

                    <div>
                        <input
                            id="email"
                            type="email"
                            placeholder="max.muster@mann.at"
                            class="form-control @error('email') is-invalid @enderror"
                            name="email"
                            value="{{ old('email') }}"
                            required
                            autocomplete="email"
                        />

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div>
                    <label for="password">{{ __("Passwort") }}</label>

                    <div>
                        <input
                            id="password"
                            type="password"
                            placeholder="Passwort"
                            class="form-control @error('password') is-invalid @enderror"
                            name="password"
                            required
                            autocomplete="new-password"
                        />

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div>
                    <label for="password-confirm">{{
                        __("Passwort bestätigen")
                    }}</label>

                    <div>
                        <input
                            id="password-confirm"
                            type="password"
                            placeholder="Passwort"
                            class="form-control"
                            name="password_confirmation"
                            required
                            autocomplete="new-password"
                        />
                    </div>
                </div>

                <div>
                    <div>
                        <button type="submit">
                            {{ __("Registrieren") }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </section>
</main>
@endsection
