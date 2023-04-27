@extends('base2')

@section('dump')

    @foreach ($resultset as $document) 
    @if(isset($document->URL) && isset($document->Title) && isset($document->Content))
       <p> Link:  {{ $document->URL[0] }} </p>  
       <p> Title: {{ $document->Title[0] }} </p>
       <p> Description{{ $document->Content[0] }} </p>
    @endif
    @endforeach


            
@stop
