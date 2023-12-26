<x-admin-layout>
    <x-slot name="header">
        {{ __('All Posts')}}
    </x-slot>

    <div class="overflow-x-auto border rounded-lg border-gray-300 dark:border-gray-600">
        @if(Session::has('admin_flash'))
            <x-alert type="success" position="top-right">{{ Session('admin_flash') }}</x-alert>
        @endif
        <table class="min-w-full divide-y divide-gray-300 dark:divide-gray-600">
            <thead class="bg-gradient-to-r from-teal-600 to-teal-800 text-white">
                <tr>
                    <th class="py-3 px-4 text-left">Id</th>
                    <th class="py-3 px-4 text-left">Title</th>
                    <th class="py-3 px-4 text-left">Category</th>
                    <th class="py-3 px-4 text-left">User</th>
                    <th class="py-3 px-4 text-left">Created At</th>
                    <th class="py-3 px-4 text-left">Updated At</th>
                    <th class="py-3 px-4 text-left">Actions</th>
                </tr>
            </thead>
            <tbody class="text-gray-700 dark:text-gray-200">
                @if($posts)
                    @foreach ($posts as $post)
                        <tr class="hover:bg-gray-100 dark:hover:bg-gray-800">
                            <td class="py-2 px-4">{{ $post->id }}</td>
                            <td class="py-2 px-4">{{ $post->title }}</td>
                            <td class="py-2 px-4">{{ $post->category->name }}</td>
                            <td class="py-2 px-4">{{ $post->user->name }}</td>
                            <td class="py-2 px-4">{{ $post->created_at->diffForHumans() }}</td>
                            <td class="py-2 px-4">{{ $post->updated_at->diffForHumans() }}</td>
                             <td class="py-2 px-4">
                                <x-primary-button class="bg-teal-800 hover:bg-teal-900"><a href="{{ route('admin-posts-edit', ['id' => $post->id]) }}" class="text-white">Edit</a></x-primary-button>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
    <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">{{ $posts->links() }}</div>
</x-admin-layout>
