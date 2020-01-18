@extends('layouts.app')
@section('title','Create')
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
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="table-responsive-sm">
                        @if(session()->has('person'))
                    <div class="alert alert-info" role="alert">{{session('person')}}</div>
                        @endif

    <div class="anioescolar">
        {!! Form::open(["route"=>["anioescolar.store"],"method"=>"POST", "autocomplete"=>"on","enctype"=>"multipart/form-data"]) !!}
        <span><h2 class="text-success">Año escolar</h2></span> <br>
        {!! Form::token()!!}
<div class="row">
    <div class="col-md-3">
        {!! Form::label("users_id", "Persona", ["class"=>"label label-primary"]) !!}
        {!!Form::select('users_id',$persona,null,["class"=>"form-control"],['placeholder'=>'Selecciona Una opcion']) !!}
    </div>
    <div class="col-md-3">
        {!! Form::label("fechaIngreso", "Fecha de Ingreso", ["class"=>"label label-primary"]) !!}
        {!! Form::date("fechaIngreso", old('fechaIngreso'), ["class"=>"form-control"]) !!}
    </div>
    <div class="col-md-3">
        {!! Form::label("fechaEngreso", "Fecha de Egreso", ["class"=>"label label-primary"]) !!}
        {!! Form::date("fechaEngreso", old('fechaEngreso'), ["class"=>"form-control"]) !!}
    </div>
    <div class="col-md-3">
        {!! Form::label("estatus", "Estatus", ["class"=>"label label-primary"]) !!}
        {!! Form::text("estatus", old('estatus'), ["class"=>"form-control", "placeholder"=>"Estatus"]) !!}
    </div>
</div>
<div class="row">
    <div class="col-md-2">
        {!! Form::label("grado", "Grado", ["class"=>"label label-primary"]) !!}
        {!! Form::text("grado", old('grado'), ["class"=>"form-control", "placeholder"=>"Grado"]) !!}
    </div>
    <div class="col-md-2">
        {!! Form::label("seccion", "Seccion", ["class"=>"label label-primary"]) !!}
        {!! Form::text("seccion", old('seccion'), ["class"=>"form-control","placeholder"=>"Seccion"]) !!}
    </div>
