<?php
$pageTitle = "EduFreeDocs | Courses in Computing & IT";
require_once '../includes/header.php';
require_once '../includes/navbar.php';
?>
<!-- Courses Section -->
<section class="w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-5">

    <!-- Breadcrumb -->
    <nav class="flex items-center flex-wrap gap-2 text-xs sm:text-sm text-gray-500 mb-5">
        <a href="index.php" class="hover:text-orange-500">Home</a>
        <span>›</span>

        <a href="schools.php" class="hover:text-orange-500">
            Schools
        </a>

        <span>›</span>

        <span class="text-gray-700">
                Computing & IT
            </span>
    </nav>

    <!-- Courses Container -->
    <section class="bg-white rounded-sm border border-gray-200 shadow-md shadow-orange-500 p-4 sm:p-6 lg:p-7">

        <!-- Header -->
        <h1 class="font-bold text-2xl sm:text-3xl text-gray-900 leading-tight mb-2">
            Courses in Computing & IT
        </h1>
        <p class="text-gray-600 text-sm sm:text-base mb-6">
            Choose your course to continue.
        </p>

        <!-- Search Bar -->
        <div class="mb-6">
            <input type="text" placeholder="Search courses..."
                   class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:border-orange-500 focus:outline-none focus:ring-2 focus:ring-orange-200">
        </div>

        <!-- Courses Grid -->
        <div class="grid grid-cols-1 min-[480px]:grid-cols-2 lg:grid-cols-2 gap-4">

            <!-- BBIT -->
            <a href="course.php?course=bbit"
               class="group border border-gray-200 rounded-lg p-4 hover:border-orange-500 hover:shadow-md transition-all duration-200">
                <h3 class="font-bold text-gray-900 group-hover:text-orange-500 transition">
                    BBIT
                </h3>
                <p class="text-sm text-gray-600 mt-2 leading-relaxed">
                    Bachelor of Business Information Technology
                </p>
                <p class="text-xs text-gray-500 mt-4">
                    625 Resources
                </p>
            </a>

            <!-- BIT -->
            <a href="course.php?course=bit"
               class="group border border-gray-200 rounded-lg p-4 hover:border-orange-500 hover:shadow-md transition-all duration-200">
                <h3 class="font-bold text-gray-900 group-hover:text-orange-500 transition">
                    BIT
                </h3>
                <p class="text-sm text-gray-600 mt-2 leading-relaxed">
                    Bachelor of Information Technology
                </p>
                <p class="text-xs text-gray-500 mt-4">
                    410 Resources
                </p>
            </a>

            <!-- Computer Science -->
            <a href="course.php?course=computer-science"
               class="group border border-gray-200 rounded-lg p-4 hover:border-orange-500 hover:shadow-md transition-all duration-200">
                <h3 class="font-bold text-gray-900 group-hover:text-orange-500 transition">
                    BSc. Computer Science
                </h3>
                <p class="text-sm text-gray-600 mt-2 leading-relaxed">
                    Bachelor of Science in Computer Science
                </p>
                <p class="text-xs text-gray-500 mt-4">
                    210 Resources
                </p>
            </a>

            <!-- DIT -->
            <a href="course.php?course=dit"
               class="group border border-gray-200 rounded-lg p-4 hover:border-orange-500 hover:shadow-md transition-all duration-200">
                <h3 class="font-bold text-gray-900 group-hover:text-orange-500 transition">
                    DIT
                </h3>
                <p class="text-sm text-gray-600 mt-2 leading-relaxed">
                    Diploma in Information Technology
                </p>
                <p class="text-xs text-gray-500 mt-4">
                    120 Resources
                </p>
            </a>

        </div>
    </section>
</section>
<?php
require_once '../includes/footer.php';
?>
