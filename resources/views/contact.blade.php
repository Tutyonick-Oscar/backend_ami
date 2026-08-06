@extends('layouts.header')

@section('title','Action Miséricorde | Contactez-nous')
    
@section('main')
    <main>
    <!--Hero Section-->
    <section class="max-w-[1200px] mx-auto px-4 md:px-margin-desktop pt-16 md:pt-20 pb-12 md:pb-16">
      <div class="max-w-3xl">
        <h1
          class="font-headline-xl text-4xl md:text-[4rem] text-primary mb-6 lg:text-[4rem] leading-tight"
        >
          Unissons nos forces pour la paix et la protection des droits humains.
        </h1>
        <p class="text-body-lg text-on-surface-variant max-w-2xl">
          Que vous soyez une organisation souhaitant établir un partenariat, un bénévole potentiel ou une communauté en quête de soutien, notre équipe est à votre écoute.
        </p>
      </div>
    </section>
    <!--Main Content Grid-->
    <section
      class="max-w-[1200px] mx-auto px-4 md:px-margin-desktop grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-[1.5rem] mb-16 md:mb-32"
    >
      <!--Contact Form Column-->
      <div class="lg:col-span-7 bg-surface-container-low p-6 md:p-10 border border-primary/5">
        <h2 class="font-headline-md text-2xl md:text-[2rem] text-primary mb-8">Formulaire de Contact</h2>
        <livewire:contact-form />
      </div>
      <!--Info Sidebar Column-->
      <div class="lg:col-span-5 space-y-12">
        <!--Presence Zones-->
        <div class="bg-primary-container text-on-primary p-6 md:p-10">
          <h3 class="font-headline-md text-xl md:text-headline-md text-on-primary-container mb-4">
            Bénéficiaires prioritaires 
          </h3>
          <p class="text-body-md opacity-90 mb-8">
            Femmes et jeunes filles déplacées internes, Femmes Défenseures des Droits Humains (FDDH), jeunes leaders et communautés d'accueil.
          </p>
          <div
            class="relative w-full aspect-square bg-surface/10 overflow-hidden border border-on-primary-container/20"
          >
            <div
              class="absolute inset-0 bg-cover bg-center grayscale opacity-40 hover:opacity-60 transition-opacity duration-700"
              data-alt="A detailed, minimalist topographic map of West Africa and Central Africa, highlighting ecological zones in deep green and terracotta colors. The map has an editorial, archival feel with clean lines and subtle labels for major river systems and mining regions. Professional lighting emphasizes the texture of the paper-like background."
              style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDOzlbWnZBiyuDzaAf7KgrgNXB6zsWg7Snz-TOelWqJQwKfvmisCVz4VVkWgE-NlOQyZgCDH2gZZZp-AsIRe5qNQ7455s7wplIvi-WTB8zhCKq2nP9cP3j5T8SV2gjxMUBne0SjJwUgAJvm6s-MY4ZK38HWUG-ARAtSVwaM08uE_ofLEai5fO_LBFbzuu0KeJpYDayy3EdJtfySUxLRjL70_glt39A2Wt7zcC-7ubKyDi2wHTK3n7Xsuw')"
            ></div>
          </div>
          <ul class="mt-8 space-y-3">
            <li class="flex items-center gap-3 text-label-md">
              <span class="material-symbols-outlined text-secondary-container">location_on</span>
              Baraka-fizi, Sud-Kivu, RDC
            </li>
            <li class="flex items-center gap-3 text-label-md">
              <span class="material-symbols-outlined text-secondary-container">location_on</span>
              Uvira, Sud-Kivu, RDC
            </li>
            
          </ul>
        </div>
        <!--Social & Channels-->
        <div class="space-y-6">
          <h3 class="font-headline-md text-xl md:text-headline-md text-primary">Suivez notre Action</h3>
          <p class="text-on-surface-variant">
            Restez informé de nos plaidoyers et rapports de terrain via nos plateformes sociales.
          </p>
          <div class="flex flex-wrap gap-4">
            <a
              class="w-12 h-12 flex items-center justify-center border border-[#012d1d] text-primary hover:bg-secondary hover:border-[#89502e] hover:text-[#ffffff] transition-all"
              href="#"
            >
              <span class="material-symbols-outlined">share</span>
            </a>
            <a
              class="w-12 h-12 flex items-center justify-center border border-[#012d1d] text-primary hover:bg-secondary hover:border-[#89502e] hover:text-[#ffffff] transition-all"
              href="#"
            >
              <span class="material-symbols-outlined">public</span>
            </a>
            <a
              class="w-12 h-12 flex items-center justify-center border border-[#012d1d] text-primary hover:bg-secondary hover:border-[#89502e] hover:text-[#ffffff] transition-all"
              href="#"
            >
              <span class="material-symbols-outlined">campaign</span>
            </a>
          </div>
        </div>
      </div>
    </section>
    <!--Reassurance Banner-->
    <section class="w-full bg-surface-variant py-12 md:py-16 mb-16 md:mb-20">
      <div
        class="max-w-[1200px] mx-auto px-4 md:px-margin-desktop grid grid-cols-1 md:grid-cols-3 gap-8 md:gap-gutter text-center"
      >
        <div class="space-y-4">
          <span class="material-symbols-outlined text-4xl text-secondary">verified_user</span>
          <h4 class="font-bold text-primary uppercase tracking-wide">Données Sécurisées</h4>
          <p class="text-sm text-on-surface-variant">
            Vos informations sont traitées avec la plus grande confidentialité conformément au RGPD.
          </p>
        </div>
        <div class="space-y-4">
          <span class="material-symbols-outlined text-4xl text-secondary">groups</span>
          <h4 class="font-bold text-primary uppercase tracking-wide">Partenariats Éthiques</h4>
          <p class="text-sm text-on-surface-variant">
            Nous collaborons uniquement avec des entités alignées sur nos valeurs de durabilité.
          </p>
        </div>
        <div class="space-y-4">
          <span class="material-symbols-outlined text-4xl text-secondary">history_edu</span>
          <h4 class="font-bold text-primary uppercase tracking-wide">Réponse Sous 48h</h4>
          <p class="text-sm text-on-surface-variant">
            Notre équipe d'engagement s'engage à traiter chaque demande dans un délai court.
          </p>
        </div>
      </div>
    </section>
  </main>
  <script src="{{ asset('js/contact.js') }}"></script>
@endsection