</div>
        {!! Form::submit("Registrar", ["class"=>"btn btn-primary"]) !!}
        {!!link_to_route('inscripcion.index','Regresar',"",['class'=>'btn btn-success'])!!}
        {!! Form::close() !!}
    </div>
    <div class="representante">
        {!! Form::open(["route"=>["representante.store"],"method"=>"POST", "autocomplete"=>"on","enctype"=>"multipart/form-data"]) !!}
        <span><h2 class="text-success">Representante</h2></span> <br>
        {!! Form::token()!!}
        <div class="row">
            <div class="col-md-3">
                {!! Form::label("users_id", "Persona", ["class"=>"label label-primary"]) !!}
                {!!Form::select('users_id',$persona,null,["class"=>"form-control"],['placeholder'=>'Selecciona Una opcion']) !!}
            </div>
            <div class="col-md-3">
                {!! Form::label("trabajo", "Trabajo", ["class"=>"label label-warning"]) !!}
                {!! Form::text("trabajo", old('trabajo'), ["class"=>"form-control", "placeholder"=>"Trabajo"]) !!}
            </div>
            <div class="col-md-3">
                {!! Form::label("gradoInstruccion", "Grado de Instruccion", ["class"=>"label label-warning"]) !!}
                {!! Form::text("gradoInstruccion", old('gradoInstruccion'), ["class"=>"form-control", "placeholder"=>"Grado de Instruccion"]) !!}
            </div>
            <div class="col-md-3">
                {!! Form::label("profOcupacion", "Profesion o Ocupacion", ["class"=>"label label-warning"]) !!}
                {!! Form::text("profOcupacion", old('profOcupacion'), ["class"=>"form-control", "placeholder"=>"Profesion o Ocupacion"]) !!}
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                {!! Form::label("lgTrabajo", "Lugar de trabajo", ["class"=>"label label-warning"]) !!}
                {!! Form::text("lgTrabajo", old('lgTrabajo'), ["class"=>"form-control", "placeholder"=>"Lugar de trabajo"]) !!}
            </div>
            <div class="col-md-4">
                {!! Form::label("telefonos", "Telefonos", ["class"=>"label label-warning"]) !!}
                {!! Form::text("telefonos", old('telefonos'), ["class"=>"form-control", "placeholder"=>"telefonos"]) !!}
            </div>
        </div>
        {!! Form::submit("Registrar", ["class"=>"btn btn-primary"]) !!}
        {!!link_to_route('inscripcion.index','Regresar',"",['class'=>'btn btn-success'])!!}
        {!! Form::close() !!}
    </div>
    <div class="alumno">
        {!! Form::open(["route"=>["alumno.store"],"method"=>"POST", "autocomplete"=>"on","enctype"=>"multipart/form-data"]) !!}
        <span><h2 class="text-success">Alumno</h2></span> <br>
        {!! Form::token()!!}
        <div class="row">
            <div class="col-md-3">
                {!! Form::label("representante_id", "Representante", ["class"=>"label label-primary"]) !!}
                {!!Form::select('representante_id',$persona,null,["class"=>"form-control"],['placeholder'=>'Selecciona Una opcion']) !!}
            </div>
            <div class="col-md-3">
                {!! Form::label("persona_id", "Alumno", ["class"=>"label label-primary"]) !!}
                {!!Form::select('persona_id',$persona,null,["class"=>"form-control"],['placeholder'=>'Selecciona Una opcion']) !!}
            </div>
            <div class="col-md-3">
                {!! Form::label("enfemPadecida", "Enfermedades Padecidas", ["class"=>"label label-danger"]) !!}
                {!! Form::text("enfemPadecida", old('enfemPadecida'), ["class"=>"form-control", "placeholder"=>"Enfermedades Padecidas"]) !!}
            </div>
            <div class="col-md-3">
                {!! Form::label("enfemPsicologica", "Enfermedades Psicologíca", ["class"=>"label label-danger"]) !!}
                {!! Form::text("enfemPsicologica", old('enfemPsicologica'), ["class"=>"form-control", "placeholder"=>"Enfermedades Psicologíca"]) !!}
            </div>
        </div>
<div class="row">
    <div class="col-md-1">
        {!! Form::label("camisas", "Camisa", ["class"=>"label label-info"]) !!}
        {!! Form::text("camisas", old('camisas'), ["class"=>"form-control", "placeholder"=>"S"]) !!}
    </div>
    <div class="col-md-1">
        {!! Form::label("pantalon", "Pantalon", ["class"=>"label label-info"]) !!}
        {!! Form::text("pantalon", old('pantalon'), ["class"=>"form-control", "placeholder"=>"S"]) !!}
    </div>
    <div class="col-md-1">
        {!! Form::label("zapatos", "Zapatos", ["class"=>"label label-info"]) !!}
        {!! Form::text("zapatos", old('zapatos'), ["class"=>"form-control", "placeholder"=>"S"]) !!}
    </div>
</div>
        {!! Form::submit("Registrar", ["class"=>"btn btn-primary"]) !!}
        {!!link_to_route('inscripcion.index','Regresar',"",['class'=>'btn btn-success'])!!}
        {!! Form::close() !!}
    </div>
    <div class="Mostrar text-info">
        Mostrar Formulario de <b>REPRESENTANTE</b>, <b>ALUMNOS</b> y <b>AÑO ESCOLAR</b>
    {!!Form::select('formularios'/*,foreach,[$persona->name]*/,['placeholder'=>'Formularios','anioescolar' => 'Año Escolar','representante' => 'Representante','alumno' => 'Alumno'],old('roles'),["class"=>"form-control formularios"]) !!}
    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
