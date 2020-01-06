@extends('layouts.master') @section('container')
<main>
    <section class="main-head">
        <div class="main">
            <div>
                <h1 class="subheader">Klassisch</h1>
            </div>
        </div>
    </section>
    <section class="main-inspiration">
        <ul class="inspiration">
          <li><div class="change"></div><img src="{{ asset('/assets/vintage1.jpg') }}" alt="Ein vintage dekoriertert Hochzeitstisch mit unterschiedlichsten Blumen und Vasen"></li>
          <li><div class="change"></div><img src="{{ asset('/assets/vintage2.jpg') }}" alt="Ein vintage dekoriertert Hochzeitstisch mit unterschiedlichsten Blumen und Vasen"></li>
          <li><div class="change"></div><img src="{{ asset('/assets/vintage1.jpg') }}" alt="Ein vintage dekoriertert Hochzeitstisch mit unterschiedlichsten Blumen und Vasen"></li>
          <li><div class="change"></div><img src="{{ asset('/assets/vintage2.jpg') }}" alt="Ein vintage dekoriertert Hochzeitstisch mit unterschiedlichsten Blumen und Vasen"></li>
      </ul>
</section>
</main>
@endsection