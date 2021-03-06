@extends('layouts.app')
@section('title','Registrar')
@section('css')
@parent
{{-- link de css --}}
@show

@section('script-top')
@parent
{{-- link de js --}}
@show

@section('script-bottom')
{{-- link de js --}}
@parent
@show

@section('navbar')
@include('include.nav')
@endsection

@section('sidebar')
@include('include.aside')
@endsection

@section('footer')
@include('include.footer')
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Inscripción</div>

                <div class="panel-body">
    <div class="alert alert-success" role="alert">
        <h5>Completar primero <br>
            1. (AÑO ESCOLAR) 2. (ALUMNO) 3. (REPRESENTANTE). <br>
            Para lograr, "<b>Actualizar</b>" datos
        </h5>
    </div>
    @if ($errors->any())
    <div class="alert alert-danger">
    <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
    </ul>
    </div>
    @elseif(session('añoescolar'))
    <div class="alert alert-info" role="alert">
        <li>{{session('añoescolar')}}</li>
    </div>
    @elseif(session('alumno'))
    <div class="alert alert-info" role="alert">
        <li>{{session('alumno')}}</li>
    </div>
    @elseif(session('representante'))
    <div class="alert alert-info" role="alert">
        <li>{{session('representante')}}</li>
    </div>
    @endif
        <div class="anioescolar">
        {!! Form::open(["route"=>["anioescolar.store"],"method"=>"POST", "autocomplete"=>"off","enctype"=>"multipart/form-data"]) !!}
        <span><h2 class="text-primary">Año escolar</h2></span> <br>
        {!! Form::token()!!}
<div class="row">
    <div class="col-md-3">
        {!! Form::label("fechaIngreso", "Fecha de Ingreso", ["class"=>"label label-primary"]) !!}
        {!! Form::date("fechaIngreso", old('fechaIngreso'), ["class"=>"form-control"]) !!}
    </div>
    <div class="col-md-3">
        {!! Form::label("cedula", "Cedula", ["class"=>"label label-primary"]) !!}
        {!! Form::text("cedula", old('cedula'), ["class"=>"form-control", "placeholder" => "Cedula","maxlength"=>"10"]) !!}
    </div>
    <div class="col-md-3">
        {!! Form::label("matricula", "Matricula", ["class"=>"label label-primary"]) !!}
        {!! Form::text("matricula", old('matricula'), ["class"=>"form-control", "placeholder"=>"matricula","maxlength"=>"10"]) !!}
    </div>
</div>
<div class="row">
    <div class="col-md-2">
        {!! Form::label("grado", "Grado", ["class"=>"label label-primary"]) !!}
        {!! Form::text("grado", old('grado'), ["class"=>"form-control", "placeholder"=>"Grado","maxlength"=>"2"]) !!}
    </div>
    <div class="col-md-2">
        {!! Form::label("seccion", "Seccion", ["class"=>"label label-primary"]) !!}
        {!! Form::text("seccion", old('seccion'), ["class"=>"form-control","placeholder"=>"Seccion","maxlength"=>"2"]) !!}
    </div>
