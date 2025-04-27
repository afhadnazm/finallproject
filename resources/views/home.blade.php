<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Home- HMU</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">


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
              <svg class="w-5 h-5 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
              </svg>
            </a>
            <div class="absolute left-0 right-0 h-6 bg-transparent"></div>
            <div class="absolute mt-2 hidden group-hover:block bg-white shadow-md rounded-lg p-4 pr-12 left-0">
              <a href="{{ url('/aboutus') }}"
                class="block py-2 text-gray-600 hover:text-red-600 whitespace-nowrap">About us</a>
              <a href="{{ url('/contactus') }}"
                class="block py-2 text-gray-600 hover:text-red-600 whitespace-nowrap">Contact us</a>

            </div>
          </div>

          <!-- Other Links -->
          <div class="relative group">
            <a href="#" class="text-gray-600 hover:text-red-600 flex items-center">
              DIVISONS
              <svg class="w-5 h-5 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
              </svg>
            </a>
            <div class="absolute left-0 right-0 h-6 bg-transparent"></div>

            <div class="absolute mt-2 hidden group-hover:block bg-white shadow-md rounded-lg p-4 pr-12 left-0">
              <a href="{{ url('/universitycounsel') }}"
                class="block py-2 text-gray-600 hover:text-red-600 whitespace-nowrap">University Counsil</a>
              <a href="{{ url('/presidentoffice') }}"
                class="block py-2 text-gray-600 hover:text-red-600 whitespace-nowrap">President's Office</a>
              <a href="{{ url('/vission') }}"
                class="block py-2 text-gray-600 hover:text-red-600 whitespace-nowrap">Vision and Mission</a>
              <a href="{{ url('/logo') }}"
                class="block py-2 text-gray-600 hover:text-red-600 whitespace-nowrap">University Logo</a>
            </div>
          </div>
          <div class="relative group">
            <a href="#" class="text-gray-600 hover:text-red-600 flex items-center">
              COLLEGE
              <svg class="w-5 h-5 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
              </svg>
            </a>
            <div class="absolute left-0 right-0 h-6 bg-transparent"></div>
            <div class="absolute mt-2 hidden group-hover:block bg-white shadow-md rounded-lg p-4 pr-12 left-0">
              <a href="{{ route('colleges.medicine') }}"
                class="block py-2 text-gray-600 hover:text-red-600 whitespace-nowrap">College of Medicine</a>
              <a href="{{ route('colleges.dentistry') }}"
                class="block py-2 text-gray-600 hover:text-red-600 whitespace-nowrap">College of Dentistry</a>
              <a href="{{ route('colleges.pharmacy') }}"
                class="block py-2 text-gray-600 hover:text-red-600 whitespace-nowrap">College of Pharmacy</a>
              <a href="{{ route('colleges.nursing') }}"
                class="block py-2 text-gray-600 hover:text-red-600 whitespace-nowrap">College of Nursing</a>
            </div>
          </div>

          <div class="relative group">
            <a href="#" class="text-gray-600 hover:text-red-600 flex items-center">
              FEATURE
              <svg class="w-5 h-5 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
              </svg>
            </a>
            <div class="absolute left-0 right-0 h-6 bg-transparent"></div>
            <div class="absolute mt-2 hidden group-hover:block bg-white shadow-md rounded-lg p-4 pr-12 left-0">
              <a href="{{ url('/library') }}"
                class="block py-2 text-gray-600 hover:text-red-600 whitespace-nowrap">Library</a>
              <a href="{{ url('/confrance') }}"
                class="block py-2 text-gray-600 hover:text-red-600 whitespace-nowrap">Confrances</a>
              <a href="{{ url('/relevantwebs') }}"
                class="block py-2 text-gray-600 hover:text-red-600 whitespace-nowrap">Relevant Websites</a>
              <a href="{{ url('/acadimicrelations') }}"
                class="block py-2 text-gray-600 hover:text-red-600 whitespace-nowrap">Academic Relations</a>
              <a href="{{ url('/acadimicprofile') }}"
                class="block py-2 text-gray-600 hover:text-red-600 whitespace-nowrap">Academicians Profile</a>
            </div>
          </div>

          <div class="relative group">
            <a href="" class="text-gray-600 hover:text-red-600 flex items-center">
              SERVICE
              <svg class="w-5 h-5 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
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
              <svg class="w-5 h-5 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
              </svg>
            </a>
            <div class="absolute left-0 right-0 h-6 bg-transparent"></div>
            <div class="absolute mt-2 hidden group-hover:block bg-white shadow-md rounded-lg p-4 pr-12 left-0">
              <a href="/student_login" class="block py-2 text-gray-600 hover:text-red-600 whitespace-nowrap">Student
                Portal</a>
              <a href="/teacher_login" class="block py-2 text-gray-600 hover:text-red-600 whitespace-nowrap">Teacher
                Portal</a>
            </div>
          </div>




          <!-- Mobile menu button -->
          <div class="md:hidden">
            <button id="nav-toggle" class="text-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
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
  <div class="w-full  overflow-hidden ">
    <img src="{{asset('storage/images/citadel.jpg')}}" alt="Below Navbar Image"
      class="w-full h-auto object-cover rounded-md">
  </div>
  <!-- Overlay Text -->
  <div class="p-6 absolute inset-0 flex flex-col items-center justify-start text-white bg-opacity-50 mt-96">
    <h1 class="text-8xl font-bold mb-4">Hawler Medical University</h1>
    <p class="text-2xl text-center">We provide you with our best scientific experience and professionals for our
      academics and students to achieve an optimal learning outcome.</p>
  </div>


  <section data-aos="fade-down-left" class="mt-10">

    <div class="grid grid-cols-2 items-center justify-between px-20 p-4 pb-20 space space-x-6">

      <div>
        <h1 class="text-red-600 text-3xl pb-6 font-semibold "><SPAN class="text-black">HAWLER </SPAN> MEDICAL UNIVERSITY
        </h1>
        <p class="text-justify text-gray-500">Hawler Medical University is public institution of undergraduate and
          postgraduate higher education and research in different medical sciences disciplines. <br><br>

          Hawler Medical University is located in the city of Erbil (Hawler) in Iraqi Kurdistan Region. Hawler Medical
          University has been established by the Council of Ministers of the Iraqi Kurdistan Regional Government in July
          2005 and endorsed by the Council of Ministers of Iraqi Federal Government in March 2006. The university has
          been established to include in itself the five colleges that were belonging to Salahaddin University in Erbil
          (except College of Health Sciences). The colleges are: College of Medicine, College of Dentistry, College of
          Pharmacy, College of Nursing and College of Health Sciences. <br><br>

          The separation has come after a suggestion made by a number of academics from these colleges supported by the
          presidency of Salahaddin University as well as the Ministry of Health and the Ministry of Higher Education and
          Scientific Researches.</p>


      </div>


      <div>
        <img class="rounded-xl" src="{{asset('storage/images/UniPresident.jpg')}}" alt="">
      </div>

      =======
      <!-- Logo -->
      <div class="size-40 font-bold text-red-600 py-6 ">
        <img src="{{ asset('storage/images/logo.jpg') }}" alt="Logo">
        >>>>>>> fdfea35c0a98fa5169535b7652c87be0d06a977e
      </div>

      <!-- Menu Items (Hidden on mobile) -->
      <div class="hidden md:flex space-x-6 text-xl font-bold relative mx-auto">
        <!-- Home Dropdown -->
        <div class="relative group">
          <a href="/" class="text-gray-600 hover:text-red-600 flex items-center">
            HOME
            <svg class="w-5 h-5 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
              xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
          </a>
          <div class="absolute left-0 right-0 h-6 bg-transparent"></div>
          <div class="absolute mt-2 hidden group-hover:block bg-white shadow-md rounded-lg p-4 pr-12 left-0">
            <a href="about.html" class="block py-2 text-gray-600 hover:text-red-600 whitespace-nowrap">About us</a>
            <a href="contact.html" class="block py-2 text-gray-600 hover:text-red-600 whitespace-nowrap">Contact
              us</a>
            <a href="#" class="block py-2 text-gray-600 hover:text-red-600 whitespace-nowrap">Vision and Mission</a>
            <a href="#" class="block py-2 text-gray-600 hover:text-red-600 whitespace-nowrap">University Logo</a>
          </div>
        </div>

        <!-- Other Links -->
        <div class="relative group">
          <a href="#" class="text-gray-600 hover:text-red-600 flex items-center">
            DIVISONS
            <svg class="w-5 h-5 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
              xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
          </a>
          <div class="absolute left-0 right-0 h-6 bg-transparent"></div>

          <div class="absolute mt-2 hidden group-hover:block bg-white shadow-md rounded-lg p-4 pr-12 left-0">
            <a href="#" class="block py-2 text-gray-600 hover:text-red-600 whitespace-nowrap">University Counsil</a>
            <a href="#" class="block py-2 text-gray-600 hover:text-red-600 whitespace-nowrap">President's Office</a>
            <a href="#" class="block py-2 text-gray-600 hover:text-red-600 whitespace-nowrap">Vision and Mission</a>
            <a href="#" class="block py-2 text-gray-600 hover:text-red-600 whitespace-nowrap">University Logo</a>
          </div>
        </div>
        <div class="relative group">
          <a href="#" class="text-gray-600 hover:text-red-600 flex items-center">
            COLLEGE
            <svg class="w-5 h-5 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
              xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
          </a>
          <div class="absolute left-0 right-0 h-6 bg-transparent"></div>
          <div class="absolute mt-2 hidden group-hover:block bg-white shadow-md rounded-lg p-4 pr-12 left-0">
            <a href="{{ route('colleges.medicine') }}"
              class="block py-2 text-gray-600 hover:text-red-600 whitespace-nowrap">College of Medicine</a>
            <a href="{{ route('colleges.dentistry') }}"
              class="block py-2 text-gray-600 hover:text-red-600 whitespace-nowrap">College of Dentistry</a>
            <a href="{{ route('colleges.pharmacy') }}"
              class="block py-2 text-gray-600 hover:text-red-600 whitespace-nowrap">College of Pharmacy</a>
            <a href="{{ route('colleges.nursing') }}"
              class="block py-2 text-gray-600 hover:text-red-600 whitespace-nowrap">College of Nursing</a>
          </div>
        </div>

        <div class="relative group">
          <a href="#" class="text-gray-600 hover:text-red-600 flex items-center">
            FEATURE
            <svg class="w-5 h-5 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
              xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
          </a>
          <div class="absolute left-0 right-0 h-6 bg-transparent"></div>
          <div class="absolute mt-2 hidden group-hover:block bg-white shadow-md rounded-lg p-4 pr-12 left-0">
            <a href="#" class="block py-2 text-gray-600 hover:text-red-600 whitespace-nowrap">Library</a>
            <a href="#" class="block py-2 text-gray-600 hover:text-red-600 whitespace-nowrap">Confrances</a>
            <a href="#" class="block py-2 text-gray-600 hover:text-red-600 whitespace-nowrap">Relevant Websites</a>
            <a href="#" class="block py-2 text-gray-600 hover:text-red-600 whitespace-nowrap">Academic Relations</a>
            <a href="#" class="block py-2 text-gray-600 hover:text-red-600 whitespace-nowrap">Academicians Profile</a>
          </div>
        </div>

        <div class="relative group">
          <a href="" class="text-gray-600 hover:text-red-600 flex items-center">
            SERVICE
            <svg class="w-5 h-5 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
              xmlns="http://www.w3.org/2000/svg">
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
            <svg class="w-5 h-5 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
              xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
          </a>
          <div class="absolute left-0 right-0 h-6 bg-transparent"></div>
          <div class="absolute mt-2 hidden group-hover:block bg-white shadow-md rounded-lg p-4 pr-12 left-0">
            <a href="/student_login" class="block py-2 text-gray-600 hover:text-red-600 whitespace-nowrap">Student
              Portal</a>
            <a href="/teacher_login" class="block py-2 text-gray-600 hover:text-red-600 whitespace-nowrap">Teacher
              Portal</a>
          </div>
        </div>





        <!-- Mobile menu button -->
        <div class="md:hidden">
          <button id="nav-toggle" class="text-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
              stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
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
    <div class="w-full  overflow-hidden ">
      <img src="{{asset('storage/images/citadel.jpg')}}" alt="Below Navbar Image"
        class="w-full h-auto object-cover rounded-md">
    </div>
    <!-- Overlay Text -->
    <div class="p-6 absolute inset-0 flex flex-col items-center justify-start text-white bg-opacity-50 mt-96">
      <h1 class="text-8xl font-bold mb-4">Hawler Medical University</h1>
      <p class="text-2xl text-center">We provide you with our best scientific experience and professionals for our
        academics and students to achieve an optimal learning outcome.</p>
    </div>


    <section data-aos="fade-down-left" class="mt-10">

      <div class="grid grid-cols-2 items-center justify-between px-20 p-4 pb-20 space space-x-6">

        <div>
          <h1 class="text-red-600 text-3xl pb-6 font-semibold "><SPAN class="text-black">HAWLER </SPAN> MEDICAL
            UNIVERSITY
          </h1>
          <p class="text-justify text-gray-500">Hawler Medical University is public institution of undergraduate and
            postgraduate higher education and research in different medical sciences disciplines. <br><br>

            Hawler Medical University is located in the city of Erbil (Hawler) in Iraqi Kurdistan Region. Hawler Medical
            University has been established by the Council of Ministers of the Iraqi Kurdistan Regional Government in
            July
            2005 and endorsed by the Council of Ministers of Iraqi Federal Government in March 2006. The university has
            been established to include in itself the five colleges that were belonging to Salahaddin University in
            Erbil
            (except College of Health Sciences). The colleges are: College of Medicine, College of Dentistry, College of
            Pharmacy, College of Nursing and College of Health Sciences. <br><br>

            The separation has come after a suggestion made by a number of academics from these colleges supported by
            the
            presidency of Salahaddin University as well as the Ministry of Health and the Ministry of Higher Education
            and
            Scientific Researches.</p>


        </div>


        <div>
          <img class="rounded-xl" src="{{asset('storage/images/UniPresident.jpg')}}" alt="">
        </div>

      </div>


    </section>


    <div class="bg-gray-50 py-20">
      <div class="px-32">
        <h2 class="text-3xl font-bold text-gray-800 ">LATEST <span class="text-red-500">NEWS</span></h2>
        <p class=" text-gray-600 mt-2 mb-10">News</p>
      </div>
      <div class="max-w-7xl mx-auto px-4 grid grid-cols-1 lg:grid-cols-3 gap-6">

        <!-- News Cards Column -->
        <div class="lg:col-span-2 space-y-6">
          <!-- News Card 1 -->
          <div class="flex bg-white rounded-lg shadow-lg overflow-hidden">
            <img src="{{asset('storage/images/news1.jpg')}}" alt="News Image" class="w-1/3 object-cover">
            <div class="p-4 w-2/3">
              <div class="flex items-center text-red-600 font-semibold text-lg">
                <span class="bg-gray-200 p-2 rounded-full mr-2">20</span>
                <span>NOV</span>
              </div>
              <h3 class="font-bold text-gray-800 text-xl mt-2">
                Coordination between Hawler Medical University and Erbil Directorate of Health
              </h3>
              <p class="text-gray-600 mt-2">
                The President of Hawler Medical University met with the Erbil Directorate of Health in order to further
                coordinate dur...
              </p>
            </div>
          </div>

          <!-- News Card 2 -->
          <div class="flex bg-white rounded-lg shadow-lg overflow-hidden">
            <img src="{{asset('storage/images/news2.jpg')}}" alt="News Image" class="w-1/3 object-cover">
            <div class="p-4 w-2/3">
              <div class="flex items-center text-red-600 font-semibold text-lg">
                <span class="bg-gray-200 p-2 rounded-full mr-2">20</span>
                <span>NOV</span>
              </div>
              <h3 class="font-bold text-gray-800 text-xl mt-2">
                Participation in the First Sports Olympiad of Universities and Colleges in the Kurdistan Region
              </h3>
              <p class="text-gray-600 mt-2">
                Presidency of Hawler Medical University awarded the delegation of the university, which Hawler Medical
                University awarde...
              </p>
            </div>
          </div>
        </div>

        <!-- Sidebar Column -->
        <div class="bg-white rounded-lg shadow-lg p-4">
          <h4 class="font-bold text-gray-800 text-xl mb-4">More News</h4>
          <ul class="space-y-4">
            <!-- More News Item 1 -->
            <li>
              <a href="#" class="text-gray-800 font-medium hover:text-red-600">
                The president of the Union of International Universities presented a membership certificate to the
                president of Hawler M...
              </a>
              <p class="text-gray-500 text-sm mt-1">16 Nov 2024</p>
            </li>
            <!-- More News Item 2 -->
            <li>
              <a href="#" class="text-gray-800 font-medium hover:text-red-600">
                Academic activities of Hawler Medical University are sustaining…
              </a>
              <p class="text-gray-500 text-sm mt-1">13 Nov 2024</p>
            </li>
            <!-- More News Item 3 -->
            <li>
              <a href="#" class="text-gray-800 font-medium hover:text-red-600">
                An Evidence-Based Approach To Communication Skills In Medical Education
              </a>
              <p class="text-gray-500 text-sm mt-1">12 Nov 2024</p>
            </li>
          </ul>
          <button class="mt-6 w-full bg-red-600 text-white font-semibold py-2 rounded hover:bg-red-700">
            EVEN MORE
          </button>
        </div>
      </div>
    </div>


    <section class="py-20">
      <div class="container mx-auto p-6">
        <div class="">
          <h2 class="text-3xl font-bold text-gray-800 ">FOR <span class="text-red-500">RESEARCHERS</span></h2>
          <p class=" text-gray-600 mt-2 mb-10">RESEARCHERS</p>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
          <!-- Card 1 -->

          <div class="border rounded-lg shadow-md p-4">

            <div class="bg-red-500 text-white rounded-full px-3 py-1 w-fit text-sm mb-3">Researcher Accounts</div>

            <p class="text-gray-500 text-sm mb-2">Jul, 1 2023</p>
            <h3 class="font-bold text-lg mb-2">
              The Social Networking Sites for Scientists and Researchers to share papers and Collaborations
            </h3>
            <p class="text-gray-700 text-sm mb-3">
              Discover scientific knowledge and stay connected to the world of science..
            </p>
            <a href="#" class="text-red-500 font-semibold">Read the Abstract ➜</a>
          </div>

          <!-- Card 2 -->
          <div class="border rounded-lg shadow-md p-4">
            <div class="bg-red-500 text-white rounded-full px-3 py-1 w-fit text-sm mb-3">HMU Publications</div>
            <p class="text-gray-500 text-sm mb-2">Jul, 18 2022</p>
            <h3 class="font-bold text-lg mb-2">
              Journals Publishing by Hawler Medical University
            </h3>
            <p class="text-gray-700 text-sm mb-3">
              EDJ is a peer-review, open-access journal, which is published two times per year. EDJ aims to publish
              peer-reviewed manuscripts of Iraqi, regional, and international interests.
            </p>
            <a href="#" class="text-red-500 font-semibold">Read the Abstract ➜</a>
          </div>

          <!-- Card 3 -->
          <div class="border rounded-lg shadow-md p-4">
            <div class="bg-red-500 text-white rounded-full px-3 py-1 w-fit text-sm mb-3">Software</div>
            <p class="text-gray-500 text-sm mb-2">aug, 17 2024</p>
            <h3 class="font-bold text-lg mb-2">
              Softwares that utilizing in Writing Research...
            </h3>
            <p class="text-gray-700 text-sm mb-3">
              Till now, the Ministry of Higher Education and Scientific Research in Kurdistan Region is not connected to
              the network because there isn't…
            </p><br>
            <a href="#" class="text-red-500 font-semibold">Read the Abstract ➜</a>
          </div>

          <!-- Card 4 -->
          <div class="border rounded-lg shadow-md p-4">
            <div class="bg-red-500 text-white rounded-full px-3 py-1 w-fit text-sm mb-3">NUR Approved</div>
            <p class="text-gray-500 text-sm mb-2">Jul, 16 2021</p>
            <h3 class="font-bold text-lg mb-2">
              Important Journal and Publisher Links
            </h3>
            <p class="text-gray-700 text-sm mb-3">
              Local Kurdistan Journals Approved by the Ministry of Higher Education and Scientific Research-KRG
            </p><br><br>
            <a href="#" class="text-red-500 font-semibold">Read the Abstract ➜</a>
          </div>
        </div>
        <div class="text-center mt-6">
          <button class="bg-red-500 text-white py-2 px-6 rounded-lg hover:bg-red-600 transition">
            More Research
          </button>
        </div>
      </div>

    </section>

    <section class="bg-white py-10">
      <div class="container mx-auto">
        <!-- Section Title -->
        <h2 class="text-4xl font-bold text-center text-red-600 mb-8">
          MEDIA
        </h2>
        <!-- Galleries -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
          <!-- Video Gallery -->
          <div class="text-center">
            <h3 class="text-2xl font-semibold text-gray-800 underline underline-offset-4 mb-6">
              VIDEO GALLERY
            </h3>
            <button class="bg-red-600 text-white px-6 py-2 rounded-md hover:bg-red-800">
              MORE VIDEO
            </button>
          </div>
          <!-- Image Gallery -->
          <div>
            <h3 class="text-2xl font-semibold text-center text-gray-800 underline underline-offset-4 mb-6">
              IMAGE GALLERY
            </h3>
            <!-- Image Grid -->
            <div class="grid grid-cols-2 gap-4 mb-4">
              <img src="{{asset('storage/images/news1.jpg')}}" alt="Gallery Image" class="rounded-md shadow-md">
              <img src="{{asset('storage/images/news2.jpg')}}" alt="Gallery Image" class="rounded-md shadow-md">
              <img src="{{asset('storage/images/news3.jpg')}}" alt="Gallery Image" class="rounded-md shadow-md">
              <img src="{{asset('storage/images/news4.jpg')}}" alt="Gallery Image" class="rounded-md shadow-md">
            </div>
            <div class="text-center">
              <button class="bg-red-600 text-white px-6 py-2 rounded-md hover:bg-red-800">
                MORE IMAGES
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section>
      <footer class="bg-gray-900 text-gray-300 py-10  ">
        <div class="container mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
          <!-- Contact HMU Section -->
          <div>
            <h3 class="text-lg font-semibold text-white mb-3">Contact HMU</h3>
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
            <h3 class="text-lg font-semibold text-white mb-3">Opening Hours</h3>
            <p>Sunday - Thursday: <span class="text-gray-100">08:30 am - 03:00 pm</span></p>
            <p>Friday and Saturday: <span class="bg-orange-500 text-white rounded px-2 py-1">Closed</span></p>
          </div>

          <!-- Web Traffic Section -->
          <div>
            <h3 class="text-lg font-semibold text-white mb-3">Web Traffic</h3>
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
            <h3 class="text-lg font-semibold text-white mb-3">QR Code</h3>
            <img src="https://via.placeholder.com/120x120" alt="QR Code" class="mx-auto mb-2" />
            <p class="text-center text-gray-500 text-sm">www.nik-o-mat.de</p>
          </div>
        </div>
        <div class="text-center text-gray-500 text-sm mt-8">
          <p>Copyright © 2020-2023 Hawler Medical University. All Rights Reserved</p>
        </div>
      </footer>

    </section>
    <script>
      AOS.init();
    </script>
</body>

</html>