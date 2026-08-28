<?php
$pageTitle = "EduFreeDocs | Admin Schools";
$activePage = "schools"; // highlight Schools in nav
require_once '../includes/header.php';
require_once "../includes/navbar.php";
?>

<!-- Mobile Toggle -->
<div class="flex justify-between items-center mb-4 md:hidden px-4">
    <h1 class="text-xl font-bold text-gray-900">Schools</h1>
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
                <h1 class="text-2xl font-bold text-gray-900">Schools</h1>
                <p class="text-sm text-gray-600">Manage schools and faculties</p>
            </div>
            <button class="bg-orange-500 text-white font-semibold text-sm rounded-lg px-4 py-2 transition hover:bg-orange-600 w-full sm:w-auto">
                Add School
            </button>
        </div>

        <!-- Schools Table -->
        <div class="bg-white border border-gray-200 rounded-lg shadow-md shadow-orange-500 p-6 overflow-x-auto">
            <table class="w-full text-sm text-left text-gray-700 min-w-[700px]">
                <thead class="text-xs uppercase text-gray-500 border-b">
                <tr>
                    <th class="py-3 px-2">School Name</th>
                    <th class="py-3 px-2">Code</th>
                    <th class="py-3 px-2">Description</th>
                    <th class="py-3 px-2 text-right">Actions</th>
                </tr>
                </thead>
                <tbody>
                <tr class="border-b hover:bg-orange-50"><td class="py-3 px-2">School of Computing & Information Technology</td><td class="py-3 px-2">SCIT</td><td class="py-3 px-2">All computing and IT related courses.</td><td class="py-3 px-2 text-right"><button class="text-orange-500 hover:underline">Edit</button></td></tr>
                <tr class="border-b hover:bg-orange-50"><td class="py-3 px-2">School of Engineering</td><td class="py-3 px-2">SE</td><td class="py-3 px-2">Engineering and technology courses.</td><td class="py-3 px-2 text-right"><button class="text-orange-500 hover:underline">Edit</button></td></tr>
                <tr class="border-b hover:bg-orange-50"><td class="py-3 px-2">School of Business</td><td class="py-3 px-2">SB</td><td class="py-3 px-2">Business and management courses.</td><td class="py-3 px-2 text-right"><button class="text-orange-500 hover:underline">Edit</button></td></tr>
                <tr class="border-b hover:bg-orange-50"><td class="py-3 px-2">School of Education</td><td class="py-3 px-2">SED</td><td class="py-3 px-2">Education and teaching courses.</td><td class="py-3 px-2 text-right"><button class="text-orange-500 hover:underline">Edit</button></td></tr>
                <tr class="hover:bg-orange-50"><td class="py-3 px-2">School of Health Sciences</td><td class="py-3 px-2">SHS</td><td class="py-3 px-2">Health and medical sciences.</td><td class="py-3 px-2 text-right"><button class="text-orange-500 hover:underline">Edit</button></td></tr>
                </tbody>
            </table>

            <!-- Pagination -->
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mt-6">
                <p class="text-sm text-gray-600">Page 1 of 5</p>
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
