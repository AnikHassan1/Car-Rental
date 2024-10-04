@extends('layout.sidenav')
@section('title','Car')
@section('content')
@include('Component.Admin.Car.index')
@include('Component.Admin.Car.create')
@include('Component.Admin.Car.update')
@include('Component.Admin.Car.delete')
@endsection