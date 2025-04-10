<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Portal</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<div class="container px-6 mx-auto">
    <div class="flex flex-col text-center md:text-left md:flex-row h-screen justify-evenly md:items-center">
        <div class="flex flex-col w-full">
            <h1 class="text-5xl text-gray-800 font-bold">Student Portal</h1>
        </div>
        <div class="w-full md:w-full lg:w-9/12 mx-auto md:mx-0">
            <div class="bg-white p-10 flex flex-col w-full shadow-xl rounded-xl">
                <h2 class="text-2xl font-bold text-gray-800 text-left mb-5">
                    Sign In
                </h2>

                <!-- Laravel login form -->
                <form method="POST" action="{{ route('login.student') }}" class="w-full">
                    @csrf
                    <!-- Username or Email -->
                    <div id="input" class="flex flex-col w-full my-5">
                        <label for="email" class="text-gray-500 mb-2">Email</label>
                        <input type="email" id="email" name="email" placeholder="Please insert your email"
                            class="appearance-none border-2 border-gray-100 rounded-lg px-4 py-3 placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-green-600 focus:shadow-lg"
                            required />
                    </div>

                    <!-- Password -->
                    <div id="input" class="flex flex-col w-full my-5">
                        <label for="password" class="text-gray-500 mb-2">Password</label>
                        <input type="password" id="password" name="password"
                            placeholder="Please insert your password"
                            class="appearance-none border-2 border-gray-100 rounded-lg px-4 py-3 placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-green-600 focus:shadow-lg"
                            required />
                    </div>

                    <!-- Submit Button -->
                    <div id="button" class="flex flex-col w-full my-5">
                        <button type="submit" class="text-white bg-gradient-to-r from-red-500 via-red-500 to-red-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 shadow-lg shadow-red-500/50 dark:shadow-lg dark:shadow-red-800/80 font-medium rounded-lg  px-10 py-2 text-center me-2 mb-0 text-xl">
                            <div class="flex flex-row items-center justify-center">
                                <div class="mr-2">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1">
                                        </path>
                                    </svg>
                                </div>
                                <div class="font-bold">Sign In</div>
                            </div>
                        </button>
                    </div>

                    @if ($errors->any())
                        <div class="text-red-600 mb-4">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </form>
            </div>
        </div>
    </div>
</div>
