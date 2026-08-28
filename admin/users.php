<?php
$pageTitle = "EduFreeDocs | Admin Users";
$activePage = "users"; // highlight Users in nav
require_once '../includes/header.php';
require_once "../includes/navbar.php";
?>

<!-- Mobile Toggle -->
<div class="flex justify-between items-center mb-4 md:hidden px-4">
    <h1 class="text-xl font-bold text-gray-900">Users</h1>
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
            <h1 class="text-2xl font-bold text-gray-900">Users</h1>
            <button class="bg-orange-500 text-white font-semibold text-sm rounded-lg px-4 py-2 transition hover:bg-orange-600 w-full sm:w-auto">
                Add User
            </button>
        </div>

        <!-- Search & Filter -->
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
            <input type="text" placeholder="Search users..."
                   class="border border-gray-300 rounded-lg px-3 py-2 text-sm w-full sm:w-1/2 focus:outline-none focus:ring-2 focus:ring-orange-500">
            <select class="border border-gray-300 rounded-lg px-3 py-2 text-sm w-full sm:w-auto focus:outline-none focus:ring-2 focus:ring-orange-500">
                <option>All Status</option>
                <option>Active</option>
                <option>Inactive</option>
            </select>
        </div>

        <!-- Users Table -->
        <div class="bg-white border border-gray-200 rounded-lg shadow-md shadow-orange-500 p-6 overflow-x-auto">
            <table class="w-full text-sm text-left text-gray-700 min-w-[600px]">
                <thead class="text-xs uppercase text-gray-500 border-b">
                <tr>
                    <th class="py-3 px-2">User</th>
                    <th class="py-3 px-2">Email</th>
                    <th class="py-3 px-2">Role</th>
                    <th class="py-3 px-2">Joined</th>
                    <th class="py-3 px-2">Status</th>
                    <th class="py-3 px-2 text-right">Actions</th>
                </tr>
                </thead>
                <tbody>
                <tr class="border-b hover:bg-orange-50"><td class="py-3 px-2">John Doe</td><td class="py-3 px-2">john.doe@beexample.com</td><td class="py-3 px-2">Student</td><td class="py-3 px-2">May 20, 2004</td><td class="py-3 px-2"><span class="text-green-600 font-semibold">Active</span></td><td class="py-3 px-2 text-right"><button class="text-orange-500 hover:underline">Edit</button></td></tr>
                <tr class="border-b hover:bg-orange-50"><td class="py-3 px-2">Mary Wanjiku</td><td class="py-3 px-2">mary.wanjiku@beexample.com</td><td class="py-3 px-2">Student</td><td class="py-3 px-2">May 10, 2004</td><td class="py-3 px-2"><span class="text-green-600 font-semibold">Active</span></td><td class="py-3 px-2 text-right"><button class="text-orange-500 hover:underline">Edit</button></td></tr>
                <tr class="border-b hover:bg-orange-50"><td class="py-3 px-2">Peter Menagri</td><td class="py-3 px-2">peter.menagri@beexample.com</td><td class="py-3 px-2">Student</td><td class="py-3 px-2">May 18, 2004</td><td class="py-3 px-2"><span class="text-green-600 font-semibold">Active</span></td><td class="py-3 px-2 text-right"><button class="text-orange-500 hover:underline">Edit</button></td></tr>
                <tr class="border-b hover:bg-orange-50"><td class="py-3 px-2">Jane Kimani</td><td class="py-3 px-2">jane.kimani@beexample.com</td><td class="py-3 px-2">Lecturer</td><td class="py-3 px-2">May 17, 2004</td><td class="py-3 px-2"><span class="text-green-600 font-semibold">Active</span></td><td class="py-3 px-2 text-right"><button class="text-orange-500 hover:underline">Edit</button></td></tr>
                <tr class="border-b hover:bg-orange-50"><td class="py-3 px-2">Brian Otieno</td><td class="py-3 px-2">brian.otieno@beexample.com</td><td class="py-3 px-2">Student</td><td class="py-3 px-2">May 13, 2004</td><td class="py-3 px-2"><span class="text-red-600 font-semibold">Inactive</span></td><td class="py-3 px-2 text-right"><button class="text-orange-500 hover:underline">Edit</button></td></tr>
                <tr class="border-b hover:bg-orange-50"><td class="py-3 px-2">Admin Uber</td><td class="py-3 px-2">admin@beexample.com</td><td class="py-3 px-2">Admin</td><td class="py-3 px-2">Jan 1, 2004</td><td class="py-3 px-2"><span class="text-green-600 font-semibold">Active</span></td><td class="py-3 px-2 text-right"><button class="text-orange-500 hover:underline">Edit</button></td></tr>
                <tr class="border-b hover:bg-orange-50"><td class="py-3 px-2">Samuel Kariuki</td><td class="py-3 px-2">samuel.kariuki@beexample.com</td><td class="py-3 px-2">Lecturer</td><td class="py-3 px-2">May 12, 2004</td><td class="py-3 px-2"><span class="text-green-600 font-semibold">Active</span></td><td class="py-3 px-2 text-right"><button class="text-orange-500 hover:underline">Edit</button></td></tr>
                <tr class="border-b hover:bg-orange-50"><td class="py-3 px-2">Lucy Njeri</td><td class="py-3 px-2">lucy.njeri@beexample.com</td><td class="py-3 px-2">Student</td><td class="py-3 px-2">May 14, 2004</td><td class="py-3 px-2"><span class="text-green-600 font-semibold">Active</span></td><td class="py-3 px-2 text-right"><button class="text-orange-500 hover:underline">Edit</button></td></tr>
                <tr class="hover:bg-orange-50"><td class="py-3 px-2">David Mwangi</td><td class="py-3 px-2">david.mwangi@beexample.com</td><td class="py-3 px-2">Student</td><td class="py-3 px-2">May 15, 2004</td><td class="py-3 px-2"><span class="text-green-600 font-semibold">Active</span></td><td class="py-3 px-2 text-right"><button class="text-orange-500 hover:underline">Edit</button></td></tr>
                </tbody>
            </table>

            <!-- Pagination -->
            <div class="flex justify-between items-center mt-6">
                <p class="text-sm text-gray-600">Page 1 of 15</p>
                <div class="space-x-2">
                    <button class="px-3 py-1 border rounded text-sm hover:bg-orange-50">Prev</button>
                    <button class="px-3 py-1 border rounded text-sm hover:bg-orange-50">Next</button>
                </div>
            </div>
        </div>
    </div>