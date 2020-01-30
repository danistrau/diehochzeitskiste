@extends('layouts.master') @section('container')
<main>
    <section class="main-head">
        <div class="main">
            <div>
                <h1 class="subheader">Lasst Euch inspirieren</h1>
            </div>
        </div>
    </section>
    <section class="main-inspiration">
        <ul class="inspiration">
            <li>
                <a href="{{ route('inspirationenType', ['type'=> 'Vintage']) }}"
                    ><div class="change"><h2>Vintage</h2></div>
                    <img
                        src="{{ asset('/assets/vintage.jpg') }}"
                        alt="Ein vintage dekoriertert Hochzeitstisch mit unterschiedlichsten Blumen und Vasen"
                /></a>
            </li>
            <li>
                <a
                    href="{{ route('inspirationenType', ['type'=> 'Trachten']) }}"
                    ><div class="change"><h2>Trachten</h2></div>
                    <img
                        src="{{ asset('/assets/trachten.jpg') }}"
                        alt="Ein frisch vermähltes Ehepaar händchenhaltend in Trachten"
                /></a>
            </li>
            <li>
                <a
                    href="{{ route('inspirationenType', ['type'=> 'Klassisch']) }}"
                    ><div class="change"><h2>Klassisch</h2></div>
                    <img
                        src="{{ asset('/assets/klassisch.jpg') }}"
                        alt="Eine klassich festlich dekorierte Hochzeitstafel in rosa und blau"
                /></a>
            </li>
            <li>
                <a
                    href="{{ route('inspirationenType', ['type'=> 'Im Freien']) }}"
                    ><div class="change"><h2>Im Freien</h2></div>
                    <img
                        src="{{ asset('/assets/freien.jpg') }}"
                        alt="Ein Seestrand vorbereitet um eine Trauung zu vollziehen"
                /></a>
            </li>
        </ul>
    </section>
</main>
@endsection
