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
                                <th colspan="4" class="text-center bg-base-200">CONFERENCE DAY 1</th>
                            </tr>
                            <tr class="text-green-600 bg-base-200 text-xs">
                                <th style="width: 25%;" class="text-center">Plenary Hall</th>
                                <th style="width: 25%;" class="text-center">Room 1</th>
                                <th style="width: 25%;" class="text-center">Room 2</th>
                                <th style="width: 25%;" class="text-center">Room 3</th>
                            </tr>
                        </thead>
                        <tbody class="text-sm">
                            <tr>
                                <td style="vertical-align: top">
                                    @foreach ($enambelas as $plenary)
                                    @if ($plenary->room == 'Plenary Hall')

                                    <a href="#modal_{{$plenary->id}}">
                                        <div
                                            class="card bg-[{{$plenary->color}}] mb-1 shadow-none transition-shadow duration-300 cursor-pointer hover:shadow-lg hover:shadow-green-200">
                                            <div class="card-body text-center">
                                                <p class="font-semibold">{{$plenary->time}}</p>
                                                <h2 class="text-lg font-light text-gray-500">{{$plenary->title_ses}}
                                                </h2>
                                            </div>
                                        </div>
                                    </a>
                                    @endif

                                    <div class="modal" role="dialog" id="modal_{{$plenary->id}}">
                                        <div class="modal-box w-11/12 max-w-5xl">
                                            <h2 class="text-lg font-semibold">{{$plenary->title_ses}}</h2>
                                            <div class="border-y border-y-slate-200 mt-4 py-5">
                                                <div class="flex justify-between items-start mb-3">
                                                    <div>
                                                        <p class="text-sm text-gray-500">Date: <span
                                                                class="font-semibold text-black">{{Carbon\Carbon::parse($plenary->date)->format('d
                                                                F Y')}}</span></p>
                                                        <p class="text-sm text-gray-500">Time: <span
                                                                class="font-semibold text-black">{{$plenary->time}}</span>
                                                        </p>
                                                    </div>
                                                    <p>Room : <span
                                                            class="font-semibold text-black">{{$plenary->room}}</span>
                                                    </p>
                                                </div>
                                                <p class="text-gray-500">Session: <span
                                                        class="font-semibold text-black">{{$plenary->title_ses}}</span>
                                                </p>
                                                <p class="text-gray-500">Moderator: <span
                                                        class="font-semibold text-black">{{$plenary->moderator}}</span>
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
                                                            @foreach ($plenary->schedules as $schedule)
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
                                    @foreach ($enambelas as $room1)
                                    @if ($room1->room == 'Room 1')

                                    <a href="#modal_{{$room1->id}}">
                                        <div
                                            class="card bg-[{{$room1->color}}] mb-1 shadow-none transition-shadow duration-300 cursor-pointer hover:shadow-lg hover:shadow-green-200">
                                            <div class="card-body text-center">
                                                <p class="font-semibold">{{$room1->time}}</p>
                                                <h2 class="text-lg font-light text-gray-500 ">{{$room1->title_ses}}
                                                </h2>
                                            </div>
                                        </div>
                                    </a>
                                    @endif

                                    <div class="modal" role="dialog" id="modal_{{$room1->id}}">
                                        <div class="modal-box w-11/12 max-w-5xl">
                                            <h2 class="text-lg font-semibold">{{$room1->title_ses}}</h2>
                                            <div class="border-y border-y-slate-200 mt-4 py-5">
                                                <div class="flex justify-between items-start mb-3">
                                                    <div>
                                                        <p class="text-sm text-gray-500">Date: <span
                                                                class="font-semibold text-black">{{Carbon\Carbon::parse($room1->date)->format('d
                                                                F Y')}}</span></p>
                                                        <p class="text-sm text-gray-500">Time: <span
                                                                class="font-semibold text-black">{{$room1->time}}</span>
                                                        </p>
                                                    </div>
                                                    <p>Room : <span
                                                            class="font-semibold text-black">{{$room1->room}}</span>
                                                    </p>
                                                </div>
                                                <p class="text-gray-500">Session: <span
                                                        class="font-semibold text-black">{{$room1->title_ses}}</span>
                                                </p>
                                                <p class="text-gray-500">Moderator: <span
                                                        class="font-semibold text-black">{{$room1->moderator}}</span>
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
                                                            @foreach ($room1->schedules as $schedule)
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
                                    @foreach ($enambelas as $room2)
                                    @if ($room2->room == 'Room 2')

                                    <a href="#modal_{{$room2->id}}">
                                        <div
                                            class="card bg-[{{$room2->color}}] mb-1 shadow-none transition-shadow duration-300 cursor-pointer hover:shadow-lg hover:shadow-green-200">
                                            <div class="card-body text-center">
                                                <p class="font-semibold">{{$room2->time}}</p>
                                                <h2 class="text-lg font-light text-gray-500">{{$room2->title_ses}}
                                                </h2>
                                            </div>
                                        </div>
                                    </a>
                                    @endif

                                    <div class="modal" role="dialog" id="modal_{{$room2->id}}">
                                        <div class="modal-box w-11/12 max-w-5xl">
                                            <h2 class="text-lg font-semibold">{{$room2->title_ses}}</h2>
                                            <div class="border-y border-y-slate-200 mt-4 py-5">
                                                <div class="flex justify-between items-start mb-3">
                                                    <div>
                                                        <p class="text-sm text-gray-500">Date: <span
                                                                class="font-semibold text-black">{{Carbon\Carbon::parse($room2->date)->format('d
                                                                F Y')}}</span></p>
                                                        <p class="text-sm text-gray-500">Time: <span
                                                                class="font-semibold text-black">{{$room2->time}}</span>
                                                        </p>
                                                    </div>
                                                    <p>Room : <span
                                                            class="font-semibold text-black">{{$room2->room}}</span>
                                                    </p>
                                                </div>
                                                <p class="text-gray-500">Session: <span
                                                        class="font-semibold text-black">{{$room2->title_ses}}</span>
                                                </p>
                                                <p class="text-gray-500">Moderator: <span
                                                        class="font-semibold text-black">{{$room2->moderator}}</span>
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
                                                            @foreach ($room2->schedules as $schedule)
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
                                    @foreach ($enambelas as $room3)
                                    @if ($room3->room == 'Room 3')

                                    <a href="#modal_{{$room3->id}}">
                                        <div
                                            class="card bg-[{{$room3->color}}] mb-1 shadow-none transition-shadow duration-300 cursor-pointer hover:shadow-lg hover:shadow-green-200">
                                            <div class="card-body text-center">
                                                <p class="font-semibold">{{$room3->time}}</p>
                                                <h2 class="text-lg font-light text-gray-500">{{$room3->title_ses}}
                                                </h2>
                                            </div>
                                        </div>
                                    </a>
                                    @endif

                                    <div class="modal" role="dialog" id="modal_{{$room3->id}}">
                                        <div class="modal-box w-11/12 max-w-5xl">
                                            <h2 class="text-lg font-semibold">{{$room3->title_ses}}</h2>
                                            <div class="border-y border-y-slate-200 mt-4 py-5">
                                                <div class="flex justify-between items-start mb-3">
                                                    <div>
                                                        <p class="text-sm text-gray-500">Date: <span
                                                                class="font-semibold text-black">{{Carbon\Carbon::parse($room3->date)->format('d
                                                                F Y')}}</span></p>
                                                        <p class="text-sm text-gray-500">Time: <span
                                                                class="font-semibold text-black">{{$room3->time}}</span>
                                                        </p>
                                                    </div>
                                                    <p>Room : <span
                                                            class="font-semibold text-black">{{$room3->room}}</span>
                                                    </p>
                                                </div>
                                                <p class="text-gray-500">Session: <span
                                                        class="font-semibold text-black">{{$room3->title_ses}}</span>
                                                </p>
                                                <p class="text-gray-500">Moderator: <span
                                                        class="font-semibold text-black">{{$room3->moderator}}</span>
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
                                                            @foreach ($room3->schedules as $schedule)
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

            <input type="radio" name="my_tabs_2"
                class="tab uppercase tracking-wider text-green-600 hover:text-[#0A3542]"
                aria-label="Friday, 17 April 2026" />
            <div class="tab-content">
                <div class="overflow-x-auto  rounded-box border border-base-content/5 bg-base-100 border-gray-300">
                    <table class="table table-sm">
                        <!-- head -->
                        <thead>
                            <tr>
                                <th colspan="4" class="text-center bg-base-200">CONFERENCE DAY 2</th>
                            </tr>
                            <tr class="text-green-600 bg-base-200 text-xs">
                                <th style="width: 25%;" class="text-center">Plenary Hall</th>
                                <th style="width: 25%;" class="text-center">Room 1</th>
                                <th style="width: 25%;" class="text-center">Room 2</th>
                                <th style="width: 25%;" class="text-center">Room 3</th>
                            </tr>
                        </thead>
                        <tbody class="text-sm">
                            <tr>
                                <td style="vertical-align: top">
                                    @foreach ($tujuhbelas as $plenary2)
                                    @if ($plenary2->room == 'Plenary Hall')

                                    <a href="#modal_{{$plenary2->id}}">
                                        <div
                                            class="card bg-[{{$plenary2->color}}] mb-1 shadow-none transition-shadow duration-300 cursor-pointer hover:shadow-lg hover:shadow-green-200">
                                            <div class="card-body text-center">
                                                <p class="font-semibold">{{$plenary2->time}}</p>
                                                <h2 class="text-lg font-light text-gray-500">{{$plenary2->title_ses}}
                                                </h2>
                                            </div>
                                        </div>
                                    </a>
                                    @endif

                                    <div class="modal" role="dialog" id="modal_{{$plenary2->id}}">
                                        <div class="modal-box w-11/12 max-w-5xl">
                                            <h2 class="text-lg font-semibold">{{$plenary2->title_ses}}</h2>
                                            <div class="border-y border-y-slate-200 mt-4 py-5">
                                                <div class="flex justify-between items-start mb-3">
                                                    <div>
                                                        <p class="text-sm text-gray-500">Date: <span
                                                                class="font-semibold text-black">{{Carbon\Carbon::parse($plenary2->date)->format('d
                                                                F Y')}}</span></p>
                                                        <p class="text-sm text-gray-500">Time: <span
                                                                class="font-semibold text-black">{{$plenary2->time}}</span>
                                                        </p>
                                                    </div>
                                                    <p>Room : <span
                                                            class="font-semibold text-black">{{$plenary2->room}}</span>
                                                    </p>
                                                </div>
                                                <p class="text-gray-500">Session: <span
                                                        class="font-semibold text-black">{{$plenary2->title_ses}}</span>
                                                </p>
                                                <p class="text-gray-500">Moderator: <span
                                                        class="font-semibold text-black">{{$plenary2->moderator}}</span>
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
                                                            @foreach ($plenary2->schedules as $schedule)
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
                                    @foreach ($tujuhbelas as $roomone2)
                                    @if ($roomone2->room == 'Room 1')

                                    <a href="#modal_{{$roomone2->id}}">
                                        <div
                                            class="card bg-[{{$roomone2->color}}] mb-1 shadow-none transition-shadow duration-300 cursor-pointer hover:shadow-lg hover:shadow-green-200">
                                            <div class="card-body text-center">
                                                <p class="font-semibold">{{$roomone2->time}}</p>
                                                <h2 class="text-lg font-light text-gray-500">{{$roomone2->title_ses}}
                                                </h2>
                                            </div>
                                        </div>
                                    </a>
                                    @endif

                                    <div class="modal" role="dialog" id="modal_{{$roomone2->id}}">
                                        <div class="modal-box w-11/12 max-w-5xl">
                                            <h2 class="text-lg font-semibold">{{$roomone2->title_ses}}</h2>
                                            <div class="border-y border-y-slate-200 mt-4 py-5">
                                                <div class="flex justify-between items-start mb-3">
                                                    <div>
                                                        <p class="text-sm text-gray-500">Date: <span
                                                                class="font-semibold text-black">{{Carbon\Carbon::parse($roomone2->date)->format('d
                                                                F Y')}}</span></p>
                                                        <p class="text-sm text-gray-500">Time: <span
                                                                class="font-semibold text-black">{{$roomone2->time}}</span>
                                                        </p>
                                                    </div>
                                                    <p>Room : <span
                                                            class="font-semibold text-black">{{$roomone2->room}}</span>
                                                    </p>
                                                </div>
                                                <p class="text-gray-500">Session: <span
                                                        class="font-semibold text-black">{{$roomone2->title_ses}}</span>
                                                </p>
                                                <p class="text-gray-500">Moderator: <span
                                                        class="font-semibold text-black">{{$roomone2->moderator}}</span>
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
                                                            @foreach ($roomone2->schedules as $schedule)
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
                                    @foreach ($tujuhbelas as $roomtwo2)
                                    @if ($roomtwo2->room == 'Room 2')

                                    <a href="#modal_{{$roomtwo2->id}}">
                                        <div
                                            class="card bg-[{{$roomtwo2->color}}] mb-1 shadow-none transition-shadow duration-300 cursor-pointer hover:shadow-lg hover:shadow-green-200">
                                            <div class="card-body text-center">
                                                <p class="font-semibold">{{$roomtwo2->time}}</p>
                                                <h2 class="text-lg font-light text-gray-500">{{$roomtwo2->title_ses}}
                                                </h2>
                                            </div>
                                        </div>
                                    </a>
                                    @endif

                                    <div class="modal" role="dialog" id="modal_{{$roomtwo2->id}}">
                                        <div class="modal-box w-11/12 max-w-5xl">
                                            <h2 class="text-lg font-semibold">{{$roomtwo2->title_ses}}</h2>
                                            <div class="border-y border-y-slate-200 mt-4 py-5">
                                                <div class="flex justify-between items-start mb-3">
                                                    <div>
                                                        <p class="text-sm text-gray-500">Date: <span
                                                                class="font-semibold text-black">{{Carbon\Carbon::parse($roomtwo2->date)->format('d
                                                                F Y')}}</span></p>
                                                        <p class="text-sm text-gray-500">Time: <span
                                                                class="font-semibold text-black">{{$roomtwo2->time}}</span>
                                                        </p>
                                                    </div>
                                                    <p>Room : <span
                                                            class="font-semibold text-black">{{$roomtwo2->room}}</span>
                                                    </p>
                                                </div>
                                                <p class="text-gray-500">Session: <span
                                                        class="font-semibold text-black">{{$roomtwo2->title_ses}}</span>
                                                </p>
                                                <p class="text-gray-500">Moderator: <span
                                                        class="font-semibold text-black">{{$roomtwo2->moderator}}</span>
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
                                                            @foreach ($roomtwo2->schedules as $schedule)
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
                                    @foreach ($tujuhbelas as $roomthree2)
                                    @if ($roomthree2->room == 'Room 3')

                                    <a href="#modal_{{$roomthree2->id}}">
                                        <div
                                            class="card bg-[{{$roomthree2->color}}] mb-1 shadow-none transition-shadow duration-300 cursor-pointer hover:shadow-lg hover:shadow-green-200">
                                            <div class="card-body text-center">
                                                <p class="font-semibold">{{$roomthree2->time}}</p>
                                                <h2 class="text-lg font-light text-gray-500">{{$roomthree2->title_ses}}
                                                </h2>
                                            </div>
                                        </div>
                                    </a>
                                    @endif

                                    <div class="modal" role="dialog" id="modal_{{$roomthree2->id}}">
                                        <div class="modal-box w-11/12 max-w-5xl">
                                            <h2 class="text-lg font-semibold">{{$roomthree2->title_ses}}</h2>
                                            <div class="border-y border-y-slate-200 mt-4 py-5">
                                                <div class="flex justify-between items-start mb-3">
                                                    <div>
                                                        <p class="text-sm text-gray-500">Date: <span
                                                                class="font-semibold text-black">{{Carbon\Carbon::parse($roomthree2->date)->format('d
                                                                F Y')}}</span></p>
                                                        <p class="text-sm text-gray-500">Time: <span
                                                                class="font-semibold text-black">{{$roomthree2->time}}</span>
                                                        </p>
                                                    </div>
                                                    <p>Room : <span
                                                            class="font-semibold text-black">{{$roomthree2->room}}</span>
                                                    </p>
                                                </div>
                                                <p class="text-gray-500">Session: <span
                                                        class="font-semibold text-black">{{$roomthree2->title_ses}}</span>
                                                </p>
                                                <p class="text-gray-500">Moderator: <span
                                                        class="font-semibold text-black">{{$roomthree2->moderator}}</span>
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
                                                            @foreach ($roomthree2->schedules as $schedule)
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

            <input type="radio" name="my_tabs_2"
                class="tab uppercase tracking-wider text-green-600 hover:text-[#0A3542]"
                aria-label="Saturday, 18 April 2026" />
            <div class="tab-content ">
                <div class="overflow-x-auto  rounded-box border border-base-content/5 bg-base-100 border-gray-300">
                    <table class="table table-sm">
                        <!-- head -->
                        <thead>
                            <tr>
                                <th colspan="4" class="text-center bg-base-200">CONFERENCE DAY 3</th>
                            </tr>
                            <tr class="text-green-600 bg-base-200 text-xs">
                                <th style="width: 25%;" class="text-center">Plenary Hall</th>
                                <th style="width: 25%;" class="text-center">Room 1</th>
                                <th style="width: 25%;" class="text-center">Room 2</th>
                                <th style="width: 25%;" class="text-center">Room 3</th>
                            </tr>
                        </thead>
                        <tbody class="text-sm">
                            <tr>
                                <td style="vertical-align: top">
                                    @foreach ($delapanbelas as $plenary3)
                                    @if ($plenary3->room == 'Plenary Hall')

                                    <a href="#modal_{{$plenary3->id}}">
                                        <div
                                            class="card bg-[{{$plenary3->color}}] mb-1 shadow-none transition-shadow duration-300 cursor-pointer hover:shadow-lg hover:shadow-green-200">
                                            <div class="card-body text-center">
                                                <p class="font-semibold">{{$plenary3->time}}</p>
                                                <h2 class="text-lg font-light text-gray-500">{{$plenary3->title_ses}}
                                                </h2>
                                            </div>
                                        </div>
                                    </a>
                                    @endif

                                    <div class="modal" role="dialog" id="modal_{{$plenary3->id}}">
                                        <div class="modal-box w-11/12 max-w-5xl">
                                            <h2 class="text-lg font-semibold">{{$plenary3->title_ses}}</h2>
                                            <div class="border-y border-y-slate-200 mt-4 py-5">
                                                <div class="flex justify-between items-start mb-3">
                                                    <div>
                                                        <p class="text-sm text-gray-500">Date: <span
                                                                class="font-semibold text-black">{{Carbon\Carbon::parse($plenary3->date)->format('d
                                                                F Y')}}</span></p>
                                                        <p class="text-sm text-gray-500">Time: <span
                                                                class="font-semibold text-black">{{$plenary3->time}}</span>
                                                        </p>
                                                    </div>
                                                    <p>Room : <span
                                                            class="font-semibold text-black">{{$plenary3->room}}</span>
                                                    </p>
                                                </div>
                                                <p class="text-gray-500">Session: <span
                                                        class="font-semibold text-black">{{$plenary3->title_ses}}</span>
                                                </p>
                                                <p class="text-gray-500">Moderator: <span
                                                        class="font-semibold text-black">{{$plenary3->moderator}}</span>
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
                                                            @foreach ($plenary3->schedules as $schedule)
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
                                    @foreach ($delapanbelas as $roomone3)
                                    @if ($roomone3->room == 'Room 1')

                                    <a href="#modal_{{$roomone3->id}}">
                                        <div
                                            class="card bg-[{{$roomone3->color}}] mb-1 shadow-none transition-shadow duration-300 cursor-pointer hover:shadow-lg hover:shadow-green-200">
                                            <div class="card-body text-center">
                                                <p class="font-semibold">{{$roomone3->time}}</p>
                                                <h2 class="text-lg font-light text-gray-500">{{$roomone3->title_ses}}
                                                </h2>
                                            </div>
                                        </div>
                                    </a>
                                    @endif

                                    <div class="modal" role="dialog" id="modal_{{$roomone3->id}}">
                                        <div class="modal-box w-11/12 max-w-5xl">
                                            <h2 class="text-lg font-semibold">{{$roomone3->title_ses}}</h2>
                                            <div class="border-y border-y-slate-200 mt-4 py-5">
                                                <div class="flex justify-between items-start mb-3">
                                                    <div>
                                                        <p class="text-sm text-gray-500">Date: <span
                                                                class="font-semibold text-black">{{Carbon\Carbon::parse($roomone3->date)->format('d
                                                                F Y')}}</span></p>
                                                        <p class="text-sm text-gray-500">Time: <span
                                                                class="font-semibold text-black">{{$roomone3->time}}</span>
                                                        </p>
                                                    </div>
                                                    <p>Room : <span
                                                            class="font-semibold text-black">{{$roomone3->room}}</span>
                                                    </p>
                                                </div>
                                                <p class="text-gray-500">Session: <span
                                                        class="font-semibold text-black">{{$roomone3->title_ses}}</span>
                                                </p>
                                                <p class="text-gray-500">Moderator: <span
                                                        class="font-semibold text-black">{{$roomone3->moderator}}</span>
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
                                                            @foreach ($roomone3->schedules as $schedule)
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
                                    @foreach ($delapanbelas as $roomtwo3)
                                    @if ($roomtwo3->room == 'Room 2')

                                    <a href="#modal_{{$roomtwo3->id}}">
                                        <div
                                            class="card bg-[{{$roomtwo3->color}}] mb-1 shadow-none transition-shadow duration-300 cursor-pointer hover:shadow-lg hover:shadow-green-200">
                                            <div class="card-body text-center">
                                                <p class="font-semibold">{{$roomtwo3->time}}</p>
                                                <h2 class="text-lg font-light text-gray-500">{{$roomtwo3->title_ses}}
                                                </h2>
                                            </div>
                                        </div>
                                    </a>
                                    @endif

                                    <div class="modal" role="dialog" id="modal_{{$roomtwo3->id}}">
                                        <div class="modal-box w-11/12 max-w-5xl">
                                            <h2 class="text-lg font-semibold">{{$roomtwo3->title_ses}}</h2>
                                            <div class="border-y border-y-slate-200 mt-4 py-5">
                                                <div class="flex justify-between items-start mb-3">
                                                    <div>
                                                        <p class="text-sm text-gray-500">Date: <span
                                                                class="font-semibold text-black">{{Carbon\Carbon::parse($roomtwo3->date)->format('d
                                                                F Y')}}</span></p>
                                                        <p class="text-sm text-gray-500">Time: <span
                                                                class="font-semibold text-black">{{$roomtwo3->time}}</span>
                                                        </p>
                                                    </div>
                                                    <p>Room : <span
                                                            class="font-semibold text-black">{{$roomtwo3->room}}</span>
                                                    </p>
                                                </div>
                                                <p class="text-gray-500">Session: <span
                                                        class="font-semibold text-black">{{$roomtwo3->title_ses}}</span>
                                                </p>
                                                <p class="text-gray-500">Moderator: <span
                                                        class="font-semibold text-black">{{$roomtwo3->moderator}}</span>
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
                                                            @foreach ($roomtwo3->schedules as $schedule)
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
                                    @foreach ($delapanbelas as $roomthree3)
                                    @if ($roomthree3->room == 'Room 2')

                                    <a href="#modal_{{$roomthree3->id}}">
                                        <div
                                            class="card bg-[{{$roomthree3->color}}] mb-1 shadow-none transition-shadow duration-300 cursor-pointer hover:shadow-lg hover:shadow-green-200">
                                            <div class="card-body text-center">
                                                <p class="font-semibold">{{$roomthree3->time}}</p>
                                                <h2 class="text-lg font-light text-gray-500">{{$roomthree3->title_ses}}
                                                </h2>
                                            </div>
                                        </div>
                                    </a>
                                    @endif

                                    <div class="modal" role="dialog" id="modal_{{$roomthree3->id}}">
                                        <div class="modal-box w-11/12 max-w-5xl">
                                            <h2 class="text-lg font-semibold">{{$roomthree3->title_ses}}</h2>
                                            <div class="border-y border-y-slate-200 mt-4 py-5">
                                                <div class="flex justify-between items-start mb-3">
                                                    <div>
                                                        <p class="text-sm text-gray-500">Date: <span
                                                                class="font-semibold text-black">{{Carbon\Carbon::parse($roomthree3->date)->format('d
                                                                F Y')}}</span></p>
                                                        <p class="text-sm text-gray-500">Time: <span
                                                                class="font-semibold text-black">{{$roomthree3->time}}</span>
                                                        </p>
                                                    </div>
                                                    <p>Room : <span
                                                            class="font-semibold text-black">{{$roomthree3->room}}</span>
                                                    </p>
                                                </div>
                                                <p class="text-gray-500">Session: <span
                                                        class="font-semibold text-black">{{$roomthree3->title_ses}}</span>
                                                </p>
                                                <p class="text-gray-500">Moderator: <span
                                                        class="font-semibold text-black">{{$roomthree3->moderator}}</span>
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
                                                            @foreach ($roomthree3->schedules as $schedule)
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
        </div>
        <p class="text-xs italic my-3 text-error">*tentative schedule</p>
    </section>

    <section class="pt-10 pb-24 px-2 lg:px-5">
        <h1 class="text-xl">Conflict of Interest / Disclosure Statement Form</h1>
        <p>Please download for Disclosure Statement</p>
        <div class="w-full flex text-center">
            <a href="/download/COI_Form.pdf" target="_blank"
                class="btn text-white rounded-xl bg-green-700 hover:bg-green-900 w-full"><i
                    class="fa-solid fa-download me-1"></i> Download Conflict of Interest / Disclosure Statement Form</a>
        </div>
    </section>
</div>