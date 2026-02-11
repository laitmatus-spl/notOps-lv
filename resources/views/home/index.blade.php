@extends('layouts.public')

@section('title', 'NotOps — Technical & Operational Audit Consulting for Enterprises')
@section('meta_description', 'NotOps delivers deep technical and operational audits that identify automation opportunities, AI implementation areas, and cost inefficiencies — then executes the transformation. Trusted by CEOs and founders.')

@section('content')

{{-- ============================================================
     HERO SECTION
     ============================================================ --}}
<section class="relative min-h-screen flex items-center overflow-hidden pt-20">

    {{-- Glow orbs --}}
    <div class="glow-orb w-[700px] h-[700px] bg-electric-blue/8 -top-60 -left-60"></div>
    <div class="glow-orb w-[600px] h-[600px] bg-neon-purple/8 -bottom-60 -right-60" style="animation-delay: 1.5s;"></div>
    <div class="glow-orb w-[400px] h-[400px] bg-neon-cyan/4 top-1/3 left-1/2 -translate-x-1/2"></div>

    {{-- Subtle grid --}}
    <div class="absolute inset-0 pointer-events-none"
         style="background-image: linear-gradient(rgba(41,121,255,0.025) 1px, transparent 1px), linear-gradient(90deg, rgba(41,121,255,0.025) 1px, transparent 1px); background-size: 72px 72px;"></div>

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
                Your Operations Are<br>
                <span class="gradient-text">Leaking Value</span><br>
                Every Single Day.
            </h1>

            {{-- Sub-headline --}}
            <p class="text-white/55 text-lg lg:text-xl leading-relaxed max-w-2xl mx-auto mb-4 animate-[fade-up_0.6s_0.2s_ease-out_both]">
                NotOps audits the technical and operational core of your business — uncovering where automation, AI, and process redesign can eliminate waste and unlock growth — then executes the transformation alongside your team.
            </p>
            <p class="text-white/35 text-base max-w-xl mx-auto mb-12 animate-[fade-up_0.6s_0.25s_ease-out_both]">
                Built for CEOs, founders, and operators who are done paying for slide decks that sit on shelves.
            </p>

            {{-- CTAs --}}
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4 mb-16 animate-[fade-up_0.6s_0.3s_ease-out_both]">
                <a href="{{ route('contact.index') }}" class="btn-primary px-9 py-4 text-base">
                    <span>Book a Discovery Call</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
                <a href="#framework" class="btn-secondary px-9 py-4 text-base">
                    See the 6-Pillar Framework
                </a>
            </div>

            {{-- Trust bar --}}
            <div class="flex flex-wrap items-center justify-center gap-x-8 gap-y-3 animate-[fade-up_0.6s_0.4s_ease-out_both]">
                @foreach([
                    'Enterprise & Scale-up Clients',
                    'AI-Native Methodology',
                    'Execution-Backed, Not Just Advisory',
                    'Avg. 34% Operational Cost Reduction',
                ] as $trust)
                <div class="flex items-center gap-2 text-white/30 text-sm">
                    <svg class="w-4 h-4 text-electric-blue shrink-0" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
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
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 9l-7 7-7-7"/>
        </svg>
    </div>
</section>


{{-- ============================================================
     PROBLEM SECTION
     ============================================================ --}}
