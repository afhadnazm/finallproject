<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100" style="font-family: Cambria, Georgia, serif">

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

    <!-- Image Section -->
  <!-- Image and Text Container -->
<div class="relative w-screen overflow-hidden pt-20">
    <img src="{{ asset('storage/images/about.jpg') }}" alt="Below Navbar Image" class="w-full h-auto object-cover rounded-md">
    
    <!-- Overlay Text -->
    <div class="absolute inset-0 flex items-center justify-center text-white p-4 md:p-8 lg:p-12  ">
        <div class="max-w-2xl text-center">
            <h1 style="font-family: Cambria, Georgia, serif;" class="text-3xl md:text-5xl font-bold mb-4  text-center pt-24">About HMU</h1>
        </div>
    </div>
</div>

    <section class="container p-16 px-24 ">
        <H1 class=" text-red-600 text-lg">HMU</H1>
        <h2 class="text-5xl py-2">Overview</h2>
        <p class="text-xl text-gray-600">Hawler Medical University is located in the city of Erbil (Hawler) in Iraqi Kurdistan Region. Hawler Medical University has been established by the Council of Ministers of the Iraqi Kurdistan Regional Government in July 2005 and endorsed by the Council of Ministers of Iraqi Federal Government in March 2006. The university has been established to include in itself the five colleges that were belonging to Salahaddin University in Erbil (except College of Health Sciences). The colleges are: College of Medicine, College of Dentistry, College of Pharmacy, College of Nursing and College of Health Sciences.
            The separation has come after a suggestion made by a number of academics from these colleges supported by the presidency of Salahaddin University as well as the Ministry of Health and the Ministry of Higher Education and Scientific Researches. 
            The overall aim of establishment of Hawler Medical University is to improve the medical education in the region as well as to have a better management of the mentioned colleges. This does not mean that the colleges are newly established, but the management structure is new while the oldest college which is the College of Medicine was founded in 1977.   </p>
    </section>
    <section class="px-4 py-8">
    <div class="flex justify-center">
        <div class="relative w-full max-w-7xl" style="padding-top: 56.25%;">
            <iframe class="absolute top-0 left-0 w-full h-full rounded-lg" 
                    src="https://www.youtube.com/embed/2O3dImGX4cQ" 
                    title="YouTube video player" 
                    frameborder="0" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                    allowfullscreen>
            </iframe>
        </div>
    </div>
</section>


<section class="bg-white">
    <div class=" container mx-auto my-10 p-6 bg-white  rounded-lg ">
        <h2 class="text-2xl font-bold mb-4">Timeline of University History</h2>
        <table class="w-full border border-gray-200">
            <thead>
                <tr>
                    <th class="text-left py-2 px-4 bg-gray-100 font-semibold">Date</th>
                    <th class="text-left py-2 px-4 bg-gray-100 font-semibold">Event</th>
                </tr>
            </thead>
            <tbody>
                <tr class="border-t border-gray-200">
                    <td class="py-2 px-4 font-semibold">1977</td>
                    <td class="py-2 px-4">The College of Medicine was established as part of the University of Sulaimaniyah, making it one of the oldest medical colleges in the region. Later, it became part of Salahaddin University.</td>
                </tr>
                <tr class="border-t border-gray-200 bg-gray-50">
                    <td class="py-2 px-4 font-semibold">2005</td>
                    <td class="py-2 px-4">Hawler Medical University was officially founded by the Kurdistan Regional Government's Council of Ministers. It brought together several medical colleges, previously part of Salahaddin University, including the Colleges of Medicine, Dentistry, Pharmacy, and Nursing.</td>
                </tr>
                <tr class="border-t border-gray-200">
                    <td class="py-2 px-4 font-semibold">2009-2012</td>
                    <td class="py-2 px-4">The university expanded its facilities and introduced new educational and research programs to strengthen its role in medical education.</td>
                </tr>
                <tr class="border-t border-gray-200 bg-gray-50">
                    <td class="py-2 px-4 font-semibold">2011</td>
                    <td class="py-2 px-4">Establishment of the Medical Research Center, which supports various research initiatives in the health and medical sciences.</td>
                </tr>
                <tr class="border-t border-gray-200">
                    <td class="py-2 px-4 font-semibold">2015</td>
                    <td class="py-2 px-4">The College of Health Sciences was added, further broadening the university's educational offerings in public health and clinical laboratory sciences.</td>
                </tr>

                <tr class="border-t border-gray-200">
                    <td class="py-2 px-4 font-semibold">Present</td>
                    <td class="py-2 px-4">HMU remains a leading medical university in the Kurdistan region, offering undergraduate and graduate programs in medicine, dentistry, pharmacy, and nursing. The university collaborates with international institutions, provides scholarships, and conducts medical research, aiming to elevate healthcare education in Iraq.</td>
                </tr>
                <!-- Add more rows as needed -->
            </tbody>
        </table>
    </div>

