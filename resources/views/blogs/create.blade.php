@extends('layouts.master') @section('container')

<section class="main">
    <div class="main-text">
        <div class="card card-body">
            <h1>Neuen Blog erstellen:</h1>

            <form
                action="{{ route('blogs.store') }}"
                method="post"
                autocomplete="off"
            >
                @include('blogs._form')
            </form>
        </div>
    </div>
</section>

@endsection
