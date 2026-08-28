<?php
$pageTitle = "EduFreeDocs | Admin Reports";
$activePage = "reports"; // highlight Reports in nav
require_once '../includes/header.php';
require_once "../includes/navbar.php";

?>

<!-- Mobile Toggle -->
<div class="flex justify-between items-center mb-4 md:hidden px-4">
    <h1 class="text-xl font-bold text-gray-900">Reports</h1>
    <button id="sidebarToggle" class="flex items-center mt-4 gap-2 border border-orange-500 text-orange-500 font-semibold text-sm rounded-lg px-3 py-2 transition hover:bg-orange-50 hover:shadow-sm">
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
        <div class="flex items-center justify-between">
            <div>
                <h1 class="text-2xl font-bold text-gray-900">Reports</h1>
                <p class="text-sm text-gray-600">May 20 – May 24, 2004</p>
            </div>
            <button class="border border-orange-500 text-orange-500 font-semibold text-sm rounded-lg px-4 py-2 transition hover:bg-orange-50 hover:shadow-sm">
                Export Report
            </button>
        </div>

        <!-- Metrics -->
        <div class="grid grid-cols-2 sm:grid-cols-4 gap-4">
            <div class="bg-orange-50 border border-orange-200 rounded-lg p-4 text-center">
                <p class="text-sm font-semibold text-gray-700">Total Users</p>
                <p class="text-xl font-bold text-orange-500">1,256</p>
                <p class="text-xs text-green-600">+10%</p>
            </div>
            <div class="bg-orange-50 border border-orange-200 rounded-lg p-4 text-center">
                <p class="text-sm font-semibold text-gray-700">Total Documents</p>
                <p class="text-xl font-bold text-orange-500">3,245</p>
                <p class="text-xs text-green-600">+15%</p>
            </div>
            <div class="bg-orange-50 border border-orange-200 rounded-lg p-4 text-center">
                <p class="text-sm font-semibold text-gray-700">Total Downloads</p>
                <p class="text-xl font-bold text-orange-500">12,842</p>
                <p class="text-xs text-green-600">+20%</p>
            </div>
            <div class="bg-orange-50 border border-orange-200 rounded-lg p-4 text-center">
                <p class="text-sm font-semibold text-gray-700">Total Uploads</p>
                <p class="text-xl font-bold text-orange-500">978</p>
                <p class="text-xs text-green-600">+5%</p>
            </div>
        </div>

        <!-- Downloads Analytics -->
        <div class="bg-white border border-gray-200 rounded-lg shadow-md shadow-orange-500 p-6">
            <h2 class="font-bold text-lg text-gray-900 mb-4">Downloads Analytics</h2>
            <div class="h-64 flex items-center justify-center text-gray-500 text-sm">
                [Graph Placeholder]
            </div>
        </div>

        <!-- Tables -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Top Courses -->
            <div class="bg-white border border-gray-200 rounded-lg shadow-md shadow-orange-500 p-6">
                <h2 class="font-bold text-lg text-gray-900 mb-4">Top Courses by Downloads</h2>
                <table class="w-full text-sm text-left text-gray-700">
                    <tbody>
                    <tr><td>Data Structures</td><td class="text-right">2,342</td></tr>
                    <tr><td>Database Systems</td><td class="text-right">1,987</td></tr>
                    <tr><td>Operating Systems</td><td class="text-right">1,543</td></tr>
                    <tr><td>Computer Networks</td><td class="text-right">1,234</td></tr>
                    <tr><td>Web Programming</td><td class="text-right">1,123</td></tr>
                    </tbody>
                </table>
                <a href="#" class="text-orange-500 text-xs font-semibold hover:underline mt-2 inline-block">View full report</a>
            </div>

            <!-- Top Schools -->
            <div class="bg-white border border-gray-200 rounded-lg shadow-md shadow-orange-500 p-6">
                <h2 class="font-bold text-lg text-gray-900 mb-4">Top Schools by Activity</h2>
                <table class="w-full text-sm text-left text-gray-700">
                    <tbody>
                    <tr><td>Computing & IT</td><td class="text-right">8,142</td></tr>
                    <tr><td>Engineering</td><td class="text-right">5,444</td></tr>
                    <tr><td>Business</td><td class="text-right">2,234</td></tr>
                    <tr><td>Education</td><td class="text-right">1,543</td></tr>
                    <tr><td>Health Sciences</td><td class="text-right">920</td></tr>
                    </tbody>
                </table>
                <a href="#" class="text-orange-500 text-xs font-semibold hover:underline mt-2 inline-block">View full report</a>
            </div>
        </div>
    </div>
</div>

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
