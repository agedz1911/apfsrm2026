<div class="w-full">
    <section class="breadcrumbs relative pb-0">
        <div class="absolute inset-0 bg-gradient-to-b from-[#D2E6F7FF]/10 to-[#0A3542]/80"></div>
        <div class="py-16 lg:py-28 text-center relative">
            <h2 class="text-[#0A3542] uppercase text-2xl font-semibold tracking-wide lg:text-4xl">Topics
            </h2>
        </div>
    </section>

    <section class="mx-auto w-full px-5 lg:px-10 pt-16 pb-28 bg-competition">
        <div>
            @foreach ($uniqueCategories as $category)
            <p class="font-semibold">{{$category}}</p>

            @php
            $categoryTopics = $topics->where('category', $category);
            $mainTopics = $categoryTopics
            ->whereNotNull('name')
            ->unique('name')
            ->values();
            $specialSubs = $categoryTopics
            ->where('name', 'Special Tracks')
            ->pluck('sub_name')
            ->filter() // buang null/empty
            ->unique() // hindari duplikasi
            ->values();
            @endphp

            <ol class="list-decimal list-inside space-y-2">
                @foreach ($mainTopics as $main)
                <li class="text-gray-800">
                    @if ($main->name === 'Special Tracks')
                    Special Tracks
                    @if ($specialSubs->isNotEmpty())
                    <ul class="list-disc list-inside ml-6 mt-1 space-y-1">
                        @foreach ($specialSubs as $sub)
                        <li>{{ $sub }}</li>
                        @endforeach
                    </ul>
                    @endif
                    @else
                    {{ $main->name }}
                    @endif
                </li>
                @endforeach
            </ol>
            @endforeach
        </div>
    </section>
</div>