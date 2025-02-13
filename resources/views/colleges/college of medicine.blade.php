<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>College of Medicine</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100" style="font-family: Cambria, Georgia, serif;">
    <!-- Header Section -->
    <section class="bg-gray-50 py-10">
        <div class="container mx-auto text-center">
            <h1 class="text-5xl font-bold text-gray-800">College of Medicine</h1>
            <p class="text-orange-500 mt-3 text-lg">Home > Colleges > College of Medicine</p>
        </div>
    </section>

    <!-- Introduction Section -->
    <section class="py-12 bg-white">
        <div class="container mx-auto grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
            <div>
                <h2 class="text-3xl font-semibold text-gray-700 mb-4">Welcome to the College of Medicine</h2>
                <p class="text-gray-600 leading-relaxed">
                    The College of Medicine is committed to providing high-quality medical education and clinical
                    training to future doctors. Our programs focus on equipping students with the medical knowledge,
                    clinical skills, and compassion necessary to serve patients and advance healthcare worldwide.
                </p>
                <p class="text-gray-600 mt-4 leading-relaxed">
                    We focus on clinical excellence, research advancements, and community outreach to prepare our
                    graduates for successful careers in healthcare.
                </p>
            </div>
            <div>
                <img src="{{asset('storage/images/medicine.jpg')}}" alt="College of Medicine" class="rounded-lg shadow-lg">
            </div>
        </div>
    </section>

    <!-- Mission, Vision, Goals -->
    <section class="bg-gray-50 py-12">
        <div class="container mx-auto">
            <div class="text-center mb-8">
                <h2 class="text-4xl font-bold text-gray-800">Mission, Vision & Goals</h2>
                <p class="text-gray-600 mt-2">Our guiding principles and aspirations in education, research, and service.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white p-6 rounded-md shadow-md">
                    <h3 class="text-xl font-bold text-orange-500 mb-4">Mission</h3>
                    <p class="text-gray-600">
                        To provide a dynamic and innovative medical education that promotes research, healthcare,
                        and patient-centered care for global health improvement.
                    </p>
                </div>
                <div class="bg-white p-6 rounded-md shadow-md">
                    <h3 class="text-xl font-bold text-orange-500 mb-4">Vision</h3>
                    <p class="text-gray-600">
                        To be a leading institution in medical education, research, and healthcare delivery in the region.
                    </p>
                </div>
                <div class="bg-white p-6 rounded-md shadow-md">
                    <h3 class="text-xl font-bold text-orange-500 mb-4">Goals</h3>
                    <ul class="text-gray-600 list-disc list-inside">
                        <li>Train competent and compassionate medical professionals.</li>
                        <li>Engage in medical research to enhance patient care.</li>
                        <li>Promote health awareness and contribute to global healthcare improvement.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Academic Programs -->
    <section class="py-12">
        <div class="container mx-auto">
            <div class="text-center mb-8">
                <h2 class="text-4xl font-bold text-gray-800">Academic Programs</h2>
                <p class="text-gray-600 mt-2">Our educational offerings for aspiring doctors.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-white p-6 rounded-md shadow-md">
                    <h3 class="text-xl font-bold text-gray-700 mb-3">Bachelor of Medicine, Bachelor of Surgery (MBBS)</h3>
                    <p class="text-gray-600">
                        A comprehensive 6-year program designed to produce highly skilled doctors who are capable of
                        diagnosing and treating patients in diverse healthcare settings.
                    </p>
                </div>
                <div class="bg-white p-6 rounded-md shadow-md">
                    <h3 class="text-xl font-bold text-gray-700 mb-3">Master’s in Internal Medicine</h3>
                    <p class="text-gray-600">
                        Specialization program offering advanced training in internal medicine for graduates seeking
                        expertise in diagnosing and treating adult diseases.
                    </p>
                </div>
                <div class="bg-white p-6 rounded-md shadow-md">
                    <h3 class="text-xl font-bold text-gray-700 mb-3">Continuing Medical Education (CME)</h3>
                    <p class="text-gray-600">
                        Ongoing educational programs designed for healthcare professionals to enhance their skills and
                        stay up-to-date with medical advances.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Information -->
    <section class="py-12">
        <div class="container mx-auto">
            <div class="text-center mb-8">
                <h2 class="text-4xl font-bold text-gray-800">Contact Information</h2>
                <p class="text-gray-600 mt-2">Have questions? Reach out to us!</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div class="text-center bg-white p-4 rounded-md shadow-md">
                    <div class="text-orange-500 text-3xl mb-2">📞</div>
                    <h3 class="font-semibold text-gray-700">Phone</h3>
                    <p class="text-gray-500">+964 66 2272386</p>
                </div>
                <div class="text-center bg-white p-4 rounded-md shadow-md">
                    <div class="text-orange-500 text-3xl mb-2">📍</div>
                    <h3 class="font-semibold text-gray-700">Location</h3>
                    <p class="text-gray-500">Medical Education Building, Erbil</p>
                </div>
                <div class="text-center bg-white p-4 rounded-md shadow-md">
                    <div class="text-orange-500 text-3xl mb-2">📧</div>
                    <h3 class="font-semibold text-gray-700">Email</h3>
                    <p class="text-gray-500">medicine@hmu.edu.krd</p>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
