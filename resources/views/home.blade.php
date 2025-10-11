@extends('layouts.app')
@section('hero')
    <!-- Section Main -->
    @include('home.main')
@endsection
@section('content')
    <!-- Section Services -->
    @include('home.services')
    
    <!-- Section Portfolio -->
    @include('home.portfolio')
    
    <!-- Section About -->
    @include('home.about')
    
@endsection