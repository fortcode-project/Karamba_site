@extends('layouts.site.app')
@section('title', 'Produtos Karamba')
@section('content')
    @include('components.navbar')
    @include('sweetalert::alert')
    @include('loja.style.main')
    
    @livewire("cart")

@endsection