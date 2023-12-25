<x-admin-layout>
    <x-slot name="header">
        {{ __('Create Category')}}
    </x-slot>

    <form method="POST" action="{{ route('admin-categories-create') }}" class="max-w-md mx-auto mt-8 p-4 bg-white shadow-md rounded-lg border border-teal-600">
        @csrf

        <!-- Name -->
        <div class="mb-4">
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
        </div>

        <x-form-errors />

        <div class="flex items-center justify-end mt-4">
            <x-primary-button type="submit" class="bg-teal-600 hover:bg-teal-900">
                {{ __('Create') }}
            </x-primary-button>
        </div>
    </form>
</x-admin-layout>
