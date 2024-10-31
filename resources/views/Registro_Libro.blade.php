@extends('layouts.app')


@section('titulo', 'Registro de Libro')

@section('contenido')

@session ('libroguardado')
<script>
    Swal.fire({
      text: "Todo correcto: Libro '{{$value}}' guardado.",
      icon: "success"
  });
</script>
@endsession

{{-- Formulario --}}
  <div class="container mt-5 col-md-6">
    <div class="card">
      <div class="card-header fs-5 text-center ">
        {{__('Registro de Libros')}}
      </div>
      <div class="card-body text-justify">
        <form action="/RegistrarLibro" method="post">
          @csrf
          <div class="mb-3">
            <label for="ISBN" class="form-label">{{__('ISBN')}}</label>
            <input type="text" class="form-control" name="txtISBN" value="{{ old('txtISBN') }}">
            <small class="first text-danger">{{ $errors->first('txtISBN') }}</small>
          </div>
          <div class="mb-3">
            <label for="Titulo" class="form-label">{{__('Título:')}}</label>
            <input type="text" class="form-control" name="txtTitulo" value="{{ old('txtTitulo') }}">
            <small class="first text-danger">{{ $errors->first('txtTitulo') }}</small>
          </div>
          <div class="mb-3">
            <label for="Autor" class="form-label">{{__('Autor:')}}</label>
            <input type="text" class="form-control" name="txtAutor" value="{{ old('txtAutor') }}">
            <small class="first text-danger">{{ $errors->first('txtAutor') }}</small>
          </div>
          <div class="mb-3">
            <label for="Paginas" class="form-label">{{__('Páginas:')}}</label>
            <input type="text" class="form-control" name="txtPaginas" value="{{ old('txtPaginas') }}">
            <small class="first text-danger">{{ $errors->first('txtPaginas') }}</small>
          </div>
          <div class="mb-3">
            <label for="Año" class="form-label">{{__('Año:')}}</label>
            <input type="text" class="form-control" name="txtAño" value="{{ old('txtAño') }}">
            <small class="first text-danger">{{ $errors->first('txtAño') }}</small>
          </div>
          <div class="mb-3">
            <label for="Editorial" class="form-label">{{__('Editorial:')}}</label>
            <input type="text" class="form-control" name="txtEditorial" value="{{ old('txtEditorial') }}">
            <small class="first text-danger">{{ $errors->first('txtEditorial') }}</small>
          </div>
          <div class="mb-3">
            <label for="Email" class="form-label">{{__('Email de Editorial:')}}</label>
            <input type="text" class="form-control" name="txtEmail" value="{{ old('txtEmail') }}">
            <small class="first text-danger">{{ $errors->first('txtEmail') }}</small>
          </div>
          <div class="d-grid gap-2 mt-2 mb-1">
            <button type="submit" class="btn btn-sm">{{__('Registrar libro')}}</button>
          </div>
        </form>
      </div>
    </div>
  </div>
{{-- Termina Formulario --}}
@endsection
    