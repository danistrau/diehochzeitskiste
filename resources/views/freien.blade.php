@extends('layouts.master') @section('container')
<main>
    <section class="main-head">
        <div class="main">
            <div>
                <h1 class="subheader">Im Freien</h1>
            </div>
        </div>
    </section>
    <section class="main-inspiration">
        <ul class="inspiration">
          <li><div class="change"></div><img src="{{ asset('/assets/freien1.jpg') }}" alt="Ein vintage dekoriertert Hochzeitstisch mit unterschiedlichsten Blumen und Vasen"></li>
          <li><div class="change"></div><img src="{{ asset('/assets/freien2.jpg') }}" alt="Ein vintage dekoriertert Hochzeitstisch mit unterschiedlichsten Blumen und Vasen"></li>
          <li><div class="change"></div><img src="{{ asset('/assets/freien3.jpg') }}" alt="Ein vintage dekoriertert Hochzeitstisch mit unterschiedlichsten Blumen und Vasen"></li>
          <li><div class="change"></div><img src="{{ asset('/assets/freien1.jpg') }}" alt="Ein vintage dekoriertert Hochzeitstisch mit unterschiedlichsten Blumen und Vasen"></li>
          <li><div class="change"></div><img src="{{ asset('/assets/freien2.jpg') }}" alt="Ein vintage dekoriertert Hochzeitstisch mit unterschiedlichsten Blumen und Vasen"></li>
          <li><div class="change"></div><img src="{{ asset('/assets/freien3.jpg') }}" alt="Ein vintage dekoriertert Hochzeitstisch mit unterschiedlichsten Blumen und Vasen"></li>      </ul>
</section>
</main>
@endsection