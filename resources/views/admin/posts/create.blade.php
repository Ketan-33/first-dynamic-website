<x-admin-layout>
    <x-slot name="header">
        {{ __('Create Post')}}
    </x-slot>

    <form method="POST" action="{{ route('admin-posts-create') }}" enctype="multipart/form-data" class="max-w-md mx-auto mt-8 p-4 bg-white shadow-md rounded-lg border border-teal-600">
        @csrf

        <!-- Title -->
        <div class="mb-4">
            <x-input-label for="title" :value="__('Title')" />
            <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" required autofocus autocomplete="title" />
        </div>

        <!-- Category -->
        <div class="mb-4">
            <x-input-label for="category_id" :value="__('Category')" />
            <select name="category_id" id="category_id" class="block mt-1 w-full" required>
                <option disabled selected>Select a category</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <!-- Content -->
        <div class="mb-4">
            <x-input-label for="content1" :value="__('Content')" />
            <textarea id="content1" class="block mt-1 w-full rounded" name="content" rows="6" required autofocus></textarea>
        </div>

        <x-form-errors />

        <div class="flex items-center justify-end mt-4">
            <x-primary-button type="submit" class="bg-teal-600 hover:bg-teal-800">
                {{ __('Create') }}
            </x-primary-button>
        </div>
    </form>
</x-admin-layout>
