<x-app-layout>
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-10">

        <div class="lg:col-span-8">
            <div class="flex items-end justify-between mb-8 px-2">
                <div>
                    <span class="text-[10px] font-extrabold text-[#8e7aa3] uppercase tracking-[0.4em]">Resource Monitoring</span>
                    <h3 class="text-3xl font-extrabold text-[#3a3045] mt-1 tracking-tighter uppercase">Academic Modules</h3>
                </div>
                <button class="text-[11px] font-extrabold text-[#10b981] bg-white px-5 py-2.5 rounded-xl shadow-sm hover:bg-gray-50 transition uppercase tracking-wider">View All</button>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                @forelse($subjects as $subject)
                    <div class="bg-white rounded-[2rem] p-8 shadow-sm border border-gray-50 transition-all hover:shadow-xl hover:shadow-[#8e7aa3]/5 duration-500 group">
                        <div class="flex justify-between items-start mb-10">
                            <div class="w-14 h-14 rounded-2xl flex items-center justify-center text-2xl transition-transform group-hover:scale-110 duration-500"
                                 style="background-color: {{ $subject->color }}15; color: {{ $subject->color }}">
                                📚
                            </div>
                            <div class="text-right">
                                <p class="text-[9px] font-extrabold text-gray-300 uppercase tracking-widest mb-1 italic">Counter</p>
                                <span class="text-2xl font-extrabold text-[#3a3045] tracking-tighter">{{ $subject->tasks->count() }}</span>
                                <span class="text-[10px] font-bold text-gray-400 uppercase tracking-tighter ml-1">Tasks</span>
                            </div>
                        </div>

                        <h4 class="font-bold text-lg text-[#3a3045] mb-2 leading-tight tracking-tight group-houver:text-[#8e7aa3] transition-colors">{{ $subject->name }}</h4>
                        <p class="text-[10px] text-gray-400 mb-6 font-semibold tracking-wide uppercase opacity-70">Informatics Course Project Tracking.</p>

                        <div class="space-y-3 mb-10">
                            @foreach($subject->tasks->take(2) as $task)
                                <div class="flex items-center justify-between p-3.5 bg-[#fcfaff] rounded-xl border border-transparent hover:border-gray-100 transition">
                                    <div class="flex items-center gap-3">
                                        <div class="w-2 h-2 rounded-full shadow-sm" style="background-color: {{ $subject->color }}"></div>
                                        <p class="text-[11px] font-bold text-gray-600 truncate max-w-[130px]">{{ $task->title }}</p>
                                    </div>
                                    <span class="text-[9px] font-extrabold text-gray-400">{{ \Carbon\Carbon::parse($task->deadline)->format('d M') }}</span>
                                </div>
                            @endforeach
                        </div>

                        <button class="w-full py-4 rounded-2xl text-[10px] font-extrabold uppercase tracking-[0.2em] transition-all shadow-md active:scale-95"
                                style="background-color: {{ $subject->color }}; color: white">
                            Module Details
                        </button>
                    </div>
                @empty
                    <div class="col-span-2 bg-white rounded-[2rem] p-16 text-center border-2 border-dashed border-gray-100">
                        <p class="text-sm text-gray-400 font-bold italic uppercase tracking-widest">No modules registered yet.</p>
                    </div>
                @endforelse
            </div>
        </div>

        <div class="lg:col-span-4 space-y-10">
            <div class="bg-white rounded-[2.5rem] p-8 shadow-sm border border-gray-50">
                <div class="flex justify-between items-center mb-8">
                    <h4 class="font-extrabold text-[#10b981] tracking-tight uppercase text-sm">{{ now()->format('F Y') }}</h4>
                    <div class="flex gap-1">
                        <div class="w-1.5 h-1.5 rounded-full bg-[#10b981]"></div>
                        <div class="w-1.5 h-1.5 rounded-full bg-gray-100"></div>
                    </div>
                </div>
                <div class="grid grid-cols-7 gap-2 text-center">
                    @foreach(['S','M','T','W','T','F','S'] as $d)
                        <div class="text-[10px] font-extrabold text-gray-300 mb-3 tracking-widest">{{ $d }}</div>
                    @endforeach
                    @for($i=1; $i<=30; $i++)
                        <div class="aspect-square flex items-center justify-center text-[11px] font-bold rounded-xl transition cursor-pointer
                            {{ $i == now()->day ? 'bg-[#10b981] text-white shadow-lg shadow-[#10b981]/30' : 'text-gray-500 hover:bg-gray-50' }}">
                            {{ $i }}
                        </div>
                    @endfor
                </div>
            </div>

            <div class="space-y-6">
                <h3 class="text-[11px] font-extrabold text-[#3a3045] uppercase tracking-[0.25em] ml-2">Urgent Notifications</h3>
                <div class="space-y-4">
                    @forelse($upcomingTasks as $task)
                        @php $isToday = \Carbon\Carbon::parse($task->deadline)->isToday(); @endphp
                        <div class="bg-white p-5 rounded-3xl flex items-center gap-5 border border-gray-50 shadow-sm transition-hover hover:scale-[1.02]">
                            <div class="w-12 h-12 rounded-2xl flex items-center justify-center text-xl {{ $isToday ? 'bg-orange-50' : 'bg-[#8e7aa3]/5' }}">
                                {{ $isToday ? '🔥' : '⏳' }}
                            </div>
                            <div>
                                <h5 class="text-[11px] font-extrabold text-[#3a3045] leading-tight mb-1 uppercase tracking-tight">{{ $task->title }}</h5>
                                <p class="text-[9px] font-extrabold {{ $isToday ? 'text-orange-500' : 'text-gray-400' }}">
                                    {{ $isToday ? 'ACTION REQUIRED TODAY' : 'DEADLINE: ' . \Carbon\Carbon::parse($task->deadline)->format('d F') }}
                                </p>
                            </div>
                        </div>
                    @empty
                        <p class="text-[10px] text-center text-gray-400 font-bold uppercase tracking-widest">All tasks clear!</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
