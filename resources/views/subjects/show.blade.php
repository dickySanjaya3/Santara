<x-app-layout>
    <div class="max-w-5xl mx-auto pb-20">
        <div class="flex items-center justify-between mb-12">
            <a href="{{ route('dashboard') }}" class="flex items-center gap-3 group">
                <div class="w-10 h-10 bg-white rounded-xl shadow-sm flex items-center justify-center text-gray-400 group-hover:text-[#8e7aa3] transition-all">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </div>
                <span class="text-[10px] font-black text-gray-400 uppercase tracking-[0.3em]">Back to Dashboard</span>
            </a>

            <div class="flex items-center gap-4">
                <span class="text-[10px] font-black text-[#8e7aa3] uppercase tracking-[0.4em]">Academic Year 2026</span>
                <div class="w-2 h-2 rounded-full bg-green-400 animate-pulse"></div>
            </div>
        </div>

        <div class="bg-white rounded-[3rem] p-12 shadow-sm border border-gray-50 mb-10 relative overflow-hidden">
            <div class="absolute top-0 right-0 w-64 h-64 opacity-[0.03] -mr-20 -mt-20 rotate-12" style="color: {{ $subject->color }}">
                <svg fill="currentColor" viewBox="0 0 24 24"><path d="M12 3L1 9l11 6 9-4.91V17h2V9L12 3z"/></svg>
            </div>

            <div class="relative z-10">
                <div class="w-16 h-16 rounded-[1.5rem] flex items-center justify-center text-3xl mb-6 shadow-lg shadow-gray-100" style="background-color: {{ $subject->color }}15; color: {{ $subject->color }}">
                    📚
                </div>
                <h1 class="text-4xl font-black text-[#3a3045] uppercase tracking-tighter mb-2">{{ $subject->name }}</h1>
                <p class="text-xs font-bold text-gray-400 uppercase tracking-widest opacity-70">Informatics Department • State University of Surabaya</p>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10">
            <div class="lg:col-span-8">
                <h3 class="text-[11px] font-black text-[#3a3045] uppercase tracking-[0.3em] mb-8 ml-2">Task Itinerary</h3>

                <div class="space-y-4">
                    @forelse($tasks as $index => $task)
                        @php
                            $isOverdue = \Carbon\Carbon::parse($task->deadline)->isPast() && $task->status !== 'completed';
                            $isDone = $task->status === 'completed';
                        @endphp

                        <div class="bg-white p-6 rounded-[2rem] border {{ $isOverdue ? 'border-red-100 bg-red-50/20' : 'border-gray-50' }} flex items-center justify-between transition-all hover:shadow-xl hover:shadow-gray-100 group {{ $isDone ? 'opacity-50' : '' }}">
                            <div class="flex items-center gap-6">
                                <div class="w-12 h-12 rounded-2xl flex items-center justify-center font-black text-sm relative" style="background-color: {{ $subject->color }}10; color: {{ $subject->color }}">
                                    {{ $index + 1 }}
                                    @if($isOverdue)
                                        <span class="absolute -top-1 -right-1 w-3 h-3 bg-red-500 rounded-full border-2 border-white animate-pulse"></span>
                                    @endif
                                </div>
                                <div>
                                    <h4 class="text-sm font-black text-[#3a3045] uppercase tracking-tight {{ $isDone ? 'line-through' : '' }}">{{ $task->title }}</h4>
                                    <div class="flex items-center gap-3 mt-1">
                                        <span class="text-[9px] font-bold {{ $isOverdue ? 'text-red-500' : 'text-gray-400' }} uppercase tracking-widest">
                                            {{ $isOverdue ? '⚠️ Overdue' : 'Due: ' . \Carbon\Carbon::parse($task->deadline)->format('d F Y') }}
                                        </span>
                                        @if($isDone)
                                            <span class="w-1 h-1 rounded-full bg-gray-200"></span>
                                            <span class="text-[9px] font-black text-green-500 uppercase tracking-widest">Completed</span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            @if(!$isDone)
                            <form action="{{ route('tasks.updateStatus', $task->id) }}" method="POST">
                                @csrf @method('PATCH')
                                <button type="submit" class="w-10 h-10 rounded-xl bg-gray-50 flex items-center justify-center text-gray-300 hover:bg-green-500 hover:text-white transition-all shadow-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                </button>
                            </form>
                            @endif
                        </div>
                    @empty
                        <div class="py-20 text-center bg-white rounded-[2.5rem] border-2 border-dashed border-gray-50">
                            <p class="text-[10px] font-black text-gray-300 uppercase tracking-[0.5em]">No Tasks Assigned Yet</p>
                        </div>
                    @endforelse
                </div>
            </div>

            <div class="lg:col-span-4">
                <h3 class="text-[11px] font-black text-[#3a3045] uppercase tracking-[0.3em] mb-8 ml-2">Analytics</h3>
                <div class="bg-white rounded-[2.5rem] p-8 shadow-sm border border-gray-50 space-y-8">
                    <div>
                        <p class="text-[9px] font-black text-gray-400 uppercase tracking-widest mb-3">Completion Rate</p>
                        @php
                            $total = $tasks->count();
                            $done = $tasks->where('status', 'completed')->count();
                            $percent = $total > 0 ? ($done / $total) * 100 : 0;
                        @endphp
                        <div class="flex items-end gap-2 mb-2">
                            <span class="text-4xl font-black text-[#3a3045] tracking-tighter">{{ round($percent) }}%</span>
                            <span class="text-[10px] font-bold text-gray-300 uppercase mb-1.5">Progress</span>
                        </div>
                        <div class="w-full h-2 bg-gray-100 rounded-full overflow-hidden">
                            <div class="h-full transition-all duration-1000" style="width: {{ $percent }}%; background-color: {{ $subject->color }}"></div>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-4 pt-4 border-t border-gray-50">
                        <div>
                            <p class="text-2xl font-black text-[#3a3045] tracking-tighter">{{ $tasks->where('status', '!=', 'completed')->count() }}</p>
                            <p class="text-[9px] font-black text-gray-400 uppercase tracking-widest">Active</p>
                        </div>
                        <div>
                            <p class="text-2xl font-black text-green-500 tracking-tighter">{{ $done }}</p>
                            <p class="text-[9px] font-black text-gray-400 uppercase tracking-widest">Done</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
