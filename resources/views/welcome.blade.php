@extends('layouts.master')
@section('content')

<div class="bg-cover bg-center bg-no-repeat h-96" style="background-image: url('images/gym.jpg')">
    <div class="bg-black bg-opacity-30 ml-6 h-full flex justify-start">
        
        <h1 class="text-4xl mt-16 font-bold text-white">You only fail, When you stop trying!</h1>
    </div>
</div>

<div class="mt-10 flex justify-between p-10">
    <img src="https://placehold.co/600x400" alt="gg">
    <div class="ml-10">
        <h1 class="text-3xl font-bold">Welcome to Gym Hall</h1>
        <p class="border-2 border-red-600 w-32"></p>
        <p class="mt-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptates. Quisquam, voluptates.</p>
        <p class="my-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptates. Quisquam, voluptates.</p>
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
            <p class="mt-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptates. Quisquam, voluptates.</p>
        </div>
        <div class="bg-white p-5 rounded-lg">
            <img src="https://placehold.co/200x200" alt="gg">
            <h1 class="text-xl font-bold mt-5">Weight Training</h1>
            <p class="mt-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptates. Quisquam, voluptates.</p>
        </div>
        <div class="bg-white p-5 rounded-lg">
            <img src="https://placehold.co/200x200" alt="gg">
            <h1 class="text-xl font-bold mt-5">Yoga Training</h1>
            <p class="mt-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptates. Quisquam, voluptates.</p>
        </div>
    </div>  
</div>


@endsection