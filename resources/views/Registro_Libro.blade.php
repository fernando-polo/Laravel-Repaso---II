@extends('layouts.app')


@section('titulo', 'Registro de Libro')

@section('contenido')



{{-- Formulario --}}
  <div class="container mt-5 col-md-6">
    <div class="card">
      <div class="card-header fs-5 text-center ">
        Registro de Libros
      </div>
      <div class="card-body text-justify">
        <form action="/RegistrarLibro" method="POST">
          @csrf
          <div class="mb-3">
            <label for="ISBN" class="form-label">ISBN: </label>
            <input type="text" class="form-control" name="txtISBN">
            <small class="first text-danger">{{ $errors->first('txtISBN') }}</small>
          </div>
          <div class="mb-3">
            <label for="Titulo" class="form-label">Título: </label>
            <input type="text" class="form-control" name="txtTitulo">
            <small class="first text-danger">{{ $errors->first('txtTitulo') }}</small>
          </div>
          <div class="mb-3">
            <label for="Autor" class="form-label">Autor: </label>
            <input type="text" class="form-control" name="txtAutor">
            <small class="first text-danger">{{ $errors->first('txtAutor') }}</small>
          </div>
          <div class="mb-3">
            <label for="Paginas" class="form-label">Páginas: </label>
            <input type="text" class="form-control" name="txtPaginas">
            <small class="first text-danger">{{ $errors->first('txtPaginas') }}</small>
          </div>
          <div class="mb-3">
            <label for="Año" class="form-label">Año: </label>
            <input type="text" class="form-control" name="txtAño">
            <small class="first text-danger">{{ $errors->first('txtAño') }}</small>
          </div>
          <div class="mb-3">
            <label for="Editorial" class="form-label">Editorial: </label>
            <input type="text" class="form-control" name="txtEditorial">
            <small class="first text-danger">{{ $errors->first('txtEditorial') }}</small>
          </div>
          <div class="mb-3">
            <label for="Email" class="form-label">Email de Editorial: </label>
            <input type="text" class="form-control" name="txtEmail">
            <small class="first text-danger">{{ $errors->first('txtEmail') }}</small>
          </div>
          <div class="d-grid gap-2 mt-2 mb-1">
            <button type="submit" class="btn btn-sm">Registrar libro</button>
          </div>
        </form>
      </div>
    </div>
  </div>
{{-- Termina Formulario --}}
@endsection
    