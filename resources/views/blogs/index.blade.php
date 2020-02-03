@extends('layouts.master') @section('container')
<main class="blog">
    <section class="main-head">
        <div class="main">
            <div>
                <h1 class="subheader">Blog</h1>
            </div>
        </div>
    </section>
    <section class="main-text">
        @auth
        <a href="{{ route('blogs.create') }}">
            <button>  Neuen Blog erstellen</button>
        </a>
        @endauth
        @foreach($blogs as $blog)
        <div class="blog_text">
            <h2>{{ $blog->title }}</h2>
            @if($blog->user)
            <span>Autor: {{ $blog->user->name }}</span
            ><br />
            @endif
            <span>
                <a href="{{ route('blogs.show', $blog->id) }}">Lesen Sie mehr ...</a>
            </span>
        </div>
        @endforeach
    </section>
</main>
@endsection
