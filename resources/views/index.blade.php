@extends('layouts.app')

@section('title' , 'main page')

@section('sidebar')
    @parent

    <h3>add sidebar section</h3>


@endsection

@section('content')
    <h2>The Content</h2>
    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi corporis doloremque earum enim facere hic impedit, ipsa necessitatibus, nihil nulla officiis quasi quis sunt vero voluptates! Debitis obcaecati placeat quia?</p>
@endsection
