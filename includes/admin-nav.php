<!-- Admin Sidebar Navigation -->
<aside id="adminSidebar"
       class="bg-white border border-gray-200 rounded-lg shadow-md shadow-orange-500 p-4  md:block">

    <nav class="space-y-3 text-sm font-semibold text-gray-700">

        <a href="../admin/index.php"
           class="flex items-center gap-2 p-2 rounded
           <?php echo ($activePage == 'dashboard')
               ? 'text-orange-500 bg-orange-50'
               : 'hover:text-orange-500 hover:bg-orange-50'; ?>">
            <i class="fa-solid fa-gauge"></i>
            Dashboard
        </a>

        <a href="../admin/reports.php"
           class="flex items-center gap-2 p-2 rounded
           <?php echo ($activePage == 'reports')
               ? 'text-orange-500 bg-orange-50'
               : 'hover:text-orange-500 hover:bg-orange-50'; ?>">
            <i class="fa-solid fa-chart-line"></i>
            Reports
        </a>

        <a href="../admin/uploads.php"
           class="flex items-center gap-2 p-2 rounded
           <?php echo ($activePage == 'uploads')
               ? 'text-orange-500 bg-orange-50'
               : 'hover:text-orange-500 hover:bg-orange-50'; ?>">
            <i class="fa-solid fa-upload"></i>
            Uploads
        </a>

        <a href="../admin/users.php"
           class="flex items-center gap-2 p-2 rounded
           <?php echo ($activePage == 'users')
               ? 'text-orange-500 bg-orange-50'
               : 'hover:text-orange-500 hover:bg-orange-50'; ?>">
            <i class="fa-solid fa-users"></i>
            Users
        </a>

        <a href="../admin/documents.php"
           class="flex items-center gap-2 p-2 rounded
           <?php echo ($activePage == 'documents')
               ? 'text-orange-500 bg-orange-50'
               : 'hover:text-orange-500 hover:bg-orange-50'; ?>">
            <i class="fa-solid fa-file"></i>
            Documents
        </a>

        <a href="../admin/units.php"
           class="flex items-center gap-2 p-2 rounded
           <?php echo ($activePage == 'units')
               ? 'text-orange-500 bg-orange-50'
               : 'hover:text-orange-500 hover:bg-orange-50'; ?>">
            <i class="fa-solid fa-layer-group"></i>
            Units
        </a>

        <a href="../admin/semester.php"
           class="flex items-center gap-2 p-2 rounded
           <?php echo ($activePage == 'semester')
               ? 'text-orange-500 bg-orange-50'
               : 'hover:text-orange-500 hover:bg-orange-50'; ?>">
            <i class="fa-solid fa-calendar"></i>
            Semester
        </a>

        <a href="../admin/courses.php"
           class="flex items-center gap-2 p-2 rounded
           <?php echo ($activePage == 'courses')
               ? 'text-orange-500 bg-orange-50'
               : 'hover:text-orange-500 hover:bg-orange-50'; ?>">
            <i class="fa-solid fa-book"></i>
            Courses
        </a>

        <a href="../admin/schools.php"
           class="flex items-center gap-2 p-2 rounded
           <?php echo ($activePage == 'schools')
               ? 'text-orange-500 bg-orange-50'
               : 'hover:text-orange-500 hover:bg-orange-50'; ?>">
            <i class="fa-solid fa-school"></i>
            Schools
        </a>

        <a href="../admin/settings.php"
           class="flex items-center gap-2 p-2 rounded
           <?php echo ($activePage == 'settings')
               ? 'text-orange-500 bg-orange-50'
               : 'hover:text-orange-500 hover:bg-orange-50'; ?>">
            <i class="fa-solid fa-gear"></i>
            Settings
        </a>

        <a href="../admin/logout.php"
           class="flex items-center gap-2 p-2 rounded hover:text-orange-500 hover:bg-orange-50">
            <i class="fa-solid fa-right-from-bracket"></i>
            Logout
        </a>

    </nav>
</aside>