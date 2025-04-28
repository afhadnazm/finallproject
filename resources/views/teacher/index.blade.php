<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Manage Grades</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 p-8">

    <div class="container mx-auto px-4 py-8">
        <h1 class="text-2xl font-bold mb-6">My Subjects and Students</h1>

        @foreach($subjects as $subject)
            <div class="mb-8 bg-white rounded-lg shadow-md overflow-hidden">
                <div class="px-6 py-4 bg-gray-50 border-b">
                    <h2 class="text-xl font-semibold">{{ $subject->name }}</h2>
                    <p class="text-sm text-gray-600">
                        {{ $subject->stage->name }} - {{ $subject->semester->name }}
                    </p>
                </div>

                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Student</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Midterm</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Final</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Practical</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Total</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Actions</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach($subject->students as $student)
                                                @php
                                                    $grade = $student->grades()->where('subject_id', $subject->id)->first();
                                                @endphp
                                                <tr>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        {{ $student->first_name }} {{ $student->last_name }}
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <input type="number" step="0.01" class="grade-input border rounded px-2 py-1 w-20"
                                                            data-student-id="{{ $student->id }}" data-subject-id="{{ $subject->id }}"
                                                            data-grade-type="midterm" value="{{ $grade->midterm ?? '' }}">
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <input type="number" step="0.01" class="grade-input border rounded px-2 py-1 w-20"
                                                            data-student-id="{{ $student->id }}" data-subject-id="{{ $subject->id }}"
                                                            data-grade-type="final" value="{{ $grade->final ?? '' }}">
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <input type="number" step="0.01" class="grade-input border rounded px-2 py-1 w-20"
                                                            data-student-id="{{ $student->id }}" data-subject-id="{{ $subject->id }}"
                                                            data-grade-type="practical" value="{{ $grade->practical ?? '' }}">
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap font-medium">
                                                        {{ $grade->total ?? 'N/A' }}
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <button class="save-grade bg-blue-500 text-white px-3 py-1 rounded text-sm"
                                                            data-student-id="{{ $student->id }}" data-subject-id="{{ $subject->id }}">
                                                            Save
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

    @push('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                // Auto-calculate total when grades change
                document.querySelectorAll('.grade-input').forEach(input => {
                    input.addEventListener('change', function () {
                        const row = this.closest('tr');
                        const midterm = parseFloat(row.querySelector('[data-grade-type="midterm"]').value) || 0;
                        const final = parseFloat(row.querySelector('[data-grade-type="final"]').value) || 0;
                        const practical = parseFloat(row.querySelector('[data-grade-type="practical"]').value) || 0;
                        const total = (midterm + final + practical).toFixed(2);
                        row.querySelector('td:nth-child(5)').textContent = total;
                    });
                });

                // Save grades
                document.querySelectorAll('.save-grade').forEach(button => {
                    button.addEventListener('click', function () {
                        const studentId = this.getAttribute('data-student-id');
                        const subjectId = this.getAttribute('data-subject-id');
                        const row = this.closest('tr');

                        const data = {
                            student_id: studentId,
                            subject_id: subjectId,
                            midterm: parseFloat(row.querySelector('[data-grade-type="midterm"]').value) || null,
                            final: parseFloat(row.querySelector('[data-grade-type="final"]').value) || null,
                            practical: parseFloat(row.querySelector('[data-grade-type="practical"]').value) || null,
                            total: parseFloat(row.querySelector('td:nth-child(5)').textContent) || null,
                            _token: document.querySelector('meta[name="csrf-token"]').content
                        };

                        fetch('/teacher/grades', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'Accept': 'application/json'
                            },
                            body: JSON.stringify(data)
                        })
                            .then(response => response.json())
                            .then(data => {
                                alert('Grades saved successfully!');
                            })
                            .catch(error => {
                                console.error('Error:', error);
                                alert('Error saving grades');
                            });
                    });
                });
            });
        </script>
    @endpush
</body>

</html>