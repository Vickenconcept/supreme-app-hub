<x-guest-layout>

    <section  class="min-h-screen overflow-y-hidden">
        <img id="scrollBox" src="https://plus.unsplash.com/premium_photo-1680985551058-2759df426d0d?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OXx8YXBwfGVufDB8fDB8fHww"
            alt="" class="w-full h-screen lg:h-full object-fit object-center">
        <div
            class="h-full w-full fixed top-0 right-0 flex flex-col md:flex-row items-center justify-center bg-[#0a0f2c]/80 text-white">

            <div class=" w-full py-3 px-5 top-0 absolute">
                @if (Route::has('login'))
                    <nav class="-mx-3 flex flex-1 justify-end">
                        @auth
                            <a href="{{ url('/dashboard') }}"
                                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                Dashboard
                            </a>
                        @else
                            <a href="{{ route('login') }}"
                                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                Log in
                            </a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}"
                                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                    Register
                                </a>
                            @endif
                        @endauth
                    </nav>
                @endif
            </div>
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 pt-20 pb-16 text-center lg:pt-32">
                <p class="mx-auto -mt-4 max-w-2xl text-lg tracking-tight text-slate-50 sm:mt-6">Welcome to
                    <span class="border-b border-dotted border-slate-50">Automation Toolkit</span>
                </p>

                <h1 class="mx-auto max-w-4xl font-display text-5xl font-medium tracking-tight text-gray-50 sm:text-7xl">
                    <span class="inline-block">Your
                        <span class="relative whitespace-nowrap text-orange-500">
                            <svg aria-hidden="true" viewBox="0 0 418 42"
                                class="absolute top-2/3 left-0 h-[0.58em] w-full fill-orange-300/70"
                                preserveAspectRatio="none">
                                <path
                                    d="M203.371.916c-26.013-2.078-76.686 1.963-124.73 9.946L67.3 12.749C35.421 18.062 18.2 21.766 6.004 25.934 1.244 27.561.828 27.778.874 28.61c.07 1.214.828 1.121 9.595-1.176 9.072-2.377 17.15-3.92 39.246-7.496C123.565 7.986 157.869 4.492 195.942 5.046c7.461.108 19.25 1.696 19.17 2.582-.107 1.183-7.874 4.31-25.75 10.366-21.992 7.45-35.43 12.534-36.701 13.884-2.173 2.308-.202 4.407 4.442 4.734 2.654.187 3.263.157 15.593-.78 35.401-2.686 57.944-3.488 88.365-3.143 46.327.526 75.721 2.23 130.788 7.584 19.787 1.924 20.814 1.98 24.557 1.332l.066-.011c1.201-.203 1.53-1.825.399-2.335-2.911-1.31-4.893-1.604-22.048-3.261-57.509-5.556-87.871-7.36-132.059-7.842-23.239-.254-33.617-.116-50.627.674-11.629.54-42.371 2.494-46.696 2.967-2.359.259 8.133-3.625 26.504-9.81 23.239-7.825 27.934-10.149 28.304-14.005.417-4.348-3.529-6-16.878-7.066Z">
                                </path>
                            </svg>
                            <span class="relative">Personal</span></span>
                    </span>
                    <span class="inline-block">Toolkit</span>
                    {{-- <span class="inline-block">App Store</span> --}}
                </h1>

                <p class="mx-auto mt-9 max-w-2xl text-lg tracking-tight text-slate-50 sm:mt-6">
                    {{-- <span class="inline-block">Bring functionalities of other apps</span> --}}
                    <span class="inline-block">One Account, Many Experiences</span>
                </p>

                <div class="mt-12 flex flex-col justify-center gap-y-5 sm:mt-10 sm:flex-row sm:gap-y-0 sm:gap-x-6">
                    <a class="group inline-flex items-center justify-center rounded-full py-2 px-8 text-sm font-semibold focus:outline-none focus-visible:outline-2 focus-visible:outline-offset-2 bg-gray-50 text-orange-500 hover:bg-orange-600 hover:text-slate-100 active:bg-slate-800 active:text-slate-300 focus-visible:outline-slate-900 animate-fade-in-left transition duration-500 ease-in-out"
                        href="{{ route('register') }}">
                        <span class="">Sign up</span>
                    </a>
                    <div class="relative flex flex-1 flex-col items-stretch sm:flex-none" data-headlessui-state="">
                        <a href="{{ route('login') }}"
                            class="group inline-flex ring-1 items-center justify-center rounded-full py-2 px-8 text-sm focus:outline-none ring-slate-200 text-gray-50 hover:text-gray-300 hover:ring-slate-300 active:bg-slate-100 active:text-gray-50 focus-visible:outline-blue-600 focus-visible:ring-slate-300 animate-fade-in-right"
                            id="headlessui-menu-button-:r4:" aria-haspopup="true" aria-expanded="false"
                            data-headlessui-state="" type="button">
                            <span class="">Sign in</span>
                        </a>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <script>
        const image = document.getElementById("scrollBox");
        let direction = 1;
        let position = 0;
    
        function animate() {
            position += direction * 0.1 // Adjust speed here
    
            if (position > 5) direction = -1; // Max down
            if (position < -40) direction = 1; // Max up
            // if (position > 20) direction = -1; // Max down
            // if (position < -20) direction = 1; // Max up
    
            image.style.transform = `translateY(${position}px)`;
    
            requestAnimationFrame(animate);
        }
    
        animate();
    </script>
    


</x-guest-layout>
