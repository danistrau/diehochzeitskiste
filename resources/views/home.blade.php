@extends('layouts.master') @section('container')
<div class="container">
    <main>
        <section class="main-head">
            <div class="main">
                <div>
                    <h1 class="subheader">Willkommen in der Hochzeitskiste!</h1>
                    <h2 class="main-p">{{ auth()->user()->name }}</h2>
                    <div>
                        @if (session('status'))
                        <span class="alert alert-success" role="alert">
                            {{ session("status") }}
                        </span>
                        @endif
                        <section>
                            <h3 class="main-p">Hochzeitsplanung einfach gemacht</h3>
                            <p class="main-p">
                                Die Hochzeitskiste bietet das perfekte Werkzeug,
                                um deine Hochzeit einfach und bequem zu planen.
                            </p>
                        </section>
                        <div class="main-form">
                            <ul class="main-svg">
                                <li>
                                    <a class="svglink" href="{{ route('checklist.index') }}"
                                        ><i class="fa fa-list-ul fa-4x"></i
                                    ></a>
                                    <h4>Checkliste</h4>
                                    <p>Habt alle To-do's auf einen Blick</p>
                                </li>
                                <li>
                                    <a class="svglink" href="/budget"
                                        ><i class="fa fa-credit-card fa-4x"></i
                                    ></a>
                                    <h4>Budgetrechner</h4>
                                    <p>Stellt sicher, dass Ihr im Budget bleibt</p>
                                </li>
                                <li>
                                    <a class="svglink" href="/inspirationen"
                                        ><i class="fa fa-lightbulb-o fa-4x"></i
                                    ></a>
                                    <h4>Inspirationen</h4>
                                    <p>Lasst Euch von Trends inspirieren</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    @endsection
</div>
