@extends('layout.base')

@section('page-title')
    Creazione nuovo comics
@endsection

@section('page-content')
    <div class="container">

        <h1>Inserisci un nuovo Fumetto</h1>
        <form action="{{route('comics.store')}}" method="POST">
            @csrf 
            {{-- csrf serve per evitare che ci siano attacchi al nostro backend  --}}
    
            <div class="mb-3">
              <label for="title" class="form-label">Titolo</label>
              <input type="text" class="form-control" id="title" name="title">
            </div>
    
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control" id="description" rows="3" name="description"></textarea>
            </div>
    
            <div class="mb-3">
                <label for="thumb" class="form-label">Link image</label>
                <input type="text" class="form-control" id="thumb" name="thumb">
            </div>
    
            <div class="mb-3">
                <label for="price" class="form-label" step="0.01">prezzo</label>
                <input type="number" class="form-control" id="price" name="price">
            </div>
    
            <div class="mb-3">
                <label for="series" class="form-label">Serie</label>
                <input type="text" class="form-control" id="series" name="series">
            </div>
    
            <div class="mb-3">
                <label for="sale_date" class="form-label">data</label>
                <input type="date" class="form-control" id="sale_date" name="sale_date">
            </div>
    
            <div class="mb-3">
                <label for="type" class="form-label">tipo</label>
                <input type="text" class="form-control" id="type" name="type">
            </div>
    
            <button type="submit" class="btn btn-primary">Crea</button>

          </form>

    </div>
@endsection