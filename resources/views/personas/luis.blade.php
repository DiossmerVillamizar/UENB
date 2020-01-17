@extends('layouts.app')
@section('title','Actualizar')
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
    {!! Form::open(["route"=>["inscripcion.update",$persona->id],"method"=>"PUT", "autocomplete"=>"off","enctype"=>"multipart/form-data"]) !!}
    {!! Form::token()!!}
    <img src="{{asset("images/$persona->fotos")}}" alt="" sizes="" srcset="" height="50" width="100">
    {!! Form::file('fotos',null,$persona->fotos,["class"=>"text-primary","multiple"]) !!}
    {!! Form::label("nombres", "Nombres", ["class"=>"label label-success"]) !!}
    {!! Form::text("nombres", $persona->nombres, ["class"=>"form form-control","maxlength"=>"25","placeholder"=>"Nombre"]) !!}

    {!! Form::label("segNombres", "Segundo Nombre", ["class"=>"label label-success"]) !!}
    {!! Form::text("segNombres", $persona->segNombres, ["class"=>"form form-control","maxlength"=>"25","placeholder"=>"Segundo Nombre"]) !!}

    {!! Form::label("apellidos", "Apellido", ["class"=>"label label-success"]) !!}
    {!! Form::text("apellidos", $persona->apellidos, ["class"=>"form form-control","maxlength"=>"25","placeholder"=>"Apellido"]) !!}

    {!! Form::label("segApellidos", "Segundo Apellido", ["class"=>"label label-success"]) !!}
    {!! Form::text("segApellidos", $persona->segApellidos, ["class"=>"form form-control","maxlength"=>"25","placeholder"=>"Segundo Apellido"]) !!}

    {!! Form::label("cedula", "Cedula", ["class"=>"label label-success"]) !!}
    {!! Form::text("cedula", $persona->cedula, ["class"=>"form-control", "placeholder" => "Cedula"]) !!}

    {!! Form::label("lgNacimiento", "Lugar de Nacimiento", ["class"=>"label label-success"]) !!}
    {!! Form::text("lgNacimiento", $persona->lgNacimiento, ["class"=>"form form-control","placeholder"=>"Lugar de Nacimiento"]) !!}

    {!! Form::label("direccion", "Dirección", ["class"=>"label label-success"]) !!}
    {!! Form::text("direccion", $persona->direccion, ["class"=>"form form-control","placeholder"=>"Dirección"]) !!}

    {!! Form::label("fNacimiento", "Fecha de nacimiento", ["class"=>"label label-success"]) !!}
    {!! Form::date("fNacimiento", $persona->fNacimiento, ["class"=>"form form-control","maxlength"=>"10"]) !!}

    {!! Form::label("email", "E-Mail Dirección ", ["class"=>"label label-success"]) !!}
    {!! Form::text("email", $persona->email, ["class"=>"form form-control","placeholder"=>"E-Mail Dirección"]) !!}

    {!! Form::label("edad", "Edad", ["class"=>"label label-success"]) !!}
    {!! Form::text("edad", $persona->edad, ["class"=>"form-control","maxlength"=>"2", "placeholder"=>"Edad"]) !!}

    {!! Form::label("sexo", $persona->sexo, ["class"=>"label label-success"]) !!}<br>
    {!! Form::label("sexo", "Femenino", ["class"=>"text-primary"]) !!}
    {!! Form::radio('sexo', 'Femenino')!!}
    {!! Form::label("sexo", "Masculino", ["class"=>"text-primary"]) !!}
    {!! Form::radio('sexo', 'Masculino')!!} <br>

    {!! Form::label("roles", "Roles", ["class"=>"label label-success"]) !!}
    {!!Form::select('roles',['placeholder'=>'Selecciona Un Rol','representante' => 'Representante','alumno' => 'Alumno'],$persona->roles,["class"=>"form-control"]) !!}
    <br>
    {!! Form::submit("Actualizar", ["class"=>"btn btn-primary"]) !!}
    {!!link_to_route('inscripcion.index','Regresar',"",['class'=>'btn btn-success'])!!}
    {!! Form::close() !!}

    <div class="anioescolar">
        {!! Form::open(["route"=>["anioescolar.update",$anioEscolar->id],"method"=>"PUT", "autocomplete"=>"on","enctype"=>"multipart/form-data"]) !!}
        <span><h2 class="text-success">Año escolar</h2></span> <br>
        {!! Form::token()!!}
        {!! Form::label("users_id", "Persona", ["class"=>"label label-primary"]) !!}
        {!!Form::select('users_id',$persona,null,["class"=>"form-control"],['placeholder'=>'Selecciona Una opcion']) !!}

        {!! Form::label("fechaIngreso", "Fecha de Ingreso", ["class"=>"label label-primary"]) !!}
        {!! Form::date("fechaIngreso", old('fechaIngreso'), ["class"=>"form-control"]) !!}

        {!! Form::label("fechaEngreso", "Fecha de Egreso", ["class"=>"label label-primary"]) !!}
        {!! Form::date("fechaEngreso", old('fechaEngreso'), ["class"=>"form-control"]) !!}

        {!! Form::label("grado", "Grado", ["class"=>"label label-primary"]) !!}
        {!! Form::text("grado", old('grado'), ["class"=>"form-control", "placeholder"=>"Grado"]) !!}

        {!! Form::label("seccion", "Seccion", ["class"=>"label label-primary"]) !!}
        {!! Form::text("seccion", old('seccion'), ["class"=>"form-control","placeholder"=>"Seccion"]) !!}

        {!! Form::label("estatus", "Estatus", ["class"=>"label label-primary"]) !!}
        {!! Form::text("estatus", old('estatus'), ["class"=>"form-control", "placeholder"=>"Estatus"]) !!}

        {!! Form::submit("Registrar", ["class"=>"btn btn-primary"]) !!}
        {!!link_to_route('inscripcion.index','Regresar',"",['class'=>'btn btn-success'])!!}
        {!! Form::close() !!}
    </div>
    <div class="representante">
        {!! Form::open(["route"=>["representante.update",$representante->id],"method"=>"PUT", "autocomplete"=>"on","enctype"=>"multipart/form-data"]) !!}
        <span><h2 class="text-success">Representante</h2></span> <br>
        {!! Form::token()!!}
        {!! Form::label("trabajo", "Trabajo", ["class"=>"label label-warning"]) !!}
        {!! Form::text("trabajo", old('trabajo'), ["class"=>"form-control", "placeholder"=>"Trabajo"]) !!}

        {!! Form::label("gradoInstruccion", "Grado de Instruccion", ["class"=>"label label-warning"]) !!}
        {!! Form::text("gradoInstruccion", old('gradoInstruccion'), ["class"=>"form-control", "placeholder"=>"Grado de Instruccion"]) !!}

        {!! Form::label("profOcupacion", "Profesion o Ocupacion", ["class"=>"label label-warning"]) !!}
        {!! Form::text("profOcupacion", old('profOcupacion'), ["class"=>"form-control", "placeholder"=>"Profesion o Ocupacion"]) !!}

        {!! Form::label("lgTrabajo", "Lugar de trabajo", ["class"=>"label label-warning"]) !!}
        {!! Form::text("lgTrabajo", old('lgTrabajo'), ["class"=>"form-control", "placeholder"=>"Lugar de trabajo"]) !!}

        {!! Form::label("telefonos", "Telefonos", ["class"=>"label label-warning"]) !!}
        {!! Form::text("telefonos", old('telefonos'), ["class"=>"form-control", "placeholder"=>"telefonos"]) !!}

        {!! Form::submit("Registrar", ["class"=>"btn btn-primary"]) !!}
        {!!link_to_route('inscripcion.index','Regresar',"",['class'=>'btn btn-success'])!!}
        {!! Form::close() !!}
    </div>
    <div class="alumno">
        {!! Form::open(["route"=>["alumno.update",$alumno->id],"method"=>"PUT", "autocomplete"=>"on","enctype"=>"multipart/form-data"]) !!}
        <span><h2 class="text-success">Alumno</h2></span> <br>
        {!! Form::token()!!}
        {!! Form::label("camisas", "Camisa", ["class"=>"label label-info"]) !!}
        {!! Form::text("camisas", old('camisas'), ["class"=>"form-control", "placeholder"=>"Camisa"]) !!}

        {!! Form::label("pantalon", "Pantalon", ["class"=>"label label-info"]) !!}
        {!! Form::text("pantalon", old('pantalon'), ["class"=>"form-control", "placeholder"=>"Pantalon"]) !!}

        {!! Form::label("zapatos", "Zapatos", ["class"=>"label label-info"]) !!}
        {!! Form::text("zapatos", old('zapatos'), ["class"=>"form-control", "placeholder"=>"Zapatos"]) !!}

        {!! Form::label("enfemPadecida", "Enfermedades Padecidas", ["class"=>"label label-danger"]) !!}
        {!! Form::text("enfemPadecida", old('enfemPadecida'), ["class"=>"form-control", "placeholder"=>"Enfermedades Padecidas"]) !!}

        {!! Form::label("enfemPsicologica", "Enfermedades Psicologíca", ["class"=>"label label-danger"]) !!}
        {!! Form::text("enfemPsicologica", old('enfemPsicologica'), ["class"=>"form-control", "placeholder"=>"Enfermedades Psicologíca"]) !!}

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