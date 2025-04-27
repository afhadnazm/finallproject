<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>University Council</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>
<body class="bg-white text-gray-900 " style="font-family: Cambria, Georgia, serif" >

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



    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-52">

    <div class="bg-white py-10 px-6">

  <!-- Title -->
  <h1 class="text-4xl font-bold text-center text-gray-900">University Council</h1>

  <!-- Separator Line -->
  <div class="w-full max-w-4xl mx-auto border-t border-gray-200 mt-4 mb-2"></div>

  <!-- Metadata -->
  <div class="flex justify-center items-center space-x-4 text-gray-600 text-sm mb-4">
    <div class="flex items-center space-x-1">
      <svg class="w-4 h-4 text-orange-500" fill="currentColor" viewBox="0 0 24 24">
        <path d="M5 3a2 2 0 00-2 2v14l4-4h11a2 2 0 002-2V5a2 2 0 00-2-2H5z"/>
      </svg>
      <span>PRESIDENCY</span>
    </div>
    <div class="flex items-center space-x-1">
      <svg class="w-4 h-4 text-gray-500" fill="currentColor" viewBox="0 0 24 24">
        <path d="M19 4h-1V2h-2v2H8V2H6v2H5a2 2 0 00-2 2v14a2 2 0 002 2h14a2 2 0 002-2V6a2 2 0 00-2-2zm0 16H5V9h14v11z"/>
      </svg>
      <span>18 OCTOBER 2020</span>
    </div>
    <div class="flex items-center space-x-1 ">
      <svg class="w-4 h-4 text-gray-500" fill="currentColor" viewBox="0 0 24 24">
        <path d="M12 4a8 8 0 100 16 8 8 0 000-16zm1 9H8v-2h5v5h-2v-3z"/>
      </svg>
      <span>HITS: 13908</span>
    </div>
  </div>
  

  <!-- Section Title -->
  <div class="flex items-center justify-center mt-4">
    <div class="flex items-center bg-orange-500 text-white px-3 py-2 rounded-sm space-x-2">
      <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
        <path d="M21 19V5a2 2 0 00-2-2H5a2 2 0 00-2 2v14l4-4h12a2 2 0 002 2z"/>
      </svg>
      <span class="font-semibold text-lg">University Council</span>
    </div>
  </div>
</div>


        <!-- Image -->
        <div class="w-full flex justify-center mb-6">
            <img src="{{ asset('storage/images/UniCouncil.jpg') }}" alt="University Council" class="w-full max-w-4xl object-cover rounded shadow-lg">
        </div>

    
        <div class="bg-white px-8 py-10 text-gray-800 max-w-6xl mx-auto">
  <!-- Paragraph -->
  <p class="text-justify text-sm leading-relaxed text-gray-700 mb-8">
    The University Council is the highest authority of the university. The council holds regular meetings to discuss the general strategy and plans of the university, make decisions on issues that are at authority of the Council and make suggestions to the Ministry of Higher Education and Scientific Research.
  </p>

  <!-- Table-like layout -->
  <div class="grid grid-cols-1 md:grid-cols-3 gap-4 text-sm pl-24">
    <!-- Column 1: Names -->
    <div class="space-y-2 text-blue-700 font-medium">
      <p>Prof. Dr. Nooraddin Ismail Alla Werdi</p>
      <p>Assist. Prof. Dr. Hawri Mustafa Bakr</p>
      <p>Prof. Dr. Zhian Mahmoud Dezayee</p>
      <p>Dr. Karwan Mohammed M-Amen</p>
      <p>Assist. Prof. Dr. Dashty Abbas Tawfeeq</p>
      <p>Assist. Prof. Dr. Bassam Karem Amin</p>
      <p>Assist. Prof. Dr. Huner Kamal Omer</p>
      <p>Assist. Prof. Dr. Vian Afan Naqshbandi</p>
      <p>Prof. Dr. Hamdia Mirkhan Ahmed</p>
      <p>Assist. Prof. Dr. Aza Bahadeen Taha</p>
    </div>

    <!-- Column 2: Positions -->
    <div class="space-y-2 text-gray-600">
      <p>University President</p>
      <p>Vice President for Admin and Financial Affairs</p>
      <p>Vice President for Scientific Affairs and Postgraduate Studies</p>
      <p>Vice President for Students Affairs</p>
      <p>Dean of the College of Medicine</p>
      <p>Dean of the College of Dentistry</p>
      <p>Dean of the College of Pharmacy</p>
      <p>Dean of the College of Nursing</p>
      <p>Dean of the College of Health Sciences</p>
      <p>Director General of Medical Research Center</p>
    </div>

    <!-- Column 3: Roles -->
    <div class="space-y-2 text-gray-600">
      <p>Head of Council</p>
      <p>Member</p>
      <p>Member</p>
      <p>Member</p>
      <p>Member</p>
      <p>Member</p>
      <p>Member</p>
      <p>Member</p>
      <p>Member</p>
      <p>Member</p>
    </div>
  </div>
</div>
</div>




<section class="w-full ">
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
