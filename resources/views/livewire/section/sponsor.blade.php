<div>
    <section class="breadcrumbs relative pb-0">
        <div class="absolute inset-0 bg-gradient-to-b from-[#D2E6F7FF]/10 to-[#0A3542]/80"></div>
        <div class="py-16 lg:py-28 text-center relative">
            <h2 class="text-[#0A3542] uppercase text-2xl font-semibold tracking-wide lg:text-4xl">Sponsors</h2>
        </div>
    </section>

    <section class="pt-10 pb-24 px-2 lg:px-5 bg-competition">
        @foreach ($sponsors as $sponsor)
        <div class="container border-dashed-bottom-2 py-8">
            <div class="partner-inner">
                <div class="partner-title text-center pb-6 w-lg-60 m-auto">
                    @php
                    $category = $sponsor->category;
                    $words = explode(' ', $category);
                    if (count($words) > 1) {
                    $words[1] = '<span class="black">' . $words[1] . '</span>';
                    }
                    $formattedCategory = implode(' ', $words);
                    @endphp
                    <h2 class="mb-1 kuning">{!! $formattedCategory !!}</h2>
                </div>
                <div class="row row-cols-1 row-cols-lg-4 row-cols-md-4  gx-2 gx-lg-3 gx-md-3">
                    <div class="col p-0 border-start border-end border-sm-0">
                        <div class="p-2 partner-img-box text-center ">
                            <a href="{{$sponsor->website ? $sponsor->website : 'javascript:void(0)'}}" target="_blank">
                                {!! $sponsor->logo ? '<img src="' . asset('storage/' . $sponsor->logo) . '"
                                    class="img-fluid opacity-75" alt="' . $sponsor->company . '" />' : '<small
                                    class="text-center text-blue">' . $sponsor->company . '</small>' !!}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </section>
</div>