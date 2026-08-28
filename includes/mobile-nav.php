<!-- Mobile Navigation -->
<div class="flex justify-between items-center mb-4 md:hidden">
    <h1 class="text-xl font-bold text-gray-900">
        <?php echo $pageTitle; ?>
    </h1>
    <button id="sidebarToggle" class="flex items-center gap-2 border border-orange-500 text-orange-500 font-semibold text-sm rounded-lg px-3 py-2 transition hover:bg-orange-50 hover:shadow-sm">
        <i class="fa-solid fa-bars"></i> Menu
    </button>
</div>

<!-- Sidebar -->
<aside id="sidebar" class="bg-white border border-gray-200 rounded-lg shadow-md shadow-orange-500 p-4 hidden md:block">
    <nav class="space-y-3 text-sm font-semibold text-gray-700">
        <a href="../student/dashboard.php" class="flex items-center gap-2 p-2 rounded <?php echo ($activePage == 'dashboard') ? 'text-orange-500 bg-orange-50' : 'hover:text-orange-500 hover:bg-orange-50'; ?>">
            <i class="fa-solid fa-gauge"></i> Dashboard
        </a>
        <a href="../student/downloads.php" class="flex items-center gap-2 p-2 rounded <?php echo ($activePage == 'downloads') ? 'text-orange-500 bg-orange-50' : 'hover:text-orange-500 hover:bg-orange-50'; ?>">
            <i class="fa-solid fa-download"></i> My Downloads
        </a>
        <a href="../student/favorites.php" class="flex items-center gap-2 p-2 rounded <?php echo ($activePage == 'favorites') ? 'text-orange-500 bg-orange-50' : 'hover:text-orange-500 hover:bg-orange-50'; ?>">
            <i class="fa-regular fa-heart"></i> My Favorites
        </a>
<!--        <a href="../Recycle/uploads.php" class="flex items-center gap-2 p-2 rounded --><?php //echo ($activePage == 'uploads') ? 'text-orange-500 bg-orange-50' : 'hover:text-orange-500 hover:bg-orange-50'; ?><!--">-->
<!--            <i class="fa-solid fa-upload"></i> My Uploads-->
<!--        </a>-->
        <a href="../student/notifications.php" class="flex items-center gap-2 p-2 rounded <?php echo ($activePage == 'notifications') ? 'text-orange-500 bg-orange-50' : 'hover:text-orange-500 hover:bg-orange-50'; ?>">
            <i class="fa-regular fa-bell"></i> Notifications
        </a>
        <a href="../student/profile.php" class="flex items-center gap-2 p-2 rounded <?php echo ($activePage == 'profile') ? 'text-orange-500 bg-orange-50' : 'hover:text-orange-500 hover:bg-orange-50'; ?>">
            <i class="fa-regular fa-user"></i> Profile
        </a>
        <a href="../student/settings.php" class="flex items-center gap-2 p-2 rounded <?php echo ($activePage == 'settings') ? 'text-orange-500 bg-orange-50' : 'hover:text-orange-500 hover:bg-orange-50'; ?>">
            <i class="fa-solid fa-gear"></i> Settings
        </a>
        <a href="logout.php" class="flex items-center gap-2 p-2 rounded hover:text-orange-500 hover:bg-orange-50">
            <i class="fa-solid fa-right-from-bracket"></i> Logout
        </a>
    </nav>
</aside>

<!-- Toggle Script -->
<script>
    const sidebarToggle = document.getElementById('sidebarToggle');
    const sidebar = document.getElementById('sidebar');
    sidebarToggle.addEventListener('click', () => {
        sidebar.classList.toggle('hidden');
    });
</script>
