@extends('layouts.app')

@section('title', 'Hello Page')

@section('content')
    <h1>こんにちは、Laravel</h1>
    <p><a href="{{ route('hello.show', ['name' => 'タロウ']) }}">タロウさんに挨拶</a></p>
@endsection
