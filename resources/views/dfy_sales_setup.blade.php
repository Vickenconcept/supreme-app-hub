<x-app-layout>
    <div class="container mx-auto py-8">

        @section('title')
            <span class="">DFY Sales Setup</span>
        @endsection

        <div class="max-w-xl mx-auto mt-10 bg-white border border-gray-200 shadow-lg rounded-xl p-6">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">📦 Sales Page Setup Instructions</h2>

            <p class="text-gray-700 mb-4">
                Hey there,<br><br>
                Thank you for your patronage.<br>
                To enable us deliver the setup of your <strong>11 sales pages</strong>, please send us the following
                details:
            </p>

            <ul class="list-disc list-inside text-gray-700 mb-4 space-y-1">
                <li>Your Website URL</li>
                <li>cPanel URL</li>
                <li>cPanel Username & Password</li>
                <li>Your Logo</li>
                <li>Contact Details</li>
            </ul>

            <p class="text-gray-700 mb-6">
                Kindly submit the details by opening a ticket at:<br>
                <a href="https://supremewebcustomercare.freshdesk.com" target="_blank"
                    class="text-blue-600 underline hover:text-blue-800">supremewebcustomercare.freshdesk.com</a><br>
                or email us at:<br>
                <a href="mailto:support@supremewebcustomercare.freshdesk.com"
                    class="text-blue-600 underline hover:text-blue-800">support@supremewebcustomercare.freshdesk.com</a>
            </p>

            <div class="bg-green-100 text-green-800 p-4 rounded-md text-sm font-medium">
                Once received, we will deliver within <strong>7 days</strong>.
            </div>

            <p class="text-sm text-gray-500 mt-6">Thank you once again!</p>
        </div>

    </div>
</x-app-layout>
