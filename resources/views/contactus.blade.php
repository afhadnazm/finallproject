<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100" style="font-family: Cambria, Georgia, serif;">
   
    <!-- Navbar -->
    <nav class="bg-white shadow-md fixed top-0 left-0 w-full z-10 ">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center ">

                <!-- Logo -->
                <div class="size-40 font-bold text-red-600 py-6 ">
                    <img src="{{ asset('storage/images/logo.jpg') }}" alt="Logo">
                </div>

                <!-- Menu Items (Hidden on mobile) -->
                <div class="hidden md:flex space-x-6 text-xl font-bold relative mx-auto">
                    <!-- Home Dropdown -->
                    <div class="relative group">
                        <a href="/" class="text-gray-600 hover:text-red-600 flex items-center">
                            HOME
                            <svg class="w-5 h-5 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </a>
                        <div class="absolute left-0 right-0 h-6 bg-transparent"></div>
                        <div class="absolute mt-2 hidden group-hover:block bg-white shadow-md rounded-lg p-4 pr-12 left-0">
                            <a href="{{ url('/aboutus') }}" class="block py-2 text-gray-600 hover:text-red-600 whitespace-nowrap">About us</a>
                            <a href="{{ url('/contactus') }}" class="block py-2 text-gray-600 hover:text-red-600 whitespace-nowrap">Contact us</a>
                            
                        </div>
                    </div>
                    
                    <!-- Other Links -->
                    <div class="relative group">
                        <a href="#" class="text-gray-600 hover:text-red-600 flex items-center">
                           DIVISONS
                            <svg class="w-5 h-5 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </a>
                        <div class="absolute left-0 right-0 h-6 bg-transparent"></div>

                        <div class="absolute mt-2 hidden group-hover:block bg-white shadow-md rounded-lg p-4 pr-12 left-0">
                            <a href="{{ url('/universitycounsel') }}" class="block py-2 text-gray-600 hover:text-red-600 whitespace-nowrap">University Counsil</a>
                            <a href="{{ url('/presidentoffice') }}" class="block py-2 text-gray-600 hover:text-red-600 whitespace-nowrap">President's Office</a>
                            <a href="{{ url('/vission') }}" class="block py-2 text-gray-600 hover:text-red-600 whitespace-nowrap">Vision and Mission</a>
                            <a href="{{ url('/logo') }}" class="block py-2 text-gray-600 hover:text-red-600 whitespace-nowrap">University Logo</a>
                        </div>
                    </div>
                        <div class="relative group">
                            <a href="#" class="text-gray-600 hover:text-red-600 flex items-center">
                             COLLEGE
                                <svg class="w-5 h-5 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </a>
                            <div class="absolute left-0 right-0 h-6 bg-transparent"></div>
                            <div class="absolute mt-2 hidden group-hover:block bg-white shadow-md rounded-lg p-4 pr-12 left-0">
                                <a href="{{ route('colleges.medicine') }}" class="block py-2 text-gray-600 hover:text-red-600 whitespace-nowrap">College of Medicine</a>
                                <a href="{{ route('colleges.dentistry') }}" class="block py-2 text-gray-600 hover:text-red-600 whitespace-nowrap">College of Dentistry</a>
                                <a href="{{ route('colleges.pharmacy') }}" class="block py-2 text-gray-600 hover:text-red-600 whitespace-nowrap">College of Pharmacy</a>
                                <a href="{{ route('colleges.nursing') }}" class="block py-2 text-gray-600 hover:text-red-600 whitespace-nowrap">College of Nursing</a>
                            </div>
                        </div>

                        <div class="relative group">
                            <a href="#" class="text-gray-600 hover:text-red-600 flex items-center">
                            FEATURE
                                <svg class="w-5 h-5 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </a>
                            <div class="absolute left-0 right-0 h-6 bg-transparent"></div>
                            <div class="absolute mt-2 hidden group-hover:block bg-white shadow-md rounded-lg p-4 pr-12 left-0">
                                <a href="{{ url('/library') }}" class="block py-2 text-gray-600 hover:text-red-600 whitespace-nowrap">Library</a>
                                <a href="{{ url('/confrance') }}" class="block py-2 text-gray-600 hover:text-red-600 whitespace-nowrap">Confrances</a>
                                <a href="{{ url('/relevantwebs') }}" class="block py-2 text-gray-600 hover:text-red-600 whitespace-nowrap">Relevant Websites</a>
                                <a href="{{ url('/acadimicrelations') }}" class="block py-2 text-gray-600 hover:text-red-600 whitespace-nowrap">Academic Relations</a>
                                <a href="{{ url('/acadimicprofile') }}" class="block py-2 text-gray-600 hover:text-red-600 whitespace-nowrap">Academicians Profile</a>
                            </div>
                        </div>

                        <div class="relative group">
                            <a href="" class="text-gray-600 hover:text-red-600 flex items-center">
                           SERVICE
                                <svg class="w-5 h-5 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </a>
                            <div class="absolute left-0 right-0 h-6 bg-transparent"></div>
                            <div class="absolute mt-2 hidden group-hover:block bg-white shadow-md rounded-lg p-4 pr-12 left-0">
                                <a href="#" class="block py-2 text-gray-600 hover:text-red-600 whitespace-nowrap">IT Services</a>
                                <a href="#" class="block py-2 text-gray-600 hover:text-red-600 whitespace-nowrap">Documents</a>
                                <a href="#" class="block py-2 text-gray-600 hover:text-red-600 whitespace-nowrap">E-Managment</a>
                                
                            </div>
                        </div>
                   <div>
                    <a href="#" class="text-gray-600 hover:text-red-600">EVENTS</a>
                    
                   </div>
                   <div class="relative group">
                    <a href="#" class="text-gray-600 hover:text-red-600 flex items-center">
                   PORTAL
                        <svg class="w-5 h-5 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </a>
                    <div class="absolute left-0 right-0 h-6 bg-transparent"></div>
                    <div class="absolute mt-2 hidden group-hover:block bg-white shadow-md rounded-lg p-4 pr-12 left-0">
                        <a href="/student_login" class="block py-2 text-gray-600 hover:text-red-600 whitespace-nowrap">Student Portal</a>
                        <a href="/teacher_login" class="block py-2 text-gray-600 hover:text-red-600 whitespace-nowrap">Teacher Portal</a>                        
                    </div>
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

    
    <section class="bg-gray-50 py-10 pt-14">
        <div class="container mx-auto">
          <!-- Header -->
          <div class="text-center mb-10">
            <h1 class="text-4xl font-bold text-gray-800">Contact us</h1>
            <p class="text-orange-500 mt-2">Home > Contact us</p>
          </div>
      
          <!-- Main Content -->
          <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <!-- Map Section -->
            <div>
              <h2 class="text-2xl font-semibold text-gray-700 mb-4">
                Find Our Location
              </h2>
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.4056322154425!2d-122.4074365!3d37.7841124!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80858064c1b3c51f%3A0x91ec4736003580db!2sRincon%20Center!5e0!3m2!1sen!2sus!4v1635741777447!5m2!1sen!2sus"
                class="w-full h-64 rounded-md border border-gray-300 shadow-sm"
                allowfullscreen=""
                loading="lazy"></iframe>
            </div>
      
            <!-- Form Section -->
            <div>
              <h2 class="text-2xl font-semibold text-gray-700 mb-4">
                Interested in discussing?
              </h2>
              <form action="#" method="POST" class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <input
                  type="text"
                  placeholder="Enter Name"
                  class="border border-gray-300 p-2 rounded-md focus:ring focus:ring-orange-300 w-full">
                <input
                  type="email"
                  placeholder="Enter Email"
                  class="border border-gray-300 p-2 rounded-md focus:ring focus:ring-orange-300 w-full">
                <input
                  type="text"
                  placeholder="Enter Subject"
                  class="border border-gray-300 p-2 rounded-md focus:ring focus:ring-orange-300 w-full">
                <input
                  type="tel"
                  placeholder="Enter Phone"
                  class="border border-gray-300 p-2 rounded-md focus:ring focus:ring-orange-300 w-full">
                <textarea
                  placeholder="Enter Message"
                  class="col-span-2 border border-gray-300 p-2 rounded-md focus:ring focus:ring-orange-300 w-full h-32"></textarea>
                <div class="col-span-2 flex justify-end space-x-4">
                  <button
                    type="reset"
                    class="bg-gray-200 text-gray-700 px-6 py-2 rounded-md hover:bg-gray-300">
                    Reset
                  </button>
                  <button
                    type="submit"
                    class="bg-orange-500 text-white px-6 py-2 rounded-md hover:bg-orange-600">
                    Send your message
                  </button>
                </div>
              </form>
            </div>
          </div>
      
          <!-- Contact Info -->
          <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mt-10">
            <!-- Call Us -->
            <div class="text-center bg-white p-4 rounded-md shadow-md">
              <div class="text-orange-500 text-3xl mb-2">
                📞
              </div>
              <h3 class="font-semibold text-gray-700">Call Us</h3>
              <p class="text-gray-500">Phone: +964 66 2272384</p>
            </div>
            <!-- Address -->
            <div class="text-center bg-white p-4 rounded-md shadow-md">
              <div class="text-orange-500 text-3xl mb-2">
                📍
              </div>
              <h3 class="font-semibold text-gray-700">Address</h3>
              <p class="text-gray-500">100 m Street, Inside Rizgary Teaching Hospital, Erbil</p>
            </div>
            <!-- Email -->
            <div class="text-center bg-white p-4 rounded-md shadow-md">
              <div class="text-orange-500 text-3xl mb-2">
                📧
              </div>
              <h3 class="font-semibold text-gray-700">Email</h3>
              <p class="text-gray-500">info@hmu.edu.krd</p>
            </div>
            <!-- P.O. Box -->
            <div class="text-center bg-white p-4 rounded-md shadow-md">
              <div class="text-orange-500 text-3xl mb-2">
                📦
              </div>
              <h3 class="font-semibold text-gray-700">P.O. Box</h3>
              <p class="text-gray-500">178</p>
            </div>
          </div>
        </div>
      </section>
      



</body>

</html>