@extends('layouts.admin')

@section('content')
<div class="container mx-auto px-4 py-6">
    <div class="flex items-center justify-between mb-6">
        <div>
            <h1 class="text-2xl font-bold text-gray-800">Review Student Registration</h1>
            <p class="text-gray-600">Verify student information before approval</p>
        </div>
        <a href="{{ route('admin.students.pending') }}" class="text-blue-600 hover:text-blue-800">
            <i class="fas fa-arrow-left mr-1"></i> Back to Pending
        </a>
    </div>

    <div class="bg-white rounded-lg shadow overflow-hidden">
        <!-- Student Information -->
        <div class="p-6 border-b border-gray-200">
            <div class="flex items-start space-x-6">
                <div class="flex-shrink-0">
                    <div class="h-20 w-20 rounded-full bg-blue-100 flex items-center justify-center text-blue-600 text-2xl font-bold">
                        {{ strtoupper(substr($student->first_name, 0, 1)) }}
                    </div>
                </div>
                <div class="flex-1">
                    <h2 class="text-xl font-semibold text-gray-800">{{ $student->first_name }} {{ $student->last_name }}</h2>
                    <div class="mt-2 grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <p class="text-sm text-gray-500">Email</p>
                            <p class="text-gray-800">{{ $student->email }}</p>
                        </div>
                        <div>
                            <p class="text-sm text-gray-500">Department</p>
                            <p class="text-gray-800">{{ $student->department }}</p>
                        </div>
                        <div>
                            <p class="text-sm text-gray-500">Registration Date</p>
                            <p class="text-gray-800">{{ $student->created_at->format('M d, Y H:i') }}</p>
                        </div>
                        <div>
                            <p class="text-sm text-gray-500">Status</p>
                            <span class="px-2 py-1 text-xs font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                Pending Approval
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Verification Documents -->
        <div class="p-6 border-b border-gray-200">
            <h3 class="text-lg font-medium text-gray-800 mb-4">Verification Documents</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="border rounded-lg p-4">
                    <div class="flex items-center justify-between mb-2">
                        <h4 class="font-medium text-gray-800">Student ID</h4>
                        <a href="{{ Storage::url($student->student_id_path) }}" target="_blank" 
                           class="text-blue-600 hover:text-blue-800 text-sm">
                            <i class="fas fa-external-link-alt mr-1"></i> View Full
                        </a>
                    </div>
                    <div class="bg-gray-100 rounded-md p-2 h-40 flex items-center justify-center">
                        @if(pathinfo($student->student_id_path, PATHINFO_EXTENSION) === 'pdf')
                            <i class="fas fa-file-pdf text-4xl text-red-500"></i>
                        @else
                            <img src="{{ Storage::url($student->student_id_path) }}" alt="Student ID" 
                                 class="max-h-full max-w-full object-contain">
                        @endif
                    </div>
                </div>
                <div class="border rounded-lg p-4">
                    <div class="flex items-center justify-between mb-2">
                        <h4 class="font-medium text-gray-800">Enrollment Proof</h4>
                        <a href="{{ Storage::url($student->enrollment_proof_path) }}" target="_blank" 
                           class="text-blue-600 hover:text-blue-800 text-sm">
                            <i class="fas fa-external-link-alt mr-1"></i> View Full
                        </a>
                    </div>
                    <div class="bg-gray-100 rounded-md p-2 h-40 flex items-center justify-center">
                        @if(pathinfo($student->enrollment_proof_path, PATHINFO_EXTENSION) === 'pdf')
                            <i class="fas fa-file-pdf text-4xl text-red-500"></i>
                        @else
                            <img src="{{ Storage::url($student->enrollment_proof_path) }}" alt="Enrollment Proof" 
                                 class="max-h-full max-w-full object-contain">
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <!-- Approval Actions -->
        <div class="p-6">
            <h3 class="text-lg font-medium text-gray-800 mb-4">Review Actions</h3>
            <form id="approveForm" action="{{ route('admin.students.approve', $student) }}" method="POST" class="inline">
                @csrf
                <button type="submit" 
                        class="bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-6 rounded-lg mr-4">
                    <i class="fas fa-check-circle mr-2"></i> Approve Registration
                </button>
            </form>

            <button onclick="openRejectModal()" 
                    class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-6 rounded-lg">
                <i class="fas fa-times-circle mr-2"></i> Reject Registration
            </button>
        </div>
    </div>
</div>

<!-- Rejection Modal -->
<div id="rejectModal" class="fixed inset-0 z-50 hidden">
    <div class="fixed inset-0 bg-gray-600 bg-opacity-75 transition-opacity"></div>
    <div class="fixed inset-0 flex items-center justify-center p-4">
        <div class="bg-white rounded-lg shadow-xl max-w-md w-full">
            <form action="{{ route('admin.students.reject', $student) }}" method="POST">
                @csrf
                <div class="p-6">
                    <h3 class="text-lg font-medium text-gray-900 mb-4">Confirm Rejection</h3>
                    <p class="text-gray-600 mb-4">Please provide a reason for rejecting this student's registration:</p>
                    <textarea name="reason" rows="3" required
                              class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500"></textarea>
                </div>
                <div class="bg-gray-50 px-6 py-4 flex justify-end space-x-3">
                    <button type="button" onclick="closeRejectModal()"
                            class="px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        Cancel
                    </button>
                    <button type="submit"
                            class="px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                        Confirm Rejection
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    function openRejectModal() {
        document.getElementById('rejectModal').classList.remove('hidden');
    }

    function closeRejectModal() {
        document.getElementById('rejectModal').classList.add('hidden');
    }
</script>
@endsection