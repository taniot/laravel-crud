@extends('layout.app')

@section('page.title')
<div class="container">
   {{ $pasta->titolo }}
</div>
@endsection

@section('page.main')

<div class="container">
    <div>
        <a href="{{ route('pastas.index') }}" class="btn btn-primary btn-sm">Torna all'elenco</a>
    </div>
    {!! $pasta->descrizione !!}
</div>

@endsection