<section id="services" class="section-padding relative overflow-hidden">
    <div class="glow-orb w-96 h-96 bg-neon-purple/6 -top-10 right-0"></div>

    <div class="section-container">

        <div class="text-center mb-16">
            <span class="section-label mb-6">The Real Problem</span>
            <h2 class="section-title text-white mt-4 mb-5">
                The Average Business Operates at<br>
                <span class="gradient-text">60% of Its True Potential</span>
            </h2>
            <p class="text-white/45 text-lg max-w-2xl mx-auto leading-relaxed">
                Not because of bad strategy. Because of invisible operational drag — the kind that accumulates quietly across teams, tools, and processes until it becomes the ceiling on your growth.
            </p>
        </div>

        {{-- 3 problem cards --}}
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-14">
            @foreach([
                [
                    'icon_path'  => 'M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 0V6m0 1v1m0 4v4m0 4v1m0 0v-1',
                    'icon_color' => 'from-rose-500/20 to-pink-500/20',
                    'stat_color' => 'text-rose-400',
                    'title'      => 'Silent Cost Haemorrhage',
                    'stat'       => '15–30%',
                    'stat_label' => 'of OPEX lost annually',
                    'desc'       => 'Redundant SaaS tools, over-staffed manual functions, duplicated workflows, and uncaptured vendor savings quietly drain your budget with no one accountable for the total.',
                ],
                [
                    'icon_path'  => 'M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z M15 12a3 3 0 11-6 0 3 3 0 016 0z',
                    'icon_color' => 'from-amber-500/20 to-orange-500/20',
                    'stat_color' => 'text-amber-400',
                    'title'      => 'Manual Process Overload',
                    'stat'       => '40%+',
                    'stat_label' => 'of team time wasted',
                    'desc'       => 'Your highest-paid people are spending nearly half their day on tasks that a well-configured workflow or AI model could handle — choking capacity and killing morale.',
                ],
                [
                    'icon_path'  => 'M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z',
                    'icon_color' => 'from-violet-500/20 to-purple-500/20',
                    'stat_color' => 'text-violet-400',
                    'title'      => 'Untapped AI Advantage',
                    'stat'       => '74%',
                    'stat_label' => 'of AI ROI unrealised',
                    'desc'       => 'Most companies have dabbled in AI but lack a structured map of where it creates real leverage. Without one, AI spend compounds without compounding returns.',
                ],
            ] as $problem)
            <div class="glass-card p-8 group">
                <div class="w-12 h-12 rounded-xl bg-gradient-to-br {{ $problem['icon_color'] }} border border-white/8 flex items-center justify-center mb-6">
                    <svg class="w-6 h-6 text-white/70" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="{{ $problem['icon_path'] }}"/>
                    </svg>
                </div>
                <div class="flex items-end gap-2 mb-1">
                    <span class="{{ $problem['stat_color'] }} font-display font-800 text-4xl leading-none">{{ $problem['stat'] }}</span>
                    <span class="text-white/35 text-xs mb-1.5">{{ $problem['stat_label'] }}</span>
                </div>
                <h3 class="text-white font-display font-700 text-lg mb-3 mt-3">{{ $problem['title'] }}</h3>
                <p class="text-white/45 text-sm leading-relaxed">{{ $problem['desc'] }}</p>
            </div>
            @endforeach
        </div>

        {{-- Call-out strip --}}
        <div class="glass-card p-6 lg:p-8 flex flex-col lg:flex-row items-center justify-between gap-6 border-electric-blue/15">
            <div class="text-center lg:text-left">
                <p class="text-white font-display font-700 text-xl mb-1">These are not edge cases. They are the norm.</p>
                <p class="text-white/45 text-sm">We have audited businesses from 50-person scale-ups to global enterprises — the patterns repeat at every level.</p>
            </div>
            <a href="{{ route('contact.index') }}" class="btn-primary shrink-0 px-7 py-3">
                <span>See If This Is You</span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
            </a>
        </div>

    </div>
</section>

<div class="divider"></div>

{{-- ============================================================
     TECHNICAL AUDIT FRAMEWORK
     ============================================================ --}}
