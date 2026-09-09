@extends('layouts.header')
@section('title', $event->title)
@section('main')


    <section class=" selection:bg-forest-100 selection:text-forest-900">

        <!-- BEGIN: HeroSection -->
        <div class="pt-10 pb-6 md:pt-14 md:pb-10 border-b border-surface-border bg-stone-50/50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <!-- Article Metadata Breadcrumb / Header Tag -->
                <div
                    class="flex flex-wrap items-center gap-3 text-xs tracking-wide uppercase font-semibold mb-5">
                    <span class="px-2.5 py-1 rounded bg-forest-100 text-forest font-medium">
                        {{ $event->category->name }}
                    </span>
                    <span>•</span>
                    <time datetime="2024-07-15">Publié le {{ $event->created_at->format('d M Y') }}</time>
                    <span>•</span>
                    <span> {{ $event->location }} </span>
                </div>
                <h1
                    class="font-headline-xl text-3xl sm:text-4xl md:text-5xl lg:text-[3.25rem] font-bold text-primary tracking-wide leading-[1.18] max-w-5xl mb-6">
                    {{ $event->title }}
                </h1>
                <!-- Byline & Editorial Social Sharing Row -->
                <div
                    class="flex flex-col sm:flex-row sm:items-center sm:justify-between pt-4 pb-8 border-t border-surface-border/80 gap-4">
                    <div class="flex items-center space-x-3">
                        <div
                            class="w-11 h-11 rounded-full bg-stone-200 border border-stone-300 flex items-center justify-center text-forest font-bold text-sm">
                            {{ str($event->user->name)->substr(0, 2)->upper() }}
                        </div>
                        <div>
                            <p class="text-sm font-semibold text-stone-500">
                                 Publié par <br>{{ $event->user->name }} 
                            </p>
                        </div>
                    </div>
                    <!-- Social Icons  -->
                    <div class="flex items-center space-x-3 text-stone-600">
                        <span class="text-xs text-stone-500 mr-1 hidden sm:inline">Partager :</span>
                        <!-- Twitter / X -->
                        <a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->fullUrl()) }}&text={{ urlencode($event->title) }}"
                           target="_blank"
                           rel="noopener noreferrer"
                           aria-label="Partager sur X"
                           class="w-9 h-9 flex items-center justify-center rounded-full hover:bg-stone-200 transition text-stone-700">
                            <svg class="w-4 h-4" fill="currentColor" viewbox="0 0 24 24">
                                <path
                                    d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z">
                                </path>
                            </svg>
                        </a>
                        <!-- LinkedIn -->
                        <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode(request()->fullUrl()) }}"
                           target="_blank"
                           rel="noopener noreferrer"
                           aria-label="Partager sur LinkedIn"
                           class="w-9 h-9 flex items-center justify-center rounded-full hover:bg-stone-200 transition text-stone-700">
                            <svg class="w-4 h-4" fill="currentColor" viewbox="0 0 24 24">
                                <path
                                    d="M19 3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14m-.5 15.5v-5.3a3.26 3.26 0 0 0-3.26-3.26c-.85 0-1.84.52-2.28 1.3v-1.11h-2.79v8.37h2.79v-4.93c0-.77.62-1.4 1.39-1.4a1.4 1.4 0 0 1 1.4 1.4v4.93h2.75M6.46 8.76a1.4 1.4 0 1 0 0-2.8 1.4 1.4 0 0 0 0 2.8m1.39 9.74v-8.37H5.07v8.37z">
                                </path>
                            </svg>
                        </a>
                        <!-- Facebook -->
                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->fullUrl()) }}"
                           target="_blank"
                           rel="noopener noreferrer"
                           aria-label="Partager sur Facebook"
                           class="w-9 h-9 flex items-center justify-center rounded-full hover:bg-stone-200 transition text-stone-700">
                            <svg class="w-4 h-4" fill="currentColor" viewbox="0 0 24 24">
                                <path
                                    d="M22 12c0-5.52-4.48-10-10-10S2 6.48 2 12c0 4.84 3.44 8.87 8 9.8V15H8v-3h2V9.5C10 7.57 11.57 6 13.5 6H16v3h-2c-.55 0-1 .45-1 1v2h3v3h-3v6.95c5.05-.5 9-4.76 9-9.95z">
                                </path>
                            </svg>
                        </a>
                        <!-- Copy Link -->
                        <button aria-label="Copier le lien de l'événement"
                            onclick="navigator.clipboard.writeText('{{ request()->fullUrl() }}')"
                            class="w-9 h-9 flex items-center justify-center rounded-full hover:bg-stone-200 transition text-stone-700"
                            type="button">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewbox="0 0 24 24">
                                <path
                                    d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </button>
                    </div>
                </div>
                <!-- Featured Visual (Hero Image Full-width) -->
                <figure class="mt-4">
                    <div class="overflow-hidden rounded-xl shadow-lg border border-surface-border bg-stone-900">
                        <img alt="{{ $event->title }}" class="w-full h-auto max-h-[130vh] object-cover"
                            src="/storage/{{ $event->avatar }}" />
                    </div>
                    <figcaption class="mt-3 text-xs sm:text-sm text-stone-600 italic flex items-center justify-right">
                        {{-- <span>Atelier préparatoire d'échantillonnage de toxicité avec les délégués mineurs et les comités de
                            mères paysannes à Baraka.</span> --}}
                        <span
                            class="text-stone-500 not-italic text-[11px] uppercase tracking-wider font-semibold text-right">
                            Archives AMI • RDC</span>
                    </figcaption>
                </figure>
            </div>
        </div>
        <!-- END: HeroSection -->
        <!-- BEGIN: MainContentGrid -->
        <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 md:py-16">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start relative">
                <!-- BEGIN: LeftArticleColumn (Long-form Editorial ~8 cols) -->
                <article class="lg:col-span-8 space-y-10 text-stone-800" data-purpose="article-editorial-content">
                    <!-- Standfirst / Chapô Introductif -->
                    <p
                        class="font-serif text-xl sm:text-2xl text-stone-900 font-normal leading-relaxed border-l-4 border-forest pl-6 py-1">
                        {{ $event->title }}
                    </p>
                    <!-- Chapter 1 -->
                    <div aria-labelledby="heading-chapter-1" class="space-y-5">
                        {!! str($event->description)->markdown()->sanitizeHtml() !!}
                    </div>

                    <!-- Download Concept Note & Whitepaper CTA -->
                    <div
                        class="mt-12 p-8 rounded-xl bg-primary text-on-primary flex flex-col sm:flex-row items-start sm:items-center justify-between gap-6 shadow-md">
                        <div class="space-y-1">
                            <h4 class="font-editorial text-xl font-bold"> Restez informé de nos actualités</h4>
                            <p class="text-sm text-forest-100 max-w-md">
                                Recevez les actes de synthèse et les liens de référence de nos ateliers et conférences
                                directement dans votre boîte mail.
                            </p>
                        </div>
                        <div
                            class="inline-flex items-center px-5 py-3 rounded-lg bg-cream text-forest font-semibold text-sm ">

                            <livewire:newsletter-subscription />
                        </div>
                    </div>
                </article>
                <!-- END: LeftArticleColumn -->
                <!-- BEGIN: RightStickyColumn (Sidebar Agenda & Events ~4 cols) -->
                <aside class="lg:col-span-4" data-purpose="sticky-sidebar-agenda">
                    <!-- The Critical Sticky Container -->
                    <div class="sticky top-24 space-y-6">
                        <!-- Sidebar Header Box -->
                        <div class="bg-surface-card border border-surface-border rounded-xl p-5 shadow-sm">
                            <div class="flex items-center justify-between border-b border-surface-border pb-4 mb-4">
                                <div>

                                    <h3 class="font-editorial text-xl font-bold text-stone-900 mt-1">
                                        Événements recents
                                    </h3>
                                </div>
                                <a class="text-xs font-semibold text-forest hover:underline"
                                    href="{{ route('events') }}">Voir tout</a>
                            </div>
                            <!-- List of Connected Events (Cards) -->
                            <div class="space-y-4">
                                <!-- Card  -->
                                @forelse ($recentsEvents as $recent_event)
                                    <article
                                        class="p-3.5 rounded-lg border border-stone-200/90 hover:border-forest/40 hover:bg-surface-light transition group">
                                        <div
                                            class="flex items-start justify-between text-[11px] font-semibold text-stone-500 mb-1">
                                            <span class="uppercase tracking-wider text-terracotta">{{ $recent_event->category->name }}</span>
                                            <span class="bg-stone-100 px-2 py-0.5 rounded text-stone-700">
                                                {{ $recent_event->eventSatus() }}
                                            </span>
                                        </div>
                                        <h4
                                            class="font-semibold text-sm text-stone-900 group-hover:text-forest transition leading-snug">
                                            <a href="{{ route('events.show', ['slug' => $recent_event->slug]) }}">
                                                {{ str($recent_event->title)->limit(80) }}
                                            </a>
                                        </h4>
                                        <div class="mt-2 flex items-center text-xs text-stone-500 space-x-3">
                                            <span class="flex items-center">
                                                <svg class="w-3.5 h-3.5 mr-1 text-stone-400" fill="none"
                                                    stroke="currentColor" viewbox="0 0 24 24">
                                                    <path
                                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"
                                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                                    </path>
                                                </svg>
                                                {{ $recent_event->location }}
                                            </span>
                                            <span>•</span>
                                            <span>{{ $recent_event->event_date}}</span>
                                        </div>
                                    </article>
                                @empty
                                @endforelse

                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </main>
    </section>
@endsection
