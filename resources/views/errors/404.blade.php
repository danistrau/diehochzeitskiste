@extends('layouts.master') @section('title', '404') @section('container')

<main>
    <section class="main-head">
        <div class="main">
            <div class="errorpage">
                <h1 class="subheader errorheader">404</h1>
                <div class="main-text errortext">
                    <p>Es tut uns Leid!</p>
                    <p>Diese Seite existiert nicht.</p>
                    <a href="{{ url('/') }}" class="button"
                        >Zurück zur Startseite</a
                    >
                </div>
            </div>
        </div>
    </section>
</main>
@stop
