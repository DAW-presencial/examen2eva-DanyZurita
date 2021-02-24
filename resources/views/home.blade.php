@extends('layout')

@section('form')

<h1>Formulario:</h1>

<div class="container">
    <form method="POST" action="{{ route('home') }}">
        @csrf

    <div class="form-group row">
        <label for="name" class="col-sm-2 col-form-label">Nombre</label>
        <div class="col-sm-8">
        <input name="name" type="text" class="form-control" id="input1s" placeholder="Nombre">
        </div>
    </div>
    <div class="form-group row">
        <label for="lastname1" class="col-sm-2 col-form-label">Primer Apellido</label>
        <div class="col-sm-4">
        <input name="lastname1" type="text" class="form-control" id="input2" placeholder="Primer Apellido">
        </div>
    </div>
    <div class="form-group row">
        <label for="lastname2" class="col-sm-2 col-form-label">Segundo Apellido</label>
        <div class="col-sm-4">
        <input name="lastname2" type="text" class="form-control" id="input3" placeholder="Segundo Apellido">
        </div>
    </div>

    <div class="form-group row">
        <label for="phone" class="col-sm-2 col-form-label">Teléfono</label>
        <div class="col-sm-4">
        <input name="phone" type="text" class="form-control" id="input4" placeholder="Teléfono">
        </div>
    </div>
    <div class="form-group row">
        <label for="email" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-4">
        <input name="email" type="email" class="form-control" id="input5" placeholder="Email">
        </div>
    </div>
    <div class="form-group row">
        <label for="dni" class="col-sm-2 col-form-label">DNI</label>
        <div class="col-sm-4">
        <input name="dni" type="text" class="form-control" id="input6" placeholder="DNI">
        </div>
    </div> 
    <div class="form-group row">
        <label for="company" class="col-sm-12 col-form-label">Nombre de la empresa</label>
        <div class="col-sm-10">
        <input name="company" type="text" class="form-control" id="input7" placeholder="Nombre de la empresa">
        </div>
    </div>
    <fieldset class="form-group">
        <div class="row">
        <legend class="col-form-label col-sm-2 pt-0">Status</legend>
        <div class="col-sm-10">
            <div class="form-check">
            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
            <label class="form-check-label" for="gridRadios1">
                Activo
            </label>
            </div>
            <div class="form-check">
            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
            <label class="form-check-label" for="gridRadios2">
                Inactivo
            </label>
            </div>
            <div class="form-check disabled">
            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" disabled>
            <label class="form-check-label" for="gridRadios3">
                De baja
            </label>
            </div>
        </div>
        </div>
    </fieldset>
    
    <div class="form-group row">
        <div class="col-sm-4">
        <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-4">
        <button type="reset" class="btn btn-danger">Reset</button>
        </div>
    </div>
    </form>
</div>
@endsection

@section('content')
    
<h1>Contenido:</h1>

<div class="container">
    <ul>
        @forelse($db as $item)
            <li>{{ $item }}</li>
        @empty
            <li>No hay items</li>
        @endforelse
    </ul>
</div>
@endsection