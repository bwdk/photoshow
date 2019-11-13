@extends('layouts.app')

@section('content')
<div class="container">
    <h3>{{ $photo->title }}</h3>
    <p>{{ $photo->description }}</p>
    <form action="{{ route('photo-destroy', $photo->id) }}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit" name="button" class="btn btn-danger float-right">Delete</button>
    </form>
    <a href="{{ route('album-show', $photo->album->id) }}" class="btn btn-info">Go Back</a>
    <br>
    <small>Size: {{ $photo->size}} </small>
    <hr>
    <img src="/storage/albums/{{ $photo->album_id}}/{{ $photo->photo }}" alt="{{ $photo->photo }}" height="600px">
    <hr>
</div>
@endsection