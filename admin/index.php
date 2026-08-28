<?php
$pageTitle = "EduFreeDocs | Admin Dashboard";
$activePage = "dashboard"; // highlight Dashboard in nav
require_once '../includes/header.php';
require_once "../includes/navbar.php";
?>

<div class="grid grid-cols-1 md:grid-cols-4 gap-6 px-4 sm:px-6 lg:px-8 py-5 max-w-7xl mx-auto">
    <div class="flex justify-between items-center mb-4 md:hidden">
        <h1 class="text-xl font-bold text-gray-900">Dashboard</h1>
        <button id="sidebarToggle" class="flex items-center mt-4 gap-2 border border-orange-500 text-orange-500 font-semibold text-sm rounded-lg px-3 py-2 transition hover:bg-orange-50 hover:shadow-sm">
            <i class="fa-solid fa-bars"></i> Menu
        </button>
    </div>
    <!-- Sidebar -->
    <div class="md:col-span-1 ">
        <?php require_once '../includes/admin-nav.php'; ?>
    </div>

    <!-- Main Content -->
    <div class="md:col-span-3 space-y-6">
        <!-- Header -->
        <div>
            <h1 class="text-2xl font-bold text-gray-900">Welcome back, Admin!</h1>
            <p class="text-sm text-gray-600">Here’s what’s happening on your platform today.</p>
            <p class="text-xs text-gray-500">May 20 – May 26, 2034</p>
        </div>

        <!-- Metrics -->
        <div class="grid grid-cols-2 sm:grid-cols-4 gap-4">
            <div class="bg-orange-50 border border-orange-200 rounded-lg p-4 text-center">
                <p class="text-sm font-semibold text-gray-700">Total Users</p>
                <p class="text-xl font-bold text-orange-500">1,256</p>
                <p class="text-xs text-green-600">+12% from last week</p>
            </div>
            <div class="bg-orange-50 border border-orange-200 rounded-lg p-4 text-center">
                <p class="text-sm font-semibold text-gray-700">Total Documents</p>
                <p class="text-xl font-bold text-orange-500">3,245</p>
                <p class="text-xs text-green-600">+15% from last week</p>
            </div>
            <div class="bg-orange-50 border border-orange-200 rounded-lg p-4 text-center">
                <p class="text-sm font-semibold text-gray-700">Total Downloads</p>
                <p class="text-xl font-bold text-orange-500">12,842</p>
                <p class="text-xs text-green-600">+8% from last week</p>
            </div>
            <div class="bg-orange-50 border border-orange-200 rounded-lg p-4 text-center">
                <p class="text-sm font-semibold text-gray-700">Total Uploads</p>
                <p class="text-xl font-bold text-orange-500">978</p>
                <p class="text-xs text-green-600">+5% from last week</p>
            </div>
        </div>

        <!-- Downloads Overview + Top Documents -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white border border-gray-200 rounded-lg shadow-md shadow-orange-500 p-6 md:col-span-2">
                <h2 class="font-bold text-lg text-gray-900 mb-4">Downloads Overview</h2>
                <div class="h-64 flex items-center justify-center text-gray-500 text-sm">
                    [Graph Placeholder]
                </div>
            </div>
            <div class="bg-white border border-gray-200 rounded-lg shadow-md shadow-orange-500 p-6">
                <h2 class="font-bold text-lg text-gray-900 mb-4">Top Downloaded Documents</h2>
                <ul class="list-disc list-inside marker:text-orange-500 text-sm text-gray-700 space-y-2">
                    <li>Data Structures – Notes.pdf (1,256)</li>
                    <li>Database Systems – Past Paper.pdf (1,102)</li>
                    <li>Operating Systems – Notes.pdf (982)</li>
                    <li>Web Programming – Notes.pdf (845)</li>
                    <li>Computer Networks – Notes.pdf (754)</li>
                </ul>
            </div>
        </div>

        <!-- Recent Uploads + System Overview -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="bg-white border border-gray-200 rounded-lg shadow-md shadow-orange-500 p-6">
                <h2 class="font-bold text-lg text-gray-900 mb-4">Recent Uploads</h2>
                <ul class="list-disc list-inside marker:text-orange-500 text-sm text-gray-700 space-y-2">
                    <li>Advanced Algorithms – Notes.pdf by Mary Vaughn (May 19, 2034)</li>
                    <li>AI Fundamentals – Lecture Notes.pdf by Mary Vaughn (May 18, 2034)</li>
                    <li>Networking Basics – Summary.pdf by Peter Mwang (May 16, 2034)</li>
                </ul>
            </div>
            <div class="bg-white border border-gray-200 rounded-lg shadow-md shadow-orange-500 p-6">
                <h2 class="font-bold text-lg text-gray-900 mb-4">System Overview</h2>
                <ul class="list-disc list-inside marker:text-orange-500 text-sm text-gray-700 space-y-2">
                    <li>Active Users: 245</li>
                    <li>Storage Used: 48.6 GB</li>
                    <li>System Status: All Systems Operational</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php
require_once '../includes/footer.php';
?>
