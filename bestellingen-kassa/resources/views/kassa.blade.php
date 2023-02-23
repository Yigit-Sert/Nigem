@extends('layout.app')

@section('title')
    Kassa
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('css/kassa.css') }}">
@endsection

@section('section')
    <div class="section-left">
        <x-kassa-text-box/>
        <x-kassa-pizzas/>
    </div>
    <div class="section-right">
        <x-kassa-producten-table/>
    </div>
@endsection
