@extends('layouts.master') @section('container')
<main>
    <section class="main-head">
        <div class="main">
            <div class="budget">
                <h1 class="subheader">Budgetrechner</h1>
                <p>
                    Wir haben das von Euch angegebene Gesamtbudget auf einzelne
                    Kategorien runtergebrochen, damit Ihr ein besseres Bild
                    davon bekommt, wie sich Euer Betrag aufteilen lässt.
                </p>
            </div>
        </div>
    </section>
    <section class="main-budgetrechner">
        <form
            method="post"
            class="main-p"
            action="{{ action('BudgetController@mainstore') }}" >
            @csrf
            <span class="subheader">Gesamtbudget</span><br />
            <input
                class="input"
                type="number"
                name="total_budget"
                value="{{ $total_budget }}"/><br />
            <button type="submit">Speichern</button>
        </form>

        <ul class="budgetrechner">
            @foreach($budgets as $budget)
            <li>
                @php
                    $userBudget=Auth::user()->getBudget($budget);
                @endphp
                <h2>{{ $budget->title }}</h2>
                <div class="userbudget change" >
                <input data-id="{{$budget->id}}"
                        type="number" 
                        name="price" 
                        class="input-budget"
                value="{{ $userBudget != null ? $userBudget->pivot->price : 0 }}" />
                </div>
                
            </li>
            @endforeach
        </ul>

        <div class="main-p">
            <span class="subheader">Verbleibendes Budget</span><br />
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

@push('scripts')
<script>
    $( document ).ready(function() {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN':document.head.querySelector('meta[name="csrf-token"]').content
            }
        })

        $('.input-budget').keydown(function(e){
            if(e.which == 13){
                e.preventDefault();
                let id = $(this).data('id');
                console.log(id);
                $.post("/user/inputBudget/" + id, {
                    price:$(this).val()
                })
                
                .done( function(data){
                    console.log(data.data);
                    $(this).val(data.data);

                    location.reload(true);

                });
            }
        })
    });

</script>
@endpush
