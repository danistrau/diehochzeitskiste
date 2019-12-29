@extends('layouts.master')
@section('container')
<main>
		<section class="main-head">
			<div class="main">
				<div class="main-p">
					<h1 class="subheader">Budget hinzufügen</h1>
					<form action="{{route('UsersBudgetController@store')}}" method="post" autocomplete="off">

					 @include('budget.form')
				</div>
			</div>
		</section>
	</main>
@endsection
