<div>
    <div class="text-center md:text-start mb-5">
        <h2 class="mb-3 uppercase text-4xl tracking-wide font-bold">Transportation <span
                class="text-green-600">Recommendations</span></h2>
        <p class="text-gray-500">The organizers of The 7th Congress of APFSRM In Conjunction with The Congress of
            InaSREM congress have recommend to facilitate using the application your mobility during the event:
        </p>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-5">
        @foreach ($transports as $transport)
        <div class="w-full bg-white rounded-xl shadow-md pb-10">
            <div class="card">
                <div class="mb-3 relative p-0">
                    @php
                    $galleryCount = count($transport->gallery ?? []);
                    $gallery = $transport->gallery ?? [];
                    @endphp

                    <div class="carousel w-full shadow-md rounded-2xl" x-data="{ 
                         currentSlide: 0, 
                         totalSlides: {{ $galleryCount }}, 
                         interval: null 
                     }" x-init="
                         totalSlides = {{ $galleryCount }};
                         if(totalSlides > 0) {
                             interval = setInterval(() => { 
                                 currentSlide = (currentSlide + 1) % totalSlides; 
                             }, 8000);
                         }
                     " @mouseenter="if(interval) clearInterval(interval)"
                        @mouseleave="if(totalSlides > 0) interval = setInterval(() => { currentSlide = (currentSlide + 1) % totalSlides; }, 8000)"
                        x-show="{{ $galleryCount > 0 }}">

                        <!-- Slides Container -->
                        <div class="flex transition-transform duration-700 ease-in-out h-64"
                            :style="'transform: translateX(-' + (currentSlide * 100) + '%)'">

                            @foreach ($gallery as $index => $image)
                            <div class="carousel-item relative w-full flex-shrink-0 h-64">
                                <img src="{{ asset('storage/' . $image) }}"
                                    class="w-full h-full object-cover rounded-xl" alt="{{ $transport->name }}"
                                    loading="lazy" />
                            </div>
                            @endforeach
                        </div>

                        <!-- Navigation Buttons (hanya tampil jika ada lebih dari 1 gambar) -->
                        @if($galleryCount > 1)
                        <div
                            class="absolute left-4 right-4 top-1/2 flex -translate-y-1/2 transform justify-between z-10">
                            <button @click="
                            if(interval) clearInterval(interval); 
                            currentSlide = currentSlide === 0 ? {{ $galleryCount - 1 }} : currentSlide - 1; 
                            $nextTick(() => {
                                if(totalSlides > 1) {
                                    interval = setInterval(() => { 
                                        currentSlide = (currentSlide + 1) % totalSlides; 
                                    }, 8000);
                                }
                            });
                        " class="btn btn-circle btn-sm btn-outline btn-success shadow-lg hover:shadow-xl transition-all">
                                ❮
                            </button>
                            <button @click="
                            if(interval) clearInterval(interval); 
                            currentSlide = (currentSlide + 1) % totalSlides; 
                            $nextTick(() => {
                                if(totalSlides > 1) {
                                    interval = setInterval(() => { 
                                        currentSlide = (currentSlide + 1) % totalSlides; 
                                    }, 4000);
                                }
                            });
                        " class="btn btn-circle btn-sm btn-outline btn-success shadow-lg hover:shadow-xl transition-all">
                                ❯
                            </button>
                        </div>

                        <!-- Indicators -->
                        <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 flex space-x-2">
                            @foreach ($gallery as $index => $image)
                            <button @click="currentSlide = {{ $index }}"
                                :class="currentSlide === {{ $index }} ? 'btn-active bg-success' : 'btn btn-xs btn-ghost'"
                                class="w-3 h-3 rounded-full transition-all duration-300"></button>
                            @endforeach
                        </div>
                        @endif
                    </div>

                    {{-- Fallback jika tidak ada gambar --}}
                    @if($galleryCount === 0)
                    <div class="w-full h-64 bg-gray-200 rounded-xl flex items-center justify-center">
                        <span class="text-gray-500 text-lg">Tidak ada gambar</span>
                    </div>
                    @endif
                </div>

                <div class="card-body p-6">
                    <div class="mb-4">
                        <h6 class="pb-2 mb-3 text-xl font-semibold text-gray-800">{{ $transport->name }}</h6>
                        <div class="prose prose-sm max-w-none">
                            {!! str($transport->description)->markdown()->sanitizeHtml() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>