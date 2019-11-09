@extends('layouts.master')
@section('container')
    <main>
            <section class="main-head">
                    <div class="main">
                      <div>
                        <h1 class="subheader">Lasst euch inspirieren</h1>
                      </div>
                    </div>
                  </section>
                  <section class="main-inspiration">
                    <ul class="inspiration">
                      <li><a href="#"><div class="change"><h2>Vintage</h2></div><img src="{{ asset('/assets/vintage.jpg') }}" alt=""></a></li>
                      <li><a href="#"><div class="change"><h2>Trachten</h2></div><img src="{{ asset('/assets/trachten.jpg') }}" alt=""></a></li>
                      <li><a href="#"><div class="change"><h2>Klassisch</h2></div><img src="{{ asset('/assets/klassisch.jpg') }}" alt=""></a></li>
                      <li><a href="#"><div class="change"><h2>Im Freien</h2></div><img src="{{ asset('/assets/freien.jpg') }}" alt=""></a></li>
                  </ul>
            </section>
    </main>  
@endsection