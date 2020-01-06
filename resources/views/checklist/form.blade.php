@csrf
<div>
    <label>Title</label><br />
    <input type="text" name="title" value="{{ $checklist->title }}" required />
</div>
<div>
    <label>Erledigt</label><br />
    <input type="checkbox" id="checked" name="checked" onClick="checkbox()" />
</div>

<button type="submit">Speichern</button>
<a href="{{ route('checklist.index') }}"
    ><button type="submit">Zurück</button></a
>
