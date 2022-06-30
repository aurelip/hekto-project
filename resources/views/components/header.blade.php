<header class="py-2 bg-[#7E33E0] w-full h-12">
    <div class="flex place-content-center ">
        <div class="sm:hidden z-10">
            <!--Mobile Version-->
            <ul class="ml-4 text-white flex space-x-5">
                <li>
                    <button id="dropdownNavbarLinkIII" data-dropdown-toggle="dropdownNavbarIII"
                        class="flex text-white">English <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div id="dropdownNavbarIII"
                        class="z-10 hidden divide-y divide-gray-100 rounded shadow w-44 bg-purple-800">
                        <ul class="py-1 text-sm text-white dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                            <li>
                                <a href="#"
                                    class="block px-4 py-2  dark:hover:bg-gray-600 dark:hover:text-white">German</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block px-4 py-2  dark:hover:bg-gray-600 dark:hover:text-white">Spanish</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block px-4 py-2  dark:hover:bg-gray-600 dark:hover:text-white">Italian</a>
                            </li>
                        </ul>

                    </div>
                </li>
                <li>
                    <!--login mobile-->
                    <a href="{{ route('login') }}" type="button" data-modal-toggle="defaultModal" class="flex">Login <svg
                            xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </a>
                    {{-- <div id="defaultModal" tabindex="-1" aria-hidden="true"
                        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
                        <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                <!-- Modal header -->
                                <div
                                    class="flex justify-between items-start p-4 rounded-t border-b dark:border-gray-600">
                                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                        Terms of Service
                                    </h3>
                                    <button type="button"
                                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                        data-modal-toggle="defaultModal">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </button>
                                </div>
                                <!-- Modal body -->
                                <div class="p-6 space-y-6">
                                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                        With less than a month to go before the European Union enacts new consumer
                                        privacy laws for its citizens, companies around the world are updating their
                                        terms of service agreements to comply.
                                    </p>
                                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                        The European Union’s General Data Protection Regulation (G.D.P.R.) goes into
                                        effect on May 25 and is meant to ensure a common set of data rights in the
                                        European Union. It requires organizations to notify users as soon as possible of
                                        high-risk data breaches that could personally affect them.
                                    </p>
                                </div>
                                <!-- Modal footer -->
                                <div
                                    class="flex items-center p-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">
                                    <button data-modal-toggle="defaultModal" type="button"
                                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">I
                                        accept</button>
                                    <button data-modal-toggle="defaultModal" type="button"
                                        class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Decline</button>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </li>
            </ul>
        </div>
        <!--desktop ver-->
        <div class="ml-10 hidden sm:flex md:inline-flex space-x-8 xl:ml-10 2xl:ml-12">
            <a class="flex text-white" href="#"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                    fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
                <p class="sm:hidden lg:block">mhhasanul@gmail.com</p>
            </a>
            <a class="flex text-white sm:flex" href="#"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                    fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                </svg>
                <p class="sm:hidden lg:block">(12345)67890</p>
            </a>
        </div>
        <div id="#" class="hidden sm:block pl-24 md:pl-52 xl:pl-[400px] 2xl:pl-[445px]">
            <ul class="flex space-x-5">
                <li>
                    <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
                        class="flex text-white">English <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div id="dropdownNavbar"
                        class="z-10 hidden divide-y divide-gray-100 rounded shadow w-44 bg-purple-800">
                        <ul class="py-1 text-sm text-white dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                            <li>
                                <a href="#"
                                    class="block px-4 py-2  dark:hover:bg-gray-600 dark:hover:text-white">German</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block px-4 py-2  dark:hover:bg-gray-600 dark:hover:text-white">Spanish</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block px-4 py-2  dark:hover:bg-gray-600 dark:hover:text-white">Italian</a>
                            </li>
                        </ul>

                    </div>
                </li>
                </li>
                <li>
                    <button id="dropdownNavbarLinkII" data-dropdown-toggle="dropdownNavbarII"
                        class="flex text-white">USD <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div id="dropdownNavbarII"
                        class="z-10 hidden divide-y divide-gray-100 rounded shadow w-44 bg-purple-800">
                        <ul class="py-1 text-sm text-white dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                            <li>
                                <a href="#"
                                    class="block px-4 py-2  dark:hover:bg-gray-600 dark:hover:text-white">EUR</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block px-4 py-2  dark:hover:bg-gray-600 dark:hover:text-white">GBP</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block px-4 py-2  dark:hover:bg-gray-600 dark:hover:text-white">ALL</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <!--login Desktop-->
                    <a href="{{ route('login') }}" class="text-white flex">Login <svg
                            xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a   7 7 0 00-7-7z" />
                        </svg></a>

                </li>
                <li>
                    <a class="text-white flex" href="#">Wishlist<svg xmlns="http://www.w3.org/2000/svg"
                            class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                            stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                        </svg></a>
                </li>
                <li>
                    <a class="text-white" href="#"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg></a>
                </li>
            </ul>
        </div>
        <div>
            <button data-collapse-toggle="mobile-menu" type="button"
                class="inline-flex items-center justify-center ml-52  text-gray-400 rounded-lg sm:hidden hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-300 dark:text-gray-400 dark:hover:text-white dark:focus:ring-gray-500"
                aria-controls="mobile-menu-2" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                        clip-rule="evenodd"></path>
                </svg>
                <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
            <div id="mobile-menu"
                class=" relative z-10 hidden divide-y divide-gray-100 rounded shadow w-44 bg-purple-800">
                <ul class="py-1 text-sm text-white dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                    <li>
                        <a href="#" class="block px-4 py-2  dark:hover:bg-gray-600 dark:hover:text-white">USD</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2  dark:hover:bg-gray-600 dark:hover:text-white">Wishlist</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2  dark:hover:bg-gray-600 dark:hover:text-white">Shopping
                            Card</a>
                    </li>
                </ul>

            </div>
        </div>
</header>
