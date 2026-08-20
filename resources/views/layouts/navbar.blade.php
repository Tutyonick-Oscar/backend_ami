<header
  x-data="{ isOpen: false }"
  class="w-full top-0 sticky z-50 border-b border-primary/10 bg-surface"
>
  <div class="flex justify-between items-center max-w-[1200px] mx-auto px-4 md:px-8 h-20">
    <div
      class="text-label-md font-label-md font-bold tracking-widest text-primary dark:text-primary-fixed uppercase"
    >
      <a href="{{route('home')}}">
        <img class="w-[4rem]" src="{{ asset('images/logo.png') }}" alt="AM_logo">
      </a>
    </div>

    <!-- Mobile Toggle -->
    <button @click="isOpen = !isOpen" class="md:hidden p-2 text-primary">
      <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path x-show="!isOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"/>
        <path x-show="isOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
      </svg>
    </button>

    <nav class="hidden md:flex items-center gap-8">
      <a
        class="{{ request()->routeIs('home') && !request()->has('missions') ? 'text-primary font-bold border-b-2 border-primary' : 'text-on-surface-variant dark:text-outline-variant font-medium' }} pb-1 hover:text-secondary dark:hover:text-secondary-fixed transition-colors duration-200"
        href="{{route('home')}}"
      >
        Accueil
      </a>
      <a
        class="{{ request()->routeIs('events') ? 'text-primary font-bold border-b-2 border-primary' : 'text-on-surface-variant dark:text-outline-variant font-medium' }} pb-1 hover:text-secondary dark:hover:text-secondary-fixed transition-colors duration-200"
        href="{{route('events')}}"
      >
        Evenements
      </a>
      <a
        class="{{ request()->routeIs('about') ? 'text-primary font-bold border-b-2 border-primary' : 'text-on-surface-variant dark:text-outline-variant font-medium' }} pb-1 hover:text-secondary dark:hover:text-secondary-fixed transition-colors duration-200"
        href="{{route('about')}}"
      >
        A propos
      </a>
      <a
        class="{{ request()->routeIs('contact') ? 'text-primary font-bold border-b-2 border-primary' : 'text-on-surface-variant dark:text-outline-variant font-medium' }} pb-1 hover:text-secondary dark:hover:text-secondary-fixed transition-colors duration-200"
        href="{{route('contact')}}"
      >
        Contact
      </a>
    </nav>
    <div class="hidden md:flex items-center gap-4">
      
      <span
        class="bg-secondary text-on-secondary px-6 py-2.5 rounded-lg font-label-md font-bold hover:bg-primary-container transition-all active:opacity-80"
      >
        <a href="{{route('contact')}}">Nous soutenir</a>
    </span>
    </div>
  </div>

  <!-- Mobile Menu -->
  <div x-show="isOpen" class="md:hidden bg-surface border-t border-primary/10 p-4 flex flex-col gap-4">
    <a
      class="{{ request()->routeIs('home') ? 'text-primary font-bold' : 'text-on-surface-variant' }} font-medium py-2 hover:text-secondary transition-colors"
      href="{{route('home')}}"
      @click="isOpen = false"
    >
      Accueil
    </a>
    <a
      class="{{ request()->routeIs('events') ? 'text-primary font-bold' : 'text-on-surface-variant' }} font-medium py-2 hover:text-secondary transition-colors"
      href="{{route('events')}}"
      @click="isOpen = false"
    >
      Evenements
    </a>
    <a
      class="{{ request()->routeIs('about') ? 'text-primary font-bold' : 'text-on-surface-variant' }} font-medium py-2 hover:text-secondary transition-colors"
      href="{{route('about')}}"
      @click="isOpen = false"
    >
      A propos
    </a>
    <a
      class="{{ request()->routeIs('contact') ? 'text-primary font-bold' : 'text-on-surface-variant' }} font-medium py-2 hover:text-secondary transition-colors"
      href="{{route('contact')}}"
      @click="isOpen = false"
    >
      Contact
    </a>
    <a
      class="bg-secondary text-[#ffffff] px-6 py-3 rounded-lg font-label-md font-bold text-center hover:bg-primary-container transition-all"
      href="{{route('contact')}}"
      @click="isOpen = false"
    >
      Nous soutenir
    </a>
  </div>
</header>
