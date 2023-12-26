<x-guest-layout>
    <x-slot name="header">
        <div class="text-4xl font-bold text-center text-purle-500 underline">
            {{ __('Detailed Post') }}
        </div>
    </x-slot>

   <div class="container mx-auto p-8 ">
    <div class="bg-white p-6 rounded-lg shadow-md border border-purple-300">
        @if($post)
            <h2 class="text-3xl font-semibold mb-4 text-center text-gray-900">{{ $post->title }}</h2>
            <div class="flex items-center justify-between mb-4">
                <span class="text-purple-700 font-semibold">{{ $post->category->name }}</span>
                <span class="text-gray-500">{{ $post->created_at->format('M d, Y') }}</span>
            </div>
            {!! $post->content !!}
            <br>
            <div class="flex items-center font-semibold">
                <span class="text-purple-700">{{ __('Author: ') }}</span>
                <span class="text-gray-800">{{ $post->user->name }}</span>
            </div>
        @else
            <p class="text-gray-700">No content available.</p>
        @endif
    </div>
</div>
</x-guest-layout>
