<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubjectController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'color' => 'required|string',
        ]);

        Subject::create([
            'user_id' => Auth::id(),
            'name' => $request->name,
            'color' => $request->color,
        ]);

        return redirect()->back()->with('success', 'Mata kuliah berhasil ditambahkan!');
    }

    public function destroy(Subject $subject)
    {
        if ($subject->user_id !== Auth::id()) {
            abort(403);
        }

        $subject->delete();
        return redirect()->route('dashboard')->with('success', 'Module berhasil dihapus!');
    }
    public function show(Subject $subject)
    {
        // Pastikan user hanya bisa akses matkul miliknya
        if ($subject->user_id !== auth()->id()) { abort(403); }

        // Ambil tugas, urutkan yang belum selesai (pending) di atas berdasarkan deadline
        $tasks = $subject->tasks()->orderBy('status', 'desc')->orderBy('deadline', 'asc')->get();

        return view('subjects.show', compact('subject', 'tasks'));
    }
}
