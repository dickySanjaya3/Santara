<x-app-layout>
    <div class="max-w-4xl mx-auto space-y-8 animate-fade-in-up">

        <div class="bg-white rounded-[2.5rem] p-10 shadow-sm border border-gray-100">
            <div class="flex items-center gap-5 mb-8">
                <div class="bg-purple-50 w-14 h-14 rounded-2xl flex items-center justify-center text-2xl shadow-inner">📚</div>
                <div>
                    <h3 class="text-2xl font-black text-gray-800 tracking-tight">Tambah Mata Kuliah</h3>
                    <p class="text-gray-400 text-xs font-bold uppercase tracking-widest">Langkah awal untuk manajemen tugas</p>
                </div>
            </div>

            <form action="{{ route('subjects.store') }}" method="POST" class="space-y-6">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div>
                        <label class="block text-xs font-black text-gray-500 uppercase mb-3 ml-1">Nama Mata Kuliah</label>
                        <input type="text" name="name" placeholder="Contoh: Pemrograman Web" required
                            class="w-full bg-gray-50 border-2 border-transparent rounded-[1.2rem] px-6 py-4 focus:bg-white focus:border-[#8e7aa3] focus:ring-0 transition-all font-bold text-gray-700">
                    </div>
                    <div>
                        <label class="block text-xs font-black text-gray-500 uppercase mb-3 ml-1">Warna Tema Card</label>
                        <select name="color" class="w-full bg-gray-50 border-2 border-transparent rounded-[1.2rem] px-6 py-4 focus:bg-white focus:border-[#8e7aa3] focus:ring-0 transition-all font-bold text-gray-700 cursor-pointer">
                            <option value="#6366f1">Indigo Power</option>
                            <option value="#10b981">Fresh Emerald</option>
                            <option value="#f59e0b">Warm Amber</option>
                            <option value="#ef4444">Rose Red</option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="bg-[#10b981] text-white px-10 py-4 rounded-[1.2rem] font-black text-sm shadow-xl hover:shadow-purple-200 hover:-translate-y-1 transition-all">
                    SIMPAN MATA KULIAH
                </button>
            </form>
        </div>

        <div class="bg-white rounded-[2.5rem] p-10 shadow-sm border-2 border-[#8e7aa3]/5">
            <div class="flex items-center gap-5 mb-8">
                <div class="bg-orange-50 w-14 h-14 rounded-2xl flex items-center justify-center text-2xl shadow-inner">📝</div>
                <div>
                    <h3 class="text-2xl font-black text-gray-800 tracking-tight">Input Detail Tugas</h3>
                    <p class="text-gray-400 text-xs font-bold uppercase tracking-widest">Detailkan deadline tugasmu disini</p>
                </div>
            </div>

            <form action="{{ route('tasks.store') }}" method="POST" class="space-y-8">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="md:col-span-2">
                        <label class="block text-xs font-black text-gray-500 uppercase mb-3 ml-1">Pilih Mata Kuliah</label>
                        <select name="subject_id" required class="...">
                            <option value="" disabled selected>-- Pilih Matkul --</option>
                        @foreach($subjects as $subject)
                            <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label class="block text-xs font-black text-gray-500 uppercase mb-3 ml-1">Nama Tugas</label>
                        <input type="text" name="title" placeholder="Contoh: Modul 4 Laravel Dasar" required
                            class="w-full bg-gray-50 border-2 border-transparent rounded-[1.2rem] px-6 py-4 focus:bg-white focus:border-[#8e7aa3] focus:ring-0 transition-all font-bold text-gray-700">
                    </div>
                    <div>
                        <label class="block text-xs font-black text-gray-500 uppercase mb-3 ml-1">Deadline Pengumpulan</label>
                        <input type="date" name="deadline" required
                            class="w-full bg-gray-50 border-2 border-transparent rounded-[1.2rem] px-6 py-4 focus:bg-white focus:border-[#8e7aa3] focus:ring-0 transition-all font-bold text-gray-700">
                    </div>
                    <div class="md:col-span-2">
                        <label class="block text-xs font-black text-gray-500 uppercase mb-3 ml-1">Keterangan Tambahan</label>
                        <textarea name="description" rows="3" placeholder="Opsional: Link pengumpulan, instruksi dosen, dll."
                            class="w-full bg-gray-50 border-2 border-transparent rounded-[1.2rem] px-6 py-4 focus:bg-white focus:border-[#8e7aa3] focus:ring-0 transition-all font-bold text-gray-700 resize-none"></textarea>
                    </div>
                </div>
                <button type="submit" class="bg-[#10b981] text-white px-10 py-4 rounded-[1.2rem] font-black text-sm shadow-xl hover:bg-black hover:-translate-y-1 transition-all">
                    POSTING TUGAS KE DASHBOARD
                </button>
            </form>
        </div>

    </div>
</x-app-layout>
