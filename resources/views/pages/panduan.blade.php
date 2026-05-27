<x-info-layout>
    <div class="min-h-screen py-12 px-4 flex items-center justify-center">
        <div class="bg-white/90 backdrop-blur-lg border border-white/50 shadow-2xl rounded-3xl p-8 md:p-16 max-w-5xl w-full">

            <div class="text-center mb-16">
                <span class="bg-blue-100 text-blue-600 text-xs font-black px-4 py-1.5 rounded-full uppercase tracking-widest">User Guide</span>
                <h1 class="text-4xl md:text-5xl font-black text-gray-900 mt-4 mb-4 tracking-tight">
                    Cara Kerja <span class="text-blue-600">Santara</span>
                </h1>
                <p class="text-gray-500 max-w-2xl mx-auto text-base leading-relaxed">
                    Ikuti alur detail di bawah ini untuk mulai mengelola beban akademikmu dengan lebih profesional dan terorganisir.
                </p>
            </div>

            <div class="grid grid-cols-1 gap-12">

                <div class="flex flex-col md:flex-row gap-8 items-start">
                    <div class="shrink-0 w-16 h-16 bg-blue-600 rounded-2xl flex items-center justify-center text-white text-2xl font-black shadow-lg shadow-blue-200">01</div>
                    <div class="flex-1">
                        <h3 class="text-xl font-black text-gray-800 mb-2 uppercase">Registrasi & Personalisasi</h3>
                        <p class="text-gray-600 leading-relaxed mb-4">
                            Daftarkan akunmu dan lengkapi data akademik. Santara akan menyesuaikan dashboard berdasarkan <strong>Program Studi</strong> dan <strong>Semester</strong> yang kamu tempuh agar kategori tugas tetap relevan.
                        </p>
                    </div>
                </div>

                <div class="flex flex-col md:flex-row gap-8 items-start">
                    <div class="shrink-0 w-16 h-16 bg-blue-600 rounded-2xl flex items-center justify-center text-white text-2xl font-black shadow-lg shadow-blue-200">02</div>
                    <div class="flex-1">
                        <h3 class="text-xl font-black text-gray-800 mb-2 uppercase">Manajemen Data Entry</h3>
                        <p class="text-gray-600 leading-relaxed mb-4">
                            Tambahkan tugas baru melalui menu <em>Data Entry</em>. Di sini kamu wajib mengisi judul tugas, batas waktu (deadline), dan <strong>mengunggah file instruksi (PDF/Word)</strong> agar dokumen penting tidak tercecer di grup chat.
                        </p>
                    </div>
                </div>

                <!-- Tahap 3: Cek Detail Tugas -->
<div class="flex flex-col md:flex-row gap-8 items-start">
    <div class="shrink-0 w-16 h-16 bg-blue-600 rounded-2xl flex items-center justify-center text-white text-2xl font-black shadow-lg shadow-blue-200">03</div>
    <div class="flex-1">
        <h3 class="text-xl font-black text-gray-800 mb-2 uppercase">Pantau Detail & Progres</h3>
        <p class="text-gray-600 leading-relaxed mb-4">
            Untuk melihat rincian instruksi yang lebih lengkap, kamu cukup <span class="font-bold text-gray-900">klik pada nama mata kuliah (subject)</span> di daftar tugasmu. Sistem akan membuka panel detail yang berisi:
        </p>

        <!-- Detail Box Aksi (Sudah steril dari markdown dan font-error) -->
        <div class="bg-blue-50/50 border border-blue-100 rounded-2xl p-6 space-y-4 mb-4">

            <!-- Item 1 -->
            <div class="flex items-start gap-4">
                <!-- Bullet indikator pengganti ikon yang tidak render -->
                <div class="mt-1.5 w-2 h-2 bg-blue-600 rounded-full shrink-0"></div>
                <p class="text-sm text-gray-700">
                    <span class="font-bold text-blue-700">Akses Detail:</span> Dengan klik mata kuliah, kamu bisa melihat deskripsi tugas, catatan khusus dosen, dan mengunduh kembali file instruksi yang sudah kamu simpan.
                </p>
            </div>

            <!-- Item 2 -->
            <div class="flex items-start gap-4">
                <!-- Bullet indikator pengganti ikon yang tidak render -->
                <div class="mt-1.5 w-2 h-2 bg-blue-600 rounded-full shrink-0"></div>
                <p class="text-sm text-gray-700">
                    <span class="font-bold text-blue-700">Update Status:</span> Di halaman detail tersebut, kamu bisa memperbarui status pengerjaan untuk melihat bar progres di dashboard bergerak otomatis.
                </p>
            </div>

        </div>
    </div>
