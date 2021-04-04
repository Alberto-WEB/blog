@extends('adminlte::page')

@section('title', 'Siur | Usuarios')
<link rel="shortcut icon" href="{{ asset('images/logo_white.png') }}" type="image/png">

@section('content_header')
    <h1>Lista de Usuarios</h1>
@stop

@section('content')
    @livewire('admin.users-index')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop