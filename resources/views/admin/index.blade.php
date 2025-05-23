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
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>

<body class="bg-gray-100 font-sans min-h-screen overflow-y-auto bg-gray-100">
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

                        </a>
                        <a href="#" id="subjects-menu"
                            class="flex items-center px-4 py-2 text-gray-300 hover:bg-gray-700 hover:text-gray-100 rounded-lg">
                            <i class="fas fa-book-open mr-3"></i>
                            subject
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
            <div class="flex-1 overflow-y-auto p-4 bg-gray-50">
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
                                    <p class="text-2xl font-semibold text-gray-800">{{$totalStudents + $totalTeachers}}
                                    </p>
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

                    </div>


                </div>

                <!-- Students View (hidden by default) -->
                <div id="students-view">
                    <div class="flex items-center ">
                        <button id="mobile-menu-button" class="md:hidden text-gray-500 focus:outline-none">
                            <i class="fas fa-bars text-xl"></i>
                        </button>
                        <h1 class="text-3xl font-bold mb-6">Pending Approvals</h1>
                    </div>
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
                    @if ($errors->any())
                        <div class="mb-4 p-4 bg-red-100 border border-red-200 text-red-700 rounded">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>- {{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
                <!-- After the dashboard-view and students-view sections, add: -->
                <div id="teachers-view">
                    <div class="w-full  bg-white rounded-xl shadow-lg overflow-hidden">

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
                <div id="signup_view"
                    class="max-w-4xl mx-auto p-8 bg-white rounded-xl shadow-lg overflow-hidden mt-6 hidden">
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
                    </form>
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



                </div>







                <div id="subjects_create_view"
                    class="w-full bg-white rounded-xl shadow-lg p-8 overflow-y-auto max-h-screen">
                    @if(session('success'))
                        <div class="mb-4 p-4 bg-green-100 border border-green-200 text-green-700 rounded">
                            {{ session('success') }}
                        </div>
                    @endif

                    <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Name</th>
                                        <th
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Stage</th>
                                        <th
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Semester</th>
                                        <th
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Teacher</th>
                                        <th
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @foreach($subjects as $subject)
                                        <tr
                                            x-data="{ editing: false, subject: {{ json_encode($subject) }}, original: {{ json_encode($subject) }} }">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span x-show="!editing" x-text="subject.name"
                                                    class="text-sm font-medium text-gray-900"></span>
                                                <input x-show="editing" x-model="subject.name" type="text"
                                                    class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm p-2 border">
                                            </td>
                                            <!-- Stage Column -->
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span x-show="!editing" x-text="subject.stage ? subject.stage.name : 'N/A'"
                                                    class="text-sm text-gray-500"></span>
                                                <select x-show="editing" x-model="subject.stage_id"
                                                    class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm p-2 border">
                                                    @foreach($stages as $stage)
                                                        <option value="{{ $stage->id }}">{{ $stage->name }}</option>
                                                    @endforeach
                                                </select>
                                            </td>

                                            <!-- Semester Column -->
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span x-show="!editing"
                                                    x-text="subject.semester ? subject.semester.name : 'N/A'"
                                                    class="text-sm text-gray-500"></span>
                                                <select x-show="editing" x-model="subject.semester_id"
                                                    class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm p-2 border">
                                                    @foreach($semesters as $semester)
                                                        <option value="{{ $semester->id }}">{{ $semester->name }}</option>
                                                    @endforeach
                                                </select>
                                            </td>

                                            <!-- Teacher Column -->
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span x-show="!editing"
                                                    x-text="subject.teacher ? (subject.teacher.first_name + ' ' + subject.teacher.last_name) : 'N/A'"
                                                    class="text-sm text-gray-500"></span>
                                                <select x-show="editing" x-model="subject.teacher_id"
                                                    class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm p-2 border">
                                                    @foreach($teachers as $teacher)
                                                        <option value="{{ $teacher->id }}">{{ $teacher->first_name }}
                                                            {{ $teacher->last_name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </td>

                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                                <template x-if="!editing">
                                                    <button @click="editing = true"
                                                        class="text-indigo-600 hover:text-indigo-900 mr-3">Edit</button>
                                                </template>
                                                <template x-if="editing">
                                                    <div class="flex space-x-2">
                                                        <button
                                                            @click="
                                                                                                                                                                axios.put(`/admin/subjects/${subject.id}`, {
                                                                                                                                                                    name: subject.name,
                                                                                                                                                                    stage_id: subject.stage_id,
                                                                                                                                                                    semester_id: subject.semester_id,
                                                                                                                                                                    teacher_id: subject.teacher_id
                                                                                                                                                                })
                                                                                                                                                                .then(response => {
                                                                                                                                                                    editing = false;
                                                                                                                                                                    original = JSON.parse(JSON.stringify(subject));
                                                                                                                                                                    alert('Changes saved successfully!');
                                                                                                                                                                })
                                                                                                                                                                .catch(error => {
                                                                                                                                                                    console.error('Error:', error.response.data);
                                                                                                                                                                    alert('Error: ' + (error.response.data.message || 'Failed to save'));
                                                                                                                                                                });
                                                                                                                                                            "
                                                            class="text-green-600 hover:text-green-900">Save</button>

                                                        <button @click="editing = false; subject = original"
                                                            class="text-gray-600 hover:text-gray-900">Cancel</button>
                                                    </div>
                                                </template>

                                                <form action="{{ route('admin.subjects.destroy', $subject->id) }}"
                                                    method="POST" class="inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="text-red-600 hover:text-red-900"
                                                        onclick="return confirm('Are you sure you want to delete this subject?')">
                                                        Delete
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


                <script>
                    document.addEventListener('alpine:init', () => {
                        Alpine.data('subjectTable', () => ({
                            init() {
                                // Any initialization code if needed
                            }
                        }))
                    })
                </script>

                <div class=" bg-white rounded-xl shadow-lg overflow-hidden p-8" id="subjects-view">
                    <h1 class="text-2xl font-bold text-gray-800 mb-6">Create New Subject</h1>



                    <form action="{{ route('admin.subjects.store') }}" method="POST" class="space-y-6">
                        @csrf

                        <div>
                            <label class="block text-gray-700">Subject Name</label>
                            <input type="text" name="name" class="w-full mt-2 p-2 border rounded" required>
                        </div>


                        <div>
                            <label class="block text-gray-700">Stage</label>
                            <select name="stage" class="w-full mt-2 p-2 border rounded" required>
                                @foreach($stages as $stage)
                                    <option value="{{ $stage->id }}">{{ $stage->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div>
                            <label class="block text-gray-700">Semester</label>
                            <select name="semester" class="w-full mt-2 p-2 border rounded" required>
                                @foreach($semesters as $semester)
                                    <option value="{{ $semester->id }}">{{ $semester->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div>
                            <label class="block text-gray-700">Assign Teacher</label>
                            <select name="teacher_id" class="w-full mt-2 p-2 border rounded">
                                <option value="">-- None --</option>
                                @foreach($teachers as $teacher)
                                    <option value="{{ $teacher->id }}">{{ $teacher->first_name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="flex justify-end">
                            <button type="submit"
                                class="px-6 py-2 bg-indigo-600 text-white rounded hover:bg-indigo-700">
                                Create Subject
                            </button>
                        </div>
                    </form>
                </div>


                <!-- Mobile sidebar overlay -->
                <div class="fixed inset-0 z-40 hidden" id="mobile-sidebar">
                    <div class="fixed inset-0 bg-gray-600 bg-opacity-75 transition-opacity"
                        id="mobile-sidebar-backdrop"></div>
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
                                        <a href="#" id="mobile-dashboard-menu"
                                            class="flex items-center px-4 py-2 text-gray-100 bg-gray-700 rounded-lg">
                                            <i class="fas fa-tachometer-alt mr-3"></i>
                                            Dashboard
                                        </a>
                                        <a href="#" id="mobile-teachers-menu"
                                            class="flex items-center px-4 py-2 text-gray-300 hover:bg-gray-700 hover:text-gray-100 rounded-lg">
                                            <i class="fas fa-users mr-3"></i>
                                            Teachers
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
                                        <a href="#" id="mobile-subjects-menu"
                                            class="flex items-center px-4 py-2 text-gray-300 hover:bg-gray-700 hover:text-gray-100 rounded-lg">
                                            <i class="fas fa-book-open mr-3"></i>
                                            Subjects
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
                    document.addEventListener('alpine:init', () => {
                        Alpine.data('subjectRow', () => ({
                            editing: false,
                            originalData: {},
                            subject: {},

                            init() {
                                this.originalData = JSON.parse(JSON.stringify(this.subject));
                            },

                            save() {
                                fetch(this.$el.getAttribute('data-update-url'), {
                                    method: 'PUT',
                                    headers: {
                                        'Content-Type': 'application/json',
                                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                                    },
                                    body: JSON.stringify(this.subject)
                                })
                                    .then(response => response.json())
                                    .then(data => {
                                        this.editing = false;
                                        this.originalData = JSON.parse(JSON.stringify(data));
                                    })
                                    .catch(error => console.error('Error:', error));
                            },

                            cancel() {
                                this.subject = JSON.parse(JSON.stringify(this.originalData));
                                this.editing = false;
                            }
                        }));
                    });
                    document.addEventListener('DOMContentLoaded', function () {
                        // Mobile menu functionality
                        const mobileMenuButton = document.getElementById('mobile-menu-button');
                        const mobileMenuClose = document.getElementById('mobile-menu-close');
                        const mobileSidebar = document.getElementById('mobile-sidebar');
                        const backdrop = document.getElementById('mobile-sidebar-backdrop');
                        const mobileTeachersMenu = document.getElementById('mobile-teachers-menu');
                        const mobileStudentsMenu = document.getElementById('mobile-students-menu');
                        const mobileSubjectsMenu = document.getElementById('mobile-subjects-menu');
                        const mobileDashboardMenu = document.getElementById('mobile-dashboard-menu');


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
                        mobileTeachersMenu.addEventListener('click', function (e) {
                            e.preventDefault();
                            showTeachersView();
                            closeMenu();
                        });
                        mobileStudentsMenu.addEventListener('click', function (e) {
                            e.preventDefault();
                            showStudentsView();
                            closeMenu();
                        });
                        mobileSubjectsMenu.addEventListener('click', function (e) {
                            e.preventDefault();
                            showsubject();
                            closeMenu();
                        });
                        mobileDashboardMenu.addEventListener('click', function (e) {
                            e.preventDefault();
                            showDashboardView();
                            closeMenu();
                        });


                        // View switching functionality
                        const studentsMenu = document.getElementById('students-menu');
                        const dashboardMenu = document.getElementById('dashboard-menu');
                        const dashboardView = document.getElementById('dashboard-view');
                        const studentsView = document.getElementById('students-view');
                        const teachersMenu = document.getElementById('teachers-menu');
                        const teachersView = document.getElementById('teachers-view');
                        const signupView = document.getElementById('signup_view');
                        const teacherSignup = document.getElementById('teacher_signup');
                        const subjectsView = document.getElementById('subjects-view');
                        const subjectsMenu = document.getElementById('subjects-menu');
                        const subjectsCreateView = document.getElementById('subjects_create_view');

                        function showStudentsView() {
                            dashboardView.classList.add('hidden');
                            teachersView.classList.add('hidden');
                            signupView.classList.add('hidden');
                            studentsView.classList.remove('hidden');
                            subjectsView.classList.add('hidden');
                            subjectsCreateView.classList.add('hidden');


                            studentsMenu.classList.add('bg-gray-700', 'text-white', 'font-semibold', 'rounded-md');
                            dashboardMenu.classList.remove('bg-gray-700', 'text-white', 'font-semibold', 'rounded-md');
                            teachersMenu.classList.remove('bg-gray-700', 'text-white', 'font-semibold', 'rounded-md');
                            subjectsMenu.classList.remove('bg-gray-700', 'text-white', 'font-semibold', 'rounded-md');
                        }

                        function showDashboardView() {
                            dashboardView.classList.remove('hidden');
                            studentsView.classList.add('hidden');
                            teachersView.classList.add('hidden');
                            signupView.classList.add('hidden');
                            subjectsView.classList.add('hidden');
                            subjectsCreateView.classList.add('hidden');

                            // Highlight Dashboard
                            dashboardMenu.classList.add('bg-gray-700', 'text-white', 'font-semibold', 'rounded-md');
                            // Remove highlight from Students
                            studentsMenu.classList.remove('bg-gray-700', 'text-white', 'font-semibold', 'rounded-md');
                            teachersMenu.classList.remove('bg-gray-700', 'text-white', 'font-semibold', 'rounded-md');
                            subjectsMenu.classList.remove('bg-gray-700', 'text-white', 'font-semibold', 'rounded-md');
                        }

                        function showTeachersView() {
                            dashboardView.classList.add('hidden');
                            studentsView.classList.add('hidden');
                            teachersView.classList.remove('hidden');
                            signupView.classList.add('hidden');
                            subjectsView.classList.add('hidden');
                            subjectsCreateView.classList.add('hidden');

                            // Update active states
                            dashboardMenu.classList.remove('bg-gray-700', 'text-white', 'font-semibold', 'rounded-md');
                            // Remove highlight from Students
                            studentsMenu.classList.remove('bg-gray-700', 'text-white', 'font-semibold', 'rounded-md');
                            teachersMenu.classList.add('bg-gray-700', 'text-white', 'font-semibold', 'rounded-md');
                            subjectsMenu.classList.remove('bg-gray-700', 'text-white', 'font-semibold', 'rounded-md');
                        }
                        function showTeacherssignup() {
                            dashboardView.classList.add('hidden');
                            studentsView.classList.add('hidden');
                            teachersView.classList.remove('hidden');
                            signupView.classList.remove('hidden');
                            subjectsView.classList.add('hidden');
                            subjectsCreateView.classList.add('hidden');

                            // Update active states
                            dashboardMenu.classList.remove('bg-gray-700', 'text-white', 'font-semibold', 'rounded-md');
                            // Remove highlight from Students
                            studentsMenu.classList.remove('bg-gray-700', 'text-white', 'font-semibold', 'rounded-md');
                            teachersMenu.classList.add('bg-gray-700', 'text-white', 'font-semibold', 'rounded-md');
                            subjectsMenu.classList.remove('bg-gray-700', 'text-white', 'font-semibold', 'rounded-md');
                        }
                        function showsubject() {
                            dashboardView.classList.add('hidden');
                            studentsView.classList.add('hidden');
                            teachersView.classList.add('hidden');
                            signupView.classList.add('hidden');
                            subjectsView.classList.remove('hidden');
                            subjectsCreateView.classList.remove('hidden');

                            // Update active states
                            dashboardMenu.classList.remove('bg-gray-700', 'text-white', 'font-semibold', 'rounded-md');
                            // Remove highlight from Students
                            studentsMenu.classList.remove('bg-gray-700', 'text-white', 'font-semibold', 'rounded-md');
                            teachersMenu.classList.remove('bg-gray-700', 'text-white', 'font-semibold', 'rounded-md');
                            subjectsMenu.classList.add('bg-gray-700', 'text-white', 'font-semibold', 'rounded-md');
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
                        subjectsMenu.addEventListener('click', function (e) {
                            e.preventDefault();
                            showsubject();
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
            </div>
        </div>
    </div>
</body>

</html>