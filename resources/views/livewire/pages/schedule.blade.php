<div class="w-full">
    <section class="breadcrumbs relative pb-0">
        <div class="absolute inset-0 bg-gradient-to-b from-[#D2E6F7FF]/10 to-[#0A3542]/80"></div>
        <div class="py-16 lg:py-28 text-center relative">
            <h2 class="text-[#0A3542] uppercase text-2xl font-semibold tracking-wide lg:text-4xl">Scientific Schedule</h2>
        </div>
    </section>

    <div class="px-5 lg:px-10 mt-10">
        <label class="input input-success input-lg w-full">
            <i class="fa fa-search opacity-45 text-sm"></i>
            <input wire:model.live.debounce.500ms='search' type="text" class="grow" placeholder="Search Topic, Speaker, Room" />
        </label>
    </div>

    <section class="pt-10 pb-24 px-2 lg:px-5">
        <div class="flex flex-col lg:flex-row justify-between gap-4">
            <div class="drawer drawer-end block lg:hidden z-30">
                <input id="my-drawer-4" type="checkbox" class="drawer-toggle" />
                <div class="drawer-content">
                    <!-- Page content here -->
                    <label for="my-drawer-4" class="drawer-button btn btn-success rounded-lg px-3"><i
                            class="fa-solid fa-filter"></i> Filter</label>
                </div>
                <div class="drawer-side">
                    <label for="my-drawer-4" aria-label="close sidebar" class="drawer-overlay"></label>
                    <div class="menu bg-base-200 text-base-content min-h-full w-80 p-4">
                        <!-- Sidebar content here -->
                        <div class="my-auto">
                            <h2 class="card-title">Filter</h2>
                            <fieldset class="fieldset p-4 bg-base-100 border border-base-300 rounded-box w-64">
                                <legend class="fieldset-legend">Date</legend>
                                <div class="flex items-center">
                                    <select wire:model.live.debounce.500ms='date' class="select flex-grow">
                                        <option value="0">Choose a date</option>
                                        @foreach ($uniqDates->sort() as $date)
                                        <option value="{{ $date }}">{{ \Carbon\Carbon::parse($date)->format('d F Y') }}
                                        </option>
                                        @endforeach
                                    </select>
                                    @if($date)
                                    <button wire:click="resetDate" class="btn btn-xs btn-error ml-2">X</button>
                                    @endif
                                </div>
                            </fieldset>
                            <fieldset class="fieldset p-4 bg-base-100 border border-base-300 rounded-box w-64">
                                <legend class="fieldset-legend">Session</legend>
                                <div class="flex items-center">
                                    <select wire:model.live.debounce.500ms='category' class="select flex-grow">
                                        <option value="0">Choose a Session</option>
                                        @foreach ($uniqCategories as $item)
                                        <option value="{{ $item }}">{{ $item }}</option>
                                        @endforeach
                                    </select>
                                    @if($category)
                                    <button wire:click="resetCategory" class="btn btn-xs btn-error ml-2">X</button>
                                    @endif
                                </div>
                            </fieldset>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card hidden lg:block lg:w-1/4 bg-base-100 order-1 lg:order-2 shadow-sm">
                <div class="card-body">
                    <h2 class="card-title">Filter</h2>
                    <fieldset class="fieldset p-4 bg-base-100 border border-base-300 rounded-box w-64">
                        <legend class="fieldset-legend">Date</legend>
                        <div class="flex items-center">
                            <select wire:model.live.debounce.500ms='date' class="select flex-grow">
                                <option value="0">Choose a date</option>
                                @foreach ($uniqDates->sort() as $date)
                                <option value="{{ $date }}">{{ \Carbon\Carbon::parse($date)->format('d F Y') }}</option>
                                @endforeach
                            </select>
                            @if($date)
                            <button wire:click="resetDate" class="btn btn-xs btn-error ml-2">X</button>
                            @endif
                        </div>
                    </fieldset>
                    <fieldset class="fieldset p-4 bg-base-100 border border-base-300 rounded-box w-64">
                        <legend class="fieldset-legend">Session</legend>
                        <div class="flex items-center">
                            <select wire:model.live.debounce.500ms='category' class="select flex-grow">
                                <option value="0">Choose a Session</option>
                                @foreach ($uniqCategories as $item)
                                <option value="{{ $item }}">{{ $item }}</option>
                                @endforeach
                            </select>
                            @if($category)
                            <button wire:click="resetCategory" class="btn btn-xs btn-error ml-2">X</button>
                            @endif
                        </div>
                    </fieldset>
                </div>
            </div>

            <div class="w-full lg:w-3/4 order-2 lg:order-1">
                @foreach ($uniqDates->sort() as $date)
                <div class="text-center lg:text-start border-t border-dashed pt-2">
                    <h2 class="text-lg font-semibold uppercase text-success tracking-wider">
                        {{\Carbon\Carbon::parse($date)->format('l, d F')}}
                    </h2>
                </div>
                @foreach ($uniqCategories as $item)
                @if (
                    !($date == '2026-04-15' && ($item == 'Symposium' ||  $item == 'Workshop' || $item == 'Free Paper' || $item == 'Research Proposal' || $item == 'Master Class' )) && 
                    !($date == '2026-04-16' && ($item == 'Live Surgery' || $item == 'Master Class' )) && 
                    !($date == '2026-04-17' && ($item == 'Workshop' || $item == 'Live Surgery')) && 
                    !($date == '2026-04-18' && ($item == 'Workshop' || $item == 'Live Surgery' || $item == 'Master Course'))
                )
                <p class="font-semibold tracking-wider my-5"><i
                        class="fa fa-angle-right text-sm text-green-700 font-semibold"></i> {{$item}}</p>
                @endif
                @foreach ($atglances as $atglance)
                @if ($atglance->category_sesi == $item && $atglance->date == $date)

                <div class="collapse bg-base-100 border border-base-300">
                    <input type="radio" name="my-accordion-1" />
                    <div class="collapse-title font-semibold">{{$atglance->title_ses}} - <span class="text-xs"><i
                                class="fa fa-map-marker text-success"></i> {{$atglance->room}} </span></div>
                    <div class="collapse-content text-sm">
                        <div class="">
                            <div>
                                <p class="mb-1">
                                    <span class="font-semibold">Session:</span> {{$atglance->title_ses}}
                                </p>
                                <p class="mb-2"><i class="fa fa-clock text-success"></i> {{$atglance->time}} | <i
                                        class="fa fa-map-marker text-success"></i> {{$atglance->room}}</p>
                            </div>
                            <div class="w-full">
                                {{-- {{$atglance->category_sesi}} --}}
                                <p class="font-semibold">Moderator: <span class="font-normal text-gray-500">
                                        {{$atglance->moderator}}</span></p>
                                <p class="font-semibold">Panelists: <span class="font-normal text-gray-500">
                                        {{$atglance->panelist}}</span></p>
                            </div>
                        </div>
                        <div class="overflow-x-auto sm:rounded-lg mt-4 border-t border-dashed border-sky-200">
                            <table class="table table-md">
                                <tbody>
                                    @foreach ($atglance->schedules as $schedule)
                                    <tr class="border-b border-gray-200 hover:bg-sky-50">
                                        <td>
                                            <p>{{$schedule->time_speaker}}</p>
                                        </td>
                                        <td class="font-semibold">
                                            {{$schedule->topic_title}}
                                            <br><span class="font-normal text-gray-500">Speaker:
                                                {{$schedule->speaker}}</span>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
                @endforeach
                @endforeach
            </div>
        </div>
        <div class=" mt-10">
            <p class="text-sm text-error italic">
                Note: <br>
                The scientific schedule is provisional and may be adjusted as required.
            </p>
        </div>
        <p class="text-xs italic my-3 text-error">*tentative schedule</p>

    </section>

    <section class="pt-10 pb-24 px-2 lg:px-5">
        <h1 class="text-xl">Conflict of Interest / Disclosure Statement Form</h1>
        <p>Please download for Disclosure Statement</p>
        <div class="w-full flex text-center">
            <a href="/download/COI_Form.pdf" target="_blank" class="btn text-white rounded-xl bg-green-700 hover:bg-green-900 w-full"><i class="fa-solid fa-download me-1"></i> Download Conflict of Interest / Disclosure Statement Form</a>
        </div>
    </section>
</div>