@extends('layouts.master') @section('container')
<main>
    <section class="main">
        <div class="main-form">
            <h2>Neue Bilder Hochladen</h2>
            <form class="form" id="form" method="POST" action="#">
                @csrf
                <div>
                    <label for="images">Bilder</label>
                    <div>
                        <input type="file" name="images[]" id="images" multiple>
                    </div>
                </div> 
                <div>
                    <button type="submit">{{ __("Login") }}</button>
                </div>
            </form>
        </div>
    </section>
</main>
@endsection