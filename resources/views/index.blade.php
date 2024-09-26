<!-- resources/views/index.blade.php -->

@extends('layouts.app')

@section('title', 'Home Page')

@section('header')
Home Page
@endsection

@section('content')
<h2>Welcome to the Home Page!</h2>
<p>This is a simple template layout using a black background and orange lines.</p>

<div class="orange-line"></div> <!-- Example of an orange line -->

<p>Explore our features and enjoy!</p>
<a href="#">Learn More</a>
@endsection

@section('footer')
<p>© 2024 My Application - All rights reserved.</p>
@endsection
