@extends('base2')

@section('dump')

    {{-- @foreach ($resultset as $document )

    {{ $document -> Title }}

    @endforeach --}}


    {{ dd($resultset) }}
        
@stop