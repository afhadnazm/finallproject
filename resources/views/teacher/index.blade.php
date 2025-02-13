<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Teacher Dashboard</title>
  <script src="https://cdn.tailwindcss.com"></script>
  @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class="bg-gray-100 font-sans">

  <div class="container mx-auto p-6">
    <!-- Header -->
    <div class="bg-red-600 shadow rounded-lg p-6 mb-6 ">
      <h1 class="text-2xl font-bold text-white ">Teacher Dashboard</h1>
    </div>

    <!-- Teacher Info -->
    <div class="bg-white shadow rounded-lg p-6 mb-6">
      <h2 class="text-xl font-semibold text-gray-800 mb-4">Teacher Information</h2>
      <div class="flex items-center space-x-4 ">
        <div class="w-16 h-16 bg-red-600 rounded-full flex items-center justify-center text-xl font-bold text-white">
          T
        </div>
        <div>
          <h3 class="text-lg font-medium text-red-600">{{ $teacher->first_name }} {{ $teacher->last_name }}</h3>
          <p class="text-red-600">{{ $teacher->subject_title }}</p> 
        </div>
      </div>
    </div>

    <!-- Students Overview -->
    <div class="bg-white shadow rounded-lg p-6 mb-6">
      <h2 class="text-xl font-semibold text-gray-800 mb-4">Students Overview</h2>
      <p class="text-red-600 mb-4">This teacher is managing  <span class="font-bold text-red-600">
        {{ $teacher->students ? $teacher->students->count() : 0 }} students
    </span>.</p>
      
      <!-- Student Table -->
      <div class="overflow-x-auto">
        <table class="table-auto w-full border-collapse border border-gray-200">
          <thead>
            <tr class="bg-red-100">
              <th class="border border-gray-300 px-4 py-2 text-left">#</th>
              <th class="border border-gray-300 px-4 py-2 text-left">Student Name</th>
              <th class="border border-gray-300 px-4 py-2 text-left">Class</th>
              <th class="border border-gray-300 px-4 py-2 text-left">Stage</th>
              <th class="border border-gray-300 px-4 py-2 text-left">Midter</th>
              <th class="border border-gray-300 px-4 py-2 text-left">Quize</th>
              <th class="border border-gray-300 px-4 py-2 text-left">Homework</th>
              <th class="border border-gray-300 px-4 py-2 text-left">Activity</th>
              <th class="border border-gray-300 px-4 py-2 text-left">Final</th>
              <th class="border border-gray-300 px-4 py-2 text-left">Total</th>
            </tr>
          </thead>
          <tbody>
            @foreach($teacher->students as $index => $student)
              <tr class="{{ $loop->even ? 'bg-gray-50' : '' }}">
                <td class="border border-gray-300 px-4 py-2">{{ $loop->iteration }}</td>
                <td class="border border-gray-300 px-4 py-2">{{ $student->first_name }} {{ $student->last_name }}</td>
                <td class="border border-gray-300 px-4 py-2">{{ $teacher->subject_title }}</td>
                <td class="border border-gray-300 px-4 py-2">{{ $student->stage_id}}</td>
                <form action="{{ route('teacher.update.grade', ['student_id' => $student->id]) }}" method="POST">
                  @csrf
                   @method('PUT')
                  <td class="border border-gray-300 px-4 py-2 "> 
                      <input type="text" name="midterm" value="{{ $student->pivot->midterm }}" class="border px-2 py-1 rounded w-20">    
                  </td>
                  <td class="border border-gray-300 px-4 py-2"> 
                      <input type="text" name="quiz" value="{{ $student->pivot->quiz }}" class="border px-2 py-1 rounded w-20">    
                  </td>
                  <td class="border border-gray-300 px-4 py-2"> 
                      <input type="text" name="homework" value="{{ $student->pivot->homework }}" class="border px-2 py-1 rounded w-20">    
                  </td>
                  <td class="border border-gray-300 px-4 py-2"> 
                      <input type="text" name="activity" value="{{ $student->pivot->activity }}" class="border px-2 py-1 rounded w-20">    
                  </td>
                  <td class="border border-gray-300 px-4 py-2"> 
                      <input type="text" name="final" value="{{ $student->pivot->final }}" class="border px-2 py-1 rounded w-20">    
                  </td>
                  <td class="border border-gray-300 px-4 py-2"> 
                      <input type="text" name="total" value="{{ $student->pivot->total }}" class="border px-2 py-1 rounded w-20">    
                  </td>
               
                  <td>
                  <button type="submit" class="bg-red-600 text-white px-4 py-2 rounded mt-2">Update</button>
                </td>
                   </form>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>

</body>
</html>
