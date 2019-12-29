@extends('layouts.master')
@section('title', $budget->title )
@section('container')
	<div class="main">
		<div class="main-p">
			
				@if($budget->is_published)
					<i class="fa fa-check text-success"></i>
				@else
					<i class="fa fa-ban text-danger"></i>
				@endif
				<h1>{{ $budget->title }}</h1>
				<p>Preis: {{ $budget->price }}</p>

				@if($budget->user)
					<p>{{ $budget->user->name }}</p>
				@endif

				<span>
					<a href="{{ route('budget.index') }}"><button type="submit">Zurück</button></a>
					@if($budget->hasUserBudget)
					<a href="{{ route('budget.edit', $budget->id) }}"><button type="submit">Bearbeiten</button></a>
					@else
					<a href="{{ route('budget.create', $budget->id) }}"><button type="submit">Erstellen</button></a>
					@endif
				</span>
		</div>
	</div>
@endsection
