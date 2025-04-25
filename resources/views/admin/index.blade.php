<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body class="bg-gray-100 font-sans">
    <div class="flex h-screen overflow-hidden">
        <!-- Desktop Sidebar -->
        <div class="hidden md:flex md:flex-shrink-0">
            <div class="flex flex-col w-64 bg-gray-800">
                <div class="flex items-center h-16 px-4 bg-gray-900">
                    <span class="text-white font-semibold text-lg">AdminPanel</span>
                </div>
                <div class="flex flex-col flex-grow px-4 py-4 overflow-y-auto">
                    <nav class="flex-1 space-y-2">
                        <a href="#" id="dashboard-menu" class="flex items-center px-4 py-2 text-gray-100 rounded-lg">
                            <i class="fas fa-tachometer-alt mr-3"></i>
                            Dashboard
                        </a>
                        <a href="#" id="teachers-menu"
                            class="flex items-center px-4 py-2 text-gray-300 hover:bg-gray-700 hover:text-gray-100 rounded-lg">
                            <i class="fas fa-users mr-3"></i>
                            Teacher
                        </a>
                        <a href="#" id="students-menu"
                            class="flex items-center justify-between px-4 py-2 text-gray-300 hover:bg-gray-700 hover:text-gray-100 rounded-lg">
                            <div class="flex items-center">
                                <i class="fas fa-user-graduate mr-3"></i>
                                Students
                            </div>
                            <span
                                class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-white bg-red-500 rounded-full">23</span>
                        </a>
                        <a href="#"
                            class="flex items-center px-4 py-2 text-gray-300 hover:bg-gray-700 hover:text-gray-100 rounded-lg">
                            <i class="fas fa-cog mr-3"></i>
                            Settings
                        </a>
                        <a href="#"
                            class="flex items-center px-4 py-2 text-gray-300 hover:bg-gray-700 hover:text-gray-100 rounded-lg">
                            <i class="fas fa-chart-bar mr-3"></i>
                            Reports
                        </a>
                    </nav>
                </div>
                <div class="p-4 border-t border-gray-700">
                    <div class="flex items-center">
                        <div class="ml-3">
                            <p class="text-sm font-medium text-gray-200">{{ $admin->first_name }}
                                {{ $admin->last_name }}
                            </p>
                            <p class="text-xs font-medium text-gray-400">{{$admin->email}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="flex flex-col flex-1 overflow-hidden">
            <!-- Top Navigation -->
            <header class="flex items-center justify-between h-16 px-4 bg-white border-b border-gray-200">
                <div class="flex items-center">
                    <button id="mobile-menu-button" class="md:hidden text-gray-500 focus:outline-none">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                    <h1 class="ml-4 text-lg font-semibold text-gray-800">Dashboard</h1>
                </div>
                <div class="flex items-center space-x-4">
                    <button class="p-1 text-gray-400 rounded-full hover:text-gray-500 focus:outline-none">
                        <i class="fas fa-bell"></i>
                    </button>
                    <button class="p-1 text-gray-400 rounded-full hover:text-gray-500 focus:outline-none">
                        <i class="fas fa-envelope"></i>
                    </button>
                    <button class="flex items-center text-gray-500 focus:outline-none">
                        <span class="mr-2">Admin</span>
                        <i class="fas fa-chevron-down"></i>
                    </button>
                </div>
            </header>

            <!-- Main Content Area -->
            <main class="flex-1 overflow-y-auto p-4 bg-gray-50">
                <!-- Dashboard View -->
                <div id="dashboard-view">
                    <!-- Stats Cards -->
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
                        <div class="bg-white p-6 rounded-lg shadow">
                            <div class="flex items-center">
                                <div class="p-3 rounded-full bg-blue-100 text-blue-600">
                                    <i class="fas fa-users text-xl"></i>
                                </div>
                                <div class="ml-4">
                                    <p class="text-sm font-medium text-gray-500">Total Users</p>
                                    <p class="text-2xl font-semibold text-gray-800">{{$totalStudents}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white p-6 rounded-lg shadow">
                            <div class="flex items-center">
                                <div class="p-3 rounded-full bg-green-100 text-green-600">
                                    <i class="fas fa-user-graduate text-xl"></i>
                                </div>
                                <div class="ml-4">
                                    <p class="text-sm font-medium text-gray-500">Students</p>
                                    <p class="text-2xl font-semibold text-gray-800">{{ $totalStudents }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white p-6 rounded-lg shadow">
                            <div class="flex items-center">
                                <div class="p-3 rounded-full bg-yellow-100 text-yellow-600">
                                    <i class="fas fa-user-clock text-xl"></i>
                                </div>
                                <div class="ml-4">
                                    <p class="text-sm font-medium text-gray-500">Pending Approvals</p>
                                    <p class="text-2xl font-semibold text-gray-800">{{ $totalpensdinStudents }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white p-6 rounded-lg shadow">
                            <div class="flex items-center">
                                <div class="p-3 rounded-full bg-red-100 text-red-600">
                                    <i class="fas fa-exclamation-triangle text-xl"></i>
                                </div>
                                <div class="ml-4">
                                    <p class="text-sm font-medium text-gray-500">Issues</p>
                                    <p class="text-2xl font-semibold text-gray-800">5</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Recent Activity and Pending Approvals -->
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                        <!-- Recent Activity -->
                        <div class="lg:col-span-2 bg-white p-6 rounded-lg shadow">
                            <h2 class="text-lg font-semibold text-gray-800 mb-4">Recent Activity</h2>
                            <div class="space-y-4">
                                <div class="flex items-start">
                                    <div
                                        class="flex-shrink-0 h-10 w-10 rounded-full bg-blue-100 flex items-center justify-center text-blue-600">
                                        <i class="fas fa-user-plus"></i>
                                    </div>
                                    <div class="ml-4">
                                        <p class="text-sm font-medium text-gray-800">New student registration</p>
                                        <p class="text-sm text-gray-500">John Doe registered 2 hours ago</p>
                                    </div>
                                    <div class="ml-auto text-sm text-gray-500">2h ago</div>
                                </div>
                                <div class="flex items-start">
                                    <div
                                        class="flex-shrink-0 h-10 w-10 rounded-full bg-green-100 flex items-center justify-center text-green-600">
                                        <i class="fas fa-check"></i>
                                    </div>
                                    <div class="ml-4">
                                        <p class="text-sm font-medium text-gray-800">Approved student</p>
                                        <p class="text-sm text-gray-500">Jane Smith was approved</p>
                                    </div>
                                    <div class="ml-auto text-sm text-gray-500">5h ago</div>
                                </div>
                                <div class="flex items-start">
                                    <div
                                        class="flex-shrink-0 h-10 w-10 rounded-full bg-red-100 flex items-center justify-center text-red-600">
                                        <i class="fas fa-times"></i>
                                    </div>
                                    <div class="ml-4">
                                        <p class="text-sm font-medium text-gray-800">Rejected application</p>
                                        <p class="text-sm text-gray-500">Application #1234 was rejected</p>
                                    </div>
                                    <div class="ml-auto text-sm text-gray-500">1d ago</div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Approvals -->
                        <div class="bg-white p-6 rounded-lg shadow">
                            <h2 class="text-lg font-semibold text-gray-800 mb-4">Pending Approvals</h2>
                            <div class="space-y-4">
                                <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                                    <div>
                                        <p class="font-medium text-gray-800">Michael Brown</p>
                                        <p class="text-sm text-gray-500">Computer Science</p>
                                    </div>
                                    <div class="flex space-x-2">
                                        <button class="p-2 text-green-600 bg-green-100 rounded-full hover:bg-green-200">
                                            <i class="fas fa-check"></i>
                                        </button>
                                        <button class="p-2 text-red-600 bg-red-100 rounded-full hover:bg-red-200">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                                    <div>
                                        <p class="font-medium text-gray-800">Sarah Johnson</p>
                                        <p class="text-sm text-gray-500">Business Administration</p>
                                    </div>
                                    <div class="flex space-x-2">
                                        <button class="p-2 text-green-600 bg-green-100 rounded-full hover:bg-green-200">
                                            <i class="fas fa-check"></i>
                                        </button>
                                        <button class="p-2 text-red-600 bg-red-100 rounded-full hover:bg-red-200">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                                    <div>
                                        <p class="font-medium text-gray-800">David Wilson</p>
                                        <p class="text-sm text-gray-500">Electrical Engineering</p>
                                    </div>
                                    <div class="flex space-x-2">
                                        <button class="p-2 text-green-600 bg-green-100 rounded-full hover:bg-green-200">
                                            <i class="fas fa-check"></i>
                                        </button>
                                        <button class="p-2 text-red-600 bg-red-100 rounded-full hover:bg-red-200">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <button class="mt-4 w-full py-2 px-4 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                                View All Pending
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Students View (hidden by default) -->
                <div id="students-view">
                    @foreach ($pendingStudents as $student)
                        <div
                            class="px-6 py-4 border-b flex flex-col md:flex-row justify-between items-start md:items-center">
                            <div class="flex items-center space-x-4">
                                <div
                                    class="flex-shrink-0 h-10 w-10 rounded-full bg-blue-100 flex items-center justify-center text-blue-600">
                                    <i class="fas fa-user"></i>
                                </div>
                                <div>
                                    <p class="font-medium text-gray-800">{{ $student->first_name }}
                                        {{ $student->last_name }}
                                    </p>
                                    <p class="text-sm text-gray-500">{{ $student->department ?? 'Department' }} • Applied
                                        {{ $student->created_at->diffForHumans() }}
                                    </p>
                                </div>
                            </div>

                            <div class="flex flex-col md:flex-row space-y-2 md:space-y-0 md:space-x-2 mt-4 md:mt-0">
                                <button
                                    onclick="document.getElementById('docs-{{ $student->id }}').classList.toggle('hidden')"
                                    class="px-3 py-1 bg-blue-100 text-blue-700 rounded-lg hover:bg-blue-200">
                                    📄 View Documents
                                </button>

                                <form method="POST" action="{{ route('admin.students.approve', $student->id) }}">
                                    @csrf
                                    <button type="submit"
                                        class="px-3 py-1 bg-green-100 text-green-700 rounded-lg hover:bg-green-200">
                                        ✅ Approve
                                    </button>
                                </form>
                                <form method="POST" action="{{ route('admin.students.reject', $student->id) }}">
                                    @csrf
                                    <button type="submit"
                                        class="px-3 py-1 bg-red-100 text-red-700 rounded-lg hover:bg-red-200">
                                        ❌ Reject
                                    </button>
                                </form>
                            </div>

                            <!-- Hidden Document Viewer -->
                            <div id="docs-{{ $student->id }}" class="w-full mt-4 hidden bg-gray-50 border rounded-lg p-4">
                                <p class="font-medium text-gray-700 mb-2">Submitted Documents:</p>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <!-- Student ID Card -->
                                    <div class="border rounded-lg overflow-hidden">
                                        <div class="bg-gray-100 px-4 py-2 border-b">
                                            <p class="text-sm font-medium text-gray-700">Student ID</p>
                                        </div>
                                        <div class="p-4">
                                            @if($student->student_id_path)
                                                <img src="{{ asset('storage/' . $student->student_id_path) }}" alt="Student ID"
                                                    class="w-full h-auto max-h-64 object-contain rounded border">
                                                <div class="mt-2 text-center">
                                                    <a href="{{ asset('storage/' . $student->student_id_path) }}"
                                                        target="_blank"
                                                        class="inline-block px-2 py-1 text-xs bg-blue-50 text-blue-600 rounded hover:bg-blue-100">
                                                        <i class="fas fa-expand mr-1"></i> Open Full Size
                                                    </a>
                                                </div>
                                            @else
                                                <p class="text-gray-500 text-center py-4">No student ID submitted</p>
                                            @endif
                                        </div>
                                    </div>

                                    <!-- Enrollment Proof -->
                                    <div class="border rounded-lg overflow-hidden">
                                        <div class="bg-gray-100 px-4 py-2 border-b">
                                            <p class="text-sm font-medium text-gray-700">Enrollment Proof</p>
                                        </div>
                                        <div class="p-4">
                                            @if($student->enrollment_proof_path)
                                                <img src="{{ asset('storage/' . $student->enrollment_proof_path) }}"
                                                    alt="Enrollment Proof"
                                                    class="w-full h-auto max-h-64 object-contain rounded border">
                                                <div class="mt-2 text-center">
                                                    <a href="{{ asset('storage/' . $student->enrollment_proof_path) }}"
                                                        target="_blank"
                                                        class="inline-block px-2 py-1 text-xs bg-blue-50 text-blue-600 rounded hover:bg-blue-100">
                                                        <i class="fas fa-expand mr-1"></i> Open Full Size
                                                    </a>
                                                </div>
                                            @else
                                                <p class="text-gray-500 text-center py-4">No enrollment proof submitted</p>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <!-- After the dashboard-view and students-view sections, add: -->
                <div id="teachers-view">
                    <div class="w-full  bg-white rounded-xl shadow-lg overflow-hidden">
                        <!-- Header -->


                        <!-- Form -->

                        <div class="container mx-auto px-4 py-8">
                            <h1 class="text-3xl font-bold mb-6">All Teachers</h1>

                            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                ID</th>
                                            <th
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Name</th>
                                            <th
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Email
                                            </th>
                                            <th
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Department</th>
                                            <th
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Subject
                                            </th>

                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        @foreach($teachers as $teacher)
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                    {{ $teacher->id }}
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="flex items-center">
                                                        <div class="flex-shrink-0 h-10 w-10">
                                                            <img class="h-10 w-10 rounded-full"
                                                                src="https://ui-avatars.com/api/?name={{ urlencode($teacher->first_name . ' ' . $teacher->last_name) }}&color=7F9CF5&background=EBF4FF"
                                                                alt="">
                                                        </div>
                                                        <div class="ml-4">
                                                            <div class="text-sm font-medium text-gray-900">
                                                                {{ $teacher->first_name }}
                                                                {{ $teacher->last_name }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                    {{ $teacher->email }}
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                    {{ $teacher->department }}
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                    {{ $teacher->subject_title }}
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <button id="teacher_signup"
                                class="w-100 bg-blue-600 hover:bg-blue-700 text-white font-bold mt-4 py-3 px-4 rounded-lg transition duration-200 transform hover:scale-[1.02] shadow-md">
                                <i class="fas fa-user-check mr-2"></i> teacher register
                            </button>
                        </div>

                    </div>

                </div>
                <!-- Header -->
                <div id="signup_view">
                    <div class="bg-blue-600 py-6 px-8 text-center">
                        <i class="fas fa-chalkboard-teacher text-white text-5xl mb-3"></i>
                        <h1 class="text-2xl font-bold text-white">Teacher Registration</h1>
                        <p class="text-white mt-1">Verify your faculty status</p>
                    </div>

                    <!-- Form -->
                    <form class="p-8" method="POST" action="{{ route('teacher.register.subject') }}"
                        enctype="multipart/form-data">
                        @csrf


                        <!-- Personal Information Section -->
                        <div class="mb-8">
                            <h2 class="text-xl font-semibold text-gray-800 border-b pb-2 mb-4">
                                Personal Information</h2>

                            <div class="grid md:grid-cols-2 gap-6">
                                <!-- First Name -->
                                <div>
                                    <label for="first_name" class="block text-gray-700 text-sm font-medium mb-2">First
                                        Name*</label>
                                    <div class="relative">
                                        <div
                                            class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <i class="fas fa-user text-gray-400"></i>
                                        </div>
                                        <input type="text" id="first_name" name="first_name" required
                                            class="w-full pl-10 pr-3 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition"
                                            placeholder="John">
                                    </div>
                                </div>

                                <!-- Last Name -->
                                <div>
                                    <label for="last_name" class="block text-gray-700 text-sm font-medium mb-2">Last
                                        Name*</label>
                                    <div class="relative">
                                        <div
                                            class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <i class="fas fa-user text-gray-400"></i>
                                        </div>
                                        <input type="text" id="last_name" name="last_name" required
                                            class="w-full pl-10 pr-3 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition"
                                            placeholder="Doe">
                                    </div>
                                </div>

                                <!-- Department -->
                                <div>
                                    <label for="department"
                                        class="block text-gray-700 text-sm font-medium mb-2">Department*</label>
                                    <div class="relative">
                                        <div
                                            class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <i class="fas fa-building text-gray-400"></i>
                                        </div>
                                        <select id="department" name="department" required
                                            class="w-full pl-10 pr-3 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition appearance-none">
                                            <option value="">Select Department</option>
                                            <option value="dentistry">dentistry</option>
                                            <option value="medicine">medicine</option>
                                            <option value="nursing">nursing</option>
                                            <option value="pharmacy">pharmacy</option>
                                        </select>
                                    </div>
                                </div>



                                <!-- Subject -->
                                <div>
                                    <label for="subject_title"
                                        class="block text-gray-700 text-sm font-medium mb-2">Subject*</label>
                                    <div class="relative">
                                        <div
                                            class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <i class="fas fa-book text-gray-400"></i>
                                        </div>
                                        <input type="text" id="subject_title" name="subject_title" required
                                            class="w-full pl-10 pr-3 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition"
                                            placeholder="e.g., Advanced Calculus">
                                    </div>
                                </div>

                                <!-- Email Field -->
                                <div>
                                    <label for="email" class="block text-gray-700 text-sm font-medium mb-2">School
                                        Email*</label>
                                    <div class="relative">
                                        <div
                                            class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <i class="fas fa-envelope text-gray-400"></i>
                                        </div>
                                        <input type="email" id="email" name="email" required
                                            class="w-full pl-10 pr-3 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition"
                                            placeholder="john.doe@school.edu">
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- Password Section -->
                        <div class="mb-8">
                            <h2 class="text-xl font-semibold text-gray-800 border-b pb-2 mb-4">
                                Account Security</h2>

                            <div class="grid md:grid-cols-2 gap-6">
                                <!-- Password Field -->
                                <div>
                                    <label for="password"
                                        class="block text-gray-700 text-sm font-medium mb-2">Password*</label>
                                    <div class="relative">
                                        <div
                                            class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <i class="fas fa-lock text-gray-400"></i>
                                        </div>
                                        <input type="password" id="password" name="password" required minlength="8"
                                            class="w-full pl-10 pr-3 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition"
                                            placeholder="••••••••">
                                    </div>
                                    <p class="mt-1 text-xs text-gray-500">Minimum 8 characters
                                    </p>
                                </div>

                                <!-- Confirm Password -->
                                <div>
                                    <label for="password_confirmation"
                                        class="block text-gray-700 text-sm font-medium mb-2">Confirm
                                        Password*</label>
                                    <div class="relative">
                                        <div
                                            class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <i class="fas fa-lock text-gray-400"></i>
                                        </div>
                                        <input type="password" id="password_confirmation" name="password_confirmation"
                                            required
                                            class="w-full pl-10 pr-3 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition"
                                            placeholder="••••••••">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Teacher Verification Section -->

                        <!-- Submit Button -->
                        <button type="submit"
                            class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-4 rounded-lg transition duration-200 transform hover:scale-[1.02] shadow-md">
                            <i class="fas fa-user-check mr-2"></i> Submit for signup
                        </button>

                        <!-- Error Messages -->
                        @if($errors->any())
                            <div class="mt-6 bg-red-50 border-l-4 border-red-500 p-4">
                                <div class="flex">
                                    <div class="flex-shrink-0">
                                        <i class="fas fa-exclamation-circle text-red-500 mt-1"></i>
                                    </div>
                                    <div class="ml-3">
                                        <p class="text-sm text-red-700">
                                            @foreach($errors->all() as $error)
                                                {{ $error }}<br>
                                            @endforeach
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endif


                    </form>
                </div>



        </div>
        <!-- Mobile sidebar overlay -->
        <div class="fixed inset-0 z-40 hidden" id="mobile-sidebar">
            <div class="fixed inset-0 bg-gray-600 bg-opacity-75 transition-opacity" id="mobile-sidebar-backdrop"></div>
            <div class="fixed inset-y-0 left-0 flex max-w-xs w-full">
                <div class="relative w-64 bg-gray-800">
                    <!-- Close button -->
                    <button id="mobile-menu-close" class="absolute top-4 right-4 text-white focus:outline-none">
                        <i class="fas fa-times text-xl"></i>
                    </button>

                    <!-- Mobile sidebar content -->
                    <div class="flex flex-col h-full">
                        <div class="flex items-center h-16 px-4 bg-gray-900">
                            <span class="text-white font-semibold text-lg">AdminPanel</span>
                        </div>
                        <div class="flex flex-col flex-grow px-4 py-4 overflow-y-auto">
                            <nav class="flex-1 space-y-2">
                                <a href="#" class="flex items-center px-4 py-2 text-gray-100 bg-gray-700 rounded-lg">
                                    <i class="fas fa-tachometer-alt mr-3"></i>
                                    Dashboard
                                </a>
                                <a href="#"
                                    class="flex items-center px-4 py-2 text-gray-300 hover:bg-gray-700 hover:text-gray-100 rounded-lg">
                                    <i class="fas fa-users mr-3"></i>
                                    Users
                                </a>
                                <a href="#" id="mobile-students-menu"
                                    class="flex items-center justify-between px-4 py-2 text-gray-300 hover:bg-gray-700 hover:text-gray-100 rounded-lg">
                                    <div class="flex items-center">
                                        <i class="fas fa-user-graduate mr-3"></i>
                                        Students
                                    </div>
                                    <span
                                        class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-white bg-red-500 rounded-full">23</span>
                                </a>
                                <a href="#"
                                    class="flex items-center px-4 py-2 text-gray-300 hover:bg-gray-700 hover:text-gray-100 rounded-lg">
                                    <i class="fas fa-cog mr-3"></i>
                                    Settings
                                </a>
                                <a href="#"
                                    class="flex items-center px-4 py-2 text-gray-300 hover:bg-gray-700 hover:text-gray-100 rounded-lg">
                                    <i class="fas fa-chart-bar mr-3"></i>
                                    Reports
                                </a>
                            </nav>
                        </div>
                        <div class="p-4 border-t border-gray-700">
                            <div class="flex items-center">
                                <img class="w-10 h-10 rounded-full" src="" alt="Admin">
                                <div class="ml-3">
                                    <p class="text-sm font-medium text-gray-200">
                                        Admin
                                        User</p>
                                    <p class="text-xs font-medium text-gray-400">
                                        admin@example.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function () {
                // Mobile menu functionality
                const mobileMenuButton = document.getElementById('mobile-menu-button');
                const mobileMenuClose = document.getElementById('mobile-menu-close');
                const mobileSidebar = document.getElementById('mobile-sidebar');
                const backdrop = document.getElementById('mobile-sidebar-backdrop');
                const mobileTeachersMenu = document.getElementById('mobile-teachers-menu');

                mobileMenuButton.addEventListener('click', function () {
                    mobileSidebar.classList.remove('hidden');
                    document.body.style.overflow = 'hidden';
                });

                function closeMenu() {
                    mobileSidebar.classList.add('hidden');
                    document.body.style.overflow = '';
                }

                mobileMenuClose.addEventListener('click', closeMenu);
                backdrop.addEventListener('click', closeMenu);

                document.querySelectorAll('#mobile-sidebar a').forEach(item => {
                    item.addEventListener('click', closeMenu);
                });

                // View switching functionality
                const studentsMenu = document.getElementById('students-menu');
                const mobileStudentsMenu = document.getElementById('mobile-students-menu');
                const dashboardMenu = document.getElementById('dashboard-menu');
                const dashboardView = document.getElementById('dashboard-view');
                const studentsView = document.getElementById('students-view');
                const teachersMenu = document.getElementById('teachers-menu');
                const teachersView = document.getElementById('teachers-view');
                const signupView = document.getElementById('signup_view');
                const teacherSignup = document.getElementById('teacher_signup');

                function showStudentsView() {
                    dashboardView.classList.add('hidden');
                    teachersView.classList.add('hidden');
                    signupView.classList.add('hidden');
                    studentsView.classList.remove('hidden');

                    // Highlight Students
                    studentsMenu.classList.add('bg-gray-700', 'text-white', 'font-semibold', 'rounded-md');
                    // Remove highlight from Dashboard
                    dashboardMenu.classList.remove('bg-gray-700', 'text-white', 'font-semibold', 'rounded-md');
                    teachersMenu.classList.remove('bg-gray-700', 'text-white', 'font-semibold', 'rounded-md');
                }

                function showDashboardView() {
                    dashboardView.classList.remove('hidden');
                    studentsView.classList.add('hidden');
                    teachersView.classList.add('hidden');
                    signupView.classList.add('hidden');

                    // Highlight Dashboard
                    dashboardMenu.classList.add('bg-gray-700', 'text-white', 'font-semibold', 'rounded-md');
                    // Remove highlight from Students
                    studentsMenu.classList.remove('bg-gray-700', 'text-white', 'font-semibold', 'rounded-md');
                    teachersMenu.classList.remove('bg-gray-700', 'text-white', 'font-semibold', 'rounded-md');
                }

                function showTeachersView() {
                    dashboardView.classList.add('hidden');
                    studentsView.classList.add('hidden');
                    teachersView.classList.remove('hidden');
                    signupView.classList.add('hidden');

                    // Update active states
                    dashboardMenu.classList.remove('bg-gray-700', 'text-white', 'font-semibold', 'rounded-md');
                    // Remove highlight from Students
                    studentsMenu.classList.remove('bg-gray-700', 'text-white', 'font-semibold', 'rounded-md');
                    teachersMenu.classList.add('bg-gray-700', 'text-white', 'font-semibold', 'rounded-md');
                }
                function showTeacherssignup() {
                    dashboardView.classList.add('hidden');
                    studentsView.classList.add('hidden');
                    teachersView.classList.remove('hidden');
                    signupView.classList.remove('hidden');

                    // Update active states
                    dashboardMenu.classList.remove('bg-gray-700', 'text-white', 'font-semibold', 'rounded-md');
                    // Remove highlight from Students
                    studentsMenu.classList.remove('bg-gray-700', 'text-white', 'font-semibold', 'rounded-md');
                    teachersMenu.classList.add('bg-gray-700', 'text-white', 'font-semibold', 'rounded-md');
                }
                showDashboardView();

                // Event listeners for menu items
                studentsMenu.addEventListener('click', function (e) {
                    e.preventDefault();
                    showStudentsView();
                });

                mobileStudentsMenu.addEventListener('click', function (e) {
                    e.preventDefault();
                    showStudentsView();
                    closeMenu();
                });

                dashboardMenu.addEventListener('click', function (e) {
                    e.preventDefault();
                    showDashboardView();
                });

                teachersMenu.addEventListener('click', function (e) {
                    e.preventDefault();
                    showTeachersView();
                });
                teacherSignup.addEventListener('click', function (e) {
                    e.preventDefault();
                    showTeacherssignup();
                });

                // Missing event listener for mobileTeachersMenu
                mobileTeachersMenu.addEventListener('click', function (e) {
                    e.preventDefault();
                    showTeachersView();
                    closeMenu();
                });
            });

            document.querySelector('form').addEventListener('submit', function (e) {
                const password = document.getElementById('password').value;
                const confirmPassword = document.getElementById('password_confirmation').value;

                if (password !== confirmPassword) {
                    e.preventDefault();
                    alert('Passwords do not match!');
                    return;
                }
            });
        </script>
</body>

</html>