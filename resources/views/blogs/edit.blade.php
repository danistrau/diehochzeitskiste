@extends('layouts.master') @section('title', 'Edit') @section('container')

<div class="main">
    <div class="main-text">
        <div class="card card-body">
            <h1>Blog bearbeiten:</h1>

            <form
                class="form" 
                action="{{ route('blogs.update', $blog->id) }}"
                method="post"
                autocomplete="off"
            >
                @method('put') @include('blogs._form')
            </form>
        </div>
    </div>
</div>

@endsection
