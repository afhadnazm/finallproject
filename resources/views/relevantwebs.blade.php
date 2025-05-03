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
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        /* Custom animation for table rows */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .fade-in-up {
            animation: fadeInUp 0.6s ease-out forwards;
        }
        
        /* Hover effect for table rows */
        .hover-scale {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .hover-scale:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
        
        /* Pulse animation for important elements */
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }
        
        .pulse:hover {
            animation: pulse 1.5s infinite;
        }
    </style>
</head>
<body class="bg-white text-gray-900" style="font-family: Cambria, Georgia, serif; max-width: 100%; overflow-x: hidden;">

<!-- Navbar -->
<nav class="bg-white shadow-sm fixed top-0 left-0 w-full z-10 animate-fade-in p-6" data-aos="fade-down">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <div class="flex items-center">
                    <img src="{{ asset('storage/images/logo.jpg') }}" alt="Logo" class="h-24 w-24 rounded-md transition-transform duration-300 hover:scale-105">
                    <span class="ml-2 text-lg font-semibold text-orange-600">Hawler Medical University</span>
                </div>

                <!-- Menu Items (Hidden on mobile) -->
                <div class="hidden md:flex space-x-1">
                    <!-- Home Dropdown -->
                    <div class="relative group">
                        <a href="/" class="px-3 py-2 text-gray-700 flex items-center hover:text-orange-600 hover:bg-orange-50 rounded transition-colors duration-300">
                            HOME
                            <svg class="w-4 h-4 ml-1 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </a>
                        <div class="absolute left-0 mt-2 w-48 bg-white rounded-md shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50">
                            <div class="py-2 px-4">
                                <a href="{{ url('/aboutus') }}" class="block py-1.5 text-sm text-gray-700 hover:text-orange-600 hover:bg-orange-50 rounded px-2 transition-colors duration-200">About us</a>
                                <a href="{{ url('/contactus') }}" class="block py-1.5 text-sm text-gray-700 hover:text-orange-600 hover:bg-orange-50 rounded px-2 transition-colors duration-200">Contact us</a>
                            </div>
                        </div>
                    </div>

                    <!-- Other Links -->
                    <div class="relative group">
                        <a href="#" class="px-3 py-2 text-gray-700 flex items-center hover:text-orange-600 hover:bg-orange-50 rounded transition-colors duration-300">
                            DIVISIONS
                            <svg class="w-4 h-4 ml-1 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </a>
                        <div class="absolute left-0 mt-2 w-48 bg-white rounded-md shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50">
                            <div class="py-2 px-4">
                                <a href="{{ url('/universitycounsel') }}" class="block py-1.5 text-sm text-gray-700 hover:text-orange-600 hover:bg-orange-50 rounded px-2 transition-colors duration-200">University Counsil</a>
                                <a href="{{ url('/presidentoffice') }}" class="block py-1.5 text-sm text-gray-700 hover:text-orange-600 hover:bg-orange-50 rounded px-2 transition-colors duration-200">President's Office</a>
                                <a href="{{ url('/vission') }}" class="block py-1.5 text-sm text-gray-700 hover:text-orange-600 hover:bg-orange-50 rounded px-2 transition-colors duration-200">Vision and Mission</a>
                                <a href="{{ url('/logo') }}" class="block py-1.5 text-sm text-gray-700 hover:text-orange-600 hover:bg-orange-50 rounded px-2 transition-colors duration-200">University Logo</a>
                            </div>
                        </div>
                    </div>

                    <div class="relative group">
                        <a href="#" class="px-3 py-2 text-gray-700 flex items-center hover:text-orange-600 hover:bg-orange-50 rounded transition-colors duration-300">
                            COLLEGE
                            <svg class="w-4 h-4 ml-1 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </a>
                        <div class="absolute left-0 mt-2 w-48 bg-white rounded-md shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50">
                            <div class="py-2 px-4">
                                <a href="{{ route('colleges.medicine') }}" class="block py-1.5 text-sm text-gray-700 hover:text-orange-600 hover:bg-orange-50 rounded px-2 transition-colors duration-200">College of Medicine</a>
                                
                                <a href="{{ route('colleges.pharmacy') }}" class="block py-1.5 text-sm text-gray-700 hover:text-orange-600 hover:bg-orange-50 rounded px-2 transition-colors duration-200">College of Pharmacy</a>
                                <a href="{{ route('colleges.nursing') }}" class="block py-1.5 text-sm text-gray-700 hover:text-orange-600 hover:bg-orange-50 rounded px-2 transition-colors duration-200">College of Nursing</a>
                            </div>
                        </div>
                    </div>

                    <div class="relative group">
                        <a href="#" class="px-3 py-2 text-gray-700 flex items-center hover:text-orange-600 hover:bg-orange-50 rounded transition-colors duration-300">
                            FEATURE
                            <svg class="w-4 h-4 ml-1 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </a>
                        <div class="absolute left-0 mt-2 w-48 bg-white rounded-md shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50">
                            <div class="py-2 px-4">
                                <a href="{{ url('/library') }}" class="block py-1.5 text-sm text-gray-700 hover:text-orange-600 hover:bg-orange-50 rounded px-2 transition-colors duration-200">Library</a>
              
                                <a href="{{ url('/relevantwebs') }}" class="block py-1.5 text-sm text-gray-700 hover:text-orange-600 hover:bg-orange-50 rounded px-2 transition-colors duration-200">Relevant Websites</a>
                                <a href="{{ url('/acadimicrelations') }}" class="block py-1.5 text-sm text-gray-700 hover:text-orange-600 hover:bg-orange-50 rounded px-2 transition-colors duration-200">Academic Relations</a>
                                <a href="{{ url('/acadimicprofile') }}" class="block py-1.5 text-sm text-gray-700 hover:text-orange-600 hover:bg-orange-50 rounded px-2 transition-colors duration-200">Academicians Profile</a>
                            </div>
                        </div>
                    </div>

                    <div class="relative group">
                        <a href="#" class="px-3 py-2 text-gray-700 flex items-center hover:text-orange-600 hover:bg-orange-50 rounded transition-colors duration-300">
                            SERVICE
                            <svg class="w-4 h-4 ml-1 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </a>
                        <div class="absolute left-0 mt-2 w-48 bg-white rounded-md shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50">
                            <div class="py-2 px-4">
                                <a href="{{ url('/it') }}" class="block py-1.5 text-sm text-gray-700 hover:text-orange-600 hover:bg-orange-50 rounded px-2 transition-colors duration-200">IT Services</a>
                                <a href="{{ url('/documents') }}" class="block py-1.5 text-sm text-gray-700 hover:text-orange-600 hover:bg-orange-50 rounded px-2 transition-colors duration-200">Documents</a>
                                <a href="{{ url('/e-management') }}" class="block py-1.5 text-sm text-gray-700 hover:text-orange-600 hover:bg-orange-50 rounded px-2 transition-colors duration-200">E-Management</a>
                            </div>
                        </div>
                    </div>

                    <a href="{{ url('/events') }}" class="px-3 py-2 text-gray-700 hover:text-orange-600 hover:bg-orange-50 rounded transition-colors duration-300">EVENTS</a>

                    <div class="relative group">
                        <a href="#" class="px-3 py-2 text-gray-700 flex items-center hover:text-orange-600 hover:bg-orange-50 rounded transition-colors duration-300">
                            PORTAL
                            <svg class="w-4 h-4 ml-1 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </a>
                        <div class="absolute left-0 mt-2 w-48 bg-white rounded-md shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50">
                            <div class="py-2 px-4">
                                <a href="/student_login" class="block py-1.5 text-sm text-gray-700 hover:text-orange-600 hover:bg-orange-50 rounded px-2 transition-colors duration-200">Student Portal</a>
                                <a href="/teacher_login" class="block py-1.5 text-sm text-gray-700 hover:text-orange-600 hover:bg-orange-50 rounded px-2 transition-colors duration-200">Teacher Portal</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Hamburger Button (Mobile) -->
                <div class="md:hidden flex items-center">
                    <button id="menu-btn" class="text-orange-500 focus:outline-none transition-transform duration-300 hover:scale-110">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Mobile Menu -->
            <div id="mobile-menu" class="hidden md:hidden bg-white shadow-lg px-4 py-4 space-y-2">
                <a href="/" class="block text-gray-700 py-2 hover:text-orange-600 transition-colors duration-200">Home</a>
                <a href="{{ url('/aboutus') }}" class="block text-gray-700 py-2 hover:text-orange-600 transition-colors duration-200">About Us</a>
                <a href="{{ url('/contactus') }}" class="block text-gray-700 py-2 hover:text-orange-600 transition-colors duration-200">Contact Us</a>
                <a href="{{ url('/events') }}" class="block text-gray-700 py-2 hover:text-orange-600 transition-colors duration-200">Events</a>

                <div class="mobile-accordion">
                    <button class="flex justify-between items-center w-full py-2 px-4 text-gray-700 hover:bg-orange-50 hover:text-orange-600 font-bold text-orange-500 mt-4 transition-colors duration-200">
                        Divisions
                        <svg class="w-4 h-4 text-orange-500 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="hidden px-4 py-2 bg-gray-50">
                        <a href="{{ url('/universitycounsel') }}" class="block text-gray-600 py-1 pl-4 hover:text-orange-600 transition-colors duration-200">University Council</a>
                        <a href="{{ url('/presidentoffice') }}" class="block text-gray-600 py-1 pl-4 hover:text-orange-600 transition-colors duration-200">President's Office</a>
                        <a href="{{ url('/vission') }}" class="block text-gray-600 py-1 pl-4 hover:text-orange-600 transition-colors duration-200">Vision and Mission</a>
                        <a href="{{ url('/logo') }}" class="block text-gray-600 py-1 pl-4 hover:text-orange-600 transition-colors duration-200">University Logo</a>
                    </div>
                </div>

                <div class="mobile-accordion">
                    <button class="flex justify-between items-center w-full py-2 px-4 text-gray-700 hover:bg-orange-50 hover:text-orange-600 font-bold text-orange-500 mt-4 transition-colors duration-200">
                        College
                        <svg class="w-4 h-4 text-orange-500 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="hidden px-4 py-2 bg-gray-50">
                        <a href="{{ route('colleges.medicine') }}" class="block text-gray-600 py-1 pl-4 hover:text-orange-600 transition-colors duration-200">College of Medicine</a>
                   
                        <a href="{{ route('colleges.pharmacy') }}" class="block text-gray-600 py-1 pl-4 hover:text-orange-600 transition-colors duration-200">College of Pharmacy</a>
                        <a href="{{ route('colleges.nursing') }}" class="block text-gray-600 py-1 pl-4 hover:text-orange-600 transition-colors duration-200">College of Nursing</a>
                    </div>
                </div>

                <div class="mobile-accordion">
                    <button class="flex justify-between items-center w-full py-2 px-4 text-gray-700 hover:bg-orange-50 hover:text-orange-600 font-bold text-orange-500 mt-4 transition-colors duration-200">
                        Feature
                        <svg class="w-4 h-4 text-orange-500 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="hidden px-4 py-2 bg-gray-50">
                        <a href="{{ url('/library') }}" class="block text-gray-600 py-1 pl-4 hover:text-orange-600 transition-colors duration-200">Library</a>
                      
                        <a href="{{ url('/relevantwebs') }}" class="block text-gray-600 py-1 pl-4 hover:text-orange-600 transition-colors duration-200">Relevant Websites</a>
                        <a href="{{ url('/acadimicrelations') }}" class="block text-gray-600 py-1 pl-4 hover:text-orange-600 transition-colors duration-200">Academic Relations</a>
                        <a href="{{ url('/acadimicprofile') }}" class="block text-gray-600 py-1 pl-4 hover:text-orange-600 transition-colors duration-200">Academicians Profile</a>
                    </div>
                </div>

                <div class="mobile-accordion">
                    <button class="flex justify-between items-center w-full py-2 px-4 text-gray-700 hover:bg-orange-50 hover:text-orange-600 font-bold text-orange-500 mt-4 transition-colors duration-200">
                        Service
                        <svg class="w-4 h-4 text-orange-500 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="hidden px-4 py-2 bg-gray-50">
                        <a href="{{ url('/it') }}" class="block text-gray-600 py-1 pl-4 hover:text-orange-600 transition-colors duration-200">IT Services</a>
                        <a href="{{ url('/documents') }}" class="block text-gray-600 py-1 pl-4 hover:text-orange-600 transition-colors duration-200">Documents</a>
                        <a href="{{ url('/e-management') }}" class="block text-gray-600 py-1 pl-4 hover:text-orange-600 transition-colors duration-200">E-Management</a>
                    </div>
                </div>

                <div class="mobile-accordion">
                    <button class="flex justify-between items-center w-full py-2 px-4 text-gray-700 hover:bg-orange-50 hover:text-orange-600 font-bold text-orange-500 mt-4 transition-colors duration-200">
                        Portal
                        <svg class="w-4 h-4 text-orange-500 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="hidden px-4 py-2 bg-gray-50">
                        <a href="/student_login" class="block text-gray-600 py-1 pl-4 hover:text-orange-600 transition-colors duration-200">Student Portal</a>
                        <a href="/teacher_login" class="block text-gray-600 py-1 pl-4 hover:text-orange-600 transition-colors duration-200">Teacher Portal</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>


 <div class="py-52 container mx-auto">
  <!-- Title -->
 <!-- Header Section -->
