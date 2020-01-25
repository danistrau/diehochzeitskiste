@extends('layouts.master') @section('container')
<main>
    <section class="main-head">
        <div class="main">
            <div>
                <h1 class="subheader">{{ $type}}</h1>
            </div>
        </div>
    </section>
    <section class="main-inspiration">
        <div class="main-p"><a href="/inspirationen"><button type="submit">Zurück</button></a></div>
        <div class=" gallery" id="gallery">
            @if(count($imgs)) @foreach($imgs as $img)
            <div class="gallery-item">
                <div class="content">
                    <img
                        src="{{ asset('storage/'.$img) }}"
                        alt="Ein vintage dekoriertert Hochzeitstisch mit unterschiedlichsten Blumen und Vasen"
                    />
                </div>
            </div>

            @endforeach @else <p class="main-p">Es stehen keine Bilder zur Verfügung!</p> @endif
        </div>
    </section>
</main>
@endsection
