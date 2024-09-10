@extends('layouts.app')


@section('title' , 'Posts List')

@section('content')
    <h2 class="text-2xl font-bold mb-4">Post List</h2>

    <div class="space-y-4">
        @forelse($posts as $post)
            <div class="p-4 border border-gray-200 shadow">
                <h3 class="text-xl font-bold">{{ $post['title'] }}</h3>
                <p class="text-gray-700">{{ $post['content'] }}</p>
            </div>
        @empty
            <p>there is no posts to show you, thanks!</p>
        @endforelse
    </div>
@endsection