</div>

                <div class="flex flex-col md:flex-row gap-8 items-start">
                    <div class="shrink-0 w-16 h-16 bg-blue-600 rounded-2xl flex items-center justify-center text-white text-2xl font-black shadow-lg shadow-blue-200">04</div>
                    <div class="flex-1">
                        <h3 class="text-xl font-black text-gray-800 mb-2 uppercase">Evaluasi Akhir</h3>
                        <p class="text-gray-600 leading-relaxed">
                            Pantau dashboard secara berkala. Pastikan indikator warna berubah menjadi Hijau (Selesai) sebelum tenggat waktu berakhir untuk memastikan performa akademikmu tetap maksimal.
                        </p>
                    </div>
                </div>
            <!-- ================================================================== -->
            <!-- TAMBAHKAN BLOK NOTE FITUR FUTURE RELEASE DI BAWAH SINI -->
            <!-- ================================================================== -->
            <div class="mt-16 bg-amber-50/60 border border-amber-200/80 rounded-3xl p-6 md:p-8">
                <div class="flex items-center gap-3 mb-6">
                    <!-- Indikator Badge Konstruksi -->
                    <span class="w-3 h-3 bg-amber-500 rounded-full animate-pulse"></span>
                    <h4 class="text-lg font-black text-amber-800 uppercase tracking-wide">
                        Catatan Pengembangan (Santara Future Release)
                    </h4>
                </div>

                <p class="text-sm text-amber-700 leading-relaxed mb-6">
                    Beberapa komponen antarmuka di dalam dashboard saat ini masih dalam tahap finalisasi demi menjaga kestabilan sistem utama. Fitur-fitur berikut akan segera tersedia pada pembaruan mendatang:
                </p>

                <!-- Grid Daftar Fitur Belum Tersedia -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">

                    <!-- Kalender -->
                    <div class="bg-white/80 border border-amber-100 rounded-xl p-4 flex gap-3 items-center">
                        <div class="w-2 h-2 bg-amber-400 rounded-full shrink-0"></div>
                        <span class="text-sm font-bold text-gray-700">Kalender Akademik</span>
                    </div>

                    <!-- Pengaturan -->
                    <div class="bg-white/80 border border-amber-100 rounded-xl p-4 flex gap-3 items-center">
                        <div class="w-2 h-2 bg-amber-400 rounded-full shrink-0"></div>
                        <span class="text-sm font-bold text-gray-700">Settings (Pengaturan Akun)</span>
                    </div>

                    <!-- Pencarian -->
                    <div class="bg-white/80 border border-amber-100 rounded-xl p-4 flex gap-3 items-center">
                        <div class="w-2 h-2 bg-amber-400 rounded-full shrink-0"></div>
                        <span class="text-sm font-bold text-gray-700">Search (Pencarian Tugas)</span>
                    </div>

                    <!-- Tema -->
                    <div class="bg-white/80 border border-amber-100 rounded-xl p-4 flex gap-3 items-center">
                        <div class="w-2 h-2 bg-amber-400 rounded-full shrink-0"></div>
                        <span class="text-sm font-bold text-gray-700">Mode Light / Dark</span>
                    </div>

                    <!-- Notifikasi -->
                    <div class="bg-white/80 border border-amber-100 rounded-xl p-4 flex gap-3 items-center">
                        <div class="w-2 h-2 bg-amber-400 rounded-full shrink-0"></div>
                        <span class="text-sm font-bold text-gray-700">Lonceng Notifikasi Real-time</span>
                    </div>

                    <!-- Preview Matkul -->
                    <div class="bg-white/80 border border-amber-100 rounded-xl p-4 flex gap-3 items-center">
                        <div class="w-2 h-2 bg-amber-400 rounded-full shrink-0"></div>
                        <span class="text-sm font-bold text-gray-700">Preview Mata Kuliah Baru</span>
                    </div>
                    <!-- Preview Matkul -->
                    <div class="bg-white/80 border border-amber-100 rounded-xl p-4 flex gap-3 items-center">
                        <div class="w-2 h-2 bg-amber-400 rounded-full shrink-0"></div>
                        <span class="text-sm font-bold text-gray-700">Login via Google</span>
                    </div>

                </div>
            </div>
            <!-- ================================================================== -->

            <!-- CTA Section -->
<div class="mt-16 pt-10 border-t border-gray-100 flex flex-col md:flex-row items-center justify-between gap-6">
    <!-- Tombol Kembali dengan Indikator Minimalis yang Pasti Ter-render -->
    <a href="{{ url('/') }}" class="text-sm font-black uppercase tracking-widest text-gray-400 hover:text-blue-600 transition-all flex items-center gap-3 group">
        <span class="w-1.5 h-1.5 bg-gray-300 group-hover:bg-blue-600 rounded-full transition-colors"></span>
        Kembali ke Beranda
    </a>

    <a href="{{ route('register') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-10 py-4 rounded-2xl font-black uppercase text-xs tracking-[0.2em] shadow-xl shadow-blue-200 transition-all">
        Mulai Sekarang
    </a>
</div>

        </div>
    </div>
</x-info-layout>
