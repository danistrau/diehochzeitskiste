@csrf
<div>
    <label>Preis</label><br />
    <input type="number" name="price" />
</div>

<button type="submit">Speichern</button>
<a href="{{ route('budget.index') }}"><button type="submit">Zurück</button></a>
