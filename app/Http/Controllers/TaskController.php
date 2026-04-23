<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    /**
     * Tampilan Utama: Hanya menampilkan tugas yang belum selesai (pending).
     */
    public function index()
    {
        // 1. Ambil data subjects, tapi FILTER tugasnya hanya yang 'pending'
        $subjects = Subject::where('user_id', Auth::id())
            ->with(['tasks' => function($query) {
                $query->where('status', '!=', 'completed') // FILTER: Sembunyikan yang sudah Done
                      ->orderBy('deadline', 'asc');
            }])
            ->get();

        // 2. Ambil Global Urgent Tasks (Hanya yang pending dan paling mepet)
        $upcomingTasks = Task::where('user_id', Auth::id())
            ->where('status', '!=', 'completed') // FILTER: Sembunyikan yang sudah Done
            ->orderBy('deadline', 'asc')
            ->take(3)
            ->get();

        return view('dashboard', compact('subjects', 'upcomingTasks'));
    }

    /**
     * Halaman Input Data.
     */
    public function create()
    {
        $subjects = Subject::where('user_id', Auth::id())->get();
        return view('tasks.create', compact('subjects'));
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

    /**
     * Update Status Tugas menjadi Selesai.
     */
    public function updateStatus(Task $task)
    {
        if ($task->user_id !== Auth::id()) {
            abort(403);
        }

        $task->update([
            'status' => 'completed'
        ]);

        // Redirect back agar tetap di halaman detail setelah klik Done
        return redirect()->back()->with('success', 'Tugas diselesaikan! Dashboard otomatis bersih.');
    }
}
