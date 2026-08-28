<?php
$pageTitle = "EduFreeDocs | BBIT Year 2.2";
require_once '../includes/header.php';
require_once '../includes/navbar.php';
?>
<!-- Units Section -->
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

        <span class="text-gray-700">2.2</span>
    </nav>

    <!-- Units Container -->
    <section class="bg-white rounded-sm border border-gray-200 shadow-md shadow-orange-500 p-4 sm:p-6 lg:p-7">

        <!-- Header -->
        <h1 class="font-bold text-2xl sm:text-3xl text-gray-900 leading-tight mb-2">
            BBIT – Year 2.2
        </h1>
        <p class="text-gray-600 text-sm sm:text-base mb-6">
            Select a unit to view available resources.
        </p>

        <!-- Units List -->
        <div class="space-y-3">

            <!-- Data Structures -->
            <a href="unit.php?course=bbit&sem=2.2&unit=data-structures"
               class="flex justify-between items-center border border-gray-200 rounded-lg p-4 hover:border-orange-500 hover:shadow-md transition-all duration-200">
                    <span class="font-semibold text-gray-900 group-hover:text-orange-500 transition">
                        Data Structures
                    </span>
                <span class="text-orange-500 font-bold">→</span>
            </a>

            <!-- Software Engineering -->
            <a href="unit.php?course=bbit&sem=2.2&unit=software-engineering"
               class="flex justify-between items-center border border-gray-200 rounded-lg p-4 hover:border-orange-500 hover:shadow-md transition-all duration-200">
                    <span class="font-semibold text-gray-900 group-hover:text-orange-500 transition">
                        Software Engineering
                    </span>
                <span class="text-orange-500 font-bold">→</span>
            </a>

            <!-- Database Systems -->
            <a href="unit.php?course=bbit&sem=2.2&unit=database-systems"
               class="flex justify-between items-center border border-gray-200 rounded-lg p-4 hover:border-orange-500 hover:shadow-md transition-all duration-200">
                    <span class="font-semibold text-gray-900 group-hover:text-orange-500 transition">
                        Database Systems
                    </span>
                <span class="text-orange-500 font-bold">→</span>
            </a>

            <!-- Web Application Development -->
            <a href="unit.php?course=bbit&sem=2.2&unit=web-app-development"
               class="flex justify-between items-center border border-gray-200 rounded-lg p-4 hover:border-orange-500 hover:shadow-md transition-all duration-200">
                    <span class="font-semibold text-gray-900 group-hover:text-orange-500 transition">
                        Web Application Development
                    </span>
                <span class="text-orange-500 font-bold">→</span>
            </a>

            <!-- Statistics for IT -->
            <a href="unit.php?course=bbit&sem=2.2&unit=statistics-it"
               class="flex justify-between items-center border border-gray-200 rounded-lg p-4 hover:border-orange-500 hover:shadow-md transition-all duration-200">
                    <span class="font-semibold text-gray-900 group-hover:text-orange-500 transition">
                        Statistics for IT
                    </span>
                <span class="text-orange-500 font-bold">→</span>
            </a>

        </div>
    </section>
</section>
<?php
require_once '../includes/footer.php';
?>
