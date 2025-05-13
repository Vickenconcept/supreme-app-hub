<x-guest-layout>


    <section class="min-h-screen overflow-y-hidden">
        <img src="https://plus.unsplash.com/premium_photo-1680985551058-2759df426d0d?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OXx8YXBwfGVufDB8fDB8fHww"
            alt="" class="w-full h-full object-fit object-center">
        <div
            class="h-full w-full fixed top-0 right-0 overflow-y-auto flex flex-col md:flex-row items-center justify-center bg-[#0a0f2c]/80 text-white">

            {{-- Left Section --}}
            <div class="w-full md:w-1/2 p-10 space-y-20">
                <div class="space-y-4">
                    <div class="text-3xl font-medium text-orange-500 pb-10">Fauget</div>
                    <h1 class="text-4xl md:text-5xl font-medium">Create<br>New Account</h1>
                    <p class="text-gray-300">
                        Already Registered?
                        <a href="{{ route('login') }}" class="text-orange-400 hover:underline">Login</a>
                    </p>
                </div>
                <div class="space-y-4 hidden md:block">
                    <div class="w-28 h-0.5 bg-white my-4"></div>
                    <p class="text-gray-400">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean semper
                        mauris
                        in
                        magna venenatis suscipit.</p>
                    <a href="#"
                        class="inline-block bg-orange-500 text-white px-6 py-2 rounded-full mt-4 hover:bg-orange-600 transition">
                        Learn More
                    </a>
                </div>
            </div>

            {{-- Right Section --}}
            <div class="w-full md:w-1/2 px-6 py-10 md:p-20 md:py-20">
                <div class="bg-slate-400/25 backdrop-blur-lg p-8 md:p-12 rounded-3xl shadow-xl">
                    <h2 class="text-2xl md:text-3xl font-medium text-center mb-6">Register</h2>
                    <form method="POST" action="{{ route('auth.register') }}" class="space-y-4">
                        @csrf

                        {{-- Name --}}
                        <div>
                            <label class="block mb-1 ml-2 text-sm font-medium">Name</label>
                            <input type="text" name="name" value="{{ old('name') }}" required autofocus
                                placeholder="Enter Name"
                                class="w-full rounded-full px-4 py-2 bg-white/20 text-white placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-orange-400">
                            @error('name')
                                <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Email --}}
                        <div>
                            <label class="block mb-1 ml-2 text-sm font-medium">Email</label>
                            <input type="email" name="email" value="{{ old('email') }}" required
                                placeholder="Enter email"
                                class="w-full rounded-full px-4 py-2 bg-white/20 text-white placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-orange-400">
                            @error('email')
                                <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        
                        {{-- Password --}}
                        <div>
                            <label class="block mb-1 ml-2 text-sm font-medium">Password</label>
                            <input type="password" name="password" required placeholder="Enter password"
                                class="w-full rounded-full px-4 py-2 bg-white/20 text-white placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-orange-400">
                            @error('password')
                                <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label class="block mb-1 ml-2 text-sm font-medium">Confirm Password</label>
                            <input type="password" name="password_confirmation" required placeholder="Confirm password"
                                class="w-full rounded-full px-4 py-2 bg-white/20 text-white placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-orange-400">
                            @error('password_confirmation')
                                <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>



                        {{-- Submit --}}
                        <div class="flex justify-center mt-6">
                            <button type="submit"
                                class=" bg-orange-500 text-white font-medium py-2 px-8 rounded-full hover:bg-orange-600 transition">
                                <span id="hiddenText" class="hidden">
                                    <i class='bx bx-loader-alt animate-spin'></i>
                                </span>
                                <span>Sign Up </span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>
