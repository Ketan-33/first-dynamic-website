<x-admin-layout>
    <x-slot name="header">
        {{ __('Edit User')}}
    </x-slot>

    <div class="max-w-md mx-auto mt-8 p-4">
        <div class="bg-white p-6 rounded-lg shadow-md border border-teal-600 transition-transform transform hover:shadow-lg">
            <form method="POST" action="{{ route('admin-users-edit', $user->id) }}" class="p-3">
                @csrf
                @method('PATCH')

                <!-- Name -->
                <div class="mb-4">
                    <label for="name">{{ __('Name') }}</label>
                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="$user->name" required autofocus autocomplete="name" />
                </div>

                <!-- Email -->
                <div class="mb-4">
                    <label for="email">{{ __('Email') }}</label>
                    <x-text-input id="email" class="block mt-1 w-full" type="text" name="email" :value="$user->email" required autofocus autocomplete="email" />
                </div>

                <!-- Active -->
                <div class="mb-4">
                    <label for="active">{{ __('Active') }}</label>
                    <select name="active" id="active" class="block mt-1 w-full">
                        <option disabled>Select a status</option>
                        <option value="1" {{ $user->active == 1 ? 'selected' : '' }}>Yes</option>
                        <option value="2" {{ $user->active == 2 ? 'selected' : '' }}>No</option>
                    </select>
                </div>

                <!-- Role -->
                <div class="mb-4">
                    <label for="role_id">{{ __('Role') }}</label>
                    <select name="role_id" id="role_id" class="block mt-1 w-full">
                        <option disabled>Select a role</option>
                        @foreach ($roles as $role)
                            <option value="{{ $role->id }}" {{ $role->id == $user->role->id ? 'selected' : '' }}>{{ $role->name }}</option>
                        @endforeach
                    </select>
                </div>

                <x-form-errors />

                <div class="mt-4">
                    <x-primary-button type="submit" class="bg-teal-600 hover:bg-teal-800">
                {{ __('Update user') }}
            </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-admin-layout>
