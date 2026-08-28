<?php
$pageTitle = "EduFreeDocs | My Favorites";
$activePage = "favorites";
require_once '../includes/header.php';
require_once '../includes/navbar.php';
?>
<!-- My Favorites Section -->
<section class="w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-5">

    <!-- Mobile Toggle -->
    <div class="flex justify-between items-center mb-4 md:hidden">
        <h1 class="text-xl font-bold text-gray-900">My Favorites</h1>
        <button id="sidebarToggle" class="flex items-center gap-2 border border-orange-500 text-orange-500 font-semibold text-sm rounded-lg px-3 py-2 transition hover:bg-orange-50 hover:shadow-sm">
            <i class="fa-solid fa-bars"></i> Menu
        </button>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">

        <!-- Sidebar -->
        <?php require_once '../includes/mobile-nav.php'; ?>


        <!-- Main Content -->
        <div class="md:col-span-3 space-y-4">

            <!-- Favorites List -->
            <div class="bg-white border border-gray-200 rounded-lg shadow-md shadow-orange-500 p-6">
                <h1 class="text-2xl font-bold text-gray-900 mb-4">My Favorites</h1>

                <div class="space-y-3">
                    <div class="flex items-center justify-between border border-gray-200 rounded-lg p-3 hover:border-orange-500 transition">
                        <div class="flex items-center gap-3">
                            <i class="fa-regular fa-file-pdf text-red-500"></i>
                            <p class="font-semibold text-gray-900">Data Structures — Complete Notes.pdf <span class="text-xs text-gray-600">(1.6 MB)</span></p>
                        </div>
                        <i class="fa-solid fa-heart text-orange-500"></i>
                    </div>

                    <div class="flex items-center justify-between border border-gray-200 rounded-lg p-3 hover:border-orange-500 transition">
                        <div class="flex items-center gap-3">
                            <i class="fa-regular fa-file-pdf text-red-500"></i>
                            <p class="font-semibold text-gray-900">CAT 2 Questions and Answers.pdf <span class="text-xs text-gray-600">(1.1 MB)</span></p>
                        </div>
                        <i class="fa-solid fa-heart text-orange-500"></i>
                    </div>

                    <div class="flex items-center justify-between border border-gray-200 rounded-lg p-3 hover:border-orange-500 transition">
                        <div class="flex items-center gap-3">
                            <i class="fa-regular fa-file-pdf text-red-500"></i>
                            <p class="font-semibold text-gray-900">Database Systems — Summary.pdf <span class="text-xs text-gray-600">(950 KB)</span></p>
                        </div>
                        <i class="fa-solid fa-heart text-orange-500"></i>
                    </div>

                    <div class="flex items-center justify-between border border-gray-200 rounded-lg p-3 hover:border-orange-500 transition">
                        <div class="flex items-center gap-3">
                            <i class="fa-regular fa-file-pdf text-red-500"></i>
                            <p class="font-semibold text-gray-900">Operating Systems — Important Topics.pdf <span class="text-xs text-gray-600">(1.0 MB)</span></p>
                        </div>
                        <i class="fa-solid fa-heart text-orange-500"></i>
                    </div>

                    <div class="flex items-center justify-between border border-gray-200 rounded-lg p-3 hover:border-orange-500 transition">
                        <div class="flex items-center gap-3">
                            <i class="fa-regular fa-file-pdf text-red-500"></i>
                            <p class="font-semibold text-gray-900">Web Development — Cheat Sheet.pdf <span class="text-xs text-gray-600">(780 KB)</span></p>
                        </div>
                        <i class="fa-solid fa-heart text-orange-500"></i>
                    </div>

                    <div class="flex items-center justify-between border border-gray-200 rounded-lg p-3 hover:border-orange-500 transition">
                        <div class="flex items-center gap-3">
                            <i class="fa-regular fa-file-pdf text-red-500"></i>
                            <p class="font-semibold text-gray-900">Computer Networks — Formulas.pdf <span class="text-xs text-gray-600">(600 KB)</span></p>
                        </div>
                        <i class="fa-solid fa-heart text-orange-500"></i>
                    </div>
                </div>
            </div>
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
