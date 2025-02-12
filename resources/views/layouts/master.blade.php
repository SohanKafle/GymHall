<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gym Hall</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-200">

    <!-- Header Section -->
    <nav class="sticky z-50 top-0 flex justify-between items-center p-6 bg-black text-white border-b border-gray-800">
        <div class="max-w-screen-xl mx-auto w-full flex justify-between items-center">
            <h1 class="ml-5 font-bold text-lg">Gym Hall</h1>
        
            <!-- Hamburger Menu for Small Screens -->
            <div class="lg:hidden flex items-center">
                <button id="menu-toggle" class="text-white hover:text-red-500">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        
            <!-- Navigation Links -->
            <div class="hidden lg:flex items-center text-sm">
                <ul class="flex gap-5 mr-5 font-semibold">
                    <li><a href="/" class="hover:text-red-500">HOME</a></li>
                    <li><a href="/about" class="hover:text-red-500">ABOUT</a></li>
                    <li><a href="/services" class="hover:text-red-500">SERVICES</a></li>
                    <li><a href="/location" class="hover:text-red-500">LOCATIONS</a></li>
                    <li><a href="/contact" class="hover:text-red-500">CONTACT</a></li>
                </ul>
                <div class="bg-red-600 hover:bg-red-700 font-semibold text-white px-4 py-2 rounded-lg">
                    <a href="/login">SIGN UP</a>
                </div>
            </div>
        </div>
    </nav>
    
    <!-- Mobile Menu -->
    <div id="mobile-menu" class="lg:hidden absolute top-16 left-0 w-full bg-black text-white hidden">
        <ul class="flex flex-col items-center gap-4 p-6">
            <li><a href="/" class="hover:text-red-500">HOME</a></li>
            <li><a href="/about" class="hover:text-red-500">ABOUT</a></li>
            <li><a href="/services" class="hover:text-red-500">SERVICES</a></li>
            <li><a href="/location" class="hover:text-red-500">LOCATIONS</a></li>
            <li><a href="/contact" class="hover:text-red-500">CONTACT</a></li>
            <li>
                <div class="bg-red-600 hover:bg-red-700 font-semibold text-white px-4 py-2 rounded-lg">
                    <a href="/login">SIGN UP</a>
                </div>
            </li>
        </ul>
    </div>

    <script>
        document.getElementById('menu-toggle').addEventListener('click', function() {
            const mobileMenu = document.getElementById('mobile-menu');
            mobileMenu.classList.toggle('hidden');
        });
    </script>
    
    <!-- Main Content -->
    <main class="max-w-screen-xl mx-auto w-full">
        @yield('content')
    </main>

    <!-- Footer Section -->
    <footer class="bg-black text-white py-10">
        <div class="max-w-screen-xl mx-auto w-full grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3  gap-10">
            <div class="mx-5 col-span-1">
                <h1 class="text-2xl font-bold">Gym Hall</h1>
                <p class="mt-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptates. Quisquam,
                    voluptates.</p>
            </div>
            <div class="col-span-1">
                <h1 class="text-2xl font-bold">Quick Links</h1>
                <ul class="mt-5">
                    <li><a href="#" class="hover:text-red-500">Home</a></li>
                    <li><a href="#" class="hover:text-red-500">About</a></li>
                    <li><a href="#" class="hover:text-red-500">Services</a></li>
                    <li><a href="#" class="hover:text-red-500">Locations</a></li>
                    <li><a href="#" class="hover:text-red-500">Contact</a></li>
                </ul>
            </div>
            <div class="col-span-1">
                <h1 class="text-2xl font-bold">Contact Us</h1>
                <div class="flex space-x-4 mt-5">
                    <i class="ri-facebook-fill text-2xl hover:text-red-500"></i>
                    <i class="ri-twitter-fill text-2xl hover:text-red-500"></i>
                    <i class="ri-instagram-fill text-2xl hover:text-red-500"></i>
                </div>
            </div>
        </div>
        <div class="bg-gray-900 text-white p-5 text-center">
            <p>&copy; 2024 Gym Hall. All rights reserved.</p>
        </div>
    </footer>

</body>

</html>
