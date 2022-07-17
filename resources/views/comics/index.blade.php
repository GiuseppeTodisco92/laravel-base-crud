@extends('layout.base')

@section('page-title')
    tutti i fumetti
@endsection

@section('page-content')
<div class="container">
    <h1 class="text-center">Comics</h1>
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Immagine</th>
            <th scope="col">Titolo</th>
            <th scope="col">Serie</th>
            <th scope="col">Tipo</th>
            <th scope="col">Prezzo</th>
            <th scope="col">Azioni</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($comics as $comic)
            <tr>
                <td>{{$comic->id}}</td>
                <td><img style="width: 100px" src="{{$comic->thumb}}" alt="{{$comic->title}}"></td>
                <td>{{$comic->title}}</td>
                <td>{{$comic->series}}</td>
                <td>{{$comic->price}}</td>
                <td>{{$comic->id}}</td>
                <td><a type="button" class="btn btn-primary" href="{{route('comics.show', $comic->id)}}">Visualizza</a></td>
                
            </tr>              
          @endforeach
        </tbody>
      </table>
</div>
    
    @dump($comics)
@endsection