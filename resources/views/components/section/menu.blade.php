<ul class="flex gap-6 uppercase">
    <li>
        <a href="/" wire:navigate
            class="{{ request()->is('/') ? 'text-green-800' : 'text-green-900' }} hover:text-green-600 hover:underline ">Home
        </a>
    </li>
    <div class="dropdown dropdown-hover">
        <div tabindex="0"
            class="{{ request()->is('organizing-committee') || request()->is('faculties') ? 'text-green-800' : 'text-green-900' }} hover:cursor-pointer hover:text-green-600">
            Congress Information <i class="fa-solid fa-angle-down"></i></div>
        <ul tabindex="0" class="dropdown-content menu bg-base-100 rounded-box gap-2 w-60 p-2 shadow-sm">
            <li>
                <a href="/organizing-committee" wire:navigate
                    class="{{ request()->is('organizing-committee') ? 'text-green-800' : '' }} justify-between hover:text-green-800 ">Organizing
                    Committee <i class="fa-solid fa-angle-right"></i></a>
            </li>
            <li>
                <a href="/faculties" wire:navigate
                    class="{{ request()->is('faculties') ? 'text-green-800' : '' }} justify-between hover:text-green-800 ">Faculties
                    <i class="fa-solid fa-angle-right"></i></a>
            </li>
        </ul>
    </div>

    <div class="dropdown dropdown-hover">
        <div tabindex="0"
            class="{{ request()->is('program-at-glance') || request()->is('scientific-schedule') ? 'text-green-800' : 'text-green-900' }} hover:cursor-pointer hover:text-green-600">
            Scientific Program <i class="fa-solid fa-angle-down"></i></div>
        <ul tabindex="0" class="dropdown-content menu bg-base-100 rounded-box gap-2 w-60 p-2 shadow-sm">
            <li>
                <a href="/program-at-glance" wire:navigate
                    class="{{ request()->is('program-at-glance') ? 'text-green-800' : '' }} justify-between hover:text-green-800">Program
                    at Glance <i class="fa-solid fa-angle-right"></i></a>
            </li>
            <li>
                <a href="/scientific-schedule" wire:navigate
                    class="{{ request()->is('scientific-schedule') ? 'text-green-800' : '' }} justify-between hover:text-green-800">Scientific
                    Schedule <i class="fa-solid fa-angle-right"></i></a>
            </li>
    </div>


    <li>
        <a href="/registration" wire:navigate
            class="{{ request()->is('registration') ? 'text-green-800' : 'text-green-900' }} hover:text-green-600 hover:underline">Registration
        </a>
    </li>
    <li>
        <a href="#" wire:navigate
            class="{{ request()->is('accommodation') ? 'text-green-800' : 'text-green-900' }} hover:text-green-600 hover:underline">Accommodation
        </a>
    </li>
    <li>
        <a href="/submission" wire:navigate
            class="{{ request()->is('submission') ? 'text-green-800' : 'text-green-900' }} hover:text-green-600 hover:underline">Submission
        </a>
    </li>
    <li>
        <a href="#" wire:navigate
            class="{{ request()->is('visiting') ? 'text-green-800' : 'text-green-900' }} hover:text-green-600 hover:underline">Venue
        </a>
    </li>
</ul>