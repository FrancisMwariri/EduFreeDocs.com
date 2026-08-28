<?php
$pageTitle = "EduFreeDocs | Search Results – Data Structures";
require_once '../includes/header.php';
require_once '../includes/navbar.php';
?>
    <!-- Search Results Section -->
    <section class="w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-5">

        <!-- Breadcrumb -->
        <nav class="flex items-center flex-wrap gap-2 text-xs sm:text-sm text-gray-500 mb-5">
            <a href="index.php" class="hover:text-orange-500">Home</a>
            <span>›</span>
            <span class="text-gray-700">Search Results</span>
        </nav>

        <!-- Container -->
        <section class="bg-white rounded-sm border border-gray-200 shadow-md shadow-orange-500 p-6">

            <!-- Header -->
            <div class="flex items-center justify-between mb-6">
                <h1 class="font-bold text-2xl sm:text-3xl text-gray-900 leading-tight">
                    Search Results for “Data Structures”
                </h1>
                <button class="flex items-center gap-2 border border-gray-200 rounded-lg px-4 py-2 text-sm font-semibold text-gray-700 hover:border-orange-500 hover:text-orange-500 transition">
                    <i class="fa-regular fa-heart text-orange-500"></i>
                    Add to Favorites
                </button>
            </div>

            <!-- Grid Layout -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">

                <!-- Sidebar Filters -->
                <aside class="bg-white border border-gray-200 rounded-lg shadow-md shadow-orange-500 p-4 w-full md:w-64 md:col-span-1">
                    <h2 class="font-bold text-lg text-gray-900 mb-4">Filters</h2>

                    <!-- Resource Type -->
                    <div class="mb-6">
                        <h3 class="font-semibold text-sm text-gray-800 mb-2">Resource Type</h3>
                        <ul class="space-y-2 text-sm text-gray-700">
                            <li><label class="flex items-center gap-2 cursor-pointer"><input type="checkbox" checked class="accent-orange-500"><span>All Types (32)</span></label></li>
                            <li><label class="flex items-center gap-2 cursor-pointer"><input type="checkbox" class="accent-orange-500"><span>Lecture Notes (24)</span></label></li>
                            <li><label class="flex items-center gap-2 cursor-pointer"><input type="checkbox" class="accent-orange-500"><span>Past Papers (12)</span></label></li>
                            <li><label class="flex items-center gap-2 cursor-pointer"><input type="checkbox" class="accent-orange-500"><span>CATs (8)</span></label></li>
                            <li><label class="flex items-center gap-2 cursor-pointer"><input type="checkbox" class="accent-orange-500"><span>Books (10)</span></label></li>
                            <li><label class="flex items-center gap-2 cursor-pointer"><input type="checkbox" class="accent-orange-500"><span>Revision (8)</span></label></li>
                        </ul>
                    </div>

                    <!-- School Dropdown -->
                    <div class="mb-4">
                        <label class="block text-sm font-semibold text-gray-800 mb-1">School</label>
                        <select class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm text-gray-700 focus:border-orange-500 focus:ring-orange-500">
                            <option>All Schools</option>
                            <option>Computing & IT</option>
                            <option>Business</option>
                            <option>Engineering</option>
                        </select>
                    </div>

                    <!-- Course Dropdown -->
                    <div class="mb-4">
                        <label class="block text-sm font-semibold text-gray-800 mb-1">Course</label>
                        <select class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm text-gray-700 focus:border-orange-500 focus:ring-orange-500">
                            <option>All Courses</option>
                            <option>BBIT</option>
                            <option>BSc Computer Science</option>
                            <option>BSc Information Technology</option>
                        </select>
                    </div>

                    <!-- Year / Semester Dropdown -->
                    <div class="mb-4">
                        <label class="block text-sm font-semibold text-gray-800 mb-1">Year / Semester</label>
                        <select class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm text-gray-700 focus:border-orange-500 focus:ring-orange-500">
                            <option>Year / Semester</option>
                            <option>1.1</option>
                            <option>1.2</option>
                            <option>2.1</option>
                            <option>2.2</option>
                            <option>3.1</option>
                            <option>3.2</option>
                        </select>
                    </div>
                </aside>

                <!-- Results -->
                <div class="md:col-span-3 space-y-4">
                    <div class="flex items-center justify-between border border-gray-200 rounded-lg p-4 hover:border-orange-500 transition">
                        <div>
                            <h3 class="font-semibold text-gray-900">Data Structures Notes – Complete</h3>
                            <p class="text-sm text-gray-600">BBIT 2.2 • Lecture Notes • 2.39 MB</p>
                        </div>
                        <button class="flex items-center gap-2 border border-orange-500 text-orange-500 text-sm font-semibold rounded-lg px-3 py-2 transition duration-200 ease-in-out hover:bg-orange-50 hover:shadow-sm">
                            <i class="fa-solid fa-download"></i>
                            Download
                        </button>
                    </div>

                    <div class="flex items-center justify-between border border-gray-200 rounded-lg p-4 hover:border-orange-500 transition">
                        <div>
                            <h3 class="font-semibold text-gray-900">Data Structures Past Paper 2023</h3>
                            <p class="text-sm text-gray-600">BBIT 2.2 • Past Paper • 1.20 MB</p>
                        </div>
                        <button class="flex items-center gap-2 border border-orange-500 text-orange-500 text-sm font-semibold rounded-lg px-3 py-2 transition duration-200 ease-in-out hover:bg-orange-50 hover:shadow-sm">
                            <i class="fa-solid fa-download"></i>
                            Download
                        </button>
                    </div>

                    <div class="flex items-center justify-between border border-gray-200 rounded-lg p-4 hover:border-orange-500 transition">
                        <div>
                            <h3 class="font-semibold text-gray-900">Linked Lists in Data Structures</h3>
                            <p class="text-sm text-gray-600">BBIT 2.2 • Lecture Notes • 1.38 MB</p>
                        </div>
                        <button class="flex items-center gap-2 border border-orange-500 text-orange-500 text-sm font-semibold rounded-lg px-3 py-2 transition duration-200 ease-in-out hover:bg-orange-50 hover:shadow-sm">
                            <i class="fa-solid fa-download"></i>
                            Download
                        </button>
                    </div>

                    <div class="flex items-center justify-between border border-gray-200 rounded-lg p-4 hover:border-orange-500 transition">
                        <div>
                            <h3 class="font-semibold text-gray-900">Data Structures CAT 2 Answers</h3>
                            <p class="text-sm text-gray-600">BBIT 2.2 • CAT • 1.20 MB</p>
                        </div>
                        <button class="flex items-center gap-2 border border-orange-500 text-orange-500 text-sm font-semibold rounded-lg px-3 py-2 transition duration-200 ease-in-out hover:bg-orange-50 hover:shadow-sm">
                            <i class="fa-solid fa-download"></i>
                            Download
                        </button>
                    </div>

                    <!-- Pagination -->
                    <div class="flex justify-center items-center gap-2 mt-6">
                        <button class="px-3 py-1 border border-orange-500 text-orange-500 rounded hover:bg-orange-50">1</button>
                        <button class="px-3 py-1 border border-gray-300 text-gray-600 rounded hover:border-orange-500 hover:text-orange-500">2</button>
                        <button class="px-3 py-1 border border-gray-300 text-gray-600 rounded hover:border-orange-500 hover:text-orange-500">3</button>
                        <button class="px-3 py-1 border border-gray-300 text-gray-600 rounded hover:border-orange-500 hover:text-orange-500">4</button>
                        <button class="px-3 py-1 border border-gray-300 text-gray-600 rounded hover:border-orange-500 hover:text-orange-500">5</button>
                        <button class="px-3 py-1 border border-gray-300 text-gray-600 rounded hover:border-orange-500 hover:text-orange-500">Next →</button>
                    </div>
                </div>
            </div>
        </section>
    </section>
<?php
require_once '../includes/footer.php';
?>