<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <!-- Welcome Header -->
        <div class="bg-white rounded-xl shadow-md p-6 mb-8">
            <h1 class="text-3xl font-bold text-gray-800 mb-2">Welcome, {{ $student->first_name }}</h1>
            <p class="text-gray-600">
                {{ $student->stage->name }},  {{ $student->semester->name }}
            </p>
        </div>

        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6">
                {{ session('error') }}
            </div>
        @endif

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <!-- Subject Registration Card -->
            <div class="bg-white rounded-xl shadow-md p-6">
                <h2 class="text-xl font-semibold text-gray-800 mb-4">Register for New Subject</h2>
                @if($availableSubjects->count() > 0)
                    <form action="{{ route('student.register.subject') }}" method="POST" class="space-y-4">
                        @csrf
                        <div>
                            <label for="subject_id" class="block text-sm font-medium text-gray-700 mb-1">Select
                                Subject</label>
                            <select name="subject_id" id="subject_id" required
                                class="w-full rounded-lg border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                @foreach($availableSubjects as $subject)
                                    <option value="{{ $subject->id }}">
                                        {{ $subject->name }}
                                        (Teacher: {{ $subject->teacher->first_name ?? 'Not assigned' }})
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit"
                            class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-lg transition duration-150">
                            <i class="fas fa-plus-circle mr-2"></i> Register
                        </button>
                    </form>
                @else
                    <div class="text-center py-8 text-gray-500">
                        <i class="fas fa-check-circle text-4xl mb-3 text-green-500"></i>
                        <p>You've registered for all available subjects in your semester.</p>
                    </div>
                @endif
            </div>

            <!-- Registered Subjects Card -->
            <div class="bg-white rounded-xl shadow-md p-6">
                <h2 class="text-xl font-semibold text-gray-800 mb-4">Your Registered Subjects</h2>
                @if($registeredSubjects->count() > 0)
                    <div class="space-y-4">
                        @foreach($registeredSubjects as $subject)
                            <div class="border-b border-gray-200 pb-4 last:border-0 last:pb-0">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <div class="bg-blue-100 p-3 rounded-lg mr-4">
                                            <i class="fas fa-book text-blue-600"></i>
                                        </div>
                                        <div>
                                            <h3 class="font-medium text-gray-800">{{ $subject->name }}</h3>
                                            <p class="text-sm text-gray-600">
                                                <i class="fas fa-chalkboard-teacher mr-1"></i>
                                                {{ $subject->teacher->first_name ?? 'Not assigned' }}
                                            </p>
                                        </div>
                                    </div>
                                    <span
                                        class="text-sm px-2 py-1 rounded-full 
                                     {{ $subject->pivot->status === 'approved' ? 'bg-green-100 text-green-800' : 'bg-yellow-100 text-yellow-800' }}">
                                        {{ ucfirst($subject->pivot->status) }}
                                    </span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class="text-center py-8 text-gray-500">
                        <i class="fas fa-book-open text-4xl mb-3 opacity-30"></i>
                        <p>You haven't registered for any subjects yet.</p>
                    </div>
                @endif
            </div>
        </div>

        <!-- Grades Card -->
        <div class="bg-white rounded-xl shadow-md p-6 mt-8">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-xl font-semibold text-gray-800">Your Grades</h2>
                <span class="text-sm text-gray-500"> {{ $student->semester?->name ?? 'N\a' }}</span>
            </div>

            @if($grades->count() > 0)
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Subject</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Midterm</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Final</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Practical</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Total</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Status</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach($grades as $grade)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="bg-purple-100 p-2 rounded-lg mr-3">
                                                <i class="fas fa-book text-purple-600"></i>
                                            </div>
                                            <div>
                                                <div class="text-sm font-medium text-gray-900">
                                                    {{ $grade->subject->name ?? 'no grade' }}</div>
                                                  <div class="text-sm text-gray-500">
                                                    {{ $grade->subject->teacher->first_name ?? 'No teacher' }}
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td
                                        class="px-6 py-4 whitespace-nowrap text-sm {{ $grade->midterm >= 50 ? 'text-green-600 font-medium' : 'text-gray-500' }}">
                                        {{ $grade->midterm ?? '-' }}
                                    </td>
                                    <td
                                        class="px-6 py-4 whitespace-nowrap text-sm {{ $grade->final >= 50 ? 'text-green-600 font-medium' : 'text-gray-500' }}">
                                        {{ $grade->final ?? '-' }}
                                    </td>
                                    <td
                                        class="px-6 py-4 whitespace-nowrap text-sm {{ $grade->practical >= 50 ? 'text-green-600 font-medium' : 'text-gray-500' }}">
                                        {{ $grade->practical ?? '-' }}
                                    </td>
                                    <td
                                        class="px-6 py-4 whitespace-nowrap text-sm font-bold {{ $grade->total >= 60 ? 'text-green-600' : 'text-red-600' }}">
                                        {{ $grade->total ?? '-' }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span
                                            class="px-2 py-1 text-xs rounded-full {{ $grade->total >= 60 ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                                            {{ $grade->total >= 60 ? 'Passed' : 'Failed' }}
                                        </span>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <div class="text-center py-12 text-gray-500">
                    <i class="fas fa-graduation-cap text-4xl mb-3 opacity-30"></i>
                    <p>No grades available yet.</p>
                </div>
            @endif
        </div>
    </div>
</body>

</html>