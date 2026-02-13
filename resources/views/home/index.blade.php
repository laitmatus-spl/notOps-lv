@extends('layouts.public')

@section('title', 'NotOps — Transform Your Business with Smart Automation & AI')
@section('meta_description', 'NotOps provides end-to-end Technical Audit, AI Integration Strategy, and Execution Support to optimize processes, workforce utilization, finance planning, and operational efficiency.')

@section('content')

    {{-- ============================================================
     HERO SECTION — Hook Them
     ============================================================ --}}
    <section class="relative min-h-screen flex items-center overflow-hidden pt-20">

        {{-- Glow orbs --}}
        <div class="glow-orb w-[700px] h-[700px] bg-electric-blue/8 -top-60 -left-60"></div>
        <div class="glow-orb w-[600px] h-[600px] bg-neon-purple/8 -bottom-60 -right-60" style="animation-delay: 1.5s;"></div>
        <div class="glow-orb w-[400px] h-[400px] bg-neon-cyan/4 top-1/3 left-1/2 -translate-x-1/2"></div>

        {{-- Subtle grid --}}
        <div class="absolute inset-0 pointer-events-none"
            style="background-image: linear-gradient(rgba(41,121,255,0.025) 1px, transparent 1px), linear-gradient(90deg, rgba(41,121,255,0.025) 1px, transparent 1px); background-size: 72px 72px;">
        </div>

        {{-- Radial vignette --}}
        <div class="absolute inset-0 pointer-events-none"
            style="background: radial-gradient(ellipse 80% 60% at 50% 50%, transparent 40%, rgba(5,9,20,0.8) 100%);"></div>

        <div class="section-container relative z-10 py-28 lg:py-36">
            <div class="max-w-5xl mx-auto text-center">

                {{-- Eyebrow --}}
                <div class="mb-8 animate-[fade-up_0.5s_ease-out_both]">
                    <span class="section-label">
                        <span class="w-1.5 h-1.5 rounded-full bg-electric-blue inline-block animate-[glow-pulse_2s_infinite]"></span>
                        AI-Powered Technical & Operational Audits
                    </span>
                </div>

                {{-- Headline --}}
                <h1 class="text-white mb-6 animate-[fade-up_0.6s_0.1s_ease-out_both] font-display font-extrabold tracking-tight"
                    style="font-size: clamp(2.75rem, 6.5vw, 5.25rem); line-height: 1.05; letter-spacing: -0.035em;">
                    Transform Your Business with <span class="gradient-text">Smart Automation & AI</span>
                </h1>

                {{-- Sub-headline --}}
                <p class="text-white/55 text-lg lg:text-xl leading-relaxed max-w-3xl mx-auto mb-4 animate-[fade-up_0.6s_0.2s_ease-out_both]">
                    We help companies identify automation opportunities, reduce operational costs, improve production efficiency, and implement AI-driven transformation to stay ahead of competitors.
                </p>
                <p class="text-white/35 text-base max-w-2xl mx-auto mb-12 animate-[fade-up_0.6s_0.25s_ease-out_both]">
                    NotOps provides end-to-end Technical Audit, AI Integration Strategy, and Execution Support to optimize processes, workforce utilization, finance planning, and operational efficiency.
                </p>

                {{-- CTAs --}}
                <div class="flex flex-col sm:flex-row items-center justify-center gap-4 mb-16 animate-[fade-up_0.6s_0.3s_ease-out_both]">
                    <a href="{{ route('contact.index') }}" class="btn-primary px-9 py-4 text-base">
                        <span>Book a Free Strategy Call</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                    <a href="{{ route('contact.index') }}" class="btn-secondary px-9 py-4 text-base">
                        Get Your Technical Audit Report
                    </a>
                </div>

                {{-- Trust bar --}}
                <div class="flex flex-wrap items-center justify-center gap-x-8 gap-y-3 animate-[fade-up_0.6s_0.4s_ease-out_both]">
                    @foreach (['End-to-End Audit & Execution', 'AI-Native Methodology', 'ROI-Focused Strategy', 'Avg. 30-50% Cost Reduction'] as $trust)
                        <div class="flex items-center gap-2 text-white/30 text-sm">
                            <svg class="w-4 h-4 text-electric-blue shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span>{{ $trust }}</span>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>

        {{-- Scroll cue --}}
        <div class="absolute bottom-8 left-1/2 -translate-x-1/2 flex flex-col items-center gap-2 text-white/15 animate-[float_3s_infinite]">
            <span class="text-xs tracking-[0.2em] uppercase">Scroll</span>
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 9l-7 7-7-7" />
            </svg>
        </div>
    </section>


    {{-- ============================================================
     PROBLEM SECTION — Agitate the Pain
     ============================================================ --}}
    <section id="problem" class="section-padding relative overflow-hidden">
        <div class="glow-orb w-96 h-96 bg-neon-purple/6 -top-10 right-0"></div>

        <div class="section-container">

            <div class="text-center mb-16">
                <span class="section-label mb-6">The Real Problem</span>
                <h2 class="section-title text-white mt-4 mb-5">
                    Your Company Is Losing Time, Money &<br>
                    <span class="gradient-text">Competitive Edge</span>
                </h2>
                <p class="text-white/45 text-lg max-w-2xl mx-auto leading-relaxed">
                    Without a structured technical audit, companies operate on assumptions — not data.
                </p>
            </div>

            {{-- Pain point cards --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5 mb-14">
                @foreach ([
                    [
                        'icon_path' => 'M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z',
                        'icon_color' => 'from-rose-500/20 to-pink-500/20',
                        'title' => 'Manual Processes Slowing Operations',
                        'desc' => 'Repetitive tasks wasting workforce productivity and creating bottlenecks across departments.',
                    ],
                    [
                        'icon_path' => 'M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 0V6m0 1v1m0 4v4m0 4v1m0 0v-1',
                        'icon_color' => 'from-amber-500/20 to-orange-500/20',
                        'title' => 'Poor Finance Visibility',
                        'desc' => 'Lack of clarity in capital allocation and expense tracking leading to budget inefficiencies.',
                    ],
                    [
                        'icon_path' => 'M13 10V3L4 14h7v7l9-11h-7z',
                        'icon_color' => 'from-violet-500/20 to-purple-500/20',
                        'title' => 'Production Inefficiencies',
                        'desc' => 'Increasing cost per unit with no clear strategy to identify and eliminate bottlenecks.',
                    ],
                    [
                        'icon_path' => 'M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z',
                        'icon_color' => 'from-blue-500/20 to-cyan-500/20',
                        'title' => 'No Structured AI Strategy',
                        'desc' => 'Competitors are adopting automation faster while you lack an execution roadmap.',
                    ],
                ] as $problem)
                    <div class="glass-card p-7 group">
                        <div class="w-12 h-12 rounded-xl bg-gradient-to-br {{ $problem['icon_color'] }} border border-white/8 flex items-center justify-center mb-5">
                            <svg class="w-6 h-6 text-white/70" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="{{ $problem['icon_path'] }}" />
                            </svg>
                        </div>
                        <h3 class="text-white font-display font-700 text-base mb-3">{{ $problem['title'] }}</h3>
                        <p class="text-white/45 text-sm leading-relaxed">{{ $problem['desc'] }}</p>
                    </div>
                @endforeach
            </div>

            {{-- Call-out strip --}}
            <div class="glass-card p-6 lg:p-8 flex flex-col lg:flex-row items-center justify-between gap-6 border-electric-blue/15">
                <div class="text-center lg:text-left">
                    <p class="text-white font-display font-700 text-xl mb-1">These are not edge cases. They are the norm.</p>
                    <p class="text-white/45 text-sm">Without structured technical audit, companies operate on assumptions — not data.</p>
                </div>
                <a href="{{ route('contact.index') }}" class="btn-primary shrink-0 px-7 py-3">
                    <span>See If This Is You</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
            </div>

        </div>
    </section>

    <div class="divider"></div>

    {{-- ============================================================
     SOLUTION SECTION — Show the Relief
     ============================================================ --}}
    <section id="solution" class="section-padding relative overflow-hidden">
        <div class="glow-orb w-[500px] h-[500px] bg-electric-blue/6 top-1/2 -left-32 -translate-y-1/2"></div>

        <div class="section-container">

            <div class="text-center mb-16">
                <span class="section-label mb-6">The NotOps Method</span>
                <h2 class="section-title text-white mt-4 mb-5">
                    We Identify, Optimize &<br>
                    <span class="gradient-text">Execute</span>
                </h2>
                <p class="text-white/45 text-lg max-w-2xl mx-auto leading-relaxed">
                    At NotOps, we conduct a deep technical audit to identify opportunities across every dimension of your business.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">

                @php
                    $solutionPillars = [
                        [
                            'number' => '01',
                            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>',
                            'title' => 'Automation Opportunities',
                            'color' => 'from-blue-500/20 to-cyan-500/20',
                            'border' => 'border-blue-500/20',
                            'items' => [
                                'Repetitive operational tasks',
                                'Backend workflows',
                                'Reporting & documentation',
                                'Inventory & production systems',
                            ],
                        ],
                        [
                            'number' => '02',
                            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>',
                            'title' => 'AI Implementation Areas',
                            'color' => 'from-violet-500/20 to-purple-500/20',
                            'border' => 'border-violet-500/20',
                            'items' => [
                                'Customer support AI',
                                'Predictive analytics',
                                'Demand forecasting',
                                'Intelligent dashboards & smart reporting',
                            ],
                        ],
                        [
                            'number' => '03',
                            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/>',
                            'title' => 'Workforce Optimization',
                            'color' => 'from-emerald-500/20 to-teal-500/20',
                            'border' => 'border-emerald-500/20',
                            'items' => [
                                'Task reallocation',
                                'Skill-based restructuring',
                                'Removing redundant roles',
                                'Performance tracking systems',
                            ],
                        ],
                        [
                            'number' => '04',
                            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 3H5a2 2 0 00-2 2v4m6-6h10a2 2 0 012 2v4M9 3v18m0 0h10a2 2 0 002-2V9M9 21H5a2 2 0 01-2-2V9m0 0h18"/>',
                            'title' => 'Process Improvement',
                            'color' => 'from-orange-500/20 to-amber-500/20',
                            'border' => 'border-orange-500/20',
                            'items' => [
                                'SOP optimization',
                                'Workflow redesign',
                                'Lean system implementation',
                                'Digital transformation roadmap',
                            ],
                        ],
                        [
                            'number' => '05',
                            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z"/>',
                            'title' => 'Production Efficiency',
                            'color' => 'from-rose-500/20 to-pink-500/20',
                            'border' => 'border-rose-500/20',
                            'items' => [
                                'Bottleneck identification',
                                'Cost-per-unit reduction',
                                'Capacity optimization',
                                'Smart monitoring systems',
                            ],
                        ],
                        [
                            'number' => '06',
                            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 0V6m0 1v1m0 4v4m0 4v1m0 0v-1"/>',
                            'title' => 'Finance & Capital Optimization',
                            'color' => 'from-cyan-500/20 to-sky-500/20',
                            'border' => 'border-cyan-500/20',
                            'items' => [
                                'Expense leakage identification',
                                'ROI-based automation investment',
                                'Budget allocation optimization',
                                'Cashflow efficiency planning',
                            ],
                        ],
                    ];
                @endphp

                @foreach ($solutionPillars as $pillar)
                    <div class="glass-card p-7 group relative overflow-hidden cursor-default"
                        style="transition: transform 0.35s ease, box-shadow 0.35s ease, border-color 0.35s ease;">
                        <div class="absolute inset-0 bg-gradient-to-br {{ $pillar['color'] }} opacity-0 group-hover:opacity-100 transition-opacity duration-500 rounded-2xl pointer-events-none"></div>

                        <div class="relative z-10">
                            <div class="flex items-start justify-between mb-5">
                                <div class="w-11 h-11 rounded-xl bg-gradient-to-br {{ $pillar['color'] }} border {{ $pillar['border'] }} flex items-center justify-center shrink-0">
                                    <svg class="w-5 h-5 text-white/80" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        {!! $pillar['icon'] !!}
                                    </svg>
                                </div>
                                <span class="text-white/8 font-display font-800 text-5xl leading-none select-none">{{ $pillar['number'] }}</span>
                            </div>

                            <h3 class="text-white font-display font-700 text-lg mb-4">{{ $pillar['title'] }}</h3>

                            <ul class="space-y-2.5">
                                @foreach ($pillar['items'] as $item)
                                    <li class="flex items-start gap-2.5 text-white/50 text-sm group-hover:text-white/70 transition-colors leading-snug">
                                        <svg class="w-4 h-4 text-electric-blue shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                        {{ $item }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endforeach

            </div>

        </div>
    </section>

    <div class="divider"></div>

    {{-- ============================================================
     PROOF SECTION — Show Others Love It
     ============================================================ --}}
    <section id="results" class="section-padding relative overflow-hidden">
        <div class="glow-orb w-[500px] h-[500px] bg-electric-blue/7 -bottom-24 left-1/2 -translate-x-1/2"></div>

        <div class="section-container">

            <div class="text-center mb-14">
                <span class="section-label mb-6">Proven ROI</span>
                <h2 class="section-title text-white mt-4 mb-5">
                    Real Impact.<br>
                    <span class="gradient-text">Real Results.</span>
                </h2>
                <p class="text-white/45 text-lg max-w-xl mx-auto">
                    Our engagements are measured by business outcomes — not deliverables, not hours billed.
                </p>
            </div>

            {{-- 5 metric cards --}}
            <div class="grid grid-cols-2 lg:grid-cols-5 gap-5 mb-14">
                @foreach ([
                    ['metric' => '30-50%', 'label' => 'Reduction in manual operations', 'desc' => 'via automation & AI'],
                    ['metric' => '20-40%', 'label' => 'Improvement in production efficiency', 'desc' => 'measured at 6 months'],
                    ['metric' => '15-25%', 'label' => 'Reduction in operational cost', 'desc' => 'across total spend'],
                    ['metric' => '100%', 'label' => 'Improved reporting clarity', 'desc' => 'leadership visibility'],
                    ['metric' => '3x', 'label' => 'Faster decision-making', 'desc' => 'with AI dashboards'],
                ] as $m)
                    <div class="glass-card p-6 text-center group relative overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-b from-electric-blue/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 rounded-2xl pointer-events-none"></div>
                        <div class="relative z-10">
                            <div class="gradient-text font-display font-900 text-4xl lg:text-5xl mb-2 leading-none">{{ $m['metric'] }}</div>
                            <div class="text-white/80 font-semibold text-sm mb-1">{{ $m['label'] }}</div>
                            <div class="text-white/30 text-xs">{{ $m['desc'] }}</div>
                        </div>
                    </div>
                @endforeach
            </div>

            {{-- Testimonial --}}
            <div class="glass-card p-10 lg:p-14 max-w-4xl mx-auto text-center relative overflow-hidden">
                <div class="glow-orb w-48 h-48 bg-electric-blue/8 -top-12 -left-12"></div>
                <div class="glow-orb w-48 h-48 bg-neon-purple/8 -bottom-12 -right-12"></div>
                <div class="relative z-10">
                    <svg class="w-9 h-9 text-electric-blue/40 mx-auto mb-7" fill="currentColor" viewBox="0 0 32 32">
                        <path d="M10 8C6.686 8 4 10.686 4 14v10h10V14H6c0-2.21 1.79-4 4-4V8zm18 0c-3.314 0-6 2.686-6 6v10h10V14h-8c0-2.21 1.79-4 4-4V8z" />
                    </svg>
                    <p class="text-white/70 text-xl lg:text-2xl leading-relaxed mb-4 font-display font-500" style="letter-spacing: -0.01em;">
                        "After implementing NotOps audit recommendations, we <span class="text-white font-600">reduced repetitive manual work by 40%</span> and <span class="text-white font-600">improved production turnaround by 25%</span>."
                    </p>
                    <div class="flex items-center justify-center gap-3 mt-8">
                        <div class="w-10 h-10 rounded-full bg-gradient-to-br from-electric-blue to-neon-purple flex items-center justify-center text-white font-bold text-sm">O</div>
                        <div class="text-left">
                            <div class="text-white font-semibold text-sm">Operations Director</div>
                            <div class="text-white/35 text-xs">Manufacturing Firm</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <div class="divider"></div>

    {{-- ============================================================
     COMPETITIVE ADVANTAGE SECTION
     ============================================================ --}}
    <section id="competitive-edge" class="section-padding relative overflow-hidden">
        <div class="glow-orb w-96 h-96 bg-neon-purple/6 top-0 left-1/4"></div>

        <div class="section-container">
            <div class="text-center mb-14">
                <span class="section-label mb-6">Competitive Edge</span>
                <h2 class="section-title text-white mt-4 mb-5">
                    How It Puts You<br>
                    <span class="gradient-text">Ahead of Competition</span>
                </h2>
                <p class="text-white/45 text-lg max-w-2xl mx-auto">
                    We don't just audit. We position your company ahead of the curve.
                </p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5 max-w-5xl mx-auto">
                @foreach ([
                    ['icon' => 'M13 10V3L4 14h7v7l9-11h-7z', 'title' => 'Faster Execution Cycles', 'desc' => 'Streamlined processes mean quicker time-to-market and faster project completion.'],
                    ['icon' => 'M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1', 'title' => 'Lower Operational Cost', 'desc' => 'Eliminate waste and inefficiencies to improve your bottom line significantly.'],
                    ['icon' => 'M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z', 'title' => 'Data-Driven Decisions', 'desc' => 'AI-powered dashboards and analytics for informed strategic planning.'],
                    ['icon' => 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z', 'title' => 'Agile & AI-Enabled Workforce', 'desc' => 'Teams optimized for modern challenges with the right skills and tools.'],
                    ['icon' => 'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-2 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4', 'title' => 'Scalable Systems', 'desc' => 'Infrastructure and processes designed to grow with your business.'],
                    ['icon' => 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z', 'title' => 'Investor-Ready Structure', 'desc' => 'Operational excellence that impresses stakeholders and investors.'],
                ] as $advantage)
                    <div class="glass-card p-7 group">
                        <div class="w-11 h-11 rounded-xl bg-gradient-to-br from-electric-blue/20 to-neon-purple/20 border border-electric-blue/15 flex items-center justify-center mb-4">
                            <svg class="w-5 h-5 text-electric-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="{{ $advantage['icon'] }}" />
                            </svg>
                        </div>
                        <h3 class="text-white font-display font-700 text-base mb-2">{{ $advantage['title'] }}</h3>
                        <p class="text-white/40 text-sm leading-relaxed">{{ $advantage['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <div class="divider"></div>

    {{-- ============================================================
     4 STEP AUDIT FRAMEWORK
     ============================================================ --}}
    <section id="framework" class="section-padding relative overflow-hidden">
        <div class="glow-orb w-[500px] h-[500px] bg-neon-cyan/5 top-1/2 right-0 -translate-y-1/2"></div>
        <div class="glow-orb w-96 h-96 bg-electric-blue/5 top-1/2 -left-32 -translate-y-1/2" style="animation-delay:1.5s;"></div>

        <div class="section-container">
            <div class="text-center mb-16">
                <span class="section-label mb-6">Our Framework</span>
                <h2 class="section-title text-white mt-4 mb-5">
                    Our 4 Step<br>
                    <span class="gradient-text">Audit Framework</span>
                </h2>
                <p class="text-white/45 text-lg max-w-2xl mx-auto">
                    A structured approach from discovery to implementation that delivers measurable results.
                </p>
            </div>

            {{-- Steps --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach ([
                    [
                        'step' => '01',
                        'title' => 'Discovery',
                        'desc' => 'Deep dive into your operations, understanding pain points, goals, and current state of processes.',
                        'color' => 'from-electric-blue/20 to-electric-blue/5',
                        'border' => 'border-electric-blue/25',
                        'dot' => '#2979ff',
                    ],
                    [
                        'step' => '02',
                        'title' => 'Deep Analysis',
                        'desc' => 'Comprehensive audit across all six dimensions — automation, AI, workforce, process, production, and finance.',
                        'color' => 'from-neon-purple/20 to-neon-purple/5',
                        'border' => 'border-neon-purple/25',
                        'dot' => '#7c3aed',
                    ],
                    [
                        'step' => '03',
                        'title' => 'Opportunity Mapping',
                        'desc' => 'Identify and prioritize opportunities with clear ROI projections and implementation complexity.',
                        'color' => 'from-neon-cyan/15 to-neon-cyan/5',
                        'border' => 'border-neon-cyan/25',
                        'dot' => '#06b6d4',
                    ],
                    [
                        'step' => '04',
                        'title' => 'Implementation Blueprint',
                        'desc' => 'Detailed execution roadmap with timelines, resource requirements, and measurable milestones.',
                        'color' => 'from-emerald-500/20 to-emerald-500/5',
                        'border' => 'border-emerald-500/25',
                        'dot' => '#10b981',
                    ],
                ] as $s)
                    <div class="glass-card p-7 group text-center relative overflow-hidden">
                        <div class="w-16 h-16 rounded-2xl flex items-center justify-center mx-auto mb-5 bg-gradient-to-br {{ $s['color'] }} border {{ $s['border'] }}">
                            <span class="font-display font-800 text-2xl" style="background: linear-gradient(135deg, {{ $s['dot'] }}, {{ $s['dot'] }}cc); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">{{ $s['step'] }}</span>
                        </div>
                        <h3 class="text-white font-display font-700 text-lg mb-3">{{ $s['title'] }}</h3>
                        <p class="text-white/45 text-sm leading-relaxed">{{ $s['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <div class="divider"></div>

    {{-- ============================================================
     INDUSTRIES WE SERVE
     ============================================================ --}}
    <section id="industries" class="section-padding relative overflow-hidden">
        <div class="glow-orb w-80 h-80 bg-neon-cyan/4 top-1/2 right-0 -translate-y-1/2"></div>

        <div class="section-container">
            <div class="text-center mb-14">
                <span class="section-label mb-6">Who We Serve</span>
                <h2 class="section-title text-white mt-4 mb-5">
                    Industries<br>
                    <span class="gradient-text">We Serve</span>
                </h2>
                <p class="text-white/45 text-lg max-w-xl mx-auto">
                    We work with businesses where operational excellence is a competitive advantage.
                </p>
            </div>

            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-4">
                @foreach ([
                    ['icon' => 'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-2 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4', 'title' => 'Manufacturing'],
                    ['icon' => 'M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4', 'title' => 'Logistics'],
                    ['icon' => 'M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6', 'title' => 'Real Estate'],
                    ['icon' => 'M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z', 'title' => 'Healthcare'],
                    ['icon' => 'M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z', 'title' => 'Retail'],
                    ['icon' => 'M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z', 'title' => 'IT & SaaS'],
                    ['icon' => 'M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z', 'title' => 'Mid-size Enterprises'],
                    ['icon' => 'M13 7h8m0 0v8m0-8l-8 8-4-4-6 6', 'title' => 'Traditional Businesses'],
                ] as $industry)
                    <div class="glass-card p-5 group text-center">
                        <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-electric-blue/15 to-neon-purple/15 border border-electric-blue/15 flex items-center justify-center mx-auto mb-3">
                            <svg class="w-5 h-5 text-electric-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="{{ $industry['icon'] }}" />
                            </svg>
                        </div>
                        <h3 class="text-white/80 font-display font-600 text-sm">{{ $industry['title'] }}</h3>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <div class="divider"></div>

    {{-- ============================================================
     CTA SECTION — Tell Them What To Do Next
     ============================================================ --}}
    <section class="section-padding relative overflow-hidden">
        <div class="glow-orb w-[600px] h-[600px] bg-electric-blue/10 top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"></div>

        <div class="section-container">
            <div class="glass-card p-12 lg:p-20 text-center relative overflow-hidden max-w-4xl mx-auto">
                <div class="glow-orb w-72 h-72 bg-neon-purple/12 -top-24 -right-24"></div>
                <div class="glow-orb w-72 h-72 bg-electric-blue/12 -bottom-24 -left-24"></div>

                <div class="relative z-10">
                    <span class="section-label mb-6">Take the First Step</span>
                    <h2 class="section-title text-white mt-4 mb-5">
                        Ready to Future-Proof<br>
                        <span class="gradient-text">Your Company?</span>
                    </h2>
                    <p class="text-white/45 text-lg max-w-2xl mx-auto mb-10 leading-relaxed">
                        Start your digital transformation today. Book a free consultation and discover how NotOps can help you identify opportunities, reduce costs, and stay ahead of the competition.
                    </p>

                    <div class="flex flex-col sm:flex-row items-center justify-center gap-4 mb-8">
                        <a href="{{ route('contact.index') }}" class="btn-primary px-10 py-4 text-base">
                            <span>Schedule a Free Consultation</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </a>
                        <a href="{{ route('contact.index') }}" class="btn-secondary px-8 py-4 text-base">
                            Download Sample Audit Framework
                        </a>
                    </div>

                    <p class="text-white/30 text-sm">
                        Start Your Digital Transformation Today
                    </p>

                    <div class="flex flex-wrap items-center justify-center gap-5 mt-10">
                        @foreach (['Free scoping call', '100% NDA protected', 'Response within 24 hours', 'No commitment required'] as $badge)
                            <div class="flex items-center gap-1.5 text-white/25 text-xs">
                                <svg class="w-3.5 h-3.5 text-electric-blue/50 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" />
                                </svg>
                                {{ $badge }}
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
