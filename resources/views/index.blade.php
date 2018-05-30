@extends('layouts.master')
@section('content')
{!! Form::select('state',$states,null,['id' =>'state','placeholder'=>'Seleccione un Pais'])!!}

{!! Form::select('town',['placeholder'=>'Seleccion una Provincia'],null,['id'=>'town'])!!}

{!! Form::select('location',['placeholder'=>'Selecciona una Localidad'],null,['id'=>'location'])!!}
@endsection