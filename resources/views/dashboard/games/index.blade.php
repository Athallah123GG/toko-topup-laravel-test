@extends('layouts.master')

@section('page-css')

@endsection

@section('main-content')
<h1>Index Game Bos</h1>
<a href="{{ route('games.create') }}">Add Game</a>

<table class="table">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Game</th>
            <th scope="col">Developer</th>
            <th scope="col">Foto</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($games as $game)
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $game->name }}</td>
            <td>{{ $game->developer }}</td>
            <td>
                <img src="{{ asset('storage/games/games_covers/'.$game->image) }}" alt="" style="max-width: 200px;">
            </td>
            <td>
                <a href="{{ route('games.edit' ,$game->id) }}">Edit</a>
                <form action="{{ route('game.destroy', $game->id) }}"
                    method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="">Delete</button>
                </form>
                <a href="#">Sikat</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{{ $games->links() }}

@endsection

@section('page-js')

@endsection