</div>
        {!! Form::submit("Registrar", ["class"=>"btn btn-primary"]) !!}
        {!!link_to_route('inscripcion.index','Regresar',"",['class'=>'btn btn-success'])!!}
        {!! Form::close() !!}
    </div>
    <div class="alumno">
        <h2 class="text-success">Alumnos</h2>
        {!! Form::open(["route"=>["alumno.store"],"method"=>"POST", "autocomplete"=>"off","enctype"=>"multipart/form-data"]) !!}
        {!! Form::token()!!}
        <img src="">{!! Form::file('fotos', ["class"=>"text-primary","multiple"]) !!}
    <div class="row">
        <div class="col-md-3">
        {!! Form::label("nombres", "Nombres", ["class"=>"label label-success"]) !!}
        {!! Form::text("nombres", old("nombres"), ["class"=>"form form-control","maxlength"=>"25","placeholder"=>"Nombre","maxlength"=>"20"]) !!}
        </div>
        <div class="col-md-3">
        {!! Form::label("segNombres", "Segundo Nombre", ["class"=>"label label-success"]) !!}
        {!! Form::text("segNombres", old('segNombres'), ["class"=>"form form-control","maxlength"=>"25","placeholder"=>"Segundo Nombre","maxlength"=>"20"]) !!}
        </div>
        <div class="col-md-3">
        {!! Form::label("apellidos", "Apellido", ["class"=>"label label-success"]) !!}
        {!! Form::text("apellidos", old('apellidos'), ["class"=>"form form-control","maxlength"=>"25","placeholder"=>"Apellido","maxlength"=>"20"]) !!}
        </div>
        <div class="col-md-3">
        {!! Form::label("segApellidos", "Segundo Apellido", ["class"=>"label label-success"]) !!}
        {!! Form::text("segApellidos", old('segApellidos'), ["class"=>"form form-control","maxlength"=>"25","placeholder"=>"Segundo Apellido","maxlength"=>"20"]) !!}
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
        {!! Form::label("estatus", "Estatus", ["class"=>"label label-success"]) !!}
        {!! Form::text("estatus", old('estatus'), ["class"=>"form-control", "placeholder"=>"Estatus","maxlength"=>"20"]) !!}
        </div>
        <div class="col-md-3">
        {!! Form::label("lgNacimiento", "Lugar de Nacimiento", ["class"=>"label label-success"]) !!}
        {!! Form::text("lgNacimiento", old('lgNacimiento'), ["class"=>"form form-control","placeholder"=>"Lugar de Nacimiento","maxlength"=>"50"]) !!}
        </div>
        <div class="col-md-2">
        {!! Form::label("dia", "Dia", ["class"=>"label label-success"]) !!}
        {!! Form::text("dia", 0, ["class"=>"form form-control","maxlength"=>"2"]) !!}
        </div>
        <div class="col-md-2">
        {!! Form::label("mes", "mes", ["class"=>"label label-success"]) !!}
        {!! Form::text("mes", 0, ["class"=>"form form-control","maxlength"=>"2"]) !!}
        </div>
        <div class="col-md-2">
        {!! Form::label("anio", "año", ["class"=>"label label-success"]) !!}
        {!! Form::text("anio", /*\Carbon\Carbon::createFromDate()->age*/0, ["class"=>"form form-control","maxlength"=>"4"]) !!}
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
        {!! Form::label("direccion", "Dirección", ["class"=>"label label-success"]) !!}
        {!! Form::textarea("direccion", old('direccion'), ["class"=>"form form-control","placeholder"=>"Dirección",'rows' => 2, 'cols' => 40]) !!}
        </div>
        <div class="col-md-6">
        {!! Form::label("email", "E-Mail Dirección ", ["class"=>"label label-success"]) !!}
        {!! Form::text("email", old('email'), ["class"=>"form form-control","placeholder"=>"E-Mail Dirección","maxlength"=>"20"]) !!}
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
        {!! Form::label("sexo", old('sexo'), ["class"=>"label label-success"]) !!}<br>
        {!! Form::label("sexo", "Femenino", ["class"=>"text-primary"]) !!}
        {!! Form::radio('sexo', 'Femenino')!!}
        {!! Form::label("sexo", "Masculino", ["class"=>"text-primary"]) !!}
        {!! Form::radio('sexo', 'Masculino')!!} <br>
        </div>
        <div class="col-md-4">
        {!! Form::label("enfemPadecida", "Enfermedades Padecidas", ["class"=>"label label-danger"]) !!}
        {!! Form::text("enfemPadecida", old('enfemPadecida'), ["class"=>"form-control", "placeholder"=>"Enfermedades Padecidas","maxlength"=>"20"]) !!}
        </div>
        <div class="col-md-4">
        {!! Form::label("enfemPsicologica", "Enfermedades Psicologíca", ["class"=>"label label-danger"]) !!}
        {!! Form::text("enfemPsicologica", old('enfemPsicologica'), ["class"=>"form-control", "placeholder"=>"Enfermedades Psicologíca","maxlength"=>"20"]) !!}
        </div>
    </div>
    <div class="row">
        <div class="col-md-2">
        {!! Form::label("camisas", "Camisa", ["class"=>"label label-info"]) !!}
        {!! Form::text("camisas", old('camisas'), ["class"=>"form-control", "placeholder"=>"S","maxlength"=>"2"]) !!}
        </div>
        <div class="col-md-2">
        {!! Form::label("pantalon", "Pantalon", ["class"=>"label label-info"]) !!}
        {!! Form::text("pantalon", old('pantalon'), ["class"=>"form-control", "placeholder"=>"S","maxlength"=>"2"]) !!}
        </div>
        <div class="col-md-2">
        {!! Form::label("zapatos", "Zapatos", ["class"=>"label label-info"]) !!}
        {!! Form::text("zapatos", old('zapatos'), ["class"=>"form-control", "placeholder"=>"S","maxlength"=>"2"]) !!}
        </div>
        <div class="col-md-6">
        {!! Form::label("anioEscolar_id", "Año Escolar", ["class"=>"label label-success"]) !!}
        {!! Form::select("anioEscolar_id", $escolar, null,["class"=>"form form-control","maxlength"=>"25","placeholder"=>"Selection Option"]) !!}
        </div>
    </div>
        {!! Form::submit("Registrar", ["class"=>"btn btn-primary"]) !!}
        {!!link_to_route('inscripcion.index','Regresar',null,['class'=>'btn btn-success'])!!}
        {!! Form::close() !!}
    </div>
    <div class="representante">
        {!! Form::open(["route"=>["representante.store"],"method"=>"POST", "autocomplete"=>"off","enctype"=>"multipart/form-data"]) !!}
        <span><h2 class="text-warning">Representante</h2></span> <br>
        {!! Form::token()!!}
        <div class="row">
        <div class="col-md-3">
        {!! Form::label("nombres", "Nombres", ["class"=>"label label-warning"]) !!}
        {!! Form::text("nombres", old("nombres"), ["class"=>"form form-control","maxlength"=>"25","placeholder"=>"Nombre","maxlength"=>"20"]) !!}
        </div>
        <div class="col-md-3">
        {!! Form::label("segNombres", "Segundo Nombre", ["class"=>"label label-warning"]) !!}
        {!! Form::text("segNombres", old('segNombres'), ["class"=>"form form-control","maxlength"=>"25","placeholder"=>"Segundo Nombre","maxlength"=>"20"]) !!}
        </div>
        <div class="col-md-3">
        {!! Form::label("apellidos", "Apellido", ["class"=>"label label-warning"]) !!}
        {!! Form::text("apellidos", old('apellidos'), ["class"=>"form form-control","maxlength"=>"25","placeholder"=>"Apellido","maxlength"=>"20"]) !!}
        </div>
        <div class="col-md-3">
        {!! Form::label("segApellidos", "Segundo Apellido", ["class"=>"label label-warning"]) !!}
        {!! Form::text("segApellidos", old('segApellidos'), ["class"=>"form form-control","maxlength"=>"25","placeholder"=>"Segundo Apellido","maxlength"=>"20"]) !!}
        </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                {!! Form::label("gradoInstruccion", "Grado de Instruccion", ["class"=>"label label-warning"]) !!}
                {!! Form::text("gradoInstruccion", old('gradoInstruccion'), ["class"=>"form-control", "placeholder"=>"Grado de Instruccion","maxlength"=>"20"]) !!}
                </div>
            <div class="col-md-4">
                {!! Form::label("lgTrabajo", "Lugar de trabajo", ["class"=>"label label-warning"]) !!}
                {!! Form::text("lgTrabajo", old('lgTrabajo'), ["class"=>"form-control", "placeholder"=>"Lugar de trabajo","maxlength"=>"20"]) !!}
                </div>
            <div class="col-md-4">
                {!! Form::label("telefonos", "Telefonos", ["class"=>"label label-warning"]) !!}
                {!! Form::text("telefonos", old('telefonos'), ["class"=>"form-control", "placeholder"=>"telefonos","maxlength"=>"10"]) !!}
            </div>
        </div>
        <div class="row">
        <div class="col-md-3">
        {!! Form::label("fNacimiento", "Fecha de nacimiento", ["class"=>"label label-warning"]) !!}
        {!! Form::date("fNacimiento", old('fNacimiento'), ["class"=>"form form-control","maxlength"=>"10"]) !!}
        </div>
        <div class="col-md-4">
        {!! Form::label("trabajo", "Trabajo", ["class"=>"label label-warning"]) !!}
        {!! Form::text("trabajo", old('trabajo'), ["class"=>"form-control", "placeholder"=>"Trabajo","maxlength"=>"20"]) !!}
        </div>
        <div class="col-md-5">
        {!! Form::label("email", "E-Mail Dirección ", ["class"=>"label label-warning"]) !!}
        {!! Form::text("email", old('email'), ["class"=>"form form-control","placeholder"=>"E-Mail Dirección","maxlength"=>"20"]) !!}
        </div>
        </div>
        <div class="row">
        <div class="col-md-5">
        {!! Form::label("profOcupacion", "Profesion o Ocupacion", ["class"=>"label label-warning"]) !!}
        {!! Form::text("profOcupacion", old('profOcupacion'), ["class"=>"form-control", "placeholder"=>"Profesion o Ocupacion","maxlength"=>"20"]) !!}
        </div>
        <div class="col-md-5">
        {!! Form::label("alumno_id", "Alumno", ["class"=>"label label-warning"]) !!}
        {!! Form::select("alumno_id", $alumno, null,["class"=>"form form-control","maxlength"=>"25","placeholder"=>"Selection Option"]) !!}
        </div>
    </div>
        {!! Form::submit("Registrar", ["class"=>"btn btn-primary"]) !!}
        {!!link_to_route('inscripcion.index','Regresar',"",['class'=>'btn btn-success'])!!}
        {!! Form::close() !!}
    </div>
</div>
    <div class="Mostrar text-info">
        Mostrar Formulario de <b>REPRESENTANTE</b>, <b>ALUMNOS</b> y <b>AÑO ESCOLAR</b>
    {!!Form::select('formularios'/*,foreach,[$persona->name]*/,['placeholder'=>'Formularios','anioescolar' => 'Año Escolar','alumno' => 'Alumno','representante' => 'Representante'],old('roles'),["class"=>"form-control formularios"]) !!}
    </div>
@endsection
