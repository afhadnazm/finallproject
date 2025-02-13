<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>College of Pharmacy</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100" style="font-family: Cambria, Georgia, serif;">
    <!-- Header Section -->
    <section class="bg-gray-50 py-10">
        <div class="container mx-auto text-center">
            <h1 class="text-5xl font-bold text-gray-800">College of Pharmacy</h1>
            <p class="text-orange-500 mt-3 text-lg">Home > Colleges > College of Pharmacy</p>
        </div>
    </section>

    <!-- Introduction Section -->
    <section class="py-12 bg-white">
        <div class="container mx-auto grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
            <div>
                <h2 class="text-3xl font-semibold text-gray-700 mb-4">Welcome to the College of Pharmacy</h2>
                <p class="text-gray-600 leading-relaxed">
                    The College of Pharmacy is dedicated to shaping the future of pharmaceutical education. Our programs
                    combine a rigorous academic curriculum with hands-on experience, equipping our students with the skills
                    to excel in pharmaceutical sciences, drug development, and patient care.
                </p>
                <p class="text-gray-600 mt-4 leading-relaxed">
                    We provide an exceptional environment for learning, research, and community service, empowering
                    students to make significant contributions to the healthcare industry.
                </p>
            </div>
            <div>
                <img src="{{asset('storage/images/pharmacy.jpg')}}" alt="College of Pharmacy" class="rounded-lg shadow-lg">
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
                        To provide a comprehensive pharmacy education that combines science and patient care, while
                        preparing graduates to be leaders in the pharmaceutical industry.
                    </p>
                </div>
                <div class="bg-white p-6 rounded-md shadow-md">
                    <h3 class="text-xl font-bold text-orange-500 mb-4">Vision</h3>
                    <p class="text-gray-600">
                        To become a leading college of pharmacy in the region, producing innovative pharmacists who will
                        contribute to advancing health and wellness.
                    </p>
                </div>
                <div class="bg-white p-6 rounded-md shadow-md">
                    <h3 class="text-xl font-bold text-orange-500 mb-4">Goals</h3>
                    <ul class="text-gray-600 list-disc list-inside">
                        <li>Train pharmacy professionals who excel in both science and patient care.</li>
                        <li>Encourage research and innovation in drug development and healthcare solutions.</li>
                        <li>Promote community health and wellness initiatives through outreach programs.</li>
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
                <p class="text-gray-600 mt-2">Our educational offerings for aspiring pharmacists.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-white p-6 rounded-md shadow-md">
                    <h3 class="text-xl font-bold text-gray-700 mb-3">Bachelor of Pharmacy (BPharm)</h3>
                    <p class="text-gray-600">
                        A 4-year undergraduate program that prepares students to become licensed pharmacists, focusing on
                        pharmacology, chemistry, and patient care.
                    </p>
                </div>
                <div class="bg-white p-6 rounded-md shadow-md">
                    <h3 class="text-xl font-bold text-gray-700 mb-3">Master's in Pharmaceutical Sciences</h3>
                    <p class="text-gray-600">
                        Advanced training for pharmacy graduates, focusing on drug research, development, and regulatory
                        affairs.
                    </p>
                </div>
                <div class="bg-white p-6 rounded-md shadow-md">
                    <h3 class="text-xl font-bold text-gray-700 mb-3">Continuing Pharmacy Education</h3>
                    <p class="text-gray-600">
                        Ongoing programs for pharmacy professionals to update their knowledge and skills in new drug
                        treatments and healthcare practices.
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
                    <p class="text-gray-500">+964 66 2272387</p>
                </div>
                <div class="text-center bg-white p-4 rounded-md shadow-md">
                    <div class="text-orange-500 text-3xl mb-2">📍</div>
                    <h3 class="font-semibold text-gray-700">Location</h3>
                    <p class="text-gray-500">Pharmacy Complex, Erbil</p>
                </div>
                <div class="text-center bg-white p-4 rounded-md shadow-md">
                    <div class="text-orange-500 text-3xl mb-2">📧</div>
                    <h3 class="font-semibold text-gray-700">Email</h3>
                    <p class="text-gray-500">pharmacy@hmu.edu.krd</p>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
