<li class="flex gap-x-2 font-medium relative items-center" x-data="{opened: false}" @keyup.escape.window="opened = false">
        <span @click="opened = true" class="cursor-pointer">
                Servizi
        </span>
        <div 
                @click="opened = true"
                :class="opened ? 'transform rotate-180' : ''"
                class="transition-transform duration-300 origin-center cursor-pointer"> 
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
            class="flex-wrap absolute top-full left-1/2 mt-4 transform -translate-x-1/2 p-5 max-w-xl w-[900px] bg-white border border-secondary-900 border-solid rounded-2xl flex shadow-secondary-900/50 shadow-xl" 
            x-show="opened">
            

            <div class="w-2/3 flex flex-col pr-2">

                    <div class="flex group hover:bg-secondary-400 transition-all p-2 rounded-lg duration-300 items-start pr-4 cursor-pointer gap-3">
                            <div class="p-2 rounded-full border border-secondary-900">
                                    <x-fab-laravel
                                            class="w-5 h-5 text-primary-400 group-hover:text-red-600" />  
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

                    <div class="flex group hover:bg-secondary-400 transition-all p-2 rounded-lg duration-300 items-start pr-4 cursor-pointer gap-3">
                            <div class="p-2 rounded-full border border-secondary-900">
                                    <x-heroicon-o-shopping-bag
                                    class="w-5 h-5 text-primary-400 group-hover:text-green-600" />           
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

                    <div class="flex group hover:bg-secondary-400 transition-all p-2 rounded-lg duration-300 items-start pr-4 cursor-pointer gap-3">
                            <div class="p-2 rounded-full border border-secondary-900">
                                    <x-ri-flutter-fill 
                                            class="w-5 h-5 text-primary-400 group-hover:text-blue-600"/>          
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

                    <div class="flex group hover:bg-secondary-400 transition-all p-2 rounded-lg duration-300 items-start pr-4 cursor-pointer gap-3">
                            <div class="p-2 rounded-full border border-secondary-900">
                                    <x-fab-figma
                                            class="w-5 h-5 text-primary-400 group-hover:text-violet-600" />          
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

            <div class="w-full">
                    <x-ui.divider class="bg-secondary-400 h-px" />

                    <div class="flex justify-between">
                            <div>
                                    <h4>
                                            Diventa il nostro nuovo cliente
                                    </h4>
                                    <p class="text-xs font-light">
                                            Altri 1.000 clienti ci hanno già scelto
                                    </p>
                            </div>

                            <x-link-button class="cursor-pointer">
                                    <x-slot name="icon">
                                            <x-heroicon-o-chat-bubble-oval-left-ellipsis
                                            class="w-5 h-5 text-white" /> 
                                    </x-slot>
                                    Prenota una call
                            </x-link-button>
                    </div>
            </div>

    </div>
</li>