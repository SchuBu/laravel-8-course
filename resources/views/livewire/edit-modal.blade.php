<div>
    <x-modal title="Dies ist die Überschrift" wire:model.defer="showModal">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores facere, illum! Aliquid dicta dolor eum iure
        maiores mollitia nam officia reprehenderit vitae voluptate. Amet itaque, iure libero repudiandae tenetur velit.
        <x-slot name="footer">
            <button wire:click="deactivate" type="button"
                    class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">
                Deactivate
            </button>
            <button @click="show = false" type="button"
                    class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                Cancel
            </button>
        </x-slot>
    </x-modal>
</div>
