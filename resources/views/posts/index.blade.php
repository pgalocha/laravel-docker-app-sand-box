<!-- resources/views/form.blade.php -->

@extends('layouts.app')

@section('title')

@section('header')
@endsection

@section('content')

@endsection

@section('footer')
@endsection

@section('styles')
<style>
    body {
        background: linear-gradient(to right, #0f2027, #203a43, #2c5364);
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0;
        color: white;
    }

    .form-container {
        background-color: rgba(255, 255, 255, 0.1); /* Semi-transparent white */
        padding: 40px;
        border-radius: 8px;
        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        width: 100%;
        max-width: 400px;
    }

    h1 {
        text-align: center;
        margin-bottom: 20px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    label {
        display: block;
        margin-bottom: 5px;
    }

    input[type="text"],
    textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        font-size: 16px;
    }

    textarea {
        resize: vertical;
    }

    .submit-btn {
        background-color: #ff7f50; /* Coral */
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 4px;
        cursor: pointer;
        width: 100%;
        font-size: 18px;
    }

    .submit-btn:hover {
        background-color: #ff6347; /* Tomato */
    }

    .error {
        color: #ff4500; /* OrangeRed */
        font-size: 14px;
    }
</style>
@endsection
