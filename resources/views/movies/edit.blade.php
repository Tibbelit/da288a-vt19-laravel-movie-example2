@extends('layouts.app')

@section('content')
<h1>Redigera: {{ $movie->title }}</h1>

<form action="{{ route('movies.update', ['movie' => $movie->id]) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="title">Titel</label>
    <input type="text" name="title" id="title" class="form-control" value="{{ $movie->title }}">
    <label for="year">År</label>
    <input type="number" name="year" id="year" class="form-control" value="{{ $movie->year }}">
    <label for="poster">Poster</label>
    <input type="url" name="poster" id="poster" class="form-control" value="{{ $movie->poster }}">
    <hr>
    <input type="submit" class="btn btn-success" value="Uppdatera film">
</form>

@endsection