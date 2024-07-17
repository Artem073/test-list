<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('New Task') }}
        </h2>

    </header>
    
    <form action="{{ route('tasks.create') }}" method="POST">
        @csrf

        <!-- Task Name -->
        <div class="mt-4">
            <x-input-label for="name" :value="__('Task Name')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <!-- Add Task Button -->
        <x-primary-button class="mt-4">
            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
            <path stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7 7V5"/>
            </svg>
            {{ __('Add') }}
        </x-primary-button>
    </form>
</section>