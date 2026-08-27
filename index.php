<?php
$pageTitle = "EduFreeDocs | Home";
require_once 'includes/header.php';
require_once 'includes/navbar.php';
?>
<!---->
    <section
            class="border-l-4  border-orange-500 rounded-lg shadow-sm shadow-gray-300
           mx-auto p-4 w-[85%] sm:w-[88%]  max-w-7xl mx-auto mt-5
           flex flex-col md:flex-row justify-center gap-6 bg-white "
    >

        <!-- Info -->
        <section class="w-full md:w-1/2 flex flex-col justify-center ">

            <section class="w-full md:w-[95%] mb-5">
                <h1 class="text-black font-bold text-3xl sm:text-4xl mb-3">
                    Find.
                    <span class="text-orange-500">Learn</span>.
                    Succeed
                </h1>

                <p class="text-gray-600 text-sm sm:text-base">
                    Access free notes, past papers and study resources
                    for your course.
                </p>
            </section>

            <!-- Search -->
            <section class="w-full md:w-[95%] flex flex-col sm:flex-row gap-2">

                <input
                        class="py-2 px-2 rounded-lg border border-gray-200
                       focus:border-orange-500
                       focus:outline focus:outline-orange-500
                       w-full sm:w-[70%]"
                        type="text"
                        placeholder="Search for notes, past papers ......"
                >

                <button
                        class="px-4 py-2 rounded-lg text-white bg-orange-500
                       font-bold hover:bg-orange-600
                       w-full sm:w-auto"
                >
                    Search
                </button>

            </section>

        </section>

        <!-- Image -->
        <section class="w-full md:w-1/2">
            <img
                    src="assets/images/viewsBackground.jpg"
                    alt="Students studying"
                    class="w-full h-48 sm:h-64 md:h-full object-cover
                   rounded-lg shadow-lg shadow-orange-500"
            >
        </section>

    </section>

    <!-- Explore Your Academic Journey -->
    <section class="w-[85%] bg-white shadow-md p-4 shadow-orange-500 lg:mx-auto sm:w-[88%]  max-w-7xl mx-auto py-8   mt-5 border-orange-500">

        <!-- Heading -->
        <div class="mb-8">
            <h3 class="text-xl sm:text-2xl font-bold text-gray-900">
                Explore Your Academic Journey
            </h3>

            <p class="mt-1 text-sm text-gray-500">
                Follow the steps below to find the resources you need.
            </p>
        </div>


        <!-- Academic Journey -->
        <div class="grid grid-cols-2 sm:grid-cols-3 lg:flex lg:items-start lg:justify-between gap-8 lg:gap-2">

            <!-- STEP 1 -->
            <div class="flex flex-col items-center text-center">

                <div class="w-16 h-16 rounded-full bg-gray-100
                        flex items-center justify-center
                        text-gray-700 shadow-sm">
                    <i class="fa-solid fa-building-columns text-2xl"></i>
                </div>

                <h5 class="mt-3 font-bold text-sm text-gray-800">
                    Select School
                </h5>

                <p class="mt-1 text-xs text-gray-500">
                    Choose your school
                </p>

            </div>


            <!-- ARROW -->
            <div class="hidden lg:flex items-center pt-6 text-orange-500 text-xl">
                <i class="fa-solid fa-arrow-right"></i>
            </div>


            <!-- STEP 2 -->
            <div class="flex flex-col items-center text-center">

                <div class="w-16 h-16 rounded-full bg-gray-100
                        flex items-center justify-center
                        text-gray-700 shadow-sm">
                    <i class="fa-solid fa-landmark text-2xl"></i>
                </div>

                <h5 class="mt-3 font-bold text-sm text-gray-800">
                    Select Course
                </h5>

                <p class="mt-1 text-xs text-gray-500">
                    Choose your course
                </p>

            </div>


            <!-- ARROW -->
            <div class="hidden lg:flex items-center pt-6 text-orange-500 text-xl">
                <i class="fa-solid fa-arrow-right"></i>
            </div>


            <!-- STEP 3 -->
            <div class="flex flex-col items-center text-center">

                <div class="w-16 h-16 rounded-full bg-gray-100
                        flex items-center justify-center
                        text-gray-700 shadow-sm">
                    <i class="fa-regular fa-calendar-days text-2xl"></i>
                </div>

                <h5 class="mt-3 font-bold text-sm text-gray-800">
                    Select Year
                </h5>

                <p class="mt-1 text-xs text-gray-500">
                    Choose your year
                </p>

            </div>


            <!-- ARROW -->
            <div class="hidden lg:flex items-center pt-6 text-orange-500 text-xl">
                <i class="fa-solid fa-arrow-right"></i>
            </div>


            <!-- STEP 4 -->
            <div class="flex flex-col items-center text-center">

                <div class="w-16 h-16 rounded-full bg-gray-100
                        flex items-center justify-center
                        text-gray-700 shadow-sm">
                    <i class="fa-solid fa-book-open text-2xl"></i>
                </div>

                <h5 class="mt-3 font-bold text-sm text-gray-800">
                    Choose Unit
                </h5>

                <p class="mt-1 text-xs text-gray-500">
                    Choose your unit
                </p>

            </div>


            <!-- ARROW -->
            <div class="hidden lg:flex items-center pt-6 text-orange-500 text-xl">
                <i class="fa-solid fa-arrow-right"></i>
            </div>


            <!-- STEP 5 -->
            <div class="flex flex-col items-center text-center col-span-2 sm:col-span-1">

                <div class="w-16 h-16 rounded-full bg-gray-100
                        flex items-center justify-center
                        text-gray-700 shadow-sm">
                    <i class="fa-solid fa-book-open-reader text-2xl"></i>
                </div>

                <h5 class="mt-3 font-bold text-sm text-gray-800">
                    Get Resources
                </h5>

                <p class="mt-1 text-xs text-gray-500">
                    Find and download
                </p>

            </div>

        </div>

    </section>
    <section class="w-[85%] bg-white shadow-md p-4 shadow-orange-500 lg:mx-auto sm:w-[88%]  max-w-7xl mx-auto py-8   mt-5 border-orange-500"">

        <!-- Section Header -->
        <div class="flex items-center justify-between mb-5">
            <h2 class="text-xl md:text-2xl font-bold text-gray-900">
                Popular Schools
            </h2>

            <a
                    href="#"
                    class="text-orange-500 font-semibold text-sm md:text-base
                   hover:text-orange-600 transition flex items-center gap-1"
            >
                View all schools
                <span>→</span>
            </a>
        </div>


        <!-- Schools -->
        <div
                class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5
               gap-4 md:gap-5"
        >

            <!-- Computing & IT -->
            <a
                    href="#"
                    class="group border border-gray-200 rounded-xl p-4 md:p-5
                   text-center bg-white
                   hover:border-orange-400 hover:shadow-md
                   transition duration-200"
            >
                <div
                        class="mx-auto mb-4 w-12 h-12 md:w-14 md:h-14
                       rounded-full bg-orange-50
                       flex items-center justify-center"
                >
                <span class="text-2xl md:text-3xl text-orange-500">
                    🖥️
                </span>
                </div>

                <h3
                        class="font-bold text-gray-800 text-sm md:text-base
                       group-hover:text-orange-500 transition"
                >
                    Computing & IT
                </h3>

                <p class="text-xs md:text-sm text-gray-500 mt-2">
                    1,345 Resources
                </p>
            </a>


            <!-- Engineering -->
            <a
                    href="#"
                    class="group border border-gray-200 rounded-xl p-4 md:p-5
                   text-center bg-white
                   hover:border-blue-400 hover:shadow-md
                   transition duration-200"
            >
                <div
                        class="mx-auto mb-4 w-12 h-12 md:w-14 md:h-14
                       rounded-full bg-blue-50
                       flex items-center justify-center"
                >
                <span class="text-2xl md:text-3xl text-blue-500">
                    🏗️
                </span>
                </div>

                <h3
                        class="font-bold text-gray-800 text-sm md:text-base
                       group-hover:text-blue-500 transition"
                >
                    Engineering
                </h3>

                <p class="text-xs md:text-sm text-gray-500 mt-2">
                    1,076 Resources
                </p>
            </a>


            <!-- Business -->
            <a
                    href="#"
                    class="group border border-gray-200 rounded-xl p-4 md:p-5
                   text-center bg-white
                   hover:border-orange-400 hover:shadow-md
                   transition duration-200"
            >
                <div
                        class="mx-auto mb-4 w-12 h-12 md:w-14 md:h-14
                       rounded-full bg-orange-50
                       flex items-center justify-center"
                >
                <span class="text-2xl md:text-3xl text-orange-500">
                    🏛️
                </span>
                </div>

                <h3
                        class="font-bold text-gray-800 text-sm md:text-base
                       group-hover:text-orange-500 transition"
                >
                    Business
                </h3>

                <p class="text-xs md:text-sm text-gray-500 mt-2">
                    1,054 Resources
                </p>
            </a>


            <!-- Science -->
            <a
                    href="#"
                    class="group border border-gray-200 rounded-xl p-4 md:p-5
                   text-center bg-white
                   hover:border-blue-400 hover:shadow-md
                   transition duration-200"
            >
                <div
                        class="mx-auto mb-4 w-12 h-12 md:w-14 md:h-14
                       rounded-full bg-blue-50
                       flex items-center justify-center"
                >
                <span class="text-2xl md:text-3xl text-blue-500">
                    🔬
                </span>
                </div>

                <h3
                        class="font-bold text-gray-800 text-sm md:text-base
                       group-hover:text-blue-500 transition"
                >
                    Science
                </h3>

                <p class="text-xs md:text-sm text-gray-500 mt-2">
                    806 Resources
                </p>
            </a>


            <!-- Education -->
            <a
                    href="#"
                    class="group border border-gray-200 rounded-xl p-4 md:p-5
                   text-center bg-white
                   hover:border-orange-400 hover:shadow-md
                   transition duration-200"
            >
                <div
                        class="mx-auto mb-4 w-12 h-12 md:w-14 md:h-14
                       rounded-full bg-orange-50
                       flex items-center justify-center"
                >
                <span class="text-2xl md:text-3xl text-orange-500">
                    🎓
                </span>
                </div>

                <h3
                        class="font-bold text-gray-800 text-sm md:text-base
                       group-hover:text-orange-500 transition"
                >
                    Education
                </h3>

                <p class="text-xs md:text-sm text-gray-500 mt-2">
                    642 Resources
                </p>
            </a>

        </div>

    </section>
    <!-- Recently Added Resources -->
    <section class="w-[92%] sm:w-[88%] lg:w-[85%] mx-auto mt-8
                bg-white shadow-md shadow-orange-500/20
                rounded-lg p-4 sm:p-5">

        <!-- Section Header -->
        <div class="flex items-center justify-between gap-3 mb-5">

            <div>
                <h2 class="text-lg sm:text-xl font-bold text-gray-800">
                    Recently Added Resources
                </h2>

                <p class="hidden sm:block text-sm text-gray-500 mt-1">
                    Explore the latest study materials.
                </p>
            </div>

            <a href="#"
               class="shrink-0 text-sm font-semibold text-orange-500
                  hover:text-blue-600 transition
                  flex items-center gap-1">
                View all
                <span class="text-base">→</span>
            </a>

        </div>


        <!-- Resource Cards -->
        <div class="
        flex gap-4 overflow-x-auto pb-3
        sm:grid sm:grid-cols-2
        lg:grid-cols-3
        xl:grid-cols-5
        sm:overflow-visible
        scrollbar-hide
    ">

            <!-- Card 1 -->
            <div class="
            min-w-[190px] sm:min-w-0
            border border-gray-200 rounded-lg
            shadow-sm hover:shadow-md
            p-4 bg-white
            transition duration-200
            hover:-translate-y-1
        ">
                <div class="flex items-start justify-between gap-3">

                    <h3 class="text-sm sm:text-base font-semibold text-gray-800">
                        Data Structures
                        <br>
                        Notes
                    </h3>

                    <span class="
                    shrink-0 text-[10px] font-bold
                    border border-gray-300
                    rounded-full px-2 py-1
                    text-gray-600
                ">
                    PDF
                </span>

                </div>
            </div>


            <!-- Card 2 -->
            <div class="
            min-w-[190px] sm:min-w-0
            border border-gray-200 rounded-lg
            shadow-sm hover:shadow-md
            p-4 bg-white
            transition duration-200
            hover:-translate-y-1
        ">
                <div class="flex items-start justify-between gap-3">

                    <h3 class="text-sm sm:text-base font-semibold text-gray-800">
                        Software Engineering
                        <br>
                        Notes
                    </h3>

                    <span class="
                    shrink-0 text-[10px] font-bold
                    border border-gray-300
                    rounded-full px-2 py-1
                    text-gray-600
                ">
                    PDF
                </span>

                </div>
            </div>


            <!-- Card 3 -->
            <div class="
            min-w-[190px] sm:min-w-0
            border border-gray-200 rounded-lg
            shadow-sm hover:shadow-md
            p-4 bg-white
            transition duration-200
            hover:-translate-y-1
        ">
                <div class="flex items-start justify-between gap-3">

                    <h3 class="text-sm sm:text-base font-semibold text-gray-800">
                        Accounting
                        <br>
                        Notes
                    </h3>

                    <span class="
                    shrink-0 text-[10px] font-bold
                    border border-gray-300
                    rounded-full px-2 py-1
                    text-gray-600
                ">
                    PDF
                </span>

                </div>
            </div>


            <!-- Card 4 -->
            <div class="
            min-w-[190px] sm:min-w-0
            border border-gray-200 rounded-lg
            shadow-sm hover:shadow-md
            p-4 bg-white
            transition duration-200
            hover:-translate-y-1
        ">
                <div class="flex items-start justify-between gap-3">

                    <h3 class="text-sm sm:text-base font-semibold text-gray-800">
                        OBMS
                        <br>
                        Notes
                    </h3>

                    <span class="
                    shrink-0 text-[10px] font-bold
                    border border-gray-300
                    rounded-full px-2 py-1
                    text-gray-600
                ">
                    PDF
                </span>

                </div>
            </div>


            <!-- Card 5 -->
            <div class="
            min-w-[190px] sm:min-w-0
            border border-gray-200 rounded-lg
            shadow-sm hover:shadow-md
            p-4 bg-white
            transition duration-200
            hover:-translate-y-1
        ">
                <div class="flex items-start justify-between gap-3">

                    <h3 class="text-sm sm:text-base font-semibold text-gray-800">
                        Web Development
                        <br>
                        Notes
                    </h3>

                    <span class="
                    shrink-0 text-[10px] font-bold
                    border border-gray-300
                    rounded-full px-2 py-1
                    text-gray-600
                ">
                    PDF
                </span>

                </div>
            </div>

        </div>

    </section>

<?php require_once 'includes/footer.php'; ?>