<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Taller</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Playstore</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('games.index') }}">Games</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row hidden-md-up">
            <div class="col-md-6">
                <h1>Videojuegos</h1>
            </div>
        </div>
        <div class="py-5">
            <div class="container">
                <div class="row hidden-md-up">
                    @foreach($games as $key => $game)
                        <div class="col-md-4">
                            <div class="card" style="width: 18rem;">
                                <img src="https://images.vexels.com/media/users/3/153079/isolated/preview/eec464c3ad74f3f210bb2e3fcfa63ed1-icono-plano-de-caja-de-disco-compacto.png" class="card-img-top" alt="...">
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
                                            <a class="btn btn-success" href="{{ route('games.edit', $game->id) }}">
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
                    <div class="col-md-6">
                        <a class="btn btn-primary" href="{{ route('games.create') }}"> Añadir nuevo videojuego</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>