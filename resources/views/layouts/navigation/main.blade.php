{{-- Here Navigation --}}
<nav x-data="{opened: false}" class="container mx-auto h-20 p-5 flex justify-between items-center relative z-50">

        
        <div class="lg:w-1/3">

                <x-application-logo />
        </div>

        <div class="hidden md:flex lg:w-1/3 justify-center">

                <ul class="flex gap-x-4">
                        <li class="flex gap-x-2 font-medium relative items-center" x-data="{opened: false}">
                                <span @click="opened = true" class="cursor-pointer">
                                        Servizi
                                </span class="cursor-pointer">
                                <div 
                                        :class="opened ? 'transform rotate-180' : ''"
                                        class="transition-transform duration-300 origin-center"> 
                                        <svg width="11" height="7" viewBox="0 0 11 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.49999 6.70799L0.191986 1.39999L0.899986 0.691986L5.49999 5.29199L10.1 0.691986L10.808 1.39999L5.49999 6.70799Z" fill="#666666"/>
                                        </svg>
                                </div>

                                <div 
                                        @click.outside="opened = false"
                                        x-transition:enter="transition ease-out duration-300"
                                        x-transition:enter-start="opacity-0 translate-y-10"
                                        x-transition:enter-end="opacity-100"
                                        x-transition:leave="transition ease-in duration-300"
                                        x-transition:leave-start="opacity-100"
                                        x-transition:leave-end="opacity-0 translate-y-10"
                                        class="absolute top-full left-1/2 mt-4 transform -translate-x-1/2 p-5 max-w-xl w-[900px] bg-white border border-secondary-900 border-solid rounded-2xl flex gap-x-2 shadow-secondary-900/50 shadow-xl" 
                                        x-show="opened">
                                        

                                        <div class="w-2/3 flex flex-col">

                                                <div class="flex hover:bg-secondary-400 transition-all p-2 rounded-lg duration-300 items-start pr-4 cursor-pointer">
                                                        <div class="p-2">
                                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <g clip-path="url(#clip0_188_219)">
                                                                        <g clip-path="url(#clip1_188_219)">
                                                                        <path d="M8.5951 11.33H0.705078V19.22H8.5951V11.33Z" stroke="#414141" stroke-miterlimit="10" stroke-linecap="round"/>
                                                                        <path d="M8.5951 3.33496H0.705078V11.225H8.5951V3.33496Z" stroke="#414141" stroke-miterlimit="10" stroke-linecap="round"/>
                                                                        <path d="M16.5345 11.3301H8.64455V19.2201H16.5345V11.3301Z" stroke="#414141" stroke-miterlimit="10" stroke-linecap="round"/>
                                                                        <path d="M15.2608 8.17C17.3788 8.17 19.0958 6.453 19.0958 4.335C19.0958 2.21699 17.3788 0.5 15.2608 0.5C13.1428 0.5 11.4258 2.21699 11.4258 4.335C11.4258 6.453 13.1428 8.17 15.2608 8.17Z" stroke="#414141" stroke-miterlimit="10" stroke-linecap="round"/>
                                                                        <path d="M5.33009 19.22H19.62" stroke="black" stroke-miterlimit="10"/>
                                                                        </g>
                                                                        </g>
                                                                        <defs>
                                                                        <clipPath id="clip0_188_219">
                                                                        <rect width="20" height="20" fill="white"/>
                                                                        </clipPath>
                                                                        <clipPath id="clip1_188_219">
                                                                        <rect width="20" height="20" fill="white"/>
                                                                        </clipPath>
                                                                        </defs>
                                                                </svg>
                                                                        
                                                        </div>
                                                        <div>
                                                                <h4>
                                                                        Soluzioni custom
                                                                </h4>
                                                                <p class="text-sm text-primary-400 font-light">
                                                                        CRM, Gestionali, software personali
                                                                </p>
                                                        </div>
                                                </div>

                                                <div class="flex hover:bg-secondary-400 transition-all p-2 rounded-lg duration-300 items-start pr-4 cursor-pointer">
                                                        <div class="p-2">
                                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <g clip-path="url(#clip0_188_169)">
                                                                        <path d="M13.1331 5.36658H4.07063L5.64979 14.9041C5.75812 15.5708 6.38729 16.1083 7.05395 16.1083H16.0165" stroke="#414141" stroke-miterlimit="10"/>
                                                                        <path d="M6.5918 13.3291H16.6626C17.196 13.3291 17.6251 13.0124 17.7585 12.5249L19.2001 7.24992C19.4418 6.36242 18.6293 5.36658 17.6585 5.36658H16.671" stroke="#414141" stroke-miterlimit="10"/>
                                                                        <path d="M4.07103 5.36664C3.65853 2.86664 2.97936 1.84998 0.200195 1.84998" stroke="#414141" stroke-miterlimit="10"/>
                                                                        <path d="M7.583 18.2833C8.15829 18.2833 8.62467 17.8169 8.62467 17.2416C8.62467 16.6663 8.15829 16.2 7.583 16.2C7.00771 16.2 6.54134 16.6663 6.54134 17.2416C6.54134 17.8169 7.00771 18.2833 7.583 18.2833Z" stroke="#414141" stroke-miterlimit="10"/>
                                                                        <path d="M15.2718 18.2833C15.8471 18.2833 16.3135 17.8169 16.3135 17.2416C16.3135 16.6663 15.8471 16.2 15.2718 16.2C14.6965 16.2 14.2301 16.6663 14.2301 17.2416C14.2301 17.8169 14.6965 18.2833 15.2718 18.2833Z" stroke="black" stroke-miterlimit="10"/>
                                                                        <path d="M8.4212 7.37917L11.6046 10.8083L16.6629 2.75" stroke="black" stroke-miterlimit="10"/>
                                                                        </g>
                                                                        <defs>
                                                                        <clipPath id="clip0_188_169">
                                                                        <rect width="20" height="17.5" fill="white" transform="translate(0 1.25)"/>
                                                                        </clipPath>
                                                                        </defs>
                                                                </svg>            
                                                        </div>
                                                        <div>
                                                                <h4>
                                                                        Website, eCommerce
                                                                </h4>
                                                                <p class="text-sm text-primary-400 font-light">
                                                                        Dal semplice sito, all'ecommerce
                                                                </p>
                                                        </div>
                                                </div>

                                                <div class="flex hover:bg-secondary-400 transition-all p-2 rounded-lg duration-300 items-start pr-4 cursor-pointer">
                                                        <div class="p-2">
                                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <g clip-path="url(#clip0_188_169)">
                                                                        <path d="M13.1331 5.36658H4.07063L5.64979 14.9041C5.75812 15.5708 6.38729 16.1083 7.05395 16.1083H16.0165" stroke="#414141" stroke-miterlimit="10"/>
                                                                        <path d="M6.5918 13.3291H16.6626C17.196 13.3291 17.6251 13.0124 17.7585 12.5249L19.2001 7.24992C19.4418 6.36242 18.6293 5.36658 17.6585 5.36658H16.671" stroke="#414141" stroke-miterlimit="10"/>
                                                                        <path d="M4.07103 5.36664C3.65853 2.86664 2.97936 1.84998 0.200195 1.84998" stroke="#414141" stroke-miterlimit="10"/>
                                                                        <path d="M7.583 18.2833C8.15829 18.2833 8.62467 17.8169 8.62467 17.2416C8.62467 16.6663 8.15829 16.2 7.583 16.2C7.00771 16.2 6.54134 16.6663 6.54134 17.2416C6.54134 17.8169 7.00771 18.2833 7.583 18.2833Z" stroke="#414141" stroke-miterlimit="10"/>
                                                                        <path d="M15.2718 18.2833C15.8471 18.2833 16.3135 17.8169 16.3135 17.2416C16.3135 16.6663 15.8471 16.2 15.2718 16.2C14.6965 16.2 14.2301 16.6663 14.2301 17.2416C14.2301 17.8169 14.6965 18.2833 15.2718 18.2833Z" stroke="black" stroke-miterlimit="10"/>
                                                                        <path d="M8.4212 7.37917L11.6046 10.8083L16.6629 2.75" stroke="black" stroke-miterlimit="10"/>
                                                                        </g>
                                                                        <defs>
                                                                        <clipPath id="clip0_188_169">
                                                                        <rect width="20" height="17.5" fill="white" transform="translate(0 1.25)"/>
                                                                        </clipPath>
                                                                        </defs>
                                                                </svg>            
                                                        </div>
                                                        <div>
                                                                <h4>
                                                                        Applicazioni iOS e Android
                                                                </h4>
                                                                <p class="text-sm text-primary-400 font-light">
                                                                        Applicazioni native sia iOS che Android
                                                                </p>
                                                        </div>
                                                </div>

                                                <div class="flex hover:bg-secondary-400 transition-all p-2 rounded-lg duration-300 items-start pr-4 cursor-pointer">
                                                        <div class="p-2">
                                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <g clip-path="url(#clip0_188_169)">
                                                                        <path d="M13.1331 5.36658H4.07063L5.64979 14.9041C5.75812 15.5708 6.38729 16.1083 7.05395 16.1083H16.0165" stroke="#414141" stroke-miterlimit="10"/>
                                                                        <path d="M6.5918 13.3291H16.6626C17.196 13.3291 17.6251 13.0124 17.7585 12.5249L19.2001 7.24992C19.4418 6.36242 18.6293 5.36658 17.6585 5.36658H16.671" stroke="#414141" stroke-miterlimit="10"/>
                                                                        <path d="M4.07103 5.36664C3.65853 2.86664 2.97936 1.84998 0.200195 1.84998" stroke="#414141" stroke-miterlimit="10"/>
                                                                        <path d="M7.583 18.2833C8.15829 18.2833 8.62467 17.8169 8.62467 17.2416C8.62467 16.6663 8.15829 16.2 7.583 16.2C7.00771 16.2 6.54134 16.6663 6.54134 17.2416C6.54134 17.8169 7.00771 18.2833 7.583 18.2833Z" stroke="#414141" stroke-miterlimit="10"/>
                                                                        <path d="M15.2718 18.2833C15.8471 18.2833 16.3135 17.8169 16.3135 17.2416C16.3135 16.6663 15.8471 16.2 15.2718 16.2C14.6965 16.2 14.2301 16.6663 14.2301 17.2416C14.2301 17.8169 14.6965 18.2833 15.2718 18.2833Z" stroke="black" stroke-miterlimit="10"/>
                                                                        <path d="M8.4212 7.37917L11.6046 10.8083L16.6629 2.75" stroke="black" stroke-miterlimit="10"/>
                                                                        </g>
                                                                        <defs>
                                                                        <clipPath id="clip0_188_169">
                                                                        <rect width="20" height="17.5" fill="white" transform="translate(0 1.25)"/>
                                                                        </clipPath>
                                                                        </defs>
                                                                </svg>            
                                                        </div>
                                                        <div>
                                                                <h4>
                                                                        UI/UX Design
                                                                </h4>
                                                                <p class="text-sm text-primary-400 font-light">
                                                                        User Experience e User interfance
                                                                </p>
                                                        </div>
                                                </div>

                                        </div>
                                        <div class="w-1/3 relative rounded-lg overflow-hidden">
                                                <img src="{{ asset('images/homepage/hero_image_2.png')}}" class="w-full h-full object-cover rounded-lg" alt="">

                                                <div class="absolute inset-0 z-10 p-2 bg-gradient-to-t from-primary-900 to-transparent text-white flex flex-col justify-end">
                                                <div class="flex flex-col max-w-md items-start">
                                                        <h4 class="text-white">
                                                                Sei un agenzia?
                                                        </h4>
                                                        <p class="text-xs text-white font-light mt-1">
                                                                Scopri i nostri servizi in white label
                                                        </p>
                                                        <x-link-button-secondary
                                                                class="justify-center hover:text-white hover:bg-white/10 text-xs py-[4px] mt-1 px-2"
                                                                href="#ciao">                          
                                                        Contattaci
                                                        </x-link-button-secondary>
                                                </div>
                                                </div>
                                        </div>

                                </div>
                        </li>
                        <li class="flex gap-x-1 font-medium">Case Studies</li>
                        <li class="flex gap-x-1 font-medium">Su di noi</li>
                </ul>

        </div>

        <div class="hidden md:flex lg:w-1/3 justify-end">
                <x-link-button
                        class="justify-center"
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
        </div>

        <x-navigation.parts.mobile />


</nav>