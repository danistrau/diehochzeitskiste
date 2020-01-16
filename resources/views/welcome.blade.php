@extends('layouts.master') @section('title', 'Start -') @section('container')
<main>
    <section class="main-head">
        <div class="main-content">
            <img src="{{ asset('/assets/header.jpg') }}" />
            <div class="main-header">
                <h1 class="header">Die Hochzeitskiste</h1>
                <p>Checkliste, Budgetrechner, Inspirationen, Blog</p>
            </div>
        </div>
    </section>
    <section class="main-text">
        <h3>Hochzeitsplanung einfach gemacht</h3>
        <p class="main-p">
            Die Hochzeitskiste bietet das perfekte Werkzeug, um deine Hochzeit
            einfach und bequem zu planen
        </p>
    </section>
    <section class="main-body">
        <div>
            <ul class="main-svg">
                <li>
                    <a class="svglink" href="{{ route('checklist.index') }}"
                        ><i class="fa fa-list-ul fa-4x"></i
                    ></a>
                    <h4>Checkliste</h4>
                    <p>Habt alle To-Dos auf einem Blick</p>
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
                    <h4>Inpirationen</h4>
                    <p>Lasst euch von Trends inspirieren</p>
                </li>
            </ul>
        </div>
    </section>
    <section class="main-text">
        <h3>Was erwartet dich?</h3>
        <p>
            Hochzeitsplanung leicht gemacht - mit dem Online Hochzeitsplaner
            steht Eurer Traumhochzeit nichts mehr im Weg! Wir unterstützen Euch
            bei der Budgetplanung mit einer Checkliste und bieten verschiedene
            Inspirationen.
        </p>
    </section>
</main>

@stop
