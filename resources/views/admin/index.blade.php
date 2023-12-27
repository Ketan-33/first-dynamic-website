<x-admin-layout>
    <x-slot name="header">
        {{ __('Admin Section')}}
    </x-slot>
    <x-slot name="title">
        {{ __('Admin Section')}}
    </x-slot>
<div class="container mx-auto p-8">
        <h1 class="text-4xl font-bold text-center text-teal-800 underline pb-16">All Posts</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse ($posts as $post)
                <div class="bg-white p-6 rounded-lg shadow-md border border-teal-600 transition-transform transform hover:shadow-lg">
                    <h2 class="text-2xl font-semibold mb-4 text-center text-gray-900">{{ $post->title }}</h2>
                    <h3 class="text-xl font-semibold mb-4 text-teal-600">{{ $post->category->name }}</h3>
                    <p class="text-gray-700 mb-6">{{ Str::limit($post->content, 150) }}</p>
                    <a href="{{ route('post-show', $post->id) }}" class="text-teal-600 hover:text-teal-800 hover:underline">Read more</a>
                                <x-primary-button class="bg-teal-800 hover:bg-teal-900 ml-60"><a href="{{ route('admin-posts-edit', ['id' => $post->id]) }}" class="text-white">Edit</a></x-primary-button>

                </div>
            @empty
                <div class="p-6">No posts available.</div>
            @endforelse
        </div>
    </div>
    <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">{{ $posts->links() }}</div>
</x-admin-layout>
