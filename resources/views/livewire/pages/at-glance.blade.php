<div class="w-full">
    <section class="breadcrumbs relative pb-0">
        <div class="absolute inset-0 bg-gradient-to-b from-[#D2E6F7FF]/10 to-[#0A3542]/80"></div>
        <div class="py-16 lg:py-28 text-center relative">
            <h2 class="text-[#0A3542] uppercase text-2xl font-semibold tracking-wide lg:text-4xl">Program at Glance</h2>
        </div>
    </section>

    <section class="pt-10 pb-24 px-2 lg:px-5 bg-competition">
        <!-- name of each tab group should be unique -->
        <div class="tabs tabs-border justify-evenly">
            <input type="radio" name="my_tabs_2" checked="checked"
                class="tab uppercase tracking-wider text-green-600 hover:text-[#0A3542]"
                aria-label="Thursday, 16 April 2026" />
            <div class="tab-content">
                <div class="overflow-x-auto  rounded-box border border-base-content/5 bg-base-100 border-gray-300">
                    <table class="table table-sm">
                        <!-- head -->
                        <thead>
                            <tr>
                                <th colspan="3" class="text-center bg-base-200">WORKSHOPS</th>
                            </tr>
                            {{-- <tr class="text-green-600 bg-base-200 text-xs">
                                <th style="width: 33%;" class="text-center">Empire 3</th>
                                <th style="width: 33%;" class="text-center">Empire 4</th>
                                <th style="width: 33%;" class="text-center">Pasteur Convention Center 3</th>
                            </tr> --}}
                        </thead>
                        <tbody class="text-sm">
                            <tr>
                                <td style="vertical-align: top">
                                    @foreach ($duaPuluh as $empire3)
                                    @if ($empire3->room == 'Empire 3')

                                    <a href="#modal_{{$empire3->id}}">
                                        <div
                                            class="card bg-[{{$empire3->color}}] mb-1 shadow-none transition-shadow duration-300 cursor-pointer hover:shadow-lg hover:shadow-sky-200">
                                            <div class="card-body text-center">
                                                <p class="font-semibold">{{$empire3->time}}</p>
                                                <h2 class="text-lg font-light text-gray-500">{{$empire3->title_ses}}
                                                </h2>
                                            </div>
                                        </div>
                                    </a>
                                    @endif

                                    <div class="modal" role="dialog" id="modal_{{$empire3->id}}">
                                        <div class="modal-box w-11/12 max-w-5xl">
                                            <h2 class="text-lg font-semibold">{{$empire3->title_ses}}</h2>
                                            <div class="border-y border-y-slate-200 mt-4 py-5">
                                                <div class="flex justify-between items-start mb-3">
                                                    <div>
                                                        <p class="text-sm text-gray-500">Date: <span
                                                                class="font-semibold text-black">{{Carbon\Carbon::parse($empire3->date)->format('d
                                                                F Y')}}</span></p>
                                                        <p class="text-sm text-gray-500">Time: <span
                                                                class="font-semibold text-black">{{$empire3->time}}</span>
                                                        </p>
                                                    </div>
                                                    <p>Room : <span
                                                            class="font-semibold text-black">{{$empire3->room}}</span>
                                                    </p>
                                                </div>
                                                <p class="text-gray-500">Session: <span
                                                        class="font-semibold text-black">{{$empire3->title_ses}}</span>
                                                </p>
                                                <p class="text-gray-500">Moderator: <span
                                                        class="font-semibold text-black">{{$empire3->moderator}}</span>
                                                </p>

                                                <div class="overflow-x-auto mt-4">
                                                    <table class="table">
                                                        <!-- head -->
                                                        <thead>
                                                            <tr>
                                                                <th>Time</th>
                                                                <th>Topic</th>
                                                                <th>Speaker</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($empire3->schedules as $schedule)
                                                            <tr>
                                                                <th>{{$schedule->time_speaker}}</th>
                                                                <td>{{$schedule->topic_title}}</td>
                                                                <td>{{$schedule->speaker}}</td>
                                                            </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="modal-action">
                                                <a href="#" class="btn btn-error">Close</a>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </td>
                                <td style="vertical-align: top">
                                    @foreach ($duaPuluh as $empire4)
                                    @if ($empire4->room == 'Empire 4')

                                    <a href="#modal_{{$empire4->id}}">
                                        <div
                                            class="card bg-[{{$empire4->color}}] mb-1 shadow-none transition-shadow duration-300 cursor-pointer hover:shadow-lg hover:shadow-sky-200">
                                            <div class="card-body text-center">
                                                <p class="font-semibold">{{$empire4->time}}</p>
                                                <h2 class="text-lg font-light text-gray-500 ">{{$empire4->title_ses}}
                                                </h2>
                                            </div>
                                        </div>
                                    </a>
                                    @endif

                                    <div class="modal" role="dialog" id="modal_{{$empire4->id}}">
                                        <div class="modal-box w-11/12 max-w-5xl">
                                            <h2 class="text-lg font-semibold">{{$empire4->title_ses}}</h2>
                                            <div class="border-y border-y-slate-200 mt-4 py-5">
                                                <div class="flex justify-between items-start mb-3">
                                                    <div>
                                                        <p class="text-sm text-gray-500">Date: <span
                                                                class="font-semibold text-black">{{Carbon\Carbon::parse($empire4->date)->format('d
                                                                F Y')}}</span></p>
                                                        <p class="text-sm text-gray-500">Time: <span
                                                                class="font-semibold text-black">{{$empire4->time}}</span>
                                                        </p>
                                                    </div>
                                                    <p>Room : <span
                                                            class="font-semibold text-black">{{$empire4->room}}</span>
                                                    </p>
                                                </div>
                                                <p class="text-gray-500">Session: <span
                                                        class="font-semibold text-black">{{$empire4->title_ses}}</span>
                                                </p>
                                                <p class="text-gray-500">Moderator: <span
                                                        class="font-semibold text-black">{{$empire4->moderator}}</span>
                                                </p>

                                                <div class="overflow-x-auto mt-4">
                                                    <table class="table">
                                                        <!-- head -->
                                                        <thead>
                                                            <tr>
                                                                <th>Time</th>
                                                                <th>Topic</th>
                                                                <th>Speaker</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($empire4->schedules as $schedule)
                                                            <tr>
                                                                <th>{{$schedule->time_speaker}}</th>
                                                                <td>{{$schedule->topic_title}}</td>
                                                                <td>{{$schedule->speaker}}</td>
                                                            </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="modal-action">
                                                <a href="#" class="btn btn-error">Close</a>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </td>
                                <td style="vertical-align: top">
                                    @foreach ($duaPuluh as $convention3)
                                    @if ($convention3->room == 'Pasteur Convention Center 3')

                                    <a href="#modal_{{$convention3->id}}">
                                        <div
                                            class="card bg-[{{$convention3->color}}] mb-1 shadow-none transition-shadow duration-300 cursor-pointer hover:shadow-lg hover:shadow-sky-200">
                                            <div class="card-body text-center">
                                                <p class="font-semibold">{{$convention3->time}}</p>
                                                <h2 class="text-lg font-light text-gray-500">{{$convention3->title_ses}}
                                                </h2>
                                            </div>
                                        </div>
                                    </a>
                                    @endif

                                    <div class="modal" role="dialog" id="modal_{{$convention3->id}}">
                                        <div class="modal-box w-11/12 max-w-5xl">
                                            <h2 class="text-lg font-semibold">{{$convention3->title_ses}}</h2>
                                            <div class="border-y border-y-slate-200 mt-4 py-5">
                                                <div class="flex justify-between items-start mb-3">
                                                    <div>
                                                        <p class="text-sm text-gray-500">Date: <span
                                                                class="font-semibold text-black">{{Carbon\Carbon::parse($convention3->date)->format('d
                                                                F Y')}}</span></p>
                                                        <p class="text-sm text-gray-500">Time: <span
                                                                class="font-semibold text-black">{{$convention3->time}}</span>
                                                        </p>
                                                    </div>
                                                    <p>Room : <span
                                                            class="font-semibold text-black">{{$convention3->room}}</span>
                                                    </p>
                                                </div>
                                                <p class="text-gray-500">Session: <span
                                                        class="font-semibold text-black">{{$convention3->title_ses}}</span>
                                                </p>
                                                <p class="text-gray-500">Moderator: <span
                                                        class="font-semibold text-black">{{$convention3->moderator}}</span>
                                                </p>

                                                <div class="overflow-x-auto mt-4">
                                                    <table class="table">
                                                        <!-- head -->
                                                        <thead>
                                                            <tr>
                                                                <th>Time</th>
                                                                <th>Topic</th>
                                                                <th>Speaker</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($convention3->schedules as $schedule)
                                                            <tr>
                                                                <th>{{$schedule->time_speaker}}</th>
                                                                <td>{{$schedule->topic_title}}</td>
                                                                <td>{{$schedule->speaker}}</td>
                                                            </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="modal-action">
                                                <a href="#" class="btn btn-error">Close</a>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <input type="radio" name="my_tabs_2" class="tab uppercase tracking-wider text-green-600 hover:text-[#0A3542]"
                aria-label="Friday, 17 April 2026" />
            <div class="tab-content">
                <div class="overflow-x-auto  rounded-box border border-base-content/5 bg-base-100 border-gray-300">
                    <table class="table table-sm">
                        <!-- head -->
                        <thead>
                            <tr>
                                <th colspan="3" class="text-center bg-base-200">CONFERENCE DAY 1</th>
                            </tr>
                            {{-- <tr class="text-green-600 bg-base-200 text-xs">
                                <th style="width: 33%;" class="text-center">Pasteur Convention Center 1 & 2</th>
                                <th style="width: 33%;" class="text-center">Pasteur Convention Center 3</th>
                                <th style="width: 33%;" class="text-center">Empire 5</th>
                            </tr> --}}
                        </thead>
                        <tbody class="text-sm">
                            <tr>
                                <td style="vertical-align: top">
                                    @foreach ($duaPuluhSatu as $convention1)
                                    @if ($convention1->room == 'Pasteur Convention Center 1 & 2')

                                    <a href="#modal_{{$convention1->id}}">
                                        <div
                                            class="card bg-[{{$convention1->color}}] mb-1 shadow-none transition-shadow duration-300 cursor-pointer hover:shadow-lg hover:shadow-sky-200">
                                            <div class="card-body text-center">
                                                <p class="font-semibold">{{$convention1->time}}</p>
                                                <h2 class="text-lg font-light text-gray-500">{{$convention1->title_ses}}
                                                </h2>
                                            </div>
                                        </div>
                                    </a>
                                    @endif

                                    <div class="modal" role="dialog" id="modal_{{$convention1->id}}">
                                        <div class="modal-box w-11/12 max-w-5xl">
                                            <h2 class="text-lg font-semibold">{{$convention1->title_ses}}</h2>
                                            <div class="border-y border-y-slate-200 mt-4 py-5">
                                                <div class="flex justify-between items-start mb-3">
                                                    <div>
                                                        <p class="text-sm text-gray-500">Date: <span
                                                                class="font-semibold text-black">{{Carbon\Carbon::parse($convention1->date)->format('d
                                                                F Y')}}</span></p>
                                                        <p class="text-sm text-gray-500">Time: <span
                                                                class="font-semibold text-black">{{$convention1->time}}</span>
                                                        </p>
                                                    </div>
                                                    <p>Room : <span
                                                            class="font-semibold text-black">{{$convention1->room}}</span>
                                                    </p>
                                                </div>
                                                <p class="text-gray-500">Session: <span
                                                        class="font-semibold text-black">{{$convention1->title_ses}}</span>
                                                </p>
                                                <p class="text-gray-500">Moderator: <span
                                                        class="font-semibold text-black">{{$convention1->moderator}}</span>
                                                </p>

                                                <div class="overflow-x-auto mt-4">
                                                    <table class="table">
                                                        <!-- head -->
                                                        <thead>
                                                            <tr>
                                                                <th>Time</th>
                                                                <th>Topic</th>
                                                                <th>Speaker</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($convention1->schedules as $schedule)
                                                            <tr>
                                                                <th>{{$schedule->time_speaker}}</th>
                                                                <td>{{$schedule->topic_title}}</td>
                                                                <td>{{$schedule->speaker}}</td>
                                                            </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="modal-action">
                                                <a href="#" class="btn btn-error">Close</a>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </td>
                                <td style="vertical-align: top">
                                    @foreach ($duaPuluhSatu as $convention3)
                                    @if ($convention3->room == 'Pasteur Convention Center 3')

                                    <a href="#modal_{{$convention3->id}}">
                                        <div
                                            class="card bg-[{{$convention3->color}}] mb-1 shadow-none transition-shadow duration-300 cursor-pointer hover:shadow-lg hover:shadow-sky-200">
                                            <div class="card-body text-center">
                                                <p class="font-semibold">{{$convention3->time}}</p>
                                                <h2 class="text-lg font-light text-gray-500">{{$convention3->title_ses}}
                                                </h2>
                                            </div>
                                        </div>
                                    </a>
                                    @endif

                                    <div class="modal" role="dialog" id="modal_{{$convention3->id}}">
                                        <div class="modal-box w-11/12 max-w-5xl">
                                            <h2 class="text-lg font-semibold">{{$convention3->title_ses}}</h2>
                                            <div class="border-y border-y-slate-200 mt-4 py-5">
                                                <div class="flex justify-between items-start mb-3">
                                                    <div>
                                                        <p class="text-sm text-gray-500">Date: <span
                                                                class="font-semibold text-black">{{Carbon\Carbon::parse($convention3->date)->format('d
                                                                F Y')}}</span></p>
                                                        <p class="text-sm text-gray-500">Time: <span
                                                                class="font-semibold text-black">{{$convention3->time}}</span>
                                                        </p>
                                                    </div>
                                                    <p>Room : <span
                                                            class="font-semibold text-black">{{$convention3->room}}</span>
                                                    </p>
                                                </div>
                                                <p class="text-gray-500">Session: <span
                                                        class="font-semibold text-black">{{$convention3->title_ses}}</span>
                                                </p>
                                                <p class="text-gray-500">Moderator: <span
                                                        class="font-semibold text-black">{{$convention3->moderator}}</span>
                                                </p>

                                                <div class="overflow-x-auto mt-4">
                                                    <table class="table">
                                                        <!-- head -->
                                                        <thead>
                                                            <tr>
                                                                <th>Time</th>
                                                                <th>Topic</th>
                                                                <th>Speaker</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($convention3->schedules as $schedule)
                                                            <tr>
                                                                <th>{{$schedule->time_speaker}}</th>
                                                                <td>{{$schedule->topic_title}}</td>
                                                                <td>{{$schedule->speaker}}</td>
                                                            </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="modal-action">
                                                <a href="#" class="btn btn-error">Close</a>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </td>
                                <td style="vertical-align: top">
                                    @foreach ($duaPuluhSatu as $empire5)
                                    @if ($empire5->room == 'Empire 5')

                                    <a href="#modal_{{$empire5->id}}">
                                        <div
                                            class="card bg-[{{$empire5->color}}] mb-1 shadow-none transition-shadow duration-300 cursor-pointer hover:shadow-lg hover:shadow-sky-200">
                                            <div class="card-body text-center">
                                                <p class="font-semibold">{{$empire5->time}}</p>
                                                <h2 class="text-lg font-light text-gray-500">{{$empire5->title_ses}}
                                                </h2>
                                            </div>
                                        </div>
                                    </a>
                                    @endif

                                    <div class="modal" role="dialog" id="modal_{{$empire5->id}}">
                                        <div class="modal-box w-11/12 max-w-5xl">
                                            <h2 class="text-lg font-semibold">{{$empire5->title_ses}}</h2>
                                            <div class="border-y border-y-slate-200 mt-4 py-5">
                                                <div class="flex justify-between items-start mb-3">
                                                    <div>
                                                        <p class="text-sm text-gray-500">Date: <span
                                                                class="font-semibold text-black">{{Carbon\Carbon::parse($empire5->date)->format('d
                                                                F Y')}}</span></p>
                                                        <p class="text-sm text-gray-500">Time: <span
                                                                class="font-semibold text-black">{{$empire5->time}}</span>
                                                        </p>
                                                    </div>
                                                    <p>Room : <span
                                                            class="font-semibold text-black">{{$empire5->room}}</span>
                                                    </p>
                                                </div>
                                                <p class="text-gray-500">Session: <span
                                                        class="font-semibold text-black">{{$empire5->title_ses}}</span>
                                                </p>
                                                <p class="text-gray-500">Moderator: <span
                                                        class="font-semibold text-black">{{$empire5->moderator}}</span>
                                                </p>

                                                <div class="overflow-x-auto mt-4">
                                                    <table class="table">
                                                        <!-- head -->
                                                        <thead>
                                                            <tr>
                                                                <th>Time</th>
                                                                <th>Topic</th>
                                                                <th>Speaker</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($empire5->schedules as $schedule)
                                                            <tr>
                                                                <th>{{$schedule->time_speaker}}</th>
                                                                <td>{{$schedule->topic_title}}</td>
                                                                <td>{{$schedule->speaker}}</td>
                                                            </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="modal-action">
                                                <a href="#" class="btn btn-error">Close</a>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>

            <input type="radio" name="my_tabs_2" class="tab uppercase tracking-wider text-green-600 hover:text-[#0A3542]"
                aria-label="Saturday, 18 April 2026" />
            <div class="tab-content ">
                <div class="overflow-x-auto  rounded-box border border-base-content/5 bg-base-100 border-gray-300">
                    <table class="table table-sm">
                        <!-- head -->
                        <thead>
                            <tr>
                                <th colspan="3" class="text-center bg-base-200">CONFERENCE DAY 2</th>
                            </tr>
                            {{-- <tr class="text-green-600 bg-base-200 text-xs">
                                <th style="width: 33%;" class="text-center">Pasteur Convention Center 1 & 2</th>
                                <th style="width: 33%;" class="text-center">Pasteur Convention Center 3</th>
                                <th style="width: 33%;" class="text-center">Empire 5</th>
                            </tr> --}}
                        </thead>
                        <tbody class="text-sm">
                            <tr>
                                <td colspan="3" style="vertical-align: top">
                                    @foreach ($duaPuluhDua as $convention1)
                                    @if ($convention1->room == 'Pasteur Convention Center 1 & 2')

                                    <a href="#modal_{{$convention1->id}}">
                                        <div
                                            class="card bg-[{{$convention1->color}}] mb-1 shadow-none transition-shadow duration-300 cursor-pointer hover:shadow-lg hover:shadow-sky-200">
                                            <div class="card-body text-center">
                                                <p class="font-semibold">{{$convention1->time}}</p>
                                                <h2 class="text-lg font-light text-gray-500">{{$convention1->title_ses}}
                                                </h2>
                                            </div>
                                        </div>
                                    </a>
                                    @endif

                                    <div class="modal" role="dialog" id="modal_{{$convention1->id}}">
                                        <div class="modal-box w-11/12 max-w-5xl">
                                            <h2 class="text-lg font-semibold">{{$convention1->title_ses}}</h2>
                                            <div class="border-y border-y-slate-200 mt-4 py-5">
                                                <div class="flex justify-between items-start mb-3">
                                                    <div>
                                                        <p class="text-sm text-gray-500">Date: <span
                                                                class="font-semibold text-black">{{Carbon\Carbon::parse($convention1->date)->format('d
                                                                F Y')}}</span></p>
                                                        <p class="text-sm text-gray-500">Time: <span
                                                                class="font-semibold text-black">{{$convention1->time}}</span>
                                                        </p>
                                                    </div>
                                                    <p>Room : <span
                                                            class="font-semibold text-black">{{$convention1->room}}</span>
                                                    </p>
                                                </div>
                                                <p class="text-gray-500">Session: <span
                                                        class="font-semibold text-black">{{$convention1->title_ses}}</span>
                                                </p>
                                                <p class="text-gray-500">Moderator: <span
                                                        class="font-semibold text-black">{{$convention1->moderator}}</span>
                                                </p>

                                                <div class="overflow-x-auto mt-4">
                                                    <table class="table">
                                                        <!-- head -->
                                                        <thead>
                                                            <tr>
                                                                <th>Time</th>
                                                                <th>Topic</th>
                                                                <th>Speaker</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($convention1->schedules as $schedule)
                                                            <tr>
                                                                <th>{{$schedule->time_speaker}}</th>
                                                                <td>{{$schedule->topic_title}}</td>
                                                                <td>{{$schedule->speaker}}</td>
                                                            </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="modal-action">
                                                <a href="#" class="btn btn-error">Close</a>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </td>
                                {{-- <td style="vertical-align: top">
                                    @foreach ($duaPuluhDua as $convention3)
                                    @if ($convention3->room == 'Pasteur Convention Center 3')

                                    <a href="#modal_{{$convention3->id}}">
                                <div
                                    class="card bg-[{{$convention3->color}}] mb-1 shadow-none transition-shadow duration-300 cursor-pointer hover:shadow-lg hover:shadow-sky-200">
                                    <div class="card-body text-center">
                                        <p class="font-semibold">{{$convention3->time}}</p>
                                        <h2 class="text-lg font-light text-gray-500">{{$convention3->title_ses}}
                                        </h2>
                                    </div>
                                </div>
                                </a>
                                @endif

                                <div class="modal" role="dialog" id="modal_{{$convention3->id}}">
                                    <div class="modal-box w-11/12 max-w-5xl">
                                        <h2 class="text-lg font-semibold">{{$convention3->title_ses}}</h2>
                                        <div class="border-y border-y-slate-200 mt-4 py-5">
                                            <div class="flex justify-between items-start mb-3">
                                                <div>
                                                    <p class="text-sm text-gray-500">Date: <span
                                                            class="font-semibold text-black">{{Carbon\Carbon::parse($convention3->date)->format('d
                                                                F Y')}}</span></p>
                                                    <p class="text-sm text-gray-500">Time: <span
                                                            class="font-semibold text-black">{{$convention3->time}}</span>
                                                    </p>
                                                </div>
                                                <p>Room : <span
                                                        class="font-semibold text-black">{{$convention3->room}}</span>
                                                </p>
                                            </div>
                                            <p class="text-gray-500">Session: <span
                                                    class="font-semibold text-black">{{$convention3->title_ses}}</span>
                                            </p>
                                            <p class="text-gray-500">Moderator: <span
                                                    class="font-semibold text-black">{{$convention3->moderator}}</span>
                                            </p>

                                            <div class="overflow-x-auto mt-4">
                                                <table class="table">
                                                    <!-- head -->
                                                    <thead>
                                                        <tr>
                                                            <th>Time</th>
                                                            <th>Topic</th>
                                                            <th>Speaker</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($convention3->schedules as $schedule)
                                                        <tr>
                                                            <th>{{$schedule->time_speaker}}</th>
                                                            <td>{{$schedule->topic_title}}</td>
                                                            <td>{{$schedule->speaker}}</td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="modal-action">
                                            <a href="#" class="btn btn-error">Close</a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                </td>
                                <td style="vertical-align: top">
                                    @foreach ($duaPuluhDua as $empire5)
                                    @if ($empire5->room == 'Empire 5')

                                    <a href="#modal_{{$empire5->id}}">
                                        <div
                                            class="card bg-[{{$empire5->color}}] mb-1 shadow-none transition-shadow duration-300 cursor-pointer hover:shadow-lg hover:shadow-sky-200">
                                            <div class="card-body text-center">
                                                <p class="font-semibold">{{$empire5->time}}</p>
                                                <h2 class="text-lg font-light text-gray-500">{{$empire5->title_ses}}
                                                </h2>
                                            </div>
                                        </div>
                                    </a>
                                    @endif

                                    <div class="modal" role="dialog" id="modal_{{$empire5->id}}">
                                        <div class="modal-box w-11/12 max-w-5xl">
                                            <h2 class="text-lg font-semibold">{{$empire5->title_ses}}</h2>
                                            <div class="border-y border-y-slate-200 mt-4 py-5">
                                                <div class="flex justify-between items-start mb-3">
                                                    <div>
                                                        <p class="text-sm text-gray-500">Date: <span
                                                                class="font-semibold text-black">{{Carbon\Carbon::parse($empire5->date)->format('d
                                                                F Y')}}</span></p>
                                                        <p class="text-sm text-gray-500">Time: <span
                                                                class="font-semibold text-black">{{$empire5->time}}</span>
                                                        </p>
                                                    </div>
                                                    <p>Room : <span
                                                            class="font-semibold text-black">{{$empire5->room}}</span>
                                                    </p>
                                                </div>
                                                <p class="text-gray-500">Session: <span
                                                        class="font-semibold text-black">{{$empire5->title_ses}}</span>
                                                </p>
                                                <p class="text-gray-500">Moderator: <span
                                                        class="font-semibold text-black">{{$empire5->moderator}}</span>
                                                </p>

                                                <div class="overflow-x-auto mt-4">
                                                    <table class="table">
                                                        <!-- head -->
                                                        <thead>
                                                            <tr>
                                                                <th>Time</th>
                                                                <th>Topic</th>
                                                                <th>Speaker</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($empire5->schedules as $schedule)
                                                            <tr>
                                                                <th>{{$schedule->time_speaker}}</th>
                                                                <td>{{$schedule->topic_title}}</td>
                                                                <td>{{$schedule->speaker}}</td>
                                                            </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="modal-action">
                                                <a href="#" class="btn btn-error">Close</a>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </td> --}}
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </section>

    <section class="pt-10 pb-24 px-2 lg:px-5">
        <h1 class="text-xl">Conflict of Interest / Disclosure Statement Form</h1>
        <p>Please download for Disclosure Statement</p>
        <div class="w-full flex text-center">
            <a href="/download/COI_Form.pdf" target="_blank" class="btn text-white rounded-xl bg-green-700 hover:bg-green-900 w-full"><i class="fa-solid fa-download me-1"></i> Download Conflict of Interest / Disclosure Statement Form</a>
        </div>
    </section>
</div>