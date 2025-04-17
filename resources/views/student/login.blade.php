<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Portal</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <style>
        .btn-glow:hover {
            box-shadow: 0 0 15px rgba(239, 68, 68, 0.7);
            transform: translateY(-2px);
        }
        .btn-glow {
            transition: all 0.3s ease;
        }
    </style>
</head>

<body class="bg-gray-50">
<div class="container px-6 mx-auto">
    <div class="flex flex-col text-center md:text-left md:flex-row h-screen justify-evenly md:items-center">
        <div class="flex flex-col w-full">
            <h1 class="text-5xl text-gray-800 font-bold">Student Portal</h1>
            <p class="mt-4 text-xl text-gray-600">Access your Dashboard resources and deggre</p>
        </div>
        <div class="w-full md:w-full lg:w-9/12 mx-auto md:mx-0">
            <div class="bg-white p-10 flex flex-col w-full shadow-xl rounded-xl">
                <h2 class="text-2xl font-bold text-gray-800 text-left mb-5">
                    Sign In to Your Account
                </h2>

                <!-- Laravel login form -->
                <form method="POST" action="{{ route('login.student') }}" class="w-full">
                    @csrf
                    <!-- Username or Email -->
                    <div id="input" class="flex flex-col w-full my-5">
                        <label for="email" class="text-gray-500 mb-2">Email Address</label>
                        <input type="email" id="email" name="email" placeholder="Enter your school email"
                            class="appearance-none border-2 border-gray-100 rounded-lg px-4 py-3 placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-red-500 focus:shadow-lg"
                            required />
                    </div>

                    <!-- Password -->
                    <div id="input" class="flex flex-col w-full my-5">
                        <label for="password" class="text-gray-500 mb-2">Password</label>
                        <input type="password" id="password" name="password" placeholder="Enter your password"
                            class="appearance-none border-2 border-gray-100 rounded-lg px-4 py-3 placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-red-500 focus:shadow-lg"
                            required />
                        <div class="mt-2 text-right">
                            <a href="#" class="text-sm text-red-600 hover:text-red-800">Forgot password?</a>
                        </div>
                    </div>

                    <!-- Remember Me -->
                    <div class="flex items-center mb-5">
                        <input id="remember" name="remember" type="checkbox" class="h-4 w-4 text-red-600 focus:ring-red-500 border-gray-300 rounded">
                        <label for="remember" class="ml-2 block text-sm text-gray-700">
                            Remember me
                        </label>
                    </div>

                    <!-- Submit Button - Now Larger and More Prominent -->
                    <div id="button" class="flex flex-col w-full my-5">
                        <button type="submit" class="btn-glow text-white bg-gradient-to-r from-red-500 via-red-600 to-red-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 font-bold rounded-lg px-12 py-4 text-center text-xl w-full">
                            <div class="flex flex-row items-center justify-center space-x-3">
                                <i class="fas fa-sign-in-alt text-xl"></i>
                                <span class="text-2xl">SIGN IN</span>
                            </div>
                        </button>
                    </div>

                    @if ($errors->any())
                        <div class="text-red-600 mb-4 p-3 bg-red-50 rounded-lg">
                            <ul class="list-disc list-inside">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="text-center mt-6">
                        <p class="text-gray-600">Don't have an account? <a href="{{ route('student.registar')}}" class="text-red-600 font-semibold hover:text-red-800">create account</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>