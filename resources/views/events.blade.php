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
            Chaque pas compte dans notre lutte pour l'équité environnementale. Rejoignez nos sessions de sensibilisation, nos ateliers techniques et nos missions de terrain pour transformer le plaidoyer en impact tangible au sein de nos communautés.
          </p>
        </div>
      </div>
    </section>
    <!--Featured Event (Spotlight)-->
    <section class="mb-12 md:mb-20">
      <div class="max-w-[1200px] mx-auto px-4 md:px-margin-desktop">
        <div
          class="relative overflow-hidden rounded-lg bg-primary-container text-on-primary flex flex-col md:flex-row md:min-h-[450px]"
        >
          <div class="md:w-1/2 relative overflow-hidden h-64 md:h-auto">
            <div
              class="absolute inset-0 bg-cover bg-center"
              data-alt="A cinematic, wide-angle photograph of a community meeting in a lush rural landscape. African women leaders stand at the forefront, engaging with a group under the shade of a large ancient tree. The lighting is warm and natural, emphasizing the organic connection between the people and their land. The style is editorial, professional, and grounded in authenticity."
              style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCjpDzUwgyVU2Hp1iSiaepgPSQMkqet6MPOLtvmUAO9FEWfC528Yj4GZmTHT5gIfUqXJ2t3veiYvNdGG4alWZbChVSHIS9N3w9dQJYvirgALyuPycyrx-gdHVDoW1WEGR3layMyB3XG0ZLJtvDOJ1pMA74pNYdV_JWVUdElnLMZMdhYZUCxIS7ncj7xjxTb7Ledp1Wermt6VROBNNbS_ZztRt1EsFSlQrpgbXEQswxI82LZTzJxW31lqw')"
            ></div>
          </div>
          <div class="md:w-1/2 p-6 md:p-12 flex flex-col justify-center">
            <div class="flex items-center gap-2 mb-4">
              <span
                class="bg-secondary text-on-secondary px-3 py-1 text-label-sm font-bold tracking-wider"
              >
                Événement Majeur
              </span>
              <span class="text-label-sm font-medium opacity-80">15 Juillet 2024</span>
            </div>
            <h2 class="text-2xl md:text-headline-lg font-headline-lg mb-4 text-primary-fixed">
              Conférence Justice Climatique et Droits Fonciers
            </h2>
            <p class="text-body-md opacity-90 mb-8">
              Un sommet régional réunissant leaders communautaires, experts juridiques et défenseurs de l'environnement pour discuter des stratégies de protection des terres ancestrales contre l'exploitation minière non réglementée.
            </p>
            <div class="flex flex-wrap gap-4">
              <button
                class="border border-outline-variant text-on-primary px-8 py-3 font-label-md hover:bg-white/10 transition-all w-full md:w-auto"
              >
                Voir les détails
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--Filter & View Controls-->
    <section class="top-20 z-40 bg-surface/90 backdrop-blur-sm py-4 md:py-6 border-y border-primary/5">
      <div
        class="max-w-[1200px] mx-auto px-4 md:px-margin-desktop flex flex-col md:flex-row justify-between items-center gap-6"
      >
        <!--Category Filters-->
        <div class="flex flex-wrap items-center justify-center md:justify-start gap-2">
          <button class="px-4 py-2 text-label-md active-filter rounded-full transition-all">
            Tous
          </button>
          <button
            class="px-4 py-2 text-label-md bg-[#eae8e3] text-on-surface-variant hover:bg-surface-variant rounded-full transition-all"
          >
            Sensibilisation
          </button>
          <button
            class="px-4 py-2 text-label-md bg-[#eae8e3] text-on-surface-variant hover:bg-surface-variant rounded-full transition-all"
          >
            Ateliers
          </button>
          <button
            class="px-4 py-2 text-label-md bg-[#eae8e3] text-on-surface-variant hover:bg-surface-variant rounded-full transition-all"
          >
            Plaidoyer
          </button>
          <button
            class="px-4 py-2 text-label-md bg-[#eae8e3] text-on-surface-variant hover:bg-surface-variant rounded-full transition-all"
          >
            Missions de Terrain
          </button>
        </div>
        <!--View Switcher-->
        <div
          class="flex items-center bg-surface-container rounded-lg p-1 border border-outline-variant/30 w-full md:w-auto"
        >
          <button
            class="flex items-center justify-center gap-2 px-4 py-2 text-label-md bg-surface text-primary shadow-sm rounded w-1/2 md:w-auto"
            id="listViewBtn"
          >
            <span class="material-symbols-outlined text-[20px]">list</span>
            Liste
          </button>
          <button
            class="flex items-center justify-center gap-2 px-4 py-2 text-label-md text-on-surface-variant hover:text-primary transition-all w-1/2 md:w-auto"
            id="calendarViewBtn"
          >
            <span class="material-symbols-outlined text-[20px]">calendar_month</span>
            Calendrier
          </button>
        </div>
      </div>
    </section>
    <!--Events Container-->
    <section class="py-12 md:py-16">
      <div class="max-w-[1200px] mx-auto px-4 md:px-margin-desktop">
        <!--Grid View-->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-[2rem]" id="eventsGrid">
          <!--Card 1-->
          <div
            class="flex flex-col bg-surface-container-low group hover:border-primary/30 transition-all duration-300"
          >
            <div class="relative h-48 overflow-hidden">
              <div
                class="absolute inset-0 bg-cover bg-center group-hover:scale-105 transition-transform duration-500"
                data-alt="Close-up of hands working together to plant a native tree sapling in rich, dark soil. The focus is sharp on the interaction between the hands and the earth. The color palette is dominated by deep forest greens and earthy browns, with soft morning light filtering through. Professional nature photography style."
                style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBc9ojQ1vBS1rN545pPxM4X-8MMkKMDMHu7IbN_u3J07W7LWJsLZupBF3LXiXryHTsDYY5wnD8yGCx_ja8UIesUuM2OgBsPbzP4N7MSguqjBd4XUwW1x5Xt9j2peY-6mgFzaQ_PAnzRjUOmmeJ5d8P53C2VVIpqjUlX-Cpbp9MLzg2yQI8qnuKcicuwsARvTrxEEafdRMARjPDnL3D73Ll0cHIw8vCQIgCz3BIkTHb9icKrxtwzrypf8Q')"
              ></div>
              <div class="absolute top-4 left-4">
                <span
                  class="bg-primary text-on-primary px-3 py-1 text-label-sm uppercase font-bold tracking-tighter"
                >
                  À venir
                </span>
              </div>
            </div>
            <div class="p-6 md:p-8 flex flex-col flex-grow">
              <div class="flex items-center gap-2 text-secondary font-label-md mb-3">
                <span class="material-symbols-outlined text-[18px]">event</span>
                22 Juin 2024 • 09:00
              </div>
              <h3
                class="text-xl md:text-headline-md font-headline-md mb-3 group-hover:text-primary transition-colors leading-tight"
              >
                Atelier sur l'Orpaillage Durable
              </h3>
              <p class="text-on-surface-variant text-body-md mb-6 flex-grow">
                Introduction aux techniques d'extraction respectueuses de l'écosystème local et sensibilisation aux dangers du mercure.
              </p>
              <div class="flex items-center gap-2 text-on-surface-variant text-label-md mb-6">
                <span class="material-symbols-outlined text-[18px]">location_on</span>
                Région de l'Est, Cameroun
              </div>
              <button
                class="w-full py-4 border border-[#89502e] text-on-primary font-bold hover:opacity-90 transition-all uppercase tracking-widest text-label-sm"
              >
                Voir les détails
              </button>
            </div>
          </div>
          <!--Card 2-->
          <div
            class="flex flex-col bg-surface-container-low group hover:border-primary/30 transition-all duration-300"
          >
            <div class="relative h-48 overflow-hidden">
              <div
                class="absolute inset-0 bg-cover bg-center group-hover:scale-105 transition-transform duration-500"
                data-alt="A portrait of a group of diverse women environmental defenders sitting together in a modern, light-filled conference room. They are engaged in deep discussion, with documents and maps on the table. The lighting is clean and professional. The mood is serious, empowered, and collaborative."
                style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuC3CCWPBnIjheGqZn6Tvb0BvXXCVfEVMoQcCOVKjhzKvo5JKnpWtzC45LCiS73mJRNbDjsN2rEXahydgBWiZDmWjXo7vHuXkbEyvA5jmBpPRkg725QHo-wEuHOTPN3Vif17nZNmYaA5mCuauIYAtwJ07Pf4VHorTOha_Abi9OnueauEgYKIHAqycUlai3PxdlSLrGQvTSY3ICxcfZWXV2GSDuKULyrf4gWnv8F_bO8PvwY1skzaj41RPg')"
              ></div>
              <div class="absolute top-4 left-4">
                <span
                  class="bg-primary text-on-primary px-3 py-1 text-label-sm uppercase font-bold tracking-tighter"
                >
                  En cours
                </span>
              </div>
            </div>
            <div class="p-6 md:p-8 flex flex-col flex-grow">
              <div class="flex items-center gap-2 text-secondary font-label-md mb-3">
                <span class="material-symbols-outlined text-[18px]">event</span>
                18 Juin 2024 • 14:00
              </div>
              <h3
                class="text-xl md:text-headline-md font-headline-md mb-3 group-hover:text-primary transition-colors leading-tight"
              >
                Justice Climatique &amp; Genre
              </h3>
              <p class="text-on-surface-variant text-body-md mb-6 flex-grow">
                Webinaire sur l'impact disproportionné du changement climatique sur les femmes en milieu rural.
              </p>
              <div class="flex items-center gap-2 text-on-surface-variant text-label-md mb-6">
                <span class="material-symbols-outlined text-[18px]">videocam</span>
                Visioconférence Zoom
              </div>
              <button
                class="w-full py-4 border border-[#89502e] text-on-primary font-bold hover:opacity-90 transition-all uppercase tracking-widest text-label-sm"
              >
                Voir les détails
              </button>
            </div>
          </div>
          <!--Card 6-->
          <div
            class="flex flex-col bg-surface-container-low group hover:border-primary/30 transition-all duration-300"
          >
            <div class="relative h-48 overflow-hidden">
              <div
                class="absolute inset-0 bg-cover bg-center group-hover:scale-105 transition-transform duration-500"
                data-alt="An artistic representation of law and nature. A wooden gavel resting on a table next to a small, vibrant green plant in a pot. In the background, a large window reveals a forest. The lighting is soft and contemplative, suggesting the gravity and hope of environmental law."
                style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCn2tnXM00OG-GeHBXOAO5BdfY2T14sPe72Rf3zmqCTkITsUNQHuzAf9N4-JB6kcdtKeCzeoTf_PbOvp8ZGfAicUjW7XBeV8P0FB1TfA7bOhmaLBVPfcLk0mhLUrhuffkyqJe60R173i2B_G5PdNHRZ59Eht3TU46BPusyp3JeyLyYFX9ItByZvtoPokOzwXro6QEK4YFbNhX-NlXZqejHpslMJXN1NjPvwoRozip2N255QzxARxaZORw')"
              ></div>
              <div class="absolute top-4 left-4">
                <span
                  class="bg-primary text-on-primary px-3 py-1 text-label-sm uppercase font-bold tracking-tighter"
                >
                  À venir
                </span>
              </div>
            </div>
            <div class="p-6 md:p-8 flex flex-col flex-grow">
              <div class="flex items-center gap-2 text-secondary font-label-md mb-3">
                <span class="material-symbols-outlined text-[18px]">event</span>
                12 Juillet 2024 • 15:00
              </div>
              <h3
                class="text-xl md:text-headline-md font-headline-md mb-3 group-hover:text-primary transition-colors leading-tight"
              >
                Clinique Juridique Environnementale
              </h3>
              <p class="text-on-surface-variant text-body-md mb-6 flex-grow">
                Conseils gratuits pour les citoyens victimes de pollutions industrielles et minières.
              </p>
              <div class="flex items-center gap-2 text-on-surface-variant text-label-md mb-6">
                <span class="material-symbols-outlined text-[18px]">location_on</span>
                Siège EcoJustice, Yaoundé
              </div>
              <button
                class="w-full py-4 border border-[#89502e] text-primary font-bold hover:bg-primary hover:text-on-primary transition-all uppercase tracking-widest text-label-sm"
              >
                Voir les détails
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <script src="{{ asset('js/events.js') }}"></script>
@endsection