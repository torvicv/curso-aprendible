<nav class="bg-blue-400 w-full grid grid-cols-12">
    <ul class="flex justify-center col-start-3 col-end-11">
        <li class="p-2 hover:text-blue-200 text-white border-r "><i class="fa-solid fa-graduation-cap"></i></li>
        <li
            class="p-2 {{ request()->routeIs('welcome') ? 'text-blue-200' : '' }} hover:text-blue-200 text-white border-r ">
            <a href="{{ route('welcome') }}">Home</a></li>
        <li class="p-2 {{ request()->routeIs('blog') ? 'text-blue-200' : '' }} hover:text-blue-200 text-white border-r ">
            <a href="{{ route('blog') }}">Blog</a></li>
        <li
            class="p-2 {{ request()->routeIs('contact') ? 'text-blue-200' : '' }} hover:text-blue-200 text-white border-r ">
            <a href="{{ route('contact') }}">Contact</a></li>
        <li class="p-2 {{ request()->routeIs('about') ? 'text-blue-200' : '' }} hover:text-blue-200 text-white "><a
                href="{{ route('about') }}">About</a></li>
    </ul>
    <ul class="flex bg-blue-400 justify-end col-start-11 col-end-13 items-center">
        @if (Auth::check())
            {{-- <li class="p-2 hover:text-blue-200 text-white">Hola {{Auth::user()->name}}</li> --}}
            <div class="relative inline-block text-left" x-data="{ open: false }">
                <div>
                    <button type="button" @click="open = !open"
                        class="inline-flex w-full justify-center px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-blue-100 hover:text-black"
                        id="menu-button" aria-expanded="true" aria-haspopup="true">
                        Hola {{Auth::user()->name}}
                        <!-- Heroicon name: mini/chevron-down -->
                        <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                            fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>
                <div x-show="open" class="absolute right-0 z-10 mt-2 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                    role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                    <div class="py-1" role="none">
                        <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
                        <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1"
                            id="menu-item-0">Account settings</a>
                        <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1"
                            id="menu-item-1">Support</a>
                        <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1"
                            id="menu-item-2">License</a>
                        <form method="POST" action="{{ route('logout') }}" role="none">
                            @csrf
                            <button type="submit" class="text-gray-700 block w-full px-4 py-2 text-left text-sm"
                                role="menuitem" tabindex="-1" id="menu-item-3">Sign out</button>
                        </form>
                    </div>
                </div>
            </div>
        @else
            <li
                class="p-2 {{ request()->routeIs('register') ? 'text-blue-200' : '' }} hover:text-blue-200 text-white border-r ">
                <a href="{{ route('register') }}">Register</a></li>
            <li class="p-2 {{ request()->routeIs('login') ? 'text-blue-200' : '' }} hover:text-blue-200 text-white "><a
                    href="{{ route('login') }}">Login</a></li>
        @endif
    </ul>
</nav>
