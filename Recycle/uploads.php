<?php
$pageTitle = "EduFreeDocs | Upload Resource";
$activePage = "uploads";
require_once '../includes/header.php';
require_once '../includes/navbar.php';
?>
<!-- Upload Resource Section -->
<section class="w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-5">

    <!-- Mobile Toggle -->
    <div class="flex justify-between items-center mb-4 md:hidden">
        <h1 class="text-xl font-bold text-gray-900">Upload Resource</h1>
        <button id="sidebarToggle" class="flex items-center gap-2 border border-orange-500 text-orange-500 font-semibold text-sm rounded-lg px-3 py-2 transition hover:bg-orange-50 hover:shadow-sm">
            <i class="fa-solid fa-bars"></i> Menu
        </button>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">

        <!-- Sidebar -->
        <?php require_once '../includes/mobile-nav.php'; ?>

        <!-- Main Content -->
        <div class="md:col-span-3">
            <!-- Breadcrumb -->
            <nav class="flex items-center flex-wrap gap-2 text-xs sm:text-sm text-gray-500 mb-5">
                <a href="index.php" class="hover:text-orange-500">Home</a>
                <span>›</span>
                <span class="text-gray-700">Upload Resource</span>
            </nav>

            <!-- Container -->
            <section class="bg-white rounded-sm border border-gray-200 shadow-md shadow-orange-500 p-6">

                <!-- Header -->
                <div class="flex items-center justify-between mb-6">
                    <h1 class="font-bold text-2xl sm:text-3xl text-gray-900 leading-tight">
                        Upload Resource
                    </h1>
                    <button class="flex items-center gap-2 border border-gray-200 rounded-lg px-4 py-2 text-sm font-semibold text-gray-700 hover:border-orange-500 hover:text-orange-500 transition">
                        <i class="fa-regular fa-heart text-orange-500"></i>
                        Add to Favorites
                    </button>
                </div>

                <!-- Grid Layout -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

                    <!-- Upload Form -->
                    <form class="space-y-4 md:col-span-2">
                        <!-- School -->
                        <div>
                            <label class="block text-sm font-semibold text-gray-800 mb-1">Select School</label>
                            <select class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm text-gray-700 focus:border-orange-500 focus:ring-orange-500">
                                <option>All Schools</option>
                                <option>Computing & IT</option>
                                <option>Business</option>
                                <option>Engineering</option>
                            </select>
                        </div>

                        <!-- Course -->
                        <div>
                            <label class="block text-sm font-semibold text-gray-800 mb-1">Select Course</label>
                            <select class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm text-gray-700 focus:border-orange-500 focus:ring-orange-500">
                                <option>All Courses</option>
                                <option>BBIT</option>
                                <option>BSc Computer Science</option>
                                <option>BSc Information Technology</option>
                            </select>
                        </div>

                        <!-- Type -->
                        <div>
                            <label class="block text-sm font-semibold text-gray-800 mb-1">Select Type</label>
                            <select class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm text-gray-700 focus:border-orange-500 focus:ring-orange-500">
                                <option>Lecture Notes</option>
                                <option>Past Papers</option>
                                <option>CATs</option>
                                <option>Books</option>
                                <option>Revision</option>
                                <option>Slideshows</option>
                            </select>
                        </div>

                        <!-- Year / Semester -->
                        <div>
                            <label class="block text-sm font-semibold text-gray-800 mb-1">Select Year / Semester</label>
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

                        <!-- Description -->
                        <div>
                            <label class="block text-sm font-semibold text-gray-800 mb-1">Enter Description</label>
                            <textarea rows="3" class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm text-gray-700 focus:border-orange-500 focus:ring-orange-500"></textarea>
                        </div>

                        <!-- File Upload -->
                        <div>
                            <label class="block text-sm font-semibold text-gray-800 mb-1">Choose File</label>
                            <input type="file" class="w-full text-sm text-gray-700 border border-gray-300 rounded-lg px-3 py-2 focus:border-orange-500 focus:ring-orange-500">
                            <p class="text-xs text-gray-500 mt-1">(Max file size: 20MB, PDF only)</p>
                        </div>

                        <!-- Buttons -->
                        <div class="flex gap-3">
                            <button type="submit" class="border border-orange-500 text-orange-500 font-semibold text-sm rounded-lg px-4 py-2 transition hover:bg-orange-50 hover:shadow-sm">
                                Upload
                            </button>
                            <button type="reset" class="border border-gray-300 text-gray-600 font-semibold text-sm rounded-lg px-4 py-2 transition hover:border-orange-500 hover:text-orange-500">
                                Cancel
                            </button>
                        </div>
                    </form>

                    <!-- Upload Guidelines -->
                    <div class="bg-orange-50 border border-orange-200 rounded-lg p-4 md:col-span-1">
                        <h2 class="font-bold text-lg text-gray-900 mb-3">Upload Guidelines</h2>
                        <ul class="list-disc list-inside marker:text-orange-500 text-sm text-gray-700 space-y-2">
                            <li>Upload only educational content</li>
                            <li>File must be in PDF format</li>
                            <li>File size should not exceed 20MB</li>
                            <li>Be respectful and avoid encrypted material</li>
                            <li>Quality content helps everyone learn better</li>
                        </ul>
                    </div>
                </div>
            </section>
        </div>
    </div>
</section>

<!-- Mobile Sidebar Toggle Script -->
<script>
    const sidebarToggle = document.getElementById('sidebarToggle');
    const sidebar = document.getElementById('sidebar');
    sidebarToggle.addEventListener('click', () => {
        sidebar.classList.toggle('hidden');
    });
</script>
<?php
require_once '../includes/footer.php';
?>