<header class="bg-white border-t-4 border-blue-600 shadow mb-5">
    <nav class="container max-w-7xl mx-auto px-5 lg:px-40 py-5 flex justify-between">
        <ul class="flex space-x-5">
            <li class="font-bold mr-5 text-blue-600">Your Blog</li>
            <li><a href="/">zur Webseite</a></li>
            <li><a href="{{route('admin.index')}}">Dashboard</a></li>
            <li><a href="{{route('admin.post.index')}}">Beiträge</a></li>
            <li><a href="#">Option 3</a></li>
        </ul>
        <ul>
            <li>
                <form action="{{route('logout')}}" method="post">
                    @csrf
                    <button type="submit">Logout</button>
                </form>
            </li>
        </ul>
    </nav>
</header>
