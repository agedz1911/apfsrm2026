<div class="w-full">
    <section class="breadcrumbs relative pb-0">
        <div class="absolute inset-0 bg-gradient-to-b from-[#D2E6F7FF]/10 to-[#0A3542]/80"></div>
        <div class="py-16 lg:py-28 text-center relative">
            <h2 class="text-[#0A3542] uppercase text-2xl font-semibold tracking-wide lg:text-4xl">Submission</h2>
        </div>
    </section>

    <section class="pt-10 pb-24 px-2 lg:px-5">
        <div class="flex flex-col lg:flex-row gap-8 justify-between items-center">
            <div class="lg:w-2/3 w-full">
                <div class="">
                    <div class="text-center md:text-start mb-5">
                        <p class="mb-1 text-green-600">Submission</p>
                        <h2 class="mb-0 uppercase text-4xl font-bold">Guideline for <span
                                class="text-green-600">Abstract</span></h2>
                        <!-- <p>Abstract Free Paper</p> -->
                    </div>

                    <div>
                        @foreach ($guidelineAbstracts as $abstract)
                        <div class="collapse collapse-plus bg-base-100 border border-base-300">
                            <input type="radio" name="my-accordion-3"  />
                            <div class="collapse-title font-semibold">{{ $abstract->title }}</div>
                            <div class="collapse-content text-gray-500 text-sm">{!! str($abstract->description)->markdown()->sanitizeHtml() !!}</div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="w-full lg:w-1/3">
                <div class="p-10 bg-base-100 rounded-lg shadow-md ">
                    <div class="mb-4">
                        <h2 class="text-4xl font-semibold tracking-wide mb-2"> Online <span
                                class="text-green-600">Submission</span></h2>
                        <p class="m-0 text-xs text-gray-500 italic">*make sure the file complies with the guidelines.</p>
                    </div>
                    <div class="w-full flex text-center">
                        <a href="https://expo.virconex-id.com/abstract/burn2025/index.php/upload_abstract" class="btn text-white rounded-xl bg-green-700 hover:bg-green-900 w-full"><i  class="fa-solid fa-upload me-1"></i> Submit Abstract</a>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>