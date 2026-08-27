<?php
$pageTitle = "EduFreeDocs | Home";
require_once '../includes/header.php';
require_once '../includes/navbar.php';
?>
    <!-- Register Section -->
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
                Create Account
            </h3>

            <p class="text-xs text-gray-500 mt-1">
                Join EduFreeDocs today
            </p>

        </div>


        <!-- Register Form -->
        <form>

            <!-- Full Name -->
            <div class="mb-3">

                <label
                    for="name"
                    class="block text-xs font-semibold text-gray-700 mb-1">
                    Full Name
                </label>

                <input
                    id="name"
                    name="name"
                    type="text"
                    placeholder="Enter your full name"
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


            <!-- Email -->
            <div class="mb-3">

                <label
                    for="email"
                    class="block text-xs font-semibold text-gray-700 mb-1">
                    Email Address
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
                    placeholder="Create a password"
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


            <!-- Confirm Password -->
            <div class="mb-3">

                <label
                    for="confirm-password"
                    class="block text-xs font-semibold text-gray-700 mb-1">
                    Confirm Password
                </label>

                <input
                    id="confirm-password"
                    name="confirm_password"
                    type="password"
                    placeholder="Confirm your password"
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


            <!-- Terms -->
            <div class="flex items-start gap-2 mb-4">

                <input
                    id="terms"
                    name="terms"
                    type="checkbox"
                    required
                    class="w-3.5 h-3.5 mt-0.5 accent-orange-500"
                >

                <label
                    for="terms"
                    class="text-xs text-gray-600 leading-tight">
                    I agree to the
                    <a href="#"
                       class="text-orange-500 hover:text-blue-600 font-medium">
                        Terms & Conditions
                    </a>
                </label>

            </div>


            <!-- Register Button -->
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
                Create Account
            </button>

        </form>


        <!-- Login Link -->
        <div class="
        text-center
        text-xs
        text-gray-600
        mt-4
        pt-3
        border-t
        border-gray-200
    ">

            Already have an account?

            <a
                href="login.php"
                class="
                ml-1
                font-semibold
                text-orange-500
                hover:text-blue-600
            ">
                Login
            </a>

        </div>

    </section>
<?php require_once '../includes/footer.php'; ?>