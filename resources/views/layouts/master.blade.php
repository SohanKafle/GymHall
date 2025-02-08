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
    <nav class="sticky flex justify-between items-center p-6 bg-black text-white border-b border-gray-800">
        <h1 class="ml-5 font-bold">Gym Hall</h1>
        <div class="flex items-center text-sm">
            <ul class="flex gap-5 mr-5 font-semibold">
                <li><a href="/" class="hover:text-red-500">HOME</a></li>
                <li><a href="/about" class="hover:text-red-500">ABOUT</a></li>
                <li><a href="/services" class="hover:text-red-500">SERVICES</a></li>
                <li><a href="/location" class="hover:text-red-500">LOCATIONS</a></li>
                <li><a href="/contact" class="hover:text-red-500 ">CONTACT</a></li>

            </ul>
            <div class="bg-red-600 hover:bg-red-700 font-semibold text-white px-4 py-2 rounded-lg mr-5">
                <a href="/login">SIGN UP</a>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
        <div class="bg-black text-white p-10">
            <div class="grid grid-cols-3 gap-10">
                <div>
                    <h1 class="text-2xl font-bold">Gym Hall</h1>
                    <p class="mt-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptates. Quisquam,
                        voluptates.</p>
                </div>
                <div>
                    <h1 class="text-2xl font-bold">Quick Links</h1>
                    <ul class="mt-5">
                        <li><a href="#" class="hover:text-red-500">Home</a></li>
                        <li><a href="#" class="hover:text-red-500">About</a></li>
                        <li><a href="#" class="hover:text-red-500">Services</a></li>
                        <li><a href="#" class="hover:text-red-500">Locations</a></li>
                        <li><a href="#" class="hover:text-red-500">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h1 class="text-2xl font-bold">Contact Us</h1>
                    <i class="ri-facebook-fill"></i>
                    <i class="ri-twitter-fill"></i>
                    <i class="ri-instagram-fill"></i>
                </div>
            </div>
        </div>
        <div class="bg-gray-900 text-white p-5 text-center">
            <p>&copy; 2024 Gym Hall. All rights reserved.</p>
        </div>  
    </footer>
</body>

</html>
