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
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <h1>Videojuegos</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-sm">
                <a class="btn btn-primary" href="{{ route('games.create') }}"> Añadir nuevo videojuego</a>
            </div>
        </div>
        <div class="row">
            <div class="col-sm">
                <table class="table thead-dark table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Plataforma</th>
                            <th scope="col">Precio</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($games as $key => $game)
                            <tr>
                               <td>{{ $game->id }}</td> 
                               <td>{{ $game->name }}</td> 
                               <td>{{ $game->platform }}</td> 
                               <td>$ {{ $game->price }}</td>
                               <td>
                                    <a class="btn btn-success" href="{{ route('games.edit', $game->id) }}">
                                        Editar
                                    </a>
                                    <form method="post" action="{{ route('games.destroy', $game->id) }}">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger">
                                            Eliminar
                                        </a>
                                    </form>
                               </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $games->links() }}
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