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
            <li
                class="checklist_item @if($item->checked) checked @endif"
                id="checklist_item{{$item->id}}"
            >
                <a
                    href="{{ route('checklist.show', $item->id) }}"
                    >{{ $item->title }}</a
                >
                <div>
                    @if(!$item->checked)
                   
                    <span class="checkEntry cursor-pointer"
                    data-id="{{$item->id}}"><i class="fa fa-check-circle-o fa-2x" ></i></span>

                    @endif

                    <span class="deleteEntry cursor-pointer" data-id="{{$item->id}}"
                        ><i class="fa fa-trash fa-2x"></i>
                    </span>
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
            }).done(function(data) {
                $("#checklist_item" + id).remove();
            });
            return false;
        });
    });

    $(".checkEntry").click(function(e) {
        e.preventDefault();
        let id = $(this).data("id");
        let url = "/checklist/" + id + "/markChecked";
        console.log(url);
        $.post(url).done(function(data) {
            $("#checklist_item" + id).toggleClass("checked");
            $(this).remove();
        });
        return false;
    });
</script>
@endpush
