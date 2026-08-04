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
        class="text-on-surface-variant dark:text-outline-variant font-medium pb-1 hover:text-secondary dark:hover:text-secondary-fixed transition-colors duration-200"
        href="{{route('home')}}#missions"
      >
        Missions
      </a>
      <a
        class="text-on-surface-variant dark:text-outline-variant font-medium pb-1 hover:text-secondary dark:hover:text-secondary-fixed transition-colors duration-200"
        href="{{route('events')}}"
      >
        Events
      </a>
      <a
        class="text-on-surface-variant dark:text-outline-variant font-medium pb-1 hover:text-secondary dark:hover:text-secondary-fixed transition-colors duration-200"
        href="{{route('about')}}"
      >
        About
      </a>
      <a
        class="text-on-surface-variant dark:text-outline-variant font-medium pb-1 hover:text-secondary dark:hover:text-secondary-fixed transition-colors duration-200"
        href="{{route('contact')}}"
      >
        Contact
      </a>
    </nav>
    <div class="hidden md:flex items-center gap-4">
      
      <span
        class="bg-primary text-on-primary px-6 py-2.5 rounded-lg font-label-md font-bold hover:bg-primary-container transition-all active:opacity-80"
      >
        <a href="{{route('contact')}}">Support Our Work</a>
    </span>
    </div>
  </div>

  <!-- Mobile Menu -->
  <div x-show="isOpen" class="md:hidden bg-surface border-t border-primary/10 p-4 flex flex-col gap-4">
    <a
      class="text-on-surface-variant font-medium py-2 hover:text-secondary transition-colors"
      href="{{route('home')}}#missions"
      @click="isOpen = false"
    >
      Missions
    </a>
    <a
      class="text-on-surface-variant font-medium py-2 hover:text-secondary transition-colors"
      href="{{route('events')}}"
      @click="isOpen = false"
    >
      Events
    </a>
    <a
      class="text-on-surface-variant font-medium py-2 hover:text-secondary transition-colors"
      href="{{route('about')}}"
      @click="isOpen = false"
    >
      About
    </a>
    <a
      class="text-on-surface-variant font-medium py-2 hover:text-secondary transition-colors"
      href="{{route('contact')}}"
      @click="isOpen = false"
    >
      Contact
    </a>
    <a
      class="bg-primary text-[#ffffff] px-6 py-3 rounded-lg font-label-md font-bold text-center hover:bg-primary-container transition-all"
      href="{{route('contact')}}"
      @click="isOpen = false"
    >
      Support Our Work
    </a>
  </div>
</header>
