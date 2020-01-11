@extends('layouts.master') @section('container')

<section class="main blogdetail">
    <div class="main-text">
        <div>
            @if($blog->is_published)
            <i class="fa fa-check text-success"></i>
            @else
            <i class="fa fa-ban text-danger"></i>
            @endif
            <h1>{{ $blog->title }}</h1>
            <div class="checklist">
                <p class="lead">{{ $blog->text }}</p>
                <p>{{($blog->created_at) }}</p>

                @if($blog->user)
                <p>Author: {{ $blog->user->name }}</p>
                @endif
            </div>
            <span>
                <a href="{{ route('blogs.index') }}"
                    ><button type="submit">Zurück</button></a
                >
                <a href="{{ route('blogs.edit', $blog->id) }}"
                    ><button type="submit">Bearbeiten</button></a
                >
                <form
                    action="{{ route('blogs.destroy', $blog->id) }}"
                    method="post"
                >
                    @csrf @method('delete')
                    <button type="submit">Löschen</button>
                </form>
            </span>
        </div>
    </div>
</section>

@endsection
