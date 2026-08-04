<footer class="w-full relative bg-primary dark:bg-primary-container mt-20">
  <div
    class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-12 max-w-[1200px] mx-auto px-4 md:px-margin-desktop py-16 md:py-20"
  >
    <!-- Column 1: Branding -->
    <div class="col-span-1">
      <div
        class="text-[1.5rem] font-headline-md text-on-primary dark:text-on-primary-container mb-6"
      >
        Action Misericorde
      </div>
      <p class="text-on-primary/70 text-label-sm mb-6 max-w-xs">
        Travaillant sans relâche pour l'équité environnementale et l'autonomie des communautés depuis plus d'une décennie.
      </p>
      <div class="flex gap-4">
        <a
          class="text-[#ffffff] rounded-full w-10 h-10 border border-on-primary/20 flex items-center justify-center text-on-primary hover:bg-on-primary hover:text-primary transition-all"
          href="#"
        >
          <span class="material-symbols-outlined">share</span>
        </a>
        <a
          class="text-[#ffffff] rounded-full w-10 h-10 border border-on-primary/20 flex items-center justify-center text-on-primary hover:bg-on-primary hover:text-primary transition-all"
          href="#"
        >
          <span class="material-symbols-outlined">public</span>
        </a>
      </div>
    </div>
    
    <!-- Column 2: Focus -->
    <div class="col-span-1">
      <h6 class="text-secondary-container font-headline-md text-label-md uppercase mb-6">Focus</h6>
      <ul class="space-y-4">
        <li>
          <a href="#">
            <p
              class="text-on-primary/70 dark:text-on-primary-container/80 text-body-md hover:text-on-primary transition-all"
            >
              Protection et Droits 
            </p>
          </a>
        </li>
        <li>
          <a href="#">
            <p
              class="text-on-primary/70 dark:text-on-primary-container/80 text-body-md hover:text-on-primary transition-all"
            >
              Paix et Dialogue 
            </p>
          </a>
        </li>
        <li>
          <a href="#">
            <p
              class="text-on-primary/70 dark:text-on-primary-container/80 text-body-md hover:text-on-primary transition-all"
            >
              Résilience Économique 
            </p>
          </a>
        </li>
        <li>
          <a href="#">
            <p
              class="text-on-primary/70 dark:text-on-primary-container/80 text-body-md hover:text-on-primary transition-all"
            >
              Leadership Féministe
            </p>
          </a>
        </li>
      </ul>
    </div>
    
    <!-- Column 3: Navigation -->
    <div class="col-span-1">
      <h6 class="text-secondary-container font-headline-md text-label-md uppercase mb-6">
        L'Organisation
      </h6>
      <ul class="space-y-4">
        <li>
          <a href="{{route('home')}}#missions">
            <p
              class="text-on-primary/80 dark:text-on-primary-container/80 text-body-md hover:text-on-primary underline transition-all"
            >
              Missions et vision
            </p>
          </a>
        </li>
        <li>
          <a href="{{route('events')}}">
            <p
              class="text-on-primary/80 dark:text-on-primary-container/80 text-body-md hover:text-on-primary underline transition-all"
            >
              Evenements et activités
            </p>
          </a>
        </li>
        <li>
          <a href="{{route('contact')}}">
            <p
              class="text-on-primary/80 dark:text-on-primary-container/80 text-body-md hover:text-on-primary underline transition-all"
            >
              Contactez-nous
            </p>
          </a>
        </li>
      </ul>
    </div>
    
    <!-- Column 4: Contact -->
    <div class="col-span-1">
      <h6 class="text-secondary-container font-headline-md text-label-md uppercase mb-6">
        Contact
      </h6>
      <p class="text-on-primary/80 text-body-md mb-2">info@action-misericorde.org</p>
      <p class="text-on-primary/80 text-body-md">+243 993 881 612</p>
      <div class="mt-8">
        <p class="text-label-sm text-on-primary/40 uppercase tracking-widest mb-2">Newsletter</p>
        <div class="flex border-b border-on-primary/30">
          <input
            class="bg-transparent border-none focus:ring-0 text-[#ffffff] placeholder:text-on-primary/30 py-2 w-full text-sm"
            placeholder="Votre email"
            type="email"
          />
          <button
            type="submit"
            class="text-[#ffffff] hover:text-secondary-container transition-colors"
          >
            <span class="material-symbols-outlined">arrow_forward</span>
          </button>
        </div>
      </div>
    </div>
  </div>
  <div class="max-w-[1200px] mx-auto px-4 md:px-margin-desktop py-8 border-t border-on-primary/10">
    <p class="text-on-primary/40 text-label-sm">
      ©
      {{ now()->year }}
      Action misericorde : Protéger , promouvoir, resconstruire.
    </p>
  </div>
</footer>
