@extends('layouts.app')

@section('content')
        <h1>{{$title}}</h1>
        @if(count($goers) > 0)
                <ul class = "list-group">
                        @foreach ($goers as $goer)
                                <li class = "list-group-item">{{$goer}}</li>
                        @endforeach
                </ul>
        @endif
@endsection
