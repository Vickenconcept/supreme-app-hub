<!DOCTYPE html>
<html lang="en" class="h-full bg-white ">

<head>
    <x-seo::meta />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @seo([
        'title' => 'My Automation Toolkit',
        'description' => 'My Automation Toolkit',
        'image' => asset('images/login-image.png'),
        'site_name' => config('app.name'),
        'favicon' => asset('images/fav-image.png'),
    ])

    <title>My Automation Toolkit</title>

    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>


    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://unpkg.com/@alpinejs/focus" defer></script>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-lite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    {{-- <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.1/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.1/dist/flowbite.min.js"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/apexcharts@3.46.0/dist/apexcharts.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>



    @yield('styles')




    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    @vite(['resources/js/app.js'])

    {{-- <link rel="stylesheet" href="{{ asset('build/assets/app-Dbbx3F5k.css') }}">
    <link rel="stylesheet" href="{{ asset('build/assets/app-CE5Kpj__.css') }}"> --}}
    

    @livewireStyles
    @yield('styles')




</head>

<body class="h-screen ">
    <marquee direction="right" scrollamount="120" class="z-50 fixed w-full hidden" id="hiddenLinearPreloader">
        <div class="bg-gradient-to-r from-[#0F1523] from-70%  to-[#B5FFAB] w-[1500px] p-1 rounded-full"></div>
    </marquee>
    <div id="app" class="h-full  text-gray-700 ">
        <x-notification />
        <x-navbar />
        <x-sidebar />

        {{-- <div class="h-full sm:ml-64 bg-slate-200 pt-20 overflow-y-hidden">
            {{ $slot }}
        </div> --}}

        <div class="h-full sm:ml-64 pt-20 bg-gray-100 ">
            <div class="h-full md:rounded-3xl bg-gray-100 pr-1 overflow-hidden">
                <div class="absolute inset-0  bg-no-repeat bg-cover bg-center opacity-25" style="background-image: url('https://plus.unsplash.com/premium_photo-1680985551058-2759df426d0d?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OXx8YXBwfGVufDB8fDB8fHww');">
                </div>
                {{-- <div class="absolute inset-0  bg-no-repeat bg-fit bg-center opacity-25" style="background-image: url('{{ asset('images/login-image.png') }}');">
                </div> --}}
                <!-- Content Layer -->
                <div class="relative h-full overflow-auto z-10">
                    <x-session-msg />
                    {{ $slot }}
                </div>
            </div>
        </div>
    </div>



    @yield('scripts')



    @livewireScripts

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            Livewire.on('refreshPage', () => {
                location.reload();
            });
        });
    </script>

    <script>
        window.addEventListener('beforeunload', function(event) {
            var hiddenText = document.getElementById('hiddenText');
            hiddenText.classList.remove('hidden');
        });

        document.addEventListener("DOMContentLoaded", function() {
            var hiddenLinearPreloader = document.getElementById("hiddenLinearPreloader");

            hiddenLinearPreloader.classList.remove("hidden");

            setTimeout(function() {
                hiddenLinearPreloader.classList.add("hidden");
            }, 2000);
        });
    </script>


</body>

</html>
