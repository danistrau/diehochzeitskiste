@csrf

<div class="form-group">
    <label>Titel</label>
    <input type="text" name="title" value="{{ $blog->title }}" required />
</div>

<div class="form-group">
    <label>Text</label>
    <textarea name="text" maxlength="5000">{{ $blog->text }}</textarea>
</div>

<div class="form-group form-check">
    <input
        type="checkbox"
        class="form-check-input"
        id="checkPublished"
        name="is_published"
        {{$blog->is_published ? 'checked' : '' }}>
    <label for="checkPublished"> Publish</label>
</div>

<button type="submit">Speichern</button>
<a href="{{ route('blogs.index') }}" class="btn btn-outline-primary">
	<button type="submit">Zurück</button></a >
