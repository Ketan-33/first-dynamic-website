<x-guest-layout>
    <x-slot name="header">
        <div class="text-4xl font-bold text-center text-purple-800 underline">
            {{ __('Our Posts') }}
        </div>
    </x-slot>

    <div class="container mx-auto p-8">
        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
            @auth
                <x-primary-button class="bg-purple-600 hover:bg-purple-800"><a href="{{ url('/admin')}}" class="text-white">Admin</a></x-primary-button>
            @else
                <x-primary-button class="bg-purple-600 hover:bg-purple-800"> <a href="{{ route('login') }}" class="text-white">Log in</a></x-primary-button>

                @if (Route::has('register'))
                    <x-primary-button class="bg-purple-600 hover:bg-purple-800"> <a href="{{ route('register') }}" class="text-white">Register</a></x-primary-button>
                @endif
            @endauth
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @if($posts)
                @foreach ($posts as $post)
                    <div class="bg-white p-6 rounded-lg shadow-md border border-purple-300 transition-transform transform hover:shadow-lg">
                        <h2 class="text-2xl font-semibold mb-4 text-center text-gray-900">{{ $post->title }}</h2>
                        <h3 class="text-xl font-semibold mb-4 text-purple-700">{{ $post->category->name }}</h3>
                        <p class="text-gray-700 mb-6">{{ Str::limit($post->content, 150) }}</p>
                        <a href="{{ route('post-show', $post->id)}}" class="text-purple-600 hover:text-purple-800 hover:underline">Read more</a>
                    </div>
                @endforeach
            @else
                <div class="p-6">No content yet, please visit after some days.</div>
            @endif
        </div>
    </div>
</x-guest-layout>
