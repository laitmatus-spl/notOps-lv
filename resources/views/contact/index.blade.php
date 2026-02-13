@extends('layouts.public')

@section('title', 'Contact NotOps — Let\'s Optimize Your Company')
@section('meta_description', 'Book a free strategy call with NotOps. We help companies identify automation opportunities, reduce costs, and implement AI-driven transformation.')

@section('content')

{{-- Hero strip --}}
<section class="relative pt-32 pb-4 overflow-hidden">
    <div class="glow-orb w-[600px] h-[600px] bg-electric-blue/6 -top-60 -right-60"></div>
    <div class="glow-orb w-[400px] h-[400px] bg-neon-purple/7 top-20 -left-48" style="animation-delay:1.2s;"></div>
    <div class="absolute inset-0 pointer-events-none"
         style="background-image: linear-gradient(rgba(41,121,255,0.022) 1px, transparent 1px), linear-gradient(90deg, rgba(41,121,255,0.022) 1px, transparent 1px); background-size: 60px 60px;"></div>

    <div class="section-container relative z-10 text-center max-w-3xl mx-auto">
        <span class="section-label mb-5">Contact Us</span>
        <h1 class="font-display font-800 text-white leading-tight mt-4 mb-5" style="font-size: clamp(2.2rem, 4vw, 3.2rem);">
            Let's Optimize<br>
            <span class="gradient-text">Your Company</span>
        </h1>
        <p class="text-white/50 text-base leading-relaxed max-w-xl mx-auto">
            Book a free strategy call to discuss your challenges. We'll provide honest feedback on whether we can help — no sales pressure, just straight answers.
        </p>
    </div>
</section>

