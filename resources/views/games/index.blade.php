@extends('layouts.app')

@section('content')
    <div class="row hidden-md-up">
        <div class="col-md-6">
            <h1>Videojuegos</h1>
        </div>
        <div class="col-md-6 py-2">
            <a class="btn btn-primary btn-outline" href="{{ route('games.create') }}"> Añadir nuevo videojuego</a>
        </div>
        <div class="py-5">
            <div class="container">
                <div class="row hidden-md-up">
                    @foreach($games as $key => $game)
                        <div class="col-md-4">
                            <div class="card" style="width: 18rem;">
                                <img src="{{ $game->cover }}" class="card-img-top img-fluid img-thumbnail" alt="cover">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $game->name }}</h5>
                                    <p class="card-text">{{ $game->description }}</p>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><strong>Platform:</strong> {{$game->platform}}</li>
                                    <li class="list-group-item"><strong>Price:</strong> ${{$game->price}}</li>
                                </ul>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <a class="btn btn-success btn-block" href="{{ route('games.edit', $game->id) }}">
                                                Editar
                                            </a>
                                        </div>
                                        <div class="col-md-6">      
                                            <form method="post" action="{{ route('games.destroy', $game->id) }}">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger">
                                                    Eliminar
                                                </a>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="row  hidden-md-up">
                    <div class="col-md-6">
                        {{ $games->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection