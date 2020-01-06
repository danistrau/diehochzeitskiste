@extends('layouts.master') @section('container')
<main>
    <section class="main-head">
        <div class="main">
            <div class="main-p">
                <h1 class="subheader">Eine neue Checkliste hinzufügen</h1>
                <form
                    action="{{ route('checklist.store') }}"
                    method="post"
                    autocomplete="off"
                >
                    @include('checklist.form')
                </form>
            </div>
        </div>
    </section>
</main>
@endsection
