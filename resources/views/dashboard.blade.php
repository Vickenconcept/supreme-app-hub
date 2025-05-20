<x-app-layout>
    @section('title')
        <span class="">Dashboard</span>
    @endsection

    <div class="max-w-5xl mx-auto py-16 px-5 lg:px-0" x-data="appList">
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-3 ">
            <template x-for="app in apps" :key="app.id">
                <div class="bg-[#0a0f2c] text-white rounded-2xl shadow-2xl shadow-[#0a0f2c] overflow-hidden">
                    <img :src="app.image" alt="App Image" class="w-full h-40 object-cover">

                    <div class="p-5 flex flex-col gap-3">
                        <!-- App Title -->
                        <h2 class="text-xl font-bold" x-text="app.title">App Name</h2>

                        <!-- App Description -->
                        <p class="text-sm text-gray-300 line-clamp-3 h-16" x-text="app.description">
                           
                        </p>

                        <!-- Buttons -->
                        <div class="flex flex-col sm:flex-row gap-3 mt-4">
                            <a :href="app.login" target="_blank"
                                class="flex-1 text-center bg-orange-500 hover:bg-orange-600 text-white py-2 rounded-lg font-medium transition">
                                Login
                            </a>
                            <a :href="app.register" target="_blank"
                                class="flex-1 text-center border border-orange-500 text-orange-500 hover:bg-orange-500 hover:text-white py-2 rounded-lg font-medium transition">
                                Reseller
                            </a>
                        </div>
                    </div>
                </div>
            </template>



        </div>
        <script>
            document.addEventListener('alpine:init', () => {
                Alpine.data('appList', () => ({
                    apps: [{
                            id: 1,
                            title: 'Avater Crew',
                            description: 'AI bot creator platform. Enables users to design personalized bots for marketing, booking calendars, and lead generation.',
                            image: '{{ asset('images/avatercrew.png') }}',
                            login: 'https://avatarcrewapp.com/login',
                            register: 'https://avatarcrewapp.com/resellers/register'
                        },
                        {
                            id: 2,
                            title: 'TrustComplify',
                            description: 'Review management system. Collects reviews via embeddable widgets, generates leads, and builds customer trust online.',
                            image: '{{ asset('images/trustcomplify.png') }}',
                            login: 'https://www.trustcomplify.com/login',
                            register: 'https://www.trustcomplify.com/resellers/register'
                        },
                        {
                            id: 3,
                            title: 'FluenceGrid',
                            description: 'An influencer hub application designed to connect brands with influencers. Focused on campaign activities, outreach, and collaboration.',
                            image: '{{ asset('images/fluencegrid.png') }}',
                            login: 'https://fluencegrid.com/login',
                            register: 'https://fluencegrid.com/resellers/register'
                        },
                        {
                            id: 4,
                            title: 'My Converge AI',
                            description: 'An AI-powered course creation platform (video and text). Generate and deliver dynamic course content using artificial intelligence.',
                            image: '{{ asset('images/myconvergai.png') }}',
                            login: 'https://myconvergeai.com/login',
                            register: 'https://myconvergeai.com/resellers/register'
                        },
                        {
                            id: 5,
                            title: 'TubeTargeter',
                            description: 'Track your video topics. Boost your campaigns. Get in touch with influencers. Find new ideas. Create your own ads',
                            image: '{{ asset('images/tubetargetapp.png') }}',
                            login: 'https://www.tubetargeterapp.com/public/login',
                            register: 'https://www.tubetargeterapp.com/public/reseller'
                        },
                        {
                            id: 6,
                            title: 'Socilinks',
                            description: 'Socilinks',
                            image: '{{ asset('images/sociallinks.png') }}',
                            login: 'https://socilinks.com/login',
                            register: 'https://socilinks.com/reseller/signup'
                        },

                        {
                            id: 7,
                            title: 'Xteract',
                            description: 'xteract',
                            image: '{{ asset('images/xteract.png') }}',
                            login: 'https://xteract.com/login',
                            register: 'https://xteract.com/login'
                        },
                        {
                            id: 8,
                            title: 'AI Tubemonetizer',
                            description: 'AI Tubemonetizer is more than just an agency. We empower brands with easy-to-use software tools, actionable insights, and expert agency services to grow their YouTube channel.',
                            image: '{{ asset('images/aitubemonetizer.png') }}',
                            login: 'https://aitubemonetizer.com/',
                            register: 'https://aitubemonetizer.com/'
                        },
                        {
                            id: 9,
                            title: 'Tubecentric',
                            description: 'tubecentric',
                            image: '{{ asset('images/tubecentric.png') }}',
                            login: 'http://tubecentric.com/',
                            register: 'http://tubecentric.com/'
                        },
                        {
                            id: 10,
                            title: 'Tvengager',
                            description: 'tvengager',
                            image: '{{ asset('images/tvengager.png') }}',
                            login: 'https://app.tvengager.com/login',
                            register: 'https://app.tvengager.com/login'
                        },
                        {
                            id: 11,
                            title: 'Qrdominator',
                            description: 'qrdominator',
                            image: '{{ asset('images/qrdominator.png') }}',
                            login: 'https://qrdominator.com/auth/reseller/register',
                            register: 'https://qrdominator.com/auth/reseller/register'
                        },

                    ]
                }))
            })
        </script>
    </div>



</x-app-layout>
