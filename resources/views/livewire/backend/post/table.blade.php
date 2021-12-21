<div class="flex-1">
    <div class="mb-5 flex justify-end">
        <a href="{{route('admin.post.create')}}" class="btn btn-primary">
            <i class="fa fa-plus fa-fw"></i> Beitrag erstellen
        </a>
    </div>


    {{--
        x-td
        x-tr
        x-th
    --}}
    <x-table>
        <x-thead>
            <x-tr class="bg-blue-800 text-white font-bold">
                <x-th sortable wire:click="sortBy('id')" :direction="$sortField === 'id' ? $sortDirection : null">ID
                </x-th>
                <x-th sortable wire:click="sortBy('created_at')"
                      :direction="$sortField === 'created_at' ? $sortDirection : null">Datum
                </x-th>
                <x-th></x-th>
                <x-th sortable wire:click="sortBy('title')" :direction="$sortField === 'title' ? $sortDirection : null"
                      class="w-full">Titel
                </x-th>
                <x-th>Optionen</x-th>
            </x-tr>
        </x-thead>
        <x-tbody>
            @foreach($posts as $post)
                <x-tr wire:key="{{$loop->index}}" wire:loading.class.delay="opacity-25" class="{{ $loop->even ? 'bg-gray-50' : '' }}">
                    <x-td>{{ $post->id }}</x-td>
                    <x-td class=" whitespace-nowrap">{{ $post->created_at }}</x-td>
                    <x-td>
                        @if($post->isTrashed())
                            <i class="far fa-dot-circle text-red-700"></i>
                        @else
                            <i class="far text-green-600 fa-dot-circle"></i>
                        @endif
                    </x-td>
                    <x-td>{{ $post->title }}</x-td>
                    <x-td>
                        <div class="flex">
                            @livewire('edit-modal', ["post" => $post->toArray()], key($post->id))
                            <form action="{{ route('admin.post.destroy', $post->slug) }}" method="post">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-secondary">
                                    @if($post->isTrashed())
                                        <i class="fa fa-toggle-off text-red-700 fa-fw"></i>
                                    @else
                                        <i class="fa fa-toggle-on text-green-700 fa-fw"></i>
                                    @endif
                                </button>
                            </form>
                        </div>
                    </x-td>
                </x-tr>
            @endforeach
        </x-tbody>
    </x-table>

    <div class="my-5">
        {{ $posts->onEachSide(2)->links() }}
    </div>
</div>
