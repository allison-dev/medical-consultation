@extends('adminlte::page')

@section('title', 'Centro Medico')

@section('content_header')
    <h1 class="m-0 text-dark">Centro Medico</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <p class="mb-0">Bem Vindo <b>{{ Auth::user()->name }}</b> ! Você está Logado</p>
                    <p class="mb-0">Navegue no menu a esquerda e Aproveite nossos serviços.</p>
                </div>
            </div>
        </div>
    </div>
@stop
