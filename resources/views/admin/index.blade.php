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
                        <a href="#"
                            class="flex items-center px-4 py-2 text-gray-300 hover:bg-gray-700 hover:text-gray-100 rounded-lg">
                            <i class="fas fa-users mr-3"></i>
                            Users
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
                        <img class="w-10 h-10 rounded-full" src="https://randomuser.me/api/portraits/men/32.jpg"
                            alt="Admin">
                        <div class="ml-3">
                            <p class="text-sm font-medium text-gray-200">Admin User</p>
                            <p class="text-xs font-medium text-gray-400">admin@example.com</p>
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
                                    <p class="text-2xl font-semibold text-gray-800">1,254</p>
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
                                    <p class="text-2xl font-semibold text-gray-800">856</p>
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
                                    <p class="text-2xl font-semibold text-gray-800">23</p>
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
                <div id="students-view" class="hidden">
                    <div class="flex items-center justify-between mb-6">
                        <h2 class="text-lg font-semibold text-gray-800">Student Management</h2>

                    </div>

                    <div class="mb-6 grid grid-cols-1 md:grid-cols-3 gap-4">
                        <div class="bg-white p-4 border border-gray-200 rounded-lg shadow-sm">
                            <h3 class="text-lg font-medium text-gray-800 mb-2">Pending Approvals</h3>
                            <p class="text-3xl font-bold text-yellow-600">23</p>
                            <p class="text-sm text-gray-500">Students waiting for review</p>
                        </div>
                        <div class="bg-white p-4 border border-gray-200 rounded-lg shadow-sm">
                            <h3 class="text-lg font-medium text-gray-800 mb-2">Total Students</h3>
                            <p class="text-3xl font-bold text-blue-600">856</p>
                            <p class="text-sm text-gray-500">Registered students</p>
                        </div>
                        <div class="bg-white p-4 border border-gray-200 rounded-lg shadow-sm">
                            <h3 class="text-lg font-medium text-gray-800 mb-2">Active Today</h3>
                            <p class="text-3xl font-bold text-green-600">42</p>
                            <p class="text-sm text-gray-500">Students active today</p>
                        </div>
                    </div>

                    <div class="bg-white border border-gray-200 rounded-lg shadow-sm overflow-hidden">
                        <div class="px-6 py-4 border-b border-gray-200 bg-gray-50">
                            <h3 class="text-lg font-medium text-gray-800">Pending Student Approvals</h3>
                        </div>
                        <div class="divide-y divide-gray-200">
                            <!-- Pending Student 1 -->
                            <div class="px-6 py-4 flex items-center justify-between">
                                <div class="flex items-center space-x-4">
                                    <div
                                        class="flex-shrink-0 h-10 w-10 rounded-full bg-blue-100 flex items-center justify-center text-blue-600">
                                        <i class="fas fa-user"></i>
                                    </div>
                                    <div>
                                        <p class="font-medium text-gray-800">Michael Brown</p>
                                        <p class="text-sm text-gray-500">Computer Science • Applied 2h ago</p>
                                    </div>
                                </div>
                                <div class="flex space-x-2">
                                    <button class="px-3 py-1 bg-green-100 text-green-700 rounded-lg hover:bg-green-200">
                                        <i class="fas fa-check mr-1"></i> Approve
                                    </button>
                                    <button class="px-3 py-1 bg-red-100 text-red-700 rounded-lg hover:bg-red-200">
                                        <i class="fas fa-times mr-1"></i> Reject
                                    </button>
                                </div>
                            </div>

                            <!-- Pending Student 2 -->
                            <div class="px-6 py-4 flex items-center justify-between">
                                <div class="flex items-center space-x-4">
                                    <div
                                        class="flex-shrink-0 h-10 w-10 rounded-full bg-blue-100 flex items-center justify-center text-blue-600">
                                        <i class="fas fa-user"></i>
                                    </div>
                                    <div>
                                        <p class="font-medium text-gray-800">Sarah Johnson</p>
                                        <p class="text-sm text-gray-500">Business Administration • Applied 3h ago</p>
                                    </div>
                                </div>
                                <div class="flex space-x-2">
                                    <button class="px-3 py-1 bg-green-100 text-green-700 rounded-lg hover:bg-green-200">
                                        <i class="fas fa-check mr-1"></i> Approve
                                    </button>
                                    <button class="px-3 py-1 bg-red-100 text-red-700 rounded-lg hover:bg-red-200">
                                        <i class="fas fa-times mr-1"></i> Reject
                                    </button>
                                </div>
                            </div>

                            <!-- Pending Student 3 -->
                            <div class="px-6 py-4 flex items-center justify-between">
                                <div class="flex items-center space-x-4">
                                    <div
                                        class="flex-shrink-0 h-10 w-10 rounded-full bg-blue-100 flex items-center justify-center text-blue-600">
                                        <i class="fas fa-user"></i>
                                    </div>
                                    <div>
                                        <p class="font-medium text-gray-800">David Wilson</p>
                                        <p class="text-sm text-gray-500">Electrical Engineering • Applied 14h ago</p>
                                    </div>
                                </div>
                                <div class="flex space-x-2">
                                    <button class="px-3 py-1 bg-green-100 text-green-700 rounded-lg hover:bg-green-200">
                                        <i class="fas fa-check mr-1"></i> Approve
                                    </button>
                                    <button class="px-3 py-1 bg-red-100 text-red-700 rounded-lg hover:bg-red-200">
                                        <i class="fas fa-times mr-1"></i> Reject
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="px-6 py-4 border-t border-gray-200 bg-gray-50 text-right">
                            <button class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                                View All Pending Approvals
                            </button>
                        </div>
                    </div>
                </div>
            </main>
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
                                <p class="text-sm font-medium text-gray-200">Admin User</p>
                                <p class="text-xs font-medium text-gray-400">admin@example.com</p>
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

            function showStudentsView() {
                dashboardView.classList.add('hidden');
                studentsView.classList.remove('hidden');

                // Highlight Students
                studentsMenu.classList.add('bg-gray-700', 'text-white', 'font-semibold', 'rounded-md');
                // Remove highlight from Dashboard
                dashboardMenu.classList.remove('bg-gray-700', 'text-white', 'font-semibold', 'rounded-md');
            }

            function showDashboardView() {
                dashboardView.classList.remove('hidden');
                studentsView.classList.add('hidden');

                // Highlight Dashboard
                dashboardMenu.classList.add('bg-gray-700', 'text-white', 'font-semibold', 'rounded-md');
                // Remove highlight from Students
                studentsMenu.classList.remove('bg-gray-700', 'text-white', 'font-semibold', 'rounded-md');
            }


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
        });
    </script>
</body>

</html>