@extends('layouts.master') @section('container')
<main>
    <section class="main">
        <div class="main-form">
            <h2>Bilder hochladen</h2>
        <form class="form" id="form" method="POST" action="{{ action('AdminController@uploadImgs') }}" enctype="multipart/form-data">
        <input type="hidden"  name="type" value="{{$type}}"/>
                @csrf
                <div>
                    <label for="images">Bild auswählen</label>
                    <div>
                        <input type="file" name="images[]" id="images" multiple>
                    </div>
                </div> 
                <div>
                    <button type="submit">Speichern</button>
                </div>
            </form>
        </div>
    </section>
    <section>
        @if(count($imgs))
        <ul>
            @foreach($imgs as $img)
            <li>
               <img src="{{asset('storage/'.$img)}}" />
            </li>
            @endforeach
        </ul>
        @else
        Es gibt keine Bilder
        @endif
    </section>
</main>
@endsection