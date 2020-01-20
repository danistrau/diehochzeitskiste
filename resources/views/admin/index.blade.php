@extends('layouts.master') @section('container')
<main>
    <section class="main">
        <h1 class="subheader">Dashboard</h1>
        <div class="main-form">
            <ul class="main-svg">
                <li><a class="svglink" href="{{ route('admin.users') }}"><i class="fa fa-user-o fa-5x"></i></a><p>Registrierte User</p></li>
                <li><a class="svglink" href="{{ route('admin.inspirationen') }}"><i class="fa fa-lightbulb-o fa-5x" ></i></a><p>Alle Inspirationen</p></li>
            </ul>
        </div>
    </section>
</main>
@endsection
