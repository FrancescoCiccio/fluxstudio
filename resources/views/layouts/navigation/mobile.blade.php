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
                                <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_147_439)">
                                        <path d="M19 9.8C19.0034 11.1199 18.695 12.4219 18.1 13.6C17.3944 15.0117 16.3097 16.1992 14.9674 17.0293C13.6251 17.8594 12.0782 18.2994 10.5 18.3C9.18012 18.3034 7.8781 17.9951 6.69999 17.4L1 19.3L2.9 13.6C2.30493 12.4219 1.99656 11.1199 2 9.8C2.00061 8.22176 2.44061 6.67486 3.27072 5.33256C4.10082 3.99026 5.28825 2.90558 6.69999 2.20001C7.8781 1.60495 9.18012 1.29658 10.5 1.30002H11C13.0843 1.41501 15.053 2.29478 16.5291 3.77087C18.0052 5.24697 18.885 7.21566 19 9.3V9.8Z" stroke="#F6FAFA" stroke-linecap="round" stroke-linejoin="round"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0_147_439">
                                        <rect width="20" height="20" fill="white" transform="translate(0 0.299988)"/>
                                        </clipPath>
                                        </defs>
                                </svg>
                        </x-slot>                                        
                        Prenota subito una call
                </x-link-button>

                <x-link-button-secondary
                        class="w-full justify-center mt-2"
                        href="#ciao">                          
                        Contattaci
                </x-link-button-secondary>
        </div>