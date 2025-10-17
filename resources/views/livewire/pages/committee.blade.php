<div class="w-full">
    <section class="breadcrumbs relative pb-0">
        <div class="absolute inset-0 bg-gradient-to-b from-[#D2E6F7FF]/10 to-[#0A3542]/80"></div>
        <div class="py-16 lg:py-28 text-center relative">
            <h2 class="text-[#0A3542] uppercase text-2xl font-semibold tracking-wide lg:text-4xl">Organizing Committee
            </h2>
        </div>
    </section>

    <section class="mx-auto w-full px-5 pt-16 pb-28 bg-competition">
        @foreach ($uniqueCategories as $category)
        <h2 class="text-center text-xl lg:text-2xl font-bold uppercase text-[#009341] mb-5 mt-5">{{$category}}</h2>
        <div class="flex flex-wrap gap-5 justify-center mb-10">
            @foreach ($committees as $committee)
            @if ($committee->category == $category)
            <div class="card bg-base-200 shadow-sm w-full max-w-xs">
                <figure class="avatar">
                    <img src="{{$committee->image ? asset('storage/' . $committee->image) : "
                                        assets/images/speaker.png"}}" alt="{{$committee->name}}"
                        class="w-full h-full rounded-lg">
                </figure>
                <div class="card-body items-center text-center">
                    <h2 class="card-title">
                        {{ $committee->name }}
                    </h2>
                    @if ($committee->title != null)
                    <div class="badge badge-success">{{ $committee->title }}</div>
                    @endif
                </div>
            </div>
            @endif
            @endforeach
        </div>
        @endforeach
    </section>
</div>