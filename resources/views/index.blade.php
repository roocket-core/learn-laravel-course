@extends('layouts.app')

@section('title' , 'main page')

@section('sidebar')
    @parent

    <h3>add sidebar section</h3>

@endsection

@section('content')
    <h2>The Content</h2>
{{--    <img src="/image/qmLca1lqtoFe1kwJmBGe5lJ9ET17agVL2D8nQGwb.jpg" width="400" alt="">--}}
    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi corporis doloremque earum enim facere hic impedit, ipsa necessitatibus, nihil nulla officiis quasi quis sunt vero voluptates! Debitis obcaecati placeat quia?</p>
@endsection
