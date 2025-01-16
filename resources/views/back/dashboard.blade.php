@extends('back.app')
@section('title', 'Dashboard - Accueil')

@section('dashboard-content')
@include('back.pages.index', ['pages' => $pages])

<!-- Contenu dynamique basé sur la route -->
@yield('dashboard-section')
@endsection
