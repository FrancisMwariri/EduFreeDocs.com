<?php
$pageTitle = "EduFreeDocs | Settings";
$activePage = "settings";
require_once '../includes/header.php';
require_once '../includes/navbar.php';
?>
<!-- Settings Section -->
<section class="w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-5">

    <!-- Mobile Toggle -->
    <div class="flex justify-between items-center mb-4 md:hidden">
        <h1 class="text-xl font-bold text-gray-900">Settings</h1>
        <button id="sidebarToggle" class="flex items-center gap-2 border border-orange-500 text-orange-500 font-semibold text-sm rounded-lg px-3 py-2 transition hover:bg-orange-50 hover:shadow-sm">
            <i class="fa-solid fa-bars"></i> Menu
        </button>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">

        <!-- Sidebar -->
        <?php require_once '../includes/mobile-nav.php'; ?>

        <!-- Main Content -->
        <div class="md:col-span-3 space-y-6">
            <h1 class="text-2xl font-bold text-gray-900">Settings</h1>

            <!-- Account Settings -->
            <div class="bg-white border border-gray-200 rounded-lg shadow-md shadow-orange-500 p-6 space-y-4">
                <h2 class="font-bold text-lg text-gray-900">Account Settings</h2>
                <button class="border border-orange-500 text-orange-500 font-semibold text-sm rounded-lg px-4 py-2 transition hover:bg-orange-50 hover:shadow-sm">Change Password</button>
                <button class="border border-orange-500 text-orange-500 font-semibold text-sm rounded-lg px-4 py-2 transition hover:bg-orange-50 hover:shadow-sm">Update Email</button>
            </div>

            <!-- Preferences -->
            <div class="bg-white border border-gray-200 rounded-lg shadow-md shadow-orange-500 p-6 space-y-4">
                <h2 class="font-bold text-lg text-gray-900">Preferences</h2>
                <div class="flex items-center justify-between">
                    <span class="text-sm font-semibold text-gray-800">Language</span>
                    <select class="border border-gray-300 rounded-lg px-3 py-2 text-sm text-gray-700 focus:border-orange-500 focus:ring-orange-500">
                        <option>English</option>
                        <option>Swahili</option>
                        <option>French</option>
                    </select>
                </div>
                <div class="flex items-center justify-between">
                    <span class="text-sm font-semibold text-gray-800">Email Notifications</span>
                    <label class="inline-flex items-center cursor-pointer">
                        <input type="checkbox" checked class="sr-only peer">
                        <div class="w-11 h-6 bg-gray-300 rounded-full peer-checked:bg-orange-500 relative transition"></div>
                    </label>
                </div>
            </div>

            <!-- Danger Zone -->
            <div class="bg-white border border-gray-200 rounded-lg shadow-md shadow-orange-500 p-6">
                <h2 class="font-bold text-lg text-red-600">Danger Zone</h2>
                <button class="border border-red-500 text-red-500 font-semibold text-sm rounded-lg px-4 py-2 transition hover:bg-red-50 hover:shadow-sm">Delete Account</button>
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
