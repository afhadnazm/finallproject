<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
</head>

<body class="bg-gray-100 min-h-screen flex items-center justify-center p-4">
    <div class="w-full max-w-2xl bg-white rounded-xl shadow-lg overflow-hidden">
        <!-- Header -->
        <div class="bg-red-500 py-6 px-8 text-center">
            <i class="fas fa-user-graduate text-white text-5xl mb-3"></i>
            <h1 class="text-2xl font-bold text-white">Student Registration</h1>
            <p class="text-white mt-1">Verify your student status</p>
        </div>

        <!-- Form -->
        <form class="p-8" method="POST" action="{{ route('register.student') }}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="role" value="student">

            <!-- Personal Information Section -->
            <div class="mb-8">
                <h2 class="text-xl font-semibold text-gray-800 border-b pb-2 mb-4">Personal Information</h2>

                <div class="grid md:grid-cols-2 gap-6">
                    <!-- Name Field -->
                    <!-- First Name -->
                    <div>
                        <label for="first_name" class="block text-gray-700 text-sm font-medium mb-2">First Name*</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-user text-gray-400"></i>
                            </div>
                            <input type="text" id="first_name" name="first_name" required
                                class="w-full pl-10 pr-3 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition"
                                placeholder="John">
                        </div>
                    </div>

                    <!-- Last Name -->
                    <div>
                        <label for="last_name" class="block text-gray-700 text-sm font-medium mb-2">Last Name*</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-user text-gray-400"></i>
                            </div>
                            <input type="text" id="last_name" name="last_name" required
                                class="w-full pl-10 pr-3 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition"
                                placeholder="Doe">
                        </div>
                    </div>
                    <div>
                        <label for="last_name" class="block text-gray-700 text-sm font-medium mb-2">Department*</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-user text-gray-400"></i>
                            </div>
                            <input type="text" id="last_name" name="last_name" required
                                class="w-full pl-10 pr-3 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition"
                                placeholder="dentistry">
                        </div>
                    </div>


                    <!-- Email Field -->
                    <div>
                        <label for="email" class="block text-gray-700 text-sm font-medium mb-2">School Email*</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-envelope text-gray-400"></i>
                            </div>
                            <input type="email" id="email" name="email" required
                                class="w-full pl-10 pr-3 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition"
                                placeholder="john@school.edu">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Password Section -->
            <div class="mb-8">
                <h2 class="text-xl font-semibold text-gray-800 border-b pb-2 mb-4">Account Security</h2>

                <div class="grid md:grid-cols-2 gap-6">
                    <!-- Password Field -->
                    <div>
                        <label for="password" class="block text-gray-700 text-sm font-medium mb-2">Password*</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-lock text-gray-400"></i>
                            </div>
                            <input type="password" id="password" name="password" required minlength="8"
                                class="w-full pl-10 pr-3 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition"
                                placeholder="••••••••">
                        </div>
                        <p class="mt-1 text-xs text-gray-500">Minimum 8 characters</p>
                    </div>

                    <!-- Confirm Password -->
                    <div>
                        <label for="password_confirmation" class="block text-gray-700 text-sm font-medium mb-2">Confirm
                            Password*</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-lock text-gray-400"></i>
                            </div>
                            <input type="password" id="password_confirmation" name="password_confirmation" required
                                class="w-full pl-10 pr-3 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition"
                                placeholder="••••••••">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Student Verification Section -->
            <div class="mb-8">
                <h2 class="text-xl font-semibold text-gray-800 border-b pb-2 mb-4">Student Verification</h2>

                <div class="space-y-6">
                    <!-- Student ID Upload -->
                    <div>
                        <label class="block text-gray-700 text-sm font-medium mb-2">Student ID Card*</label>
                        <div class="mt-1 flex items-center">
                            <label for="student_id" class="cursor-pointer">
                                <div
                                    class="border-2 border-dashed border-gray-300 rounded-lg p-6 text-center hover:border-blue-400 transition">
                                    <div class="flex flex-col items-center justify-center">
                                        <i class="fas fa-id-card text-3xl text-red-500 mb-2"></i>
                                        <p class="text-sm text-gray-600">Upload a clear photo of your student ID</p>
                                        <p class="text-xs text-gray-500 mt-1">JPEG, PNG, or PDF (Max 5MB)</p>
                                        <div id="student-id-filename" class="text-blue-600 text-sm mt-2 hidden"></div>
                                    </div>
                                    <input id="student_id" name="student_id" type="file" accept="image/*,.pdf"
                                        class="hidden" required>
                                </div>
                            </label>
                        </div>
                    </div>

                    <!-- Enrollment Proof -->
                    <div>
                        <label class="block text-gray-700 text-sm font-medium mb-2">Proof of Enrollment*</label>
                        <div class="mt-1 flex items-center">
                            <label for="enrollment_proof" class="cursor-pointer">
                                <div
                                    class="border-2 border-dashed border-gray-300 rounded-lg p-6 text-center hover:border-blue-400 transition">
                                    <div class="flex flex-col items-center justify-center">
                                        <i class="fas fa-file-alt text-3xl text-red-500 mb-2"></i>
                                        <p class="text-sm text-gray-600">Upload enrollment letter or transcript</p>
                                        <p class="text-xs text-gray-500 mt-1">JPEG, PNG, or PDF (Max 5MB)</p>
                                        <div id="enrollment-proof-filename" class="text-blue-600 text-sm mt-2 hidden">
                                        </div>
                                    </div>
                                    <input id="enrollment_proof" name="enrollment_proof" type="file"
                                        accept="image/*,.pdf" class="hidden" required>
                                </div>
                            </label>
                        </div>
                    </div>

                    <!-- Additional Notes -->
                    <div>
                        <label for="verification_notes" class="block text-gray-700 text-sm font-medium mb-2">Additional
                            Verification Notes</label>
                        <textarea id="verification_notes" name="verification_notes" rows="3"
                            class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition"
                            placeholder="Any additional information to help verify your student status"></textarea>
                    </div>
                </div>
            </div>

            <!-- Terms and Submit -->
            <div class="mb-6 flex items-start">
                <div class="flex items-center h-5">
                    <input id="terms" name="terms" type="checkbox" required
                        class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded mt-1">
                </div>
                <label for="terms" class="ml-2 block text-sm text-gray-700">
                    I certify that all information provided is accurate and I agree to the <a href="#"
                        class="text-blue-600 hover:underline">Terms of Service</a> and <a href="#"
                        class="text-blue-600 hover:underline">Privacy Policy</a>
                </label>
            </div>

            <!-- Submit Button -->
            <button type="submit"
                class="w-full bg-red-500 hover:bg-red-700 text-white font-bold py-3 px-4 rounded-lg transition duration-200 transform hover:scale-[1.02] shadow-md">
                <i class="fas fa-user-check mr-2"></i> Submit for Verification
            </button>

            <!-- Error Messages -->
            @if($errors->any())
                <div class="mt-6 bg-red-50 border-l-4 border-red-500 p-4">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <i class="fas fa-exclamation-circle text-red-500 mt-1"></i>
                        </div>
                        <div class="ml-3">
                            <p class="text-sm text-red-700">
                                @foreach($errors->all() as $error)
                                    {{ $error }}<br>
                                @endforeach
                            </p>
                        </div>
                    </div>
                </div>
            @endif

            <!-- Login Link -->
            <div class="mt-6 text-center text-sm text-gray-600">
                Already have an account? <a href="{{route('student.login')}}"
                    class="text-red-600 font-medium hover:underline">Sign in</a>
            </div>
        </form>
    </div>

    <script>
        // File upload display
        document.getElementById('student_id').addEventListener('change', function (e) {
            const fileName = e.target.files[0]?.name || 'No file selected';
            const display = document.getElementById('student-id-filename');
            display.textContent = fileName;
            display.classList.remove('hidden');
        });

        document.getElementById('enrollment_proof').addEventListener('change', function (e) {
            const fileName = e.target.files[0]?.name || 'No file selected';
            const display = document.getElementById('enrollment-proof-filename');
            display.textContent = fileName;
            display.classList.remove('hidden');
        });

        // Form validation
        document.querySelector('form').addEventListener('submit', function (e) {
            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('password_confirmation').value;

            if (password !== confirmPassword) {
                e.preventDefault();
                alert('Passwords do not match!');
                return;
            }

            const email = document.getElementById('email').value;
            if (!email.endsWith('@school.edu')) {
                e.preventDefault();
                alert('Please use your official school email address');
                return;
            }

            const studentId = document.getElementById('student_id').files[0];
            const enrollmentProof = document.getElementById('enrollment_proof').files[0];

            if (!studentId || !enrollmentProof) {
                e.preventDefault();
                alert('Please upload both verification documents');
                return;
            }

            // Check file sizes (5MB max)
            const maxSize = 5 * 1024 * 1024; // 5MB
            if (studentId.size > maxSize || enrollmentProof.size > maxSize) {
                e.preventDefault();
                alert('Each file must be less than 5MB');
                return;
            }
        });
    </script>
</body>

</html>