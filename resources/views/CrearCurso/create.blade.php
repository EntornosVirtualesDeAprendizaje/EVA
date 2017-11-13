@extends('layouts/adminLteLayout')

@section('content')
<hr>
<div class="box box-primary">
  <div class="box-header with-border">
  <label class = "box-title">Ingrese los datos del Curso: </label>

<form>

  <div class="box-header">
    <div class="col-md-6 mb-3">
      <label>Nombre: </label>
      <input type="text" class="form-control" id="nombre" placeholder="Nombre del curso" required>
    </div>

    <div class="col-md-6 mb-3">
      <label>Contraseña: </label>
      <input type="text" class="form-control" id="contraseña" placeholder="Contraseña del Curso" required>
    </div>
  </div>

  <div class="box-header">
    <div class="col-md-6 mb-3">
      <label>Evaluación:</label>
      <select multiple class="form-control" id="exampleFormControlSelect2">
      <option>Examen</option>
      <option>Trabajo Grupal</option>
      <option>Proyecto</option>
      <option>Tareas</option>
      <option>Defensa</option>
    </select>
    </div>

    <div class="col-md-3 mb-3">
      <label ></label>
      <input type="text" class="form-control" id="validationServer04" placeholder="State" required>
    </div>

    <div class="col-md-3 mb-3">
      <label ></label>
      <input type="text" class="form-control" id="validationServer05" placeholder="Zip" required>
    </div>
  </div>
  <hr>

<div>
  <button class="btn btn-primary" type="submit">Crear Curso</button>
</div>
</form>
</div>
@endsection