<?php
$pageTitle = "EduFreeDocs | Home";
require_once '../includes/header.php';
require_once '../includes/navbar.php';
?>

    <!-- Login Section -->
    <section class="
    w-[90%] sm:w-[65%] md:w-[45%] lg:w-[32%]
    max-w-sm
    mx-auto
    mt-8
    p-4 sm:p-5
    bg-white
    border border-gray-200
    rounded-lg
    shadow-md
">

        <!-- Header -->
        <div class="text-center mb-4">

            <img
                src="../../EduFreeDocs.com/assets/images/logo.jpeg"
                alt="EduFreeDocs logo"
                class="
                w-10 h-10
                object-cover
                rounded-md
                mx-auto
                mb-2
            "
            >

            <h3 class="text-xl font-bold text-gray-800">
                Login
            </h3>

            <p class="text-xs text-gray-500 mt-1">
                Welcome back to EduFreeDocs
            </p>

        </div>


        <!-- Form -->
        <form>

            <!-- Email -->
            <div class="mb-3">

                <label
                    for="email"
                    class="block text-xs font-semibold text-gray-700 mb-1">
                    Email address
                </label>

                <input
                    id="email"
                    name="email"
                    type="email"
                    placeholder="Enter your email"
                    required
                    class="
                    w-full
                    px-3 py-2
                    text-sm
                    border border-gray-300
                    rounded-md
                    outline-none
                    focus:border-orange-500
                    focus:ring-1
                    focus:ring-orange-500/20
                "
                >

            </div>


            <!-- Password -->
            <div class="mb-3">

                <label
                    for="password"
                    class="block text-xs font-semibold text-gray-700 mb-1">
                    Password
                </label>

                <input
                    id="password"
                    name="password"
                    type="password"
                    placeholder="Enter your password"
                    required
                    class="
                    w-full
                    px-3 py-2
                    text-sm
                    border border-gray-300
                    rounded-md
                    outline-none
                    focus:border-orange-500
                    focus:ring-1
                    focus:ring-orange-500/20
                "
                >

            </div>


            <!-- Remember + Forgot -->
            <div class="
            flex
            items-center
            justify-between
            mb-4
        ">

                <label class="
                flex items-center gap-1.5
                text-xs text-gray-600
            ">

                    <input
                        type="checkbox"
                        class="w-3.5 h-3.5 accent-orange-500"
                    >

                    Remember me

                </label>

                <a
                    href="#"
                    class="
                    text-xs
                    text-orange-500
                    hover:text-blue-600
                ">
                    Forgot password?
                </a>

            </div>


            <!-- Login Button -->
            <button
                type="submit"
                class="
                w-full
                py-2
                text-sm
                bg-orange-500
                hover:bg-orange-600
                text-white
                font-semibold
                rounded-md
                transition
            ">
                Login
            </button>

        </form>


        <!-- Signup -->
        <div class="
        text-center
        text-xs
        text-gray-600
        mt-4
        pt-3
        border-t
        border-gray-200
    ">

            Don't have an account?

            <a
                href="register.php"
                class="
                ml-1
                font-semibold
                text-orange-500
                hover:text-blue-600
            ">
                Sign up
            </a>

        </div>

    </section>

<?php require_once '../includes/footer.php'; ?>