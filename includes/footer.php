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

<!-- Footer -->
<footer class="bg-white border-t lg:mx-10 border-gray-200 mt-10">

    <!-- Footer Main Content -->
    <div class="w-[90%] max-w-7xl mx-auto py-10">

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-8 lg:gap-10">

            <!-- Brand / About -->
            <div class="lg:col-span-1">

                <!-- Logo -->
                <div class="flex items-center gap-2 mb-4">
                    <div class="text-3xl">
                        <img
                            src="../../EduFreeDocs.com/assets/images/logo.jpeg"
                            alt="EduFreeDocs logo"
                            class="w-10 h-10 sm:w-12 sm:h-12 object-cover rounded-md"
                        >
                    </div>

                    <h2 class="text-xl font-bold text-gray-800">
                        Edu<span class="text-orange-500">Free</span>Docs
                    </h2>
                </div>

                <p class="text-sm text-gray-500 leading-6 max-w-[220px]">
                    Free learning resources for students.
                </p>

                <!-- Social Media -->
                <div class="flex gap-3 mt-5">

                    <!-- Facebook -->
                    <a href="#"
                       class="w-9 h-9 rounded-full bg-gray-100
              flex items-center justify-center
              text-gray-700 hover:bg-orange-500
              hover:text-white transition">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>

                    <!-- X / Twitter -->
                    <a href="#"
                       class="w-9 h-9 rounded-full bg-gray-100
              flex items-center justify-center
              text-gray-700 hover:bg-orange-500
              hover:text-white transition">
                        <i class="fa-brands fa-x-twitter"></i>
                    </a>

                    <!-- Instagram -->
                    <a href="#"
                       class="w-9 h-9 rounded-full bg-gray-100
              flex items-center justify-center
              text-gray-700 hover:bg-orange-500
              hover:text-white transition">
                        <i class="fa-brands fa-instagram"></i>
                    </a>

                    <!-- YouTube -->
                    <a href="#"
                       class="w-9 h-9 rounded-full bg-gray-100
              flex items-center justify-center
              text-gray-700 hover:bg-orange-500
              hover:text-white transition">
                        <i class="fa-brands fa-youtube"></i>
                    </a>

                </div>

            </div>


            <!-- Quick Links -->
            <div>
                <h3 class="font-bold text-gray-800 mb-4">
                    Quick Links
                </h3>

                <ul class="space-y-3 text-sm text-gray-500">

                    <li>
                        <a href="#" class="hover:text-orange-500 transition">
                            Home
                        </a>
                    </li>

                    <li>
                        <a href="#" class="hover:text-orange-500 transition">
                            Schools
                        </a>
                    </li>

                    <li>
                        <a href="#" class="hover:text-orange-500 transition">
                            Courses
                        </a>
                    </li>

                    <li>
                        <a href="#" class="hover:text-orange-500 transition">
                            Past Papers
                        </a>
                    </li>

                    <li>
                        <a href="#" class="hover:text-orange-500 transition">
                            Notes
                        </a>
                    </li>

                    <li>
                        <a href="#" class="hover:text-orange-500 transition">
                            CATs
                        </a>
                    </li>

                </ul>
            </div>


            <!-- Resources -->
            <div>
                <h3 class="font-bold text-gray-800 mb-4">
                    Resources
                </h3>

                <ul class="space-y-3 text-sm text-gray-500">

                    <li>
                        <a href="#" class="hover:text-orange-500 transition">
                            Notes
                        </a>
                    </li>

                    <li>
                        <a href="#" class="hover:text-orange-500 transition">
                            Past Papers
                        </a>
                    </li>

                    <li>
                        <a href="#" class="hover:text-orange-500 transition">
                            CATs
                        </a>
                    </li>

                    <li>
                        <a href="#" class="hover:text-orange-500 transition">
                            Books
                        </a>
                    </li>

                    <li>
                        <a href="#" class="hover:text-orange-500 transition">
                            Guides
                        </a>
                    </li>

                </ul>
            </div>


            <!-- Support -->
            <div>
                <h3 class="font-bold text-gray-800 mb-4">
                    Support
                </h3>

                <ul class="space-y-3 text-sm text-gray-500">

                    <li>
                        <a href="#" class="hover:text-orange-500 transition">
                            Help Center
                        </a>
                    </li>

                    <li>
                        <a href="#" class="hover:text-orange-500 transition">
                            FAQ
                        </a>
                    </li>

                    <li>
                        <a href="#" class="hover:text-orange-500 transition">
                            Terms of Use
                        </a>
                    </li>

                    <li>
                        <a href="#" class="hover:text-orange-500 transition">
                            Privacy Policy
                        </a>
                    </li>

                </ul>
            </div>


            <!-- Newsletter -->
            <div>

                <h3 class="font-bold text-gray-800 mb-4">
                    Newsletter
                </h3>

                <p class="text-sm text-gray-500 leading-5 mb-4">
                    Subscribe to get updates on new resources.
                </p>

                <form class="space-y-3">

                    <input
                        type="email"
                        placeholder="Enter your email"
                        class="w-full px-4 py-3
                               border border-gray-200
                               rounded-md
                               text-sm
                               outline-none
                               focus:border-orange-500
                               focus:ring-1
                               focus:ring-orange-500">

                    <button
                        type="submit"
                        class="w-full py-3
                               bg-orange-500
                               hover:bg-orange-600
                               text-white
                               text-sm font-semibold
                               rounded-md
                               transition">

                        Subscribe

                    </button>

                </form>

            </div>

        </div>

    </div>


    <!-- Copyright -->
    <div class="border-t border-gray-200">

        <div class="w-[90%] max-w-7xl mx-auto py-5">

            <p class="text-center text-sm text-gray-500">
                © 2025 EduFreeDocs. All rights reserved.
            </p>

        </div>

    </div>

</footer>

</body>

</html>
