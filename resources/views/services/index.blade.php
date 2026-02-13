@extends('layouts.public')

@section('title', 'Services — NotOps Technical Audit & AI Consulting')
@section('meta_description', 'Explore NotOps services: Technical Audit, Automation Consulting, AI Strategy & Integration, Workforce Optimization, Process & Production Optimization, and Finance Efficiency Strategy.')

@section('content')

    {{-- ============================================================
     HERO SECTION
     ============================================================ --}}
    <section class="relative pt-32 pb-16 overflow-hidden">
        <div class="glow-orb w-[600px] h-[600px] bg-electric-blue/6 -top-60 -right-60"></div>
        <div class="glow-orb w-[400px] h-[400px] bg-neon-purple/7 top-20 -left-48" style="animation-delay:1.2s;"></div>
        <div class="absolute inset-0 pointer-events-none"
             style="background-image: linear-gradient(rgba(41,121,255,0.022) 1px, transparent 1px), linear-gradient(90deg, rgba(41,121,255,0.022) 1px, transparent 1px); background-size: 60px 60px;"></div>

        <div class="section-container relative z-10 text-center max-w-4xl mx-auto">
            <span class="section-label mb-5">Our Services</span>
            <h1 class="font-display font-800 text-white leading-tight mt-4 mb-5" style="font-size: clamp(2.2rem, 4vw, 3.5rem);">
                Comprehensive Solutions for<br>
                <span class="gradient-text">Business Transformation</span>
            </h1>
            <p class="text-white/50 text-lg leading-relaxed max-w-3xl mx-auto">
                From technical audits to AI implementation, we provide end-to-end services to help your business optimize operations, reduce costs, and stay ahead of the competition.
            </p>
        </div>
    </section>

    {{-- ============================================================
     SERVICE 1: TECHNICAL AUDIT
     ============================================================ --}}
    <section id="technical-audit" class="section-padding relative overflow-hidden">
        <div class="glow-orb w-96 h-96 bg-electric-blue/5 top-1/2 -left-32 -translate-y-1/2"></div>

        <div class="section-container">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">
                <div>
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-electric-blue/20 to-cyan-500/20 border border-electric-blue/20 flex items-center justify-center">
                            <svg class="w-6 h-6 text-electric-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
                            </svg>
                        </div>
                        <span class="text-electric-blue text-sm font-semibold">01</span>
                    </div>
                    <h2 class="section-title text-white mb-5">
                        Technical Audit
                    </h2>
                    <p class="text-white/45 text-base leading-relaxed mb-8">
                        A comprehensive assessment of your operational processes, technology stack, and organizational efficiency to identify areas for improvement and optimization.
                    </p>

                    <div class="space-y-3">
                        @foreach ([
                            'Operational process review',
                            'Department-wise performance audit',
                            'Technology stack analysis',
                            'Cost inefficiency detection',
                            'Automation readiness assessment',
                        ] as $item)
                            <div class="flex items-center gap-3">
                                <svg class="w-5 h-5 text-electric-blue shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                                <span class="text-white/60 text-sm">{{ $item }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="glass-card p-8">
                    <h3 class="text-white font-display font-700 text-lg mb-6">What You Get</h3>
                    <div class="space-y-4">
                        @foreach ([
                            ['icon' => 'M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z', 'title' => 'Detailed Audit Report', 'desc' => 'Comprehensive documentation of all findings and recommendations'],
                            ['icon' => 'M13 10V3L4 14h7v7l9-11h-7z', 'title' => 'Quick Win Identification', 'desc' => 'Immediate opportunities for cost savings and efficiency gains'],
                            ['icon' => 'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2', 'title' => 'Prioritized Action Plan', 'desc' => 'Ranked initiatives with ROI projections and implementation roadmap'],
                        ] as $benefit)
                            <div class="flex items-start gap-4">
                                <div class="w-10 h-10 rounded-lg bg-electric-blue/10 border border-electric-blue/20 flex items-center justify-center shrink-0">
                                    <svg class="w-5 h-5 text-electric-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="{{ $benefit['icon'] }}" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="text-white/80 font-semibold text-sm mb-1">{{ $benefit['title'] }}</h4>
                                    <p class="text-white/40 text-xs">{{ $benefit['desc'] }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="divider"></div>

    {{-- ============================================================
     SERVICE 2: AUTOMATION CONSULTING
     ============================================================ --}}
    <section id="automation-consulting" class="section-padding relative overflow-hidden">
        <div class="glow-orb w-96 h-96 bg-neon-purple/5 top-1/2 right-0 -translate-y-1/2"></div>

        <div class="section-container">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">
                <div class="order-2 lg:order-1">
                    <div class="glass-card p-8">
                        <h3 class="text-white font-display font-700 text-lg mb-6">Automation Areas</h3>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            @foreach ([
                                'Workflow automation',
                                'Reporting automation',
                                'Backend process automation',
                                'CRM & ERP automation',
                                'Production system automation',
                                'Data pipeline automation',
                            ] as $area)
                                <div class="flex items-center gap-3 p-3 rounded-lg bg-white/3 border border-white/5">
                                    <svg class="w-4 h-4 text-neon-purple shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                    </svg>
                                    <span class="text-white/60 text-sm">{{ $area }}</span>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="order-1 lg:order-2">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-neon-purple/20 to-violet-500/20 border border-neon-purple/20 flex items-center justify-center">
                            <svg class="w-6 h-6 text-neon-purple" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                            </svg>
                        </div>
                        <span class="text-neon-purple text-sm font-semibold">02</span>
                    </div>
                    <h2 class="section-title text-white mb-5">
                        Automation Consulting
                    </h2>
                    <p class="text-white/45 text-base leading-relaxed mb-8">
                        Identify and implement automation opportunities across your organization to reduce manual work, eliminate errors, and free up your team for higher-value activities.
                    </p>

                    <div class="space-y-3">
                        @foreach ([
                            'End-to-end workflow analysis',
                            'Automation opportunity identification',
                            'Tool selection and integration planning',
                            'Implementation roadmap development',
                            'ROI-based prioritization',
                        ] as $item)
                            <div class="flex items-center gap-3">
                                <svg class="w-5 h-5 text-neon-purple shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                                <span class="text-white/60 text-sm">{{ $item }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="divider"></div>

    {{-- ============================================================
     SERVICE 3: AI STRATEGY & INTEGRATION
     ============================================================ --}}
    <section id="ai-strategy" class="section-padding relative overflow-hidden">
        <div class="glow-orb w-96 h-96 bg-neon-cyan/5 top-1/2 -left-32 -translate-y-1/2"></div>

        <div class="section-container">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">
                <div>
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-neon-cyan/20 to-sky-500/20 border border-neon-cyan/20 flex items-center justify-center">
                            <svg class="w-6 h-6 text-neon-cyan" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                            </svg>
                        </div>
                        <span class="text-neon-cyan text-sm font-semibold">03</span>
                    </div>
                    <h2 class="section-title text-white mb-5">
                        AI Strategy & Integration
                    </h2>
                    <p class="text-white/45 text-base leading-relaxed mb-8">
                        Develop and implement a practical AI strategy that delivers real business value. We focus on use cases with measurable ROI, not AI for AI's sake.
                    </p>

                    <div class="space-y-3">
                        @foreach ([
                            'AI opportunity mapping',
                            'Predictive analytics setup',
                            'AI chatbot implementation',
                            'AI dashboards & reporting',
                            'AI-based decision support systems',
                        ] as $item)
                            <div class="flex items-center gap-3">
                                <svg class="w-5 h-5 text-neon-cyan shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                                <span class="text-white/60 text-sm">{{ $item }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="glass-card p-8">
                    <h3 class="text-white font-display font-700 text-lg mb-6">AI Use Cases We Implement</h3>
                    <div class="space-y-4">
                        @foreach ([
                            ['title' => 'Customer Support AI', 'desc' => 'Intelligent chatbots and automated response systems'],
                            ['title' => 'Predictive Analytics', 'desc' => 'Forecast demand, identify trends, and optimize inventory'],
                            ['title' => 'Document Intelligence', 'desc' => 'Extract and process information from documents automatically'],
                            ['title' => 'Smart Reporting', 'desc' => 'AI-powered dashboards with actionable insights'],
                        ] as $useCase)
                            <div class="p-4 rounded-lg bg-white/3 border border-white/5">
                                <h4 class="text-white/80 font-semibold text-sm mb-1">{{ $useCase['title'] }}</h4>
                                <p class="text-white/40 text-xs">{{ $useCase['desc'] }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="divider"></div>

    {{-- ============================================================
     SERVICE 4: WORKFORCE OPTIMIZATION
     ============================================================ --}}
    <section id="workforce-optimization" class="section-padding relative overflow-hidden">
        <div class="glow-orb w-96 h-96 bg-emerald-500/5 top-1/2 right-0 -translate-y-1/2"></div>

        <div class="section-container">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">
                <div class="order-2 lg:order-1">
                    <div class="glass-card p-8">
                        <h3 class="text-white font-display font-700 text-lg mb-6">Optimization Strategies</h3>
                        <div class="space-y-4">
                            @foreach ([
                                ['icon' => 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z', 'title' => 'Role Restructuring', 'desc' => 'Realign roles for maximum productivity and efficiency'],
                                ['icon' => 'M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z', 'title' => 'Performance Systems', 'desc' => 'Design and implement effective performance tracking'],
                                ['icon' => 'M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z', 'title' => 'Task Elimination', 'desc' => 'Identify and remove redundant or low-value work'],
                                ['icon' => 'M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253', 'title' => 'Skill-Based Deployment', 'desc' => 'Match people to roles based on capabilities'],
                            ] as $strategy)
                                <div class="flex items-start gap-4">
                                    <div class="w-10 h-10 rounded-lg bg-emerald-500/10 border border-emerald-500/20 flex items-center justify-center shrink-0">
                                        <svg class="w-5 h-5 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="{{ $strategy['icon'] }}" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="text-white/80 font-semibold text-sm mb-1">{{ $strategy['title'] }}</h4>
                                        <p class="text-white/40 text-xs">{{ $strategy['desc'] }}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="order-1 lg:order-2">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-emerald-500/20 to-teal-500/20 border border-emerald-500/20 flex items-center justify-center">
                            <svg class="w-6 h-6 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </div>
                        <span class="text-emerald-400 text-sm font-semibold">04</span>
                    </div>
                    <h2 class="section-title text-white mb-5">
                        Workforce Optimization
                    </h2>
                    <p class="text-white/45 text-base leading-relaxed mb-8">
                        Build a leaner, higher-leverage team by optimizing role structures, eliminating redundancy, and ensuring your people are focused on high-value work.
                    </p>

                    <div class="space-y-3">
                        @foreach ([
                            'Role restructuring strategy',
                            'Performance system design',
                            'Redundant task elimination',
                            'Skill-based deployment planning',
                        ] as $item)
                            <div class="flex items-center gap-3">
                                <svg class="w-5 h-5 text-emerald-400 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                                <span class="text-white/60 text-sm">{{ $item }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="divider"></div>

    {{-- ============================================================
     SERVICE 5: PROCESS & PRODUCTION OPTIMIZATION
     ============================================================ --}}
    <section id="process-optimization" class="section-padding relative overflow-hidden">
        <div class="glow-orb w-96 h-96 bg-amber-500/5 top-1/2 -left-32 -translate-y-1/2"></div>

        <div class="section-container">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">
                <div>
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-amber-500/20 to-orange-500/20 border border-amber-500/20 flex items-center justify-center">
                            <svg class="w-6 h-6 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                        <span class="text-amber-400 text-sm font-semibold">05</span>
                    </div>
                    <h2 class="section-title text-white mb-5">
                        Process & Production Optimization
                    </h2>
                    <p class="text-white/45 text-base leading-relaxed mb-8">
                        Eliminate bottlenecks, reduce waste, and optimize your production cycles to get more output from the same resources while improving quality.
                    </p>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div>
                            <h4 class="text-white/70 font-semibold text-sm mb-3 flex items-center gap-2">
                                <span class="w-2 h-2 rounded-full bg-amber-400"></span>
                                Process Improvement
                            </h4>
                            <ul class="space-y-2">
                                @foreach (['Lean implementation', 'Bottleneck analysis', 'SOP restructuring', 'Production cycle optimization'] as $item)
                                    <li class="text-white/45 text-sm flex items-center gap-2">
                                        <svg class="w-3 h-3 text-amber-400/60 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                        {{ $item }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div>
                            <h4 class="text-white/70 font-semibold text-sm mb-3 flex items-center gap-2">
                                <span class="w-2 h-2 rounded-full bg-orange-400"></span>
                                Production Efficiency
                            </h4>
                            <ul class="space-y-2">
                                @foreach (['Capacity optimization', 'Quality control improvements', 'Waste reduction strategies', 'Smart monitoring systems'] as $item)
                                    <li class="text-white/45 text-sm flex items-center gap-2">
                                        <svg class="w-3 h-3 text-orange-400/60 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                        {{ $item }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="glass-card p-8">
                    <h3 class="text-white font-display font-700 text-lg mb-6">Expected Outcomes</h3>
                    <div class="space-y-6">
                        @foreach ([
                            ['metric' => '20-40%', 'label' => 'Improvement in production efficiency'],
                            ['metric' => '15-30%', 'label' => 'Reduction in cost per unit'],
                            ['metric' => '50%+', 'label' => 'Faster cycle times'],
                            ['metric' => '25%', 'label' => 'Waste reduction'],
                        ] as $outcome)
                            <div class="flex items-center gap-4">
                                <div class="gradient-text font-display font-800 text-2xl min-w-[80px]">{{ $outcome['metric'] }}</div>
                                <div class="text-white/50 text-sm">{{ $outcome['label'] }}</div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="divider"></div>

    {{-- ============================================================
     SERVICE 6: FINANCE & CAPITAL EFFICIENCY
     ============================================================ --}}
    <section id="finance-efficiency" class="section-padding relative overflow-hidden">
        <div class="glow-orb w-96 h-96 bg-rose-500/5 top-1/2 right-0 -translate-y-1/2"></div>

        <div class="section-container">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">
                <div class="order-2 lg:order-1">
                    <div class="glass-card p-8">
                        <h3 class="text-white font-display font-700 text-lg mb-6">Financial Optimization Areas</h3>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            @foreach ([
                                ['title' => 'Expense Audit', 'desc' => 'Identify cost leakages and unnecessary spending'],
                                ['title' => 'ROI Strategy', 'desc' => 'Investment prioritization based on returns'],
                                ['title' => 'Capital Planning', 'desc' => 'Optimize allocation across initiatives'],
                                ['title' => 'Cashflow Systems', 'desc' => 'Improve visibility and efficiency'],
                            ] as $area)
                                <div class="p-4 rounded-lg bg-white/3 border border-white/5">
                                    <h4 class="text-white/80 font-semibold text-sm mb-1">{{ $area['title'] }}</h4>
                                    <p class="text-white/40 text-xs">{{ $area['desc'] }}</p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="order-1 lg:order-2">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-rose-500/20 to-pink-500/20 border border-rose-500/20 flex items-center justify-center">
                            <svg class="w-6 h-6 text-rose-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <span class="text-rose-400 text-sm font-semibold">06</span>
                    </div>
                    <h2 class="section-title text-white mb-5">
                        Finance & Capital Efficiency Strategy
                    </h2>
                    <p class="text-white/45 text-base leading-relaxed mb-8">
                        Identify hidden cost savings, optimize capital allocation, and improve financial visibility to make smarter investment decisions.
                    </p>

                    <div class="space-y-3">
                        @foreach ([
                            'Expense audit and leakage detection',
                            'ROI-based investment strategy',
                            'Capital allocation planning',
                            'Cashflow system improvements',
                        ] as $item)
                            <div class="flex items-center gap-3">
                                <svg class="w-5 h-5 text-rose-400 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                                <span class="text-white/60 text-sm">{{ $item }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="divider"></div>

    {{-- ============================================================
     EXECUTION MODEL
     ============================================================ --}}
    <section id="execution-model" class="section-padding relative overflow-hidden">
        <div class="glow-orb w-[500px] h-[500px] bg-electric-blue/5 top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"></div>

        <div class="section-container">
            <div class="text-center mb-14">
                <span class="section-label mb-6">Execution Framework</span>
                <h2 class="section-title text-white mt-4 mb-5">
                    Choose Your<br>
                    <span class="gradient-text">Execution Model</span>
                </h2>
                <p class="text-white/45 text-lg max-w-2xl mx-auto">
                    After the audit, we help you execute transformation through the model that best fits your organization.
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 max-w-5xl mx-auto">
                {{-- Self Execution Model --}}
                <div class="glass-card p-8 relative overflow-hidden group">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-electric-blue/10 to-transparent rounded-bl-full"></div>
                    <div class="relative z-10">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-electric-blue/20 to-neon-purple/20 border border-electric-blue/15 flex items-center justify-center">
                                <svg class="w-6 h-6 text-electric-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-white font-display font-700 text-xl">Self Execution Model</h3>
                                <span class="text-electric-blue text-xs font-medium">For teams with internal execution capacity</span>
                            </div>
                        </div>

                        <p class="text-white/45 text-sm leading-relaxed mb-6">
                            We provide the roadmap and tools; your team handles the implementation with our guidance.
                        </p>

                        <div class="space-y-3">
                            @foreach ([
                                'Detailed implementation roadmap',
                                'SOP documentation',
                                'Technology recommendations',
                                'Internal team training',
                                'Monitoring framework',
                            ] as $item)
                                <div class="flex items-center gap-3">
                                    <svg class="w-4 h-4 text-electric-blue shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                    </svg>
                                    <span class="text-white/60 text-sm">{{ $item }}</span>
                                </div>
                            @endforeach
                        </div>

                        <div class="mt-6 pt-6 border-t border-white/5">
                            <p class="text-white/30 text-xs">Best for companies with internal execution teams</p>
                        </div>
                    </div>
                </div>

                {{-- Project Management Model --}}
                <div class="glass-card p-8 relative overflow-hidden group border-neon-purple/20">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-neon-purple/10 to-transparent rounded-bl-full"></div>
                    <div class="absolute top-4 right-4">
                        <span class="px-2 py-1 bg-neon-purple/20 border border-neon-purple/30 rounded-full text-neon-purple text-xs font-semibold">Recommended</span>
                    </div>
                    <div class="relative z-10">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-neon-purple/20 to-violet-500/20 border border-neon-purple/15 flex items-center justify-center">
                                <svg class="w-6 h-6 text-neon-purple" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-white font-display font-700 text-xl">Project Management Model</h3>
                                <span class="text-neon-purple text-xs font-medium">End-to-end managed transformation</span>
                            </div>
                        </div>

                        <p class="text-white/45 text-sm leading-relaxed mb-6">
                            We manage the entire transformation project from start to finish, keeping your team focused on core operations.
                        </p>

                        <div class="space-y-3">
                            @foreach ([
                                'Dedicated project manager',
                                'Timeline planning & management',
                                'Vendor coordination',
                                'Implementation monitoring',
                                'KPI tracking & reporting',
                                'Weekly progress updates',
                            ] as $item)
                                <div class="flex items-center gap-3">
                                    <svg class="w-4 h-4 text-neon-purple shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                    </svg>
                                    <span class="text-white/60 text-sm">{{ $item }}</span>
                                </div>
                            @endforeach
                        </div>

                        <div class="mt-6 pt-6 border-t border-white/5">
                            <p class="text-white/30 text-xs">Best for companies wanting hands-off transformation</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="divider"></div>

    {{-- ============================================================
     CTA SECTION
     ============================================================ --}}
    <section class="section-padding relative overflow-hidden">
        <div class="glow-orb w-[600px] h-[600px] bg-electric-blue/10 top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"></div>

        <div class="section-container">
            <div class="glass-card p-12 lg:p-16 text-center relative overflow-hidden max-w-4xl mx-auto">
                <div class="glow-orb w-72 h-72 bg-neon-purple/12 -top-24 -right-24"></div>
                <div class="glow-orb w-72 h-72 bg-electric-blue/12 -bottom-24 -left-24"></div>

                <div class="relative z-10">
                    <span class="section-label mb-6">Get Started</span>
                    <h2 class="section-title text-white mt-4 mb-5">
                        Ready to Transform<br>
                        <span class="gradient-text">Your Business?</span>
                    </h2>
                    <p class="text-white/45 text-lg max-w-2xl mx-auto mb-10 leading-relaxed">
                        Schedule a free consultation to discuss your challenges and discover which of our services can deliver the most value for your organization.
                    </p>

                    <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                        <a href="{{ route('contact.index') }}" class="btn-primary px-10 py-4 text-base">
                            <span>Schedule a Free Consultation</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </a>
                        <a href="{{ route('about.index') }}" class="btn-secondary px-8 py-4 text-base">
                            Learn About Our Approach
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
