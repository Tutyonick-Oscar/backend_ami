@extends('layouts.header')
@section('title', ' Action Miséricorde | À propos de nous')
@section('main')
<main class="">
    <!--Hero Section-->
    <section class="relative flex items-center overflow-hidden max-w-[1200px] mx-auto px-4 md:px-margin-desktop pt-16 md:pt-20 md:pb-16">
      <div class="relative z-10 w-full max-w-container-max mx-auto">
        <div class="max-w-3xl">
          <h1
            class="font-headline-xl text-4xl md:text-[4rem] text-primary mb-6"
          >
            Actions Miséricorde
          </h1>
          <p class="text-body-lg text-on-surface-variant max-w-2xl">
            Engagés pour la justice climatique, l'équité sociale et le renforcement des communautés dans l'Est de la République Démocratique du Congo.
          </p>
        </div>
      </div>
    </section>
    <!--Identity Section (Bento Grid)-->
    <section class="lg:-mt-20 md:py-24 px-4 md:px-margin-desktop max-w-[1200px] mx-auto">
      <div class="grid grid-cols-1 md:grid-cols-12 gap-6">
        <div
          class="md:col-span-8 p-6 md:p-12 bg-surface-container-low rounded-xl flex flex-col justify-between border border-primary/5"
        >
          <div>
            <h2 class="font-headline-md text-2xl md:text-[2rem] text-primary mb-6">
              Ancrage Territorial Et Statut
            </h2>
            <p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl leading-relaxed">
              Actions Miséricorde est une ONGD officiellement reconnue, opérant avec une intégrité absolue depuis son siège social à Baraka Notre présence est ancrée dans le tissu social des zones d'intervention d'Uvira et Fizi, où nous travaillons main dans la main avec les autorités locales et les chefs coutumiers.
            </p>
          </div>
          <div class="mt-12 flex flex-wrap gap-8">
            <div class="flex items-center gap-4">
              <span class="material-symbols-outlined text-4xl text-secondary">location_on</span>
              <div>
                <p class="font-label-sm text-label-sm text-on-surface-variant uppercase">
                  Siège Social
                </p>
                <p class="font-label-md text-label-md text-primary">Baraka, Sud-Kivu, RDC</p>
              </div>
            </div>
            <div class="flex items-center gap-4">
              <span class="material-symbols-outlined text-4xl text-secondary">public</span>
              <div>
                <p class="font-label-sm text-label-sm text-on-surface-variant uppercase">
                  Zones d'Intervention
                </p>
                <p class="font-label-md text-label-md text-primary">
                  Uvira et Territoire de Fizi
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="md:col-span-4 h-64 md:h-full min-h-[300px]">
          <div
            class="w-full h-full rounded-xl overflow-hidden shadow-sm"
          >
            <img
              class="w-full h-full object-cover grayscale opacity-90 hover:grayscale-0 transition-all duration-700"
              data-alt="A detailed map of the South Kivu region in the Democratic Republic of Congo, highlighting the locations of Baraka, Uvira, and Fizi. The map is designed with an elegant, editorial aesthetic, using a soft cream background and deep forest green outlines for geographic features. Subtle textures of the terrain are visible, emphasizing the organization's grounded connection to the local land."
              src="https://lh3.googleusercontent.com/aida-public/AB6AXuDOzlbWnZBiyuDzaAf7KgrgNXB6zsWg7Snz-TOelWqJQwKfvmisCVz4VVkWgE-NlOQyZgCDH2gZZZp-AsIRe5qNQ7455s7wplIvi-WTB8zhCKq2nP9cP3j5T8SV2gjxMUBne0SjJwUgAJvm6s-MY4ZK38HWUG-ARAtSVwaM08uE_ofLEai5fO_LBFbzuu0KeJpYDayy3EdJtfySUxLRjL70_glt39A2Wt7zcC-7ubKyDi2wHTK3n7Xsuw"
            />
          </div>
        </div>
      </div>
    </section>
    <!--Vision & Mission-->
    <section class="bg-primary overflow-hidden relative mx-auto px-4 md:px-[5rem] py-16 md:pt-20 md:pb-16">
      <div class="absolute top-0 right-0 w-1/3 h-full opacity-10 pointer-events-none"></div>
      <div
        class="max-w-[1200px] mx-auto grid grid-cols-1 md:grid-cols-2 gap-12 md:gap-24 relative z-10"
      >
        <div class="space-y-8">
          <h2 class="font-headline-lg text-2xl md:text-headline-lg text-on-primary">Notre Mission</h2>
          <p class="font-body-lg text-body-lg text-primary-fixed-dim leading-relaxed">
            Protéger activement les droits humains et promouvoir une culture de paix durable à travers le renforcement des capacités communautaires, la médiation et l'éducation civique. Nous agissons comme un bouclier pour les vulnérables et un levier pour le changement systémique.
          </p>
          <div class="w-24 h-1 bg-secondary"></div>
        </div>
        <div class="space-y-8">
          <h2 class="font-headline-lg text-2xl md:text-headline-lg text-on-primary">Notre Vision</h2>
          <p class="font-body-lg text-body-lg text-primary-fixed-dim leading-relaxed">
            Une société juste, inclusive et démocratique dans l'Est de la RDC, où chaque individu jouit de ses droits fondamentaux dans un environnement sain, pacifié et propice au développement durable.
          </p>
          <div class="grid grid-cols-2 gap-4 pt-4">
            <div class="p-6 bg-primary-container rounded-lg border border-primary-fixed/10">
              <p class="font-headline-md text-headline-md text-on-primary-container">100%</p>
              <p class="font-label-sm text-label-sm text-primary-fixed-dim uppercase">
                Engagement Local
              </p>
            </div>
            <div class="p-6 bg-primary-container rounded-lg border border-primary-fixed/10">
              <p class="font-headline-md text-headline-md text-on-primary-container">Équité</p>
              <p class="font-label-sm text-label-sm text-primary-fixed-dim uppercase">
                Sociale et Climatique
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--Expertise & Target Groups-->
    <section class="px-4 md:px-margin-desktop max-w-[1200px] mx-auto pt-16 md:pt-20 pb-12 md:pb-16">
      <div class="text-center mb-12 md:mb-20">
        <p class="font-label-md text-label-md text-secondary mb-4 uppercase tracking-widest">
          Nos Piliers d'Action
        </p>
        <h2 class="font-headline-lg text-2xl md:text-[2rem] text-primary">
          Expertise et Publics Cibles
        </h2>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!--Protection Card-->
        <div
          class="group bg-surface-container-low p-8 md:p-10 rounded-xl hover:bg-primary transition-all duration-500 border border-primary/5"
        >
          <span
            class="material-symbols-outlined text-5xl text-secondary mb-8 group-hover:text-primary-fixed transition-colors"
          >
            verified_user
          </span>
          <h3
            class="font-headline-md text-xl md:text-headline-md text-primary group-hover:text-on-primary mb-6"
          >
            Protection et Droits
          </h3>
          <p
            class="font-body-md text-body-md text-on-surface-variant group-hover:text-primary-fixed-dim mb-8"
          >
            Défense juridique, plaidoyer institutionnel et protection des défenseurs des droits humains en zones de conflit.
          </p>
          <ul class="space-y-4">
            <li
              class="flex items-center gap-3 font-label-md text-label-md text-primary group-hover:text-on-primary"
            >
              <span class="w-2 h-2 rounded-full bg-secondary"></span>
              Monitorage des violations
            </li>
            <li
              class="flex items-center gap-3 font-label-md text-label-md text-primary group-hover:text-on-primary"
            >
              <span class="w-2 h-2 rounded-full bg-secondary"></span>
              Assistance juridique
            </li>
          </ul>
        </div>
        <!--Peace Card-->
        <div
          class="group bg-surface-container-low p-8 md:p-10 rounded-xl hover:bg-primary transition-all duration-500 border border-primary/5"
        >
          <span
            class="material-symbols-outlined text-5xl text-secondary mb-8 group-hover:text-primary-fixed transition-colors"
          >
            diversity_3
          </span>
          <h3
            class="font-headline-md text-xl md:text-headline-md text-primary group-hover:text-on-primary mb-6"
          >
            Paix et Dialogue
          </h3>
          <p
            class="font-body-md text-body-md text-on-surface-variant group-hover:text-primary-fixed-dim mb-8"
          >
            Consolidation de la paix sociale via le dialogue inter-communautaire et la résolution non-violente des conflits.
          </p>
          <ul class="space-y-4">
            <li
              class="flex items-center gap-3 font-label-md text-label-md text-primary group-hover:text-on-primary"
            >
              <span class="w-2 h-2 rounded-full bg-secondary"></span>
              Médiation communautaire
            </li>
            <li
              class="flex items-center gap-3 font-label-md text-label-md text-primary group-hover:text-on-primary"
            >
              <span class="w-2 h-2 rounded-full bg-secondary"></span>
              Cohésion sociale
            </li>
          </ul>
        </div>
        <!--Resilience Card-->
        <div
          class="group bg-surface-container-low p-8 md:p-10 rounded-xl hover:bg-primary transition-all duration-500 border border-primary/5"
        >
          <span
            class="material-symbols-outlined text-5xl text-secondary mb-8 group-hover:text-primary-fixed transition-colors"
          >
            trending_up
          </span>
          <h3
            class="font-headline-md text-xl md:text-headline-md text-primary group-hover:text-on-primary mb-6"
          >
            Résilience Économique
          </h3>
          <p
            class="font-body-md text-body-md text-on-surface-variant group-hover:text-primary-fixed-dim mb-8"
          >
            Autonomisation des femmes et déplacés par l'entrepreneuriat vert et les micro-financements communautaires.
          </p>
          <ul class="space-y-4">
            <li
              class="flex items-center gap-3 font-label-md text-label-md text-primary group-hover:text-on-primary"
            >
              <span class="w-2 h-2 rounded-full bg-secondary"></span>
              Micro-crédits solidaires
            </li>
            <li
              class="flex items-center gap-3 font-label-md text-label-md text-primary group-hover:text-on-primary"
            >
              <span class="w-2 h-2 rounded-full bg-secondary"></span>
              Formation aux métiers verts
            </li>
          </ul>
        </div>
      </div>
      <div
        class="mt-12 md:mt-20 p-6 md:p-12 bg-surface-bright border border-primary/10 rounded-2xl flex flex-col md:flex-row items-center gap-8 md:gap-16"
      >
        <div class="md:w-1/2">
          <h3 class="font-headline-md text-2xl md:text-[2rem] text-primary mb-6">Groupes Prioritaires</h3>
          <p class="font-body-lg text-body-lg text-on-surface-variant mb-8 leading-relaxed">
            Nous concentrons nos efforts sur les piliers de la résilience congolaise : les femmes, les jeunes filles et les personnes déplacées par les crises climatiques et sécuritaires.
          </p>
          <div class="flex flex-wrap gap-4">
            <div
              class="px-6 py-3 bg-secondary text-on-secondary rounded-full font-label-md text-label-md"
            >
              Leadership Féminin
            </div>
            <div
              class="px-6 py-3 border border-[#89502e] text-primary rounded-full font-label-md text-label-md"
            >
              Protection des Déplacés
            </div>
          </div>
        </div>
        <div class="md:w-1/2 aspect-[16/9] rounded-xl overflow-hidden shadow-2xl w-full">
          <img
            class="w-full h-full object-cover"
            data-alt="A cinematic portrait of a young Congolese girl in a leadership role, speaking at a community gathering. She has a confident expression, her eyes bright with hope and intelligence. The background shows a blurry but recognizable communal space in Uvira. The lighting is warm and golden, emphasizing a mood of empowerment, resilience, and a bright future for the next generation. Professional editorial photography style with rich textures."
            src="{{ asset('images/atelier_evaluation.jpeg') }}"
          />
        </div>
      </div>
    </section>
    <!--Values & Principles-->
    <section class="bg-surface-container py-16 md:py-20">
      <div class="px-4 md:px-[5rem] max-w-[1200px] mx-auto">
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-12 md:mb-20 gap-8">
          <div>
            <p class="font-label-md text-label-md text-secondary mb-4 uppercase tracking-widest">
              Nos Fondations
            </p>
            <h2 class="font-headline-lg text-2xl md:text-[2rem] text-primary">
              Valeurs et Principes Directeurs
            </h2>
          </div>
          
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 md:gap-12">
          <div class="space-y-6">
            <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center shadow-sm">
              <span class="material-symbols-outlined text-3xl text-primary">psychology_alt</span>
            </div>
            <h4 class="font-headline-md text-headline-md text-primary">Non-violence</h4>
            <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
              La conviction profonde que le changement durable ne peut naître que de processus pacifiques, du dialogue et du respect mutuel.
            </p>
          </div>
          <div class="space-y-6">
            <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center shadow-sm">
              <span class="material-symbols-outlined text-3xl text-primary">woman</span>
            </div>
            <h4 class="font-headline-md text-headline-md text-primary">Leadership Féministe</h4>
            <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
              Placer les femmes au cœur des processus de décision pour transformer les dynamiques de pouvoir et bâtir une équité réelle.
            </p>
          </div>
          <div class="space-y-6">
            <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center shadow-sm">
              <span class="material-symbols-outlined text-3xl text-primary">account_balance</span>
            </div>
            <h4 class="font-headline-md text-headline-md text-primary">Redevabilité</h4>
            <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
              Une transparence totale envers nos bénéficiaires, nos partenaires et la communauté internationale dans l'usage de nos ressources.
            </p>
          </div>
        </div>
      </div>
    </section>
  </main>
  <script src="{{ asset('js/about.js') }}"></script>
@endsection