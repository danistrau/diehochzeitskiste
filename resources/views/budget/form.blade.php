
@csrf
        <div>
            <label>Title</label><br/>
            <input
                type="text"
                name="title"
                value="{{ $budget->title }}"
                required
            />
        </div>
        <div>
            <label>Preis</label><br/>
            <input
                type="number"
                name="number"
                required
            />
        </div>

        <button type="submit">Speichern</button>
        <a href="{{ route('budget.index') }}"><button type="submit">Zurück</button></a>
