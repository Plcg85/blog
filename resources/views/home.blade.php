@extends('layouts.app')

@section('title')
    Laravel 11
@endsection

@push('css')
    <style>
        body {
            background-color: #f3f3f3;
        }
    </style>
@endpush

@section('content')
    <div class="max-w-4xl mx-auto px-4">
        <x-alert2 type="info" class="mb-4"> <!-- paso de información por los atributos de la alerta-->
            <!--llamando al componente alert views.components.alert.blade.php -->
            <x-slot name="title">
                <!-- en la variable title se mete el contenido mas abajo que va al componente alert -->
                Titulo de la alerta
            </x-slot>
            Contenido de la alerta
        </x-alert2>
        <p>Hola mundo</p>
    </div>
@endsection