<section id="framework" class="section-padding relative overflow-hidden">
    <div class="glow-orb w-[500px] h-[500px] bg-electric-blue/6 top-1/2 -left-32 -translate-y-1/2"></div>

    <div class="section-container">

        <div class="text-center mb-16">
            <span class="section-label mb-6">The NotOps Method</span>
            <h2 class="section-title text-white mt-4 mb-5">
                Six Dimensions.<br>
                <span class="gradient-text">One Comprehensive Audit.</span>
            </h2>
            <p class="text-white/45 text-lg max-w-2xl mx-auto leading-relaxed">
                Most audits look at one thing. Ours looks at everything — because operational waste rarely lives in a single department. Our 6-pillar framework gives you a complete diagnostic and a prioritised action roadmap.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">

            @php
            $auditPillars = [
                [
                    'number' => '01',
                    'icon'   => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>',
                    'title'  => 'Automation Audit',
                    'tagline'=> 'Stop paying humans to do machine work.',
                    'color'  => 'from-blue-500/20 to-cyan-500/20',
                    'border' => 'border-blue-500/20',
                    'glow'   => 'group-hover:shadow-blue-500/10',
                    'items'  => [
                        'Identify repetitive tasks ripe for automation',
                        'End-to-end workflow automation mapping',
                        'System integration gap analysis',
                        'Reporting & data pipeline automation',
                    ],
                ],
                [
                    'number' => '02',
                    'icon'   => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>',
                    'title'  => 'AI Opportunity Mapping',
                    'tagline'=> 'Find real AI use cases, not just hype.',
                    'color'  => 'from-violet-500/20 to-purple-500/20',
                    'border' => 'border-violet-500/20',
                    'glow'   => 'group-hover:shadow-violet-500/10',
                    'items'  => [
                        'AI-powered customer support systems',
                        'Predictive analytics & demand forecasting',
                        'Document intelligence & extraction',
                        'Internal AI assistant deployment',
                    ],
                ],
                [
                    'number' => '03',
                    'icon'   => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/>',
                    'title'  => 'Workforce Optimisation',
                    'tagline'=> 'Build a leaner, higher-leverage team.',
                    'color'  => 'from-emerald-500/20 to-teal-500/20',
                    'border' => 'border-emerald-500/20',
                    'glow'   => 'group-hover:shadow-emerald-500/10',
                    'items'  => [
                        'Role redundancy & duplication analysis',
                        'Task-to-technology ownership mapping',
                        'Lean team restructuring blueprint',
                        'Targeted upskilling & redeployment strategy',
                    ],
                ],
                [
                    'number' => '04',
                    'icon'   => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 3H5a2 2 0 00-2 2v4m6-6h10a2 2 0 012 2v4M9 3v18m0 0h10a2 2 0 002-2V9M9 21H5a2 2 0 01-2-2V9m0 0h18"/>',
                    'title'  => 'Process Engineering',
                    'tagline'=> 'Eliminate the bottlenecks slowing everything down.',
                    'color'  => 'from-orange-500/20 to-amber-500/20',
                    'border' => 'border-orange-500/20',
                    'glow'   => 'group-hover:shadow-orange-500/10',
                    'items'  => [
                        'End-to-end bottleneck detection & root cause',
                        'SOP standardisation & documentation',
                        'Cross-functional workflow re-engineering',
                        'Turnaround time & cycle time reduction',
                    ],
                ],
                [
                    'number' => '05',
                    'icon'   => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z"/>',
                    'title'  => 'Production Efficiency',
                    'tagline'=> 'Get more output from the same input.',
                    'color'  => 'from-rose-500/20 to-pink-500/20',
                    'border' => 'border-rose-500/20',
                    'glow'   => 'group-hover:shadow-rose-500/10',
                    'items'  => [
                        'Waste identification & lean methodology',
                        'Throughput & output rate optimisation',
                        'Quality control system improvements',
                        'Supply chain & vendor efficiency review',
                    ],
                ],
                [
                    'number' => '06',
                    'icon'   => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 0V6m0 1v1m0 4v4m0 4v1m0 0v-1"/>',
                    'title'  => 'Finance & Capital Efficiency',
                    'tagline'=> 'Find and recover your hidden cash.',
                    'color'  => 'from-cyan-500/20 to-sky-500/20',
                    'border' => 'border-cyan-500/20',
                    'glow'   => 'group-hover:shadow-cyan-500/10',
                    'items'  => [
                        'Cost leakage detection & vendor audit',
                        'Cash flow visibility & forecasting gaps',
                        'ROI tracking across tech & headcount spend',
                        'Smart capital reallocation planning',
                    ],
                ],
            ];
            @endphp

            @foreach($auditPillars as $pillar)
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

                    <h3 class="text-white font-display font-700 text-lg mb-1">{{ $pillar['title'] }}</h3>
                    <p class="text-white/35 text-xs italic mb-5">{{ $pillar['tagline'] }}</p>

                    <ul class="space-y-2.5">
                        @foreach($pillar['items'] as $item)
                        <li class="flex items-start gap-2.5 text-white/50 text-sm group-hover:text-white/70 transition-colors leading-snug">
                            <span class="w-1.5 h-1.5 rounded-full bg-electric-blue shrink-0 mt-1.5"></span>
                            {{ $item }}
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            @endforeach

        </div>

        {{-- Bottom note --}}
        <p class="text-center text-white/25 text-sm mt-10">
            Every engagement includes all six pillars. Partial audits leave blind spots — we do not do partial audits.
        </p>

    </div>