<div class="mb-6" data-aos="fade-up">
  <!-- Title -->
  <h1 class="text-5xl font-bold text-gray-900 mb-4">Relevant Websites</h1>

  <!-- Divider -->
  <hr class="border-gray-200 mb-4" data-aos="fade-left" data-aos-delay="200" />

  <!-- Sub-header row -->
  <div class="flex items-start space-x-4" data-aos="fade-up" data-aos-delay="300">
    <!-- Orange pin icon -->
    <div class="bg-white text-white p-3 rounded shadow pulse">
      📌
    </div>

    <!-- Info & subtitle -->
    <div>
      <!-- Info row -->
      <div class="flex flex-wrap items-center text-sm text-gray-500 space-x-4 mb-1">
        <span class="flex items-center transition-all duration-300 hover:text-orange-600"><span class="mr-1">📁</span>BLOG</span>
        <span class="flex items-center transition-all duration-300 hover:text-orange-600"><span class="mr-1">📂</span>HMU</span>
        <span class="flex items-center transition-all duration-300 hover:text-orange-600"><span class="mr-1">📅</span>25 MARCH 2021</span>
      </div>
      <!-- Subtitle -->
      <h2 class="text-xl font-semibold text-gray-800 transition-colors duration-300 hover:text-orange-600">Relevant Websites</h2>
    </div>
  </div>
