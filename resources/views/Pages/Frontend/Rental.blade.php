@extends('layout.app')
@section('title','Rental-page')
@section('breadcrumb-title','Complete List of Rental Cars')
@section('breadcrumb-message','We can’t wait to hear from you! Select your ideal car and embark on an enjoyable journey.')
@section('breadcrumb-page','Rental')
@section('url','/')

@section('content')
@include('Component.frontend.Navvar')
@include('Component.frontend.BreadCump')
@include('Component.frontend.Rentals')
@include('Component.frontend.footer')
@endsection