<footer class="relative overflow-hidden">

    {{-- Pre-footer CTA strip --}}
    <div class="relative border-t border-white/5">
        <div class="absolute inset-0" style="background: linear-gradient(135deg, rgba(41,121,255,0.06) 0%, rgba(124,58,237,0.06) 100%);"></div>
        <div class="section-container py-14 relative z-10">
            <div class="flex flex-col md:flex-row items-center justify-between gap-8">
                <div class="text-center md:text-left">
                    <p class="text-white/30 text-xs font-medium tracking-widest uppercase mb-2">Ready to find out what you are leaving on the table?</p>
                    <h3 class="font-display font-700 text-white text-xl md:text-2xl">
                        The audit is free.<br class="md:hidden"> The findings are priceless.
                    </h3>
                </div>
                <div class="flex items-center gap-4 shrink-0">
                    <a href="{{ route('contact.index') }}" class="btn-primary px-7 py-3">
                        <span>Request Free Audit</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                        </svg>
                    </a>
                    <a href="mailto:hello@notops.co"
                       class="inline-flex items-center gap-2 px-6 py-3 rounded-xl border border-white/10 text-white/60 hover:text-white hover:border-white/25 text-sm font-medium transition-all duration-200">
                        Email Us
                    </a>
                </div>
            </div>
        </div>
    </div>

    {{-- Main footer --}}
    <div class="border-t border-white/5 relative">
        <div class="glow-orb w-[500px] h-[500px] bg-electric-blue/4 -bottom-64 left-1/3 -translate-x-1/2"></div>

        <div class="section-container py-16 relative z-10">
            <div class="grid grid-cols-1 md:grid-cols-12 gap-12 mb-14">

                {{-- Brand col --}}
                <div class="md:col-span-5">
                    <a href="{{ route('home') }}" class="inline-block mb-5 group">
                        <img src="/assets/images/logo.png"
                             alt="NotOps"
                             class="h-8 w-auto opacity-70 group-hover:opacity-100 transition-opacity duration-200">
                    </a>
                    <p class="text-white/45 text-sm leading-relaxed max-w-sm mb-6">
                        We are a boutique technical and operational audit firm. We embed ourselves in your business, map everything that is wasting money or slowing growth, and hand you a prioritised action plan with real numbers attached.
                    </p>
                    <p class="text-white/25 text-xs leading-relaxed max-w-sm mb-8">
                        We work with a small number of clients at a time — by design. Engagements are senior-led, confidential, and designed to be acted on, not filed away.
                    </p>
                    {{-- Social / contact links --}}
                    <div class="flex items-center gap-3">
                        <a href="mailto:hello@notops.co"
                           class="w-9 h-9 rounded-lg bg-white/5 border border-white/8 flex items-center justify-center text-white/40 hover:text-white hover:border-white/20 transition-all duration-200"
                           title="Email">
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" style="width:16px;height:16px;">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                        </a>
                        <a href="https://linkedin.com/company/notops"
                           class="w-9 h-9 rounded-lg bg-white/5 border border-white/8 flex items-center justify-center text-white/40 hover:text-white hover:border-white/20 transition-all duration-200"
                           title="LinkedIn" target="_blank" rel="noopener noreferrer">
                            <svg fill="currentColor" viewBox="0 0 24 24" style="width:15px;height:15px;">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                            </svg>
                        </a>
                    </div>
                </div>

                {{-- Services col --}}
                <div class="md:col-span-3 md:col-start-7">
                    <h4 class="text-white/70 font-semibold text-xs tracking-widest uppercase mb-5">Services</h4>
                    <ul class="space-y-3">
                        @foreach([
                            ['label' => 'Technical Audit',         'anchor' => '#technical-audit'],
                            ['label' => 'Automation Consulting',   'anchor' => '#automation-consulting'],
                            ['label' => 'AI Strategy & Integration', 'anchor' => '#ai-strategy'],
                            ['label' => 'Workforce Optimization',  'anchor' => '#workforce-optimization'],
                            ['label' => 'Process Optimization',    'anchor' => '#process-optimization'],
                            ['label' => 'Finance Efficiency',      'anchor' => '#finance-efficiency'],
                        ] as $link)
                        <li>
                            <a href="{{ route('services.index') }}{{ $link['anchor'] }}"
                               class="text-white/35 hover:text-white/75 text-sm transition-colors duration-150 flex items-center gap-1.5 group">
                                <span class="w-1 h-1 rounded-full bg-electric-blue/40 group-hover:bg-electric-blue transition-colors duration-150 shrink-0"></span>
                                {{ $link['label'] }}
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>

                {{-- Company col --}}
                <div class="md:col-span-2 md:col-start-11">
                    <h4 class="text-white/70 font-semibold text-xs tracking-widest uppercase mb-5">Company</h4>
                    <ul class="space-y-3">
                        @foreach([
                            ['label' => 'About Us',    'route' => route('about.index')],
                            ['label' => 'Services',    'route' => route('services.index')],
                            ['label' => 'Results',     'route' => route('home') . '#results'],
                            ['label' => 'Framework',   'route' => route('home') . '#framework'],
                            ['label' => 'Contact',     'route' => route('contact.index')],
                        ] as $link)
                        <li>
                            <a href="{{ $link['route'] }}"
                               class="text-white/35 hover:text-white/75 text-sm transition-colors duration-150 flex items-center gap-1.5 group">
                                <span class="w-1 h-1 rounded-full bg-neon-purple/40 group-hover:bg-neon-purple transition-colors duration-150 shrink-0"></span>
                                {{ $link['label'] }}
                            </a>
                        </li>
                        @endforeach
                        @auth
                        <li>
                            <a href="{{ route('dashboard') }}"
                               class="text-white/35 hover:text-white/75 text-sm transition-colors duration-150 flex items-center gap-1.5 group">
                                <span class="w-1 h-1 rounded-full bg-neon-purple/40 group-hover:bg-neon-purple transition-colors duration-150 shrink-0"></span>
                                Dashboard
                            </a>
                        </li>
                        @endauth
                    </ul>
                </div>

            </div>

            {{-- Divider --}}
            <div class="divider mb-8"></div>

            {{-- Bottom bar --}}
            <div class="flex flex-col sm:flex-row items-center justify-between gap-4">
                <p class="text-white/25 text-xs">
                    &copy; {{ date('Y') }} NotOps Consulting Ltd. All rights reserved.
                </p>
                <div class="flex items-center gap-6">
                    <span class="text-white/15 text-xs">Technical &amp; Operational Excellence</span>
                    <span class="w-1 h-1 rounded-full bg-white/10"></span>
                    <span class="text-white/15 text-xs">Confidential by default</span>
                </div>
            </div>
        </div>
    </div>

</footer>
