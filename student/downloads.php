<?php
$pageTitle = "EduFreeDocs | My Downloads";
$activePage = "downloads";
require_once '../includes/header.php';
require_once '../includes/navbar.php';
?>
<!-- My Downloads Section -->
<section class="w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-5">

    <!-- Mobile Toggle -->
    <div class="flex justify-between items-center mb-4 md:hidden">
        <h1 class="text-xl font-bold text-gray-900">My Downloads</h1>
        <button id="sidebarToggle" class="flex items-center gap-2 border border-orange-500 text-orange-500 font-semibold text-sm rounded-lg px-3 py-2 transition hover:bg-orange-50 hover:shadow-sm">
            <i class="fa-solid fa-bars"></i> Menu
        </button>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">

        <!-- Sidebar -->
        <?php require_once '../includes/mobile-nav.php'; ?>


        <!-- Main Content -->
        <div class="md:col-span-3 space-y-4">

            <!-- Downloads List -->
            <div class="bg-white border border-gray-200 rounded-lg shadow-md shadow-orange-500 p-6">
                <h1 class="text-2xl font-bold text-gray-900 mb-4">My Downloads</h1>

                <div class="space-y-3">
                    <div class="flex items-center justify-between border border-gray-200 rounded-lg p-3 hover:border-orange-500 transition">
                        <div class="flex items-center gap-3">
                            <i class="fa-regular fa-file-pdf text-red-500"></i>
                            <div>
                                <p class="font-semibold text-gray-900">Data Structures — Lecture Notes.pdf</p>
                                <p class="text-xs text-gray-600">PDF • 1.2 MB • May 10, 2024</p>
                            </div>
                        </div>
                        <button class="flex items-center gap-2 border border-orange-500 text-orange-500 text-xs font-semibold rounded-lg px-3 py-1 transition hover:bg-orange-50 hover:shadow-sm">
                            <i class="fa-solid fa-download"></i> Download
                        </button>
                    </div>

                    <div class="flex items-center justify-between border border-gray-200 rounded-lg p-3 hover:border-orange-500 transition">
                        <div class="flex items-center gap-3">
                            <i class="fa-regular fa-file-pdf text-red-500"></i>
                            <div>
                                <p class="font-semibold text-gray-900">Database Systems — Notes.pdf</p>
                                <p class="text-xs text-gray-600">PDF • 1.5 MB • May 9, 2024</p>
                            </div>
                        </div>
                        <button class="flex items-center gap-2 border border-orange-500 text-orange-500 text-xs font-semibold rounded-lg px-3 py-1 transition hover:bg-orange-50 hover:shadow-sm">
                            <i class="fa-solid fa-download"></i> Download
                        </button>
                    </div>

                    <div class="flex items-center justify-between border border-gray-200 rounded-lg p-3 hover:border-orange-500 transition">
                        <div class="flex items-center gap-3">
                            <i class="fa-regular fa-file-pdf text-red-500"></i>
                            <div>
                                <p class="font-semibold text-gray-900">Operating Systems — Past Paper.pdf</p>
                                <p class="text-xs text-gray-600">PDF • 1.3 MB • May 8, 2024</p>
                            </div>
                        </div>
                        <button class="flex items-center gap-2 border border-orange-500 text-orange-500 text-xs font-semibold rounded-lg px-3 py-1 transition hover:bg-orange-50 hover:shadow-sm">
                            <i class="fa-solid fa-download"></i> Download
                        </button>
                    </div>

                    <div class="flex items-center justify-between border border-gray-200 rounded-lg p-3 hover:border-orange-500 transition">
                        <div class="flex items-center gap-3">
                            <i class="fa-regular fa-file-pdf text-red-500"></i>
                            <div>
                                <p class="font-semibold text-gray-900">Web Programming — Notes.pdf</p>
                                <p class="text-xs text-gray-600">PDF • 1.1 MB • May 7, 2024</p>
                            </div>
                        </div>
                        <button class="flex items-center gap-2 border border-orange-500 text-orange-500 text-xs font-semibold rounded-lg px-3 py-1 transition hover:bg-orange-50 hover:shadow-sm">
                            <i class="fa-solid fa-download"></i> Download
                        </button>
                    </div>

                    <div class="flex items-center justify-between border border-gray-200 rounded-lg p-3 hover:border-orange-500 transition">
                        <div class="flex items-center gap-3">
                            <i class="fa-regular fa-file-pdf text-red-500"></i>
                            <div>
                                <p class="font-semibold text-gray-900">Computer Networks — Notes.pdf</p>
                                <p class="text-xs text-gray-600">PDF • 1.4 MB • May 6, 2024</p>
                            </div>
                        </div>
                        <button class="flex items-center gap-2 border border-orange-500 text-orange-500 text-xs font-semibold rounded-lg px-3 py-1 transition hover:bg-orange-50 hover:shadow-sm">
                            <i class="fa-solid fa-download"></i> Download
                        </button>
                    </div>

                    <div class="flex items-center justify-between border border-gray-200 rounded-lg p-3 hover:border-orange-500 transition">
                        <div class="flex items-center gap-3">
                            <i class="fa-regular fa-file-pdf text-red-500"></i>
                            <div>
                                <p class="font-semibold text-gray-900">Discrete Mathematics — Notes.pdf</p>
                                <p class="text-xs text-gray-600">PDF • 980 KB • May 5, 2024</p>
                            </div>
                        </div>
                        <button class="flex items-center gap-2 border border-orange-500 text-orange-500 text-xs font-semibold rounded-lg px-3 py-1 transition hover:bg-orange-50 hover:shadow-sm">
                            <i class="fa-solid fa-download"></i> Download
                        </button>
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
