@extends('layouts.app')

@section('title', 'Laravel 12 y pico')

@push('css')
    <style>
        body {
            background-color: #9ba8bdd2;
        }
    </style>

@endpush

@section('content')
    <main>
        {{-- <h1>Bienvenido a la página principal</h1> --}}
        <x-alert type="info" margin="mb-4">
            <x-slot name="title">Information</x-slot>
            Contenido de la alerta
        </x-alert>
    </main>

@endsection
