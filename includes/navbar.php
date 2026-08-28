<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= $pageTitle ?? 'EduFreeDocs' ?></title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Awesome -->
    <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.min.css"
            integrity="sha512-QeR2VH+lsBE5LSAe1Q5EnTBbe7XTBubt8dG93Y7gidSgdMCr8nVqKcfKAMyN96SV8KDbZVTDXChatu5G2KQGzg=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
    />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="../assets/css/custom.css">

</head>

<body class="bg-gray-200 text-gray-900 mb-5">

<!-- ================= HEADER ================= -->
<header class="mt-4 px-4 sm:px-6 lg:px-8">

    <div class="max-w-7xl mx-auto">

        <nav class="bg-white rounded-lg border border-gray-200 shadow-sm">

            <!-- Main Header -->
            <div class="flex items-center justify-between px-4 sm:px-6 py-3">

                <!-- LOGO -->
                <section class="flex items-center gap-3">

                    <a href="#">
                        <img
                                src="../../EduFreeDocs.com/assets/images/logo.jpeg"
                                alt="EduFreeDocs logo"
                                class="w-10 h-10 sm:w-12 sm:h-12 object-cover rounded-md"
                        >
                    </a>

                    <h3 class="font-bold text-lg sm:text-xl">
                        Edu<span class="text-orange-500">Free</span>Docs
                    </h3>

                </section>


                <!-- DESKTOP NAVIGATION -->
                <section class="hidden lg:flex items-center gap-1">

                    <a
                            href="../../EduFreeDocs.com/index.php"
                            class="font-bold text-sm px-3 py-2 hover:border-b-2 hover:border-orange-500 transition"
                    >
                        Home
                    </a>

                    <a
                            href="../../EduFreeDocs.com/pages/schools.php"
                            class="font-bold text-sm px-3 py-2 hover:border-b-2 hover:border-orange-500 transition"
                    >
                        School
                    </a>

                    <a
                            href="../../EduFreeDocs.com/pages/courses.php"
                            class="font-bold text-sm px-3 py-2 hover:border-b-2 hover:border-orange-500 transition"
                    >
                        Course
                    </a>

                    <a
                            href="../../EduFreeDocs.com/pages/past-papers.php"
                            class="font-bold text-sm px-3 py-2 hover:border-b-2 hover:border-orange-500 transition"
                    >
                        Past Papers
                    </a>

                    <a
                            href="#"
                            class="font-bold text-sm px-3 py-2 hover:border-b-2 hover:border-orange-500 transition"
                    >
                        Contact Us
                    </a>

                    <a
                            href="#"
                            class="font-bold text-sm px-3 py-2 hover:border-b-2 hover:border-orange-500 transition"
                    >
                        About
                    </a>

                </section>


                <!-- SEARCH + PROFILE -->
                <section class="hidden md:flex items-center gap-3">

                    <!-- Search -->
                    <div class="relative">

                        <input
                                type="text"
                                placeholder="Search"
                                class="w-32 lg:w-44 xl:w-52 border border-gray-300 p-2 pr-9 text-sm rounded-lg
                                focus:border-orange-500 focus:outline-none focus:ring-2 focus:ring-orange-200"
                        >

                        <i
                                class="fa-solid fa-magnifying-glass
                                absolute right-3 top-1/2 -translate-y-1/2
                                text-gray-500"
                        ></i>

                    </div>


                    <!-- Profile -->
                    <a
                            type="button"
                            class="text-gray-700 hover:text-orange-500 transition text-xl"
                            href="../../EduFreeDocs.com/auth/login.php"
                    >
                        <i class="fa-regular fa-circle-user"></i>
                    </a>

                </section>


                <!-- MOBILE MENU BUTTON -->
                <button
                        id="menuButton"
                        type="button"
                        class="lg:hidden text-xl text-gray-700 hover:text-orange-500"
                >
                    <i class="fa-solid fa-bars"></i>
                </button>

            </div>


            <!-- ================= MOBILE MENU ================= -->
            <div
                    id="mobileMenu"
                    class="hidden lg:hidden border-t border-gray-200 px-4 py-4"
            >

                <!-- Mobile Search -->
                <div class="relative mb-4">

                    <input
                            type="text"
                            placeholder="Search notes, past papers..."
                            class="w-full border border-gray-300 p-2 pr-10 text-sm rounded-lg
                            focus:border-orange-500 focus:outline-none focus:ring-2 focus:ring-orange-200"
                    >

                    <i
                            class="fa-solid fa-magnifying-glass
                            absolute right-3 top-1/2 -translate-y-1/2
                            text-gray-500"
                    ></i>

                </div>


                <!-- Mobile Navigation -->
                <div class="flex flex-col">

                    <a
                            href="#"
                            class="font-semibold py-3 border-b border-gray-100 hover:text-orange-500"
                    >
                        Home
                    </a>

                    <a
                            href="#"
                            class="font-semibold py-3 border-b border-gray-100 hover:text-orange-500"
                    >
                        School
                    </a>

                    <a
                            href="#"
                            class="font-semibold py-3 border-b border-gray-100 hover:text-orange-500"
                    >
                        Course
                    </a>

                    <a
                            href="#"
                            class="font-semibold py-3 border-b border-gray-100 hover:text-orange-500"
                    >
                        Past Papers
                    </a>

                    <a
                            href="#"
                            class="font-semibold py-3 border-b border-gray-100 hover:text-orange-500"
                    >
                        Contact Us
                    </a>

                    <a
                            href="#"
                            class="font-semibold py-3 hover:text-orange-500"
                    >
                        About
                    </a>

                </div>


                <!-- Mobile Profile -->
                <button
                        type="button"
                        class="mt-4 flex items-center gap-2 font-semibold text-gray-700 hover:text-orange-500"
                >
                    <i class="fa-regular fa-circle-user text-lg"></i>
                    Account
                </button>

            </div>

        </nav>

    </div>

</header>


<!-- ================= JAVASCRIPT ================= -->
<script>

    const menuButton = document.getElementById('menuButton');
    const mobileMenu = document.getElementById('mobileMenu');

    menuButton.addEventListener('click', () => {

        mobileMenu.classList.toggle('hidden');

    });

</script>

</body>

</html>
