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
<body class="bg-white text-gray-900 " style="font-family: Cambria, Georgia, serif; max-width: 100%;
  overflow-x: hidden;" >

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

 <div class="py-52 container mx-auto">
  <!-- Title -->
 <!-- Header Section -->
<div class="mb-6">
  <!-- Title -->
  <h1 class="text-5xl font-bold text-gray-900 mb-4">Relevant Websites</h1>

  <!-- Divider -->
  <hr class="border-gray-200 mb-4" />

  <!-- Sub-header row -->
  <div class="flex items-start space-x-4">
    <!-- Orange pin icon -->
    <div class="bg-white text-white p-3 rounded shadow">
      📌
    </div>

    <!-- Info & subtitle -->
    <div>
      <!-- Info row -->
      <div class="flex flex-wrap items-center text-sm text-gray-500 space-x-4 mb-1">
        <span class="flex items-center"><span class="mr-1">📁</span>BLOG</span>
        <span class="flex items-center"><span class="mr-1">📂</span>HMU</span>
        <span class="flex items-center"><span class="mr-1">📅</span>25 MARCH 2021</span>
      
      </div>
      <!-- Subtitle -->
      <h2 class="text-xl font-semibold text-gray-800">Relevant Websites</h2>
    </div>
  </div>
</div>


  <!-- Table -->
  <table class="min-w-full border text-sm mb-4">
    <thead class="bg-gray-100">
      <tr>
        <th class="border px-4 py-2 text-left">SN</th>
        <th class="border px-4 py-2 text-left">Country</th>
        <th class="border px-4 py-2 text-left">List of University and College Website’s Link</th>
      </tr>
    </thead>
    <tbody id="table-body" class="bg-white">
      <!-- Dynamic rows inserted here -->
    </tbody>
  </table>

  <!-- Pagination -->
  <div class="flex justify-center space-x-4">
    <button onclick="changePage(-1)" id="prevBtn" class="px-4 py-2 bg-gray-100 hover:bg-gray-200 rounded shadow disabled:opacity-50">❮ Prev</button>
    <button onclick="changePage(1)" id="nextBtn" class="px-4 py-2 bg-gray-100 hover:bg-gray-200 rounded shadow disabled:opacity-50">Next ❯</button>
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
        tr.className = "hover:bg-gray-50";
        tr.innerHTML = `
          <td class="border px-4 py-2">${start + index + 1}</td>
          <td class="border px-4 py-2">${item[0]}</td>
          <td class="border px-4 py-2 text-blue-600 underline">
            <a href="#">${item[1]}</a>
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
