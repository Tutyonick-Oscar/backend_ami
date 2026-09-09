@extends('layouts.header')
@section('title', 'Calendrier des Événements et activités | Action Miséricorde')
@section('main')
    <main class="min-h-screen">
        <!--Hero Section-->
        <section class="pt-16 md:pt-20 pb-8 md:pb-12 bg-surface">
            <div class="max-w-[1200px] mx-auto px-4 md:px-margin-desktop">
                <div class="max-w-3xl">
                    <h1 class="text-4xl md:text-[4rem] font-headline-xl text-primary mb-6 lg:text-[4rem] leading-tight">
                        Calendrier des Actions et Événements
                    </h1>
                    <p class="text-body-lg text-on-surface-variant leading-relaxed">
                        Chaque pas compte dans notre lutte pour l'équité environnementale. Rejoignez nos sessions de
                        sensibilisation, nos ateliers techniques et nos missions de terrain pour transformer le plaidoyer en
                        impact tangible au sein de nos communautés.
                    </p>
                </div>
            </div>
        </section>
        <!--Featured Event (Spotlight)-->
        <section class="mb-12 md:mb-20">
            <div class="max-w-[1200px] mx-auto px-4 md:px-margin-desktop">
                @if ($activeEvent)
                    <div
                        class="relative overflow-hidden rounded-lg bg-primary-container text-on-primary flex flex-col md:flex-row md:min-h-[450px]">
                        <div class="md:w-1/2 relative overflow-hidden h-64 md:h-auto">
                            <div class="absolute inset-0 bg-cover bg-center"
                                data-alt="A cinematic, wide-angle photograph of a community meeting in a lush rural landscape. African women leaders stand at the forefront, engaging with a group under the shade of a large ancient tree. The lighting is warm and natural, emphasizing the organic connection between the people and their land. The style is editorial, professional, and grounded in authenticity."
                                style="background-image: url(/storage/{{ $activeEvent->avatar }})">
                            </div>
                        </div>
                        <div class="md:w-1/2 p-6 md:p-12 flex flex-col justify-center">
                            <div class="flex items-center gap-2 mb-4">
                                <span
                                    class="bg-secondary text-on-secondary px-3 py-1 text-label-sm font-bold tracking-wider">
                                    Événement Majeur
                                </span>
                                <span class="text-label-sm font-medium opacity-80">
                                    {{ $activeEvent->event_date }}
                                </span>
                            </div>
                            <h2 class="text-2xl md:text-headline-lg font-headline-lg mb-4 text-primary-fixed">
                                {{ $activeEvent->title }}
                            </h2>

                            <p class="text-body-md opacity-90 mb-8">
                                {{ str(strip_tags(str($activeEvent->description)->markdown()))->limit(214) }}
                            </p>
                            <div class="flex flex-wrap gap-4">
                                <a href="{{ route('events.show', ['slug' => $activeEvent->slug]) }}"
                                    class="border border-outline-variant text-on-primary px-8 py-3 font-label-md hover:bg-white/10 transition-all w-full md:w-auto">
                                    Voir les détails
                                </a>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="flex flex-col items-center justify-center bg-surface-container-low p-8 md:p-12 text-center">
                        <h2 class="text-2xl md:text-headline-md font-headline-md mb-4">
                            Aucun événement actif pour le moment
                        </h2>
                        <p class="text-body-md text-on-surface-variant">
                            Nous n'avons actuellement aucun événement actif. Veuillez revenir plus tard pour découvrir nos
                            prochaines actions et activités.
                        </p>
                    </div>
                @endif
        </section>
        <!--Filter & View Controls-->
        <section class="top-20 z-40 bg-surface/90 backdrop-blur-sm py-4 md:py-6 border-y border-primary/5">
            <div
                class="max-w-[1200px] mx-auto px-4 md:px-margin-desktop flex flex-col md:flex-row justify-between items-center gap-6">
                <!--Category Filters-->
                <div class="flex flex-wrap items-center justify-center md:justify-start gap-2">
                    <a href="{{ route('events') }}"
                        class="px-4 py-2 text-label-md {{ !request()->has('category') ? 'active-filter' : 'bg-[#eae8e3] text-on-surface-variant hover:bg-surface-variant' }} rounded-full transition-all">
                        Tous
                    </a>
                    @forelse ($categories as $category)
                        <a href="{{ route('events', ['category' => $category->name]) }}"
                            class="px-4 py-2 text-label-md {{ request('category') == $category->name ? 'active-filter' : 'bg-[#eae8e3] text-on-surface-variant hover:bg-surface-variant' }} rounded-full transition-all">
                            {{ $category->name }}
                        </a>
                    @empty
                    @endforelse
                </div>
                <!--View Switcher-->
                <div
                    class="flex items-center bg-surface-container rounded-lg p-1 border border-outline-variant/30 w-full md:w-auto">
                    <button
                        class="flex items-center justify-center gap-2 px-4 py-2 text-label-md bg-surface text-primary shadow-sm rounded w-1/2 md:w-auto"
                        id="listViewBtn">
                        <span class="material-symbols-outlined text-[20px]">list</span>
                        Liste
                    </button>
                    <button
                        class="flex items-center justify-center gap-2 px-4 py-2 text-label-md text-on-surface-variant hover:text-primary transition-all w-1/2 md:w-auto"
                        id="calendarViewBtn">
                        <span class="material-symbols-outlined text-[20px]">calendar_month</span>
                        Calendrier
                    </button>
                </div>
            </div>
        </section>
        <!--Events Container-->
        <section class="relative py-12 md:py-16">
            <div class="max-w-[1200px] mx-auto px-4 md:px-margin-desktop">
                <!--Grid View-->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-[2rem]" id="eventsGrid">
                    @forelse ($events as $event)
                        <div
                            class="flex flex-col bg-surface-container-low group hover:border-primary/30 transition-all duration-300">
                            <div class="relative h-48 overflow-hidden">
                                <div class="absolute inset-0 bg-cover bg-center group-hover:scale-105 transition-transform duration-500"
                                    data-alt="Close-up of hands working together to plant a native tree sapling in rich, dark soil. The focus is sharp on the interaction between the hands and the earth. The color palette is dominated by deep forest greens and earthy browns, with soft morning light filtering through. Professional nature photography style."
                                    style="background-image: url(/storage/{{ $event->avatar }})">
                                </div>
                                <div class="absolute top-4 left-4">
                                    <span
                                        class="bg-primary text-on-primary px-3 py-1 text-label-sm uppercase font-bold tracking-tighter">
                                        {{ $event->eventSatus() }}
                                    </span>
                                </div>
                            </div>
                            <div class="p-6 md:p-8 flex flex-col flex-grow">
                                <div class="flex items-center gap-2 text-secondary font-label-md mb-3">
                                    <span class="material-symbols-outlined text-[18px]">event</span>
                                    {{ $event->event_date }}
                                </div>
                                <h3
                                    class="text-xl md:text-headline-md font-headline-md mb-3 group-hover:text-primary transition-colors leading-tight">
                                    {{ str($event->title)->limit(60) }}
                                </h3>
                                <div class="text-on-surface-variant text-body-md mb-6 flex-grow">
                                    {{ str(strip_tags(str($event->description)->markdown()))->limit(119) }}
                                </div>
                                <div class="flex items-center gap-2 text-on-surface-variant text-label-md mb-6">
                                    <span class="material-symbols-outlined text-[18px]">location_on</span>
                                    {{ $event->location }}
                                </div>
                                <button
                                    class="w-full py-4 border border-[#89502e] text-on-primary font-bold hover:opacity-90 transition-all uppercase tracking-widest text-label-sm">
                                    <a href="{{ route('events.show',$event->slug) }}">
                                        Voir les détails
                                    </a>
                                </button>
                            </div>
                        </div>
                    @empty
                        <div
                            class="flex flex-col items-center justify-center bg-surface-container-low p-8 md:p-12 text-center">
                            <h2 class="text-2xl md:text-headline-md font-headline-md mb-4">
                                Evenements passés et à venir
                            </h2>
                            <p class="text-body-md text-on-surface-variant">
                                Nous n'avons actuellement aucun événement à afficher. Veuillez revenir plus tard pour
                                découvrir nos
                                prochaines actions et activités.
                            </p>
                        </div>
                    @endforelse
                </div>
                <div class="mt-8">
                    {{ $events->appends(['category' => request('category')])->links() }}
                </div>
            </div>
        </section>
    </main>
    <script src="{{ asset('js/events.js') }}"></script>
@endsection
