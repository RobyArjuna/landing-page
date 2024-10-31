<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumni Tracer</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gradient-to-r from-green-100 to-blue-50">
    <!-- Navbar -->
    <nav class="bg-white shadow-md">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <!-- Logo Section -->
            <div class="flex items-center space-x-1">
                <img src="{{ asset('images/logo.png') }}" alt="UMY Logo" class="h-8">
                <span class="text-lg font-semibold text-gray-800">UMY Alumni</span>
                <img src="{{ asset('images/images.png') }}" alt="CDC Logo" class="h-8">
                <span class="text-lg font-semibold text-gray-800">CDC</span>
            </div>


            <!-- Links Section (hidden on small screens) -->
            <div class="hidden md:flex space-x-8">
                <a href="#" class="text-gray-600 hover:text-green-600 hover:underline hover:underline-offset-4 font-medium">Home</a>
                <a href="#" class="text-gray-600 hover:text-green-600 hover:underline hover:underline-offset-4 font-medium">Kuesioner</a>
                <a href="#" class="text-gray-600 hover:text-green-600 hover:underline hover:underline-offset-4 font-medium">CV Builder</a>
                <a href="#" class="text-gray-600 hover:text-green-600 hover:underline hover:underline-offset-4 font-medium">About</a>
            </div>



            <!-- Sign In Button (hidden on small screens) -->
            <div class="hidden md:block">
                <a href="#" class="bg-green-800 text-white px-4 py-2 rounded-full font-medium hover:bg-green-600">Sign In</a>
            </div>

            <!-- Mobile Menu Button -->
            <div class="md:hidden flex items-center">
                <button id="navbar-toggle" class="text-gray-600 focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="navbar-menu" class="hidden md:hidden bg-white shadow-lg">
            <a href="#" class="block px-4 py-2 text-gray-600 hover:text-blue-600">Home</a>
            <a href="#" class="block px-4 py-2 text-gray-600 hover:text-blue-600">Kuesioner</a>
            <a href="#" class="block px-4 py-2 text-gray-600 hover:text-blue-600">CV Builder</a>
            <a href="#" class="block px-4 py-2 text-gray-600 hover:text-blue-600">About</a>
            <a href="#" class="block px-4 py-2 text-blue-500 font-medium">Sign In</a>
        </div>
    </nav>

    <!-- Page Content -->
    <div class="mx-auto px-6 py-12 max-w-7xl">
        <div class="p-10 flex flex-col md:flex-row items-center justify-center md:justify-between text-center md:text-left space-y-6 md:space-y-0 md:space-x-10">
            <!-- Text Content -->
            <div class="md:w-1/2">
                <h1 class="text-4xl font-bold text-gray-800 mb-6">Empowering Alumni With The University Alumni Tracer</h1>
                <p class="text-gray-600 mb-8">Track the success of our graduates and stay connected with the University Alumni Tracer Management Information System.</p>
                <button class="bg-green-800 text-white px-6 py-2 rounded-full font-semibold hover:bg-green-600 transition">Learn More</button>
            </div>

            <!-- Image Content -->
            <div class="md:w-1/2 relative"> <!-- Added relative positioning -->
                <img src="{{ asset('images/people.png') }}" alt="Alumni Tracer" class="mx-auto md:mx-0">

                <!-- Positioning the text -->
                <p class="absolute right-0 bottom-0 ml-4 mt-8 text-gray-500 text-lg font-semibold">50% Career Growth</p>
            </div>

        </div>
    </div>


    <div class="container mx-auto px-6 py-12">
        <div class="bg-white rounded-3xl shadow-lg p-8 w-8/12 mx-auto h-2/3">
            <h2 class="text-center text-2xl font-bold text-green-800 mb-8">Apa yang akan kamu dapatkan di Tracer Study?</h2>
            <span class="block text-center text-gray-800 text-opacity-50 mb-8">Lorem ipsum dolor sit amet consectetur</span>
            <div class="flex flex-wrap justify-center gap-8">
                <!-- Data Kuesioner Card -->
                <div class="bg-white p-6 rounded-lg shadow-md text-center w-64 transition transform hover:bg-blue-50 hover:shadow-lg hover:-translate-y-1">
                    <h3 class="text-lg font-bold text-gray-700 hover:text-blue-600">Data Kuesioner</h3>
                    <p class="text-gray-500 mt-4">Manage your profile after graduation from university.</p>
                    <button class="mt-6 text-blue-600 font-semibold hover:text-blue-800 flex items-center justify-center">
                        Get Started
                        <svg class="w-4 h-4 ml-2 text-blue-600 hover:text-blue-800" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                </div>

                <!-- CV Builder Card -->
                <div class="bg-white p-6 rounded-lg shadow-md text-center w-64 transition transform hover:bg-blue-50 hover:shadow-lg hover:-translate-y-1">
                    <h3 class="text-lg font-bold text-gray-700 hover:text-blue-600">CV Builder</h3>
                    <p class="text-gray-500 mt-4">Easily update and share your CV for career opportunities.</p>
                    <button class="mt-6 text-blue-600 font-semibold hover:text-blue-800 flex items-center justify-center">
                        Learn More
                        <svg class="w-4 h-4 ml-2 text-blue-600 hover:text-blue-800" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                </div>

                <div class="w-8/12 mx-auto mt-4 h-1 bg-green-800 rounded-full"></div>
            </div>
        </div>

    </div>

    <div class="max-w-screen-lg mx-auto px-6 py-12 bg-gradient-to-r from-green-100 to-blue-50 flex flex-col md:flex-row items-center justify-center">

        <!-- Teks Career Development Center -->
        <div class="md:w-2/3 text-center md:text-left">
            <h3 class="text-2xl font-bold text-green-800 mb-8">Career Development Center UMY</h3>
            <p class="text-gray-600 mb-10">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. A ipsum vitae facilis, architecto nihil enim alias assumenda laudantium odit totam, dolorum rerum obcaecati porro qui. Explicabo quas soluta perspiciatis iste at ad enim atque sunt, nihil ipsum aspernatur minus quia exercitationem quidem. Minus animi illo, laboriosam impedit enim dignissimos deserunt totam quibusdam molestiae nesciunt debitis tempore assumenda sint eum. Vitae dignissimos, quas reiciendis earum recusandae numquam odio beatae aperiam error voluptas iusto doloremque! Voluptate, incidunt atque perspiciatis quaerat temporibus ratione facilis nesciunt beatae debitis repellat dolores fuga veritatis quis itaque molestias iure. Minus non, facere iste nostrum autem magnam maiores!
            </p>
        </div>

        <!-- Gambar -->
        <div class="w-full md:w-1/3 mb-6 md:mb-0 flex justify-center">
            <img src="{{ asset('images/woman.png') }}" alt="Career Development" class="rounded-full w-3/4 md:w-full">
        </div>
    </div>


    <!-- Footer Section with Statistics -->
    <div class="container mx-auto px-6 py-8 mt-8 bg-gradient-to-r from-green-100 to-blue-50 rounded-lg shadow-lg">
        <div class="flex justify-around text-center gap-4">
            <div class="border-b-4 border-red-500 pb-2">
                <h4 class="text-3xl font-bold text-gray-800">25</h4>
                <p class="text-gray-600">Lorem Ipsum</p>
            </div>
            <div class="border-b-4 border-blue-500 pb-2">
                <h4 class="text-3xl font-bold text-gray-800">120</h4>
                <p class="text-gray-600">Dolor Sit Amet</p>
            </div>
            <div class="border-b-4 border-green-500 pb-2">
                <h4 class="text-3xl font-bold text-gray-800">120</h4>
                <p class="text-gray-600">Consectetur Adipiscing</p>
            </div>
            <div class="border-b-4 border-yellow-500 pb-2">
                <h4 class="text-3xl font-bold text-gray-800">120</h4>
                <p class="text-gray-600">Elit Sed Do</p>
            </div>
            <div class="border-b-4 border-purple-500 pb-2">
                <h4 class="text-3xl font-bold text-gray-800">120</h4>
                <p class="text-gray-600">Eiusmod Tempor</p>
            </div>
            <div class="border-b-4 border-pink-500 pb-2">
                <h4 class="text-3xl font-bold text-gray-800">120</h4>
                <p class="text-gray-600">Incididunt Ut</p>
            </div>
        </div>

    </div>


    <script>
        document.getElementById('navbar-toggle').addEventListener('click', function() {
            const menu = document.getElementById('navbar-menu');
            menu.classList.toggle('hidden');
        });
    </script>

</body>

</html>