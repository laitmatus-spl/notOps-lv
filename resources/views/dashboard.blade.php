<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                NotOps Admin Dashboard
            </h2>
            <a href="{{ route('admin.submissions') }}"
               class="inline-flex items-center gap-2 px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium rounded-lg transition-colors">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                </svg>
                View Submissions
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

            {{-- Quick stats --}}
            @php
                $total  = \App\Models\ContactSubmission::count();
                $unread = \App\Models\ContactSubmission::where('is_read', false)->count();
                $recent = \App\Models\ContactSubmission::latest()->first();
            @endphp

            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-xl border border-gray-200 dark:border-gray-700 p-6">
                    <div class="text-3xl font-bold text-blue-600 dark:text-blue-400 mb-1">{{ $total }}</div>
                    <div class="text-gray-500 dark:text-gray-400 text-sm">Total Contact Submissions</div>
                </div>
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-xl border border-gray-200 dark:border-gray-700 p-6">
                    <div class="text-3xl font-bold text-purple-600 dark:text-purple-400 mb-1">{{ $unread }}</div>
                    <div class="text-gray-500 dark:text-gray-400 text-sm">Unread Submissions</div>
                </div>
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-xl border border-gray-200 dark:border-gray-700 p-6">
                    <div class="text-3xl font-bold text-emerald-600 dark:text-emerald-400 mb-1">
                        {{ \App\Models\ContactSubmission::where('created_at', '>=', now()->startOfWeek())->count() }}
                    </div>
                    <div class="text-gray-500 dark:text-gray-400 text-sm">This Week</div>
                </div>
            </div>

            {{-- Latest submission preview --}}
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-xl border border-gray-200 dark:border-gray-700">
                <div class="p-6 border-b border-gray-200 dark:border-gray-700 flex items-center justify-between">
                    <h3 class="text-gray-900 dark:text-gray-100 font-semibold">Latest Submission</h3>
                    <a href="{{ route('admin.submissions') }}" class="text-blue-600 dark:text-blue-400 text-sm hover:underline">View all →</a>
                </div>
                <div class="p-6">
                    @if($recent)
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 rounded-full bg-gradient-to-br from-blue-500 to-purple-500 flex items-center justify-center text-white font-bold text-sm shrink-0">
                            {{ strtoupper(substr($recent->name, 0, 1)) }}
                        </div>
                        <div class="min-w-0">
                            <div class="flex items-center gap-2 mb-1">
                                <span class="text-gray-900 dark:text-gray-100 font-medium text-sm">{{ $recent->name }}</span>
                                @if($recent->company)
                                <span class="text-gray-400 text-xs">· {{ $recent->company }}</span>
                                @endif
                                @if(!$recent->is_read)
                                <span class="px-1.5 py-0.5 bg-blue-100 dark:bg-blue-900/30 text-blue-600 dark:text-blue-400 text-xs rounded-full">New</span>
                                @endif
                            </div>
                            <p class="text-gray-500 dark:text-gray-400 text-sm line-clamp-2">{{ $recent->message }}</p>
                            <p class="text-gray-400 dark:text-gray-500 text-xs mt-2">{{ $recent->created_at->diffForHumans() }}</p>
                        </div>
                    </div>
                    @else
                    <p class="text-gray-400 dark:text-gray-500 text-sm">No submissions yet.</p>
                    @endif
                </div>
            </div>

            {{-- Quick links --}}
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-xl border border-gray-200 dark:border-gray-700 p-6">
                <h3 class="text-gray-900 dark:text-gray-100 font-semibold mb-4">Quick Links</h3>
                <div class="flex flex-wrap gap-3">
                    <a href="{{ route('home') }}" target="_blank"
                       class="inline-flex items-center gap-2 px-4 py-2 bg-gray-100 dark:bg-gray-700 hover:bg-gray-200 dark:hover:bg-gray-600 text-gray-700 dark:text-gray-300 text-sm font-medium rounded-lg transition-colors">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                        </svg>
                        View Public Site
                    </a>
                    <a href="{{ route('contact.index') }}" target="_blank"
                       class="inline-flex items-center gap-2 px-4 py-2 bg-gray-100 dark:bg-gray-700 hover:bg-gray-200 dark:hover:bg-gray-600 text-gray-700 dark:text-gray-300 text-sm font-medium rounded-lg transition-colors">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        Contact Page
                    </a>
                    <a href="{{ route('admin.submissions') }}"
                       class="inline-flex items-center gap-2 px-4 py-2 bg-blue-100 dark:bg-blue-900/30 hover:bg-blue-200 dark:hover:bg-blue-900/50 text-blue-700 dark:text-blue-400 text-sm font-medium rounded-lg transition-colors">
                        All Submissions
                        @if($unread > 0)
                        <span class="px-1.5 py-0.5 bg-blue-600 text-white text-xs rounded-full">{{ $unread }}</span>
                        @endif
                    </a>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
