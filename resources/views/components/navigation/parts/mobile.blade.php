<div 
        @click="opened = !opened; $dispatch('foo', opened)"
    class="w-8 h-8 md:hidden flex items-center border rounded-sm border-secondary-900 justify-center">
        <div x-show="!opened">
                <x-menu-trigger  />
        </div>
        <span x-show="opened">
                X
        </span>
</div>

<div 
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 translate-y-10"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-300"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0 translate-y-10"
        x-show="opened"
        class="h-[calc(100vh-80px)] z-50 overflow-y-scroll origin-top absolute top-20 left-0 right-0 bg-secondary-400 p-5">
        

        <h5 
                x-transition:enter="transition ease-out delay-300 duration-300"
                x-transition:enter-start="opacity-0 translate-y-10"
                x-transition:enter-end="opacity-100"
                x-transition:leave="transition ease-in duration-300"
                x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0 translate-y-10"
                x-show="opened"
                class="text-lg text-primary-400 font-[500] mb-4">
                Servizi
        </h5>

        <ul
                x-transition:enter="transition ease-out delay-300 duration-300"
                x-transition:enter-start="opacity-0 translate-y-10"
                x-transition:enter-end="opacity-100"
                x-transition:leave="transition ease-in duration-300"
                x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0 translate-y-10"
                x-show="opened"
                class="flex flex-col gap-y-3">
                <li class="flex items-center gap-x-2">
                        <span>
                                <x-icon.flutter-icon />     
                        </span>
                        <a href="" class="text-primary-400 hover:text-primary-600 transition-colors duration-150 text-base">
                                Sviluppo applicazioni mobile
                        </a>
                </li>
                <li class="flex items-center gap-x-2">
                        <span>
                                <x-icon.laravel-icon />     
                        </span>
                        <a href="" class="text-primary-400 hover:text-primary-600 transition-colors duration-150 text-base">
                                Soluzioni custom, CRM and more
                        </a>
                </li>
                <li class="flex items-center gap-x-2">
                        <span>
                                <x-icon.figma-icon />     
                        </span>
                        <a href="" class="text-primary-400 hover:text-primary-600 transition-colors duration-150 text-base">
                                Studio UX, sviluppo UI
                        </a>
                </li>
                <li class="flex items-center gap-x-2">
                        <span>
                                <x-icon.wordpress-icon />     
                        </span>
                        <a href="" class="text-primary-400 hover:text-primary-600 transition-colors duration-150 text-base">
                                Siti vetrina, ecommerce
                        </a>
                </li>
        </ul>

        <h5 
                x-transition:enter="transition ease-out delay-300 duration-300"
                x-transition:enter-start="opacity-0 translate-y-10"
                x-transition:enter-end="opacity-100"
                x-transition:leave="transition ease-in duration-300"
                x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0 translate-y-10"
                x-show="opened"
                class="text-lg text-primary-400 font-[500] mt-8 mb-4">
                Per le agenzie
        </h5>
        
        <ul
                x-transition:enter="transition ease-out delay-300 duration-300"
                x-transition:enter-start="opacity-0 translate-y-10"
                x-transition:enter-end="opacity-100"
                x-transition:leave="transition ease-in duration-300"
                x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0 translate-y-10"
                x-show="opened"
                class="flex flex-col gap-y-3">
                <li class="flex items-center gap-x-2">
                        <a href="" class="text-primary-400 hover:text-primary-600 transition-colors duration-150 text-base">
                                Servizio in white label
                        </a>
                </li>
        </ul>

        <h5 
                x-transition:enter="transition ease-out delay-300 duration-300"
                x-transition:enter-start="opacity-0 translate-y-10"
                x-transition:enter-end="opacity-100"
                x-transition:leave="transition ease-in duration-300"
                x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0 translate-y-10"
                x-show="opened"
                class="text-lg text-primary-400 font-[500] mt-8 mb-4">
                Case Studies
        </h5>
        
        <ul
                x-transition:enter="transition ease-out delay-300 duration-300"
                x-transition:enter-start="opacity-0 translate-y-10"
                x-transition:enter-end="opacity-100"
                x-transition:leave="transition ease-in duration-300"
                x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0 translate-y-10"
                x-show="opened"
                class="flex flex-col gap-y-3">
                <li class="flex items-center gap-x-2">
                        <a href="" class="text-primary-400 hover:text-primary-600 transition-colors duration-150 text-base">
                                Realizzazione piattaforma Ticketing
                        </a>
                </li>
                <li class="flex items-center gap-x-2">
                        <a href="" class="text-primary-400 hover:text-primary-600 transition-colors duration-150 text-base">
                                Applicazione per OltrePò
                        </a>
                </li>
                <li class="flex items-center gap-x-2">
                        <a href="" class="text-primary-400 hover:text-primary-600 transition-colors duration-150 text-base">
                                Mirage Comics, up to 400% in conversione
                        </a>
                </li>
        </ul>

        <h5 
                x-transition:enter="transition ease-out delay-300 duration-300"
                x-transition:enter-start="opacity-0 translate-y-10"
                x-transition:enter-end="opacity-100"
                x-transition:leave="transition ease-in duration-300"
                x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0 translate-y-10"
                x-show="opened"
                class="text-lg text-primary-400 font-[500] mt-8 mb-4">
                Su di noi
        </h5>

        <ul
                x-transition:enter="transition ease-out delay-300 duration-300"
                x-transition:enter-start="opacity-0 translate-y-10"
                x-transition:enter-end="opacity-100"
                x-transition:leave="transition ease-in duration-300"
                x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0 translate-y-10"
                x-show="opened"
                class="flex flex-col gap-y-3">
                <li class="flex items-center gap-x-2">
                        <a href="" class="text-primary-400 hover:text-primary-600 transition-colors duration-150 text-base">
                                Leggi il blog
                        </a>
                </li>
                <li class="flex items-center gap-x-2">
                        <a href="" class="text-primary-400 hover:text-primary-600 transition-colors duration-150 text-base">
                                Chi siamo
                        </a>
                </li>
        </ul>

        <x-divider />

        <x-link-button
                class="w-full justify-center"
                href="#ciao">
                <x-slot name="icon">
                        <x-heroicon-o-chat-bubble-oval-left-ellipsis
                                                                        class="w-5 h-5 text-white" />
                </x-slot>                                        
                Prenota subito una call
        </x-link-button>

        <x-link-button-secondary
                class="w-full justify-center mt-2"
                href="#ciao">                          
                Contattaci
        </x-link-button-secondary>
</div>