@extends('layout.app')

@section('page.title')
<div class="container">
    Elenco Paste
</div>
@endsection

@section('page.main')

<div class="container">
    <a href="{{ route('pastas.create') }}" class="btn btn-success">Crea una nuova pasta</a>
<table class="table">
    <thead>
      <tr>

        <th scope="col">Titolo</th>
        <th scope="col">Cottura</th>
        <th scope="col">Tipo</th>
        <th scope="col">Peso</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($pastas as $pasta)
        <tr>
            <td>{{ $pasta->titolo }}</td>
            <td>{{ $pasta->cottura }} min</td>
            <td>{{ $pasta->tipo }}</td>
            <td>{{ $pasta->peso }} gr</td>
            <td>
                <a href="{{ route('pastas.show', $pasta->id) }}" class="btn btn-primary btn-sm">Dettagli</a>
                 <a href="{{ route('pastas.edit', $pasta->id) }}" class="btn btn-primary btn-sm">Modifica</a>
                 <form action="{{ route('pastas.destroy', $pasta->id) }}" method="POST">
                    @csrf
                    {{-- aggiungiamo il metodo --}}
                    @method('DELETE')
                    <input type="submit" value="Cancella" class="btn btn-danger btn-sm">
                </form>
            </td>
          </tr>
    @endforeach
    </tbody>
  </table>
</div>

@endsection
