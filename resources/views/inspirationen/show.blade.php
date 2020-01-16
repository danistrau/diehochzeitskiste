@extends('layouts.master') @section('container')
<main>
    <section class="main-head">
        <div class="main">
            <div>
                <h1 class="subheader">Titel</h1>
            </div>
        </div>
    </section>
    <section class="main-inspiration">
        <a href="/inspirationen"><button type="submit">Zurück</button></a>
        <div class=" gallery" id="gallery">
            @if(count($imgs))
                @foreach($imgs as $img)
                <div class="gallery-item"><div class="content"><img src="{{asset('storage/'.$img)}}" alt="Ein vintage dekoriertert Hochzeitstisch mit unterschiedlichsten Blumen und Vasen"></div></div>

                @endforeach
            @else
            Es gibt keine Bilder
            @endif
          
      </div>
</section>
</main>
@endsection