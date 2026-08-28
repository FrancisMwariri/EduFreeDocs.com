<?php
$pageTitle = "EduFreeDocs | Data Structures";
require_once '../includes/header.php';
require_once '../includes/navbar.php';
?>
<!-- Unit Resources Section -->
<section class="w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-5">

    <!-- Breadcrumb -->
    <nav class="flex items-center flex-wrap gap-2 text-xs sm:text-sm text-gray-500 mb-5">
        <a href="index.php" class="hover:text-orange-500">Home</a>
        <span>›</span>
        <a href="schools.php" class="hover:text-orange-500">Schools</a>
        <span>›</span>
        <a href="courses.php?school=computing-it" class="hover:text-orange-500">Computing & IT</a>
        <span>›</span>
        <a href="course.php?course=bbit" class="hover:text-orange-500">BBIT</a>
        <span>›</span>
        <a href="semester.php?course=bbit&sem=2.2" class="hover:text-orange-500">2.2</a>
        <span>›</span>
        <span class="text-gray-700">Data Structures</span>
    </nav>

    <!-- Unit Container -->
    <section class="bg-white rounded-sm border border-gray-200 shadow-md shadow-orange-500 p-4 sm:p-6 lg:p-7">

        <!-- Header -->
        <div class="flex items-center justify-between mb-6">
            <h1 class="font-bold text-2xl sm:text-3xl text-gray-900 leading-tight">
                Data Structures
            </h1>
            <button class="flex items-center gap-2 border border-gray-200 rounded-lg px-4 py-2 text-sm font-semibold text-gray-700 hover:border-orange-500 hover:text-orange-500 transition">
                <i class="fa-regular fa-heart text-orange-500"></i>
                Add to Favorites
            </button>
        </div>

        <!-- Resources Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

            <!-- Lecture Notes -->
            <div class="border border-gray-200 rounded-lg p-4 hover:shadow-md transition">
                <h2 class="font-bold text-lg text-gray-900 mb-4">
                    Lecture Notes (24)
                </h2>
                <ul class="list-disc list-inside space-y-2 text-sm text-gray-700 marker:text-orange-500">
                    <li><a href="#" class="hover:text-orange-500">Introduction to Data Structures</a></li>
                    <li><a href="#" class="hover:text-orange-500">Arrays</a></li>
                    <li><a href="#" class="hover:text-orange-500">Linked Lists</a></li>
                    <li><a href="#" class="hover:text-orange-500">Stacks and Queues</a></li>
                    <li><a href="#" class="hover:text-orange-500">Trees</a></li>
                    <li><a href="#" class="hover:text-orange-500">Graphs</a></li>
                    <li><a href="#" class="hover:text-orange-500">Sorting Algorithms</a></li>
                </ul>
                <button class="mt-4 w-full border border-orange-500 text-orange-500 text-sm font-semibold rounded-lg py-2 transition duration-200 ease-in-out hover:bg-orange-50 hover:shadow-sm">
                    View All Notes
                </button>
            </div>

            <!-- Past Papers -->
            <div class="border border-gray-200 rounded-lg p-4 hover:shadow-md transition">
                <h2 class="font-bold text-lg text-gray-900 mb-4">
                    Past Papers (12)
                </h2>
                <ul class="list-disc list-inside space-y-2 text-sm text-gray-700 marker:text-orange-500">
                    <li><a href="#" class="hover:text-orange-500">2023 Data Structures Exam</a></li>
                    <li><a href="#" class="hover:text-orange-500">2022 Data Structures Exam</a></li>
                    <li><a href="#" class="hover:text-orange-500">2021 Data Structures Exam</a></li>
                    <li><a href="#" class="hover:text-orange-500">2020 Data Structures Exam</a></li>
                    <li><a href="#" class="hover:text-orange-500">2019 Data Structures Exam</a></li>
                </ul>
                <button class="mt-4 w-full border border-orange-500 text-orange-500 text-sm font-semibold rounded-lg py-2 transition duration-200 ease-in-out hover:bg-orange-50 hover:shadow-sm">
                    View All Past Papers
                </button>
            </div>

        </div>
    </section>
</section>
<?php
require_once '../includes/footer.php';
?>
