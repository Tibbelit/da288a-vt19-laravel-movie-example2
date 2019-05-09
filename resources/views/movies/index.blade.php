@extends('layouts.app')

@section('content')
<h1>Filmer</h1>

<table class="table table-striped">
    <tr>
        <th>Id</th>
        <th>Titel</th>
        <th>År</th>
        <th>Redigera</th>
        <th>Radera</th>
    </tr>
@foreach($movies as $movie)
    <tr>
        <td>{{ $movie->id }}</td>
        <td><a href="{{ route('movies.show', ['movies' => $movie->id]) }}">{{ $movie->title }}</a></td>
        <td>{{ $movie->year }}</td>
        <td><a href="{{ route('movies.edit', ['movies' => $movie->id]) }}" class="btn btn-primary">Redigera</a></td>
        <td>
            <form action="{{ route('movies.destroy', ['movie' => $movie->id]) }}" method="POST">
                @method('DELETE')
                @csrf
                <input type="submit" class="btn btn-danger" value="Radera">
            </form>
        </td>
    </tr>
@endforeach
</table>
@endsection