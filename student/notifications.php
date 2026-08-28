<?php
$pageTitle = "EduFreeDocs | Notifications";
$activePage = "notifications";
require_once '../includes/header.php';
require_once '../includes/navbar.php';
?>
<!-- Notifications Section -->
<section class="w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-5">

    <!-- Mobile Toggle -->
    <div class="flex justify-between items-center mb-4 md:hidden">
        <h1 class="text-xl font-bold text-gray-900">Notifications</h1>
        <button id="sidebarToggle" class="flex items-center gap-2 border border-orange-500 text-orange-500 font-semibold text-sm rounded-lg px-3 py-2 transition hover:bg-orange-50 hover:shadow-sm">
            <i class="fa-solid fa-bars"></i> Menu
        </button>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">

        <!-- Sidebar -->
        <?php require_once '../includes/mobile-nav.php'; ?>


        <!-- Main Content -->
        <div class="md:col-span-3 space-y-6">

            <!-- Header -->
            <h1 class="text-2xl font-bold text-gray-900">Notifications</h1>

            <!-- Notifications List -->
            <div class="bg-white border border-gray-200 rounded-lg shadow-md shadow-orange-500 p-6 space-y-3">
                <div class="flex items-start gap-3 border-b border-gray-200 pb-3">
                    <i class="fa-regular fa-clock text-orange-500"></i>
                    <div>
                        <p class="text-sm text-gray-800">Your upload <span class="font-semibold">Web Programming – Notes.pdf</span> is pending review.</p>
                        <p class="text-xs text-gray-500">2 hours ago</p>
                    </div>
                </div>

                <div class="flex items-start gap-3 border-b border-gray-200 pb-3">
                    <i class="fa-solid fa-check text-green-600"></i>
                    <div>
                        <p class="text-sm text-gray-800">Your upload <span class="font-semibold">Database Systems – Notes.pdf</span> has been approved.</p>
                        <p class="text-xs text-gray-500">1 day ago</p>
                    </div>
                </div>

                <div class="flex items-start gap-3 border-b border-gray-200 pb-3">
                    <i class="fa-regular fa-comment text-blue-500"></i>
                    <div>
                        <p class="text-sm text-gray-800">New comment on your upload <span class="font-semibold">Operating Systems – Summary.pdf</span>.</p>
                        <p class="text-xs text-gray-500">2 days ago</p>
                    </div>
                </div>

                <div class="flex items-start gap-3 border-b border-gray-200 pb-3">
                    <i class="fa-solid fa-file text-orange-500"></i>
                    <div>
                        <p class="text-sm text-gray-800">CAT 2 for Data Structures has been uploaded.</p>
                        <p class="text-xs text-gray-500">3 days ago</p>
                    </div>
                </div>

                <div class="flex items-start gap-3">
                    <i class="fa-solid fa-wrench text-gray-600"></i>
                    <div>
                        <p class="text-sm text-gray-800">System maintenance scheduled on May 20, 2024.</p>
                        <p class="text-xs text-gray-500">5 days ago</p>
                    </div>
                </div>
            </div>

            <!-- Mark All as Read -->
            <div class="flex justify-end">
                <button class="border border-orange-500 text-orange-500 font-semibold text-sm rounded-lg px-4 py-2 transition hover:bg-orange-50 hover:shadow-sm">
                    Mark all as read
                </button>
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
