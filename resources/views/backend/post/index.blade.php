<x-layouts.main>
    <div class="flex-1">
        <table class="backend_table bg-white shadow-md text-gray-800 text-sm">
            <thead>
            <tr class="bg-blue-800 text-white font-bold">
                <th class="border border-gray-200 p-2">ID</th>
                <th class="border border-gray-200 p-2">Datum</th>
                <th class="border border-gray-200 p-2"></th>
                <th class="border border-gray-200 p-2">Titel</th>
                <th class="border border-gray-200 p-2">Optionen</th>
            </tr>
            </thead>
            <tbody>
            @foreach($posts as $post)
                <tr @if($loop->even) class="bg-gray-100" @endif>
                    <td class="border border-gray-200 p-2">{{ $post->id }}</td>
                    <td class="border border-gray-200 p-2">{{ $post->created_at }}</td>
                    <td class="border border-gray-200 p-2">
                        @if($post->isTrashed())
                            <i class="far fa-dot-circle text-red-700"></i>
                        @else
                            <i class="far text-green-600 fa-dot-circle"></i>
                        @endif
                    </td>
                    <td class="border border-gray-200 p-2">{{ $post->title }}</td>
                    <td class="border border-gray-200 p-2">
                        <div class="flex">
                            <a href="{{ route('admin.post.edit', $post->slug) }}" class="btn btn-primary"><i
                                    class="fa fa-pencil-alt fa-fw"></i></a>
                            <form action="{{ route('admin.post.destroy', $post->slug) }}" method="post">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-trash-alt fa-fw"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <div class="my-5">
            {{ $posts->onEachSide(2)->links() }}
        </div>
    </div>
</x-layouts.main>
