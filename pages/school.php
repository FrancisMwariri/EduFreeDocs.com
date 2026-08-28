<?php
$pageTitle = "EduFreeDocs | Schools";
require_once '../includes/header.php';
require_once '../includes/navbar.php';
?>
    <!-- School Details Section -->
    <section class="w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-5">

        <!-- Breadcrumb -->
        <nav class="flex items-center flex-wrap gap-2 text-xs sm:text-sm text-gray-500 mb-5">
            <a href="index.php" class="hover:text-orange-500">Home</a>
            <span>›</span>

            <a href="schools.php" class="hover:text-orange-500">
                Schools
            </a>

            <span>›</span>

            <span class="text-gray-700">
            Computing & IT
        </span>
        </nav>


        <!-- School Information -->
        <section class="bg-white rounded-sm border border-gray-200 shadow-md shadow-orange-500 p-4 sm:p-6 lg:p-7">

            <!-- School Hero -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-10 items-center">

                <!-- School Information -->
                <div class="order-2 md:order-1">

                    <h1 class="font-bold text-2xl sm:text-3xl lg:text-4xl
                           text-gray-900 leading-tight">
                        School of Computing &<br class="hidden sm:block">
                        Information Technology
                    </h1>

                    <p class="text-gray-600 text-sm sm:text-base
                          leading-relaxed mt-4 max-w-xl">
                        Access free notes, past papers and study materials
                        for all courses under Computing & IT.
                    </p>

                    <!-- Resources -->
                    <div class="mt-5">
                        <p class="text-sm sm:text-base text-gray-700">
                        <span class="font-semibold text-gray-900">
                            Total Resources:
                        </span>

                            1,245
                        </p>
                    </div>

                </div>


                <!-- School Image -->
                <div class="order-1 md:order-2">

                    <img
                        src="../../EduFreeDocs.com/assets/images/SchoolBuilding.png"
                        alt="School of Computing and Information Technology"
                        class="w-full h-auto max-h-72 object-contain rounded-lg shadow-sm"
                    >

                </div>

            </div>


            <!-- Divider -->
            <hr class="border-gray-200 my-7">


            <!-- Courses Header -->
            <div class="flex flex-col sm:flex-row
                    sm:items-center sm:justify-between gap-3 mb-5">

                <h2 class="font-bold text-lg sm:text-xl text-gray-900">
                    Courses in this School
                </h2>

                <a
                    href="courses.php?school=computing-it"
                    class="text-sm font-semibold text-orange-500
                       hover:text-orange-600 transition"
                >
                    View all courses →
                </a>

            </div>


            <!-- Courses -->
            <div class="grid grid-cols-1 min-[480px]:grid-cols-2
                    lg:grid-cols-4 gap-4">


                <!-- BAIT -->
                <a
                    href="course.php?course=bait"
                    class="group border border-gray-200 rounded-lg p-4
                       hover:border-orange-500 hover:shadow-md
                       transition-all duration-200"
                >

                    <h3 class="font-bold text-gray-900
                           group-hover:text-orange-500 transition">
                        BAIT
                    </h3>

                    <p class="text-sm text-gray-600 mt-2 leading-relaxed">
                        Bachelor of Business
                        Information Technology
                    </p>

                    <p class="text-xs text-gray-500 mt-4">
                        635 Resources
                    </p>

                </a>


                <!-- BIT -->
                <a
                    href="course.php?course=bit"
                    class="group border border-gray-200 rounded-lg p-4
                       hover:border-orange-500 hover:shadow-md
                       transition-all duration-200"
                >

                    <h3 class="font-bold text-gray-900
                           group-hover:text-orange-500 transition">
                        BIT
                    </h3>

                    <p class="text-sm text-gray-600 mt-2 leading-relaxed">
                        Bachelor of Information
                        Technology
                    </p>

                    <p class="text-xs text-gray-500 mt-4">
                        410 Resources
                    </p>

                </a>


                <!-- BSc Computer Science -->
                <a
                    href="course.php?course=computer-science"
                    class="group border border-gray-200 rounded-lg p-4
                       hover:border-orange-500 hover:shadow-md
                       transition-all duration-200"
                >

                    <h3 class="font-bold text-gray-900
                           group-hover:text-orange-500 transition">
                        BSc. Computer Science
                    </h3>

                    <p class="text-sm text-gray-600 mt-2 leading-relaxed">
                        Bachelor of Science in
                        Computer Science
                    </p>

                    <p class="text-xs text-gray-500 mt-4">
                        210 Resources
                    </p>

                </a>


                <!-- DIT -->
                <a
                    href="course.php?course=dit"
                    class="group border border-gray-200 rounded-lg p-4
                       hover:border-orange-500 hover:shadow-md
                       transition-all duration-200"
                >

                    <h3 class="font-bold text-gray-900
                           group-hover:text-orange-500 transition">
                        DIT
                    </h3>

                    <p class="text-sm text-gray-600 mt-2 leading-relaxed">
                        Diploma in Information
                        Technology
                    </p>

                    <p class="text-xs text-gray-500 mt-4">
                        120 Resources
                    </p>

                </a>


            </div>

        </section>

    </section>
<?php
require_once '../includes/footer.php';
