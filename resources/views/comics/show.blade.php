@extends('layout.base')

@section('page-title')
    <h1>{{$comic->title}}</h1>
@endsection

@section('page-content')
<div class="container">
    <h1 class="text-center py-5">{{$comic->title}}</h1>
    <div class="d-flex flex-column align-items-center gap-1">
        <img width=200 src="{{$comic->thumb}}" alt="{{$comic->title}}" class="py-5">
        <p>{{$comic->description}}</p> 
            
    </div>
    <div class="d-flex justify-content-between">
        <div>
            <h2>Dettagli</h2>
            <div>{{$comic->series}}</div>
            <div>{{$comic->price}}€</div>
            </div>
            <div>
                <a type="button" class="btn btn-primary" href="{{route('comics.index')}}">home</a>
            </div>
    </div>
   
    

    
</div>
    