@extends('layouts.master')
@section('container')
<main>
		<section class="main">
			<div class="main-p">
				<div>
					<h1 class="subheader">Budget bearbeiten</h1>
					<form action="{{ route('usersbudget.update', $budget->id) }}" method="post" autocomplete="off">
					
					@method('put')
					@include('budget.form')
					</form>
				</div>
			</div>
		</section>
	</main>
@endsection

