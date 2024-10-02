<li class="flex gap-x-2 font-medium relative items-center" x-data="{opened: false}" @keyup.escape.window="opened = false">
    <span
            class="cursor-pointer"
            @click="opened = true">
            Case Studies
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
            class="absolute top-full left-1/2 mt-4 transform -translate-x-1/2 p-5 max-w-2xl w-[900px] bg-white border border-secondary-900 border-solid rounded-2xl shadow-secondary-900/50 shadow-xl grid grid-cols-6 gap-x-2" 
            x-show="opened">
            <div class="col-span-2 group hover:bg-secondary-400 relative min-h-[300px] p-2 rounded-xl border border-secondary-900">
                    
                    <div class="relative rounded-lg overflow-hidden w-full h-full cursor-pointer">
                            <img src="{{ asset('images/cover_example/cover_oltrepo.png')}}" class="w-full object-top h-full object-cover rounded-lg absolute inset-0" alt="">
                            <div class="absolute transform scale-y-0 opacity-0 inset-0 z-10 p-2 bg-gradient-to-t from-primary-900 to-transparent text-white flex flex-col justify-end group-hover:opacity-100 group-hover:scale-100 transition-all duration-500 ease-out origin-bottom">
                                    <div class="flex flex-col max-w-md items-start">
                                    <h4 class="text-white">
                                            Sfrutta le app native!
                                    </h4>
                                    <p class="text-xs text-white font-light mt-1">
                                            Scopri i nostri servizi in white label
                                    </p>
                                    <x-link-button-secondary
                                            class="justify-center hover:text-white hover:bg-white/10 text-xs py-[4px] mt-1 px-2"
                                            href="#ciao">                          
                                    Leggi il caso
                                    </x-link-button-secondary>
                                    </div>
                            </div>
                    </div>
            </div>
            <div class="col-span-2 group hover:bg-secondary-400 relative min-h-[300px] p-2 rounded-xl border border-secondary-900">
                    
                    <div class="relative rounded-lg overflow-hidden w-full h-full cursor-pointer">
                            <img src="{{ asset('images/cover_example/cover_mirage.jpg')}}" class="w-full h-full object-cover rounded-lg absolute inset-0 object-top" alt="">
                            <div class="absolute transform scale-y-0 opacity-0 inset-0 z-10 p-2 bg-gradient-to-t from-primary-900 to-transparent text-white flex flex-col justify-end group-hover:opacity-100 group-hover:scale-100 transition-all duration-500 ease-out origin-bottom">
                                    <div class="flex flex-col max-w-md items-start">
                                    <h4 class="text-white">
                                            Mirage Comics
                                    </h4>
                                    <p class="text-xs text-white font-light mt-1">
                                            Come una buona UI/UX può far volare   il tuo ecommerce!
                                    </p>
                                    <x-link-button-secondary
                                            class="justify-center hover:text-white hover:bg-white/10 text-xs py-[4px] mt-1 px-2"
                                            href="#ciao">                          
                                    Leggi il caso
                                    </x-link-button-secondary>
                                    </div>
                            </div>
                    </div>
            </div>
            <div class="col-span-2 group hover:bg-secondary-400 relative min-h-[300px] p-2 rounded-xl border border-secondary-900">
                    
                    <div class="relative rounded-lg overflow-hidden w-full h-full cursor-pointer">
                            <img src="{{ asset('images/cover_example/cover_ticket.webp')}}" class="w-full h-full object-cover rounded-lg absolute inset-0" alt="">
                            <div class="absolute transform scale-y-0 opacity-0 inset-0 z-10 p-2 bg-gradient-to-t from-primary-900 to-transparent text-white flex flex-col justify-end group-hover:opacity-100 group-hover:scale-100 transition-all duration-500 ease-out origin-bottom">
                                    <div class="flex flex-col max-w-md items-start">
                                    <h4 class="text-white">
                                            Creazione di un sistema di Ticketing.
                                    </h4>
                                    <p class="text-xs text-white font-light mt-1">
                                            Dalla scelta dei prezzi, ai tipi di biglietto, fino ad integrazione con sistemi di accesso.
                                    </p>
                                    <x-link-button-secondary
                                            class="justify-center hover:text-white hover:bg-white/10 text-xs py-[4px] mt-1 px-2"
                                            href="#ciao">                          
                                    Leggi il caso
                                    </x-link-button-secondary>
                                    </div>
                            </div>
                    </div>
            </div>
            <div class="col-span-6">
                    <x-ui.divider class="h-px" />

                    <div class="flex justify-between">
                            <div>
                                    <h4>
                                            Diventa il nostro nuovo cliente
                                    </h4>
                                    <p class="text-xs font-light">
                                            Siamo fermamente convinti, di avere la soluzione giusta anche per te!
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