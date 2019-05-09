@extends('layouts.app')

@section('content')
<h1>{{ $movie->title }} ({{ $movie->year }})</h1>
<img src="{{ $movie->poster }}" alt="{{ $movie->title }}" class="poster-img">

@endsection