<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">
    <!-- Navbar -->
    <div class="container mx-auto px-4 py-6">
      <div class="bg-white shadow rounded-lg p-6">
          <h1 class="text-2xl font-bold mb-4 text-red-600">Welcome, {{ $student->first_name }} {{ $student->last_name }}</h1>
          <p class="text-gray-600">Here are your assignment details:</p>
  
          <div class="mt-6">
              <table class="min-w-full bg-white border border-gray-200">
                  <thead>
                      <tr>
                          <th class="px-4 py-2 border-b border-gray-200 text-left text-sm font-medium text-gray-700">Assignment Title</th>
                          <th class="px-4 py-2 border-b border-gray-200 text-left text-sm font-medium text-gray-700">Midterm</th>
                          <th class="px-4 py-2 border-b border-gray-200 text-left text-sm font-medium text-gray-700">Quiz</th>
                          <th class="px-4 py-2 border-b border-gray-200 text-left text-sm font-medium text-gray-700">Homework</th>
                          <th class="px-4 py-2 border-b border-gray-200 text-left text-sm font-medium text-gray-700">Activity</th>
                          <th class="px-4 py-2 border-b border-gray-200 text-left text-sm font-medium text-gray-700">Final</th>
                          <th class="px-4 py-2 border-b border-gray-200 text-left text-sm font-medium text-gray-700">Total</th>
                      </tr>
                  </thead>
                  <tbody>
                    @foreach($student->teacherAssignments as $teacherAssignment)
                    <tr>
                        <td class="px-4 py-2 border-b border-gray-200 text-sm text-gray-600">{{ $teacherAssignment->pivot->assignment_title }}</td>
                        <td class="px-4 py-2 border-b border-gray-200 text-sm text-gray-600">{{ $teacherAssignment->pivot->midterm }}</td>
                        <td class="px-4 py-2 border-b border-gray-200 text-sm text-gray-600">{{ $teacherAssignment->pivot->quiz }}</td>
                        <td class="px-4 py-2 border-b border-gray-200 text-sm text-gray-600">{{ $teacherAssignment->pivot->homework }}</td>
                        <td class="px-4 py-2 border-b border-gray-200 text-sm text-gray-600">{{ $teacherAssignment->pivot->activity }}</td>
                        <td class="px-4 py-2 border-b border-gray-200 text-sm text-gray-600">{{ $teacherAssignment->pivot->final }}</td>
                        <td class="px-4 py-2 border-b border-gray-200 text-sm text-gray-600 font-bold">{{ $teacherAssignment->pivot->total }}</td>
                    </tr>
                    @endforeach
                  </tbody>
              </table>
          </div>
      </div>
  </div>
</body>
</html>
