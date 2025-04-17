@extends('layouts.admin')

@section('content')
<div class="container mx-auto px-4 py-6">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-gray-800">Pending Student Registrations</h1>
        <div class="text-sm text-gray-500">
            {{ $students->total() }} pending registrations
        </div>
    </div>

    <div class="bg-white rounded-lg shadow overflow-hidden">
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Student
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Department
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Registered
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Documents
                        </th>
                        <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Actions
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @forelse($students as $student)
                    <tr class="hover:bg-gray-50 transition">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 h-10 w-10 bg-blue-100 rounded-full flex items-center justify-center text-blue-600 font-bold">
                                    {{ strtoupper(substr($student->first_name, 0, 1)) }}
                                </div>
                                <div class="ml-4">
                                    <div class="text-sm font-medium text-gray-900">
                                        <a href="{{ route('admin.students.review', $student) }}" class="text-blue-600 hover:text-blue-800">
                                            {{ $student->first_name }} {{ $student->last_name }}
                                        </a>
                                    </div>
                                    <div class="text-sm text-gray-500">
                                        {{ $student->email }}
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">{{ $student->department }}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-500">
                                {{ $student->created_at->diffForHumans() }}
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex space-x-2">
                                <a href="{{ Storage::url($student->student_id_path) }}" target="_blank" 
                                   class="text-blue-600 hover:text-blue-800 text-sm font-medium">
                                    ID Card
                                </a>
                                <span class="text-gray-300">|</span>
                                <a href="{{ Storage::url($student->enrollment_proof_path) }}" target="_blank" 
                                   class="text-blue-600 hover:text-blue-800 text-sm font-medium">
                                    Enrollment
                                </a>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <div class="flex justify-end space-x-2">
                                <form action="{{ route('admin.students.approve', $student) }}" method="POST">
                                    @csrf
                                    <button type="submit" 
                                            class="inline-flex items-center px-3 py-1 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                                        Approve
                                    </button>
                                </form>
                                <a href="{{ route('admin.students.review', $student) }}" 
                                   class="inline-flex items-center px-3 py-1 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                                    Review
                                </a>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="px-6 py-4 text-center text-gray-500">
                            No pending student registrations at this time.
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        
        @if($students->hasPages())
        <div class="bg-gray-50 px-6 py-4 border-t border-gray-200">
            {{ $students->links() }}
        </div>
        @endif
    </div>
</div>
@endsection