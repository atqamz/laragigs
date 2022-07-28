<x-layout>
    @include('partials._hero')
    @include('partials._search')

    <div class="gap-4 mx-4 space-y-4 lg:grid lg:grid-cols-2 md:space-y-0">

        @unless(empty($listings))
            @foreach ($listings as $listing)
                <x-listing-card :listing="$listing" />
            @endforeach
        @else
            <div class="text-center">
                <h2 class="text-2xl font-bold uppercase">
                    No Listings Found
                </h2>
                <p class="mb-4">
                    There are no listings matching your search.
                </p>
            </div>
        @endunless

    </div>

    <div class="p-4 mt-6">
        {{ $listings->links('pagination::tailwind') }}
    </div>
</x-layout>
