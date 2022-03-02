@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm">
            <h1>Editando {{ $game->name }}</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-sm">
            <form method="post" action="{{ route('games.update', $game->id) }}" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="exampleInputEmail1">Nombre</label>
                    <input value="{{ $game->name }}" type="text" name="name" class="form-control"  placeholder="Escribe el nombre del videojuego">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Descripcion</label>
                    <input value="{{ $game->description }}" type="text" name="description" class="form-control"  placeholder="Escribe el valor">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Plataforma</label>
                    <select required value="{{  $game->platform }}" class="form-control" name="platform">
                        <option value="Playstation">Playstation</option>
                        <option value="Xbox">Xbox</option>
                        <option value="Nintendo switch">Nintendo switch</option>
                        <option value="Otro">Otro</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Precio</label>
                    <input required value="{{ $game->price }}" type="number" name="price" class="form-control"  placeholder="Escribe el valor">
                </div>

                <div class="form-group">
                    <input class="btn btn-primary" type="submit" value="Guardar">
                </div>
            </form>
        </div>
    </div>
@endsection