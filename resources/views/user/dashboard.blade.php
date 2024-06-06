@extends('layouts.navbar')
@section('title', 'Dashboard - Noteland')
@section('content')
    <h1 class="text-indigo-950 font-bold sm:text-3xl text-2xl">Welcome to Your Dashboard!</h1>
    <p class="text-gray-500">Enjoy your note-taking stuff! Write everything and anything without any limit.</p>
    <div class="flex flex-col sm:flex-row sm:space-x-10 items-center mt-5">
        <div class="bg-emerald-200 rounded-xl shadow-xl w-30"><img src="{{ asset('/images/photos/man.png') }}" alt="">
        </div>
        <div class="flex flex-col items-center sm:items-start">
            <div class="sm:mt-0 mt-5">
                <h3 class="text-2xl text-indigo-950 font-bold ">{{ $user->name }}</h3>
            </div>
            <div>
                <p class="text-gray-500">{{ $user->email }}</p>
            </div>
        </div>
    </div>
    <div class="flex flex-col justify-center items-center sm:justify-start sm:items-start mt-10">
        <h4 class="font-bold text-indigo-950 text-xl">Your Total Notes</h4>
        <div class="flex w-40 h-40 sm:w-44 sm:h-44 bg-purple-100 rounded-xl shadow-xl items-center justify-center mt-5">
            <h4 class="font-bold text-indigo-950 text-4xl">20</h4>
        </div>
    </div>
    <div class="flex flex-col mt-10">
        <h4 class="font-bold text-xl text-indigo-950">Let's Review Your Notes!</h4>
        <p class="text-gray-500">Here you can recall randomly your notes that you have written before.</p>
        <div class="flex flex-wrap flex-auto mt-5 justify-center sm:justify-start">
            <div class="bg-white shadow-xl text-indigo-950 w-52 p-6 rounded-xl mt-5 sm:mr-5">
                <h4 class="font-bold text-xl">Title</h4>
                <p class="font-bold text-sm text-gray-500">2/6/2024</p>
                <p class="text-sm mb-8 text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Cupiditate est quos, omnis aliquam fugiat alias ratione qui blanditiis dignissimos tenetur
                    exercitationem voluptas aliquid ipsa soluta eius. Fugit iste inventore voluptatibus.</p>
                <a href="#"
                    class="bg-indigo-900 text-white text-sm p-2 rounded-xl hover:bg-indigo-500 hover:text-white transition duration-500"><button>See
                        Details</button></a>
            </div>
            <div class="bg-white shadow-xl text-indigo-950 w-52 p-6 rounded-xl mt-5 sm:mr-5">
                <h4 class="font-bold text-xl">Title</h4>
                <p class="font-bold text-sm text-gray-500">2/6/2024</p>
                <p class="text-sm mb-8 text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Cupiditate est quos, omnis aliquam fugiat alias ratione qui blanditiis dignissimos tenetur
                    exercitationem voluptas aliquid ipsa soluta eius. Fugit iste inventore voluptatibus.</p>
                <a href="#"
                    class="bg-indigo-900 text-white text-sm p-2 rounded-xl hover:bg-indigo-500 hover:text-white transition duration-500"><button>See
                        Details</button></a>
            </div>
            <div class="bg-white shadow-xl text-indigo-950 w-52 p-6 rounded-xl mt-5 sm:mr-5">
                <h4 class="font-bold text-xl">Title</h4>
                <p class="font-bold text-sm text-gray-500">2/6/2024</p>
                <p class="text-sm mb-8 text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Cupiditate est quos, omnis aliquam fugiat alias ratione qui blanditiis dignissimos tenetur
                    exercitationem voluptas aliquid ipsa soluta eius. Fugit iste inventore voluptatibus.</p>
                <a href="#"
                    class="bg-indigo-900 text-white text-sm p-2 rounded-xl hover:bg-indigo-500 hover:text-white transition duration-500"><button>See
                        Details</button></a>
            </div>
            <div class="bg-white shadow-xl text-indigo-950 w-52 p-6 rounded-xl mt-5 sm:mr-5">
                <h4 class="font-bold text-xl">Title</h4>
                <p class="font-bold text-sm text-gray-500">2/6/2024</p>
                <p class="text-sm mb-8 text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Cupiditate est quos, omnis aliquam fugiat alias ratione qui blanditiis dignissimos tenetur
                    exercitationem voluptas aliquid ipsa soluta eius. Fugit iste inventore voluptatibus.</p>
                <a href="#"
                    class="bg-indigo-900 text-white text-sm p-2 rounded-xl hover:bg-indigo-500 hover:text-white transition duration-500"><button>See
                        Details</button></a>
            </div>

        </div>

    </div>
@endsection
