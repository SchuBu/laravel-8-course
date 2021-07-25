<x-layouts.main>
    <div class="flex-1">
        <h1>Neuen Beitrag erstellen</h1>

        <form action="{{route('admin.post.store')}}" method="post">
            @csrf
            <div class="bg-white p-5 shadow">
                @include('backend.post.form')
            </div>
        </form>


    </div>
</x-layouts.main>