</div>


  <!-- Table -->
  <table class="min-w-full border text-sm mb-4" data-aos="fade-up" data-aos-delay="400">
    <thead class="bg-gray-100">
      <tr>
        <th class="border px-4 py-2 text-left">SN</th>
        <th class="border px-4 py-2 text-left">Country</th>
        <th class="border px-4 py-2 text-left">List of University and College Website's Link</th>
      </tr>
    </thead>
    <tbody id="table-body" class="bg-white">
      <!-- Dynamic rows inserted here -->
    </tbody>
  </table>

  <!-- Pagination -->
  <div class="flex justify-center space-x-4" data-aos="fade-up" data-aos-delay="500">
    <button onclick="changePage(-1)" id="prevBtn" class="px-4 py-2 bg-gray-100 hover:bg-gray-200 rounded shadow disabled:opacity-50 transition-all duration-300 hover:scale-105">❮ Prev</button>
    <button onclick="changePage(1)" id="nextBtn" class="px-4 py-2 bg-gray-100 hover:bg-gray-200 rounded shadow disabled:opacity-50 transition-all duration-300 hover:scale-105">Next ❯</button>
  </div>

  <script>
    const data = [
      ["Erbil-Kurdistan Region-Iraq", "Tishk International University"],
      ["Iran", "Kermanshah University of Medical Sciences"],
      ["Malaysia", "Universiti Sains of Malaysia"],
      ["Germany", "Department of pharmaceutical biology, Gothenburg University (JGU) Mainz"],
      ["Poland", "Poznan University of Medical Science"],
      ["Cyprus", "Cyprus Health and Social Science University"],
      ["Turkey", "Firat University"],
      ["Van-Turkey", "YÜZÜNCÜ YIL ÜNİVERSİTESİ"],
      ["Erbil-Kurdistan Region-Iraq", "Awamedica Drug Manufacturer"],
      ["Russia", "Federal State Education Budget Institution of Higher Education"],
      ["United States of America", "Latter-day Saint Charities (LDS Charities)"],
      ["Erbil-Kurdistan Region-Iraq", "College of Dentistry, Tishk International University"],
      ["Erbil-Kurdistan Region-Iraq", "CUE"],
      ["Iran", "Tehran University of Medical Sciences (TUMS)"],
      ["United Kingdom", "The Global Child Dental Fund"],
      ["United Kingdom", "The London School of Economics and Political Science"],
      ["United Kingdom", "University of Dundee"],
      ["United Kingdom", "Cardiff University"],
      ["Iraq", "College of Dentistry, Tikrit University"],
      ["UK-London", "NCDs in Humanitarian Settings"]
    ];

    const rowsPerPage = 10;
    let currentPage = 0;

    function renderTable() {
      const tableBody = document.getElementById("table-body");
      tableBody.innerHTML = "";
      const start = currentPage * rowsPerPage;
      const end = start + rowsPerPage;
      const pageItems = data.slice(start, end);

      pageItems.forEach((item, index) => {
        const tr = document.createElement("tr");
        tr.className = "hover:bg-gray-50 hover-scale fade-in-up";
        tr.style.animationDelay = `${index * 0.05}s`;
        tr.innerHTML = `
          <td class="border px-4 py-2">${start + index + 1}</td>
          <td class="border px-4 py-2">${item[0]}</td>
          <td class="border px-4 py-2 text-blue-600 underline">
            <a href="#" class="transition-colors duration-300 hover:text-orange-600">${item[1]}</a>
          </td>`;
        tableBody.appendChild(tr);
      });

      document.getElementById("prevBtn").disabled = currentPage === 0;
      document.getElementById("nextBtn").disabled = end >= data.length;
    }

    function changePage(direction) {
      currentPage += direction;
      renderTable();
    }

    renderTable();
  </script>


