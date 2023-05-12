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

    <div>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </div>


    <form action="{{ route('pastas.store') }}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="src" class="form-label">Immagine</label>
          <input type="text" class="form-control" id="src" name="src" value="{{ old('src') }}">
        </div>

        <div class="mb-3">
            <label for="titolo" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="titolo" name="titolo"  value="{{ old('titolo') }}">
        </div>

        <div class="mb-3">
            <label for="tipo" class="form-label">Tipo</label>
            <select class="form-select" id="tipo" name="tipo">
                <option selected>Scegli il tipo</option>
                <option value="lunga" {{ old('tipo') === 'lunga' ? 'selected' : null }}>Lunga</option>
                <option value="corta" {{ old('tipo') === 'corta' ? 'selected' : null }}>Corta</option>
                <option value="cortissima" {{ old('tipo') === 'cortissima' ? 'selected' : null }}>Cortissima</option>
              </select>
        </div>
        <div class="mb-3">
            <label for="cottura" class="form-label">Cottura (min)</label>
            <input type="number" class="form-control" id="cottura" name="cottura" min="5" max="20"  value="{{ old('cottura') }}">
        </div>
        <div class="mb-3">
            <label for="peso" class="form-label">Peso (gr)</label>
            <input type="number" class="form-control" id="peso" name="peso" min="250" max="1000"  value="{{ old('peso') }}">
        </div>
        <div class="mb-3">
            <label for="descrizione" class="form-label">Descrizione</label>
            <textarea class="form-control" id="descrizione" rows="3" name="descrizione">{{ old('descrizione') }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>




</div>

@endsection
