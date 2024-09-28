@extends('layouts.frontend')

@section('content')


    <header class="px-5 container mx-auto flex flex-col gap-y-4 items-start">

        <span class="inline-flex gap-x-2 bg-white  py-2 rounded-full text-sm text-primary-600 px-4">
            Da 0 a consegnato, per tutti i tuoi progetti
        </span>

        <h1 class="font-[700] tracking-[-2px]">
            White label Full <br /> Stack services
        </h1>

        <p class="text-primary-400 text-base">
            A reliable coding partner that delivers solutions to your business challenges and stays by your side in the long term. Having the whole spectrum of web development expertise, we are here to take care of your projects while making it possible for you to focus on growing your own business.
        </p>

        <div>
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
    </header>

    
    <main>

        <section class="mt-8">
            <p class="text-xs text-center max-w-xs mx-auto">
                Trusted by 1,000+ businesses and creative agencies worldwide from all shapes and sizes.
            </p>

            <div class="mt-4 relative py-2">

                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide w-48">
                            <div class="w-full flex items-center justify-center aspect-video">
                                <img src="{{ asset('images/logo1.png')}}" class="max-h-full max-w-full object-scale-down" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide w-48">
                            <div class="w-full flex items-center justify-center aspect-video">
                                <img src="{{ asset('images/logo2.png')}}" class="max-h-full max-w-full object-scale-down" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide w-48">
                            <div class="w-full flex items-center justify-center aspect-video">
                                <img src="{{ asset('images/logo3.png')}}" class="max-h-full max-w-full object-scale-down" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide w-48">
                            <div class="w-full flex items-center justify-center aspect-video">
                                <img src="{{ asset('images/logo4.png')}}" class="max-h-full max-w-full object-scale-down" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide w-48">
                            <div class="w-full flex items-center justify-center aspect-video">
                                <img src="{{ asset('images/logo5.png')}}" class="max-h-full max-w-full object-scale-down" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide w-48">
                            <div class="w-full flex items-center justify-center aspect-video">
                                <img src="{{ asset('images/logo6.png')}}" class="max-h-full max-w-full object-scale-down" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                
                <div 
                    class="absolute inset-0 custom-gradient z-40">
                </div>
    
            </div>    
        </section>

        <section class="mt-8 relative">
            <img src="{{ asset('images/homepage/hero_image_1.png') }}" class="w-full object-scale-down rounded-lg fadein" alt="">
            
            <img src="{{ asset('images/homepage/home_parallax_1.png')}}" class="w-full object-scale-down rounded-lg  absolute top-full left-1/2 transform -translate-x-1/2 -translate-y-1/2 parallax" alt="">

        </section>

        <section class="mt-16">
            <div class="container mx-auto px-5">
                <h2>
                    White label services.
                </h2>
                <h3 class="text-primary-400">
                    Cosa significa, e come funziona.
                </h3>
                <p class="mt-4 text-base">
                    Immaginate di poter ampliare immediatamente la vostra offerta senza dover investire tempo e risorse nella creazione di nuovi servizi. Un servizio di white label vi permette esattamente questo. Noi sviluppiamo soluzioni digitali all’avanguardia—siti web dinamici, potenti e-commerce, applicazioni mobile innovative, design UI/UX coinvolgenti e sistemi di automazione efficienti—che voi potete offrire ai vostri clienti con il vostro marchio. È come avere un intero team di esperti al vostro servizio, pronto a realizzare le vostre visioni senza che dobbiate muovere un dito. Questo vi consente di concentrarvi su ciò che sapete fare meglio, aumentando al contempo il valore percepito dai vostri clienti e rafforzando la vostra posizione nel mercato.
                </p>
            </div>
        </section>
     
    </main>

@endsection


@push('scripts')

<script>
    document.addEventListener('DOMContentLoaded', function () {
        
    
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 'auto',
            spaceBetween: 32,
            loop: true,
            speed: 4000,
            slidesPerView: '2',
            autoplay: {
                enabled: true,
                delay: 1,
            },
        });
    });
</script>
    
@endpush