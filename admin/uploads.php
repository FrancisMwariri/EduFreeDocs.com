<?php
$pageTitle = "EduFreeDocs | Admin Uploads";
$activePage = "uploads"; // highlight Uploads in nav
require_once '../includes/header.php';
require_once "../includes/navbar.php";

?>

<!-- Mobile Toggle -->
<div class="flex justify-between items-center mb-4 md:hidden px-4">
    <h1 class="text-xl font-bold text-gray-900">Uploads</h1>
    <button id="sidebarToggle" class="flex items-center gap-2 mt-4 border border-orange-500 text-orange-500 font-semibold text-sm rounded-lg px-3 py-2 transition hover:bg-orange-50 hover:shadow-sm">
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
        <!-- Top Bar -->
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3">
            <!-- Search -->
            <input type="text" placeholder="Search uploads..." class="w-full sm:w-1/2 border border-gray-300 rounded-lg px-3 py-2 text-sm text-gray-700 focus:border-orange-500 focus:ring-orange-500">

            <!-- Actions -->
            <div class="flex flex-col sm:flex-row gap-3">
                <select class="border border-gray-300 rounded-lg px-3 py-2 text-sm text-gray-700 focus:border-orange-500 focus:ring-orange-500">
                    <option>All Status</option>
                    <option>Approved</option>
                    <option>Pending</option>
                    <option>Rejected</option>
                </select>
                <button class="border border-orange-500 text-orange-500 font-semibold text-sm rounded-lg px-4 py-2 transition hover:bg-orange-50 hover:shadow-sm">
                    Upload New
                </button>
            </div>
        </div>

        <!-- Uploads Table -->
        <div class="bg-white border border-gray-200 rounded-lg shadow-md shadow-orange-500 p-4 sm:p-6 overflow-x-auto">
            <table class="w-full text-sm text-left text-gray-700 min-w-[700px]">
                <thead class="bg-orange-50 text-gray-900 font-semibold">
                <tr>
                    <th class="px-4 py-2">File Name</th>
                    <th class="px-4 py-2">Uploaded By</th>
                    <th class="px-4 py-2">Course</th>
                    <th class="px-4 py-2">Date</th>
                    <th class="px-4 py-2">Status</th>
                    <th class="px-4 py-2">Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $uploads = [
                    ["Advanced Algorithms – Notes.pdf","John Doe","Data Structures","May 20, 2004","Approved"],
                    ["AI Fundamentals – Lecture Notes.pdf","Mary Wanjiru","Artificial Intelligence","May 20, 2004","Approved"],
                    ["Networking Basics – Summary.pdf","Peter Mwangi","Computer Networks","May 19, 2004","Approved"],
                    ["Software Engineering – Notes.pdf","Jane Kimani","Software Engineering","May 18, 2004","Pending"],
                    ["Cybersecurity Basics – Notes.pdf","Brian Otieno","Information Security","May 18, 2004","Approved"],
                    ["Mobile App Development – Notes.pdf","Kevin Mutua","Mobile Development","May 17, 2004","Rejected"],
                    ["Data Mining – Lecture Notes.pdf","Grace Njeri","Data Mining","May 17, 2004","Approved"],
                    ["Cloud Computing – Notes.pdf","David Maina","Cloud Computing","May 17, 2004","Pending"],
                    ["Machine Learning – Notes.pdf","Lucy Kariuki","Machine Learning","May 16, 2004","Approved"],
                    ["Big Data – Lecture Notes.pdf","Samuel Karanja","Big Data Analytics","May 15, 2004","Pending"],

                ];

                foreach($uploads as $upload){
                    $statusColor = $upload[4] == "Approved" ? "text-green-600" : ($upload[4] == "Pending" ? "text-yellow-500" : "text-red-600");
                    echo "<tr class='border-b'>
                            <td class='px-4 py-2'>{$upload[0]}</td>
                            <td class='px-4 py-2'>{$upload[1]}</td>
                            <td class='px-4 py-2'>{$upload[2]}</td>
                            <td class='px-4 py-2'>{$upload[3]}</td>
                            <td class='px-4 py-2 {$statusColor} font-semibold'>{$upload[4]}</td>
                            <td class='px-4 py-2 flex flex-col sm:flex-row gap-2'>
                                <button class='text-green-600 hover:underline'>Approve</button>
                                <button class='text-red-600 hover:underline'>Reject</button>
                                <button class='text-gray-600 hover:underline'>Delete</button>
                            </td>
                        </tr>";
                }
                ?>
                </tbody>
            </table>

            <!-- Pagination -->
            <div class="flex flex-col sm:flex-row justify-between items-center mt-4 gap-3">
                <p class="text-sm text-gray-600">Showing 1–20 of 50 uploads</p>
                <div class="flex gap-2">
                    <button class="px-3 py-1 border border-gray-300 rounded hover:bg-orange-50">Prev</button>
                    <button class="px-3 py-1 border border-gray-300 rounded bg-orange-50 text-orange-500">1</button>
                    <button class="px-3 py-1 border border-gray-300 rounded hover:bg-orange-50">2</button>
                    <button class="px-3 py-1 border border-gray-300 rounded hover:bg-orange-50">3</button>
                    <button class="px-3 py-1 border border-gray-300 rounded hover:bg-orange-50">Next</button>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
require_once '../includes/footer.php';
?>
