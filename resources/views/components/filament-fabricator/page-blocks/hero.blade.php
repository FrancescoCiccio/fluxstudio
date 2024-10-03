@aware(['page'])

<header class="px-5 container flex mx-auto md:mt-32 lg:justify-between flex-wrap">

    <div class="w-full lg:w-1/2 flex flex-col gap-y-4 items-start flex-wrap">

        <div class="p-1 border border-secondary-900 rounded-md">
            <img src="{{ asset($icon)}}" alt="">
        </div>

        <h1 class="font-[700] tracking-[-2px] splits mb-4">
            {{ $page->title }}
        </h1>

        {!! $description !!}
        
        <div class="lg:flex gap-x-4">
            <x-link-button
                    class="w-full lg:w-auto justify-center mb-2 lg:mb-0"
                    href="#ciao">
                    <x-slot name="icon">
                        <x-heroicon-o-chat-bubble-oval-left-ellipsis
                            class="w-5 h-5 text-white" />                                        
                    </x-slot>
                    Prenota subito una call
            </x-link-button>
    
            <x-link-button-secondary
                    class="w-full justify-center lg:w-auto"
                    href="#ciao">
                    <x-slot name="icon">
                        <x-heroicon-o-envelope
                            class="w-5 h-5 text-primary-600" />                                        
                    </x-slot>                        
                    Contattaci
            </x-link-button-secondary>
        </div>
    </div>

    <div class="w-full md:flex relative lg:w-1/3 lg:mt-0 mt-8">
        <img src="{{ asset($heroimage) }}" class="w-full object-scale-down rounded-lg fadein" alt="">
        
        <img src="{{ asset($parallax)}}" class="w-full object-scale-down rounded-lg  absolute left-1/2 top-full transform -translate-x-1/2 -translate-y-1/2 parallax max-w-[60%]" alt="">
    </div>
    
</header>
