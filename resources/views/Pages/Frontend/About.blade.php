@extends('layout.app')
@section('title','About-page')
@section('breadcrumb-title','About Our Organization')
@section('breadcrumb-message','At EcoSolutions, we are committed to providing the best car rental services in the county.')
@section('url','/homePage')
@section('breadcrumb-page','About')
@section('content')
@include('Component.frontend.Navvar')
@include('Component.frontend.BreadCump')
@include('Component.frontend.About')
@include('Component.frontend.Work')
@include('Component.frontend.facadeNumber')
@include('Component.frontend.Choice')
@include('Component.frontend.footer')
@endsection