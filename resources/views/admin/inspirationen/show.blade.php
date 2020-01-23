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
                <img src="{{ asset('storage/'.$img) }}" />
            </li>
            <button type="button" class="delete_image" data-filename="{{$img}}">
                <i class="fa fa-trash-o"></i>
            </button>
            @endforeach
        </ul>
        @else Es sind keine Bilder vorhanden @endif
    </section>
    <a href="{{ route('admin.inspirationen') }}"><button type="submit">Zurück</button></a>
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
            var img = $(this).data("filename");
            var url = "{{route("admin.inspirationen.img.delete")}}?img=" + btoa(img) ;
            $.ajax({
                type: "DELETE",
                url: url,
                success: function(data) {
                    console.log("ajaxdata", data);
                }
            });
        });
    });
</script>
@endpush
