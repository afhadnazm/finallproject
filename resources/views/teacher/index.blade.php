<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#DC2626', // Updated red shade
                        secondary: '#2563EB',
                        accent: '#10B981',
                        dark: '#1F2937',
                        light: '#F9FAFB',
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-gray-50 font-sans">
    <!-- Navigation Sidebar -->
    <div class="flex h-screen">
        <div class="w-64 bg-white shadow-md hidden md:block">
            <div class="p-4 border-b border-gray-200">
                <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 bg-primary rounded-full flex items-center justify-center text-white font-bold">
                        {{ strtoupper(substr($teacher->first_name, 0, 1)) }}
                    </div>
                    <div>
                        <p class="font-medium text-dark">{{ $teacher->first_name }}</p>
                        <p class="text-xs text-gray-500">Teacher</p>
                    </div>
                </div>
            </div>
            <nav class="p-4">
                <ul class="space-y-2">
                    <li>
                        <a href="#" class="flex items-center space-x-3 p-2 rounded-lg bg-primary text-white">
                            <i class="fas fa-tachometer-alt w-5"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center space-x-3 p-2 rounded-lg text-gray-700 hover:bg-gray-100">
                            <i class="fas fa-users w-5"></i>
                            <span>Students</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center space-x-3 p-2 rounded-lg text-gray-700 hover:bg-gray-100">
                            <i class="fas fa-book w-5"></i>
                            <span>Subjects</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center space-x-3 p-2 rounded-lg text-gray-700 hover:bg-gray-100">
                            <i class="fas fa-calendar-alt w-5"></i>
                            <span>Schedule</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center space-x-3 p-2 rounded-lg text-gray-700 hover:bg-gray-100">
                            <i class="fas fa-chart-bar w-5"></i>
                            <span>Reports</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center space-x-3 p-2 rounded-lg text-gray-700 hover:bg-gray-100">
                            <i class="fas fa-cog w-5"></i>
                            <span>Settings</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="flex-1 overflow-auto">
            <!-- Top Header -->
            <header class="bg-white shadow-sm">
                <div class="flex justify-between items-center p-4">
                    <div class="flex items-center md:hidden">
                        <button class="mr-4 text-gray-600">
                            <i class="fas fa-bars"></i>
                        </button>
                        <h1 class="text-xl font-bold text-dark">Dashboard</h1>
                    </div>
                    <div class="flex items-center space-x-4">
                        <button class="p-2 text-gray-600 hover:text-primary relative">
                            <i class="fas fa-bell"></i>
                            <span class="absolute top-0 right-0 h-2 w-2 rounded-full bg-primary"></span>
                        </button>
                        <div class="flex items-center space-x-2">
                            <span class="hidden md:inline text-sm font-medium">{{ $teacher->first_name }} {{ $teacher->last_name }}</span>
                            <div class="w-8 h-8 bg-primary rounded-full flex items-center justify-center text-white font-bold text-sm">
                                {{ strtoupper(substr($teacher->first_name, 0, 1)) }}{{ strtoupper(substr($teacher->last_name, 0, 1)) }}
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Main Content Area -->
            <main class="p-6">
                <!-- Welcome Banner -->
                <div class="bg-gradient-to-r from-primary to-red-700 rounded-xl shadow-md overflow-hidden mb-8">
                    <div class="p-6 md:p-8 text-white">
                        <h1 class="text-2xl md:text-3xl font-bold mb-2">Welcome, {{ $teacher->title }} {{ $teacher->last_name }}!</h1>
                        <p class="max-w-2xl text-red-100">You're teaching {{ $teacher->subject_title }} to {{ $teacher->students ? $teacher->students->count() : 0 }} students this semester.</p>
                        <div class="mt-4 flex flex-wrap gap-4">
                            <div class="bg-white bg-opacity-20 rounded-lg px-4 py-2">
                                <span class="font-medium">Next Class:</span> 
                                <span>Mon, 10:00 AM</span>
                            </div>
                            <div class="bg-white bg-opacity-20 rounded-lg px-4 py-2">
                                <span class="font-medium">Pending Grades:</span> 
                                <span>12 assignments</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Quick Stats -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                    <div class="bg-white rounded-xl shadow-sm p-6 border-l-4 border-primary">
                        <div class="flex justify-between items-start">
                            <div>
                                <h3 class="text-sm font-medium text-gray-500">Total Students</h3>
                                <p class="mt-1 text-2xl font-semibold text-dark">{{ $teacher->students ? $teacher->students->count() : 0 }}</p>
                            </div>
                            <div class="bg-primary bg-opacity-10 p-3 rounded-lg text-primary">
                                <i class="fas fa-users"></i>
                            </div>
                        </div>
                        <div class="mt-4 flex items-center text-sm text-green-600">
                            <i class="fas fa-arrow-up mr-1"></i>
                            <span>5 new students this term</span>
                        </div>
                    </div>
                    <div class="bg-white rounded-xl shadow-sm p-6 border-l-4 border-secondary">
                        <div class="flex justify-between items-start">
                            <div>
                                <h3 class="text-sm font-medium text-gray-500">Average Class Score</h3>
                                <p class="mt-1 text-2xl font-semibold text-dark">84.5%</p>
                            </div>
                            <div class="bg-blue-100 p-3 rounded-lg text-secondary">
                                <i class="fas fa-chart-line"></i>
                            </div>
                        </div>
                        <div class="mt-4 flex items-center text-sm text-gray-500">
                            <i class="fas fa-info-circle mr-1 text-blue-500"></i>
                            <span>2.1% above last term</span>
                        </div>
                    </div>
                    <div class="bg-white rounded-xl shadow-sm p-6 border-l-4 border-accent">
                        <div class="flex justify-between items-start">
                            <div>
                                <h3 class="text-sm font-medium text-gray-500">Pending Tasks</h3>
                                <p class="mt-1 text-2xl font-semibold text-dark">8</p>
                            </div>
                            <div class="bg-green-100 p-3 rounded-lg text-accent">
                                <i class="fas fa-tasks"></i>
                            </div>
                        </div>
                        <div class="mt-4 flex items-center text-sm text-yellow-600">
                            <i class="fas fa-exclamation-circle mr-1"></i>
                            <span>3 overdue assignments</span>
                        </div>
                    </div>
                </div>

                <!-- Students Gradebook -->
                <div class="bg-white rounded-xl shadow-sm overflow-hidden mb-8">
                    <div class="px-6 py-4 border-b border-gray-200 flex flex-col md:flex-row justify-between items-start md:items-center">
                        <div>
                            <h2 class="text-lg font-semibold text-dark">Gradebook - {{ $teacher->subject_title }}</h2>
                            <p class="text-sm text-gray-500 mt-1">Manage and update student grades</p>
                        </div>
                        <div class="mt-3 md:mt-0 flex space-x-3">
                            <button class="px-4 py-2 bg-gray-100 text-gray-700 rounded-lg text-sm hover:bg-gray-200 transition flex items-center">
                                <i class="fas fa-download mr-2"></i> Export
                            </button>
                            <button class="px-4 py-2 bg-primary text-white rounded-lg text-sm hover:bg-red-700 transition flex items-center">
                                <i class="fas fa-plus mr-2"></i> Add Assignment
                            </button>
                        </div>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Student</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Class</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Midterm</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Quiz</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Homework</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Activity</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Final</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Total</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach($teacher->students as $student)
                                <tr class="hover:bg-gray-50 transition">
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-10 w-10 rounded-full bg-primary bg-opacity-10 flex items-center justify-center text-primary font-medium">
                                                {{ strtoupper(substr($student->first_name, 0, 1)) }}{{ strtoupper(substr($student->last_name, 0, 1)) }}
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-dark">{{ $student->first_name }} {{ $student->last_name }}</div>
                                                <div class="text-xs text-gray-500">Stage {{ $student->stage_id }}</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        {{ $teacher->subject_title }}
                                    </td>
                                    <form action="{{ route('teacher.update.grade', ['student_id' => $student->id]) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <input type="text" name="midterm" value="{{ $student->pivot->midterm }}" 
                                                class="border border-gray-300 rounded-md px-2 py-1 text-sm w-16 focus:ring-primary focus:border-primary">
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <input type="text" name="quiz" value="{{ $student->pivot->quiz }}" 
                                                class="border border-gray-300 rounded-md px-2 py-1 text-sm w-16 focus:ring-primary focus:border-primary">
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <input type="text" name="homework" value="{{ $student->pivot->homework }}" 
                                                class="border border-gray-300 rounded-md px-2 py-1 text-sm w-16 focus:ring-primary focus:border-primary">
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <input type="text" name="activity" value="{{ $student->pivot->activity }}" 
                                                class="border border-gray-300 rounded-md px-2 py-1 text-sm w-16 focus:ring-primary focus:border-primary">
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <input type="text" name="final" value="{{ $student->pivot->final }}" 
                                                class="border border-gray-300 rounded-md px-2 py-1 text-sm w-16 focus:ring-primary focus:border-primary">
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <input type="text" name="total" value="{{ $student->pivot->total }}" 
                                                class="border border-gray-300 rounded-md px-2 py-1 text-sm w-16 focus:ring-primary focus:border-primary font-semibold">
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                            <button type="submit" class="text-primary hover:text-red-700 mr-3">
                                                <i class="fas fa-save"></i>
                                            </button>
                                            <a href="#" class="text-gray-500 hover:text-gray-700">
                                                <i class="fas fa-chart-bar"></i>
                                            </a>
                                        </td>
                                    </form>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="px-6 py-4 border-t border-gray-200 flex items-center justify-between">
                        <div class="text-sm text-gray-500">
                            Showing <span class="font-medium">1</span> to <span class="font-medium">{{ $teacher->students ? $teacher->students->count() : 0 }}</span> of <span class="font-medium">{{ $teacher->students ? $teacher->students->count() : 0 }}</span> students
                        </div>
                        <div class="flex space-x-2">
                            <button class="px-3 py-1 border border-gray-300 rounded-md text-sm font-medium text-gray-700 bg-white hover:bg-gray-50">
                                Previous
                            </button>
                            <button class="px-3 py-1 border border-gray-300 rounded-md text-sm font-medium text-gray-700 bg-white hover:bg-gray-50">
                                Next
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Recent Activity -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Upcoming Deadlines -->
                    <div class="bg-white rounded-xl shadow-sm overflow-hidden">
                        <div class="px-6 py-4 border-b border-gray-200">
                            <h2 class="text-lg font-semibold text-dark">Upcoming Deadlines</h2>
                        </div>
                        <div class="divide-y divide-gray-200">
                            <div class="px-6 py-4 flex items-start">
                                <div class="flex-shrink-0 h-10 w-10 rounded-full bg-red-100 flex items-center justify-center text-primary">
                                    <i class="fas fa-exclamation"></i>
                                </div>
                                <div class="ml-4">
                                    <div class="text-sm font-medium text-dark">Algebra Midterm</div>
                                    <div class="text-sm text-gray-500 mt-1">Due: May 15, 2023</div>
                                </div>
                                <div class="ml-auto text-xs text-white bg-primary rounded-full px-2 py-1">
                                    Urgent
                                </div>
                            </div>
                            <div class="px-6 py-4 flex items-start">
                                <div class="flex-shrink-0 h-10 w-10 rounded-full bg-blue-100 flex items-center justify-center text-blue-500">
                                    <i class="fas fa-book"></i>
                                </div>
                                <div class="ml-4">
                                    <div class="text-sm font-medium text-dark">Chapter 5 Homework</div>
                                    <div class="text-sm text-gray-500 mt-1">Due: May 18, 2023</div>
                                </div>
                                <div class="ml-auto text-xs text-blue-600 bg-blue-100 rounded-full px-2 py-1">
                                    New
                                </div>
                            </div>
                            <div class="px-6 py-4 flex items-start">
                                <div class="flex-shrink-0 h-10 w-10 rounded-full bg-green-100 flex items-center justify-center text-green-500">
                                    <i class="fas fa-project-diagram"></i>
                                </div>
                                <div class="ml-4">
                                    <div class="text-sm font-medium text-dark">Group Project Review</div>
                                    <div class="text-sm text-gray-500 mt-1">Due: May 22, 2023</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Performance Summary -->
                    <div class="bg-white rounded-xl shadow-sm overflow-hidden">
                        <div class="px-6 py-4 border-b border-gray-200">
                            <h2 class="text-lg font-semibold text-dark">Class Performance</h2>
                        </div>
                        <div class="p-6">
                            <div class="mb-4">
                                <div class="flex justify-between mb-1">
                                    <span class="text-sm font-medium text-dark">A (90-100)</span>
                                    <span class="text-sm font-medium text-dark">12 students</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2.5">
                                    <div class="bg-green-500 h-2.5 rounded-full" style="width: 30%"></div>
                                </div>
                            </div>
                            <div class="mb-4">
                                <div class="flex justify-between mb-1">
                                    <span class="text-sm font-medium text-dark">B (80-89)</span>
                                    <span class="text-sm font-medium text-dark">18 students</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2.5">
                                    <div class="bg-blue-500 h-2.5 rounded-full" style="width: 45%"></div>
                                </div>
                            </div>
                            <div class="mb-4">
                                <div class="flex justify-between mb-1">
                                    <span class="text-sm font-medium text-dark">C (70-79)</span>
                                    <span class="text-sm font-medium text-dark">8 students</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2.5">
                                    <div class="bg-yellow-500 h-2.5 rounded-full" style="width: 20%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between mb-1">
                                    <span class="text-sm font-medium text-dark">D/F (Below 70)</span>
                                    <span class="text-sm font-medium text-dark">2 students</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2.5">
                                    <div class="bg-red-500 h-2.5 rounded-full" style="width: 5%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script>
        // Simple animation for cards on load
        document.addEventListener('DOMContentLoaded', function() {
            const cards = document.querySelectorAll('.bg-white');
            cards.forEach((card, index) => {
                card.style.opacity = '0';
                card.style.transform = 'translateY(20px)';
                card.style.transition = `all 0.3s ease-out ${index * 0.1}s`;
                
                setTimeout(() => {
                    card.style.opacity = '1';
                    card.style.transform = 'translateY(0)';
                }, 100);
            });
        });
    </script>
</body>
</html> 