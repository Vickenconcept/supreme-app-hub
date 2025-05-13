<aside id="logo-sidebar"
    class="fixed top-0 left-0 z-40 w-64 h-screen  transition-transform -translate-x-full bg-white  sm:translate-x-0  py-3 "
    aria-label="Sidebar">
    <div class="bg-white h-full rounded-xl px-3 pb-4 ">
        <div class="py-5 mb-2 border-b-2 border-slate-300">
            <a href="/home" class="">
                <img src="{{ asset('images/logo.svg') }}" class="h-10 me-3" alt="FluenceGrid Logo" />
            </a>
        </div>
        <div class="h-[85%] pb-4 overflow-y-auto ">
            <ul class="space-y-1 font-medium">
                <li>
                    <a href="{{ route('home') }}"
                        class="flex items-center p-2 text-gray-900 rounded-3xl  hover:bg-gray-100 group transition duration-500 ease-in-out {{ request()->routeIs('home') ? 'bg-orange-500/20' : '' }}">
                        <i class='bx bx-home-smile text-xl mr-2 text-orange-500 bg-slate-50 px-1.5 py-0.5 rounded-full'></i>
                        <span class="">Dashboard</span>
                    </a>
                </li>

               

                
                {{-- <hr class="border border-slate-300"> --}}
                <li>
                    <a href="{{ route('reseller.index') }}"
                        class="flex items-center p-2 text-gray-900 rounded-3xl  hover:bg-gray-100 group transition duration-500 ease-in-out {{ request()->routeIs('reseller.index') ? 'bg-orange-500/20' : '' }}">
                        <i class='bx bx-refresh text-xl mr-2 text-orange-500 bg-slate-50 px-1.5 py-0.5 rounded-full'></i>
                        <span class="text-sm">Reseller</span>
                    </a>
                </li>
                <li class="">
                    <a href="{{ route('auth.logout') }}"
                        class="flex items-center p-2 text-gray-900 rounded-3xl  hover:bg-gray-100 group transition duration-500 ease-in-out">
                        <i class='bx bx-exit text-xl mr-2 text-orange-500 bg-slate-50 px-1.5 py-0.5 rounded-full'></i>
                        <span class="text-sm capitalize">Log out</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</aside>
