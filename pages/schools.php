<?php
$pageTitle = "EduFreeDocs | Schools";
require_once '../includes/header.php';
require_once '../includes/navbar.php';
?>

    <!-- All Schools Section -->
    <section class="w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-5 py-6 sm:py-8">

        <!-- Section Container -->
        <div class="bg-white shadow-md shadow-orange-500/20 rounded-lg p-4 sm:p-6 lg:p-8">

            <!-- Header -->
            <div class="mb-6">

                <h2 class="font-bold text-2xl sm:text-3xl text-black">
                    All Schools
                </h2>

                <p class="text-gray-600 text-sm sm:text-base lg:text-lg mt-1">
                    Browse resources by School
                </p>

                <hr class="w-full border-gray-200 mt-4">
            </div>


            <!-- Schools Grid -->
            <div class="grid grid-cols-1 min-[480px]:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 sm:gap-5 lg:gap-6">


                <!-- Computer Science & IT -->
                <div class="w-full border border-gray-200 rounded-lg p-4 sm:p-5
                        bg-white hover:border-orange-500 hover:shadow-md
                        transition duration-200">

                    <!-- School Image -->
                    <a href="#"
                       class="w-20 h-20 sm:w-24 sm:h-24 lg:w-28 lg:h-28
                          mx-auto rounded-lg bg-gray-100
                          flex items-center justify-center
                          overflow-hidden">

                        <img
                                src="../../EduFreeDocs.com/assets/images/SchoolBuilding.png"
                                alt="Computer Science and IT"
                                class="w-14 h-14 sm:w-16 sm:h-16 lg:w-20 lg:h-20 object-contain"
                        >

                    </a>


                    <!-- School Information -->
                    <div class="text-center mt-4">

                        <h3 class="font-bold text-base sm:text-lg text-black">
                            Computer Science & IT
                        </h3>

                        <p class="text-sm text-gray-500 mt-1">
                            1254 Resources
                        </p>

                    </div>

                </div>


                <!-- Engineering -->
                <div class="w-full border border-gray-200 rounded-lg p-4 sm:p-5
                        bg-white hover:border-orange-500 hover:shadow-md
                        transition duration-200">

                    <a href="#"
                       class="w-20 h-20 sm:w-24 sm:h-24 lg:w-28 lg:h-28
                          mx-auto rounded-lg bg-gray-100
                          flex items-center justify-center
                          overflow-hidden">

                        <img
                                src="../../EduFreeDocs.com/assets/images/SchoolBuilding.png"
                                alt="Engineering"
                                class="w-14 h-14 sm:w-16 sm:h-16 lg:w-20 lg:h-20 object-contain"
                        >

                    </a>

                    <div class="text-center mt-4">

                        <h3 class="font-bold text-base sm:text-lg text-black">
                            Engineering
                        </h3>

                        <p class="text-sm text-gray-500 mt-1">
                            980 Resources
                        </p>

                    </div>

                </div>


                <!-- Business -->
                <div class="w-full border border-gray-200 rounded-lg p-4 sm:p-5
                        bg-white hover:border-orange-500 hover:shadow-md
                        transition duration-200">

                    <a href="#"
                       class="w-20 h-20 sm:w-24 sm:h-24 lg:w-28 lg:h-28
                          mx-auto rounded-lg bg-gray-100
                          flex items-center justify-center
                          overflow-hidden">

                        <img
                                src="../../EduFreeDocs.com/assets/images/SchoolBuilding.png"
                                alt="Business School"
                                class="w-14 h-14 sm:w-16 sm:h-16 lg:w-20 lg:h-20 object-contain"
                        >

                    </a>

                    <div class="text-center mt-4">

                        <h3 class="font-bold text-base sm:text-lg text-black">
                            Business
                        </h3>

                        <p class="text-sm text-gray-500 mt-1">
                            750 Resources
                        </p>

                    </div>

                </div>


                <!-- Health Sciences -->
                <div class="w-full border border-gray-200 rounded-lg p-4 sm:p-5
                        bg-white hover:border-orange-500 hover:shadow-md
                        transition duration-200">

                    <a href="#"
                       class="w-20 h-20 sm:w-24 sm:h-24 lg:w-28 lg:h-28
                          mx-auto rounded-lg bg-gray-100
                          flex items-center justify-center
                          overflow-hidden">

                        <img
                                src="../../EduFreeDocs.com/assets/images/SchoolBuilding.png"
                                alt="Health Sciences"
                                class="w-14 h-14 sm:w-16 sm:h-16 lg:w-20 lg:h-20 object-contain"
                        >

                    </a>

                    <div class="text-center mt-4">

                        <h3 class="font-bold text-base sm:text-lg text-black">
                            Health Sciences
                        </h3>

                        <p class="text-sm text-gray-500 mt-1">
                            620 Resources
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </section>

<?php
require_once '../includes/footer.php';
