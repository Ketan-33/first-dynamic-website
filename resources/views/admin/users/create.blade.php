<x-admin-layout>
    <x-slot name="header">
        {{ __('Create User')}}
    </x-slot>
    <div class="flex justify-center items-center h-full">
        <form method="POST" action="{{ route('admin-users-create') }}" class="text-gray-800 p-8 rounded-md shadow-md w-96 bg-gray-100 border border-teal-600">
            @csrf

            <!-- Name -->
            <div class="mb-4">
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <!-- Email -->
            <div class="mb-4">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="text" name="email" :value="old('email')" required autofocus autocomplete="email" />
            </div>

            <!-- Active -->
            <div class="mb-4">
                <x-input-label for="active" :value="__('Active')" />
                <select name="active" id="active" class="rounded-md w-full">
                    <option value="1">Yes</option>
                    <option value="2">No</option>
                </select>
            </div>

            <!-- Role -->
            <div class="mb-4">
                <x-input-label for="role_id" :value="__('Role')" />
                <select name="role_id" id="role_id" class="rounded-md w-full">
                    @foreach ($roles as $role)
                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <x-primary-button type="submit" class="bg-teal-600 hover:bg-teal-800">Create</x-primary-button>
            </div>
        </form>
    </div>
</x-admin-layout>
