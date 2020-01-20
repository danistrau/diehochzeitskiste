@extends('layouts.master') @section('container')
<main>
    <section class="main">
        <h1 class="subheader">{{ $type }}</h1>
        <div class="main-form">
            <h2>Bilder hochladen</h2>
            <form
                class="form"
                id="form"
                method="POST"
                action="{{ action('AdminController@uploadImgs') }}"
                enctype="multipart/form-data"
            >
                <input type="hidden" name="type" value="{{ $type }}" />
                @csrf
                <div>
                    <label for="images">Bild auswählen</label>
                    <div>
                        <input
                            type="file"
                            name="images[]"
                            id="images"
                            multiple
                        />
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
        <ul class="imgs">
            @foreach($imgs as $img)
            <li>
                <img src="{{ asset('storage/'.$img) }}" id="img" />
            </li>
            <button type="button" id="delete_image">
                <i class="fa fa-trash-o"></i>
            </button>
            @endforeach
        </ul>
        @else Es sind keine Bilder vorhanden @endif
    </section>
</main>
@endsection @push('scripts')

<script>
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": document.head.querySelector(
                    'meta[name="csrf-token"]'
                ).content
            }
        });

        $(".delete_image").click(function() {
            var img = $("#img").attr("src");
            alert(img);
            $.ajax({
                type: "GET",
                url: "/deleteImage",
                data: { img: img },
                success: function(data) {
                    console.log("ajaxdata", data);
                }
            });
        });
    });
</script>
@endpush
