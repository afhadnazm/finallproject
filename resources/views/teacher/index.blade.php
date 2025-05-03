<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Teacher Dashboard - Grade Management</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <style>
        .grade-input:focus {
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.2);
            border-color: #3b82f6;
        }

        .subject-card {
            transition: all 0.3s ease;
        }

        .subject-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        /* Toast notification animations */
        .toast {
            animation: slideIn 0.5s, fadeOut 0.5s 2.5s forwards;
        }

        @keyframes slideIn {
            from {
                transform: translateX(100%);
            }

            to {
                transform: translateX(0);
            }
        }

        @keyframes fadeOut {
            from {
                opacity: 1;
            }

            to {
                opacity: 0;
            }
        }
    </style>
</head>

<body class="bg-gray-50 min-h-screen">
    <!-- Navigation -->
    <nav class="bg-indigo-700 text-white shadow-lg">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <div class="flex items-center space-x-2">
                <i class="fas fa-chalkboard-teacher text-2xl"></i>
                <span class="text-xl font-bold">Teacher Portal</span>
            </div>
            <div class="flex items-center space-x-4">
                <span class="hidden md:inline">Welcome, {{ $teacher->first_name }}</span>
                <a href="{{ route('logout.teacher') }}"
                    class="bg-indigo-600 hover:bg-indigo-500 px-4 py-2 rounded-lg transition">
                    <i class="fas fa-sign-out-alt mr-1"></i> Logout
                </a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mx-auto px-4 py-8">
        <!-- Dashboard Header -->
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-8">
            <div>
                <h1 class="text-3xl font-bold text-gray-800">Grade Management</h1>
                <p class="text-gray-600">Manage and update student grades for your subjects</p>
            </div>
            <div class="mt-4 md:mt-0">
                <div class="bg-white p-4 rounded-lg shadow-md flex items-center">
                    <div class="bg-indigo-100 p-3 rounded-full mr-3">
                        <i class="fas fa-book-open text-indigo-600"></i>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500">Teaching</p>
                        <p class="font-bold">{{ $subjects->count() }} Subjects</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Stats Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <div class="bg-white rounded-xl shadow-md p-6 border-l-4 border-blue-500">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-500">Students</p>
                        <p class="text-2xl font-bold">{{ $totalStudents }}</p>
                    </div>
                    <div class="bg-blue-100 p-3 rounded-full">
                        <i class="fas fa-users text-blue-600"></i>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-md p-6 border-l-4 border-green-500">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-500">Grades Submitted</p>
                        <p class="text-2xl font-bold">{{ $gradesSubmitted }}</p>
                    </div>
                    <div class="bg-green-100 p-3 rounded-full">
                        <i class="fas fa-check-circle text-green-600"></i>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-md p-6 border-l-4 border-yellow-500">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-500">Pending Grades</p>
                        <p class="text-2xl font-bold">{{ $gradesPending }}</p>
                    </div>
                    <div class="bg-yellow-100 p-3 rounded-full">
                        <i class="fas fa-clock text-yellow-600"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Subjects Section -->
        <div class="space-y-8">
            @foreach($subjects as $subject)
                    <div class="subject-card bg-white rounded-xl shadow-md overflow-hidden">
                        <!-- Subject Header -->
                        <div class="px-6 py-4 bg-gradient-to-r from-indigo-600 to-indigo-500 text-white">
                            <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                                <div>
                                    <h2 class="text-xl font-semibold">{{ $subject->name }}</h2>
                                    <p class="text-indigo-100">
                                        {{ $subject->stage->name }} - {{ $subject->semester->name }}
                                    </p>
                                </div>
                                <div class="mt-2 md:mt-0">
                                    <span class="inline-block bg-indigo-700 text-white px-3 py-1 rounded-full text-sm">
                                        {{ $subject->students->count() }} Students
                                    </span>
                                </div>
                            </div>
                        </div>

                        <!-- Grades Table -->
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Student
                                        </th>
                                        <th
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Midterm (30%)
                                        </th>
                                        <th
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Final (40%)
                                        </th>
                                        <th
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Practical (30%)
                                        </th>
                                        <th
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Total
                                        </th>
                                        <th
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Actions
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @foreach($subject->students as $student)
                                                            @php
                                                                $grade = $student->grades()->where('subject_id', $subject->id)->first();
                                                            @endphp
                                                            <tr class="hover:bg-gray-50 transition" data-student-id="{{ $student->id }}"
                                                                data-subject-id="{{ $subject->id }}">
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    <div class="flex items-center">
                                                                        <div
                                                                            class="flex-shrink-0 h-10 w-10 bg-indigo-100 rounded-full flex items-center justify-center">
                                                                            <span class="text-indigo-600 font-medium">
                                                                                {{ substr($student->first_name, 0, 1) }}{{ substr($student->last_name, 0, 1) }}
                                                                            </span>
                                                                        </div>
                                                                        <div class="ml-4">
                                                                            <div class="text-sm font-medium text-gray-900">
                                                                                {{ $student->first_name }} {{ $student->last_name }}
                                                                            </div>
                                                                            <div class="text-sm text-gray-500">
                                                                                {{ $student->email }}
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    <input type="number" step="0.01" min="0" max="30"
                                                                        class="grade-input border rounded-lg px-3 py-2 w-24 focus:ring-2 focus:ring-indigo-200 focus:border-indigo-500"
                                                                        data-grade-type="midterm" value="{{ $grade->midterm ?? '' }}"
                                                                        placeholder="0-30">
                                                                </td>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    <input type="number" step="0.01" min="0" max="40"
                                                                        class="grade-input border rounded-lg px-3 py-2 w-24 focus:ring-2 focus:ring-indigo-200 focus:border-indigo-500"
                                                                        data-grade-type="final" value="{{ $grade->final ?? '' }}" placeholder="0-40">
                                                                </td>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    <input type="number" step="0.01" min="0" max="30"
                                                                        class="grade-input border rounded-lg px-3 py-2 w-24 focus:ring-2 focus:ring-indigo-200 focus:border-indigo-500"
                                                                        data-grade-type="practical" value="{{ $grade->practical ?? '' }}"
                                                                        placeholder="0-30">
                                                                </td>
                                                                <td class="px-6 py-4 whitespace-nowrap font-medium">
                                                                    <span
                                                                        class="grade-total inline-block px-3 py-1 rounded-full 
                                                                                                                                        @if(isset($grade) && $grade->total >= 60) bg-green-100 text-green-800
                                                                                                                                        @elseif(isset($grade) && $grade->total < 60) bg-red-100 text-red-800
                                                                                                                                        @else bg-gray-100 text-gray-800 @endif">
                                                                        {{ $grade->total ?? 'N/A' }}
                                                                    </span>
                                                                </td>
                                                                <td class="px-6 py-4 whitespace-nowrap">
                                                                    <button
                                                                        class="save-grade bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded-lg text-sm transition flex items-center">
                                                                        <i class="fas fa-save mr-2"></i> Save
                                                                    </button>
                                                                </td>
                                                            </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
            @endforeach
        </div>
    </div>

    <!-- Toast Notification Container -->
    <div id="toast-container" class="fixed bottom-4 right-4 space-y-2 z-50"></div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Function to show toast notification
            function showToast(message, type = 'success') {
                const toastContainer = document.getElementById('toast-container');
                const toast = document.createElement('div');

                const colors = {
                    success: 'bg-green-500',
                    error: 'bg-red-500',
                    warning: 'bg-yellow-500',
                    info: 'bg-blue-500'
                };

                toast.className = `toast ${colors[type]} text-white px-6 py-3 rounded-lg shadow-lg flex items-center`;
                toast.innerHTML = `
                    <i class="fas ${type === 'success' ? 'fa-check-circle' : type === 'error' ? 'fa-exclamation-circle' : type === 'warning' ? 'fa-exclamation-triangle' : 'fa-info-circle'} mr-2"></i>
                    <span>${message}</span>
                `;

                toastContainer.appendChild(toast);

                // Remove toast after animation
                setTimeout(() => {
                    toast.remove();
                }, 3000);
            }

            // Auto-calculate total when grades change
            document.querySelectorAll('.grade-input').forEach(input => {
                input.addEventListener('input', function () {
                    const row = this.closest('tr');
                    calculateRowTotal(row);
                });
            });

            // Calculate total for a row
            function calculateRowTotal(row) {
                const midterm = parseFloat(row.querySelector('[data-grade-type="midterm"]').value) || 0;
                const final = parseFloat(row.querySelector('[data-grade-type="final"]').value) || 0;
                const practical = parseFloat(row.querySelector('[data-grade-type="practical"]').value) || 0;

                // Validate max values
                if (midterm > 30) row.querySelector('[data-grade-type="midterm"]').value = 30;
                if (final > 40) row.querySelector('[data-grade-type="final"]').value = 40;
                if (practical > 30) row.querySelector('[data-grade-type="practical"]').value = 30;

                const total = (midterm + final + practical).toFixed(2);
                const totalElement = row.querySelector('.grade-total');

                totalElement.textContent = total === '0.00' ? 'N/A' : total;

                // Update color based on total
                totalElement.className = 'grade-total inline-block px-3 py-1 rounded-full ';
                if (total === '0.00' || total === 'N/A') {
                    totalElement.classList.add('bg-gray-100', 'text-gray-800');
                } else if (total >= 60) {
                    totalElement.classList.add('bg-green-100', 'text-green-800');
                } else {
                    totalElement.classList.add('bg-red-100', 'text-red-800');
                }
            }

            // Save grades with better UI feedback
            document.querySelectorAll('.save-grade').forEach(button => {
                button.addEventListener('click', async function () {
                    const row = this.closest('tr');
                    const studentId = row.getAttribute('data-student-id');
                    const subjectId = row.getAttribute('data-subject-id');
                    const saveButton = this;

                    // Get all grade values
                    const midterm = parseFloat(row.querySelector('[data-grade-type="midterm"]').value) || null;
                    const final = parseFloat(row.querySelector('[data-grade-type="final"]').value) || null;
                    const practical = parseFloat(row.querySelector('[data-grade-type="practical"]').value) || null;

                    // Loading state
                    saveButton.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i> Saving...';
                    saveButton.classList.add('opacity-75', 'cursor-not-allowed');
                    saveButton.disabled = true;

                    try {
                        const response = await fetch('{{ route("teacher.update.grade") }}', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'Accept': 'application/json',
                                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                            },
                            body: JSON.stringify({
                                student_id: studentId,
                                subject_id: subjectId,
                                midterm: midterm,
                                final: final,
                                practical: practical
                            })
                        });

                        const result = await response.json();

                        if (!response.ok) {
                            throw new Error(result.message || 'Failed to save grades');
                        }

                        // Update the total display with the server-calculated value
                        if (result.total !== undefined) {
                            const totalElement = row.querySelector('.grade-total');
                            totalElement.textContent = result.total.toFixed(2);

                            // Update color based on new total
                            totalElement.className = 'grade-total inline-block px-3 py-1 rounded-full ';
                            if (result.total >= 60) {
                                totalElement.classList.add('bg-green-100', 'text-green-800');
                            } else {
                                totalElement.classList.add('bg-red-100', 'text-red-800');
                            }
                        }

                        showToast('Grades saved successfully!', 'success');
                    } catch (error) {
                        console.error('Error:', error);
                        showToast(error.message || 'Error saving grades', 'error');
                    } finally {
                        // Reset button state
                        saveButton.innerHTML = '<i class="fas fa-save mr-2"></i> Save';
                        saveButton.classList.remove('opacity-75', 'cursor-not-allowed');
                        saveButton.disabled = false;
                    }
                });
            });

            // Calculate totals for all rows on page load
            document.querySelectorAll('tbody tr').forEach(row => {
                calculateRowTotal(row);
            });
        });
    </script>
</body>

</html>