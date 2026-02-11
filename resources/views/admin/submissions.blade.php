<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <div>
                <h2 class="font-display font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                    Contact Submissions
                </h2>
                <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">
                    {{ $submissions->total() }} total submission{{ $submissions->total() !== 1 ? 's' : '' }}
                </p>
            </div>
        </div>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

            {{-- Flash message --}}
            @if(session('success'))
            <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 4000)"
                 class="bg-green-50 dark:bg-green-900/20 border border-green-200 dark:border-green-800 rounded-xl p-4 flex items-center gap-3">
                <svg class="w-5 h-5 text-green-600 dark:text-green-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                <p class="text-green-700 dark:text-green-300 text-sm">{{ session('success') }}</p>
            </div>
            @endif

            {{-- Stats row --}}
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                @php
                    $total    = $submissions->total();
                    $unread   = \App\Models\ContactSubmission::where('is_read', false)->count();
                    $thisWeek = \App\Models\ContactSubmission::where('created_at', '>=', now()->startOfWeek())->count();
                @endphp
                @foreach([
                    ['label' => 'Total Submissions', 'value' => $total,    'color' => 'text-blue-600 dark:text-blue-400'],
                    ['label' => 'Unread',            'value' => $unread,   'color' => 'text-purple-600 dark:text-purple-400'],
                    ['label' => 'This Week',          'value' => $thisWeek, 'color' => 'text-emerald-600 dark:text-emerald-400'],
                ] as $stat)
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-xl border border-gray-200 dark:border-gray-700 p-6">
                    <div class="{{ $stat['color'] }} text-3xl font-bold mb-1">{{ $stat['value'] }}</div>
                    <div class="text-gray-500 dark:text-gray-400 text-sm">{{ $stat['label'] }}</div>
                </div>
                @endforeach
            </div>

            {{-- Submissions table --}}
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-xl border border-gray-200 dark:border-gray-700">

                @if($submissions->isEmpty())
                <div class="text-center py-20 px-6">
                    <svg class="w-12 h-12 text-gray-300 dark:text-gray-600 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                    <h3 class="text-gray-500 dark:text-gray-400 font-medium mb-1">No submissions yet</h3>
                    <p class="text-gray-400 dark:text-gray-500 text-sm">Contact form submissions will appear here.</p>
                </div>
                @else

                <div class="overflow-x-auto">
                    <table class="w-full admin-table">
                        <thead>
                            <tr class="border-b border-gray-200 dark:border-gray-700">
                                <th class="text-gray-500 dark:text-gray-400">Contact</th>
                                <th class="text-gray-500 dark:text-gray-400">Company</th>
                                <th class="text-gray-500 dark:text-gray-400">Phone</th>
                                <th class="text-gray-500 dark:text-gray-400">Message</th>
                                <th class="text-gray-500 dark:text-gray-400">Date</th>
                                <th class="text-gray-500 dark:text-gray-400">Status</th>
                                <th class="text-gray-500 dark:text-gray-400">Action</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100 dark:divide-gray-700/50">
                            @foreach($submissions as $submission)
                            <tr class="{{ !$submission->is_read ? 'bg-blue-50/40 dark:bg-blue-900/5' : '' }}">
                                <td>
                                    <div class="flex items-center gap-3">
                                        <div class="w-9 h-9 rounded-full bg-gradient-to-br from-blue-500 to-purple-500 flex items-center justify-center text-white text-sm font-bold shrink-0">
                                            {{ strtoupper(substr($submission->name, 0, 1)) }}
                                        </div>
                                        <div>
                                            <div class="font-medium text-gray-900 dark:text-gray-100 text-sm">
                                                {{ $submission->name }}
                                                @if(!$submission->is_read)
                                                <span class="ml-1.5 inline-block w-1.5 h-1.5 rounded-full bg-blue-500 align-middle"></span>
                                                @endif
                                            </div>
                                            <div class="text-gray-400 dark:text-gray-500 text-xs">{{ $submission->email }}</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-gray-600 dark:text-gray-400">
                                    {{ $submission->company ?: '—' }}
                                </td>
                                <td class="text-gray-600 dark:text-gray-400">
                                    {{ $submission->phone ?: '—' }}
                                </td>
                                <td>
                                    <div x-data="{ expanded: false }" class="max-w-xs">
                                        <p class="text-gray-600 dark:text-gray-400 text-sm"
                                           :class="expanded ? '' : 'line-clamp-2'">
                                            {{ $submission->message }}
                                        </p>
                                        @if(strlen($submission->message) > 100)
                                        <button @click="expanded = !expanded"
                                                class="text-blue-500 hover:text-blue-600 text-xs mt-1 font-medium"
                                                x-text="expanded ? 'Show less' : 'Read more'">
                                        </button>
                                        @endif
                                    </div>
                                </td>
                                <td class="text-gray-500 dark:text-gray-500 text-xs whitespace-nowrap">
                                    <div>{{ $submission->created_at->format('M j, Y') }}</div>
                                    <div class="text-gray-400">{{ $submission->created_at->format('g:i A') }}</div>
                                </td>
                                <td>
                                    @if($submission->is_read)
                                    <span class="inline-flex items-center gap-1 px-2 py-1 rounded-full bg-gray-100 dark:bg-gray-700 text-gray-500 dark:text-gray-400 text-xs font-medium">
                                        <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                        </svg>
                                        Read
                                    </span>
                                    @else
                                    <span class="inline-flex items-center gap-1 px-2 py-1 rounded-full bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-400 text-xs font-medium">
                                        <span class="w-1.5 h-1.5 rounded-full bg-blue-500 animate-pulse"></span>
                                        New
                                    </span>
                                    @endif
                                </td>
                                <td>
                                    @if(!$submission->is_read)
                                    <form action="{{ route('admin.submissions.markRead', $submission) }}" method="POST">
                                        @csrf
                                        @method('PATCH')
                                        <button type="submit"
                                                class="text-blue-600 dark:text-blue-400 hover:text-blue-800 dark:hover:text-blue-300 text-xs font-medium transition-colors whitespace-nowrap">
                                            Mark Read
                                        </button>
                                    </form>
                                    @else
                                    <span class="text-gray-300 dark:text-gray-600 text-xs">—</span>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                {{-- Pagination --}}
                @if($submissions->hasPages())
                <div class="px-6 py-4 border-t border-gray-200 dark:border-gray-700">
                    {{ $submissions->links() }}
                </div>
                @endif

                @endif
            </div>

        </div>
    </div>
</x-app-layout>
