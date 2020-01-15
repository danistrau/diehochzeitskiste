@extends('layouts.master') @section('container')
<main>
    <section class="main-head">
        <div class="main">
            <div>
                <h1 class="subheader">Checkliste</h1>
            </div>
        </div>
    </section>
    <section class="main-checklist">
        <ul class="checklist">
            @foreach($checklists as $item)
            <li class="checklist_item" id="checklist_item{{$item->id}}">
                <a
                    href="{{ route('checklist.show', $item->id) }}"
                    >{{ $item->title }}</a
                >
                <p
                    id="check"
                    class="checked"
                    href="{{ route('checklist.show', $item->id) }}"
                >
                    {{ $item->checked }}
                </p>
                <div>
                    <svg
                        class="checkEntry"
                        data-id="{{$item->id}}"
                        name="checked"
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 52 52"
                    >
                        <path
                            d="M26 0C11.664 0 0 11.663 0 26s11.664 26 26 26 26-11.663 26-26S40.336 0 26 0zm0 50C12.767 50 2 39.233 2 26S12.767 2 26 2s24 10.767 24 24-10.767 24-24 24z"
                        />
                        <path
                            d="M38.252 15.336l-15.369 17.29-9.259-7.407a1 1 0 00-1.249 1.562l10 8a.999.999 0 001.373-.117l16-18a1 1 0 10-1.496-1.328z"
                        />
                    </svg>

                    <svg
                        class="deleteEntry"
                        data-id="{{$item->id}}"
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 486.4 486.4"
                    >
                        <path
                            d="M446 70H344.8V53.5c0-29.5-24-53.5-53.5-53.5h-96.2c-29.5 0-53.5 24-53.5 53.5V70H40.4c-7.5 0-13.5 6-13.5 13.5S32.9 97 40.4 97h24.4v317.2c0 39.8 32.4 72.2 72.2 72.2h212.4c39.8 0 72.2-32.4 72.2-72.2V97H446c7.5 0 13.5-6 13.5-13.5S453.5 70 446 70zM168.6 53.5c0-14.6 11.9-26.5 26.5-26.5h96.2c14.6 0 26.5 11.9 26.5 26.5V70H168.6V53.5zm226 360.7c0 24.9-20.3 45.2-45.2 45.2H137c-24.9 0-45.2-20.3-45.2-45.2V97h302.9v317.2h-.1z"
                        />
                        <path
                            d="M243.2 411c7.5 0 13.5-6 13.5-13.5V158.9c0-7.5-6-13.5-13.5-13.5s-13.5 6-13.5 13.5v238.5c0 7.5 6 13.6 13.5 13.6zM155.1 396.1c7.5 0 13.5-6 13.5-13.5V173.7c0-7.5-6-13.5-13.5-13.5s-13.5 6-13.5 13.5v208.9c0 7.5 6.1 13.5 13.5 13.5zM331.3 396.1c7.5 0 13.5-6 13.5-13.5V173.7c0-7.5-6-13.5-13.5-13.5s-13.5 6-13.5 13.5v208.9c0 7.5 6 13.5 13.5 13.5z"
                        />
                    </svg>
                </div>
            </li>
            @endforeach
            <form action="{{ route('checklist.store') }}" method="post">
                @csrf
                <div>
                    <input class="input" type="text" name="title" value="" />
                </div>
                <button type="submit">Speichern</button
                ><a href="{{ route('checklist.index') }}"></a>
            </form>
        </ul>
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

        $(".deleteEntry").click(function(e) {
            e.preventDefault();
            let id = $(this).data("id");
            let url = "/checklist/" + id;
            console.log(url);
            $.ajax({
                url: url,
                type: "DELETE"
            })
            .done(function(data) {
                $("#checklist_item" + id).remove();
            });
            return false;
        });
    });

    $(".checkEntry").click(function(e) {
        e.preventDefault();
        let id = $(this).data("id");
        let url = "/checklist/" + id;
        console.log(url);
        $.post("/checklist/" + id, {
            price: $(this).val()
        })
        .done(function(data) {
            $(this).toggleClass("checked");
        });
        return false;
    });
</script>
@endpush
