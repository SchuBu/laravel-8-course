    <x-modal title="Beitrag bearbeiten" wire:model.defer="showModal">
        <x-slot name="button">
            <a @click="show = true" class="btn btn-secondary"><i
                    class="fa fa-pencil-alt fa-fw"></i></a>
        </x-slot>

        @include('backend.post.form')

        <x-slot name="footer">
            <button wire:click="save" type="button"
                    class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-blue-700 text-base font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:ml-3 sm:w-auto sm:text-sm">
                Speichern
            </button>
            <button @click="show = false" type="button"
                    class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                Cancel
            </button>
        </x-slot>
    </x-modal>
