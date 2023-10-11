@extends('layouts.admin')
@section('contenido')
    <div class="col-md-8">
        <h3>Listado de categorias <a href="categoria/create" class="text-align-right"><button class="btn btn-success">Nuevo</button></a></h3>
        @include('almacen.categoria.search')
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                        <th>Opciones</th>
                    </thead>
                    <tbody>
                        @foreach ($categorias as $cat)
                            <tr>
                                <td>{{ $cat->idcategoria }}</td>
                                <td>{{ $cat->nombre }}</td>
                                <td>{{ $cat->descripcion }}</td>
                                <td>
                                    <a href=""><button class="btn btn-info">Editar</button></a>
                                    <a href=""><button class="btn btn-danger">Eliminar</button></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{ $categorias->render() }}
        </div>
    </div>
@endsection