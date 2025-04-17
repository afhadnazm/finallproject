<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#4F46E5',
                        secondary: '#10B981',
                        dark: '#1F2937',
                        light: '#F9FAFB',
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-gray-50 font-sans">
    <!-- Navbar -->
    <nav class="bg-white shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <div class="flex-shrink-0 flex items-center">
                        <i class="fas fa-graduation-cap text-primary text-2xl mr-2"></i>
                        <span class="text-xl font-bold text-dark">EduTrack</span>
                    </div>
                </div>
                <div class="flex items-center">
                    <div class="ml-4 flex items-center md:ml-6">
                        <button class="p-1 rounded-full text-gray-400 hover:text-gray-500 focus:outline-none">
                            <i class="fas fa-bell text-xl"></i>
                        </button>
                        <div class="ml-3 relative">
                            <div class="flex items-center space-x-2">
                                <span class="text-sm font-medium text-gray-700">{{ $student->first_name }} {{ $student->last_name }}</span>
                                <div class="h-8 w-8 rounded-full bg-primary flex items-center justify-center text-white">
                                    {{ strtoupper(substr($student->first_name, 0, 1)) }}{{ strtoupper(substr($student->last_name, 0, 1)) }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <!-- Welcome Card -->
        <div class="bg-gradient-to-r from-primary to-indigo-600 rounded-xl shadow-md overflow-hidden mb-8">
            <div class="p-6 md:p-8">
                <h1 class="text-2xl md:text-3xl font-bold text-white mb-2">Welcome back, {{ $student->first_name }}!</h1>
                <p class="text-indigo-100 max-w-2xl">Here's an overview of your academic performance. Keep up the good work!</p>
                <div class="mt-4 flex items-center">
                    <div class="bg-white bg-opacity-20 rounded-lg p-2 mr-4">
                        <span class="text-white font-medium">Current GPA: 3.75</span>
                    </div>
                    <div class="bg-white bg-opacity-20 rounded-lg p-2">
                        <span class="text-white font-medium">Rank: Top 15%</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Performance Summary -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
            <div class="bg-white rounded-xl shadow-sm p-6 border-l-4 border-primary">
                <h3 class="text-sm font-medium text-gray-500">Average Score</h3>
                <p class="mt-1 text-2xl font-semibold text-dark">87.5%</p>
                <div class="mt-2 flex items-center text-sm text-green-600">
                    <i class="fas fa-arrow-up mr-1"></i>
                    <span>2.4% from last term</span>
                </div>
            </div>
            <div class="bg-white rounded-xl shadow-sm p-6 border-l-4 border-secondary">
                <h3 class="text-sm font-medium text-gray-500">Assignments</h3>
                <p class="mt-1 text-2xl font-semibold text-dark">{{ count($student->teacherAssignments) }}</p>
                <div class="mt-2 flex items-center text-sm text-gray-500">
                    <i class="fas fa-check-circle mr-1 text-green-500"></i>
                    <span>All submitted</span>
                </div>
            </div>
            <div class="bg-white rounded-xl shadow-sm p-6 border-l-4 border-yellow-400">
                <h3 class="text-sm font-medium text-gray-500">Upcoming</h3>
                <p class="mt-1 text-2xl font-semibold text-dark">3 Tasks</p>
                <div class="mt-2 flex items-center text-sm text-blue-500">
                    <i class="fas fa-calendar-alt mr-1"></i>
                    <span>Next deadline: May 15</span>
                </div>
            </div>
            <div class="bg-white rounded-xl shadow-sm p-6 border-l-4 border-red-400">
                <h3 class="text-sm font-medium text-gray-500">Attendance</h3>
                <p class="mt-1 text-2xl font-semibold text-dark">94%</p>
                <div class="mt-2 flex items-center text-sm text-gray-500">
                    <i class="fas fa-user-check mr-1 text-primary"></i>
                    <span>Excellent record</span>
                </div>
            </div>
        </div>

        <!-- Assignments Table -->
        <div class="bg-white rounded-xl shadow-sm overflow-hidden">
            <div class="px-6 py-4 border-b border-gray-200 flex justify-between items-center">
                <h2 class="text-lg font-semibold text-dark">Assignment Details</h2>
                <div class="flex space-x-3">
                    <button class="px-3 py-1 bg-gray-100 text-gray-600 rounded-lg text-sm hover:bg-gray-200 transition">
                        <i class="fas fa-download mr-1"></i> Export
                    </button>
                    <button class="px-3 py-1 bg-primary text-white rounded-lg text-sm hover:bg-indigo-700 transition">
                        <i class="fas fa-print mr-1"></i> Print
                    </button>
                </div>
            </div>
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Assignment</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Midterm</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Quiz</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Homework</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Activity</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Final</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Total</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach($student->teacherAssignments as $teacherAssignment)
                        <tr class="hover:bg-gray-50 transition">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm font-medium text-dark">{{ $teacherAssignment->pivot->assignment_title }}</div>
                                <div class="text-xs text-gray-500">Due: {{ date('M d, Y', strtotime('+'.rand(1,30).' days')) }}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">{{ $teacherAssignment->pivot->midterm }}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">{{ $teacherAssignment->pivot->quiz }}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">{{ $teacherAssignment->pivot->homework }}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">{{ $teacherAssignment->pivot->activity }}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">{{ $teacherAssignment->pivot->final }}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm font-semibold {{ $teacherAssignment->pivot->total >= 90 ? 'text-green-600' : ($teacherAssignment->pivot->total >= 70 ? 'text-blue-600' : 'text-red-600') }}">
                                    {{ $teacherAssignment->pivot->total }}
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                @if($teacherAssignment->pivot->total >= 90)
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                    Excellent
                                </span>
                                @elseif($teacherAssignment->pivot->total >= 70)
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">
                                    Good
                                </span>
                                @else
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                    Needs Work
                                </span>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="px-6 py-4 border-t border-gray-200 flex items-center justify-between">
                <div class="text-sm text-gray-500">
                    Showing <span class="font-medium">1</span> to <span class="font-medium">{{ count($student->teacherAssignments) }}</span> of <span class="font-medium">{{ count($student->teacherAssignments) }}</span> results
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
        <div class="mt-8 bg-white rounded-xl shadow-sm overflow-hidden">
            <div class="px-6 py-4 border-b border-gray-200">
                <h2 class="text-lg font-semibold text-dark">Recent Activity</h2>
            </div>
            <div class="divide-y divide-gray-200">
                <div class="px-6 py-4 flex items-start">
                    <div class="flex-shrink-0 h-10 w-10 rounded-full bg-green-100 flex items-center justify-center text-green-600">
                        <i class="fas fa-check"></i>
                    </div>
                    <div class="ml-4">
                        <div class="text-sm font-medium text-dark">Assignment Submitted</div>
                        <div class="text-sm text-gray-500 mt-1">Math Homework #4 was submitted on May 5, 2023</div>
                    </div>
                    <div class="ml-auto text-sm text-gray-500">2 days ago</div>
                </div>
                <div class="px-6 py-4 flex items-start">
                    <div class="flex-shrink-0 h-10 w-10 rounded-full bg-blue-100 flex items-center justify-center text-blue-600">
                        <i class="fas fa-book"></i>
                    </div>
                    <div class="ml-4">
                        <div class="text-sm font-medium text-dark">New Material Posted</div>
                        <div class="text-sm text-gray-500 mt-1">Chapter 5: Advanced Algebra uploaded by Dr. Smith</div>
                    </div>
                    <div class="ml-auto text-sm text-gray-500">1 week ago</div>
                </div>
                <div class="px-6 py-4 flex items-start">
                    <div class="flex-shrink-0 h-10 w-10 rounded-full bg-purple-100 flex items-center justify-center text-purple-600">
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="ml-4">
                        <div class="text-sm font-medium text-dark">Achievement Unlocked</div>
                        <div class="text-sm text-gray-500 mt-1">You've earned the "Consistent Performer" badge</div>
                    </div>
                    <div class="ml-auto text-sm text-gray-500">2 weeks ago</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-white border-t border-gray-200 mt-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="flex items-center">
                    <i class="fas fa-graduation-cap text-primary text-xl mr-2"></i>
                    <span class="text-lg font-bold text-dark">EduTrack</span>
                </div>
                <div class="mt-4 md:mt-0 text-sm text-gray-500">
                    © 2023 EduTrack Student Portal. All rights reserved.
                </div>
                <div class="mt-4 md:mt-0 flex space-x-6">
                    <a href="#" class="text-gray-400 hover:text-gray-500">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-gray-500">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-gray-500">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-gray-500">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
            </div>
        </div>
    </footer>

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