<?php
$pageTitle = "EduFreeDocs | Profile";
$activePage = "profile";
require_once '../includes/header.php';
require_once '../includes/navbar.php';
?>
<!-- Profile Section -->
<section class="w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-5">

    <!-- Mobile Toggle -->
    <div class="flex justify-between items-center mb-4 md:hidden">
        <h1 class="text-xl font-bold text-gray-900">Profile</h1>
        <button id="sidebarToggle" class="flex items-center gap-2 border border-orange-500 text-orange-500 font-semibold text-sm rounded-lg px-3 py-2 transition hover:bg-orange-50 hover:shadow-sm">
            <i class="fa-solid fa-bars"></i> Menu
        </button>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">

        <!-- Sidebar -->
        <?php require_once '../includes/mobile-nav.php'; ?>

        <!-- Main Content -->
        <div class="md:col-span-3">
            <h1 class="text-2xl font-bold text-gray-900 mb-6">Profile</h1>

            <div class="bg-white border border-gray-200 rounded-lg shadow-md shadow-orange-500 p-6">
                <div class="flex flex-col sm:flex-row gap-6 items-start">
                    <!-- Profile Photo -->
                    <div class="flex flex-col items-center">
                        <img src="https://via.placeholder.com/120" alt="Profile Photo" class="w-28 h-28 rounded-full border border-gray-300 shadow-sm">
                        <p class="text-sm text-gray-600 mt-2">Student Member</p>
                        <p class="text-xs text-gray-500">Joined on Jan 15, 2024</p>
                    </div>

                    <!-- Profile Form -->
                    <form class="flex-1 space-y-4">
                        <div>
                            <label class="block text-sm font-semibold text-gray-800 mb-1">Full Name</label>
                            <input type="text" value="John Doe" class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm text-gray-700 focus:border-orange-500 focus:ring-orange-500">
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-800 mb-1">Email</label>
                            <input type="email" value="john.doe@example.com" class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm text-gray-700 focus:border-orange-500 focus:ring-orange-500">
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-800 mb-1">Phone</label>
                            <input type="text" value="+254 712 345 678" class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm text-gray-700 focus:border-orange-500 focus:ring-orange-500">
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-800 mb-1">School</label>
                            <input type="text" value="School of Computing & IT" class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm text-gray-700 focus:border-orange-500 focus:ring-orange-500">
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-800 mb-1">Course</label>
                            <input type="text" value="Bachelor of Business Information Technology" class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm text-gray-700 focus:border-orange-500 focus:ring-orange-500">
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-800 mb-1">Year of Study</label>
                            <input type="text" value="Year 2 – Semester 2" class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm text-gray-700 focus:border-orange-500 focus:ring-orange-500">
                        </div>

                        <!-- Save Button -->
                        <div>
                            <button type="submit" class="border border-orange-500 text-orange-500 font-semibold text-sm rounded-lg px-4 py-2 transition hover:bg-orange-50 hover:shadow-sm">
                                Save Changes
                            </button>
                        </div>
                    </form>
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
