<!-- Sidebar Section -->
<aside class="w-full md:w-1/3 flex flex-col items-center px-3">

    <div class="w-full bg-white shadow flex flex-col my-4 p-6">
        <h3 class="text-xl font-semibold pb-5 text-blue-700">All Categories</h3>
        @foreach ($categories as $category)
            <a href="{{ route('by-category', $category->slug) }}"
                class="text-lg  px-3 py-2 rounded hover:text-white hover:bg-blue-500
                    @if (request('category')?->slug == $category->slug) {{ 'bg-blue-500 text-white hover:text-black' }} @endif">
                {{ $category->title }} ({{ $category->total }})
            </a>
        @endforeach
    </div>

    <div class="w-full bg-white shadow flex flex-col my-4 p-6">
        <p class="text-xl font-semibold pb-5">{{ App\Models\TextWidget::getTitle('about-us-sidebar') }}</p>
        <p class="pb-2">{!! App\Models\TextWidget::getContent('about-us-sidebar') !!}</p>
        <a href="{{ route('about-us') }}"
            class="w-full bg-blue-800 text-white font-bold text-sm uppercase rounded hover:bg-blue-700 flex items-center justify-center px-2 py-3 mt-4">
            Get to know us
        </a>
    </div>

    <div class="w-full bg-white shadow flex flex-col my-4 p-6">
        <p class="text-xl font-semibold pb-5">Instagram</p>
        <div class="grid grid-cols-3 gap-3">
            <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=1">
            <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=2">
            <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=3">
            <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=4">
            <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=5">
            <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=6">
            <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=7">
            <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=8">
            <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=9">
        </div>
        <a href="#"
            class="w-full bg-blue-800 text-white font-bold text-sm uppercase rounded hover:bg-blue-700 flex items-center justify-center px-2 py-3 mt-6">
            <i class="fab fa-instagram mr-2"></i> Follow @dgrzyb
        </a>
    </div>

</aside>