</div>

<section class="w-full" data-aos="fade-up">
  <footer class="bg-gray-900 text-gray-300 py-10 px-4 md:px-6 lg:px-12">
    <div class="container mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
      <!-- Contact HMU Section -->
      <div data-aos="fade-up" data-aos-delay="100">
        <h3 class="text-lg font-semibold text-white mb-4">Contact HMU</h3>
        <ul class="space-y-2">
          <li class="flex items-center transition-transform duration-300 hover:translate-x-1">
            <span class="mr-2">✉️</span>
            <a href="mailto:info@hmu.edu.krd" class="hover:text-orange-500 transition-colors duration-300">info@hmu.edu.krd</a>
          </li>
          <li class="flex items-center transition-transform duration-300 hover:translate-x-1">
            <span class="mr-2">🌐</span>
            <a href="http://www.hmu.edu.krd" class="hover:text-orange-500 transition-colors duration-300">www.hmu.edu.krd</a>
          </li>
          <li class="transition-transform duration-300 hover:translate-x-1">Tel: +964 66 227 3384</li>
          <li class="transition-transform duration-300 hover:translate-x-1">Fax: +964 66 227 3382</li>
          <li class="flex items-start transition-transform duration-300 hover:translate-x-1">
            <span class="mr-2">📍</span>
            Iraq, Kurdistan Region,<br />
            Erbil, 100M Street, Near Rizgary Teaching Hospital,<br />
            P.O. Box 178
          </li>
        </ul>
      </div>

      <!-- Opening Hours Section -->
      <div data-aos="fade-up" data-aos-delay="200">
        <h3 class="text-lg font-semibold text-white mb-4">Opening Hours</h3>
        <p class="transition-transform duration-300 hover:translate-x-1">Sunday - Thursday: <span class="text-gray-100">08:30 am - 03:00 pm</span></p>
        <p class="transition-transform duration-300 hover:translate-x-1 mt-2">Friday and Saturday: <span class="bg-orange-500 text-white rounded px-2 py-1 inline-block transition-transform duration-300 hover:scale-105">Closed</span></p>
      </div>

      <!-- Web Traffic Section -->
      <div data-aos="fade-up" data-aos-delay="300">
        <h3 class="text-lg font-semibold text-white mb-4">Web Traffic</h3>
        <ul class="space-y-1">
          <li class="transition-transform duration-300 hover:translate-x-1">👤 Today: <span class="text-gray-100">2265</span></li>
          <li class="transition-transform duration-300 hover:translate-x-1">👤 Yesterday: <span class="text-gray-100">3898</span></li>
          <li class="transition-transform duration-300 hover:translate-x-1">👤 This Week: <span class="text-gray-100">12748</span></li>
          <li class="transition-transform duration-300 hover:translate-x-1">👤 This Month: <span class="text-gray-100">90849</span></li>
          <li class="transition-transform duration-300 hover:translate-x-1">👤 Total: <span class="text-gray-100">4394545</span></li>
        </ul>
        <hr class="my-4 border-gray-700" />
        <p class="text-center text-gray-100 text-xl font-bold transition-transform duration-300 hover:scale-110">16</p>
        <p class="text-center text-sm text-gray-500 transition-colors duration-300 hover:text-orange-500">Online</p>
        <p class="text-center text-sm mt-2 transition-colors duration-300 hover:text-orange-500">21 November 2024</p>
      </div>

      <!-- QR Code Section -->
      <div data-aos="fade-up" data-aos-delay="400">
        <h3 class="text-lg font-semibold text-white mb-4">QR Code</h3>
        <img src="https://via.placeholder.com/120x120" alt="QR Code" class="mx-auto mb-2 transition-transform duration-300 hover:scale-105" />
        <p class="text-center text-gray-500 text-sm transition-colors duration-300 hover:text-orange-500">www.nik-o-mat.de</p>
      </div>
    </div>
    <div class="text-center text-gray-500 text-sm mt-8" data-aos="fade-up">
      <p class="transition-colors duration-300 hover:text-orange-500">Copyright © 2020-2023 Hawler Medical University. All Rights Reserved</p>
    </div>
  </footer>
</section>

<script>
    // Initialize AOS animations
    AOS.init({
        duration: 800,
        once: true,
        easing: 'ease-in-out',
        offset: 100
    });

    // Mobile menu toggle
    const btn = document.getElementById('menu-btn');
    const menu = document.getElementById('mobile-menu');

    btn.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    });
    
    // Mobile accordion functionality
    document.querySelectorAll('.mobile-accordion button').forEach(button => {
        button.addEventListener('click', () => {
            const content = button.nextElementSibling;
            const icon = button.querySelector('svg');
            
            content.classList.toggle('hidden');
            icon.classList.toggle('rotate-180');
        });
    });
    
    // Add hover effects to table rows
    document.addEventListener('DOMContentLoaded', () => {
        const tableRows = document.querySelectorAll('#table-body tr');
        tableRows.forEach(row => {
            row.addEventListener('mouseenter', () => {
                row.classList.add('shadow-md');
            });
            row.addEventListener('mouseleave', () => {
                row.classList.remove('shadow-md');
            });
        });
    });
</script>

</body>
</html>