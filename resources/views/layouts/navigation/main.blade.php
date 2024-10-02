{{-- Here Navigation --}}
<nav x-data="{opened: false}" class="container mx-auto h-20 p-5 flex justify-between items-center relative z-50">

        
        <div class="lg:w-1/5">

                <x-application-logo />
        </div>

        <div class="hidden md:flex lg:w-3/5 justify-center">

                <ul class="flex gap-x-8">
                        <x-navigation.parts.services />

                        <li class="font-medium">
                                <a href="">Chi Siamo</a>
                        </li>

                        <x-navigation.parts.case-studies />
                        
                        <li class="font-medium">
                                <a href="">Leggi il Blog</a>
                        </li>
                </ul>

        </div>

        <div class="hidden md:flex lg:w-1/5 justify-end">
                <x-link-button
                        class="justify-center"
                        href="#ciao">
                        <x-slot name="icon">
                                <x-heroicon-o-chat-bubble-oval-left-ellipsis
                                                                        class="w-5 h-5 text-white" />
                        </x-slot>                                        
                        Prenota subito una call
                </x-link-button>
        </div>

        <x-navigation.parts.mobile />


</nav>