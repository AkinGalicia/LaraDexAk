@extends('layouts.app')

@section('title' , 'Trainer Create')

@Section('content')

    <form class="form-group" method="POST" action="/trainers">  
        @csrf      
        <div class="container">
            <div class="form-group">
                <label for="">Nombre</label>
                <input type="text" name="name" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </form>
@endsection