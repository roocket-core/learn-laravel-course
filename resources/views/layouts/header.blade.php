<header class="bg-gray-800 text-white p-4">
    <div class="container mx-auto flex justify-between items-center">
        <h1 class="text-xl font-bold">My Blog</h1>
        <nav>
            <a href="{{ route('posts') }}" class="text-white mr-4">Posts</a>
            <a href="{{ route('posts.create') }}" class="text-white">Create Post</a>
        </nav>
    </div>
</header>
