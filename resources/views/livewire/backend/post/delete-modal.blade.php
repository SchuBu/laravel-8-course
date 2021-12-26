<x-modal title="Beitrag löschen" wire:model.defer="showModal">
    <x-slot name="button">
        <button @click="show = true" type="submit" class="btn btn-secondary">
            <i class="fa fa-trash fa-fw"></i>
        </button>
    </x-slot>

    <p>Sind sie sicher, dass sie den Beitrag mit dem folgenden Titel endgültig löschen möchten? </p>
    <p class="text-center text-lg my-2"><b>#id {{ $post->id }}: {{ $post->title }}</b></p>

    <x-slot name="footer">
        <button wire:click="delete" type="button"
                class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-700 text-base font-medium text-white hover:bg-red-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">
            <span class="flex items-center"><i class="fa fa-exclamation-triangle fa-fw mr-2"></i> Endgültig löschen</span>
        </button>
        <button @click="show = false" type="button"
                class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
            Abbrechen
        </button>
    </x-slot>
</x-modal>
