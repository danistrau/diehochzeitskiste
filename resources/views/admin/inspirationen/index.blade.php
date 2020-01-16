@extends('layouts.master') @section('container')
<main>
    <section class="main">
        <h1 class="subheader">Inspirationen Themen</h1>
        <div class="main-form">
            <ul class="main-svg">
                <li><a class="svglink" href="{{ route('admin.inspirationenType', ['type' => "vintage"]) }}">Vintage</a></li>
                <li><a class="svglink" href="{{ route('admin.inspirationenType', ['type' => "trachten"]) }}">Trachten</a></li>
                <li><a class="svglink" href="{{ route('admin.inspirationenType', ['type' => "klassisch"]) }}">Klassisch</a></li>
                <li><a class="svglink" href="{{ route('admin.inspirationenType', ['type' => "im_freien"]) }}">Im Freien</a></li>
            </ul>
        </div>
    </section>
</main>
@endsection