@extends('layout')
@section('create-artwork') 

 @foreach ($artworks as $artwork )

<h2>{{$artwork->name}}</h2>


@endforeach

@endsection