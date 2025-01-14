<x-modal>
    <x-slot name="title">
        <h3 class="text-lg font-medium text-gray-900">{{ __('Create Channel') }}</h3>
    </x-slot>
    <x-slot name="content">
        @include('livewire.channel.modal._partials.channel-form')
    </x-slot>
    <x-slot name="footer">
        <div>
            <div
                wire:loading
                wire:target="submit"
                class="px-4 py-2"
            >
                <i class="fas fa-spinner fa-spin"></i>
            </div>

            <button wire:loading.attr="disabled" wire:click="submit" class="px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 shadow-sm hover:bg-indigo-500 focus:outline-none focus:shadow-outline-blue focus:bg-indigo-500 active:bg-indigo-600 transition duration-150 ease-in-out">
                {{ __('Submit') }}
            </button>
        </div>
    </x-slot>
</x-modal>
