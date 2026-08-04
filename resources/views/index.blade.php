@extends('layouts.header')
@section('main')
    <main>
        <!--Hero Section-->
        <section class="relative h-[70vh] md:h-[90vh] min-h-[500px] flex items-end overflow-hidden">
            <div class="absolute inset-0 z-0">
                <img class="w-full h-full object-cover"
                    data-alt="A cinematic, high-resolution photograph of African women entrepreneurs engaged in sustainable agroforestry within a lush, protected tropical landscape. The lighting is warm and golden during the late afternoon, casting long, soft shadows. The visual style is editorial and grounded, emphasizing natural beauty and community leadership. The color palette features deep forest greens, rich earthy browns, and the vibrant colors of traditional textiles."
                    src="{{ asset('images/hero.png') }}" />
                <div class="absolute inset-0 hero-gradient"></div>
            </div>
            <div class="relative z-10 max-w-[1200px] mx-auto px-4 md:px-margin-desktop pb-12 md:pb-24 w-full">
                <div class="max-w-2xl">
                    <span
                        class="inline-block px-4 py-1 bg-secondary text-on-secondary text-label-sm font-label-sm tracking-widest mb-6">
                        Action miséricorde
                    </span>
                    <h1 class="text-4xl md:text-[4rem] font-headline-xl text-white mb-8 lg:text-[4rem] lg:leading-tight">
                        Protéger les droits humains, promouvoir la consolidation de la paix,...
                    </h1>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="{{ route('contact') }}"
                            class="bg-secondary text-[#ffffff] px-8 py-3 font-label-md font-bold text-md hover:brightness-110 transition-all shadow-xl shadow-primary/20 flex justify-center items-center w-full sm:w-auto">
                            Rejoindre le Mouvement
                        </a>
                        <a href="{{ route('home') }}#missions"
                            class="bg-white/10 backdrop-blur-md border border-white/20 text-white px-8 py-3 font-label-md font-bold text-md hover:bg-white/20 transition-all text-center w-full sm:w-auto">
                            Découvrir nos Missions
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!--Mission Section-->
        <section id="missions" class="py-16 md:py-[120px] bg-surface">
            <div
                class="max-w-[1200px] mx-auto px-4 md:px-margin-desktop grid grid-cols-1 md:grid-cols-12 gap-gutter items-center">
                <div class="md:col-span-5 mb-12 md:mb-0">
                    <div class="aspect-[4/5] relative overflow-hidden rounded-lg">
                        <img class="w-full h-full object-cover" data-alt="missionAm" src="{{ asset('images/atelier_2.jpeg') }}" />
                    </div>
                </div>
                <div class="md:col-span-7 md:pl-12">
                    <h2 class="text-label-md font-label-md text-secondary uppercase tracking-[0.2em] mb-4">
                        Notre Mission
                    </h2>
                    <h3 class="text-2xl md:text-[2rem] font-headline-lg text-primary mb-8 leading-tight">
                        Protéger , promouvoir, resconstruire.
                    </h3>
                    <div class="space-y-6">
                        <p class="text-body-lg font-body-lg text-on-surface-variant">
                            Protéger les droits humains, promouvoir la consolidation de la paix et renforcer la résilience
                            socio-économique des populations vulnérables confrontées aux conflits armés, aux déplacements de
                            populations et aux chocs climatiques.
                        </p>
                        <p class="text-body-lg font-body-lg text-on-surface-variant">
                            <b>Notre Vision :</b> Une société juste, pacifique et démocratique dans l'Est de la RDC, où les
                            femmes et les jeunes occupent une place centrale dans la prise de décision, la cohésion sociale
                            et le développement communautaire.
                        </p>
                    </div>
                    <div class="mt-10 flex gap-8 border-t border-primary/10 pt-10">
                        <div>
                            <span class="block text-headline-md font-headline-md text-primary">10+</span>
                            <span class="text-label-sm font-label-sm text-outline uppercase tracking-wider">
                                Années d'Action
                            </span>
                        </div>
                        <div>
                            <span class="block text-headline-md font-headline-md text-primary">15+</span>
                            <span class="text-label-sm font-label-sm text-outline uppercase tracking-wider">
                                Projets Actifs
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Key Stats Bento-->
        <section class="py-16 md:py-[80px] bg-primary text-on-primary">
            <div class="max-w-[1200px] mx-auto px-4 md:px-margin-desktop">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div
                        class="p-10 border border-on-primary/10 bg-primary-container flex flex-col justify-between min-h-[280px]">
                        <span class="material-symbols-outlined text-secondary-container text-4xl"
                            style="font-variation-settings: 'FILL' 1;">
                            groups
                        </span>
                        <div>
                            <div class="text-4xl md:text-[64px] font-headline-xl mb-2">500+</div>
                            <p class="text-label-md font-label-md text-on-primary-container uppercase tracking-widest">
                                Personnes Sensibilisées
                            </p>
                        </div>
                    </div>
                    <div
                        class="p-10 border border-on-primary/10 bg-primary-container flex flex-col justify-between min-h-[280px]">
                        <span class="material-symbols-outlined text-secondary-container text-4xl"
                            style="font-variation-settings: 'FILL' 1;">
                            female
                        </span>
                        <div>
                            <div class="text-4xl md:text-[64px] font-headline-xl mb-2">300+</div>
                            <p class="text-label-md font-label-md text-on-primary-container uppercase tracking-widest">
                                Femmes Accompagnées
                            </p>
                        </div>
                    </div>
                    <div
                        class="p-10 border border-on-primary/10 bg-primary-container flex flex-col justify-between min-h-[280px]">
                        <span class="material-symbols-outlined text-secondary-container text-4xl"
                            style="font-variation-settings: 'FILL' 1;">
                            forest
                        </span>
                        <div>
                            <div class="text-4xl md:text-[64px] font-headline-xl mb-2">10+</div>
                            <p class="text-label-md font-label-md text-on-primary-container uppercase tracking-widest">
                                communautés autonomes
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Featured Event-->
        <section class="py-16 md:py-[120px]">
            <div class="max-w-[1200px] mx-auto px-4 md:px-margin-desktop">
                <div class="flex justify-between items-end mb-12">
                    <div>
                        <h2 class="text-label-md font-label-md text-secondary uppercase tracking-[0.2em] mb-4">
                            Événement à la une
                        </h2>
                        <h3 class="text-2xl md:text-[2rem] font-headline-lg text-primary">Engagement Communautaire</h3>
                    </div>
                    <a class="hidden md:flex items-center gap-2 text-primary font-bold hover:text-secondary transition-colors border-b-2 border-primary/20 pb-1"
                        href="#">
                        Tous les événements
                        <span class="material-symbols-outlined">arrow_forward</span>
                    </a>
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-[3rem]">
                    <div class="lg:col-span-8 group cursor-pointer">
                        <div class="relative aspect-[16/9] overflow-hidden rounded-lg mb-6">
                            <img class="w-full h-full transition-transform duration-700 group-hover:scale-105"
                                data-alt="An educational workshop in a rural mining community, showing a specialist demonstrating the health hazards of mercury and chemicals in artisanal gold mining. The audience consists of attentive community members. The setting is an open-air pavilion with warm natural light filtering through trees. The composition is dynamic and informative, reflecting the NGO's educational mission."
                                src="{{ asset('images/lancement_mise_en_oeuvre.jpeg') }}" />
                        </div>
                        <div class="max-w-2xl">
                            <h4
                                class="text-headline-md font-headline-md text-primary mb-4 group-hover:text-secondary transition-colors">
                                Lancement de mise en œuvre du projet de protection des defenseurs et activistes locales de
                                la justice environnementale , avec l'autorité locale
                            </h4>
                            <p class="text-body-lg font-body-lg text-on-surface-variant mb-6">
                                Une session interactive pour informer les communautés locales sur l'impact dévastateur du
                                mercure sur la santé et les nappes phréatiques, tout en proposant des alternatives durables.
                            </p>
                            <div class="flex items-center gap-6">
                                <span class="flex items-center gap-2 text-label-md text-outline">
                                    <span class="material-symbols-outlined text-secondary">location_on</span>
                                    Baraka, Sud-Kivu, RDC
                                </span>
                                <span class="flex items-center gap-2 text-label-md text-outline">
                                    <span class="material-symbols-outlined text-secondary">calendar_today</span>
                                    24 avril 2024
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="lg:col-span-4 space-y-8">
                        <div class="p-8 border border-primary/10 bg-surface-container-low rounded-lg">
                            <h5 class="text-label-md font-bold text-primary uppercase mb-4">
                                Prochaines Sessions
                            </h5>
                            <ul class="space-y-6">
                                <li class="flex gap-4">
                                    <div
                                        class="bg-primary text-on-primary w-12 h-12 flex flex-col items-center justify-center shrink-0">
                                        <span class="text-xs">DEC</span>
                                        <span class="font-bold">02</span>
                                    </div>
                                    <div>
                                        <h6 class="font-bold text-primary hover:text-secondary cursor-pointer">
                                            Atelier : Droits Fonciers des Femmes
                                        </h6>
                                        <p class="text-label-sm text-outline">Siège Central</p>
                                    </div>
                                </li>
                                <li class="flex gap-4">
                                    <div
                                        class="bg-primary text-on-primary w-12 h-12 flex flex-col items-center justify-center shrink-0">
                                        <span class="text-xs">DEC</span>
                                        <span class="font-bold">14</span>
                                    </div>
                                    <div>
                                        <h6 class="font-bold text-primary hover:text-secondary cursor-pointer">
                                            Conférence : Impact du Changement Climatique
                                        </h6>
                                        <p class="text-label-sm text-outline">Online</p>
                                    </div>
                                </li>
                                <li class="flex gap-4">
                                    <div
                                        class="bg-primary text-on-primary w-12 h-12 flex flex-col items-center justify-center shrink-0">
                                        <span class="text-xs">JAN</span>
                                        <span class="font-bold">10</span>
                                    </div>
                                    <div>
                                        <h6 class="font-bold text-primary hover:text-secondary cursor-pointer">
                                            Lancement : Micro-crédit Vert
                                        </h6>
                                        <p class="text-label-sm text-outline">Zone Rurale Ouest</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div
                            class="relative h-48 bg-secondary overflow-hidden rounded-lg p-8 flex flex-col justify-center items-center text-center">
                            <div class="absolute inset-0 opacity-10">
                                <svg height="100%" preserveaspectratio="none" viewbox="0 0 100 100" width="100%">
                                    <path d="M0,50 Q25,0 50,50 T100,50" fill="none" stroke="white" stroke-width="2">
                                    </path>
                                    <path d="M0,70 Q25,20 50,70 T100,70" fill="none" stroke="white" stroke-width="2">
                                    </path>
                                </svg>
                            </div>
                            <h5 class="relative z-10 text-white font-headline-md text-2xl mb-4">Faire un Don</h5>
                            <button
                                class="relative z-10 bg-white text-secondary px-6 py-2 font-bold uppercase text-xs tracking-widest hover:bg-surface-variant transition-all">
                                Soutenir
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--CTA Section-->
        <section class="py-16 md:py-[120px] bg-surface-container relative">
            <div class="max-w-[1200px] mx-auto px-4 md:px-margin-desktop text-center">
                <div class="max-w-3xl mx-auto">
                    <h2 class="text-3xl md:text-[3rem] font-headline-lg text-primary mb-6">
                        Prêt à changer les choses ?
                    </h2>
                    <p class="text-body-lg font-body-lg text-on-surface-variant mb-12">
                        Chaque voix compte, chaque action résonne. Rejoignez une alliance qui place l'humain et la nature au
                        sommet de ses priorités. Ensemble, nous bâtissons un futur équitable.
                    </p>
                    <div class="flex flex-col sm:flex-row justify-center gap-6">
                        <a href="{{ route('contact') }}"
                            class="bg-primary text-[#ffffff] px-10 py-5 font-label-md font-bold text-lg hover:bg-primary-container transition-all flex items-center justify-center gap-3 w-full sm:w-auto">
                            <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">
                                volunteer_activism
                            </span>
                            Nous Soutenir
                        </a>
                        <a href="{{ route('contact') }}"
                            class="hidden lg:block border-[1px] border-[#89502e] text-secondary px-10 py-5 font-label-md font-bold text-lg hover:bg-secondary hover:text-on-secondary transition-all flex items-center justify-center gap-3 w-full sm:w-auto">
                            <span class="material-symbols-outlined">diversity_3</span>
                            Rejoindre le Mouvement
                        </a>
                        <a href="{{ route('contact') }}"
                            class="lg:hidden border-[1px] border-[#89502e] text-secondary px-10 py-5 font-label-md font-bold text-lg hover:bg-secondary hover:text-on-secondary transition-all flex items-center justify-center gap-3 w-full sm:w-auto">
                            <span class="material-symbols-outlined">diversity_3</span>
                            Nous Rejoindre
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
