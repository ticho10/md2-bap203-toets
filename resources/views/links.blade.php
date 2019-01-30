@extends('layouts.master')

@section('content')
    <p>Text</p>
@stop

@section('sidebar')
    @foreach($links as $link)
        <a href="{{ $link->url }}">{{$link->title}}</a><br>
    @endforeach
@stop
