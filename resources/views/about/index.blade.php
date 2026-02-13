@extends('layouts.public')

@section('title', 'About NotOps — Technical Audit & AI Strategy Consulting')
@section('meta_description', 'NotOps is a Technical Audit & AI Strategy consulting firm focused on helping companies modernize operations through automation, AI integration, and structured execution models.')

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
            <span class="section-label mb-5">About Us</span>
            <h1 class="font-display font-800 text-white leading-tight mt-4 mb-5" style="font-size: clamp(2.2rem, 4vw, 3.5rem);">
                Who We Are
            </h1>
            <p class="text-white/50 text-lg leading-relaxed max-w-3xl mx-auto">
                NotOps is a Technical Audit & AI Strategy consulting firm focused on helping companies modernize operations through automation, AI integration, and structured execution models.
            </p>
        </div>
    </section>

    {{-- ============================================================
     WHAT WE COMBINE
     ============================================================ --}}
    <section class="section-padding relative overflow-hidden">
        <div class="glow-orb w-96 h-96 bg-electric-blue/5 top-1/2 -left-32 -translate-y-1/2"></div>

        <div class="section-container">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">

                {{-- Left --}}
                <div>
                    <span class="section-label mb-6">Our Expertise</span>
                    <h2 class="section-title text-white mt-4 mb-6">
                        We Combine<br>
                        <span class="gradient-text">Multiple Disciplines</span>
                    </h2>
                    <p class="text-white/45 text-base leading-relaxed mb-8">
                        Our team brings together expertise across business operations, technology, and strategic planning to deliver comprehensive transformation solutions.
                    </p>

                    <div class="space-y-4">
                        @foreach ([
                            ['icon' => 'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2', 'title' => 'Business Process Analysis'],
                            ['icon' => 'M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z', 'title' => 'Technology Consulting'],
                            ['icon' => 'M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z', 'title' => 'AI Opportunity Mapping'],
                            ['icon' => 'M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z', 'title' => 'Execution Planning'],
                            ['icon' => 'M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z', 'title' => 'Project Management Support'],
                        ] as $item)
                            <div class="flex items-center gap-4 glass-card p-4 group">
                                <div class="w-10 h-10 rounded-lg bg-gradient-to-br from-electric-blue/20 to-neon-purple/20 border border-electric-blue/15 flex items-center justify-center shrink-0">
                                    <svg class="w-5 h-5 text-electric-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="{{ $item['icon'] }}" />
                                    </svg>
                                </div>
                                <span class="text-white/80 font-semibold text-sm">{{ $item['title'] }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>

                {{-- Right --}}
                <div class="glass-card p-8 lg:p-10">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-electric-blue/20 to-neon-purple/20 border border-electric-blue/15 flex items-center justify-center">
                            <svg class="w-6 h-6 text-electric-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-white font-display font-700 text-lg">Our Mission</h3>
                            <p class="text-white/35 text-xs">What drives us every day</p>
                        </div>
                    </div>
                    <p class="text-white/60 text-base leading-relaxed">
                        To transform traditional businesses into intelligent, automated, and future-ready organizations. We believe every company deserves access to the same operational excellence and AI capabilities that drive the world's most successful enterprises.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <div class="divider"></div>

    {{-- ============================================================
     OUR APPROACH
     ============================================================ --}}
    <section class="section-padding relative overflow-hidden">
        <div class="glow-orb w-[500px] h-[500px] bg-neon-purple/5 top-1/2 right-0 -translate-y-1/2"></div>

        <div class="section-container">
            <div class="text-center mb-14">
                <span class="section-label mb-6">Our Approach</span>
                <h2 class="section-title text-white mt-4 mb-5">
                    A Proven<br>
                    <span class="gradient-text">4-Phase Methodology</span>
                </h2>
                <p class="text-white/45 text-lg max-w-2xl mx-auto">
                    We follow a structured approach that ensures thorough analysis and successful implementation.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach ([
                    [
                        'number' => '01',
                        'title' => 'Diagnose',
                        'subtitle' => 'Deep Technical Audit',
                        'desc' => 'Comprehensive analysis of your operations, processes, and systems to identify inefficiencies and opportunities.',
                        'color' => 'from-electric-blue/20 to-electric-blue/5',
                        'border' => 'border-electric-blue/25',
                        'dot' => '#2979ff',
                    ],
                    [
                        'number' => '02',
                        'title' => 'Design',
                        'subtitle' => 'Optimization & AI Roadmap',
                        'desc' => 'Create a detailed transformation roadmap with prioritized initiatives and clear ROI projections.',
                        'color' => 'from-neon-purple/20 to-neon-purple/5',
                        'border' => 'border-neon-purple/25',
                        'dot' => '#7c3aed',
                    ],
                    [
                        'number' => '03',
                        'title' => 'Deploy',
                        'subtitle' => 'Execution Support',
                        'desc' => 'Hands-on implementation support to ensure successful deployment of recommended changes.',
                        'color' => 'from-neon-cyan/15 to-neon-cyan/5',
                        'border' => 'border-neon-cyan/25',
                        'dot' => '#06b6d4',
                    ],
                    [
                        'number' => '04',
                        'title' => 'Deliver',
                        'subtitle' => 'Measured Impact',
                        'desc' => 'Track and measure results against KPIs to ensure transformation delivers promised outcomes.',
                        'color' => 'from-emerald-500/20 to-emerald-500/5',
                        'border' => 'border-emerald-500/25',
                        'dot' => '#10b981',
                    ],
                ] as $phase)
                    <div class="glass-card p-7 group text-center relative overflow-hidden">
                        <div class="w-16 h-16 rounded-2xl flex items-center justify-center mx-auto mb-5 bg-gradient-to-br {{ $phase['color'] }} border {{ $phase['border'] }}">
                            <span class="font-display font-800 text-2xl" style="background: linear-gradient(135deg, {{ $phase['dot'] }}, {{ $phase['dot'] }}cc); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">{{ $phase['number'] }}</span>
                        </div>
                        <h3 class="text-white font-display font-700 text-xl mb-1">{{ $phase['title'] }}</h3>
                        <p class="text-electric-blue text-xs font-medium mb-4">{{ $phase['subtitle'] }}</p>
                        <p class="text-white/45 text-sm leading-relaxed">{{ $phase['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <div class="divider"></div>

    {{-- ============================================================
     WHY CHOOSE US
     ============================================================ --}}
    <section class="section-padding relative overflow-hidden">
        <div class="glow-orb w-96 h-96 bg-electric-blue/5 top-0 left-1/4"></div>

        <div class="section-container">
            <div class="text-center mb-14">
                <span class="section-label mb-6">Why Choose Us</span>
                <h2 class="section-title text-white mt-4 mb-5">
                    What Sets<br>
                    <span class="gradient-text">NotOps Apart</span>
                </h2>
                <p class="text-white/45 text-lg max-w-2xl mx-auto">
                    We're different from traditional consulting firms in ways that matter.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 max-w-5xl mx-auto">
                @foreach ([
                    [
                        'icon' => 'M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z',
                        'title' => 'Data-Driven Audit Methodology',
                        'desc' => 'Every recommendation is backed by data and quantified impact projections, not assumptions or generic best practices.',
                    ],
                    [
                        'icon' => 'M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z',
                        'title' => 'Practical AI Integration',
                        'desc' => 'We focus on real AI use cases with measurable ROI, not hype. Every AI recommendation comes with implementation complexity and expected returns.',
                    ],
                    [
                        'icon' => 'M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1',
                        'title' => 'Clear ROI-Focused Strategy',
                        'desc' => 'Every initiative in our roadmap includes projected cost savings, revenue impact, and payback period so you can prioritize with confidence.',
                    ],
                    [
                        'icon' => 'M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z M15 12a3 3 0 11-6 0 3 3 0 016 0z',
                        'title' => 'Execution Support Included',
                        'desc' => 'Unlike typical consultants who hand over a deck and leave, we offer ongoing execution support to ensure your transformation succeeds.',
                    ],
                    [
                        'icon' => 'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-2 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4',
                        'title' => 'Industry-Specific Solutions',
                        'desc' => 'Our recommendations are customized for your industry, not generic templates. We understand the unique challenges of manufacturing, logistics, healthcare, and more.',
                    ],
                    [
                        'icon' => 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z',
                        'title' => 'Confidential & NDA Protected',
                        'desc' => 'All engagements are fully confidential. Your operational data and competitive insights are protected with enterprise-grade security.',
                    ],
                ] as $reason)
                    <div class="glass-card p-7 group">
                        <div class="w-11 h-11 rounded-xl bg-gradient-to-br from-electric-blue/20 to-neon-purple/20 border border-electric-blue/15 flex items-center justify-center mb-5">
                            <svg class="w-5 h-5 text-electric-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="{{ $reason['icon'] }}" />
                            </svg>
                        </div>
                        <h3 class="text-white font-display font-700 text-base mb-3">{{ $reason['title'] }}</h3>
                        <p class="text-white/45 text-sm leading-relaxed">{{ $reason['desc'] }}</p>
                    </div>
                @endforeach
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
                        <span class="gradient-text">Your Operations?</span>
                    </h2>
                    <p class="text-white/45 text-lg max-w-2xl mx-auto mb-10 leading-relaxed">
                        Let's start with a conversation. Book a free strategy call and discover how NotOps can help you identify opportunities, reduce costs, and build a future-ready organization.
                    </p>

                    <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                        <a href="{{ route('contact.index') }}" class="btn-primary px-10 py-4 text-base">
                            <span>Book a Free Strategy Call</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </a>
                        <a href="{{ route('services.index') }}" class="btn-secondary px-8 py-4 text-base">
                            Explore Our Services
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
