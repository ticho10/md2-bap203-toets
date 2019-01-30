@extends('layouts.master')

@section('content')
    @foreach($links as $link)
        <a href="{{ $link->url }}">{{$link->title}}</a><br>
        <p>{{$link->description}}</p><br>
    @endforeach
@stop

@section('action')
    @foreach($links as $link)
        <a href="{{ $link->url }}">{{$link->title}}</a><br>
    @endforeach
@stop
