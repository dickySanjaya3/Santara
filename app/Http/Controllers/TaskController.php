<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    /**
     * Tampilan Utama: Card per Mata Kuliah.
     */
    public function index()
{
    // Ambil data subjects untuk Card utama
    $subjects = Subject::where('user_id', Auth::id())
        ->with(['tasks' => function($query) {
            $query->orderBy('deadline', 'asc');
        }])
        ->get();

    // AMBIL DATA AKTIVITAS TERDEKAT (Maksimal 3 tugas teratas)
    $upcomingTasks = \App\Models\Task::where('user_id', Auth::id())
        ->where('status', '!=', 'completed') // Hanya yang belum selesai
        ->orderBy('deadline', 'asc') // Urutkan yang paling mepet di atas
        ->take(3)
        ->get();

    return view('dashboard', compact('subjects', 'upcomingTasks'));
}

    /**
     * Halaman Input: Form untuk Matkul dan Tugas.
     */
    public function create()
    {
        // Ambil list matkul untuk dropdown di form tugas
        $subjects = Subject::where('user_id', Auth::id())->get();

        return view('tasks.create', compact('subjects'));
    }

    /**
     * Simpan Mata Kuliah Baru.
     */
    public function storeSubject(Request $request)
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

    /**
     * Simpan Tugas Baru.
     */
    public function store(Request $request)
    {
        $request->validate([
            'subject_id' => 'required|exists:subjects,id',
            'title' => 'required|string|max:255',
            'deadline' => 'required|date',
            'description' => 'nullable|string',
        ]);

        Task::create([
            'user_id' => Auth::id(),
            'subject_id' => $request->subject_id,
            'title' => $request->title,
            'description' => $request->description,
            'deadline' => $request->deadline,
            'status' => 'pending',
        ]);

        return redirect()->route('dashboard')->with('success', 'Tugas berhasil diposting!');
    }
}
