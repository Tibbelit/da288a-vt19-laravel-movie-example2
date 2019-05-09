@extends('layouts.app')

@section('content')
<h1>Lägg till en ny film</h1>

<form action="{{ route('movies.store') }}" method="POST">
    @csrf
    <label for="title">Titel</label>
    <input type="text" name="title" id="title" class="form-control">
    <label for="year">År</label>
    <input type="number" name="year" id="year" class="form-control">
    <label for="poster">Poster</label>
    <input type="url" name="poster" id="poster" class="form-control">
    <hr>
    <input type="submit" class="btn btn-success" value="Spara film">
</form>

@endsection