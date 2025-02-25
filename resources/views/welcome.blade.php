@extends('layouts.master')
@section('content')
    <div style="background-image:  linear-gradient(rgba(0, 0, 0, 0.776), rgba(69, 14, 14, 0.5)), url('images/gym.jpg')"
        class="bg-cover bg-center w-full">
        <div class="text-white py-24 lg:py-36 xl:px-12 lg:px-8 sm:px-5 px-3">
            <div class="xl:max-w-7xl w-full mx-auto">
                <div>
                    <h3 class="font-bold uppercase">
                        Welcome to FitZone Gym
                    </h3>
                    <h1 class="md:text-4xl sm:text-3xl text-2xl font-bold mt-6">
                        Your Fitness Journey Starts Here
                    </h1>
                    <p class="mt-6 sm:text-base text-sm">
                        At FitZone, we provide top-tier fitness equipment, personal training, and a motivating <br> environment
                        to help you achieve your fitness goals. <br class="lg:block hidden"> Whether you're looking to build
                        strength, lose weight, or simply stay active, we’ve got you covered.
                    </p>
                </div>
                <div class="mt-8 flex flex-wrap items-center gap-3">
                    <a href="/register">
                        <button class="rounded-md overflow-hidden">
                            <div class="bg-red-600 py-2 px-8 relative">
                                <div class="flex items-center gap-x-3 relative z-20">
                                    <i class="ri-user-add-fill text-xl"></i>
                                    <span class="text-lg font-medium">Join Us Now!</span>
                                </div>
                            </div>
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-10 flex justify-between p-10">
        <img src="https://placehold.co/600x400" alt="gg">
        <div class="ml-10">
            <h1 class="text-3xl font-bold">Welcome to Fitzone Gym</h1>
            <p class="border-2 border-red-600 w-32"></p>
            <p class="mt-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptates. Quisquam,
                voluptates.</p>
            <p class="my-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptates. Quisquam,
                voluptates.</p>
                <p class="my-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptates. Quisquam,
                    voluptates.</p>
            <a href="#" class="bg-red-500 hover:bg-red-600 text-white font-semibold p-2 rounded-lg">Learn more</a>
        </div>
    </div>

    <div class="bg-gray-200 p-10">
        <h1 class="text-3xl font-bold">Our Services</h1>
        <p class="border-2 border-red-600 w-32"></p>
        <div class="grid grid-cols-3 gap-10 mt-10">
            <div class="bg-white p-5 rounded-lg">
                <img src="https://placehold.co/200x200" alt="gg">
                <h1 class="text-xl font-bold mt-5">Cardio Training</h1>
                <p class="mt-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptates. Quisquam,
                    voluptates.</p>
            </div>
            <div class="bg-white p-5 rounded-lg">
                <img src="https://placehold.co/200x200" alt="gg">
                <h1 class="text-xl font-bold mt-5">Weight Training</h1>
                <p class="mt-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptates. Quisquam,
                    voluptates.</p>
            </div>
            <div class="bg-white p-5 rounded-lg">
                <img src="https://placehold.co/200x200" alt="gg">
                <h1 class="text-xl font-bold mt-5">Yoga Training</h1>
                <p class="mt-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptates. Quisquam,
                    voluptates.</p>
            </div>
        </div>
    </div>
@endsection
