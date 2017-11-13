@extends('layouts/adminLteLayout')

@section('content')

 <div class="box box-primary">
  <div class="box-header with-border">
  <label class = "box-title">Lista de Cursos Creados</label>
  </div>

  <div class="box-header">
      <a href="{{ route('CrearCurso.create') }}" class="btn btn-info">Crear nuevo Curso</a>
            
</div>
<table class="table table-striped">
  <thead>
    <th>Nombre del Curso</th>
    <th>Tipo de curso</th>
    <th>Docente</th>
    <th>Estudiantes</th>
    <th>Acciones</th>
  </thead>
  <tbody>
      <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td>
          <a href="#" class="btn btn-warning"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a>
          <a href="#" onclick="return confirm('¿Seguro que deseas eliminarlo?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
        </td>
      </tr>

  </tbody>
</table>
</div>
<div class="col-md-2"></div>
@endsection