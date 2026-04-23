<x-app-layout>
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-10">

        <div class="lg:col-span-8">
            <div class="flex items-end justify-between mb-8 px-2">
                <div>
                    <span class="text-[10px] font-black text-[#8e7aa3] uppercase tracking-[0.4em]">Resource Monitoring</span>
                    <h3 class="text-3xl font-black text-[#3a3045] mt-1 tracking-tighter uppercase">Academic Modules</h3>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                @forelse($subjects as $subject)
                    @php
                        // Logika Cek Tugas Telat (Overdue)
                        $hasOverdue = $subject->tasks->where('status', '!=', 'completed')->contains(function($t) {
                            return \Carbon\Carbon::parse($t->deadline)->isPast();
                        });
                    @endphp

                    <div class="bg-white rounded-[2.5rem] p-8 shadow-sm border border-gray-50 transition-all hover:shadow-xl relative group">

                        @if($hasOverdue)
                            <span class="absolute top-6 left-6 w-3 h-3 bg-red-500 rounded-full border-2 border-white animate-ping"></span>
                            <span class="absolute top-6 left-6 w-3 h-3 bg-red-500 rounded-full border-2 border-white"></span>
                        @endif

                        <div class="absolute top-8 right-8" x-data="{ open: false }">
                            <button @click="open = !open" class="text-gray-300 hover:text-[#8e7aa3] p-1 outline-none transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                                </svg>
                            </button>
                            <div x-show="open" @click.away="open = false"
                                 class="absolute right-0 mt-2 w-48 bg-white rounded-2xl shadow-xl z-50 py-2 border border-gray-50">
                                <form action="{{ route('subjects.destroy', $subject->id) }}" method="POST" onsubmit="return confirm('Hapus module ini, King?')">
                                    @csrf @method('DELETE')
                                    <button type="submit" class="w-full text-left px-5 py-3 text-[10px] font-black text-red-400 hover:bg-red-50 transition uppercase tracking-widest">
                                        🗑️ Delete Module
                                    </button>
                                </form>
                            </div>
                        </div>

                        <div class="flex justify-between items-start mb-10">
                            <div class="w-14 h-14 rounded-2xl flex items-center justify-center text-2xl"
                                 style="background-color: {{ $subject->color }}15; color: {{ $subject->color }}">📚</div>
                            <div class="text-right">
                                <span class="text-2xl font-black text-[#3a3045] tracking-tighter">{{ $subject->tasks->count() }}</span>
                                <span class="text-[10px] font-bold text-gray-400 uppercase ml-1">Tasks</span>
                            </div>
                        </div>

                        <h4 class="font-bold text-lg text-[#3a3045] mb-1 leading-tight tracking-tight">{{ $subject->name }}</h4>
                        <p class="text-[9px] text-gray-400 mb-6 font-bold uppercase opacity-60 tracking-widest italic">Live Tracking</p>

                        <div class="space-y-3 mb-10">
                            @foreach($subject->tasks->take(2) as $task)
                                <div class="flex items-center justify-between p-4 bg-[#fcfaff] rounded-2xl border border-transparent">
                                    <div class="flex items-center gap-3 overflow-hidden">
                                        <div class="w-1.5 h-1.5 rounded-full" style="background-color: {{ $subject->color }}"></div>
                                        <p class="text-[11px] font-bold text-gray-600 truncate uppercase tracking-tight">{{ $task->title }}</p>
                                    </div>
                                    <span class="text-[9px] font-black text-gray-400">{{ \Carbon\Carbon::parse($task->deadline)->format('d M') }}</span>
                                </div>
                            @endforeach
                        </div>

                        <a href="{{ route('subjects.show', $subject->id) }}"
                                class="w-full block text-center py-4 rounded-2xl text-[10px] font-black uppercase tracking-[0.2em] transition-all shadow-md active:scale-95 hover:scale-[1.02]"
                                style="background-color: {{ $subject->color }}; color: white">
                            Module Details
                        </a>
                    </div>
                @empty
                    <div class="col-span-2 py-20 text-center opacity-30 font-black uppercase tracking-[0.5em]">No Modules Active</div>
                @endforelse
            </div>
        </div>

        <div class="lg:col-span-4 space-y-10">
            <div class="bg-white rounded-[2.5rem] p-8 shadow-sm border border-gray-50">
                <div class="flex justify-between items-center mb-8">
                    <h4 class="font-black text-[#10b981] tracking-tighter uppercase text-sm">{{ now()->format('F Y') }}</h4>
                </div>
                <div class="grid grid-cols-7 gap-2 text-center">
                    @foreach(['S','M','T','W','T','F','S'] as $d)
                        <div class="text-[10px] font-black text-gray-300 mb-3 tracking-widest">{{ $d }}</div>
                    @endforeach
                    @for($i=1; $i<=31; $i++)
                        <div class="aspect-square flex items-center justify-center text-[11px] font-bold rounded-xl transition
                            {{ $i == now()->day ? 'bg-[#10b981] text-white shadow-xl shadow-[#10b981]/20 scale-110' : 'text-gray-400 hover:bg-gray-50 cursor-pointer' }}">
                            {{ $i }}
                        </div>
                    @endfor
                </div>
            </div>

            <div class="space-y-6">
                <h3 class="text-[11px] font-black text-[#3a3045] uppercase tracking-[0.3em] ml-2">Urgent Tasks</h3>
                <div class="space-y-4">
                    @forelse($upcomingTasks as $task)
                        @php $isToday = \Carbon\Carbon::parse($task->deadline)->isToday(); @endphp
                        <div class="bg-white p-5 rounded-[2rem] flex items-center gap-5 border border-gray-50 shadow-sm transition-all hover:scale-[1.03]">
                            <div class="w-12 h-12 rounded-2xl flex items-center justify-center text-xl {{ $isToday ? 'bg-orange-50' : 'bg-purple-50' }}">
                                {{ $isToday ? '🔥' : '⏳' }}
                            </div>
                            <div>
                                <h5 class="text-[11px] font-black text-[#3a3045] leading-tight uppercase tracking-tight">{{ $task->title }}</h5>
                                <p class="text-[9px] font-bold {{ $isToday ? 'text-orange-500' : 'text-gray-400' }} mt-1">
                                    {{ $isToday ? 'DEADLINE TODAY' : 'DUE: ' . \Carbon\Carbon::parse($task->deadline)->format('d F') }}
                                </p>
                            </div>
                        </div>
                    @empty
                        <p class="text-[10px] text-center text-gray-300 font-bold uppercase tracking-widest py-10 border-2 border-dashed border-gray-50 rounded-[2rem]">No urgent tasks.</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
