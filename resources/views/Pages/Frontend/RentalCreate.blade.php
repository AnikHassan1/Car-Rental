@extends('layout.app')
@section('title','Rental-Create')
@section('breadcrumb-title','Rental Selection Made Easy!')
@section('breadcrumb-message','Choose from a diverse fleet of vehicles tailored to your needs.
Enjoy transparent pricing, flexible options, and exceptional customer service. ')
@section('breadcrumb-page','Rental-Create')
@section('url','/homePage')

@section('content')
@include('Component.frontend.Navvar')
@include('Component.frontend.BreadCump')
@include('Component.frontend.Create')
@include('Component.frontend.footer')
@endsection