</section>

<div class="divider"></div>

{{-- ============================================================
     EXECUTION MODEL
     ============================================================ --}}
<section id="execution" class="section-padding relative overflow-hidden">
    <div class="glow-orb w-[500px] h-[500px] bg-neon-cyan/5 top-1/2 right-0 -translate-y-1/2"></div>
    <div class="glow-orb w-96 h-96 bg-electric-blue/5 top-1/2 -left-32 -translate-y-1/2" style="animation-delay:1.5s;"></div>

    <div class="section-container">
        <div class="text-center mb-16">
            <span class="section-label mb-6">How We Engage</span>
            <h2 class="section-title text-white mt-4 mb-5">
                From First Call to<br>
                <span class="gradient-text">Measurable Results</span>
            </h2>
            <p class="text-white/45 text-lg max-w-2xl mx-auto">
                Most consultants deliver a deck and an invoice. NotOps delivers a deck, an implementation team, and a signed-off outcome report. We earn our fees when your numbers move.
            </p>
        </div>

        {{-- Steps --}}
        <div class="space-y-4">
            @foreach([
                [
                    'step'   => '01',
                    'tag'    => 'Free — No Commitment',
                    'title'  => 'Discovery Call',
                    'desc'   => 'A focused 45-minute conversation with your leadership team to understand your business, pain points, and what success looks like.',
                    'detail' => 'We ask the questions other consultants skip — about cash flow, team morale, tech debt, and where the real bottlenecks are. You leave with clarity.',
                    'color'  => 'from-electric-blue/20 to-electric-blue/5',
                    'border' => 'border-electric-blue/25',
                    'dot'    => '#2979ff',
                ],
                [
                    'step'   => '02',
                    'tag'    => '2–4 Weeks On-Site',
                    'title'  => 'Full Audit',
                    'desc'   => 'Our team embeds with yours. We interview stakeholders, analyse systems, review financials, and map every process across all six audit pillars.',
                    'detail' => 'We access your actual data — not sanitised summaries. Shadow sessions, system reviews, and financial deep-dives give us a picture your leadership team has never seen.',
                    'color'  => 'from-neon-purple/20 to-neon-purple/5',
                    'border' => 'border-neon-purple/25',
                    'dot'    => '#7c3aed',
                ],
                [
                    'step'   => '03',
                    'tag'    => 'Board-Ready Report',
                    'title'  => 'Transformation Roadmap',
                    'desc'   => 'You receive a quantified findings report with prioritised quick wins and a 90-day execution plan with clear ROI projections for each initiative.',
                    'detail' => 'Not a generic framework. Every recommendation is sized, sequenced, and costed — so your board can approve the plan the same week you present it.',
                    'color'  => 'from-neon-cyan/15 to-neon-cyan/5',
                    'border' => 'border-neon-cyan/25',
                    'dot'    => '#06b6d4',
                ],
                [
                    'step'   => '04',
                    'tag'    => 'Optional Add-On',
                    'title'  => 'Execution & Tracking',
                    'desc'   => 'We stay engaged through implementation — managing projects, holding teams accountable, and reporting monthly against agreed KPIs.',
                    'detail' => 'Most consulting firms hand over a report and disappear. We offer an optional retained engagement to see the changes through — with skin in the game.',
                    'color'  => 'from-electric-blue/10 to-neon-purple/10',
                    'border' => 'border-white/10',
                    'dot'    => '#a78bfa',
                ],
            ] as $s)
            <div class="glass-card-flat p-7 lg:p-8 group">
                <div class="flex flex-col md:flex-row md:items-start gap-6 lg:gap-10">

                    {{-- Step number --}}
                    <div class="shrink-0 flex md:flex-col items-center md:items-center gap-4 md:gap-3 md:w-20">
                        <div class="w-14 h-14 rounded-2xl flex items-center justify-center shrink-0 bg-gradient-to-br {{ $s['color'] }} border {{ $s['border'] }}">
                            <span class="font-display font-800 text-xl" style="background: linear-gradient(135deg, {{ $s['dot'] }}, {{ $s['dot'] }}cc); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">{{ $s['step'] }}</span>
                        </div>
                        <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-semibold whitespace-nowrap md:text-center"
                              style="background: rgba(from {{ $s['dot'] }} r g b / 0.12); border: 1px solid rgba(from {{ $s['dot'] }} r g b / 0.25); color: {{ $s['dot'] }};">
                            {{ $s['tag'] }}
                        </span>
                    </div>

                    {{-- Divider (desktop) --}}
                    <div class="hidden md:block w-px self-stretch shrink-0" style="background: linear-gradient(to bottom, rgba(from {{ $s['dot'] }} r g b / 0.25), transparent);"></div>

                    {{-- Content --}}
                    <div class="flex-1 min-w-0">
                        <h3 class="text-white font-display font-700 text-xl mb-2">{{ $s['title'] }}</h3>
                        <p class="text-white/60 text-sm leading-relaxed mb-3">{{ $s['desc'] }}</p>
                        <p class="text-white/30 text-xs leading-relaxed border-t border-white/5 pt-3">{{ $s['detail'] }}</p>
                    </div>

                    {{-- Arrow indicator --}}
                    <div class="hidden lg:flex items-center self-center shrink-0">
                        <div class="w-8 h-8 rounded-full flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                             style="background: rgba(from {{ $s['dot'] }} r g b / 0.15); border: 1px solid rgba(from {{ $s['dot'] }} r g b / 0.25);">
                            <svg class="w-3.5 h-3.5" style="color: {{ $s['dot'] }};" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </div>
                    </div>

                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<div class="divider"></div>

