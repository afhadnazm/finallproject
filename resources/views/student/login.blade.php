<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Portal - Hawler Medical University</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Animation Keyframes */
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        
        @keyframes slideInUp {
            from { transform: translateY(50px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }
        
        @keyframes slideInLeft {
            from { transform: translateX(-50px); opacity: 0; }
            to { transform: translateX(0); opacity: 1; }
        }
        
        @keyframes slideInRight {
            from { transform: translateX(50px); opacity: 0; }
            to { transform: translateX(0); opacity: 1; }
        }
        
        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.05); }
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }
        
        @keyframes bounce {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-15px); }
        }
        
        @keyframes spin {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }
        
        @keyframes glow {
            0%, 100% { box-shadow: 0 0 5px rgba(239, 68, 68, 0.5); }
            50% { box-shadow: 0 0 20px rgba(239, 68, 68, 0.8); }
        }
        
        @keyframes typing {
            from { width: 0 }
            to { width: 100% }
        }
        
        @keyframes shimmer {
            0% { background-position: -1000px 0; }
            100% { background-position: 1000px 0; }
        }
        
        /* Animation Classes */
        .animate-fadeIn {
            animation: fadeIn 1.2s ease-out forwards;
        }
        
        .animate-slideInUp {
            animation: slideInUp 1s ease-out forwards;
        }
        
        .animate-slideInLeft {
            animation: slideInLeft 1s ease-out forwards;
        }
        
        .animate-slideInRight {
            animation: slideInRight 1s ease-out forwards;
        }
        
        .animate-pulse-slow {
            animation: pulse 3s infinite;
        }
        
        .animate-float {
            animation: float 5s ease-in-out infinite;
        }
        
        .animate-bounce-slow {
            animation: bounce 4s ease-in-out infinite;
        }
        
        .animate-spin-slow {
            animation: spin 15s linear infinite;
        }
        
        .animate-glow {
            animation: glow 2s ease-in-out infinite;
        }
        
        .animate-typing {
            overflow: hidden;
            white-space: nowrap;
            animation: typing 3.5s steps(40, end);
        }
        
        .animate-shimmer {
            background: linear-gradient(to right, rgba(255,255,255,0) 0%, rgba(255,255,255,0.5) 50%, rgba(255,255,255,0) 100%);
            background-size: 1000px 100%;
            animation: shimmer 2s infinite;
        }
        
        /* Animation Delays */
        .delay-100 {
            animation-delay: 0.1s;
        }
        
        .delay-200 {
            animation-delay: 0.2s;
        }
        
        .delay-300 {
            animation-delay: 0.3s;
        }
        
        .delay-400 {
            animation-delay: 0.4s;
        }
        
        .delay-500 {
            animation-delay: 0.5s;
        }
        
        /* Hover Effects */
        .hover-scale {
            transition: transform 0.3s ease;
        }
        
        .hover-scale:hover {
            transform: scale(1.05);
        }
        
        .hover-lift {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .hover-lift:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        
        .hover-glow {
            transition: box-shadow 0.3s ease;
        }
        
        .hover-glow:hover {
            box-shadow: 0 0 15px rgba(239, 68, 68, 0.7);
        }
        
        /* Custom Styles */
        .text-shadow {
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }
        
        .gradient-text {
            background: linear-gradient(90deg, #EF4444, #B91C1C);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }
        
        .glass-effect {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        /* Decorative elements */
        .circle-decoration {
            position: absolute;
            border-radius: 50%;
            z-index: -1;
            opacity: 0.5;
        }
        
        /* Form focus effects */
        .input-focus-effect {
            position: relative;
            overflow: hidden;
        }
        
        .input-focus-effect::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 2px;
            background-color: #EF4444;
            transform: scaleX(0);
            transform-origin: bottom right;
            transition: transform 0.3s ease;
        }
        
        .input-focus-effect:focus-within::after {
            transform: scaleX(1);
            transform-origin: bottom left;
        }
        
        /* Button animation */
        .btn-pulse {
            position: relative;
            overflow: hidden;
        }
        
        .btn-pulse::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 150%;
            height: 150%;
            background: radial-gradient(circle, rgba(255,255,255,0.3) 0%, rgba(255,255,255,0) 70%);
            transform: translate(-50%, -50%) scale(0);
            opacity: 0;
            transition: transform 0.5s ease, opacity 0.5s ease;
        }
        
        .btn-pulse:hover::after {
            transform: translate(-50%, -50%) scale(1);
            opacity: 1;
        }
        
        .btn-glow {
            transition: all 0.3s ease;
        }
        
        .btn-glow:hover {
            box-shadow: 0 0 15px rgba(239, 68, 68, 0.7);
            transform: translateY(-2px);
        }
    </style>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            50: '#fef2f2',
                            100: '#fee2e2',
                            200: '#fecaca',
                            300: '#fca5a5',
                            400: '#f87171',
                            500: '#ef4444',
                            600: '#dc2626',
                            700: '#b91c1c',
                            800: '#991b1b',
                            900: '#7f1d1d',
                        }
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-gray-50 font-sans">
    <!-- Decorative Elements -->
    <div class="circle-decoration bg-primary-200 w-64 h-64 top-40 -left-20 animate-float" style="animation-delay: 0s;"></div>
    <div class="circle-decoration bg-primary-100 w-96 h-96 top-96 -right-40 animate-float" style="animation-delay: 2s;"></div>
    <div class="circle-decoration bg-primary-50 w-48 h-48 bottom-40 left-1/4 animate-float" style="animation-delay: 1s;"></div>
    
    <div class="container px-6 mx-auto min-h-screen flex items-center justify-center relative z-10">
        <div class="flex flex-col md:flex-row w-full max-w-6xl mx-auto items-center justify-between">
            <!-- Left Column - Title and Description -->
            <div class="w-full md:w-5/12 mb-10 md:mb-0 animate-slideInLeft">
                <div class="relative">
                    <div class="absolute -top-10 -left-10 text-9xl text-primary-200 opacity-30 font-bold">"</div>
                    <h1 class="text-5xl font-bold text-gray-800 mb-4 relative z-10">Student Portal</h1>
                    <p class="text-xl text-gray-600 mb-6 max-w-md">Access your Dashboard resources and degree information at Hawler Medical University.</p>
                    <div class="flex items-center space-x-4">
                        <div class="w-12 h-1 bg-primary-600 rounded-full animate-pulse-slow"></div>
                        <p class="text-primary-600 font-medium">Secure Login</p>
                    </div>
                    <div class="mt-8">
                        <div class="flex items-center space-x-4 mb-4">
                            <div class="w-10 h-10 bg-primary-100 rounded-full flex items-center justify-center text-primary-600">
                                <i class="fas fa-graduation-cap"></i>
                            </div>
                            <div>
                                <h3 class="font-medium text-gray-800">Course Materials</h3>
                                <p class="text-sm text-gray-500">Access your lectures, assignments and resources</p>
                            </div>
                        </div>
                        <div class="flex items-center space-x-4 mb-4">
                            <div class="w-10 h-10 bg-primary-100 rounded-full flex items-center justify-center text-primary-600">
                                <i class="fas fa-chart-bar"></i>
                            </div>
                            <div>
                                <h3 class="font-medium text-gray-800">Academic Progress</h3>
                                <p class="text-sm text-gray-500">Track your grades and academic achievements</p>
                            </div>
                        </div>
                        <div class="flex items-center space-x-4">
                            <div class="w-10 h-10 bg-primary-100 rounded-full flex items-center justify-center text-primary-600">
                                <i class="fas fa-calendar-alt"></i>
                            </div>
                            <div>
                                <h3 class="font-medium text-gray-800">Schedule & Events</h3>
                                <p class="text-sm text-gray-500">View your class schedule and university events</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Right Column - Login Form -->
            <div class="w-full md:w-6/12 animate-slideInRight">
                <div class="bg-white p-8 md:p-10 rounded-2xl shadow-xl hover-lift glass-effect relative overflow-hidden">
                    <!-- Decorative elements -->
                    <div class="absolute top-0 right-0 w-32 h-32 bg-primary-100 rounded-full -mr-16 -mt-16 z-0"></div>
                    <div class="absolute bottom-0 left-0 w-24 h-24 bg-primary-50 rounded-full -ml-12 -mb-12 z-0"></div>
                    
                    <div class="relative z-10">
                        <div class="flex items-center mb-6">
                            <div class="w-10 h-10 bg-primary-600 rounded-full flex items-center justify-center text-white animate-pulse-slow">
                                <i class="fas fa-user-graduate"></i>
                            </div>
                            <h2 class="text-2xl font-bold text-gray-800 ml-3">
                                Sign In to Your Account
                            </h2>
                        </div>
                        
                        <p class="text-gray-600 mb-8">Enter your credentials to access your student dashboard</p>

                        <!-- Laravel login form -->
                        <form method="POST" action="{{ route('login.student') }}" class="w-full">
                            @csrf
                            <!-- Email -->
                            <div class="flex flex-col w-full mb-6 input-focus-effect">
                                <label for="email" class="text-gray-700 mb-2 font-medium">Email Address</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none text-gray-400">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    <input type="email" id="email" name="email" placeholder="Enter your school email"
                                        class="w-full pl-10 pr-4 py-3 bg-gray-50 border border-gray-200 rounded-lg focus:outline-none focus:border-primary-500 focus:ring-2 focus:ring-primary-200 transition-all duration-300"
                                        required />
                                </div>
                            </div>

                            <!-- Password -->
                            <div class="flex flex-col w-full mb-4 input-focus-effect">
                                <label for="password" class="text-gray-700 mb-2 font-medium">Password</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none text-gray-400">
                                        <i class="fas fa-lock"></i>
                                    </div>
                                    <input type="password" id="password" name="password" placeholder="Enter your password"
                                        class="w-full pl-10 pr-4 py-3 bg-gray-50 border border-gray-200 rounded-lg focus:outline-none focus:border-primary-500 focus:ring-2 focus:ring-primary-200 transition-all duration-300"
                                        required />
                                </div>
                                <div class="flex justify-end mt-2">
                                    <a href="#" class="text-sm text-primary-600 hover:text-primary-800 transition-colors">Forgot password?</a>
                                </div>
                            </div>

                            <!-- Remember Me -->
                            <div class="flex items-center mb-6">
                                <input id="remember" name="remember" type="checkbox" class="h-4 w-4 text-primary-600 focus:ring-primary-500 border-gray-300 rounded">
                                <label for="remember" class="ml-2 block text-sm text-gray-700">
                                    Remember me
                                </label>
                            </div>

                            <!-- Submit Button -->
                            <div class="flex flex-col w-full mb-6">
                                <button type="submit" class="btn-glow text-white bg-gradient-to-r from-primary-500 via-primary-600 to-primary-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-primary-300 font-bold rounded-lg px-12 py-4 text-center text-xl w-full animate-glow">
                                    <div class="flex flex-row items-center justify-center space-x-3">
                                        <i class="fas fa-sign-in-alt text-xl"></i>
                                        <span class="text-2xl">SIGN IN</span>
                                    </div>
                                </button>
                            </div>

                            @if ($errors->any())
                                <div class="mb-6 p-4 bg-red-50 border-l-4 border-red-500 rounded-md animate-fadeIn">
                                    <div class="flex">
                                        <div class="flex-shrink-0">
                                            <i class="fas fa-exclamation-circle text-red-500"></i>
                                        </div>
                                        <div class="ml-3">
                                            <h3 class="text-sm font-medium text-red-800">There were errors with your submission</h3>
                                            <div class="mt-2 text-sm text-red-700">
                                                <ul class="list-disc pl-5 space-y-1">
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            
                            <div class="text-center mt-4">
                                <p class="text-gray-600">Don't have an account? <a href="{{ route('student.registar')}}" class="text-primary-600 font-semibold hover:text-primary-800 transition-colors">Create account</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Footer -->
    <footer class="py-4 text-center text-gray-500 text-sm absolute bottom-0 w-full animate-fadeIn delay-500">
        <p>© 2023 Hawler Medical University. All rights reserved.</p>
    </footer>

    <script>
        // Animate elements on page load
        document.addEventListener('DOMContentLoaded', function() {
            // Add staggered animation to features
            const features = document.querySelectorAll('.flex.items-center.space-x-4');
            features.forEach((feature, index) => {
                feature.style.opacity = '0';
                feature.style.transform = 'translateY(20px)';
                feature.style.transition = `all 0.5s ease ${0.3 + (index * 0.2)}s`;
                
                setTimeout(() => {
                    feature.style.opacity = '1';
                    feature.style.transform = 'translateY(0)';
                }, 100);
            });
            
            // Add focus animation to input fields
            const inputs = document.querySelectorAll('input');
            inputs.forEach(input => {
                input.addEventListener('focus', function() {
                    this.parentElement.classList.add('animate-pulse-slow');
                });
                
                input.addEventListener('blur', function() {
                    this.parentElement.classList.remove('animate-pulse-slow');
                });
            });
        });
    </script>
</body>
</html>