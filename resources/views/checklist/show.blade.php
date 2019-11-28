@extends('layouts.master')
@section('title', $checklist->title )
@section('container')
	<div class="main">
		<div class="main-p">
				@if($checklist->is_published)
					<i class="fa fa-check text-success"></i>
				@else
					<i class="fa fa-ban text-danger"></i>
				@endif
				<h1>{{ $checklist->title }}</h1>
				<p>Erledigt: {{ $checklist->checked }}</p>

				@if($checklist->user)
					<p>{{ $checklist->user->name }}</p>
				@endif

				<span>
					<a href="{{ route('checklist.index') }}"><button type="submit">Zurück</button></a>
					<a href="{{ route('checklist.edit', $checklist->id) }}"><button type="submit">Bearbeiten</button></a>
					<form action="{{ route('checklist.destroy', $checklist->id) }}" method="post">
						@csrf
						@method('delete')
						<button type="submit" class="btn btn-danger">Löschen</button>
					</form>
				</span>
		</div>
	</div>
@endsection
