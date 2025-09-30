<div class="relative">
    <section class="lg:min-h-screen banner relative pb-16 lg:pb-28">
        <div class="absolute inset-0 bg-gradient-to-t from-[#0A3542]/80 from-10% to-[#D2E6F7FF]/10"></div>
        <div
            class="flex z-10 flex-col lg:flex-row justify-center items-center lg:justify-evenly gap-8 relative pt-10 md:pt-14 lg:pt-32">
            <div class="px-1 order-2 lg:order-1">
                <img src="assets/images/banner.png" class="w-full max-w-md rounded-xl" alt="Banner">
            </div>
            <div class="px-5 order-1 lg:order-2">
                <img src="assets/images/logo/logo-event.png" class="w-full max-w-md rounded-xl" alt="Banner">
                <div class="flex text-start w-fit relative">
                    <h1 class="text-2xl lg:text-4xl text-[#3a525e]  font-bold">Asian Pacific Federation of
                        Societies for
                        <br><span class="text-[#0A3542] ">Reconstructive Microsurgery</span>
                    </h1>
                </div>
                <p class="text-slate-300 mt-4">
                    April 16<sup>th</sup> - 18<sup>nd</sup>, 2026 <br> Bali Nusa Dua Convention Center (BNDCC 2), Bali, Indonesia</p>
                <div class="mt-10">
                    <button
                        class=" text-white bg-gradient-to-br from-green-700 to-[#009341] hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-green-800 dark:focus:ring-green-300 font-medium rounded-lg text-sm px-5 md:px-10 lg:py-3.5 py-2.5 text-center">Read
                        More <i class="fa-solid fa-angles-right text-xs"></i></button>
                    <a href="/registration" wire:navigate
                        class="text-white hover:text-white border border-white hover:bg-green-400 hover:border-green-400 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 md:px-10 lg:py-3.5 py-2.5 text-center  dark:border-green-400 dark:text-green-400 dark:hover:text-white dark:hover:bg-green-500 dark:focus:ring-green-300"><i
                            class="fa-solid fa-pen-to-square"></i> Regiter Now </a>
                </div>
            </div>
        </div>
        <div class="absolute block  overflow-hidden w-full z-0 left-0 leading-none bottom-[-1px]">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path class="fill-[#ffffff]" fill-opacity="1" d="M0,288L48,272C96,256,192,224,288,197.3C384,171,480,149,576,165.3C672,181,768,235,864,250.7C960,267,1056,245,1152,250.7C1248,256,1344,288,1392,304L1440,320L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
            </svg>
        </div>
    </section>

    <section
        class="lg:py-16 py-20 lg:mt-10 grid grid-cols-1 lg:grid-cols-2 px-3 lg:px-8 gap-3 border-b border-dashed border-gray-300">
        <div class="">
            <div class="flex text-start w-fit relative">
                <img src="assets/images/logo/logo-event.png" alt="Icon"
                    class="w-full max-w-sm">
                <img src="assets/images/logo/logo.png" class="rounded-lg w-full max-w-sm hover:scale-105 transition-all duration-500"
                    alt="">
            </div>
            <h1 class="text-2xl lg:text-4xl text-[#3a525e]  font-bold">Asian Pacific Federation of
                Societies for
                <br><span class="text-[#0A3542] ">Reconstructive Microsurgery</span>
            </h1>

            <div class="flex flex-col md:flex-row lg:justify-start justify-center items-center gap-3 mt-8">
                <div
                    class="z-10 hover:cursor-pointer max-w-sm p-6 bg-white border border-sky-50 rounded-lg shadow-md hover:bg-[#f5fdff]">
                    <div class="flex items-center">
                        <div class="shrink-0 bg-green-600 py-3 px-4 rounded-full">
                            <i class="fa fa-calendar-o text-4xl text-white"></i>
                        </div>
                        <div class="flex-1 min-w-0 ms-4">
                            <p class="text-sm font-medium  truncate">
                                Thursday to Saturday
                            </p>
                            <p class="text-sm text-gray-500 truncate">
                                April 16<sup>th</sup> - 18<sup>nd</sup>, 2026
                            </p>
                        </div>
                    </div>
                </div>
                <div
                    class="z-10 hover:cursor-pointer max-w-sm p-6 bg-white border border-sky-50 rounded-lg shadow-md hover:bg-[#f5fdff]">
                    <div class="flex items-center px-5">
                        <div class="shrink-0 bg-green-600 py-3 px-4 rounded-full">
                            <i class="fa fa-map-marker text-4xl text-white"></i>
                        </div>
                        <div class="flex-1 min-w-0 ms-4">
                            <p class="text-sm font-medium  truncate ">
                                Bali Nusa Dua <br> Convention Center (BNDCC 2)
                            </p>
                            <p class="text-sm text-gray-500 truncate">
                                Bali, Indonesia
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card bg-gradient-to-t from-[#cfe1e5] to-[#ebf4f7] rounded-xl w-full mt-5">
                <div class="card-body ">
                    <div id="countdown" class="flex gap-3 w-full lg:gap-8 ">
                        <div class="m-auto py-2 px-5 lg:py-4 text-center">
                            <span id="days" class="font-bold text-green-600 mb-0 text-2xl lg:text-4xl"></span><br>
                            <small class=" text-xs">Days</small>
                        </div>

                        <div class=" m-auto py-2 px-7 lg:py-4">
                            <span id="hours" class="font-bold text-green-600 mb-0 text-2xl lg:text-4xl"></span><br>
                            <small class=" text-xs">Hours</small>
                        </div>

                        <div class=" m-auto py-2 px-5 lg:py-4">
                            <span id="minutes" class="font-bold text-green-600 mb-0 text-2xl lg:text-4xl"></span><br>
                            <small class=" text-xs">Minutes</small>
                        </div>

                        <div class=" m-auto py-2 px-5 lg:py-4">
                            <span id="seconds" class="font-bold text-green-600 mb-0 text-2xl lg:text-4xl"></span><br>
                            <small class=" text-xs">Seconds</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 align-items-center">
            <div class="flex flex-col gap-4">
                <div class="rounded-xl bg-white shadow-lg">
                    <img src="assets/images/bandung/5.jpg" class="w-full rounded-xl sepia-50" alt="bandung 1">
                </div>
                <div class="rounded-xl bg-white shadow-lg">
                    <img src="assets/images/bandung/6.jpg" class="w-full rounded-xl" alt="bandung 2">
                </div>
            </div>
            <div class="rounded-xl bg-white shadow-lg">
                <img src="assets/images/bandung/4.jpg" class="w-full rounded-xl object-cover h-full sepia-50"
                    alt="bandung 3">
            </div>
        </div>
    </section>

    <section class="lg:py-16 py-20">
        <div class="w-full pt-5">
            <div class="text-center pb-6 m-auto">
                <h2 class="mb-1 text-3xl font-bold uppercase">important <span class="text-green-600 ">Dates</span></h2>
            </div>
            <livewire:section.important-date />
        </div>
    </section>

    <section class="bg-gradient-to-b from-[#3c6d7e] to-[#12303a] relative z-0 py-28">
        <div class="absolute inset-0 feature start-0"></div>
        <div class="relative">
            <div class="w-full max-w-6xl mx-auto border-b border-gray-500 border-opacity-35">
                <div class="mb-16">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                        <div class="w-full border-e border-opacity-35 border-gray-500 ">
                            <div class="border-b border-opacity-25 border-gray-500 md:border-b-0 text-center py-5 px-2">
                                <h1 class="text-green-600 m-0 text-4xl md:text-5xl font-semibold"><span class="num"
                                        data-val="100"></span><span>+</span>
                                </h1>
                                <p class="text-xs text-white">Speakers</p>
                            </div>
                        </div>
                        <div class="w-full border-e border-opacity-35 border-gray-500">
                            <div class="border-b border-opacity-25 border-gray-500 md:border-b-0 text-center py-5 px-2">
                                <h1 class="text-green-600 m-0 text-4xl md:text-5xl font-semibold"><span class="num"
                                        data-val="50"></span><span>+</span>
                                </h1>
                                <p class="text-xs text-white">Symposium</p>
                            </div>
                        </div>
                        <div class="w-full border-e border-opacity-35 border-gray-500">
                            <div class="border-b border-opacity-25 border-gray-500 md:border-b-0 text-center py-5 px-2">
                                <h1 class="text-green-600 m-0 text-4xl md:text-5xl font-semibold"><span class="num"
                                        data-val="20"></span><span>+</span>
                                </h1>
                                <p class="text-xs text-white">Workshops</p>
                            </div>
                        </div>
                        <div class="w-full border-e border-opacity-35 border-gray-500">
                            <div class="border-b border-opacity-25 border-gray-500 md:border-b-0 text-center py-5 px-2">
                                <h1 class="text-green-600 m-0 text-4xl md:text-5xl font-semibold"><span class="num"
                                        data-val="30"></span><span>+</span>
                                </h1>
                                <p class="text-xs text-white">Topics</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-10 mb-6">
                <div class="grid grid-cols-1 lg:grid-cols-2 justify-items-center gap-5">
                    <div class="order-2 lg:order-2 p-2">
                        <div class="w-full max-w-sm flex flex-col items-center">
                            <div class="image-welcome">
                                {{-- <img src="assets/images/defry.png" alt="faq-general-image" class="w-60"> --}}
                            </div>
                            <div class="p-4 rounded-lg bg-green-600 w-full">
                                <div class="ps-4 border-s border-white border-spacing-7">
                                    <p class="text-white text-xs italic">" Congress Chairman
                                        "</p>
                                    {{-- <h6 class="font-semibold">Defry Rivandra Utama</h6> --}}
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="order-1 lg:order-1 p-2">
                        <h2 class="text-4xl text-white font-semibold uppercase">Welcome <span
                                class="text-green-600">message </span></h2>
                        @foreach ($welcomeMessages as $welcomeMessage)
                        <div class="pr-2">
                            <div class="pb-4 text-justify flex flex-col gap-2 text-gray-300">

                                {!! str($welcomeMessage->description)->markdown()->sanitizeHtml() !!}

                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- <livewire:section.competition /> -->

    <section class="w-full pt-24 pb-3 px-2 lg:px-4">
        <div class="text-center mb-5 pb-10">
            <p class="mb-1 font-semibold">Venue</p>
            <h2 class=" text-4xl font-semibold uppercase mb-1">GET DIRECTION TO THE <span
                    class="text-green-600">Venue</span></h2>
        </div>
        <div class="">
            <div class="flex flex-col lg:flex-row gap-5">
                <div class="lg:w-1/3 w-full">
                    <div
                        class="py-10 px-4 text-white rounded-lg shadow-md bg-gradient-to-br from-[#3c6d7e] to-[#12303a]">
                        <div class="">
                            <h5 class="text-green-600 pb-2 tracking-wide font-semibold">EVENT VENUE:</h5>
                            <p class="pb-5 m-0 text-sm">Bali Nusa Dua Convention Center (BNDCC 2)</p>
                            <h5 class="text-green-600 pb-2 tracking-wide font-semibold">ADDRESS:</h5>
                            <p class="pb-5 m-0 text-sm">
                                Nusa Dua Tourism Area Lot NW/1, Benoa, South Kuta District, Badung Regency, Bali, Indonesia </p>
                            <!-- <h5 class="text-white pb-2">RECEPTION INFO:</h5>
                                    <p class="pb-5 m-0">Booking: (+62) 1919-2020</p> -->
                            <a class="hover:text-green-400">Get Directions</a>
                        </div>
                    </div>
                </div>
                <div class="lg:w-2/3 w-full px-1">
                    <iframe class="rounded-lg w-full h-full"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1971.4463375527068!2d115.22347109839474!3d-8.796152999999991!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd2432481681435%3A0x28d2de6bdbd07735!2sBali%20Nusa%20Dua%20Convention%20Center!5e0!3m2!1sid!2sid!4v1759245311923!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-2 mt-5 justify-items-center">

                <div class="w-full max-w-sm">
                    <a><img src="assets/images/bandung/1.jpg" class="w-full rounded-xl shadow-md"
                            alt="Holiday Inn Bandung Pasteur"></a>
                </div>
                <div class="w-full max-w-sm">
                    <a><img src="assets/images/bandung/2.webp" class="w-full rounded-xl shadow-md"
                            alt="Holiday Inn Bandung Pasteur"></a>
                </div>
                <div class="w-full max-w-sm">
                    <a><img src="assets/images/bandung/3.webp" class="w-full rounded-xl shadow-md"
                            alt="Holiday Inn Bandung Pasteur"></a>
                </div>
            </div>
        </div>
    </section>
</div>

<script>
    document.addEventListener('livewire:navigated', function() {
        const days = document.getElementById('days');
        const hours = document.getElementById('hours');
        const minutes = document.getElementById('minutes');
        const seconds = document.getElementById('seconds');

        // Check if all elements are found
        const elementsExist = days && hours && minutes && seconds;

        // If any element is missing, log a warning and return
        if (!elementsExist) {
            console.warn('One or more countdown elements not found.');
            return;
        }

        // Get current date and time
        const currentTime = new Date();

        // Set new date 30 days from now
        const targetTime = new Date(2026, 4, 16, 8, 0, 0);

        // Update countdown time
        function updateCountdown() {
            const currentTime = new Date();
            const diff = targetTime - currentTime;

            const d = Math.floor(diff / 1000 / 60 / 60 / 24);
            const h = Math.floor((diff / 1000 / 60 / 60) % 24);
            const m = Math.floor((diff / 1000 / 60) % 60);
            const s = Math.floor((diff / 1000) % 60);

            // Update elements if they exist
            if (days) days.innerHTML = d;
            if (hours) hours.innerHTML = h < 10 ? '0' + h : h;
            if (minutes) minutes.innerHTML = m < 10 ? '0' + m : m;
            if (seconds) seconds.innerHTML = s < 10 ? '0' + s : s;
        }

        // Call updateCountdown initially and set it to run every second
        updateCountdown();
        setInterval(updateCountdown, 1000);
        let valueDisplays = document.querySelectorAll(".num");
        let interval = 4000;

        valueDisplays.forEach((valueDisplay) => {
            let startValue = 0;
            let endValue = parseInt(valueDisplay.getAttribute("data-val"));
            let duration = Math.floor(interval / endValue);
            let counter = setInterval(function() {
                startValue += 1;
                valueDisplay.textContent = startValue;
                if (startValue == endValue) {
                    clearInterval(counter);
                }
            }, duration);
        });
    });
</script>