{{-- ============================================================
     RESULTS / METRICS SECTION
     ============================================================ --}}
<section id="results" class="section-padding relative overflow-hidden">
    <div class="glow-orb w-[500px] h-[500px] bg-electric-blue/7 -bottom-24 left-1/2 -translate-x-1/2"></div>

    <div class="section-container">

        <div class="text-center mb-14">
            <span class="section-label mb-6">Proven ROI</span>
            <h2 class="section-title text-white mt-4 mb-5">
                Numbers That<br>
                <span class="gradient-text">CEOs Care About</span>
            </h2>
            <p class="text-white/45 text-lg max-w-xl mx-auto">
                Our engagements are measured by business outcomes — not deliverables, not hours billed.
            </p>
        </div>

        {{-- 4 metric cards --}}
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-5 mb-14">
            @foreach([
                ['metric' => '34%',  'label' => 'Average cost reduction',        'desc' => 'across total operational spend',     'note' => 'Audited across 40+ engagements'],
                ['metric' => '58%',  'label' => 'Reduction in manual task time', 'desc' => 'via automation & AI implementation', 'note' => 'Measured at 6-month post-audit'],
                ['metric' => '3.2×', 'label' => 'ROI on audit investment',       'desc' => 'within the first 12 months',         'note' => 'Average across client portfolio'],
                ['metric' => '90d',  'label' => 'Time to first measurable win',  'desc' => 'from audit kickoff',                 'note' => 'Guaranteed in engagement scope'],
            ] as $m)
            <div class="glass-card p-7 text-center group relative overflow-hidden">
                <div class="absolute inset-0 bg-gradient-to-b from-electric-blue/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 rounded-2xl pointer-events-none"></div>
                <div class="relative z-10">
                    <div class="gradient-text font-display font-900 text-5xl lg:text-6xl mb-2 leading-none">{{ $m['metric'] }}</div>
                    <div class="text-white/80 font-semibold text-sm mb-1">{{ $m['label'] }}</div>
                    <div class="text-white/30 text-xs mb-3">{{ $m['desc'] }}</div>
                    <div class="text-electric-blue-light/50 text-xs border-t border-white/5 pt-3">{{ $m['note'] }}</div>
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
                    <path d="M10 8C6.686 8 4 10.686 4 14v10h10V14H6c0-2.21 1.79-4 4-4V8zm18 0c-3.314 0-6 2.686-6 6v10h10V14h-8c0-2.21 1.79-4 4-4V8z"/>
                </svg>
                <p class="text-white/70 text-xl lg:text-2xl leading-relaxed mb-4 font-display font-500" style="letter-spacing: -0.01em;">
                    "NotOps found <span class="text-white font-600">$2.4M in annual operational waste</span> in the first audit. Within six months, we had eliminated $1.9M of it. Their team did not just hand us a report — they stayed until the work was done."
                </p>
                <p class="text-white/30 text-sm mb-6">The difference from every other firm we have used: they are accountable to outcomes, not outputs.</p>
                <div class="flex items-center justify-center gap-3">
                    <div class="w-10 h-10 rounded-full bg-gradient-to-br from-electric-blue to-neon-purple flex items-center justify-center text-white font-bold text-sm">M</div>
                    <div class="text-left">
                        <div class="text-white font-semibold text-sm">Marcus T.</div>
                        <div class="text-white/35 text-xs">CEO · Series B SaaS Company · 280 employees</div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<div class="divider"></div>

