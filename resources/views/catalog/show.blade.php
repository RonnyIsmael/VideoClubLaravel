@extends('layouts.master')

@section('content')

   
    <div class="row">

<div class="col-sm-4">

        <img src="{{$detalles['poster']}}" style="height:200px"/>
        
       
</div>
<div class="col-sm-8">
<h4 style="min-height:45px;margin:5px 0 10px 0">
            {{$detalles['title']}}
        </h4>

    <p>Año: {{$detalles['year']}}</p>
    <p>Director: {{$detalles['director']}}</p>
    <p>Sinopsis: {{$detalles['synopsis']}}</p>
    <p>
    
   <p>Estado: Actualmente {{$estado}}<p>
   <div>
   
    {!!$botonEstado!!}

        <a class="btn btn-warning" href="http://127.0.0.1:8000/catalog/catalog/edit/{{$id}}">Editar Película</a>
        <a class="btn btn-light" href="http://127.0.0.1:8000/catalog/catalog">Volver a la lista</a>
    </div>
    </p>
</div>
</div>
@stop
