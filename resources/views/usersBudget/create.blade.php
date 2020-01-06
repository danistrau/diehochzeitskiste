@extends('layouts.master') @section('container')
<main>
    <section class="main-head">
        <div class="main">
            <div class="main-p">
                <h1 class="subheader">Budget hinzufügen</h1>
                <form
                    action="{{ route('usersbudget.store') }}"
                    method="post"
                    autocomplete="off"
                >
                    <input
                        type="hidden"
                        name="budget_id"
                        value="{{$budget->id}}"
                    />
                    @include('budget.form')
                </form>
            </div>
        </div>
    </section>
</main>
@endsection
