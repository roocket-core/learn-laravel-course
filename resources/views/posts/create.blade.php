@extends('layouts.app')

@section('title' , 'Create Post Page')

@section('content')
    <h2 class="text-2xl font-bold mb-4">Create a New Post</h2>

    <x-alert type="success" message="your post successfully created!" />
    <x-alert type="error" message="do something"/>
    <x-alert type="info" message="aaaaaaaaaaaaaaaaaaaaaaa"/>

    <form action="#" method="POST" class="space-y-4">
        <div>
            <label for="title" class="block text-sm font-bold">Title:</label>
            <input type="text" id="title" name="title" class="w-full p-2 border border-gray-300 rounded">
        </div>

        <div>
            <label for="content" class="block text-sm font-bold">Content:</label>
            <textarea id="content" name="content" rows="5" class="w-full p-2 border border-gray-300 rounded"></textarea>
        </div>

        <div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Create Post</button>
        </div>
    </form>
@endsection
