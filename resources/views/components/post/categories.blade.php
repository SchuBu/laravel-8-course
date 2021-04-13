<div class="bg-white shadow p-5 rounded-sm">
    <div class="border-b-2 border-blue-700 relative flex items-center justify-center">
        <h3 class="absolute bg-white px-4 text-xs text-gray-500 font-medium">Kategorien</h3>
    </div>
    <div class="mt-5 text-gray-700 text-sm">
        <ul>
            @foreach($categories as $category)
                <li><a href="/category/{{ $category['id'] }}">{{ $category['title'] }}</a></li>
            @endforeach
        </ul>
    </div>
</div>
