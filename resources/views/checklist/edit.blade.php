@extends('layouts.master')
@section('container')
<main>
		<section class="main">
			<div class="main-p">
				<div>
					<h1 class="subheader">Die Checkliste bearbeiten</h1>
					<form action="{{ route('checklist.update', $checklist->id) }}" method="post" autocomplete="off">
					
					@method('put')
					@include('checklist.form')
				</div>
			</div>
		</section>
	</main>
@endsection

