<x-app-layout>
    @section('title')
        <span class="">Dashboard</span>
    @endsection

    <div class="max-w-5xl mx-auto py-16 px-5 lg:px-0">
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-3 ">
            <div class="bg-[#0a0f2c] text-white rounded-2xl shadow-2xl overflow-hidden">
                <img src="https://plus.unsplash.com/premium_photo-1680985551058-2759df426d0d?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OXx8YXBwfGVufDB8fDB8fHww" alt="App Image" class="w-full h-40 object-cover">

                <div class="p-5 flex flex-col gap-3">
                    <!-- App Title -->
                    <h2 class="text-xl font-bold">App Name</h2>

                    <!-- App Description -->
                    <p class="text-sm text-gray-300">
                        A short and engaging description of what this app does. Highlight key benefits or functionality.
                    </p>

                    <!-- Buttons -->
                    <div class="flex flex-col sm:flex-row gap-3 mt-4">
                        <a href="/app-login-url"
                            class="flex-1 text-center bg-orange-500 hover:bg-orange-600 text-white py-2 rounded-lg font-medium transition">
                            Login
                        </a>
                        <a href="/app-register-url"
                            class="flex-1 text-center border border-orange-500 text-orange-500 hover:bg-orange-500 hover:text-white py-2 rounded-lg font-medium transition">
                            Reseller
                        </a>
                    </div>
                </div>
            </div>
           

            
        </div>
    </div>

</x-app-layout>
