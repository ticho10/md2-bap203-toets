@extends('layouts.master')

@section('content')
    <form action="{{route('opslaan') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Titel</label>
        <input type="text" placeholder="Title" name="title" class="form-control">
            <label for="url">Link</label>
        <input type="text" placeholder="URL" name="url" class="form-control">
            <label for="description">Description</label>
        <textarea name="description" id="" placeholder="description" cols="30" rows="10" class="form-control"></textarea>
        </div>
    </form>
@stop
