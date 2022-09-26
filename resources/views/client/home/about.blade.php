@extends('layouts.app')

@section('title', 'Categories')

@section('content')
    <h1 class="text-3xl text-orange-500 font-extrabold @isAdmin my-7 @else mt-20 mb-7 @endisAdmin ">
        A propos de nous !!!
    </h1>
    
    <div class="ok-min-h">
    </div>
@endsection