</section>



<section>
  <footer class="bg-gray-900 text-gray-300 py-10 px-4 md:px-6 lg:px-12">
    <div class="container mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
      <!-- Contact HMU Section -->
      <div>
        <h3 class="text-lg font-semibold text-white mb-4">Contact HMU</h3>
        <ul class="space-y-2">
          <li class="flex items-center">
            <span class="mr-2">✉️</span>
            <a href="mailto:info@hmu.edu.krd" class="hover:text-orange-500">info@hmu.edu.krd</a>
          </li>
          <li class="flex items-center">
            <span class="mr-2">🌐</span>
            <a href="http://www.hmu.edu.krd" class="hover:text-orange-500">www.hmu.edu.krd</a>
          </li>
          <li>Tel: +964 66 227 3384</li>
          <li>Fax: +964 66 227 3382</li>
          <li class="flex items-start">
            <span class="mr-2">📍</span>
            Iraq, Kurdistan Region,<br />
            Erbil, 100M Street, Near Rizgary Teaching Hospital,<br />
            P.O. Box 178
          </li>
        </ul>
      </div>

      <!-- Opening Hours Section -->
      <div>
        <h3 class="text-lg font-semibold text-white mb-4">Opening Hours</h3>
        <p>Sunday - Thursday: <span class="text-gray-100">08:30 am - 03:00 pm</span></p>
        <p>Friday and Saturday: <span class="bg-orange-500 text-white rounded px-2 py-1">Closed</span></p>
      </div>

      <!-- Web Traffic Section -->
      <div>
        <h3 class="text-lg font-semibold text-white mb-4">Web Traffic</h3>
        <ul class="space-y-1">
          <li>👤 Today: <span class="text-gray-100">2265</span></li>
          <li>👤 Yesterday: <span class="text-gray-100">3898</span></li>
          <li>👤 This Week: <span class="text-gray-100">12748</span></li>
          <li>👤 This Month: <span class="text-gray-100">90849</span></li>
          <li>👤 Total: <span class="text-gray-100">4394545</span></li>
        </ul>
        <hr class="my-4 border-gray-700" />
        <p class="text-center text-gray-100 text-xl font-bold">16</p>
        <p class="text-center text-sm text-gray-500">Online</p>
        <p class="text-center text-sm mt-2">21 November 2024</p>
      </div>

      <!-- QR Code Section -->
      <div>
        <h3 class="text-lg font-semibold text-white mb-4">QR Code</h3>
        <img src="https://via.placeholder.com/120x120" alt="QR Code" class="mx-auto mb-2" />
        <p class="text-center text-gray-500 text-sm">www.nik-o-mat.de</p>
      </div>
    </div>
    <div class="text-center text-gray-500 text-sm mt-8">
      <p>Copyright © 2020-2023 Hawler Medical University. All Rights Reserved</p>
    </div>
  </footer>
</section>





</body>

</html>