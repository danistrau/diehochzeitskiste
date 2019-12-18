@extends('layouts.master')

@section('title', $blog->title )

@section('container')

	<section class="main">
		<div class="col">

			<div class="card card-body">
				@if($blog->is_published)
					<i class="fa fa-check text-success"></i>
				@else
					<i class="fa fa-ban text-danger"></i>
				@endif
				<h1>{{ $blog->title }}</h1>
				<p class="lead">{{ $blog->text }}</p>
				<p>{{ diff_date($blog->created_at) }}</p>

				@if($blog->user)
					<p>User: {{ $blog->user->name }}</p>
				@endif

				<span>
					<a href="{{ route('blogs.index') }}" >Zurück</a>
					<a href="{{ route('blogs.edit', $blog->id) }}" >Bearbeiten</a>
					<form action="{{ route('blogs.destroy', $blog->id) }}" method="post">
						@csrf
						@method('delete')
						<button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
					</form>

				</span>
			</div>

		</div>
	</section>

@endsection
