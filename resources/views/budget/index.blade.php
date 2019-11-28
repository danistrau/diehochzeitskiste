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
        <div class="main-p">
            <h2 class="subheader">Gesamtbudget: </h2>
            <input
            class="input"
            type="number"
            name="number"
            required
        />
        </div>
        <ul class="budgetrechner">
                @foreach($budgets as $budget)
            <li>
                <a href="{{ route('budget.show', $budget->id) }}"><div class="change"><h2>{{ $budget->title }}</h2></div></a>
            </li>
            @endforeach
        </ul>
    </section>
</main>
@endsection
