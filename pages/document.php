<?php
$pageTitle = "EduFreeDocs | Arrays in Data Structures";
require_once '../includes/header.php';
require_once '../includes/navbar.php';
?>
<!-- Resource Detail Section -->
<section class="w-full max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-5">

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
        <a href="unit.php?course=bbit&sem=2.2&unit=data-structures" class="hover:text-orange-500">Data Structures</a>
        <span>›</span>
        <span class="text-gray-700">Arrays in Data Structures</span>
    </nav>

    <!-- Container -->
    <section class="bg-white rounded-sm border border-gray-200 shadow-md shadow-orange-500 p-6">

        <!-- Header -->
        <div class="flex items-center justify-between mb-6">
            <h1 class="font-bold text-2xl sm:text-3xl text-gray-900 leading-tight">
                Arrays in Data Structures
            </h1>
            <button class="flex items-center gap-2 border border-gray-200 rounded-lg px-4 py-2 text-sm font-semibold text-gray-700 hover:border-orange-500 hover:text-orange-500 transition">
                <i class="fa-regular fa-heart text-orange-500"></i>
                Add to Favorites
            </button>
        </div>

        <!-- Resource Info -->
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-6 text-sm text-gray-700">
            <p><span class="font-semibold">Resource Type:</span> Lecture Note</p>
            <p><span class="font-semibold">Unit:</span> Data Structures</p>
            <p><span class="font-semibold">Uploaded by:</span> John Doe</p>
            <p><span class="font-semibold">Size:</span> 1.5 MB</p>
            <p><span class="font-semibold">Uploaded on:</span> May 10, 2004</p>
            <p><span class="font-semibold">Downloads:</span> 1,102</p>
        </div>

        <!-- Action Buttons -->
        <div class="flex flex-wrap gap-3 mb-6">
            <button class="flex items-center gap-2 border border-orange-500 text-orange-500 font-semibold text-sm rounded-lg px-4 py-2 transition duration-200 ease-in-out hover:bg-orange-50 hover:shadow-sm">
                <i class="fa-regular fa-file-pdf"></i>
                Preview Document
            </button>
            <button class="flex items-center gap-2 border border-orange-500 text-orange-500 font-semibold text-sm rounded-lg px-4 py-2 transition duration-200 ease-in-out hover:bg-orange-50 hover:shadow-sm">
                <i class="fa-solid fa-download"></i>
                Download Now
            </button>
        </div>

        <!-- Description -->
        <p class="text-gray-600 text-sm leading-relaxed">
            Learn about one-dimensional and multi-dimensional arrays, their operations, applications, and time complexity.
        </p>

        <!-- Back Button -->
        <div class="mt-6">
            <a href="notes.php?course=bbit&sem=2.2&unit=data-structures"
               class="inline-block border border-orange-500 text-orange-500 text-sm font-semibold rounded-lg px-4 py-2 transition duration-200 ease-in-out hover:bg-orange-50 hover:shadow-sm">
                ← Back to Notes
            </a>
        </div>
    </section>
</section>
<?php
require_once '../includes/footer.php';
?>
