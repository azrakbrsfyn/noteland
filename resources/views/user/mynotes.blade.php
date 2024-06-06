@extends('layouts.navbar')
@section('title', 'My Notes - ' . $user->name)
@section('content')

    <h1 class="text-3xl text-indigo-950 font-bold">My Notes</h1>
    <p class="text-gray-500">Write down your ideas, don't let you forget it!</p>
    <form class="max-w-md mt-4 mb-10">
        <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only">Search</label>
        <div class="relative">
            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                </svg>
            </div>
            <input type="search" id="default-search"
                class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-3xl bg-gray-50 focus:ring-indigo-950 focus:border-indigo-950"
                placeholder="Find your notes" required />
            <button type="submit"
                class="text-white absolute end-2.5 bottom-2.5 bg-indigo-950 hover:bg-indigo-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-3xl text-sm px-4 py-2 transition duration-500">Search</button>
        </div>
    </form>
    <a class="flex bg-indigo-950 p-2 text-white items-center rounded-3xl justify-center w-44 space-x-2 hover:bg-indigo-700 transition duration-500"
        href="#">
        <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 24 24">
            <path fill="currentColor"
                d="M17.5 21h1v-2.5H21v-1h-2.5V15h-1v2.5H15v1h2.5zm.5 2q-2.075 0-3.537-1.463T13 18t1.463-3.537T18 13t3.538 1.463T23 18t-1.463 3.538T18 23M7 9h10V7H7zm4.675 12H5q-.825 0-1.412-.587T3 19V5q0-.825.588-1.412T5 3h14q.825 0 1.413.588T21 5v6.7q-.725-.35-1.463-.525T18 11q-.275 0-.513.012t-.487.063V11H7v2h6.125q-.45.425-.812.925T11.675 15H7v2h4.075q-.05.25-.062.488T11 18q0 .825.15 1.538T11.675 21" />
        </svg>
        <h3 class="text-sm ">Create New Note</h3>
    </a>
    <div class="flex flex-col mt-10">
        <h4 class="font-bold text-xl text-indigo-950">Read and Manage Your Notes!</h4>
        <p class="text-gray-500">Enjoy your journaling activity</p>
        <div class="flex flex-wrap flex-auto mt-5 justify-center sm:justify-start">
            @forelse($notes as $note)
                <div
                    class="bg-white shadow-xl text-indigo-950 w-60 p-6 rounded-xl mt-5 sm:mr-5 hover:scale-105 transition duration-500">
                    <h4 class="font-bold text-xl">{{ $note->title }}</h4>
                    <p class="font-bold text-sm text-gray-500">2/6/2024</p>
                    <p class="text-sm mb-8 text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        {{ $note->note_content }}</p>
                    <div class="flex items-center space-x-2 justify-between">
                        <a href="#"
                            class="bg-indigo-900 text-white text-sm p-2 rounded-xl hover:bg-indigo-500 hover:text-white transition duration-500"><button>Read
                                Notes</button></a>
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em"
                                viewBox="0 0 12 12">
                                <path fill="#ff0000"
                                    d="M5 3h2a1 1 0 0 0-2 0M4 3a2 2 0 1 1 4 0h2.5a.5.5 0 0 1 0 1h-.441l-.443 5.17A2 2 0 0 1 7.623 11H4.377a2 2 0 0 1-1.993-1.83L1.941 4H1.5a.5.5 0 0 1 0-1zm3.5 3a.5.5 0 0 0-1 0v2a.5.5 0 0 0 1 0zM5 5.5a.5.5 0 0 0-.5.5v2a.5.5 0 0 0 1 0V6a.5.5 0 0 0-.5-.5" />
                            </svg></a>
                    </div>
                </div>
            @empty
                <p class = "text-gray-500">You don't have any notes. Let's create a new one! </p>
            @endforelse
        </div>

    </div>
@endsection
