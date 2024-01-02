<x-app-layout>
    <div class="container mx-auto flex flex-wrap py-6">

        <!-- Post Section -->
        <section class="w-full  flex flex-col items-center px-3">

            <article class="w-full flex flex-col shadow my-4">
                <!-- Article Image -->
                <a href="#" class="hover:opacity-75 ">
                    <img class="" src="{{ $widget->getImage() }}" alt="Post Image">
                </a>
                <div class="bg-white flex flex-col justify-start p-6">
                    <h1 class="text-3xl font-bold pb-4">{{ $widget->title }}</h1>
                    <p class="pb-3">{!! $widget->content !!}</p>
            </article>

    </div>
    </section>
</x-app-layout>
