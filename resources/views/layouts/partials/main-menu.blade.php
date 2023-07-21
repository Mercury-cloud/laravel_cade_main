<header class="bg-white shadow" x-data="setup()" x-init="$refs.loading.classList.add('hidden');" :class="{ 'dark': isDark}">
    <div class="max-w-7xl mx-auto px-2 sm:px-4 lg:divide-y lg:divide-gray-200 lg:px-8">
        <div class="relative h-20 flex justify-between">
            <div class="relative z-10 px-2 flex lg:px-0">
                <div class="flex-shrink-0 flex items-center">
                    <img class="hidden lg:block h-14 w-auto" src="https://user-images.githubusercontent.com/78485125/108190919-d1e92680-7112-11eb-9a0e-9dc95bd2f557.png" alt="Cadeaucity">
                    <img class="lg:hidden block h-14 w-auto" src="https://user-images.githubusercontent.com/78485125/108190917-d1509000-7112-11eb-8317-5b50d441fe6e.png" alt="Cadeaucity">
                </div>
            </div>
            <div class="relative z-0 flex-1 px-2 flex items-center justify-center sm:absolute sm:inset-0">
                <div class="w-full sm:max-w-xs">
                    <label for="search" class="sr-only">Search</label>
                    <div class="relative">
                        <div class="pointer-events-none absolute inset-y-0 left-0 pl-3 flex items-center">
                            <!-- Heroicon name: solid/search -->
                            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <input id="search" name="search" class="block w-full bg-white border border-gray-300 rounded-md py-2 pl-10 pr-3 text-sm placeholder-gray-500 focus:outline-none focus:text-gray-900 focus:placeholder-gray-400 focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Search" type="search">
                    </div>
                </div>
            </div>
            <div class="relative z-10 flex items-center lg:hidden">
                <!-- Mobile menu button -->
                <button @click="isMobileMainMenuOpen = !isMobileMainMenuOpen" class="p-1 transition-colors duration-200 rounded-md hover:text-blue-600 hover:bg-blue-100 lg:hidden focus:outline-none focus:ring">
                    <span class="sr-only">Open main manu</span>
                    <span aria-hidden="true">
                        <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </span>
                </button>
            </div>
            <div class="hidden lg:relative lg:z-10 lg:ml-4 lg:flex lg:items-center">
                <button class="flex-shrink-0 bg-white rounded-full p-1 text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    <span class="sr-only">View notifications</span>
                    <!-- Heroicon name: outline/bell -->
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                    </svg>
                </button>

                <!-- Profile dropdown -->
                @if(auth()->user())
                    <div class="flex-shrink-0 relative ml-4 group inline-block">
                        <div>
                            <button class="bg-white rounded-full flex focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" id="user-menu" aria-haspopup="true">
                                <span class="sr-only">Open user menu</span>

                                    <img class="h-8 w-8 rounded-full" src="{{auth()->user()->profile_photo_url}}" alt="">
                            </button>
                        </div>
                        <div class="transform opacity-0 scale-95 group-hover:opacity-100 group-hover:scale-100 transition duration-150 ease-in-out origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 py-1 " role="menu" aria-orientation="vertical" aria-labelledby="user-menu">
                            <a href="{{ route('profile.show') }}" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Your Profile</a>

                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a
                                    href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    this.closest('form').submit();"
                                    class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100"
                                    role="menuitem">
                                    Sign out
                                </a>
                            </form>
                        </div>
                    </div>
                @else
                    <a href="{{ route('login') }}" class=" mx-2 inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Login
                    </a>
                @endif

            </div>
        </div>
        <nav class="hidden lg:py-2 lg:flex lg:space-x-8" aria-label="Global">
            <!-- component -->
            <div class="group inline-block">
                <button class="text-gray-900 rounded-md py-2 px-3 inline-flex items-center text-sm font-medium">
                    <span class="pr-1 font-semibold flex-1">Sort by Department</span>
                    <span>
                        <svg class="fill-current h-4 w-4 transform group-hover:-rotate-180 transition duration-150 ease-in-out" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                        </svg>
                    </span>
                </button>
                <ul class="z-50 bg-white border rounded-sm transform scale-0 group-hover:scale-100 absolute transition duration-150 ease-in-out origin-top min-w-32 mt-2 w-1/6">
                    {{-- Category with items --}}
                    <li class="rounded-sm relative px-3 py-2 hover:bg-gray-100">
                        <button class="w-full text-left flex items-center outline-none focus:outline-none">
                            <span class="pr-1 flex-1">Category with Items Only</span>
                            <span class="mr-auto">
                                <svg class="fill-current h-4 w-4 transition duration-150 ease-in-out" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                </svg>
                            </span>
                        </button>
                        <ul class="gap-3 p-6 bg-white border rounded-sm absolute top-0 -mt-px right-1.5 transition duration-150 ease-in-out origin-top-left grid grid-cols-2 min-w-max-content bg-cover bg-center bg-no-repeat" style="background-image: url('/images/sample-bg.png')">
                            <div class="w-72">
                                <li class="px-3 pb-1 pt-3 font-bold">All Disney</li>
                                <li class="duration-300 ease-in-out hover:text-yellow-500 hover:translate-x-1.5 hover:translate-x-3.5 px-3 py-1 text-sm transform transition">Mugs & Accessories</li>
                                <li class="duration-300 ease-in-out hover:text-yellow-500 hover:translate-x-1.5 hover:translate-x-3.5 px-3 py-1 text-sm transform transition">Disney Mastercraft</li>
                                <li class="duration-300 ease-in-out hover:text-yellow-500 hover:translate-x-1.5 hover:translate-x-3.5 px-3 py-1 text-sm transform transition">Disney Traditions</li>
                                <li class="duration-300 ease-in-out hover:text-yellow-500 hover:translate-x-1.5 hover:translate-x-3.5 px-3 py-1 text-sm transform transition">Disney Britto</li>
                                <li class="duration-300 ease-in-out hover:text-yellow-500 hover:translate-x-1.5 hover:translate-x-3.5 px-3 py-1 text-sm transform transition">D-Stage/D-Select</li>
                                <li class="duration-300 ease-in-out hover:text-yellow-500 hover:translate-x-1.5 hover:translate-x-3.5 px-3 py-1 text-sm transform transition">Disney Miss Mindy</li>
                                <li class="duration-300 ease-in-out hover:text-yellow-500 hover:translate-x-1.5 hover:translate-x-3.5 px-3 py-1 text-sm transform transition">Disney Showcase</li>
                                <li class="duration-300 ease-in-out hover:text-yellow-500 hover:translate-x-1.5 hover:translate-x-3.5 px-3 py-1 text-sm transform transition">Disney Haute Couture</li>
                                <li class="duration-300 ease-in-out hover:text-yellow-500 hover:translate-x-1.5 hover:translate-x-3.5 px-3 py-1 text-sm transform transition">Disney Grand Jester</li>
                                <li class="duration-300 ease-in-out hover:text-yellow-500 hover:translate-x-1.5 hover:translate-x-3.5 px-3 py-1 text-sm transform transition">Disney Enchanting</li>
                                <li class="duration-300 ease-in-out hover:text-yellow-500 hover:translate-x-1.5 hover:translate-x-3.5 px-3 py-1 text-sm transform transition">Disney Dept 56</li>
                                <li class="duration-300 ease-in-out hover:text-yellow-500 hover:translate-x-1.5 hover:translate-x-3.5 px-3 py-1 text-sm transform transition">Disney Funko Pop</li>
                            </div>
                            <div class="w-72">
                                <li class="px-3 pb-1 pt-3 font-bold">By Universe</li>
                                <li class="duration-300 ease-in-out hover:text-yellow-500 hover:translate-x-1.5 hover:translate-x-3.5 px-3 py-1 text-sm transform transition">Tinker Bell</li>
                                <li class="duration-300 ease-in-out hover:text-yellow-500 hover:translate-x-1.5 hover:translate-x-3.5 px-3 py-1 text-sm transform transition">Mickey & his friends</li>
                                <li class="duration-300 ease-in-out hover:text-yellow-500 hover:translate-x-1.5 hover:translate-x-3.5 px-3 py-1 text-sm transform transition">Donald, Daisy, Scrooge</li>
                                <li class="duration-300 ease-in-out hover:text-yellow-500 hover:translate-x-1.5 hover:translate-x-3.5 px-3 py-1 text-sm transform transition">Winnie the Pooh</li>
                                <li class="duration-300 ease-in-out hover:text-yellow-500 hover:translate-x-1.5 hover:translate-x-3.5 px-3 py-1 text-sm transform transition">Pinocchio</li>
                                <li class="duration-300 ease-in-out hover:text-yellow-500 hover:translate-x-1.5 hover:translate-x-3.5 px-3 py-1 text-sm transform transition">Alice in Wonderland</li>
                                <li class="duration-300 ease-in-out hover:text-yellow-500 hover:translate-x-1.5 hover:translate-x-3.5 px-3 py-1 text-sm transform transition">Snow White</li>
                                <li class="duration-300 ease-in-out hover:text-yellow-500 hover:translate-x-1.5 hover:translate-x-3.5 px-3 py-1 text-sm transform transition">Lilo & Stitch</li>
                                <li class="duration-300 ease-in-out hover:text-yellow-500 hover:translate-x-1.5 hover:translate-x-3.5 px-3 py-1 text-sm transform transition">The Strange Christmas of Mr. Jack</li>
                                <li class="duration-300 ease-in-out hover:text-yellow-500 hover:translate-x-1.5 hover:translate-x-3.5 px-3 py-1 text-sm transform transition">The Beauty and the Beast</li>
                                <li class="duration-300 ease-in-out hover:text-yellow-500 hover:translate-x-1.5 hover:translate-x-3.5 px-3 py-1 text-sm transform transition">Lion King</li>
                                <li class="duration-300 ease-in-out hover:text-yellow-500 hover:translate-x-1.5 hover:translate-x-3.5 px-3 py-1 text-sm transform transition">Sleeping Beauty</li>
                            </div>
                            <div class="w-72">
                                <li class="px-3 pb-1 pt-3 font-bold">By Universe</li>
                                <li class="duration-300 ease-in-out hover:text-yellow-500 hover:translate-x-1.5 hover:translate-x-3.5 px-3 py-1 text-sm transform transition">Mulan</li>
                                <li class="duration-300 ease-in-out hover:text-yellow-500 hover:translate-x-1.5 hover:translate-x-3.5 px-3 py-1 text-sm transform transition">Dumbo</li>
                                <li class="duration-300 ease-in-out hover:text-yellow-500 hover:translate-x-1.5 hover:translate-x-3.5 px-3 py-1 text-sm transform transition">101 Dalmatians</li>
                                <li class="duration-300 ease-in-out hover:text-yellow-500 hover:translate-x-1.5 hover:translate-x-3.5 px-3 py-1 text-sm transform transition">Bambi</li>
                                <li class="duration-300 ease-in-out hover:text-yellow-500 hover:translate-x-1.5 hover:translate-x-3.5 px-3 py-1 text-sm transform transition">Snow Queen</li>
                                <li class="duration-300 ease-in-out hover:text-yellow-500 hover:translate-x-1.5 hover:translate-x-3.5 px-3 py-1 text-sm transform transition">Cinderella</li>
                                <li class="duration-300 ease-in-out hover:text-yellow-500 hover:translate-x-1.5 hover:translate-x-3.5 px-3 py-1 text-sm transform transition">The Little Mermaid</li>
                                <li class="duration-300 ease-in-out hover:text-yellow-500 hover:translate-x-1.5 hover:translate-x-3.5 px-3 py-1 text-sm transform transition">Princes Tiana</li>
                                <li class="duration-300 ease-in-out hover:text-yellow-500 hover:translate-x-1.5 hover:translate-x-3.5 px-3 py-1 text-sm transform transition">Peter Pan</li>
                                <li class="duration-300 ease-in-out hover:text-yellow-500 hover:translate-x-1.5 hover:translate-x-3.5 px-3 py-1 text-sm transform transition">Aladdin</li>
                                <li class="duration-300 ease-in-out hover:text-yellow-500 hover:translate-x-1.5 hover:translate-x-3.5 px-3 py-1 text-sm transform transition">Rapunzel</li>
                                <li class="duration-300 ease-in-out hover:text-yellow-500 hover:translate-x-1.5 hover:translate-x-3.5 px-3 py-1 text-sm transform transition">Pixar (Toy Story, Cars, etc)</li>
                            </div>
                        </ul>
                    </li>
                    <li class="rounded-sm relative px-3 py-2 hover:bg-gray-100">
                        <button class="w-full text-left flex items-center outline-none focus:outline-none">
                            <span class="pr-1 flex-1">Category with Items and Description </span>
                            <span class="mr-auto">
                                <svg class="fill-current h-4 w-4 transition duration-150 ease-in-out" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                </svg>
                            </span>
                        </button>
                        <ul class="gap-3 p-6 bg-white border rounded-sm absolute top-0 -mt-px right-1.5 transition duration-150 ease-in-out origin-top-left grid grid-cols-2 min-w-max-content bg-cover bg-center bg-no-repeat" style="background-image: url('/images/sample-bg.png')">
                            <div class="w-72">
                                <li class="px-3 pb-1 pt-3 font-bold">All Disney</li>
                                <li class="duration-300 ease-in-out hover:text-yellow-500 hover:translate-x-1.5 hover:translate-x-3.5 px-3 py-1 text-sm transform transition">Mugs & Accessories</li>
                                <li class="duration-300 ease-in-out hover:text-yellow-500 hover:translate-x-1.5 hover:translate-x-3.5 px-3 py-1 text-sm transform transition">Disney Mastercraft</li>
                                <li class="duration-300 ease-in-out hover:text-yellow-500 hover:translate-x-1.5 hover:translate-x-3.5 px-3 py-1 text-sm transform transition">Disney Traditions</li>
                                <li class="duration-300 ease-in-out hover:text-yellow-500 hover:translate-x-1.5 hover:translate-x-3.5 px-3 py-1 text-sm transform transition">Disney Britto</li>
                            </div>
                            <div class="w-72">
                                <li class="px-3 pb-1 pt-3 font-bold">By Universe</li>
                                <li class="duration-300 ease-in-out px-3 py-1 text-sm transform transition">
                                    <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</span>
                                </li>
                            </div>
                        </ul>
                    </li>
                    {{-- Menu title with description and image--}}
                    <li class="rounded-sm relative px-3 py-2 hover:bg-gray-100">
                        <button class="w-full text-left flex items-center outline-none focus:outline-none">
                            <span class="pr-1 flex-1">Menu Title with Description and Image</span>
                            <span class="mr-auto">
                                <svg class="fill-current h-4 w-4 transition duration-150 ease-in-out" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                </svg>
                            </span>
                        </button>
                        <ul class="gap-3 p-6 bg-white border rounded-sm absolute top-0 -mt-px right-1.5 transition duration-150 ease-in-out origin-top-left grid grid-cols-2 min-w-max-content bg-cover bg-center bg-no-repeat" style="background-image: url('/images/sample-bg.png')">
                            <div class="w-72">
                                <li class="px-3 pb-1 pt-3 font-bold">Harry Potter</li>
                                <li class="text-sm px-3 py-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</li>
                            </div>
                            <div class="w-72">
                                <img src="https://seamanjobstreet.com/template/images/job-detail-inner.png" alt="Sample">
                            </div>
                        </ul>
                    </li>
                    {{-- Category with items, and Menu title with description --}}
                    <li class="rounded-sm relative px-3 py-2 hover:bg-gray-100">
                        <button class="w-full text-left flex items-center outline-none focus:outline-none">
                            <span class="pr-1 flex-1">Category with items & 2 Menu title with description</span>
                            <span class="mr-auto">
                                <svg class="fill-current h-4 w-4 transition duration-150 ease-in-out" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                </svg>
                            </span>
                        </button>
                        <ul class="gap-3 p-6 bg-white border rounded-sm absolute top-0 -mt-px right-1.5 transition duration-150 ease-in-out origin-top-left grid grid-cols-2 min-w-max-content bg-cover bg-center bg-no-repeat" style="background-image: url('/images/sample-bg.png')">
                            <div class="w-72">
                                <li class="px-3 pb-1 pt-3 font-bold">Harry Potter</li>
                                <li class="duration-300 ease-in-out hover:text-yellow-500 hover:translate-x-1.5 hover:translate-x-3.5 px-3 py-1 text-sm transform transition">Menu Item # 1</li>
                                <li class="duration-300 ease-in-out hover:text-yellow-500 hover:translate-x-1.5 hover:translate-x-3.5 px-3 py-1 text-sm transform transition">Menu Item # 2</li>
                                <li class="duration-300 ease-in-out hover:text-yellow-500 hover:translate-x-1.5 hover:translate-x-3.5 px-3 py-1 text-sm transform transition">Menu Item # 3</li>
                            </div>
                            <div class="w-72">
                                <li class="px-3 pb-1 pt-3 font-bold">Category 2</li>
                                <li class="text-sm px-3 py-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</li>
                            </div>
                            <div class="w-72">
                                <li class="px-3 pb-1 pt-3 font-bold">Category 3</li>
                                <li class="text-sm px-3 py-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</li>
                            </div>
                        </ul>
                    </li>
                    {{-- No Submenu --}}
                    <li class="rounded-sm relative px-3 py-2 hover:bg-gray-100">No Submenu</li>
                </ul>
            </div>

            <div class="group inline-block">
                <button class="text-gray-900 hover:bg-gray-50 hover:text-gray-900 rounded-md py-2 px-3 inline-flex items-center text-sm font-medium">
                    <span class="pr-1 font-semibold flex-1">Flash Sale</span>
                </button>
                <ul class="z-50 gap-3 p-6 bg-white border transform scale-0 group-hover:scale-100 absolute transition duration-150 ease-in-out rounded-sm mt-2  grid grid-cols-2 min-w-max-content bg-cover bg-center bg-no-repeat" style="background-image: url('/images/sample-bg.png')">
                    <div class="w-72">
                        <li class="px-3 pb-1 pt-3 font-bold">Flash Sale</li>
                        <li class="text-sm px-3 py-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</li>
                    </div>
                    <div class="w-72">
                        <img src="https://seamanjobstreet.com/template/images/job-detail-inner.png" alt="Sample">
                    </div>
                </ul>
            </div>

            <div class="group inline-block">
                <button class="text-gray-900 hover:bg-gray-50 hover:text-gray-900 rounded-md py-2 px-3 inline-flex items-center text-sm font-medium">
                    <span class="pr-1 font-semibold flex-1">New Arrival</span>
                </button>
                <ul class="z-50 gap-3 p-6 bg-white border transform scale-0 group-hover:scale-100 absolute transition duration-150 ease-in-out rounded-sm mt-2  grid grid-cols-2 min-w-max-content bg-cover bg-center bg-no-repeat" style="background-image: url('/images/sample-bg.png')">
                    <div class="w-72">
                        <li class="px-3 pb-1 pt-3 font-bold">New Arrival</li>
                        <li class="text-sm px-3 py-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</li>
                    </div>
                    <div class="w-72">
                        <img src="https://seamanjobstreet.com/template/images/job-detail-inner.png" alt="Sample">
                    </div>
                </ul>
            </div>

            <div class="group inline-block">
                <button class="text-gray-900 rounded-md py-2 px-3 inline-flex items-center text-sm font-medium">
                    <span class="pr-1 font-semibold flex-1">Inventory</span>
                    <span>
                        <svg class="fill-current h-4 w-4 transform group-hover:-rotate-180 transition duration-150 ease-in-out" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                        </svg>
                    </span>
                </button>
                <ul class="z-50 bg-white border rounded-sm transform scale-0 group-hover:scale-100 absolute transition duration-150 ease-in-out origin-top min-w-32 mt-2 w-1/6">
                    <li class="rounded-sm relative px-3 py-2 hover:bg-gray-100">
                        <button class="w-full text-left flex items-center outline-none focus:outline-none">
                            <span class="pr-1 flex-1">Pre Orders</span>
                            <span class="mr-auto">
                                <svg class="fill-current h-4 w-4 transition duration-150 ease-in-out" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                </svg>
                            </span>
                        </button>
                        <ul class="gap-3 p-6 bg-white border rounded-sm absolute top-0 -mt-px right-1.5 transition duration-150 ease-in-out origin-top-left grid grid-cols-2 min-w-max-content bg-cover bg-center bg-no-repeat" style="background-image: url('/images/sample-bg.png')">
                            <div class="w-72">
                                <li class="px-3 pb-1 pt-3 font-bold">Harry Potter</li>
                                <li class="text-sm px-3 py-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</li>
                            </div>
                            <div class="w-72">
                                <img src="https://seamanjobstreet.com/template/images/job-detail-inner.png" alt="Sample">
                            </div>
                        </ul>
                    </li>
                    <li class="rounded-sm relative px-3 py-2 hover:bg-gray-100">
                        <button class="w-full text-left flex items-center outline-none focus:outline-none">
                            <span class="pr-1 flex-1">Reintroductions</span>
                            <span class="mr-auto">
                                <svg class="fill-current h-4 w-4 transition duration-150 ease-in-out" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                </svg>
                            </span>
                        </button>
                        <ul class="gap-3 p-6 bg-white border rounded-sm absolute top-0 -mt-px right-1.5 transition duration-150 ease-in-out origin-top-left grid grid-cols-2 min-w-max-content bg-cover bg-center bg-no-repeat" style="background-image: url('/images/sample-bg.png')">
                            <div class="w-72">
                                <li class="px-3 pb-1 pt-3 font-bold">Harry Potter</li>
                                <li class="text-sm px-3 py-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</li>
                            </div>
                            <div class="w-72">
                                <img src="https://seamanjobstreet.com/template/images/job-detail-inner.png" alt="Sample">
                            </div>
                        </ul>
                    </li>
                    <li class="rounded-sm relative px-3 py-2 hover:bg-gray-100">
                        <button class="w-full text-left flex items-center outline-none focus:outline-none">
                            <span class="pr-1 flex-1">Imports</span>
                            <span class="mr-auto">
                                <svg class="fill-current h-4 w-4 transition duration-150 ease-in-out" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                </svg>
                            </span>
                        </button>
                        <ul class="gap-3 p-6 bg-white border rounded-sm absolute top-0 -mt-px right-1.5 transition duration-150 ease-in-out origin-top-left grid grid-cols-2 min-w-max-content bg-cover bg-center bg-no-repeat" style="background-image: url('/images/sample-bg.png')">
                            <div class="w-72">
                                <li class="px-3 pb-1 pt-3 font-bold">Harry Potter</li>
                                <li class="text-sm px-3 py-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</li>
                            </div>
                            <div class="w-72">
                                <img src="https://seamanjobstreet.com/template/images/job-detail-inner.png" alt="Sample">
                            </div>
                        </ul>
                    </li>
                    <li class="rounded-sm relative px-3 py-2 hover:bg-gray-100">
                        <button class="w-full text-left flex items-center outline-none focus:outline-none">
                            <span class="pr-1 flex-1">Restocked Items</span>
                            <span class="mr-auto">
                                <svg class="fill-current h-4 w-4 transition duration-150 ease-in-out" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                </svg>
                            </span>
                        </button>
                        <ul class="gap-3 p-6 bg-white border rounded-sm absolute top-0 -mt-px right-1.5 transition duration-150 ease-in-out origin-top-left grid grid-cols-2 min-w-max-content bg-cover bg-center bg-no-repeat" style="background-image: url('/images/sample-bg.png')">
                            <div class="w-72">
                                <li class="px-3 pb-1 pt-3 font-bold">Harry Potter</li>
                                <li class="text-sm px-3 py-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</li>
                            </div>
                            <div class="w-72">
                                <img src="https://seamanjobstreet.com/template/images/job-detail-inner.png" alt="Sample">
                            </div>
                        </ul>
                    </li>
                    <li class="rounded-sm relative px-3 py-2 hover:bg-gray-100">Pre Orders (No details)</li>
                    <li class="rounded-sm relative px-3 py-2 hover:bg-gray-100">Reintroductions (No details)</li>
                    <li class="rounded-sm relative px-3 py-2 hover:bg-gray-100">Imports (No details)</li>
                    <li class="rounded-sm relative px-3 py-2 hover:bg-gray-100">Restocked Items (No details)</li>

                </ul>
            </div>
        </nav>
    </div>

    <nav class="block lg:hidden" aria-label="Global" x-show="isMobileMainMenuOpen">

        <div>
            <div class="flex antialiased text-gray-900 bg-gray-100 dark:bg-dark dark:text-light">
                <!-- Loading screen -->
                <div x-ref="loading" class="fixed inset-0 z-50 flex items-center justify-center">
                </div>
                <div class="flex flex-col flex-1 overflow-x-hidden overflow-y-auto">
                    <!-- Navbar -->
                    <header class="relative bg-white">

                        <!-- Mobile main manu -->
                        <div class="border-b lg:hidden dark:border-blue-800" x-show="isMobileMainMenuOpen" @click.away="isMobileMainMenuOpen = false">
                            <nav aria-label="Main" class="px-2 py-4 space-y-2 divide-gray-200 divide-y">
                                <div>
                                    <!-- Dashboards links -->
                                    <div x-data="{ isActive: false, open: false}">
                                        <!-- active & hover classes 'bg-blue-100 dark:bg-blue-600' -->
                                        <a href="#" @click="$event.preventDefault(); open = !open" class="flex items-center p-2 text-gray-500 transition-colors rounded-md focus:bg-blue-100 " role="button" aria-haspopup="true" :aria-expanded="(open || isActive) ? 'true' : 'false'">
                                            <span aria-hidden="true">
                                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                                </svg>
                                            </span>
                                            <span class="ml-2 text-sm"> Sort By Department</span>
                                            <span class="ml-auto" aria-hidden="true">
                                                <!-- active class 'rotate-180' -->
                                                <svg class="w-4 h-4 transition-transform transform" :class="{ 'rotate-180': open }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                                </svg>
                                            </span>
                                        </a>
                                        <div role="menu" x-show="open" class="mt-2 space-y-2 pl-7" aria-label="Dashboards">
                                            <div x-data="{ isActive: false, open: false}">
                                                <a href="#" @click="$event.preventDefault(); open = !open" class="flex items-center p-2 text-gray-500 transition-colors rounded-md focus:bg-blue-100 " role="button" aria-haspopup="true" :aria-expanded="(open || isActive) ? 'true' : 'false'">
                                                    <span aria-hidden="true">
                                                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                                        </svg>
                                                    </span>
                                                    <span class="ml-2 text-sm"> Category with items only </span>
                                                    <span class="ml-auto" aria-hidden="true">
                                                        <svg class="w-4 h-4 transition-transform transform" :class="{ 'rotate-180': open }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                                        </svg>
                                                    </span>
                                                </a>
                                                <div role="menu" x-show="open" class="mt-2 space-y-2 pl-7" aria-label="Dashboards">
                                                    <div x-data="{ isActive: false, open: false}">
                                                        <a href="#" @click="$event.preventDefault(); open = !open" class="flex items-center p-2 text-gray-500 transition-colors rounded-md focus:bg-blue-100 " role="button" aria-haspopup="true" :aria-expanded="(open || isActive) ? 'true' : 'false'">
                                                            <span aria-hidden="true">
                                                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                                                </svg>
                                                            </span>
                                                            <span class="ml-2 text-sm"> All Disney </span>
                                                            <span class="ml-auto" aria-hidden="true">
                                                                <svg class="w-4 h-4 transition-transform transform" :class="{ 'rotate-180': open }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                                                </svg>
                                                            </span>
                                                        </a>
                                                        <div role="menu" x-show="open" class="mt-2 space-y-2 px-7" aria-label="Dashboards">
                                                            <a href="#" role="menuitem" class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:text-gray-400 dark:hover:text-light hover:text-gray-700">
                                                                Disney 1
                                                            </a>
                                                            <a href="#" role="menuitem" class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:text-gray-400 dark:hover:text-light hover:text-gray-700">
                                                                Disney 2
                                                            </a>
                                                            <a href="#" role="menuitem" class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700">
                                                                Disney 3
                                                            </a>
                                                            <a href="#" role="menuitem" class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700">
                                                                Disney 4
                                                            </a>
                                                            <a href="#" role="menuitem" class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700">
                                                                Disney 5
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div x-data="{ isActive: false, open: false}">
                                                        <a href="#" @click="$event.preventDefault(); open = !open" class="flex items-center p-2 text-gray-500 transition-colors rounded-md focus:bg-blue-100 " role="button" aria-haspopup="true" :aria-expanded="(open || isActive) ? 'true' : 'false'">
                                                            <span aria-hidden="true">
                                                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                                                </svg>
                                                            </span>
                                                            <span class="ml-2 text-sm"> All Disney </span>
                                                            <span class="ml-auto" aria-hidden="true">
                                                                <svg class="w-4 h-4 transition-transform transform" :class="{ 'rotate-180': open }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                                                </svg>
                                                            </span>
                                                        </a>
                                                        <div role="menu" x-show="open" class="mt-2 space-y-2 pl-7" aria-label="Dashboards">
                                                            <a href="#" role="menuitem" class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:text-gray-400 dark:hover:text-light hover:text-gray-700">
                                                                Disney 1
                                                            </a>
                                                            <a href="#" role="menuitem" class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:text-gray-400 dark:hover:text-light hover:text-gray-700">
                                                                Disney 2
                                                            </a>
                                                            <a href="#" role="menuitem" class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700">
                                                                Disney 3
                                                            </a>
                                                            <a href="#" role="menuitem" class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700">
                                                                Disney 4
                                                            </a>
                                                            <a href="#" role="menuitem" class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700">
                                                                Disney 5
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div x-data="{ isActive: false, open: false}">
                                                        <a href="#" @click="$event.preventDefault(); open = !open" class="flex items-center p-2 text-gray-500 transition-colors rounded-md focus:bg-blue-100 " role="button" aria-haspopup="true" :aria-expanded="(open || isActive) ? 'true' : 'false'">
                                                            <span aria-hidden="true">
                                                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                                                </svg>
                                                            </span>
                                                            <span class="ml-2 text-sm"> Category with items and description  </span>
                                                            <span class="ml-auto" aria-hidden="true">
                                                                <svg class="w-4 h-4 transition-transform transform" :class="{ 'rotate-180': open }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                                                </svg>
                                                            </span>
                                                        </a>
                                                        <div role="menu" x-show="open" class="mt-2 space-y-2 pl-7" aria-label="Dashboards">
                                                            <a href="#" role="menuitem" class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:text-gray-400 dark:hover:text-light hover:text-gray-700">
                                                                Disney 1
                                                            </a>
                                                            <a href="#" role="menuitem" class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:text-gray-400 dark:hover:text-light hover:text-gray-700">
                                                                Disney 2
                                                            </a>
                                                            <a href="#" role="menuitem" class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700">
                                                                Disney 3
                                                            </a>
                                                            <a href="#" role="menuitem" class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700">
                                                                Disney 4
                                                            </a>
                                                            <a href="#" role="menuitem" class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700">
                                                                Disney 5
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div x-data="{ isActive: false, open: false}">
                                                <a href="#" @click="$event.preventDefault(); open = !open" class="flex items-center p-2 text-gray-500 transition-colors rounded-md focus:bg-blue-100 " role="button" aria-haspopup="true" :aria-expanded="(open || isActive) ? 'true' : 'false'">
                                                    <span aria-hidden="true">
                                                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                                        </svg>
                                                    </span>
                                                    <span class="ml-2 text-sm"> Category with items and description </span>
                                                    <span class="ml-auto" aria-hidden="true">
                                                        <svg class="w-4 h-4 transition-transform transform" :class="{ 'rotate-180': open }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                                        </svg>
                                                    </span>
                                                </a>
                                                <div role="menu" x-show="open" class="mt-2 space-y-2 px-7" aria-label="Dashboards">
                                                    <a href="#" role="menuitem" class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:text-gray-400 dark:hover:text-light hover:text-gray-700">
                                                        Mulan
                                                    </a>
                                                    <a href="#" role="menuitem" class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:text-gray-400 dark:hover:text-light hover:text-gray-700">
                                                        Dumbo
                                                    </a>
                                                    <a href="#" role="menuitem" class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700">
                                                        101 Dalmatians
                                                    </a>
                                                    <a href="#" role="menuitem" class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700">
                                                        Bambi
                                                    </a>
                                                    <a href="#" role="menuitem" class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700">
                                                        Snow Queen
                                                    </a>
                                                </div>
                                            </div>
                                            <div x-data="{ isActive: false, open: false}">
                                                <a href="#" @click="$event.preventDefault(); open = !open" class="flex items-center p-2 text-gray-500 transition-colors rounded-md focus:bg-blue-100 " role="button" aria-haspopup="true" :aria-expanded="(open || isActive) ? 'true' : 'false'">
                                                    <span aria-hidden="true">
                                                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                                        </svg>
                                                    </span>
                                                    <span class="ml-2 text-sm"> Menu title with description and image </span>
                                                    <span class="ml-auto" aria-hidden="true">
                                                        <svg class="w-4 h-4 transition-transform transform" :class="{ 'rotate-180': open }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                                        </svg>
                                                    </span>
                                                </a>
                                                <div role="menu" x-show="open" class="mt-2 space-y-2 px-7" aria-label="Dashboards">
                                                    <a href="#" role="menuitem" class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:text-gray-400 dark:hover:text-light hover:text-gray-700">
                                                        Disney 1
                                                    </a>
                                                    <a href="#" role="menuitem" class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:text-gray-400 dark:hover:text-light hover:text-gray-700">
                                                        Disney 2
                                                    </a>
                                                    <a href="#" role="menuitem" class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700">
                                                        Disney 3
                                                    </a>
                                                    <a href="#" role="menuitem" class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700">
                                                        Disney 4
                                                    </a>
                                                    <a href="#" role="menuitem" class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700">
                                                        Disney 5
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Components links -->
                                    <div x-data="{ isActive: false, open: false }">
                                        <!-- active classes 'bg-blue-100 dark:bg-blue-600' -->
                                        <a href="#" @click="$event.preventDefault(); open = !open" class="flex items-center p-2 text-gray-500 transition-colors rounded-md focus:bg-blue-100 " " role="button" aria-haspopup="true" :aria-expanded="(open || isActive) ? 'true' : 'false'">
                                            <span aria-hidden="true">
                                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 14l6-6m-5.5.5h.01m4.99 5h.01M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16l3.5-2 3.5 2 3.5-2 3.5 2zM10 8.5a.5.5 0 11-1 0 .5.5 0 011 0zm5 5a.5.5 0 11-1 0 .5.5 0 011 0z" />
                                                  </svg>
                                            </span>
                                            <span class="ml-2 text-sm"> Flash Sale </span>
                                        </a>
                                    </div>

                                    <!-- Pages links -->
                                    <div x-data="{ isActive: true, open: true }">
                                        <!-- active classes 'bg-blue-100 dark:bg-blue-600' -->
                                        <a href="#" @click="$event.preventDefault(); open = !open" class="flex items-center p-2 text-gray-500 transition-colors rounded-md focus:bg-blue-100 " " role="button" aria-haspopup="true" :aria-expanded="(open || isActive) ? 'true' : 'false'">
                                            <span aria-hidden="true">
                                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                                                </svg>
                                            </span>
                                            <span class="ml-2 text-sm"> New Arrival </span>
                                        </a>
                                    </div>

                                    <!-- Authentication links -->
                                    <div x-data="{ isActive: false, open: false}">
                                        <!-- active & hover classes 'bg-blue-100 dark:bg-blue-600' -->
                                        <a href="#" @click="$event.preventDefault(); open = !open" class="flex items-center p-2 text-gray-500 transition-colors rounded-md focus:bg-blue-100 " role="button" aria-haspopup="true" :aria-expanded="(open || isActive) ? 'true' : 'false'">
                                            <span aria-hidden="true">
                                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                                  </svg>
                                            </span>
                                            <span class="ml-2 text-sm"> Inventory </span>
                                            <span aria-hidden="true" class="ml-auto">
                                                <!-- active class 'rotate-180' -->
                                                <svg class="w-4 h-4 transition-transform transform" :class="{ 'rotate-180': open }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                                </svg>
                                            </span>
                                        </a>
                                        <div x-show="open" class="mt-2 space-y-2 px-7" role="menu" aria-label="Authentication">
                                            <!-- active & hover classes 'text-gray-700 dark:text-light' -->
                                            <!-- inActive classes 'text-gray-400 dark:text-gray-400' -->
                                            <a href="#" role="menuitem" class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700">
                                                Pre Order
                                            </a>
                                            <a href="#" role="menuitem" class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700">
                                                Reintroductions
                                            </a>
                                            <a href="#" role="menuitem" class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700">
                                                Import
                                            </a>
                                            <a href="#" role="menuitem" class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700">
                                                Restocked Items
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <div x-data="{ isActive: false, open: false }">
                                        <!-- active classes 'bg-blue-100 dark:bg-blue-600' -->
                                        <a href="#" @click="$event.preventDefault(); open = !open" class="mt-4 flex items-center p-2 text-gray-500 transition-colors rounded-md focus:bg-blue-100 " " role="button" aria-haspopup="true" :aria-expanded="(open || isActive) ? 'true' : 'false'">
                                            <span aria-hidden="true">
                                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                                                  </svg>
                                            </span>
                                            <span class="ml-2 text-sm"> Notifications </span>
                                        </a>
                                    </div>
                                    <div x-data="{ isActive: false, open: false }">
                                        <!-- active classes 'bg-blue-100 dark:bg-blue-600' -->
                                        <a href="#" @click="$event.preventDefault(); open = !open" class="flex items-center p-2 text-gray-500 transition-colors rounded-md focus:bg-blue-100 " " role="button" aria-haspopup="true" :aria-expanded="(open || isActive) ? 'true' : 'false'">
                                            <span aria-hidden="true">
                                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                                </svg>
                                            </span>
                                            <span class="ml-2 text-sm"> Your Profile </span>
                                        </a>
                                    </div>
                                    <div x-data="{ isActive: false, open: false }">
                                        <!-- active classes 'bg-blue-100 dark:bg-blue-600' -->
                                        <a href="#" @click="$event.preventDefault(); open = !open" class="flex items-center p-2 text-gray-500 transition-colors rounded-md focus:bg-blue-100 " " role="button" aria-haspopup="true" :aria-expanded="(open || isActive) ? 'true' : 'false'">
                                            <span aria-hidden="true">
                                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                  </svg>
                                            </span>
                                            <span class="ml-2 text-sm"> Settings </span>
                                        </a>
                                    </div>
                                    <div x-data="{ isActive: false, open: false }">
                                        @if(auth()->user())
                                            <a href="#" @click="$event.preventDefault(); open = !open" class="pt-0 items-center p-2 text-gray-500 transition-colors rounded-md focus:bg-blue-100 " " role="button" aria-haspopup="true" :aria-expanded="(open || isActive) ? 'true' : 'false'">
                                                <form method="POST" action="{{ route('logout') }}" class="-mt-4 text-sm flex">
                                                    @csrf
                                                    <a
                                                        href="{{ route('logout') }}"
                                                        onclick="event.preventDefault();
                                                        this.closest('form').submit();"
                                                        class="flex"
                                                        role="menuitem">
                                                        <span aria-hidden="true">
                                                            <svg class="-ml-2 w-5 h-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                                              </svg>
                                                        </span>
                                                        <span class="ml-2 text-gray-500">Sign out</span>

                                                    </a>
                                                </form>
                                            </a>
                                        @else
                                        <div>
                                            <a href="{{ route('register') }}" class="w-full flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-indigo-600 hover:bg-indigo-700">
                                              Register
                                            </a>
                                            <p class="mt-2 text-center text-base font-medium text-gray-500">
                                              Existing customer?
                                              <a href="{{ route('login') }}" class="text-indigo-600 hover:text-indigo-500">
                                                Sign in
                                              </a>
                                            </p>
                                        </div>
                                        @endif

                                    </div>
                                </div>
                            </nav>
                        </div>
                    </header>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/gh/alpine-collective/alpine-magic-helpers@0.6.x/dist/component.min.js"></script>
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js" defer></script>

        <script>
            const setup = () => {
                const getTheme = () => {
                    if (window.localStorage.getItem('dark')) {
                        return JSON.parse(window.localStorage.getItem('dark'))
                    }
                    return !!window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches
                }
                const setTheme = (value) => {
                    window.localStorage.setItem('dark', value)
                }
                return {
                    loading: true
                    , isDark: getTheme()
                    , toggleTheme() {
                        this.isDark = !this.isDark
                        setTheme(this.isDark)
                    }
                    , setLightTheme() {
                        this.isDark = false
                        setTheme(this.isDark)
                    }
                    , setDarkTheme() {
                        this.isDark = true
                        setTheme(this.isDark)
                    }
                    , isSettingsPanelOpen: false
                    , openSettingsPanel() {
                        this.isSettingsPanelOpen = true
                        this.$nextTick(() => {
                            this.$refs.settingsPanel.focus()
                        })
                    }
                    , isNotificationsPanelOpen: false
                    , openNotificationsPanel() {
                        this.isNotificationsPanelOpen = true
                        this.$nextTick(() => {
                            this.$refs.notificationsPanel.focus()
                        })
                    }
                    , isSearchPanelOpen: false
                    , openSearchPanel() {
                        this.isSearchPanelOpen = true
                        this.$nextTick(() => {
                            this.$refs.searchInput.focus()
                        })
                    }
                    , isMobileSubMenuOpen: false
                    , openMobileSubMenu() {
                        this.isMobileSubMenuOpen = true
                        this.$nextTick(() => {
                            this.$refs.mobileSubMenu.focus()
                        })
                    }
                    , isMobileMainMenuOpen: false
                    , openMobileMainMenu() {
                        this.isMobileMainMenuOpen = true
                        this.$nextTick(() => {
                            this.$refs.mobileMainMenu.focus()
                        })
                    }
                , }
            }
        </script>
    </nav>
</header>
