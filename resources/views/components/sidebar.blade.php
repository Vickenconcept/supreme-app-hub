<aside id="logo-sidebar"
    class="fixed top-0 left-0 z-40 w-64 h-screen  transition-transform -translate-x-full bg-[#0a0f2c]  sm:translate-x-0  py-3 pl-3 border-r border-gray-300 "
    aria-label="Sidebar">
    <div class="bg-[#0a0f2c] h-full rounded-xl px-3 pb-4 ">
        <div class="py-5 mb-2 border-b-2 border-slate-300">
            <a href="/home" class="">
                {{-- <img src="{{ asset('images/logo.svg') }}" class="h-10 me-3" alt="FluenceGrid Logo" /> --}}
                <div class=" font-medium text-orange-500  flex items-center space-x-1">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-8">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="m3.75 13.5 10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75Z" />
                    </svg>
                    <span class="text-white">My Automation Toolkit</span>
                </div>
            </a>
        </div>
        <div class="h-[85%] py-4  ">
            <ul class="space-y-1 font-medium h-full flex flex-col justify-between">
                <div class="space-y-1 h-[85%] overflow-y-auto">
                    <li>
                        <a href="{{ route('home') }}"
                            class="flex items-center p-2 group  rounded-3xl  hover:bg-gray-100 group hover:text-orange-500 transition duration-500 ease-in-out {{ request()->routeIs('home') ? 'bg-orange-500 text-gray-50 ' : 'text-gray-50' }}">
                            <i
                                class='bx bx-home-smile text-xl mr-2 text-orange-500 group-hover:bg-orange-500 group-hover:text-white transition duration-500 ease-in-out bg-slate-50 px-1.5 py-0.5 rounded-full shadow-md'></i>
                            <span class="">My Apps</span>
                        </a>
                    </li>
                  

                    <li>
                        <a href="{{ route('dfy_sales_pages.index') }}"
                           class="flex items-center p-2 group rounded-3xl hover:bg-gray-100 group hover:text-orange-500 transition duration-500 ease-in-out {{ request()->routeIs('dfy_sales_pages.index') ? 'bg-orange-500 text-gray-50' : 'text-gray-50' }}">
                          <i class='bx bx-refresh text-xl mr-2 text-orange-500 group-hover:bg-orange-500 group-hover:text-white transition duration-500 ease-in-out bg-slate-50 px-1.5 py-0.5 rounded-full shadow-md'></i>
                          <span class="text-sm">DFY Sales Pages</span>
                        </a>
                      </li>
                      
                      <li>
                        <a href="{{ route('traffic_training.index') }}"
                           class="flex items-center p-2 group rounded-3xl hover:bg-gray-100 group hover:text-orange-500 transition duration-500 ease-in-out {{ request()->routeIs('traffic_training.index') ? 'bg-orange-500 text-gray-50' : 'text-gray-50' }}">
                          <i class='bx bx-refresh text-xl mr-2 text-orange-500 group-hover:bg-orange-500 group-hover:text-white transition duration-500 ease-in-out bg-slate-50 px-1.5 py-0.5 rounded-full shadow-md'></i>
                          <span class="text-sm">Traffic Training</span>
                        </a>
                      </li>
                      
                      <li>
                        <a href="{{ route('dfy_convert_swipes.index') }}"
                           class="flex items-center p-2 group rounded-3xl hover:bg-gray-100 group hover:text-orange-500 transition duration-500 ease-in-out {{ request()->routeIs('dfy_convert_swipes.index') ? 'bg-orange-500 text-gray-50' : 'text-gray-50' }}">
                          <i class='bx bx-refresh text-xl mr-2 text-orange-500 group-hover:bg-orange-500 group-hover:text-white transition duration-500 ease-in-out bg-slate-50 px-1.5 py-0.5 rounded-full shadow-md'></i>
                          <span class="text-sm">DFY Convert Swipes</span>
                        </a>
                      </li>
                      
                      <li>
                        <a href="{{ route('solo_ads_vendors.index') }}"
                           class="flex items-center p-2 group rounded-3xl hover:bg-gray-100 group hover:text-orange-500 transition duration-500 ease-in-out {{ request()->routeIs('solo_ads_vendors.index') ? 'bg-orange-500 text-gray-50' : 'text-gray-50' }}">
                          <i class='bx bx-refresh text-xl mr-2 text-orange-500 group-hover:bg-orange-500 group-hover:text-white transition duration-500 ease-in-out bg-slate-50 px-1.5 py-0.5 rounded-full shadow-md'></i>
                          <span class="text-sm">Solo Ads Vendors</span>
                        </a>
                      </li>
                      
                      <li>
                        <a href="{{ route('reseller.index') }}"
                            class="flex items-center p-2 group  rounded-3xl  hover:bg-gray-100 group hover:text-orange-500 transition duration-500 ease-in-out {{ request()->routeIs('reseller.index') ? 'bg-orange-500 text-gray-50' : 'text-gray-50' }}">
                            <i
                                class='bx bx-refresh text-xl mr-2 text-orange-500 group-hover:bg-orange-500 group-hover:text-white transition duration-500 ease-in-out bg-slate-50 px-1.5 py-0.5 rounded-full shadow-md'></i>
                            <span class="text-sm">Reseller</span>
                        </a>
                    </li>
                      
                      <li>
                        <a href="{{ route('affiliate_training.index') }}"
                           class="flex items-center p-2 group rounded-3xl hover:bg-gray-100 group hover:text-orange-500 transition duration-500 ease-in-out {{ request()->routeIs('affiliate_training.index') ? 'bg-orange-500 text-gray-50' : 'text-gray-50' }}">
                          <i class='bx bx-refresh text-xl mr-2 text-orange-500 group-hover:bg-orange-500 group-hover:text-white transition duration-500 ease-in-out bg-slate-50 px-1.5 py-0.5 rounded-full shadow-md'></i>
                          <span class="text-sm">Affiliate Training</span>
                        </a>
                      </li>
                      
                      <li>
                        <a href="{{ route('dfy_sales_setup.index') }}"
                           class="flex items-center p-2 group rounded-3xl hover:bg-gray-100 group hover:text-orange-500 transition duration-500 ease-in-out {{ request()->routeIs('dfy_sales_setup.index') ? 'bg-orange-500 text-gray-50' : 'text-gray-50' }}">
                          <i class='bx bx-refresh text-xl mr-2 text-orange-500 group-hover:bg-orange-500 group-hover:text-white transition duration-500 ease-in-out bg-slate-50 px-1.5 py-0.5 rounded-full shadow-md'></i>
                          <span class="text-sm">DFY Sales Setup</span>
                        </a>
                      </li>
                      
                      <li>
                        <a href="{{ route('dfy_agency_setup.index') }}"
                           class="flex items-center p-2 group rounded-3xl hover:bg-gray-100 group hover:text-orange-500 transition duration-500 ease-in-out {{ request()->routeIs('dfy_agency_setup.index') ? 'bg-orange-500 text-gray-50' : 'text-gray-50' }}">
                          <i class='bx bx-refresh text-xl mr-2 text-orange-500 group-hover:bg-orange-500 group-hover:text-white transition duration-500 ease-in-out bg-slate-50 px-1.5 py-0.5 rounded-full shadow-md'></i>
                          <span class="text-sm">DFY Agency Setup</span>
                        </a>
                      </li>
                      
                      <li>
                        <a href="{{ route('8_week_coaching_program.index') }}"
                           class="flex items-center p-2 group rounded-3xl hover:bg-gray-100 group hover:text-orange-500 transition duration-500 ease-in-out {{ request()->routeIs('8_week_coaching_program.index') ? 'bg-orange-500 text-gray-50' : 'text-gray-50' }}">
                          <i class='bx bx-refresh text-xl mr-2 text-orange-500 group-hover:bg-orange-500 group-hover:text-white transition duration-500 ease-in-out bg-slate-50 px-1.5 py-0.5 rounded-full shadow-md'></i>
                          <span class="text-sm">8 Week Coaching Program</span>
                        </a>
                      </li>
                      
                      <li>
                        <a href="{{ route('unlimited_traffic.index') }}"
                           class="flex items-center p-2 group rounded-3xl hover:bg-gray-100 group hover:text-orange-500 transition duration-500 ease-in-out {{ request()->routeIs('unlimited_traffic.index') ? 'bg-orange-500 text-gray-50' : 'text-gray-50' }}">
                          <i class='bx bx-refresh text-xl mr-2 text-orange-500 group-hover:bg-orange-500 group-hover:text-white transition duration-500 ease-in-out bg-slate-50 px-1.5 py-0.5 rounded-full shadow-md'></i>
                          <span class="text-sm">Unlimited Traffic</span>
                        </a>
                      </li>
                      
                      <li>
                        <a href="{{ route('support.index') }}"
                           class="flex items-center p-2 group rounded-3xl hover:bg-gray-100 group hover:text-orange-500 transition duration-500 ease-in-out {{ request()->routeIs('support.index') ? 'bg-orange-500 text-gray-50' : 'text-gray-50' }}">
                          <i class='bx bx-refresh text-xl mr-2 text-orange-500 group-hover:bg-orange-500 group-hover:text-white transition duration-500 ease-in-out bg-slate-50 px-1.5 py-0.5 rounded-full shadow-md'></i>
                          <span class="text-sm">Support</span>
                        </a>
                      </li>
                      
                </div>




              <div class=" space-y-2 flex flex-col justify-between">
                <hr class="border border-slate-300">
                <li class="">
                    <a href="{{ route('auth.logout') }}"
                        class="flex items-center text-white p-2 group  rounded-3xl border border-white  hover:bg-gray-100 group hover:text-orange-500 transition duration-500 ease-in-out">
                        <i
                            class='bx bx-exit text-xl mr-2 text-orange-500 group-hover:bg-orange-500 group-hover:text-white transition duration-500 ease-in-out bg-slate-50 px-1.5 py-0.5 rounded-full shadow-md'></i>
                        <span class="text-sm capitalize">Log out</span>
                    </a>
                </li>
              </div>
            </ul>
        </div>
    </div>
</aside>
