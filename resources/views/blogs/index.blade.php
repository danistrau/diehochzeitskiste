@extends('layouts.master') @section('container')
<main>
    <section class="main-head">
        <div class="main">
            <div>
                <h1 class="subheader">Blog</h1>
                
            </div>
        </div>
    </section>
    <section class="main-text">
			<h2>{{ trans_choice('blogs.name', $blogs->total()) }}</h2>
			
			<a href="{{ route('blogs.create') }}" class="btn btn-primary mb-4">
				<i class="fa fa-plus"></i> Neuen Blog erstellen
			</a>

			@foreach($blogs as $blog)

				<div >
					<h2>{{ $blog->title }}</h2>
					<span>{{ $blog->short_text }}</span>
					@if($blog->user)
						<span>User: {{ $blog->user->name }}</span>
					@endif
					<span>
						<a href="{{ route('blogs.show', $blog->id) }}" >Anzeigen</a>
					</span>
				</div>

			@endforeach

			{{ $blogs->links() }}
    
    </section>
</main>
@endsection


