@extends('layout.app')
@section('title','Car-Search')
@section('breadcrumb-title','Choice a car')
@section('breadcrumb-message','We d love to hear from you! Fill out the form or reach out via our contact methods.')
@section('url','/')
@section('content')
@include('Component.frontend.Navvar')
@include('Component.frontend.BreadCump')
@include('Component.frontend.CarSearch')
@include('Component.frontend.footer')
@endsection