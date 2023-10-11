@extends('layouts.admin')
@section('contenido')
    <div class="row">
        <div class="col-md-6">
            <h3>Editar Cateogría {{ $cateogria->nombre }}</h3>
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="/almacen/categoria" method="patch" autocomplete="off">
                @csrf
                <div class="form-group">
                    <label for="nombre">Nombre:</label>
                    <input type="text" name="nombre" class="form-control" placeholder="Nombre.." id="">
                </div>
                <div class="form-group">
                    <label for="descripcion">Descripcion:</label>
                    <input type="text" name="descripcion" class="form-control" id="">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                    <button type="reset" class="btn btn-danger">Cancelar</button>
                </div>
            </form>
            
        </div>
    </div>
    
@endsection