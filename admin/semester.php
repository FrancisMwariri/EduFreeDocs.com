<?php
$pageTitle = "EduFreeDocs | Admin Semesters";
$activePage = "semester"; // highlight Semester in nav
require_once '../includes/header.php';
require_once "../includes/navbar.php";
?>

<!-- Mobile Toggle -->
<div class="flex justify-between items-center mb-4 md:hidden px-4">
    <h1 class="text-xl font-bold text-gray-900">Semesters</h1>
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
                <h1 class="text-2xl font-bold text-gray-900">Semesters</h1>
                <p class="text-sm text-gray-600">Manage academic semesters</p>
            </div>
            <button class="bg-orange-500 text-white font-semibold text-sm rounded-lg px-4 py-2 transition hover:bg-orange-600 w-full sm:w-auto">
                Add Semester
            </button>
        </div>

        <!-- Semesters Table -->
        <div class="bg-white border border-gray-200 rounded-lg shadow-md shadow-orange-500 p-6 overflow-x-auto">
            <table class="w-full text-sm text-left text-gray-700 min-w-[700px]">
                <thead class="text-xs uppercase text-gray-500 border-b">
                <tr>
                    <th class="py-3 px-2">Semester</th>
                    <th class="py-3 px-2">Year</th>
                    <th class="py-3 px-2">Start Date</th>
                    <th class="py-3 px-2">End Date</th>
                    <th class="py-3 px-2">Status</th>
                    <th class="py-3 px-2 text-right">Actions</th>
                </tr>
                </thead>
                <tbody>
                <tr class="border-b hover:bg-orange-50"><td class="py-3 px-2">Semester 1</td><td class="py-3 px-2">Year 1</td><td class="py-3 px-2">Jan 15, 2004</td><td class="py-3 px-2">May 15, 2004</td><td class="py-3 px-2"><span class="text-gray-600 font-semibold">Completed</span></td><td class="py-3 px-2 text-right"><button class="text-orange-500 hover:underline">Edit</button></td></tr>
                <tr class="border-b hover:bg-orange-50"><td class="py-3 px-2">Semester 2</td><td class="py-3 px-2">Year 1</td><td class="py-3 px-2">May 20, 2004</td><td class="py-3 px-2">Sep 20, 2004</td><td class="py-3 px-2"><span class="text-green-600 font-semibold">Active</span></td><td class="py-3 px-2 text-right"><button class="text-orange-500 hover:underline">Edit</button></td></tr>
                <tr class="border-b hover:bg-orange-50"><td class="py-3 px-2">Semester 1</td><td class="py-3 px-2">Year 2</td><td class="py-3 px-2">Jan 15, 2004</td><td class="py-3 px-2">May 15, 2004</td><td class="py-3 px-2"><span class="text-gray-600 font-semibold">Completed</span></td><td class="py-3 px-2 text-right"><button class="text-orange-500 hover:underline">Edit</button></td></tr>
                <tr class="border-b hover:bg-orange-50"><td class="py-3 px-2">Semester 2</td><td class="py-3 px-2">Year 2</td><td class="py-3 px-2">May 20, 2004</td><td class="py-3 px-2">Sep 20, 2004</td><td class="py-3 px-2"><span class="text-green-600 font-semibold">Active</span></td><td class="py-3 px-2 text-right"><button class="text-orange-500 hover:underline">Edit</button></td></tr>
                <tr class="border-b hover:bg-orange-50"><td class="py-3 px-2">Semester 1</td><td class="py-3 px-2">Year 3</td><td class="py-3 px-2">Jan 15, 2004</td><td class="py-3 px-2">May 15, 2004</td><td class="py-3 px-2"><span class="text-gray-600 font-semibold">Completed</span></td><td class="py-3 px-2 text-right"><button class="text-orange-500 hover:underline">Edit</button></td></tr>
                <tr class="hover:bg-orange-50"><td class="py-3 px-2">Semester 2</td><td class="py-3 px-2">Year 3</td><td class="py-3 px-2">May 20, 2004</td><td class="py-3 px-2">Sep 20, 2004</td><td class="py-3 px-2"><span class="text-yellow-600 font-semibold">Upcoming</span></td><td class="py-3 px-2 text-right"><button class="text-orange-500 hover:underline">Edit</button></td></tr>
                </tbody>
            </table>

            <!-- Pagination -->
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mt-6">
                <p class="text-sm text-gray-600">Page 1 of 6</p>
                <div class="space-x-2">
                    <button class="px-3 py-1 border rounded text-sm hover:bg-orange-50">Prev</button>
                    <button class="px-3 py-1 border rounded text-sm hover:bg-orange-50">Next</button>
                </div>
            </div>
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
