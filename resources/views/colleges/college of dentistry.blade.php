<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>College of Dentistry</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100" style="font-family: Cambria, Georgia, serif;">
    <!-- Header Section -->
    <section class="bg-gray-50 py-10">
        <div class="container mx-auto text-center">
            <h1 class="text-5xl font-bold text-gray-800">College of Dentistry</h1>
            <p class="text-orange-500 mt-3 text-lg">Home > Colleges > College of Dentistry</p>
        </div>
    </section>

    <!-- Introduction Section -->
    <section class="py-12 bg-white">
        <div class="container mx-auto grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
            <div>
                <h2 class="text-3xl font-semibold text-gray-700 mb-4">Welcome to the College of Dentistry</h2>
                <p class="text-gray-600 leading-relaxed">
                    The College of Dentistry is a leader in oral health education and patient care. Our programs focus
                    on training competent professionals who are ready to excel in modern dentistry. With cutting-edge
                    facilities and expert faculty, we strive to advance knowledge, promote research, and improve
                    community health through exceptional dental services.
                </p>
                <p class="text-gray-600 mt-4 leading-relaxed">
                    Whether you're an aspiring dentist or a curious visitor, we invite you to explore our offerings and
                    join us in shaping the future of oral health.
                </p>
            </div>
            <div>
                <img src="{{asset('storage/images/dent.jpg')}}" alt="College of Dentistry" class="rounded-lg shadow-lg">
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
                        To deliver exceptional dental education, innovative research, and outstanding patient care that
                        meet the evolving needs of the community.
                    </p>
                </div>
                <div class="bg-white p-6 rounded-md shadow-md">
                    <h3 class="text-xl font-bold text-orange-500 mb-4">Vision</h3>
                    <p class="text-gray-600">
                        To be a globally recognized institution known for excellence in dental education and oral health
                        innovation.
                    </p>
                </div>
                <div class="bg-white p-6 rounded-md shadow-md">
                    <h3 class="text-xl font-bold text-orange-500 mb-4">Goals</h3>
                    <ul class="text-gray-600 list-disc list-inside">
                        <li>Equip students with advanced knowledge and skills in dentistry.</li>
                        <li>Promote research that drives advancements in oral health.</li>
                        <li>Engage in community outreach and health promotion initiatives.</li>
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
                <p class="text-gray-600 mt-2">Explore the programs we offer to nurture future dental professionals.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-white p-6 rounded-md shadow-md">
                    <h3 class="text-xl font-bold text-gray-700 mb-3">Bachelor of Dental Surgery (BDS)</h3>
                    <p class="text-gray-600">
                        A comprehensive 5-year program designed to develop skilled, compassionate, and ethical dentists
                        ready to meet global health standards.
                    </p>
                </div>
                <div class="bg-white p-6 rounded-md shadow-md">
                    <h3 class="text-xl font-bold text-gray-700 mb-3">Master's in Orthodontics</h3>
                    <p class="text-gray-600">
                        Advanced training for dental professionals specializing in orthodontic diagnosis and treatment.
                    </p>
                </div>
                <div class="bg-white p-6 rounded-md shadow-md">
                    <h3 class="text-xl font-bold text-gray-700 mb-3">Continuing Education Programs</h3>
                    <p class="text-gray-600">
                        Short-term courses for dental practitioners to stay updated with the latest advancements and
                        techniques.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Student Life -->
    <section class="bg-gray-50 py-12">
        <div class="container mx-auto">
            <div class="text-center mb-8">
                <h2 class="text-4xl font-bold text-gray-800">Student Life & Activities</h2>
                <p class="text-gray-600 mt-2">Discover a vibrant community where learning meets fun.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <img src="{{asset('storage/images/denti.jpg')}}" alt="Student Life" class="rounded-md shadow-md">
                </div>
                <div>
                    <h3 class="text-2xl font-semibold text-gray-700 mb-4">Life at the College</h3>
                    <p class="text-gray-600 leading-relaxed">
                        From research opportunities to community outreach programs, students at the College of Dentistry
                        enjoy a dynamic learning environment that prepares them for a successful career in dentistry.
                    </p>
                    <p class="text-gray-600 mt-4 leading-relaxed">
                        Our campus is equipped with state-of-the-art facilities and a vibrant student community that
                        fosters both academic excellence and personal growth.
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
                    <p class="text-gray-500">+964 66 2272385</p>
                </div>
                <div class="text-center bg-white p-4 rounded-md shadow-md">
                    <div class="text-orange-500 text-3xl mb-2">📍</div>
                    <h3 class="font-semibold text-gray-700">Location</h3>
                    <p class="text-gray-500">Dental Hospital Complex, Erbil</p>
                </div>
                <div class="text-center bg-white p-4 rounded-md shadow-md">
                    <div class="text-orange-500 text-3xl mb-2">📧</div>
                    <h3 class="font-semibold text-gray-700">Email</h3>
                    <p class="text-gray-500">dentistry@hmu.edu.krd</p>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
