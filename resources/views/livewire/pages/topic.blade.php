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
            @foreach ($topics as $topic)
            @if ($topic->category == $category)
            @if ($topic->name != null)
            <ul class="list-disc list-inside">
                <li class="mb-2 text-gray-500">{{ $topic->name }}
                    @if ($topic->sub_name != null)

                    <span class="font-semibold ml-1">({{ $topic->sub_name }})</span>
                    @endif
                </li>

            </ul>
            @endif
            @endif
            @endforeach
            @endforeach
        </div>
    </section>
</div>