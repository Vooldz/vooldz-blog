<article class="bg-white flex flex-col shadow my-4">
    <!-- Post Image -->
    <a href="{{ route('show', $post) }}" class="hover:opacity-75">
        <img src="{{ $post->getThumbnail() }}" alt="Post Image">
    </a>
    <div class="bg-white flex flex-col justify-start p-6">


        <!-- Post Categories -->
        <div class="flex justify-start space-x-4">
            @foreach ($post->categories as $category)
                <a href="{{ route('by-category', $category) }}" class="text-blue-700 text-sm font-bold uppercase pb-4">{{ $category->title }}</a>
            @endforeach

        </div>

        <!-- Post Title -->
        <a href="{{ route('show', $post) }}" class="text-3xl font-bold hover:text-gray-700 pb-4">{{ $post->title }}</a>
        <!-- Post User & Published at -->
        <p href="#" class="text-sm pb-3">
            By <a href="#" class="font-semibold hover:text-gray-800">{{ $post->user->name }}</a>,
            Published on {{ $post->published_at }}
        </p>

        <!-- Post Body -->
        <a href="{{ route('show', $post) }}" class="pb-6">{!! $post->shortBody() !!}</a>

        <a href="{{ route('show', $post) }}" class="uppercase text-gray-800 hover:text-black">Continue Reading
            <i
                class="fas fa-arrow-right">
            </i>
        </a>
    </div>
</article>
