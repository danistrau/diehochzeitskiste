@extends('layouts.master') @section('container')
<main>
    <section class="main-head">
        <div class="main">
            <div>
                <h1 class="subheader">Blog's</h1>
            </div>
        </div>
    </section>
    <section class="main-text">
			<a href="{{ route('blogs.create') }}" class="btn btn-primary mb-4">
				<button class="fa fa-plus">Neuen Blog erstellen</button>
			</a>
			@foreach($blogs as $blog)
				<div class="checklist">
					<h2>{{ $blog->title }}</h2>
					@if($blog->user)
						<span>Author: {{ $blog->user->name }}</span><br/>
					@endif
					<span>
						<a href="{{ route('blogs.show', $blog->id) }}">Anzeigen</a>
					</span>
				</div>
			@endforeach
    </section>
</main>
@endsection


