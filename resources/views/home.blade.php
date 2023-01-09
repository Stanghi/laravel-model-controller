@extends('layout.main')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Title</th>
                <th scope="col">Original title</th>
                <th scope="col">Nationality</th>
                <th scope="col">Date</th>
                <th scope="col">Vote</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($movies as $movie)
                <tr>
                    <th scope="row">{{ $movie->title }}</th>
                    <td>{{ $movie->original_title }}</td>
                    <td>{{ $movie->nationality }}</td>
                    <td>{{ $movie->date }}</td>
                    <td>{{ $movie->vote }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
