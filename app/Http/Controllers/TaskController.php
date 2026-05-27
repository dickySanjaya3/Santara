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
        // 1. Ambil data subjects, hitung tugas pending, dan FILTER tugasnya hanya yang 'pending'
        $subjects = Subject::where('user_id', Auth::id())
            ->withCount(['tasks' => function($query) {
                $query->where('status', '!=', 'completed'); // Menyuplai data 'tasks_count' untuk tugas aktif ke Blade
            }])
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
        // 1. Validasi data yang masuk dari form
        $validated = $request->validate([
            'title' => 'required',
            'subject_id' => 'required',
            'deadline' => 'required',
            'description' => 'nullable',
            'file_instruction' => 'nullable|mimes:pdf,doc,docx|max:5120', // Maksimal 5MB
        ]);

        // 2. Ambil ID user yang sedang login otomatis
        $validated['user_id'] = auth()->id();

        // 3. JEMBATAN UTAMA: Proses file fisik dan masukkan path-nya ke dalam array $validated
        if ($request->hasFile('file_instruction')) {
            // Ambil file aslinya
            $file = $request->file('file_instruction');

            // Buat nama unik agar tidak tabrakan di storage
            $fileName = time() . '_' . $file->getClientOriginalName();

            // Simpan file ke folder: storage/app/public/uploads/tasks
            $filePath = $file->storeAs('uploads/tasks', $fileName, 'public');

            // TIMPA NILAI NULL: Masukkan path file asli ke data yang akan disimpan ke DB
            $validated['file_instruction'] = $filePath;
        } else {
            // Jika user tidak upload file, set kolom tetap null
            $validated['file_instruction'] = null;
        }

        // 4. Eksekusi simpan ke database dengan data yang sudah lengkap
        Task::create($validated);

        return redirect()->route('dashboard')->with('success', 'Tugas berhasil disimpan dengan lampiran! 🚀');
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
