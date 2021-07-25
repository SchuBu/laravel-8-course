<x-layouts.main>
    <div class="flex-1">
        <h1>Beitrag bearbeiten</h1>

        <form action="{{route('admin.post.update', $post->slug)}}" method="post">
            @method('patch')
            @csrf
            <div class="bg-white p-5 shadow">
                @include('backend.post.form')
            </div>
        </form>


    </div>
</x-layouts.main>
