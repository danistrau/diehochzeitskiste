@csrf
@php 
$edit = $edit ?? false;
@endphp
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="form-group">
    <label>Titel</label>
    <input type="text" name="title" value="{{ $edit ? $blog->title : old('title') }}" required />
</div>

<div class="form-group">
    <label>Text</label>
    <textarea name="text" style="width:100%; height:150px;">{{ $edit ? $blog->text : old('text') }}</textarea>
</div>

<div class="form-group form-check">
    <input
        type="checkbox"
        class="form-check-input"
        id="checkPublished"
        name="is_published"
        {{ ($edit ? $blog->is_published : old('is_published')) ? 'checked' : '' }}>
    <label for="checkPublished"> Publish</label>
</div>

<button type="submit">Speichern</button>
<a href="{{ route('blogs.index') }}" class="btn btn-outline-primary">
	<button type="submit">Zurück</button></a >
