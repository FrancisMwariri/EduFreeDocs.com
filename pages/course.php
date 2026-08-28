<?php
$pageTitle = "EduFreeDocs | BBIT";
require_once '../includes/header.php';
require_once '../includes/navbar.php';
?>
<!-- Course Detail Section -->
<section class="w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-5">

    <!-- Breadcrumb -->
    <nav class="flex items-center flex-wrap gap-2 text-xs sm:text-sm text-gray-500 mb-5">
        <a href="index.php" class="hover:text-orange-500">Home</a>
        <span>›</span>

        <a href="schools.php" class="hover:text-orange-500">Schools</a>
        <span>›</span>

        <a href="courses.php?school=computing-it" class="hover:text-orange-500">Computing & IT</a>
        <span>›</span>

        <span class="text-gray-700">BBIT</span>
    </nav>

    <!-- Course Information -->
    <section class="bg-white rounded-sm border border-gray-200 shadow-md shadow-orange-500 p-4 sm:p-6 lg:p-7">

        <!-- Hero Section -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-10 items-center">

            <!-- Course Info -->
            <div class="order-2 md:order-1">
                <h1 class="font-bold text-2xl sm:text-3xl lg:text-4xl text-gray-900 leading-tight">
                    BBIT – Bachelor of Business Information Technology
                </h1>

                <p class="text-gray-600 text-sm sm:text-base leading-relaxed mt-4 max-w-xl">
                    Access free notes, past papers, and study materials organized by year and semester.
                </p>

                <!-- Resources -->
                <div class="mt-5">
                    <p class="text-sm sm:text-base text-gray-700">
                        <span class="font-semibold text-gray-900">Total Resources:</span> 625
                    </p>
                </div>
            </div>

            <!-- Course Image -->
            <div class="order-1 md:order-2">
                <img
                    src="../../EduFreeDocs.com/assets/images/SchoolBuilding.png"
                    alt="Bachelor of Business Information Technology"
                    class="w-full h-auto max-h-72 object-contain rounded-lg shadow-sm"
                >
            </div>
        </div>

        <!-- Divider -->
        <hr class="border-gray-200 my-7">

        <!-- Years / Semesters -->
        <div>
            <h2 class="font-bold text-lg sm:text-xl text-gray-900 mb-5">
                Years / Semesters
            </h2>

            <div class="grid grid-cols-4 sm:grid-cols-8 gap-3">
                <button class="border border-gray-200 rounded-lg py-2 px-4 text-sm font-semibold text-gray-700 hover:border-orange-500 hover:text-orange-500 transition">1.1</button>
                <button class="border border-gray-200 rounded-lg py-2 px-4 text-sm font-semibold text-gray-700 hover:border-orange-500 hover:text-orange-500 transition">1.2</button>
                <button class="border border-gray-200 rounded-lg py-2 px-4 text-sm font-semibold text-gray-700 hover:border-orange-500 hover:text-orange-500 transition">2.1</button>
                <button class="border border-orange-500 bg-orange-50 rounded-lg py-2 px-4 text-sm font-semibold text-orange-600 shadow-sm">2.2</button>
                <button class="border border-gray-200 rounded-lg py-2 px-4 text-sm font-semibold text-gray-700 hover:border-orange-500 hover:text-orange-500 transition">3.1</button>
                <button class="border border-gray-200 rounded-lg py-2 px-4 text-sm font-semibold text-gray-700 hover:border-orange-500 hover:text-orange-500 transition">3.2</button>
                <button class="border border-gray-200 rounded-lg py-2 px-4 text-sm font-semibold text-gray-700 hover:border-orange-500 hover:text-orange-500 transition">4.1</button>
                <button class="border border-gray-200 rounded-lg py-2 px-4 text-sm font-semibold text-gray-700 hover:border-orange-500 hover:text-orange-500 transition">4.2</button>
            </div>
        </div>
    </section>
</section>
<?php
require_once '../includes/footer.php';
?>
