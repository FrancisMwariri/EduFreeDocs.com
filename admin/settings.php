<?php
$pageTitle = "EduFreeDocs | Admin Settings";
$activePage = "settings"; // highlight Settings in nav
require_once '../includes/header.php';
require_once "../includes/navbar.php";
?>

<!-- Mobile Toggle -->
<div class="flex justify-between items-center mb-4 md:hidden px-4">
    <h1 class="text-xl font-bold text-gray-900">Settings</h1>
    <button id="sidebarToggle"
            class="flex items-center mt-4 gap-2 border border-orange-500 text-orange-500 font-semibold text-sm rounded-lg px-3 py-2 transition hover:bg-orange-50 hover:shadow-sm">
        <i class="fa-solid fa-bars"></i> Menu
    </button>
</div>

<div class="grid grid-cols-1 md:grid-cols-4 gap-6 px-4 sm:px-6 lg:px-8 py-5 max-w-7xl mx-auto">

    <!-- Sidebar -->
    <div id="sidebar" class="md:col-span-1 hidden md:block">
        <?php require_once '../includes/admin-nav.php'; ?>
    </div>

    <!-- Main Content -->
    <div class="md:col-span-3 space-y-6">
        <!-- Header -->
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
            <div>
                <h1 class="text-2xl font-bold text-gray-900">Settings</h1>
                <p class="text-sm text-gray-600">Manage system settings and preferences</p>
            </div>
        </div>

        <!-- Settings Form -->
        <div class="bg-white border border-gray-200 rounded-lg shadow-md shadow-orange-500 p-6 space-y-4">
            <div>
                <label class="block text-sm font-semibold text-gray-700">Site Name</label>
                <input type="text" value="EduFreeDocs"
                       class="mt-1 w-full border border-gray-300 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-orange-500">
            </div>

            <div>
                <label class="block text-sm font-semibold text-gray-700">Site Email</label>
                <input type="email" value="info@edufreedocs.com"
                       class="mt-1 w-full border border-gray-300 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-orange-500">
            </div>

            <div>
                <label class="block text-sm font-semibold text-gray-700">Site Description</label>
                <textarea rows="3"
                          class="mt-1 w-full border border-gray-300 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-orange-500">Free learning-resources platform for students.</textarea>
            </div>

            <div>
                <label class="block text-sm font-semibold text-gray-700">Timezone</label>
                <select class="mt-1 w-full border border-gray-300 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-orange-500">
                    <option>[UTC +03:00] East Africa Time</option>
                    <option>[UTC +00:00] GMT</option>
                    <option>[UTC +01:00] Central European Time</option>
                    <option>[UTC +05:30] India Standard Time</option>
                </select>
            </div>

            <button class="bg-orange-500 text-white font-semibold text-sm rounded-lg px-4 py-2 transition hover:bg-orange-600">
                Save Changes
            </button>
        </div>
    </div>
</div>

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
