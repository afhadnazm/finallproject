<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>College of Nursing</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100" style="font-family: Cambria, Georgia, serif;">
    <!-- Header Section -->
    <section class="bg-gray-50 py-10">
        <div class="container mx-auto text-center">
            <h1 class="text-5xl font-bold text-gray-800">College of Nursing</h1>
            <p class="text-orange-500 mt-3 text-lg">Home > Colleges > College of Nursing</p>
        </div>
    </section>

    <!-- Introduction Section -->
    <section class="py-12 bg-white">
        <div class="container mx-auto grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
            <div>
                <h2 class="text-3xl font-semibold text-gray-700 mb-4">Welcome to the College of Nursing</h2>
                <p class="text-gray-600 leading-relaxed">
                    The College of Nursing offers innovative education and training for the next generation of
                    compassionate, skilled nurses who will lead healthcare initiatives across the globe. Our programs
                    prepare students for the demands of clinical practice, patient care, and leadership in nursing.
                </p>
                <p class="text-gray-600 mt-4 leading-relaxed">
                    Whether you’re aiming to become a registered nurse or advancing in your nursing career, we provide
                    a rich learning experience that fosters professionalism and clinical excellence.
                </p>
            </div>
            <div>
                <img src="{{asset('storage/images/nursing.jpg')}}" alt="College of Nursing" class="rounded-lg shadow-lg">
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
                        To provide high-quality nursing education and clinical training to prepare compassionate and
                        competent nurses who contribute to improving healthcare outcomes worldwide.
                    </p>
                </div>
                <div class="bg-white p-6 rounded-md shadow-md">
                    <h3 class="text-xl font-bold text-orange-500 mb-4">Vision</h3>
                    <p class="text-gray-600">
                        To be a world-class leader in nursing education, clinical practice, and research.
                    </p>
                </div>
                <div class="bg-white p-6 rounded-md shadow-md">
                    <h3 class="text-xl font-bold text-orange-500 mb-4">Goals</h3>
                    <ul class="text-gray-600 list-disc list-inside">
                        <li>Prepare nurses to provide high-quality patient care in diverse healthcare settings.</li>
                        <li>Foster leadership skills to advance healthcare and nursing practice.</li>
                        <li>Encourage research to improve patient outcomes and healthcare delivery.</li>
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
                <p class="text-gray-600 mt-2">Our educational offerings for aspiring nurses.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-white p-6 rounded-md shadow-md">
                    <h3 class="text-xl font-bold text-gray-700 mb-3">Bachelor of Science in Nursing (BSN)</h3>
                    <p class="text-gray-600">
                        A 4-year undergraduate program designed to prepare students to become registered nurses with
                        clinical competencies in patient care.
                    </p>
                </div>
                <div class="bg-white p-6 rounded-md shadow-md">
                    <h3 class="text-xl font-bold text-gray-700 mb-3">Master’s in Advanced Practice Nursing</h3>
                    <p class="text-gray-600">
                        Advanced clinical training for nurses looking to specialize in areas like family nursing,
                        pediatric care, and geriatric nursing.
                    </p>
                </div>
                <div class="bg-white p-6 rounded-md shadow-md">
                    <h3 class="text-xl font-bold text-gray-700 mb-3">Continuing Nursing Education</h3>
                    <p class="text-gray-600">
                        Programs designed to keep nurses updated on the latest clinical practices, medical advances, and
                        healthcare regulations.
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
                    <p class="text-gray-500">+964 66 2272388</p>
                </div>
                <div class="text-center bg-white p-4 rounded-md shadow-md">
                    <div class="text-orange-500 text-3xl mb-2">📍</div>
                    <h3 class="font-semibold text-gray-700">Location</h3>
                    <p class="text-gray-500">Nursing Education Building, Erbil</p>
                </div>
                <div class="text-center bg-white p-4 rounded-md shadow-md">
                    <div class="text-orange-500 text-3xl mb-2">📧</div>
                    <h3 class="font-semibold text-gray-700">Email</h3>
                    <p class="text-gray-500">nursing@hmu.edu.krd</p>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
