<x-app-layout>
    <div class="flex flex-col justify-center items-center bg-gray-100">
        <div class="w-full sm:max-w-md px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            {{ $slot }}
        </div>
    </div>
</x-app-layout>
