<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100">

    <!-- Navbar -->
    <nav class="bg-white shadow-md fixed top-0 left-0 w-full z-10">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center py-4">

                <!-- Logo -->
                <div class="text-2xl font-bold text-blue-500">
                    <a href="#">Hawler Medical University</a>
                </div>

                <!-- Menu Items (Hidden on mobile) -->
                <div class="hidden md:flex space-x-6">
                    <a href="#" class="text-gray-600 hover:text-blue-500">Dashboard</a>
                    <a href="#" class="text-gray-600 hover:text-blue-500">About</a>
                    <a href="#" class="text-gray-600 hover:text-blue-500">Services</a>
                    <a href="#" class="text-gray-600 hover:text-blue-500">Contact</a>
                </div>

                <!-- Mobile menu button -->
                <div class="md:hidden">
                    <button id="nav-toggle" class="text-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16m-7 6h7" />
                        </svg>
                    </button>
                </div>

            </div>

            <!-- Mobile Menu (Initially Hidden) -->
            <div id="nav-content" class="hidden md:hidden">
                <a href="#" class="block px-4 py-2 text-sm text-gray-600 hover:bg-gray-100">Dashboard</a>
                <a href="#" class="block px-4 py-2 text-sm text-gray-600 hover:bg-gray-100">About</a>
                <a href="#" class="block px-4 py-2 text-sm text-gray-600 hover:bg-gray-100">Services</a>
                <a href="#" class="block px-4 py-2 text-sm text-gray-600 hover:bg-gray-100">Contact</a>
            </div>

        </div>
    </nav>

    <!-- Image Section -->
    <div class="w-full  overflow-hidden  " style="height: 1000px;">
        <img src="{{ asset('storage/images/erbil-travel.jpg') }}" alt="Below Navbar Image"
            class="w-full h-auto object-cover rounded-md">
    </div>
    <!-- Overlay Text -->
    <div class="absolute inset-0 flex flex-col items-center justify-start text-white bg-opacity-50 mt-24">
        <h1 class="text-8xl font-bold mb-4">Hawler Medical University</h1>
        <p class="text-2xl text-center">We provide you with our best scientific experience and professionals for our
            academics and students to achieve an optimal learning outcome.</p>
    </div>


    </div>
</body>

</html>
