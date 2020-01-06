@extends('layouts.master') @section('title', '404') @section('container')

<main>
    <section class="main-head">
        <div class="main">
            <div>
                <h1 class="subheader">404</h1>
            </div>
            <div class="main-text">
                <p>Es tut uns Leid!</p>
                <p>Diese Seite existiert nicht.</p>
                <a href="{{ url('/') }}" class="button"
                    >Zurück zur Startseite</a
                >
            </div>
        </div>
    </section>
</main>
@stop
