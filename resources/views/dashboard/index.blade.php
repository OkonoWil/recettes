@extends('layouts.app')

@section('title','Dashboard')

@section('content')
    <h1>Dashboard {{auth::user()->name}}</h1>
@endsection