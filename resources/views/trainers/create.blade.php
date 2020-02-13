@extends('layouts.app')

@section('title' , 'Trainer Create')

@Section('content')

    <div class="container">
        <div class="form-group">
            <label for="">Nombre</label>
            <input type="text" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
@endsection