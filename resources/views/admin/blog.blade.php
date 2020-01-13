@extends('layouts.master') @section('container')
<div class="container">
        <div class="row">
            <h1>Blog</h1>
            @foreach($blogs as $blog)
            <div class="blog_text">
            <h2>{{ $blog->title }}</h2>
            <span>
                <span>
                    <a href="#"><button type="submit">Bearbeiten</button></a>
                    <form
                        action="#"
                        method="post">
                        @csrf @method('delete')
                        <button type="submit">Löschen</button>
                    </form>
                </span>
            </span>
        </div>
        @endforeach
        </div>
    </div>
@endsection