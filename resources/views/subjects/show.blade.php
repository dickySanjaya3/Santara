<x-app-layout>
    <div class="max-w-6xl mx-auto px-4 py-8">
        <div class="flex flex-col md:flex-row md:items-center justify-between mb-10 gap-4">
            <div class="flex items-center gap-4">
                <a href="{{ route('dashboard') }}" class="w-10 h-10 bg-white rounded-2xl shadow-sm border border-gray-50 flex items-center justify-center text-gray-400 hover:text-[#10b981] transition-all hover:shadow-md">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                    </svg>
                </a>
                <div>
                    <h1 class="text-2xl font-black text-[#3a3045] uppercase tracking-tighter leading-none">{{ $subject->name }}</h1>
                    <p class="text-[10px] font-bold text-gray-400 uppercase tracking-[0.2em] mt-1 italic">Resource Itinerary • Santara</p>
                </div>
            </div>

            <div class="flex items-center gap-3 bg-white px-4 py-2 rounded-2xl border border-gray-50 shadow-sm">
                <div class="w-2 h-2 rounded-full bg-green-500 animate-pulse"></div>
                <span class="text-[10px] font-black text-[#3a3045] uppercase tracking-widest">Active Semester</span>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">

            <div class="lg:col-span-8 space-y-6">
                <div class="flex items-center justify-between px-2">
                    <h3 class="text-[11px] font-black text-[#8e7aa3] uppercase tracking-[0.3em]">Current Assignments</h3>
                    <span class="text-[10px] font-bold text-gray-300 uppercase italic">{{ $tasks->where('status', '!=', 'completed')->count() }} Remaining</span>
                </div>

                <div class="space-y-4">
                    @forelse($tasks as $index => $task)
                        @php
                            $isOverdue = \Carbon\Carbon::parse($task->deadline)->isPast() && $task->status !== 'completed';
                            $isDone = $task->status === 'completed';
                        @endphp

                        <div class="group relative bg-white p-6 rounded-[2.5rem] border-2 {{ $isOverdue ? 'border-red-100 bg-red-50/10' : 'border-transparent shadow-sm' }} flex items-start justify-between transition-all hover:shadow-xl hover:-translate-y-1 {{ $isDone ? 'opacity-40 grayscale-[0.5]' : '' }}">

                            <div class="flex items-start gap-6 w-full">
                                <div class="shrink-0 w-12 h-12 rounded-2xl flex items-center justify-center font-black text-sm transition-transform group-hover:scale-110"
                                     style="background-color: {{ $subject->color }}15; color: {{ $subject->color }}">
                                    {{ $index + 1 }}
                                </div>

                                <div class="flex-1 min-w-0">
                                    <div class="flex items-center gap-3">
                                        <h4 class="text-base font-black text-[#3a3045] uppercase tracking-tight {{ $isDone ? 'line-through' : '' }}">
                                            {{ $task->title }}
                                        </h4>
                                        @if($isOverdue)
                                            <span class="px-2 py-0.5 bg-red-500 text-white text-[8px] font-black rounded-lg uppercase animate-pulse">Overdue</span>
                                        @endif
                                    </div>

                                    @if($task->description)
                                        <p class="text-[11px] font-medium text-gray-500 mt-2 leading-relaxed line-clamp-2 group-hover:line-clamp-none transition-all">
                                            {{ $task->description }}
                                        </p>
                                    @endif

                                    <div class="flex items-center gap-4 mt-4">
                                        <div class="flex items-center gap-1.5 text-[9px] font-black {{ $isOverdue ? 'text-red-500' : 'text-gray-400' }} uppercase tracking-widest">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                            {{ \Carbon\Carbon::parse($task->deadline)->translatedFormat('d M Y • H:i') }}
                                        </div>
                                        <span class="text-[9px] font-bold text-gray-300 italic">
                                            ({{ \Carbon\Carbon::parse($task->deadline)->diffForHumans() }})
                                        </span>
                                    </div>
                                </div>
                            </div>

                            @if(!$isDone)
                            <form action="{{ route('tasks.updateStatus', $task->id) }}" method="POST" class="ml-4">
                                @csrf @method('PATCH')
                                <button type="submit" class="w-12 h-12 rounded-2xl bg-[#fcfaff] border border-gray-100 flex items-center justify-center text-gray-200 hover:bg-[#10b981] hover:text-white hover:border-[#10b981] transition-all shadow-sm active:scale-90 group/btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" />
                                    </svg>
                                </button>
                            </form>
                            @else
                            <div class="w-12 h-12 flex items-center justify-center text-green-500 bg-green-50 rounded-2xl">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            @endif
                        </div>
                    @empty
                        <div class="py-24 text-center bg-white rounded-[3rem] border-2 border-dashed border-gray-100">
                            <span class="text-4xl mb-4 block">🥳</span>
                            <p class="text-[10px] font-black text-gray-300 uppercase tracking-[0.5em]">All tasks are finished, King!</p>
                        </div>
                    @endforelse
                </div>
            </div>

            <div class="lg:col-span-4 sticky top-8">
                <h3 class="text-[11px] font-black text-[#8e7aa3] uppercase tracking-[0.3em] mb-6 ml-2">Performance</h3>

                <div class="bg-[#3a3045] rounded-[2.5rem] p-8 text-white shadow-2xl shadow-purple-900/20 relative overflow-hidden mb-6">
                    <div class="absolute -right-4 -bottom-4 w-24 h-24 bg-white/5 rounded-full"></div>

                    <p class="text-[9px] font-black text-white/40 uppercase tracking-widest mb-2">Subject Progress</p>
                    @php
                        $total = $tasks->count();
                        $done = $tasks->where('status', 'completed')->count();
                        $percent = $total > 0 ? ($done / $total) * 100 : 0;
                    @endphp
                    <h2 class="text-5xl font-black tracking-tighter mb-6">{{ round($percent) }}<span class="text-xl text-white/30">%</span></h2>

                    <div class="w-full h-2 bg-white/10 rounded-full overflow-hidden">
                        <div class="h-full bg-[#10b981] shadow-[0_0_15px_rgba(16,185,129,0.5)] transition-all duration-1000" style="width: {{ $percent }}%"></div>
                    </div>

                    <div class="grid grid-cols-2 gap-4 mt-8 pt-6 border-t border-white/5">
                        <div>
                            <p class="text-xs font-black">{{ $total - $done }}</p>
                            <p class="text-[8px] font-bold text-white/40 uppercase tracking-widest">Active Tasks</p>
                        </div>
                        <div class="text-right">
                            <p class="text-xs font-black text-green-400">{{ $done }}</p>
                            <p class="text-[8px] font-bold text-white/40 uppercase tracking-widest">Completed</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-[2rem] p-6 border border-gray-50 shadow-sm">
                    <p class="text-[9px] font-black text-gray-400 uppercase tracking-widest mb-4">Course Info</p>
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 rounded-xl flex items-center justify-center text-sm" style="background-color: {{ $subject->color }}15; color: {{ $subject->color }}">🏢</div>
                        <p class="text-[10px] font-black text-[#3a3045] uppercase tracking-tight">Faculty of Engineering</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
