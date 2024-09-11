@extends('layouts.main')

@section(section: 'content')

<div>

    <h1>I miei libri</h1>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Title</th>
            <th scope="col">Nationality</th>
            <th scope="col">Data d'uscita</th>
          </tr>
        </thead>
        <tbody>
            @foreach ( $movies as $movie )
            <tr>
                <td>{{$movie->id}}</td>
                <td>{{$movie->title}}</td>
                <td>{{$movie->nationality}}</td>
                <td>{{$movie->date}}</td>
            </tr>
            @endforeach
        </tbody>
      </table>

</div>

@endsection
