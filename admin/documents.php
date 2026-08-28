<?php
$pageTitle = "EduFreeDocs | Admin Documents";
$activePage = "documents"; // highlight Documents in nav
require_once '../includes/header.php';
require_once "../includes/navbar.php";
?>

<!-- Mobile Toggle -->
<div class="flex justify-between items-center mb-4 md:hidden px-4">
    <h1 class="text-xl font-bold text-gray-900">Documents</h1>
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
                <h1 class="text-2xl font-bold text-gray-900">Documents</h1>
                <p class="text-sm text-gray-600">Manage all documents on the platform</p>
            </div>
            <button class="bg-orange-500 text-white font-semibold text-sm rounded-lg px-4 py-2 transition hover:bg-orange-600 w-full sm:w-auto">
                Add Document
            </button>
        </div>

        <!-- Filters -->
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
            <select class="border border-gray-300 rounded-lg px-3 py-2 text-sm w-full sm:w-auto focus:outline-none focus:ring-2 focus:ring-orange-500">
                <option>All Schools</option>
                <option>Computing & IT</option>
                <option>Engineering</option>
                <option>Business</option>
            </select>
            <select class="border border-gray-300 rounded-lg px-3 py-2 text-sm w-full sm:w-auto focus:outline-none focus:ring-2 focus:ring-orange-500">
                <option>All Status</option>
                <option>Published</option>
                <option>Draft</option>
            </select>
        </div>

        <!-- Documents Table -->
        <div class="bg-white border border-gray-200 rounded-lg shadow-md shadow-orange-500 p-6 overflow-x-auto">
            <table class="w-full text-sm text-left text-gray-700 min-w-[800px]">
                <thead class="text-xs uppercase text-gray-500 border-b">
                <tr>
                    <th class="py-3 px-2">Document</th>
                    <th class="py-3 px-2">Course</th>
                    <th class="py-3 px-2">Type</th>
                    <th class="py-3 px-2">Downloads</th>
                    <th class="py-3 px-2">Status</th>
                    <th class="py-3 px-2 text-right">Actions</th>
                </tr>
                </thead>
                <tbody>
                <tr class="border-b hover:bg-orange-50"><td class="py-3 px-2">Data Structures – Complete Notes.pdf</td><td class="py-3 px-2">Data Structures</td><td class="py-3 px-2">Notes</td><td class="py-3 px-2">1,256</td><td class="py-3 px-2"><span class="text-green-600 font-semibold">Published</span></td><td class="py-3 px-2 text-right"><button class="text-orange-500 hover:underline">Edit</button></td></tr>
                <tr class="border-b hover:bg-orange-50"><td class="py-3 px-2">Database Systems – Past Paper 2001.pdf</td><td class="py-3 px-2">Database Systems</td><td class="py-3 px-2">Past Paper</td><td class="py-3 px-2">1,202</td><td class="py-3 px-2"><span class="text-green-600 font-semibold">Published</span></td><td class="py-3 px-2 text-right"><button class="text-orange-500 hover:underline">Edit</button></td></tr>
                <tr class="border-b hover:bg-orange-50"><td class="py-3 px-2">Operating Systems – Summary.pdf</td><td class="py-3 px-2">Operating Systems</td><td class="py-3 px-2">Notes</td><td class="py-3 px-2">967</td><td class="py-3 px-2"><span class="text-green-600 font-semibold">Published</span></td><td class="py-3 px-2 text-right"><button class="text-orange-500 hover:underline">Edit</button></td></tr>
                <tr class="border-b hover:bg-orange-50"><td class="py-3 px-2">Computer Networks – Complete Notes.pdf</td><td class="py-3 px-2">Computer Networks</td><td class="py-3 px-2">Notes</td><td class="py-3 px-2">756</td><td class="py-3 px-2"><span class="text-green-600 font-semibold">Published</span></td><td class="py-3 px-2 text-right"><button class="text-orange-500 hover:underline">Edit</button></td></tr>
                <tr class="border-b hover:bg-orange-50"><td class="py-3 px-2">Web Programming – Notes.pdf</td><td class="py-3 px-2">Web Programming</td><td class="py-3 px-2">Notes</td><td class="py-3 px-2">647</td><td class="py-3 px-2"><span class="text-green-600 font-semibold">Published</span></td><td class="py-3 px-2 text-right"><button class="text-orange-500 hover:underline">Edit</button></td></tr>
                <tr class="border-b hover:bg-orange-50"><td class="py-3 px-2">AI Fundamentals – Lecture Notes.pdf</td><td class="py-3 px-2">Artificial Intelligence</td><td class="py-3 px-2">Notes</td><td class="py-3 px-2">523</td><td class="py-3 px-2"><span class="text-yellow-600 font-semibold">Draft</span></td><td class="py-3 px-2 text-right"><button class="text-orange-500 hover:underline">Edit</button></td></tr>
                <tr class="border-b hover:bg-orange-50"><td class="py-3 px-2">Software Engineering – Notes.pdf</td><td class="py-3 px-2">Software Engineering</td><td class="py-3 px-2">Notes</td><td class="py-3 px-2">432</td><td class="py-3 px-2"><span class="text-green-600 font-semibold">Published</span></td><td class="py-3 px-2 text-right"><button class="text-orange-500 hover:underline">Edit</button></td></tr>
                <tr class="hover:bg-orange-50"><td class="py-3 px-2">Data Mining – Lecture Notes.pdf</td><td class="py-3 px-2">Data Mining</td><td class="py-3 px-2">Notes</td><td class="py-3 px-2">321</td><td class="py-3 px-2"><span class="text-yellow-600 font-semibold">Draft</span></td><td class="py-3 px-2 text-right"><button class="text-orange-500 hover:underline">Edit</button></td></tr>
                </tbody>
            </table>

            <!-- Pagination -->
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mt-6">
                <p class="text-sm text-gray-600">Page 1 of 25</p>
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
    sidebarToggle.addEventListener('click', ()