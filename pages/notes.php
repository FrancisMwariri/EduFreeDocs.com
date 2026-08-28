<?php
$pageTitle = "EduFreeDocs | Data Structures Lecture Notes";
require_once '../includes/header.php';
require_once '../includes/navbar.php';
?>
<!-- Lecture Notes Section -->
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
        <span class="text-gray-700">Data Structures – Lecture Notes</span>
    </nav>

    <!-- Container -->
    <section class="bg-white rounded-sm border border-gray-200 shadow-md shadow-orange-500 p-4 sm:p-6 lg:p-7">

        <!-- Header -->
        <div class="flex items-center justify-between mb-6">
            <h1 class="font-bold text-2xl sm:text-3xl text-gray-900 leading-tight">
                Data Structures – Lecture Notes
            </h1>
            <button class="flex items-center gap-2 border border-gray-200 rounded-lg px-4 py-2 text-sm font-semibold text-gray-700 hover:border-orange-500 hover:text-orange-500 transition">
                <i class="fa-regular fa-heart text-orange-500"></i>
                Add to Favorites
            </button>
        </div>

        <!-- Table -->
        <div class="overflow-x-auto">
            <table class="w-full border border-gray-200 rounded-lg text-sm text-gray-700">
                <thead class="bg-gray-50 text-gray-900 font-semibold">
                <tr>
                    <th class="px-4 py-2 text-left">Topic</th>
                    <th class="px-4 py-2 text-left">Type</th>
                    <th class="px-4 py-2 text-left hidden sm:table-cell">Size</th>
                    <th class="px-4 py-2 text-left hidden sm:table-cell">Downloads</th>
                    <th class="px-4 py-2 text-left">Actions</th>
                </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                <tr><td class="px-4 py-2">Introduction to Data Structures</td><td>PDF</td><td class="hidden sm:table-cell">1.2 MB</td><td class="hidden sm:table-cell">1,365</td><td><button class="text-orange-500 hover:text-orange-600"><i class="fa-solid fa-download"></i></button></td></tr>
                <tr><td class="px-4 py-2">Arrays in Data Structures</td><td>PDF</td><td class="hidden sm:table-cell">1.5 MB</td><td class="hidden sm:table-cell">1,102</td><td><button class="text-orange-500 hover:text-orange-600"><i class="fa-solid fa-download"></i></button></td></tr>
                <tr><td class="px-4 py-2">Linked Lists</td><td>PDF</td><td class="hidden sm:table-cell">1.3 MB</td><td class="hidden sm:table-cell">987</td><td><button class="text-orange-500 hover:text-orange-600"><i class="fa-solid fa-download"></i></button></td></tr>
                <tr><td class="px-4 py-2">Stacks and Queues</td><td>PDF</td><td class="hidden sm:table-cell">1.4 MB</td><td class="hidden sm:table-cell">863</td><td><button class="text-orange-500 hover:text-orange-600"><i class="fa-solid fa-download"></i></button></td></tr>
                <tr><td class="px-4 py-2">Trees</td><td>PDF</td><td class="hidden sm:table-cell">1.4 MB</td><td class="hidden sm:table-cell">756</td><td><button class="text-orange-500 hover:text-orange-600"><i class="fa-solid fa-download"></i></button></td></tr>
                <tr><td class="px-4 py-2">Graphs</td><td>PDF</td><td class="hidden sm:table-cell">1.3 MB</td><td class="hidden sm:table-cell">647</td><td><button class="text-orange-500 hover:text-orange-600"><i class="fa-solid fa-download"></i></button></td></tr>
                <tr><td class="px-4 py-2">Sorting Algorithms</td><td>PDF</td><td class="hidden sm:table-cell">1.7 MB</td><td class="hidden sm:table-cell">589</td><td><button class="text-orange-500 hover:text-orange-600"><i class="fa-solid fa-download"></i></button></td></tr>
                <!-- More Notes -->
                <tr><td class="px-4 py-2">Hash Tables</td><td>PDF</td><td class="hidden sm:table-cell">1.6 MB</td><td class="hidden sm:table-cell">502</td><td><button class="text-orange-500 hover:text-orange-600"><i class="fa-solid fa-download"></i></button></td></tr>
                <tr><td class="px-4 py-2">Heaps & Priority Queues</td><td>PDF</td><td class="hidden sm:table-cell">1.8 MB</td><td class="hidden sm:table-cell">421</td><td><button class="text-orange-500 hover:text-orange-600"><i class="fa-solid fa-download"></i></button></td></tr>
                <tr><td class="px-4 py-2">Hashing Techniques</td><td>PDF</td><td class="hidden sm:table-cell">1.2 MB</td><td class="hidden sm:table-cell">388</td><td><button class="text-orange-500 hover:text-orange-600"><i class="fa-solid fa-download"></i></button></td></tr>
                <tr><td class="px-4 py-2">Advanced Graph Algorithms</td><td>PDF</td><td class="hidden sm:table-cell">2.0 MB</td><td class="hidden sm:table-cell">312</td><td><button class="text-orange-500 hover:text-orange-600"><i class="fa-solid fa-download"></i></button></td></tr>
                <tr><td class="px-4 py-2">Dynamic Programming in DS</td><td>PDF</td><td class="hidden sm:table-cell">2.1 MB</td><td class="hidden sm:table-cell">275</td><td><button class="text-orange-500 hover:text-orange-600"><i class="fa-solid fa-download"></i></button></td></tr>
                <tr><td class="px-4 py-2">Disjoint Sets (Union-Find)</td><td>PDF</td><td class="hidden sm:table-cell">1.9 MB</td><td class="hidden sm:table-cell">243</td><td><button class="text-orange-500 hover:text-orange-600"><i class="fa-solid fa-download"></i></button></td></tr>
                <tr><td class="px-4 py-2">String Matching Algorithms</td><td>PDF</td><td class="hidden sm:table-cell">1.5 MB</td><td class="hidden sm:table-cell">198</td><td><button class="text-orange-500 hover:text-orange-600"><i class="fa-solid fa-download"></i></button></td></tr>
                </tbody>
            </table>
        </div>

        <!-- Back Button -->
        <div class="mt-6">
            <a href="unit.php?course=bbit&sem=2.2&unit=data-structures"
               class="inline-block border border-orange-500 text-orange-500 text-sm font-semibold rounded-lg px-4 py-2 transition duration-200 ease-in-out hover:bg-orange-50 hover:shadow-sm">
                ← Back to Unit
            </a>
        </div>
    </section>
</section>
<?php
require_once '../includes/footer.php';
?>
