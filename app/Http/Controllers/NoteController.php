<?php

namespace App\Http\Controllers;

use App\Models\Note;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        return view('user.dashboard', [
            'user' => $user
        ]);
    }

    public function show_note()
    {
        $user = Auth::user();
        $my_notes = $user->notes()->orderBy('id', 'DESC')->get();
        // dd($my_notes);
        return view('user.mynotes', [
            'user' => $user,
            'notes' => $my_notes
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("user.newNotes");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validation
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'note' => 'required|string'
        ]);

        DB::beginTransaction();

        try {
            Note::create([
                'user_id' => Auth::id(),
                'title' => $validated['title'],
                'note_content' => $validated['note'],
                'slug' => Str::slug($request->name)
            ]);

            DB::commit();

            return redirect()->route('dashboard.noteland.my-notes');
        } catch (\Exception $e) {
            DB::rollBack();
            $error = ValidationException::withMessages([
                'system_error' => ['System Error!' . $e->getMessage()],
            ]);

            throw $error;
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Note $note)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Note $note)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Note $note)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Note $note)
    {
        //
    }
}
