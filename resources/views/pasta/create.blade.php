@extends('layout.app')

@section('page.title')
<div class="container">
  Inserisci una nuova pasta
</div>
@endsection

@section('page.main')

<div class="container">
    <div>
        <a href="{{ route('pastas.index') }}" class="btn btn-primary btn-sm">Torna all'elenco</a>
    </div>

    <form action="{{ route('pastas.store') }}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="src" class="form-label">Immagine</label>
          <input type="text" class="form-control" id="src" name="src">
        </div>

        <div class="mb-3">
            <label for="titolo" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="titolo" name="titolo">
        </div>

        <div class="mb-3">
            <label for="tipo" class="form-label">Tipo</label>
            <select class="form-select" id="tipo" name="tipo">
                <option selected>Scegli il tipo</option>
                <option value="lunga">Lunga</option>
                <option value="corta">Corta</option>
                <option value="cortissima">Cortissima</option>
              </select>
        </div>
        <div class="mb-3">
            <label for="cottura" class="form-label">Cottura (min)</label>
            <input type="number" class="form-control" id="cottura" name="cottura" min="5" max="20">
        </div>
        <div class="mb-3">
            <label for="peso" class="form-label">Peso (gr)</label>
            <input type="number" class="form-control" id="peso" name="peso" min="250" max="1000">
        </div>
        <div class="mb-3">
            <label for="descrizione" class="form-label">Descrizione</label>
            <textarea class="form-control" id="descrizione" rows="3" name="descrizione"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>




</div>

@endsection
