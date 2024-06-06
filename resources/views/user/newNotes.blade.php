@extends('layouts.navbar')
@section('title', 'Noteland - Create New Note')
@section('content')

    <h1 class="text-3xl font-bold text-indigo-950 mb-4">Create New Note</h1>
    <form method='post' action="{{ route('dashboard.noteland.store') }}">
        @csrf
        <div class='flex flex-col mb-8'>
            <label class="font-bold text-indigo-950 mb-2 ms-4" for="title">Title:</label>
            <input class="border-solid border-2 rounded-3xl border-indigo-950 p-2 " placeholder="Enter your title"
                type="text" name="title" required>
        </div>
        <div class="flex flex-col mb-8">
            <label class="font-bold text-indigo-950 mb-2 ms-4" for="title">Note:</label>
            <textarea class="border-solid border-2 border-indigo-950 p-2 h-96 rounded-2xl" name="note" id="note"
                placeholder="Write down your ideas and note here!"></textarea>
        </div>
        <div class="flex sm:justify-start justify-center">
            <button
                class="bg-indigo-950 hover:bg-indigo-700 transition duration-500 p-2 rounded-2xl text-white sm:w-44 w-full"
                type="submit">Save Note</button>
        </div>
    </form>


@endsection
