@extends('layouts.master') @section('container')
<main>
    <section class="main">
        <h1 class="subheader">Kontakt</h1>
        <p class="main-p">
            Wenn Ihr Fragen habt oder ich Euch irgendwie unterstützen kann,
            dann meldet Euch jederzeit gerne bei mir.
        </p>
        <div class="main-form">
            
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div>
                        <label for="name">{{ __("Name") }}</label>

                        <div>
                            <input id="name" type="text" @error('name')
                            is-invalid @enderror" name="name" value="{{
                                old("name")
                            }}" required autocomplete="name" autofocus>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div>
                        <label for="email">{{ __("E-Mail Address") }}</label>

                        <div>
                            <input
                                id="email"
                                type="email"
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
                        <label for="message">{{ __("Deine Nachricht") }}</label>
                        <div>
                            <textarea
                                id="message"
                                name="message"
                                required
                            ></textarea>
                        </div>
                    </div>

                    <button type="submit">
                        {{ __("Senden") }}
                    </button>
                </form>
            </div>
    
    </section>
</main>
@endsection