{{-- ============================================================
     WHY NOTOPS
     ============================================================ --}}
<section id="why-notops" class="section-padding relative overflow-hidden">
    <div class="glow-orb w-96 h-96 bg-neon-purple/6 top-0 left-1/4"></div>

    <div class="section-container">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 lg:gap-20 items-start">

            {{-- Left --}}
            <div>
                <span class="section-label mb-6">Why NotOps</span>
                <h2 class="section-title text-white mt-4 mb-4">
                    We Are Not a<br>
                    <span class="gradient-text">Traditional Consulting Firm</span>
                </h2>
                <p class="text-white/45 text-base leading-relaxed mb-10">
                    Traditional consultants bill for time. We are aligned to your outcomes. That changes everything about how we work, what we prioritise, and whether we stay engaged after the report is written.
                </p>

                <div class="space-y-5">
                    @foreach([
                        [
                            'title' => 'AI-Native, Not AI-Adjacent',
                            'desc'  => 'Our methodology was built around modern AI capabilities from day one — not retrofitted onto a legacy framework. Every audit identifies concrete AI use cases with build complexity, cost, and expected ROI.',
                        ],
                        [
                            'title' => 'Quantified or It Does Not Count',
                            'desc'  => 'Every finding in our reports comes with a number attached: cost saved, hours recovered, revenue unlocked, or risk reduced. If we cannot quantify it, we do not report it.',
                        ],
                        [
                            'title' => 'We Execute, Not Just Advise',
                            'desc'  => 'Our project management team can stay engaged post-audit to manage implementation, hold internal stakeholders accountable, and report monthly on outcomes vs. targets.',
                        ],
                        [
                            'title' => 'C-Suite to Ground Floor Fluency',
                            'desc'  => 'We interview the CEO and the operations coordinator. We translate technical findings into board language and operational directives into implementation guides.',
                        ],
                        [
                            'title' => 'No Retainers Until We Prove Value',
                            'desc'  => 'The audit scoping call is free. If our initial assessment shows no meaningful opportunity, we tell you. We would rather lose a deal than waste your time.',
                        ],
                    ] as $i => $why)
                    <div class="flex gap-4 group">
                        <div class="w-9 h-9 rounded-lg bg-gradient-to-br from-electric-blue/20 to-neon-purple/20 border border-electric-blue/15 flex items-center justify-center shrink-0 mt-0.5">
                            <svg class="w-4 h-4 text-electric-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/>
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-white font-semibold text-sm mb-1">{{ $why['title'] }}</h4>
                            <p class="text-white/40 text-sm leading-relaxed">{{ $why['desc'] }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            {{-- Right: Mock audit report card --}}
            <div class="lg:sticky lg:top-28 space-y-4">

                {{-- Dashboard preview --}}
                <div class="glass-card p-7">
                    <div class="flex items-center justify-between mb-6">
                        <div>
                            <p class="text-white font-display font-700 text-base">Live Audit Dashboard</p>
                            <p class="text-white/30 text-xs mt-0.5">Acme Corp — Engagement Active</p>
                        </div>
                        <span class="flex items-center gap-1.5 px-2.5 py-1 bg-emerald-500/15 border border-emerald-500/20 rounded-full text-emerald-400 text-xs font-medium">
                            <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse"></span>
                            Week 3 of 4
                        </span>
                    </div>

                    <div class="space-y-4 mb-6">
                        @foreach([
                            ['label' => 'Automation Opportunity Score', 'pct' => 82, 'color' => 'bg-electric-blue'],
                            ['label' => 'AI Readiness Index',           'pct' => 68, 'color' => 'bg-neon-purple'],
                            ['label' => 'Process Efficiency Rating',    'pct' => 49, 'color' => 'bg-amber-500'],
                            ['label' => 'Workforce Leverage Score',     'pct' => 77, 'color' => 'bg-emerald-500'],
                            ['label' => 'Capital Efficiency Index',     'pct' => 61, 'color' => 'bg-neon-cyan'],
                        ] as $bar)
                        <div>
                            <div class="flex justify-between text-xs mb-1.5">
                                <span class="text-white/50">{{ $bar['label'] }}</span>
                                <span class="text-white font-semibold">{{ $bar['pct'] }}%</span>
                            </div>
                            <div class="h-1.5 bg-white/5 rounded-full overflow-hidden">
                                <div class="h-full rounded-full {{ $bar['color'] }} opacity-75"
                                     style="width: {{ $bar['pct'] }}%; transition: width 1.5s ease;"></div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <div class="pt-5 border-t border-white/5 grid grid-cols-2 gap-4 text-center">
                        <div>
                            <div class="gradient-text font-display font-800 text-2xl">94 / 100</div>
                            <div class="text-white/25 text-xs mt-0.5">Opportunity Score</div>
                        </div>
                        <div>
                            <div class="gradient-text-cyan font-display font-800 text-2xl">$2.1M</div>
                            <div class="text-white/25 text-xs mt-0.5">Est. Annual Savings</div>
                        </div>
                    </div>
                </div>

                {{-- Findings preview --}}
                <div class="glass-card p-5">
                    <p class="text-white/50 text-xs font-semibold uppercase tracking-widest mb-4">Top Findings — Week 3</p>
                    <div class="space-y-3">
                        @foreach([
                            ['priority' => 'Critical', 'color' => 'text-rose-400 bg-rose-400/10 border-rose-400/20', 'text' => '14 FTE hours/day spent on manual data entry — automatable within 6 weeks.'],
                            ['priority' => 'High',     'color' => 'text-amber-400 bg-amber-400/10 border-amber-400/20', 'text' => '$340K/yr in overlapping SaaS subscriptions with no ownership assigned.'],
                            ['priority' => 'High',     'color' => 'text-amber-400 bg-amber-400/10 border-amber-400/20', 'text' => 'Finance close cycle running 3× longer than industry benchmark.'],
                            ['priority' => 'Medium',   'color' => 'text-blue-400 bg-blue-400/10 border-blue-400/20', 'text' => 'AI document processing could reduce legal review time by 65%.'],
                        ] as $finding)
                        <div class="flex items-start gap-3">
                            <span class="px-1.5 py-0.5 rounded border text-xs font-semibold shrink-0 {{ $finding['color'] }}">{{ $finding['priority'] }}</span>
                            <p class="text-white/50 text-xs leading-relaxed">{{ $finding['text'] }}</p>
                        </div>
                        @endforeach
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>

<div class="divider"></div>

{{-- ============================================================
     INDUSTRIES / WHO WE WORK WITH
     ============================================================ --}}
<section class="section-padding relative overflow-hidden">
    <div class="glow-orb w-80 h-80 bg-neon-cyan/4 top-1/2 right-0 -translate-y-1/2"></div>

    <div class="section-container">
        <div class="text-center mb-14">
            <span class="section-label mb-6">Who We Serve</span>
            <h2 class="section-title text-white mt-4 mb-5">
                Built for Leaders Who<br>
                <span class="gradient-text">Demand Accountability</span>
            </h2>
            <p class="text-white/45 text-lg max-w-xl mx-auto">
                We work with businesses where operational excellence is a competitive advantage — not a nice-to-have.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
            @foreach([
                [
                    'icon'   => 'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-2 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4',
                    'color'  => 'from-electric-blue/20 to-electric-blue/5',
                    'border' => 'border-electric-blue/20',
                    'ic'     => 'text-electric-blue',
                    'tag'    => '200–5,000 employees',
                    'title'  => 'Enterprise & Mid-Market',
                    'desc'   => 'Complex operations, legacy systems, and high cost of inertia. We surface the structural waste that has accumulated for years.',
                ],
                [
                    'icon'   => 'M13 7h8m0 0v8m0-8l-8 8-4-4-6 6',
                    'color'  => 'from-emerald-500/20 to-teal-500/20',
                    'border' => 'border-emerald-500/20',
                    'ic'     => 'text-emerald-400',
                    'tag'    => 'Series B+ / Scale-up',
                    'title'  => 'High-Growth Scale-ups',
                    'desc'   => 'Rapid headcount growth has created process debt. Time to systemise before inefficiency becomes permanent.',
                ],
                [
                    'icon'   => 'M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z',
                    'color'  => 'from-amber-500/20 to-orange-500/20',
                    'border' => 'border-amber-500/20',
                    'ic'     => 'text-amber-400',
                    'tag'    => 'Manufacturing / Ops',
                    'title'  => 'Manufacturing & Operations',
                    'desc'   => 'Production efficiency, waste reduction, and quality control improvements that directly defend your margins.',
                ],
                [
                    'icon'   => 'M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9',
                    'color'  => 'from-neon-purple/20 to-violet-500/20',
                    'border' => 'border-neon-purple/20',
                    'ic'     => 'text-neon-purple-light',
                    'tag'    => 'Agencies & Consultancies',
                    'title'  => 'Professional Services',
                    'desc'   => 'Where utilisation rates, client delivery speed, and overhead ratios are the difference between 20% and 40% margin.',
                ],
            ] as $industry)
            <div class="glass-card p-7 group">
                <div class="w-11 h-11 rounded-xl bg-gradient-to-br {{ $industry['color'] }} border {{ $industry['border'] }} flex items-center justify-center mb-4">
                    <svg class="w-5 h-5 {{ $industry['ic'] }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="{{ $industry['icon'] }}"/>
                    </svg>
                </div>
                <span class="inline-block text-white/25 text-xs font-medium mb-2">{{ $industry['tag'] }}</span>
                <h3 class="text-white font-display font-700 text-base mb-2">{{ $industry['title'] }}</h3>
                <p class="text-white/40 text-sm leading-relaxed">{{ $industry['desc'] }}</p>
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
        <div class="glass-card p-12 lg:p-20 text-center relative overflow-hidden max-w-4xl mx-auto">
            <div class="glow-orb w-72 h-72 bg-neon-purple/12 -top-24 -right-24"></div>
            <div class="glow-orb w-72 h-72 bg-electric-blue/12 -bottom-24 -left-24"></div>

            <div class="relative z-10">
                <span class="section-label mb-6">Take the First Step</span>
                <h2 class="section-title text-white mt-4 mb-5">
                    The Audit Costs Nothing.<br>
                    <span class="gradient-text">Inaction Costs Everything.</span>
                </h2>
                <p class="text-white/45 text-lg max-w-2xl mx-auto mb-3 leading-relaxed">
                    Book a 45-minute discovery call. We will review your current operations and give you an honest assessment of where the value is — even if it means telling you we are not the right fit.
                </p>
                <p class="text-white/25 text-sm mb-10">No pitch decks. No sales pressure. Just a straight conversation.</p>

                <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                    <a href="{{ route('contact.index') }}" class="btn-primary px-10 py-4 text-base">
                        <span>Book Your Discovery Call</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                    <a href="#framework" class="btn-secondary px-8 py-4 text-base">
                        Review the Framework First
                    </a>
                </div>

                <div class="flex flex-wrap items-center justify-center gap-5 mt-10">
                    @foreach(['Free scoping call', '100% NDA protected', 'Response within 24 hours', 'No commitment required'] as $badge)
                    <div class="flex items-center gap-1.5 text-white/25 text-xs">
                        <svg class="w-3.5 h-3.5 text-electric-blue/50 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/>
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
