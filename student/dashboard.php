<?php
$pageTitle = "EduFreeDocs | Dashboard";
$activePage = "dashboard";
require_once '../includes/header.php';
require_once '../includes/navbar.php';
?>
<!-- Dashboard Section -->
<section class="w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-5">

    <!-- Mobile Toggle -->
    <div class="flex justify-between items-center mb-4 md:hidden">
        <h1 class="text-xl font-bold text-gray-900">Dashboard</h1>
        <button id="sidebarToggle" class="flex items-center gap-2 border border-orange-500 text-orange-500 font-semibold text-sm rounded-lg px-3 py-2 transition hover:bg-orange-50 hover:shadow-sm">
            <i class="fa-solid fa-bars"></i> Menu
        </button>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">

        <!-- Sidebar -->
        <?php require_once '../includes/mobile-nav.php'; ?>


        <!-- Main Content -->
        <div class="md:col-span-3 space-y-6">

            <!-- Greeting -->
            <div class="bg-white border border-gray-200 rounded-lg shadow-md shadow-orange-500 p-6">
                <h1 class="text-2xl font-bold text-gray-900 mb-2">
                    Welcome back, Francis! 👋
                </h1>
                <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 mt-4">
                    <div class="bg-orange-50 border border-orange-200 rounded-lg p-4 text-center">
                        <p class="text-sm font-semibold text-gray-700">Downloads</p>
                        <p class="text-xl font-bold text-orange-500">24</p>
                    </div>
                    <div class="bg-orange-50 border border-orange-200 rounded-lg p-4 text-center">
                        <p class="text-sm font-semibold text-gray-700">Favorites</p>
                        <p class="text-xl font-bold text-orange-500">18</p>
                    </div>
                    <div class="bg-orange-50 border border-orange-200 rounded-lg p-4 text-center">
                        <p class="text-sm font-semibold text-gray-700">Uploads</p>
                        <p class="text-xl font-bold text-orange-500">7</p>
                    </div>
                    <div class="bg-orange-50 border border-orange-200 rounded-lg p-4 text-center">
                        <p class="text-sm font-semibold text-gray-700">Resources</p>
                        <p class="text-xl font-bold text-orange-500">49</p>
                    </div>
                </div>
            </div>

            <!-- Recent Activity -->
            <div class="bg-white border border-gray-200 rounded-lg shadow-md shadow-orange-500 p-6">
                <h2 class="font-bold text-lg text-gray-900 mb-4">Recent Activity</h2>
                <ul class="list-disc list-inside marker:text-orange-500 text-sm text-gray-700 space-y-2">
                    <li>Downloaded Data Structures Notes</li>
                    <li>Favorited Software Engineering Notes <span class="text-gray-500">(1 day ago)</span></li>
                    <li>Downloaded DBMS Past Paper 2004 <span class="text-gray-500">(2 days ago)</span></li>
                </ul>
            </div>

            <!-- Quick Links -->
            <div class="bg-white border border-gray-200 rounded-lg shadow-md shadow-orange-500 p-6">
                <h2 class="font-bold text-lg text-gray-900 mb-4">Quick Links</h2>
                <div class="flex flex-wrap gap-3">
                    <a href="#" class="flex items-center gap-2 border border-orange-500 text-orange-500 font-semibold text-sm rounded-lg px-4 py-2 transition hover:bg-orange-50 hover:shadow-sm">Browse Schools</a>
                    <a href="#" class="flex items-center gap-2 border border-orange-500 text-orange-500 font-semibold text-sm rounded-lg px-4 py-2 transition hover:bg-orange-50 hover:shadow-sm">Past Papers</a>
                    <a href="#" class="flex items-center gap-2 border border-orange-500 text-orange-500 font-semibold text-sm rounded-lg px-4 py-2 transition hover:bg-orange-50 hover:shadow-sm">Upload Resource</a>
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
