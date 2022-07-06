
<nav>
    <div class="container flex flex-wrap items-center mx-auto">
        <a href="/" class="text-2xl lg:text-4xl font-bold aureli ml-4  lg:ml-20 2xl:ml-56 ">Hekto</a>
        <div class="flex md:order-2">

            <form class="flex" method="GET" action="{{ route('search') }}">
                <input class="w-32 lg:w-40 xl:w-60 xl:h-10 h-7 mt-2 border-2 hidden md:block ml-5 lg:ml-14 xl:ml-[180px]"
                    type="text" placeholder="search " name="search" required />
                <button type="submit" class="w-10 h-7 xl:h-10 bg-pink-600 mt-2 hidden md:block "><svg
                        xmlns="http://www.w3.org/2000/svg " class="h-5 w-5 ml-1.5 text-white " fill="none "
                        viewBox="0 0 24 24 " stroke="currentColor " stroke-width="2 ">
                        <path stroke-linecap="round " stroke-linejoin="round "
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z " />
                    </svg></button>
            </form>
            <!--hamburger button-->
            <button data-collapse-toggle="mobile-menu-3" type="button"
                class="inline-flex items-center p-2 text-sm rounded-lg md:hidden" aria-controls="mobile-menu-3"
                aria-expanded="false">
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
            <button class="sm:hidden ">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </button>
        </div>
        <div class="hidden justify-between items-center w-full md:flex md:w-auto md:order-1" id="mobile-menu-3">
            <div class="relative mt-3 md:hidden">
                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                    <svg class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                            clip-rule="evenodd"></path>
                    </svg>
                </div>
                <input type="text" id="search-navbar"
                    class="block p-2 pl-10 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Search...">
            </div>
            <ul
                class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium xl:ml
        -20
        ">
                <li>
                    <a class="flex hover:text-pink-800 ml-20" href="/">Home <svg
                            xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mt-0.5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                        </svg></a>
                </li>
                <li>
                    <a href="#" class="hover:text-pink-800">Pages</a>
                </li>
                <li>
                    <a href="#" class="hover:text-pink-800">Products</a>
                </li>
                <li>
                    <a href="#" class="hover:text-pink-800">Blog</a>
                </li>
                <li>
                    <a href="#" class="hover:text-pink-800">Shop</a>
                </li>
                <li>
                    <a href="contactpage" class="hover:text-pink-800">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
