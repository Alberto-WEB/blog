@extends('adminlte::page')

@section('title', 'Siur | Crear etiqueta')
<link rel="shortcut icon" href="{{ asset('images/logo_white.png') }}" type="image/png">


@section('content_header')
    <h1>Crear etiqueta</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">

            {!! Form::open(['route' => 'admin.tags.store']) !!}
                   
                @include('admin.tags.partials.form')

                    {!! Form::submit('Crear etiqueta', ['class' => 'btn btn-primary']) !!}
           
            {!! Form::close() !!}

        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop


@section('js')
    <script src="{{ asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js') }}"></script>

    <script>
        $(document).ready( function() {
            $("#name").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
            });
            });
    </script>
@endsection