{{-- Main content --}}
<section class="relative pb-24 overflow-hidden">

    <div class="section-container relative z-10 mt-14">
        <div class="grid grid-cols-1 lg:grid-cols-5 gap-12 lg:gap-16 items-start">

            {{-- Left column --}}
            <div class="lg:col-span-2 space-y-8">

                {{-- Contact Information --}}
                <div class="glass-card p-7">
                    <h2 class="text-white font-display font-700 text-base mb-5">Contact Information</h2>
                    <div class="space-y-4">
                        @foreach([
                            ['svg' => 'M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z', 'label' => 'Email', 'value' => 'info@notops.com'],
                            ['svg' => 'M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z', 'label' => 'Phone', 'value' => '+91 XXXXX XXXXX'],
                            ['svg' => 'M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z M15 11a3 3 0 11-6 0 3 3 0 016 0z', 'label' => 'Location', 'value' => 'India (Serving Globally)'],
                            ['svg' => 'M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z', 'label' => 'Response Time', 'value' => 'Within 24 hours'],
                        ] as $item)
                        <div class="flex items-center gap-4">
                            <div class="w-9 h-9 rounded-lg bg-electric-blue/10 border border-electric-blue/20 flex items-center justify-center shrink-0">
                                <svg class="text-electric-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="width:16px;height:16px;">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="{{ $item['svg'] }}"/>
                                </svg>
                            </div>
                            <div>
                                <div class="text-white/35 text-xs mb-0.5">{{ $item['label'] }}</div>
                                <div class="text-white/75 text-sm font-medium">{{ $item['value'] }}</div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                {{-- What you get --}}
                <div class="glass-card p-7">
                    <h2 class="text-white font-display font-700 text-base mb-5">What the Audit Delivers</h2>
                    <ul class="space-y-4">
                        @foreach([
                            ['icon' => 'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01', 'title' => 'Full Operational Diagnostic', 'desc' => 'Every workflow, team structure, and toolchain mapped against efficiency benchmarks.'],
                            ['icon' => 'M13 10V3L4 14h7v7l9-11h-7z', 'title' => 'Automation Opportunity Register', 'desc' => 'Ranked list of tasks and processes ready for automation or AI — with ROI estimates.'],
                            ['icon' => 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z', 'title' => 'Workforce Restructure Recommendations', 'desc' => 'Where to redeploy talent, what roles to eliminate, and where to hire smarter.'],
                            ['icon' => 'M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z', 'title' => 'Executive-Ready Report', 'desc' => 'Board-level presentation with findings, financial projections, and a phased action plan.'],
                        ] as $item)
                        <li class="flex items-start gap-4">
                            <div class="w-9 h-9 rounded-lg bg-electric-blue/10 border border-electric-blue/20 flex items-center justify-center shrink-0 mt-0.5">
                                <svg class="w-4.5 h-4.5 text-electric-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="width:18px;height:18px;">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="{{ $item['icon'] }}"/>
                                </svg>
                            </div>
                            <div>
                                <div class="text-white/80 text-sm font-semibold mb-0.5">{{ $item['title'] }}</div>
                                <div class="text-white/40 text-xs leading-relaxed">{{ $item['desc'] }}</div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>

                {{-- Process steps --}}
                <div class="glass-card p-7">
                    <h2 class="text-white font-display font-700 text-base mb-7">What Happens Next</h2>

                    @php
                    $steps = [
                        ['step' => '01', 'title' => 'We review your submission',   'desc' => 'A senior consultant reads your message — not a bot, not a junior coordinator.', 'last' => false],
                        ['step' => '02', 'title' => '30-minute discovery call',    'desc' => 'We ask the right questions to understand your operations, constraints, and goals.', 'last' => false],
                        ['step' => '03', 'title' => 'Audit scope proposal',        'desc' => 'You receive a clear, no-fluff proposal: what we will examine, how long it takes, what you get.', 'last' => false],
                        ['step' => '04', 'title' => 'You decide — zero pressure',  'desc' => 'If the scope fits, we proceed. If it does not, we tell you honestly and walk away friends.', 'last' => true],
                    ];
                    @endphp

                    <div class="relative">
                        @foreach($steps as $item)
                        <div class="flex gap-5 {{ $loop->last ? '' : 'pb-7' }} relative">

                            {{-- Timeline spine --}}
                            <div class="flex flex-col items-center shrink-0">
                                {{-- Step circle --}}
                                <div class="w-10 h-10 rounded-full flex items-center justify-center shrink-0 z-10"
                                     style="background: linear-gradient(135deg, rgba(41,121,255,0.25) 0%, rgba(124,58,237,0.25) 100%); border: 1px solid rgba(41,121,255,0.35);">
                                    <span class="font-display font-bold text-sm" style="background: linear-gradient(135deg, #2979ff, #7c3aed); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">{{ $item['step'] }}</span>
                                </div>
                                {{-- Connecting line --}}
                                @if(!$loop->last)
                                <div class="w-px flex-1 mt-2" style="background: linear-gradient(to bottom, rgba(41,121,255,0.25), rgba(124,58,237,0.08));"></div>
                                @endif
                            </div>

                            {{-- Content --}}
                            <div class="pt-1.5 {{ $loop->last ? '' : 'pb-1' }}">
                                <div class="text-white/85 text-sm font-semibold mb-1.5">{{ $item['title'] }}</div>
                                <div class="text-white/40 text-xs leading-relaxed">{{ $item['desc'] }}</div>
                            </div>

                        </div>
                        @endforeach
                    </div>
                </div>

            </div>

            {{-- Right column (form) --}}
            <div class="lg:col-span-3">
                <div class="glass-card p-8 lg:p-10">

                    {{-- Success message --}}
                    @if(session('success'))
                    <div class="mb-8 p-5 bg-emerald-500/10 border border-emerald-500/20 rounded-xl flex items-start gap-4">
                        <div class="w-10 h-10 rounded-full bg-emerald-500/15 border border-emerald-500/30 flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <div>
                            <p class="text-emerald-400 font-semibold text-sm mb-1">Message Received — Thank You</p>
                            <p class="text-emerald-300/70 text-sm leading-relaxed">{{ session('success') }}</p>
                        </div>
                    </div>
                    @endif

                    <div class="mb-8 pb-8 border-b border-white/5">
                        <h2 class="text-white font-display font-700 text-2xl mb-2">Book a Free Strategy Call</h2>
                        <p class="text-white/40 text-sm leading-relaxed">
                            The more context you share, the more targeted our initial response will be.
                            Fields marked <span class="text-electric-blue">*</span> are required.
                        </p>
                    </div>

                    <form action="{{ route('contact.store') }}" method="POST" class="space-y-6">
                        @csrf

                        {{-- Name + Email --}}
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <div>
                                <label for="name" class="form-label">
                                    Full Name <span class="text-electric-blue">*</span>
                                </label>
                                <input
                                    type="text"
                                    id="name"
                                    name="name"
                                    value="{{ old('name') }}"
                                    placeholder="Jane Smith"
                                    class="form-input @error('name') border-red-500/60 @enderror"
                                    required
                                    autocomplete="name"
                                >
                                @error('name')
                                <p class="mt-1.5 text-red-400 text-xs flex items-center gap-1.5">
                                    <svg class="w-3.5 h-3.5 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                    </svg>
                                    {{ $message }}
                                </p>
                                @enderror
                            </div>
                            <div>
                                <label for="email" class="form-label">
                                    Work Email <span class="text-electric-blue">*</span>
                                </label>
                                <input
                                    type="email"
                                    id="email"
                                    name="email"
                                    value="{{ old('email') }}"
                                    placeholder="jane@company.com"
                                    class="form-input @error('email') border-red-500/60 @enderror"
                                    required
                                    autocomplete="email"
                                >
                                @error('email')
                                <p class="mt-1.5 text-red-400 text-xs flex items-center gap-1.5">
                                    <svg class="w-3.5 h-3.5 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                    </svg>
                                    {{ $message }}
                                </p>
                                @enderror
                            </div>
                        </div>

                        {{-- Company + Phone --}}
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <div>
                                <label for="company" class="form-label">Company Name</label>
                                <input
                                    type="text"
                                    id="company"
                                    name="company"
                                    value="{{ old('company') }}"
                                    placeholder="Acme Corp"
                                    class="form-input @error('company') border-red-500/60 @enderror"
                                    autocomplete="organization"
                                >
                            </div>
                            <div>
                                <label for="phone" class="form-label">Phone Number</label>
                                <input
                                    type="tel"
                                    id="phone"
                                    name="phone"
                                    value="{{ old('phone') }}"
                                    placeholder="+1 (555) 000-0000"
                                    class="form-input @error('phone') border-red-500/60 @enderror"
                                    autocomplete="tel"
                                >
                            </div>
                        </div>

                        {{-- Industry + Company Size --}}
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <div>
                                <label for="industry" class="form-label">Industry</label>
                                <select
                                    id="industry"
                                    name="industry"
                                    class="form-input @error('industry') border-red-500/60 @enderror"
                                >
                                    <option value="">Select your industry</option>
                                    <option value="manufacturing" {{ old('industry') == 'manufacturing' ? 'selected' : '' }}>Manufacturing</option>
                                    <option value="logistics" {{ old('industry') == 'logistics' ? 'selected' : '' }}>Logistics</option>
                                    <option value="real_estate" {{ old('industry') == 'real_estate' ? 'selected' : '' }}>Real Estate</option>
                                    <option value="healthcare" {{ old('industry') == 'healthcare' ? 'selected' : '' }}>Healthcare</option>
                                    <option value="retail" {{ old('industry') == 'retail' ? 'selected' : '' }}>Retail</option>
                                    <option value="it_saas" {{ old('industry') == 'it_saas' ? 'selected' : '' }}>IT & SaaS</option>
                                    <option value="other" {{ old('industry') == 'other' ? 'selected' : '' }}>Other</option>
                                </select>
                            </div>
                            <div>
                                <label for="company_size" class="form-label">Company Size</label>
                                <select
                                    id="company_size"
                                    name="company_size"
                                    class="form-input @error('company_size') border-red-500/60 @enderror"
                                >
                                    <option value="">Select company size</option>
                                    <option value="1-50" {{ old('company_size') == '1-50' ? 'selected' : '' }}>1-50 employees</option>
                                    <option value="51-200" {{ old('company_size') == '51-200' ? 'selected' : '' }}>51-200 employees</option>
                                    <option value="201-500" {{ old('company_size') == '201-500' ? 'selected' : '' }}>201-500 employees</option>
                                    <option value="501-1000" {{ old('company_size') == '501-1000' ? 'selected' : '' }}>501-1000 employees</option>
                                    <option value="1000+" {{ old('company_size') == '1000+' ? 'selected' : '' }}>1000+ employees</option>
                                </select>
                            </div>
                        </div>

                        {{-- Message --}}
                        <div>
                            <label for="message" class="form-label">
                                Describe Your Business Challenge <span class="text-electric-blue">*</span>
                            </label>
                            <textarea
                                id="message"
                                name="message"
                                rows="6"
                                placeholder="Example: We have a 60-person ops team and suspect we are over-staffed in certain areas. We rely heavily on manual reporting and struggle to get accurate P&L visibility before the 15th of each month. We have heard about AI but have no idea where to start..."
                                class="form-input @error('message') border-red-500/60 @enderror resize-none"
                                required
                            >{{ old('message') }}</textarea>
                            @error('message')
                            <p class="mt-1.5 text-red-400 text-xs flex items-center gap-1.5">
                                <svg class="w-3.5 h-3.5 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                </svg>
                                {{ $message }}
                            </p>
                            @enderror
                            <p class="mt-2 text-white/25 text-xs">
                                The more detail you share, the sharper our initial response will be. Rough numbers and honest context beat polished summaries.
                            </p>
                        </div>

                        {{-- Submit row --}}
                        <div class="pt-2 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-5">
                            <p class="text-white/25 text-xs leading-relaxed max-w-xs">
                                By submitting, you agree that NotOps may contact you regarding your inquiry.
                                Your information is never sold or shared with third parties.
                            </p>
                            <button type="submit" class="btn-primary px-9 py-3.5 shrink-0">
                                <span>Schedule Free Consultation</span>
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                                </svg>
                            </button>
                        </div>

                    </form>
                </div>

                {{-- Trust bar below form --}}
                <div class="mt-6 grid grid-cols-3 gap-4">
                    @foreach([
                        ['icon' => 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z', 'label' => 'NDA Available', 'sub' => 'On request'],
                        ['icon' => 'M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z', 'label' => 'No Cost', 'sub' => 'Scoping is free'],
                        ['icon' => 'M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z', 'label' => '24hr Reply', 'sub' => 'Business days'],
                    ] as $trust)
                    <div class="glass-card p-4 text-center">
                        <div class="w-8 h-8 rounded-lg bg-electric-blue/10 border border-electric-blue/20 flex items-center justify-center mx-auto mb-2">
                            <svg class="text-electric-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="width:16px;height:16px;">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="{{ $trust['icon'] }}"/>
                            </svg>
                        </div>
                        <div class="text-white/70 text-xs font-semibold">{{ $trust['label'] }}</div>
                        <div class="text-white/30 text-xs">{{ $trust['sub'] }}</div>
                    </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
</section>

@endsection
