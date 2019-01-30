@extends('layouts.master')

@section('content')
    <form action="{{route('opslaan') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Titel</label>
        <input type="text" placeholder="Title" name="title" class="form-control" value="{{old('title')}}" required>
            @if($errors->has('title'))
                <p class="text-danger">{{ $errors->first('title') }}</p>
            @endif
            <label for="url">Link</label>
        <input type="text" placeholder="URL" name="url" class="form-control" value="{{old('url')}}" required>
            @if($errors->has('url'))
                <p class="text-danger">{{ $errors->first('url') }}</p>
            @endif
            <label for="description">Description</label>
        <textarea name="description" placeholder="description" cols="30" rows="10" class="form-control" required>{{old('description')}}</textarea>
            @if($errors->has('description'))
                <p class="text-danger">{{ $errors->first('description') }}</p>
            @endif
            <input type="submit" name="submit" class="btn btn-primary">
        </div>
    </form>
@stop

@section('sidebar')
    @foreach($links as $link)
        <a href="{{ $link->url }}">{{$link->title}}</a><br>
    @endforeach
@stop
