@extends('layouts.master') @section('container')
<main>
    <section class="main-head">
        <div class="main">
            <div class="budget">
                <h1 class="subheader">Budgetrechner</h1>
                <p>
                    Wir haben das von Euch angegebene Gesamtbudget auf einzelne
                    Kategorien runtergebrochen, damit Ihr ein besseres Bild
                    davon bekommt, wie sich Euer Betrag aufteilen lässt. Dies
                    sind lediglich Richtwerte und wenn Ihr möchtet, könnt Ihr
                    immer Veränderungen vornehmen.
                </p>
            </div>
        </div>
    </section>
    <section class="main-budgetrechner">
        <form method="post" class="main-p" action="{{action('BudgetController@mainstore')}}">
            @csrf
            <span class="subheader">Gesamtbudget</span><br/>
            <input
            class="input"
            type="number"
            name="total_budget"
            value="{{ $total_budget }}"
        /><br/>
        <button type="submit">Speichern</button>
        </form>
        <ul class="budgetrechner">
                @foreach($budgets as $budget)
            <li>
                <a  href="{{ route('budget.show', $budget->id) }}"><div class="change"><h2>{{ $budget->title }}</h2><p>
                    <input
                    type="number"
                    name="price"
                    value="{{ $budget->getUserBudget() }}"
                /></p></div></a>
            </li>
            @endforeach
        </ul>
        <div class="main-p">
            <span class="subheader">Verbleibendes Budget</span><br/>
            <input
            class="input"
            type="number"
            name="budget"
            value="{{ $rest_budget }}"
        />
        </div>
    </section>
</main>
@endsection
