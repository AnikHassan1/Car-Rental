@extends('layout.app')
@section('title','home-page')
@section('content')
@include('Component.frontend.Navvar')
@include('Component.frontend.slider')
@include('Component.frontend.Search')
@include('Component.frontend.Work')
@include('Component.frontend.MostExplorer')
@include('Component.frontend.facadeNumber')
@include('Component.frontend.footer')
@endsection