
<!-- Posts Section-->
<x-app-layout meta-description="Vooldz Blog Read and learn about any thing you want!">
<section class="w-full md:w-2/3 flex flex-col items-center px-3">
    @foreach ($posts as $post)
    <x-post-item :post="$post">

    </x-post-item>
    @endforeach
    <!-- Pagination -->
    {{ $posts->links() }}

</section>

<x-sidebar>

</x-sidebar>
</x-app-layout>
