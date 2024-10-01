@extends('layouts.frontend')

@section('content')


    <header class="px-5 container flex mx-auto md:mt-32 lg:justify-between ">

        <div class="w-full lg:w-1/2 flex flex-col gap-y-4 items-start">
            <span class="inline-flex gap-x-2 bg-white  py-2 rounded-full text-sm text-primary-600 px-4">
                Da 0 a consegnato, per tutti i tuoi progetti
            </span>
    
            <h1 class="font-[700] tracking-[-2px] splits">
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
        </div>

        <div class="hidden md:flex relative lg:w-1/3">
            <img src="{{ asset('images/homepage/hero_image_1.png') }}" class="w-full object-scale-down rounded-lg fadein" alt="">
            
            <img src="{{ asset('images/homepage/home_parallax_1.png')}}" class="w-full object-scale-down rounded-lg  absolute top-1/2 left-0 transform -translate-x-1/2 -translate-y-1/2 parallax" alt="">
        </div>
        
    </header>

    
    <main>

        <section class="mt-8">
            <p class="text-xs text-center max-w-xs md:max-w-2xl mx-auto">
                Trusted by 1,000+ businesses and creative agencies worldwide from all shapes and sizes.
            </p>

            <div class="mt-4 lg:mt-0 relative py-2">

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

        <section class="mt-8 relative md:hidden">
            <img src="{{ asset('images/homepage/hero_image_1.png') }}" class="w-full object-scale-down rounded-lg fadein" alt="">
            
            <img src="{{ asset('images/homepage/home_parallax_1.png')}}" class="w-full object-scale-down rounded-lg  absolute top-full left-1/2 transform -translate-x-1/2 -translate-y-1/2 parallax" alt="">
        </section>

        <section class="mt-16">
            <div class="container mx-auto px-5">
                <h2 class="splits">
                    White label services.
                </h2>
                <h3 class="text-primary-400">
                    Cosa significa, e come funziona.
                </h3>
                <p class="mt-4 text-base lg:max-w-4xl">
                    Immaginate di poter ampliare immediatamente la vostra offerta senza dover investire tempo e risorse nella creazione di nuovi servizi. Un servizio di white label vi permette esattamente questo. Noi sviluppiamo soluzioni digitali all’avanguardia—siti web dinamici, potenti e-commerce, applicazioni mobile innovative, design UI/UX coinvolgenti e sistemi di automazione efficienti—che voi potete offrire ai vostri clienti con il vostro marchio. È come avere un intero team di esperti al vostro servizio, pronto a realizzare le vostre visioni senza che dobbiate muovere un dito. Questo vi consente di concentrarvi su ciò che sapete fare meglio, aumentando al contempo il valore percepito dai vostri clienti e rafforzando la vostra posizione nel mercato.
                </p>
            </div>
        </section>
     
        <section class="mt-8">
            <div class="w-full lg:max-w-5xl mx-auto px-5 relative">
                <div class="swiper services">
                    <div class="swiper-wrapper">
                        <x-ui.card class="swiper-slide">
        
                            <x-slot name="icon">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.5" y="0.5" width="39" height="39" rx="19.5" stroke="#F6FAFA"/>
                                    <g clip-path="url(#clip0_18_86)">
                                    <path d="M16.9565 17.8261L14.4471 20.104C14.3176 20.2233 14.3141 20.5595 14.4403 20.6897L16.8269 23.0435" stroke="#414141" stroke-miterlimit="10"/>
                                    <path d="M22.174 23.0435L25.5198 20.7656C25.6925 20.6463 25.6971 20.3101 25.5289 20.1799L22.3467 17.8261" stroke="#414141" stroke-miterlimit="10"/>
                                    <path d="M20.4348 16.087L19.5652 23.9131" stroke="#414141" stroke-miterlimit="10"/>
                                    <path d="M30 22.1964V17.7939H27.6923C27.5229 17.2037 27.2907 16.6376 27.0004 16.1103L28.6309 14.4799L25.5152 11.3643L23.8848 12.9947C23.3575 12.6996 22.7963 12.4722 22.2012 12.3029V10H17.7987V12.3077C17.2085 12.477 16.6425 12.7092 16.1152 12.9995L14.4848 11.3691L11.3691 14.4848L12.9995 16.1151C12.7044 16.6425 12.477 17.2037 12.3077 17.7987H10V22.2013H12.3077C12.477 22.7915 12.7092 23.3575 12.9995 23.8849L11.3691 25.5152L14.4848 28.6309L16.1152 27.0005C16.6425 27.2956 17.2036 27.523 17.7987 27.6923V30H22.2012V27.6923C22.7914 27.523 23.3575 27.2908 23.8848 27.0005L25.5152 28.6309L28.6309 25.5152L27.0004 23.8849C27.2956 23.3575 27.5229 22.7963 27.6923 22.2013H30V22.1964Z" stroke="#414141" stroke-miterlimit="10" stroke-linecap="round"/>
                                    </g>
                                    <defs>
                                    <clipPath id="clip0_18_86">
                                    <rect width="20" height="20" fill="white" transform="translate(10 10)"/>
                                    </clipPath>
                                    </defs>
                                </svg>                            
                            </x-slot>
        
                            <x-slot name="title">
                                Laravel
                            </x-slot>
        
                            A dedicated service that allows agencies to outsource their web development projects and expand their business offerings with a solution fully customizable according to their needs and ready to meet their goals.
                        </x-ui.card>
                        <x-ui.card class="swiper-slide">
        
                            <x-slot name="icon">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.5" y="0.5" width="39" height="39" rx="19.5" stroke="#F6FAFA"/>
                                    <g clip-path="url(#clip0_18_86)">
                                    <path d="M16.9565 17.8261L14.4471 20.104C14.3176 20.2233 14.3141 20.5595 14.4403 20.6897L16.8269 23.0435" stroke="#414141" stroke-miterlimit="10"/>
                                    <path d="M22.174 23.0435L25.5198 20.7656C25.6925 20.6463 25.6971 20.3101 25.5289 20.1799L22.3467 17.8261" stroke="#414141" stroke-miterlimit="10"/>
                                    <path d="M20.4348 16.087L19.5652 23.9131" stroke="#414141" stroke-miterlimit="10"/>
                                    <path d="M30 22.1964V17.7939H27.6923C27.5229 17.2037 27.2907 16.6376 27.0004 16.1103L28.6309 14.4799L25.5152 11.3643L23.8848 12.9947C23.3575 12.6996 22.7963 12.4722 22.2012 12.3029V10H17.7987V12.3077C17.2085 12.477 16.6425 12.7092 16.1152 12.9995L14.4848 11.3691L11.3691 14.4848L12.9995 16.1151C12.7044 16.6425 12.477 17.2037 12.3077 17.7987H10V22.2013H12.3077C12.477 22.7915 12.7092 23.3575 12.9995 23.8849L11.3691 25.5152L14.4848 28.6309L16.1152 27.0005C16.6425 27.2956 17.2036 27.523 17.7987 27.6923V30H22.2012V27.6923C22.7914 27.523 23.3575 27.2908 23.8848 27.0005L25.5152 28.6309L28.6309 25.5152L27.0004 23.8849C27.2956 23.3575 27.5229 22.7963 27.6923 22.2013H30V22.1964Z" stroke="#414141" stroke-miterlimit="10" stroke-linecap="round"/>
                                    </g>
                                    <defs>
                                    <clipPath id="clip0_18_86">
                                    <rect width="20" height="20" fill="white" transform="translate(10 10)"/>
                                    </clipPath>
                                    </defs>
                                </svg>                            
                            </x-slot>
        
                            <x-slot name="title">
                                Figma
                            </x-slot>
        
                            A dedicated service that allows agencies to outsource their web development projects and expand their business offerings with a solution fully customizable according to their needs and ready to meet their goals.
                        </x-ui.card>
                        <x-ui.card class="swiper-slide">
        
                            <x-slot name="icon">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.5" y="0.5" width="39" height="39" rx="19.5" stroke="#F6FAFA"/>
                                    <g clip-path="url(#clip0_18_86)">
                                    <path d="M16.9565 17.8261L14.4471 20.104C14.3176 20.2233 14.3141 20.5595 14.4403 20.6897L16.8269 23.0435" stroke="#414141" stroke-miterlimit="10"/>
                                    <path d="M22.174 23.0435L25.5198 20.7656C25.6925 20.6463 25.6971 20.3101 25.5289 20.1799L22.3467 17.8261" stroke="#414141" stroke-miterlimit="10"/>
                                    <path d="M20.4348 16.087L19.5652 23.9131" stroke="#414141" stroke-miterlimit="10"/>
                                    <path d="M30 22.1964V17.7939H27.6923C27.5229 17.2037 27.2907 16.6376 27.0004 16.1103L28.6309 14.4799L25.5152 11.3643L23.8848 12.9947C23.3575 12.6996 22.7963 12.4722 22.2012 12.3029V10H17.7987V12.3077C17.2085 12.477 16.6425 12.7092 16.1152 12.9995L14.4848 11.3691L11.3691 14.4848L12.9995 16.1151C12.7044 16.6425 12.477 17.2037 12.3077 17.7987H10V22.2013H12.3077C12.477 22.7915 12.7092 23.3575 12.9995 23.8849L11.3691 25.5152L14.4848 28.6309L16.1152 27.0005C16.6425 27.2956 17.2036 27.523 17.7987 27.6923V30H22.2012V27.6923C22.7914 27.523 23.3575 27.2908 23.8848 27.0005L25.5152 28.6309L28.6309 25.5152L27.0004 23.8849C27.2956 23.3575 27.5229 22.7963 27.6923 22.2013H30V22.1964Z" stroke="#414141" stroke-miterlimit="10" stroke-linecap="round"/>
                                    </g>
                                    <defs>
                                    <clipPath id="clip0_18_86">
                                    <rect width="20" height="20" fill="white" transform="translate(10 10)"/>
                                    </clipPath>
                                    </defs>
                                </svg>                            
                            </x-slot>
        
                            <x-slot name="title">
                                Laravel
                            </x-slot>
        
                            A dedicated service that allows agencies to outsource their web development projects and expand their business offerings with a solution fully customizable according to their needs and ready to meet their goals.
                        </x-ui.card>
                        <x-ui.card class="swiper-slide">
        
                            <x-slot name="icon">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.5" y="0.5" width="39" height="39" rx="19.5" stroke="#F6FAFA"/>
                                    <g clip-path="url(#clip0_18_86)">
                                    <path d="M16.9565 17.8261L14.4471 20.104C14.3176 20.2233 14.3141 20.5595 14.4403 20.6897L16.8269 23.0435" stroke="#414141" stroke-miterlimit="10"/>
                                    <path d="M22.174 23.0435L25.5198 20.7656C25.6925 20.6463 25.6971 20.3101 25.5289 20.1799L22.3467 17.8261" stroke="#414141" stroke-miterlimit="10"/>
                                    <path d="M20.4348 16.087L19.5652 23.9131" stroke="#414141" stroke-miterlimit="10"/>
                                    <path d="M30 22.1964V17.7939H27.6923C27.5229 17.2037 27.2907 16.6376 27.0004 16.1103L28.6309 14.4799L25.5152 11.3643L23.8848 12.9947C23.3575 12.6996 22.7963 12.4722 22.2012 12.3029V10H17.7987V12.3077C17.2085 12.477 16.6425 12.7092 16.1152 12.9995L14.4848 11.3691L11.3691 14.4848L12.9995 16.1151C12.7044 16.6425 12.477 17.2037 12.3077 17.7987H10V22.2013H12.3077C12.477 22.7915 12.7092 23.3575 12.9995 23.8849L11.3691 25.5152L14.4848 28.6309L16.1152 27.0005C16.6425 27.2956 17.2036 27.523 17.7987 27.6923V30H22.2012V27.6923C22.7914 27.523 23.3575 27.2908 23.8848 27.0005L25.5152 28.6309L28.6309 25.5152L27.0004 23.8849C27.2956 23.3575 27.5229 22.7963 27.6923 22.2013H30V22.1964Z" stroke="#414141" stroke-miterlimit="10" stroke-linecap="round"/>
                                    </g>
                                    <defs>
                                    <clipPath id="clip0_18_86">
                                    <rect width="20" height="20" fill="white" transform="translate(10 10)"/>
                                    </clipPath>
                                    </defs>
                                </svg>                            
                            </x-slot>
        
                            <x-slot name="title">
                                Figma
                            </x-slot>
        
                            A dedicated service that allows agencies to outsource their web development projects and expand their business offerings with a solution fully customizable according to their needs and ready to meet their goals.
                        </x-ui.card>
                        <x-ui.card class="swiper-slide">
        
                            <x-slot name="icon">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.5" y="0.5" width="39" height="39" rx="19.5" stroke="#F6FAFA"/>
                                    <g clip-path="url(#clip0_18_86)">
                                    <path d="M16.9565 17.8261L14.4471 20.104C14.3176 20.2233 14.3141 20.5595 14.4403 20.6897L16.8269 23.0435" stroke="#414141" stroke-miterlimit="10"/>
                                    <path d="M22.174 23.0435L25.5198 20.7656C25.6925 20.6463 25.6971 20.3101 25.5289 20.1799L22.3467 17.8261" stroke="#414141" stroke-miterlimit="10"/>
                                    <path d="M20.4348 16.087L19.5652 23.9131" stroke="#414141" stroke-miterlimit="10"/>
                                    <path d="M30 22.1964V17.7939H27.6923C27.5229 17.2037 27.2907 16.6376 27.0004 16.1103L28.6309 14.4799L25.5152 11.3643L23.8848 12.9947C23.3575 12.6996 22.7963 12.4722 22.2012 12.3029V10H17.7987V12.3077C17.2085 12.477 16.6425 12.7092 16.1152 12.9995L14.4848 11.3691L11.3691 14.4848L12.9995 16.1151C12.7044 16.6425 12.477 17.2037 12.3077 17.7987H10V22.2013H12.3077C12.477 22.7915 12.7092 23.3575 12.9995 23.8849L11.3691 25.5152L14.4848 28.6309L16.1152 27.0005C16.6425 27.2956 17.2036 27.523 17.7987 27.6923V30H22.2012V27.6923C22.7914 27.523 23.3575 27.2908 23.8848 27.0005L25.5152 28.6309L28.6309 25.5152L27.0004 23.8849C27.2956 23.3575 27.5229 22.7963 27.6923 22.2013H30V22.1964Z" stroke="#414141" stroke-miterlimit="10" stroke-linecap="round"/>
                                    </g>
                                    <defs>
                                    <clipPath id="clip0_18_86">
                                    <rect width="20" height="20" fill="white" transform="translate(10 10)"/>
                                    </clipPath>
                                    </defs>
                                </svg>                            
                            </x-slot>
        
                            <x-slot name="title">
                                Laravel
                            </x-slot>
        
                            A dedicated service that allows agencies to outsource their web development projects and expand their business offerings with a solution fully customizable according to their needs and ready to meet their goals.
                        </x-ui.card>
                        <x-ui.card class="swiper-slide">
        
                            <x-slot name="icon">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.5" y="0.5" width="39" height="39" rx="19.5" stroke="#F6FAFA"/>
                                    <g clip-path="url(#clip0_18_86)">
                                    <path d="M16.9565 17.8261L14.4471 20.104C14.3176 20.2233 14.3141 20.5595 14.4403 20.6897L16.8269 23.0435" stroke="#414141" stroke-miterlimit="10"/>
                                    <path d="M22.174 23.0435L25.5198 20.7656C25.6925 20.6463 25.6971 20.3101 25.5289 20.1799L22.3467 17.8261" stroke="#414141" stroke-miterlimit="10"/>
                                    <path d="M20.4348 16.087L19.5652 23.9131" stroke="#414141" stroke-miterlimit="10"/>
                                    <path d="M30 22.1964V17.7939H27.6923C27.5229 17.2037 27.2907 16.6376 27.0004 16.1103L28.6309 14.4799L25.5152 11.3643L23.8848 12.9947C23.3575 12.6996 22.7963 12.4722 22.2012 12.3029V10H17.7987V12.3077C17.2085 12.477 16.6425 12.7092 16.1152 12.9995L14.4848 11.3691L11.3691 14.4848L12.9995 16.1151C12.7044 16.6425 12.477 17.2037 12.3077 17.7987H10V22.2013H12.3077C12.477 22.7915 12.7092 23.3575 12.9995 23.8849L11.3691 25.5152L14.4848 28.6309L16.1152 27.0005C16.6425 27.2956 17.2036 27.523 17.7987 27.6923V30H22.2012V27.6923C22.7914 27.523 23.3575 27.2908 23.8848 27.0005L25.5152 28.6309L28.6309 25.5152L27.0004 23.8849C27.2956 23.3575 27.5229 22.7963 27.6923 22.2013H30V22.1964Z" stroke="#414141" stroke-miterlimit="10" stroke-linecap="round"/>
                                    </g>
                                    <defs>
                                    <clipPath id="clip0_18_86">
                                    <rect width="20" height="20" fill="white" transform="translate(10 10)"/>
                                    </clipPath>
                                    </defs>
                                </svg>                            
                            </x-slot>
        
                            <x-slot name="title">
                                Figma
                            </x-slot>
        
                            A dedicated service that allows agencies to outsource their web development projects and expand their business offerings with a solution fully customizable according to their needs and ready to meet their goals.
                        </x-ui.card>
                    </div>
                </div>

                <x-ui.mask />
            </div>

            <div class="mt-4 px-5 flex flex-col lg:flex-row container mx-auto lg:justify-center gap-x-4">
                <x-link-button
                    class="w-full lg:w-auto justify-center"
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
                        class="w-full lg:w-auto justify-center"
                        href="#ciao">                          
                        Scopri i vantaggi
                </x-link-button-secondary>
            </div>

            <div class="px-5 container mx-auto">
                <x-ui.divider />
            </div>
        </section>

        <section>
            <div class="container mx-auto px-5">
                <h2 class="splits">
                    I nostri prodotti
                </h2>
                <h3 class="text-primary-400 max-w-2xl">
                    I nostri prodotti diventato i prodotti da offrire ai tuoi clienti!
                </h3>

                <div class="mt-4 md:hidden">

                    <div class="swiper classic-slider pb-8">
                        <div class="swiper-wrapper">
                            <x-ui.card class="swiper-slide">
                
                                <x-slot name="icon">
                                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="0.5" y="0.5" width="39" height="39" rx="19.5" stroke="#F6FAFA"/>
                                        <g clip-path="url(#clip0_18_86)">
                                        <path d="M16.9565 17.8261L14.4471 20.104C14.3176 20.2233 14.3141 20.5595 14.4403 20.6897L16.8269 23.0435" stroke="#414141" stroke-miterlimit="10"/>
                                        <path d="M22.174 23.0435L25.5198 20.7656C25.6925 20.6463 25.6971 20.3101 25.5289 20.1799L22.3467 17.8261" stroke="#414141" stroke-miterlimit="10"/>
                                        <path d="M20.4348 16.087L19.5652 23.9131" stroke="#414141" stroke-miterlimit="10"/>
                                        <path d="M30 22.1964V17.7939H27.6923C27.5229 17.2037 27.2907 16.6376 27.0004 16.1103L28.6309 14.4799L25.5152 11.3643L23.8848 12.9947C23.3575 12.6996 22.7963 12.4722 22.2012 12.3029V10H17.7987V12.3077C17.2085 12.477 16.6425 12.7092 16.1152 12.9995L14.4848 11.3691L11.3691 14.4848L12.9995 16.1151C12.7044 16.6425 12.477 17.2037 12.3077 17.7987H10V22.2013H12.3077C12.477 22.7915 12.7092 23.3575 12.9995 23.8849L11.3691 25.5152L14.4848 28.6309L16.1152 27.0005C16.6425 27.2956 17.2036 27.523 17.7987 27.6923V30H22.2012V27.6923C22.7914 27.523 23.3575 27.2908 23.8848 27.0005L25.5152 28.6309L28.6309 25.5152L27.0004 23.8849C27.2956 23.3575 27.5229 22.7963 27.6923 22.2013H30V22.1964Z" stroke="#414141" stroke-miterlimit="10" stroke-linecap="round"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0_18_86">
                                        <rect width="20" height="20" fill="white" transform="translate(10 10)"/>
                                        </clipPath>
                                        </defs>
                                    </svg>                            
                                </x-slot>
            
                                <x-slot name="title">
                                    Laravel
                                </x-slot>
            
                                A dedicated service that allows agencies to outsource their web development projects and expand their business offerings with a solution fully customizable according to their needs and ready to meet their goals.
                            </x-ui.card>
                            <x-ui.card class="swiper-slide">
                
                                <x-slot name="icon">
                                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="0.5" y="0.5" width="39" height="39" rx="19.5" stroke="#F6FAFA"/>
                                        <g clip-path="url(#clip0_18_86)">
                                        <path d="M16.9565 17.8261L14.4471 20.104C14.3176 20.2233 14.3141 20.5595 14.4403 20.6897L16.8269 23.0435" stroke="#414141" stroke-miterlimit="10"/>
                                        <path d="M22.174 23.0435L25.5198 20.7656C25.6925 20.6463 25.6971 20.3101 25.5289 20.1799L22.3467 17.8261" stroke="#414141" stroke-miterlimit="10"/>
                                        <path d="M20.4348 16.087L19.5652 23.9131" stroke="#414141" stroke-miterlimit="10"/>
                                        <path d="M30 22.1964V17.7939H27.6923C27.5229 17.2037 27.2907 16.6376 27.0004 16.1103L28.6309 14.4799L25.5152 11.3643L23.8848 12.9947C23.3575 12.6996 22.7963 12.4722 22.2012 12.3029V10H17.7987V12.3077C17.2085 12.477 16.6425 12.7092 16.1152 12.9995L14.4848 11.3691L11.3691 14.4848L12.9995 16.1151C12.7044 16.6425 12.477 17.2037 12.3077 17.7987H10V22.2013H12.3077C12.477 22.7915 12.7092 23.3575 12.9995 23.8849L11.3691 25.5152L14.4848 28.6309L16.1152 27.0005C16.6425 27.2956 17.2036 27.523 17.7987 27.6923V30H22.2012V27.6923C22.7914 27.523 23.3575 27.2908 23.8848 27.0005L25.5152 28.6309L28.6309 25.5152L27.0004 23.8849C27.2956 23.3575 27.5229 22.7963 27.6923 22.2013H30V22.1964Z" stroke="#414141" stroke-miterlimit="10" stroke-linecap="round"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0_18_86">
                                        <rect width="20" height="20" fill="white" transform="translate(10 10)"/>
                                        </clipPath>
                                        </defs>
                                    </svg>                            
                                </x-slot>
            
                                <x-slot name="title">
                                    Laravel
                                </x-slot>
            
                                A dedicated service that allows agencies to outsource their web development projects and expand their business offerings with a solution fully customizable according to their needs and ready to meet their goals.
                            </x-ui.card>
                            <x-ui.card class="swiper-slide">
                
                                <x-slot name="icon">
                                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="0.5" y="0.5" width="39" height="39" rx="19.5" stroke="#F6FAFA"/>
                                        <g clip-path="url(#clip0_18_86)">
                                        <path d="M16.9565 17.8261L14.4471 20.104C14.3176 20.2233 14.3141 20.5595 14.4403 20.6897L16.8269 23.0435" stroke="#414141" stroke-miterlimit="10"/>
                                        <path d="M22.174 23.0435L25.5198 20.7656C25.6925 20.6463 25.6971 20.3101 25.5289 20.1799L22.3467 17.8261" stroke="#414141" stroke-miterlimit="10"/>
                                        <path d="M20.4348 16.087L19.5652 23.9131" stroke="#414141" stroke-miterlimit="10"/>
                                        <path d="M30 22.1964V17.7939H27.6923C27.5229 17.2037 27.2907 16.6376 27.0004 16.1103L28.6309 14.4799L25.5152 11.3643L23.8848 12.9947C23.3575 12.6996 22.7963 12.4722 22.2012 12.3029V10H17.7987V12.3077C17.2085 12.477 16.6425 12.7092 16.1152 12.9995L14.4848 11.3691L11.3691 14.4848L12.9995 16.1151C12.7044 16.6425 12.477 17.2037 12.3077 17.7987H10V22.2013H12.3077C12.477 22.7915 12.7092 23.3575 12.9995 23.8849L11.3691 25.5152L14.4848 28.6309L16.1152 27.0005C16.6425 27.2956 17.2036 27.523 17.7987 27.6923V30H22.2012V27.6923C22.7914 27.523 23.3575 27.2908 23.8848 27.0005L25.5152 28.6309L28.6309 25.5152L27.0004 23.8849C27.2956 23.3575 27.5229 22.7963 27.6923 22.2013H30V22.1964Z" stroke="#414141" stroke-miterlimit="10" stroke-linecap="round"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0_18_86">
                                        <rect width="20" height="20" fill="white" transform="translate(10 10)"/>
                                        </clipPath>
                                        </defs>
                                    </svg>                            
                                </x-slot>
            
                                <x-slot name="title">
                                    Laravel
                                </x-slot>
            
                                A dedicated service that allows agencies to outsource their web development projects and expand their business offerings with a solution fully customizable according to their needs and ready to meet their goals.
                            </x-ui.card>
                        </div>

                        <div class="swiper-pagination"></div>
                    </div>
                </div>

                <div class="hidden lg:mt-4 lg:grid grid-cols-6 gap-4">
                    <div class="col-span-2">
                        <x-ui.card class="w-full">
                
                            <x-slot name="icon">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.5" y="0.5" width="39" height="39" rx="19.5" stroke="#F6FAFA"/>
                                    <g clip-path="url(#clip0_18_86)">
                                    <path d="M16.9565 17.8261L14.4471 20.104C14.3176 20.2233 14.3141 20.5595 14.4403 20.6897L16.8269 23.0435" stroke="#414141" stroke-miterlimit="10"/>
                                    <path d="M22.174 23.0435L25.5198 20.7656C25.6925 20.6463 25.6971 20.3101 25.5289 20.1799L22.3467 17.8261" stroke="#414141" stroke-miterlimit="10"/>
                                    <path d="M20.4348 16.087L19.5652 23.9131" stroke="#414141" stroke-miterlimit="10"/>
                                    <path d="M30 22.1964V17.7939H27.6923C27.5229 17.2037 27.2907 16.6376 27.0004 16.1103L28.6309 14.4799L25.5152 11.3643L23.8848 12.9947C23.3575 12.6996 22.7963 12.4722 22.2012 12.3029V10H17.7987V12.3077C17.2085 12.477 16.6425 12.7092 16.1152 12.9995L14.4848 11.3691L11.3691 14.4848L12.9995 16.1151C12.7044 16.6425 12.477 17.2037 12.3077 17.7987H10V22.2013H12.3077C12.477 22.7915 12.7092 23.3575 12.9995 23.8849L11.3691 25.5152L14.4848 28.6309L16.1152 27.0005C16.6425 27.2956 17.2036 27.523 17.7987 27.6923V30H22.2012V27.6923C22.7914 27.523 23.3575 27.2908 23.8848 27.0005L25.5152 28.6309L28.6309 25.5152L27.0004 23.8849C27.2956 23.3575 27.5229 22.7963 27.6923 22.2013H30V22.1964Z" stroke="#414141" stroke-miterlimit="10" stroke-linecap="round"/>
                                    </g>
                                    <defs>
                                    <clipPath id="clip0_18_86">
                                    <rect width="20" height="20" fill="white" transform="translate(10 10)"/>
                                    </clipPath>
                                    </defs>
                                </svg>                            
                            </x-slot>
        
                            <x-slot name="title">
                                Laravel
                            </x-slot>
        
                            A dedicated service that allows agencies to outsource their web development projects and expand their business offerings with a solution fully customizable according to their needs and ready to meet their goals.
                        </x-ui.card>
                    </div>
                    <div class="col-span-2">
                        <x-ui.card class="w-full">
                
                            <x-slot name="icon">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.5" y="0.5" width="39" height="39" rx="19.5" stroke="#F6FAFA"/>
                                    <g clip-path="url(#clip0_18_86)">
                                    <path d="M16.9565 17.8261L14.4471 20.104C14.3176 20.2233 14.3141 20.5595 14.4403 20.6897L16.8269 23.0435" stroke="#414141" stroke-miterlimit="10"/>
                                    <path d="M22.174 23.0435L25.5198 20.7656C25.6925 20.6463 25.6971 20.3101 25.5289 20.1799L22.3467 17.8261" stroke="#414141" stroke-miterlimit="10"/>
                                    <path d="M20.4348 16.087L19.5652 23.9131" stroke="#414141" stroke-miterlimit="10"/>
                                    <path d="M30 22.1964V17.7939H27.6923C27.5229 17.2037 27.2907 16.6376 27.0004 16.1103L28.6309 14.4799L25.5152 11.3643L23.8848 12.9947C23.3575 12.6996 22.7963 12.4722 22.2012 12.3029V10H17.7987V12.3077C17.2085 12.477 16.6425 12.7092 16.1152 12.9995L14.4848 11.3691L11.3691 14.4848L12.9995 16.1151C12.7044 16.6425 12.477 17.2037 12.3077 17.7987H10V22.2013H12.3077C12.477 22.7915 12.7092 23.3575 12.9995 23.8849L11.3691 25.5152L14.4848 28.6309L16.1152 27.0005C16.6425 27.2956 17.2036 27.523 17.7987 27.6923V30H22.2012V27.6923C22.7914 27.523 23.3575 27.2908 23.8848 27.0005L25.5152 28.6309L28.6309 25.5152L27.0004 23.8849C27.2956 23.3575 27.5229 22.7963 27.6923 22.2013H30V22.1964Z" stroke="#414141" stroke-miterlimit="10" stroke-linecap="round"/>
                                    </g>
                                    <defs>
                                    <clipPath id="clip0_18_86">
                                    <rect width="20" height="20" fill="white" transform="translate(10 10)"/>
                                    </clipPath>
                                    </defs>
                                </svg>                            
                            </x-slot>
        
                            <x-slot name="title">
                                Laravel
                            </x-slot>
        
                            A dedicated service that allows agencies to outsource their web development projects and expand their business offerings with a solution fully customizable according to their needs and ready to meet their goals.
                        </x-ui.card>
                    </div>
                    <div class="col-span-2"><x-ui.card class="w-full">
                
                        <x-slot name="icon">
                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="0.5" y="0.5" width="39" height="39" rx="19.5" stroke="#F6FAFA"/>
                                <g clip-path="url(#clip0_18_86)">
                                <path d="M16.9565 17.8261L14.4471 20.104C14.3176 20.2233 14.3141 20.5595 14.4403 20.6897L16.8269 23.0435" stroke="#414141" stroke-miterlimit="10"/>
                                <path d="M22.174 23.0435L25.5198 20.7656C25.6925 20.6463 25.6971 20.3101 25.5289 20.1799L22.3467 17.8261" stroke="#414141" stroke-miterlimit="10"/>
                                <path d="M20.4348 16.087L19.5652 23.9131" stroke="#414141" stroke-miterlimit="10"/>
                                <path d="M30 22.1964V17.7939H27.6923C27.5229 17.2037 27.2907 16.6376 27.0004 16.1103L28.6309 14.4799L25.5152 11.3643L23.8848 12.9947C23.3575 12.6996 22.7963 12.4722 22.2012 12.3029V10H17.7987V12.3077C17.2085 12.477 16.6425 12.7092 16.1152 12.9995L14.4848 11.3691L11.3691 14.4848L12.9995 16.1151C12.7044 16.6425 12.477 17.2037 12.3077 17.7987H10V22.2013H12.3077C12.477 22.7915 12.7092 23.3575 12.9995 23.8849L11.3691 25.5152L14.4848 28.6309L16.1152 27.0005C16.6425 27.2956 17.2036 27.523 17.7987 27.6923V30H22.2012V27.6923C22.7914 27.523 23.3575 27.2908 23.8848 27.0005L25.5152 28.6309L28.6309 25.5152L27.0004 23.8849C27.2956 23.3575 27.5229 22.7963 27.6923 22.2013H30V22.1964Z" stroke="#414141" stroke-miterlimit="10" stroke-linecap="round"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_18_86">
                                <rect width="20" height="20" fill="white" transform="translate(10 10)"/>
                                </clipPath>
                                </defs>
                            </svg>                            
                        </x-slot>
    
                        <x-slot name="title">
                            Laravel
                        </x-slot>
    
                        A dedicated service that allows agencies to outsource their web development projects and expand their business offerings with a solution fully customizable according to their needs and ready to meet their goals.
                    </x-ui.card>
                    </div>
                    <div class="col-span-3">
                        <x-ui.card class="w-full">
                
                            <x-slot name="icon">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.5" y="0.5" width="39" height="39" rx="19.5" stroke="#F6FAFA"/>
                                    <g clip-path="url(#clip0_18_86)">
                                    <path d="M16.9565 17.8261L14.4471 20.104C14.3176 20.2233 14.3141 20.5595 14.4403 20.6897L16.8269 23.0435" stroke="#414141" stroke-miterlimit="10"/>
                                    <path d="M22.174 23.0435L25.5198 20.7656C25.6925 20.6463 25.6971 20.3101 25.5289 20.1799L22.3467 17.8261" stroke="#414141" stroke-miterlimit="10"/>
                                    <path d="M20.4348 16.087L19.5652 23.9131" stroke="#414141" stroke-miterlimit="10"/>
                                    <path d="M30 22.1964V17.7939H27.6923C27.5229 17.2037 27.2907 16.6376 27.0004 16.1103L28.6309 14.4799L25.5152 11.3643L23.8848 12.9947C23.3575 12.6996 22.7963 12.4722 22.2012 12.3029V10H17.7987V12.3077C17.2085 12.477 16.6425 12.7092 16.1152 12.9995L14.4848 11.3691L11.3691 14.4848L12.9995 16.1151C12.7044 16.6425 12.477 17.2037 12.3077 17.7987H10V22.2013H12.3077C12.477 22.7915 12.7092 23.3575 12.9995 23.8849L11.3691 25.5152L14.4848 28.6309L16.1152 27.0005C16.6425 27.2956 17.2036 27.523 17.7987 27.6923V30H22.2012V27.6923C22.7914 27.523 23.3575 27.2908 23.8848 27.0005L25.5152 28.6309L28.6309 25.5152L27.0004 23.8849C27.2956 23.3575 27.5229 22.7963 27.6923 22.2013H30V22.1964Z" stroke="#414141" stroke-miterlimit="10" stroke-linecap="round"/>
                                    </g>
                                    <defs>
                                    <clipPath id="clip0_18_86">
                                    <rect width="20" height="20" fill="white" transform="translate(10 10)"/>
                                    </clipPath>
                                    </defs>
                                </svg>                            
                            </x-slot>
        
                            <x-slot name="title">
                                Laravel
                            </x-slot>
        
                            A dedicated service that allows agencies to outsource their web development projects and expand their business offerings with a solution fully customizable according to their needs and ready to meet their goals.
                        </x-ui.card>
                    </div>
                    <div class="col-span-3">
                        <x-ui.card class="w-full">
                
                            <x-slot name="icon">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.5" y="0.5" width="39" height="39" rx="19.5" stroke="#F6FAFA"/>
                                    <g clip-path="url(#clip0_18_86)">
                                    <path d="M16.9565 17.8261L14.4471 20.104C14.3176 20.2233 14.3141 20.5595 14.4403 20.6897L16.8269 23.0435" stroke="#414141" stroke-miterlimit="10"/>
                                    <path d="M22.174 23.0435L25.5198 20.7656C25.6925 20.6463 25.6971 20.3101 25.5289 20.1799L22.3467 17.8261" stroke="#414141" stroke-miterlimit="10"/>
                                    <path d="M20.4348 16.087L19.5652 23.9131" stroke="#414141" stroke-miterlimit="10"/>
                                    <path d="M30 22.1964V17.7939H27.6923C27.5229 17.2037 27.2907 16.6376 27.0004 16.1103L28.6309 14.4799L25.5152 11.3643L23.8848 12.9947C23.3575 12.6996 22.7963 12.4722 22.2012 12.3029V10H17.7987V12.3077C17.2085 12.477 16.6425 12.7092 16.1152 12.9995L14.4848 11.3691L11.3691 14.4848L12.9995 16.1151C12.7044 16.6425 12.477 17.2037 12.3077 17.7987H10V22.2013H12.3077C12.477 22.7915 12.7092 23.3575 12.9995 23.8849L11.3691 25.5152L14.4848 28.6309L16.1152 27.0005C16.6425 27.2956 17.2036 27.523 17.7987 27.6923V30H22.2012V27.6923C22.7914 27.523 23.3575 27.2908 23.8848 27.0005L25.5152 28.6309L28.6309 25.5152L27.0004 23.8849C27.2956 23.3575 27.5229 22.7963 27.6923 22.2013H30V22.1964Z" stroke="#414141" stroke-miterlimit="10" stroke-linecap="round"/>
                                    </g>
                                    <defs>
                                    <clipPath id="clip0_18_86">
                                    <rect width="20" height="20" fill="white" transform="translate(10 10)"/>
                                    </clipPath>
                                    </defs>
                                </svg>                            
                            </x-slot>
        
                            <x-slot name="title">
                                Laravel
                            </x-slot>
        
                            A dedicated service that allows agencies to outsource their web development projects and expand their business offerings with a solution fully customizable according to their needs and ready to meet their goals.
                        </x-ui.card>
                    </div>
                </div>

                <div class="px-5 mt-4 flex justify-center">
                    <x-link-button
                        class="w-full lg:w-auto justify-center"
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
            </div>
        </section>

        <section class="mt-16 mb-8">
            <div class="container mx-auto lg:flex-row gap-x-4 px-5 flex flex-col gap-y-4">
                <x-ui.number>
                    <x-slot name="title">
                        + 10.000 Prodotti
                    </x-slot>
                    Di prodotti digitali realizzati, tra siti-web, ecommerce, integrazioni, applicazioni mobile
                </x-ui.number>

                <x-ui.number>
                    <x-slot name="title">
                        + 100 Clienti
                    </x-slot>
                    Clienti, tra privati, agenzie di digital marketing e aziende, hanno già scelto di collaborare con noi
                </x-ui.number>

                <x-ui.number>
                    <x-slot name="title">
                        + 10 Anni
                    </x-slot>
                    Dal nostro primo prodotto digitale, una decade in cui abbiamo affinato il nostro metodo
                </x-ui.number>

                <x-ui.number>
                    <x-slot name="title">
                        Solo 5 stelle
                    </x-slot>
                    Dal nostro primo prodotto digitale, una decade in cui abbiamo affinato il nostro metodo
                </x-ui.number>
            </div>
        </section>

        <section 
            class="mt-8 py-5 bg-gradient-to-t from-secondary-900 to-transparent w-full">

            <h2 class="text-center mb-4 splits">
                Dicono di noi
            </h2>

            <div class="swiper swiper-review">

                <div class="swiper-wrapper">

                    <div class="swiper-slide flex gap-y-2 flex-col">
                        <x-ui.card>
        
                            <x-slot name="icon">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.5" y="0.5" width="39" height="39" rx="19.5" stroke="#F6FAFA"/>
                                    <g clip-path="url(#clip0_18_86)">
                                    <path d="M16.9565 17.8261L14.4471 20.104C14.3176 20.2233 14.3141 20.5595 14.4403 20.6897L16.8269 23.0435" stroke="#414141" stroke-miterlimit="10"/>
                                    <path d="M22.174 23.0435L25.5198 20.7656C25.6925 20.6463 25.6971 20.3101 25.5289 20.1799L22.3467 17.8261" stroke="#414141" stroke-miterlimit="10"/>
                                    <path d="M20.4348 16.087L19.5652 23.9131" stroke="#414141" stroke-miterlimit="10"/>
                                    <path d="M30 22.1964V17.7939H27.6923C27.5229 17.2037 27.2907 16.6376 27.0004 16.1103L28.6309 14.4799L25.5152 11.3643L23.8848 12.9947C23.3575 12.6996 22.7963 12.4722 22.2012 12.3029V10H17.7987V12.3077C17.2085 12.477 16.6425 12.7092 16.1152 12.9995L14.4848 11.3691L11.3691 14.4848L12.9995 16.1151C12.7044 16.6425 12.477 17.2037 12.3077 17.7987H10V22.2013H12.3077C12.477 22.7915 12.7092 23.3575 12.9995 23.8849L11.3691 25.5152L14.4848 28.6309L16.1152 27.0005C16.6425 27.2956 17.2036 27.523 17.7987 27.6923V30H22.2012V27.6923C22.7914 27.523 23.3575 27.2908 23.8848 27.0005L25.5152 28.6309L28.6309 25.5152L27.0004 23.8849C27.2956 23.3575 27.5229 22.7963 27.6923 22.2013H30V22.1964Z" stroke="#414141" stroke-miterlimit="10" stroke-linecap="round"/>
                                    </g>
                                    <defs>
                                    <clipPath id="clip0_18_86">
                                    <rect width="20" height="20" fill="white" transform="translate(10 10)"/>
                                    </clipPath>
                                    </defs>
                                </svg>                            
                            </x-slot>
        
                            <x-slot name="title">
                                Laravel
                            </x-slot>
        
                            A dedicated service that allows agencies to outsource their web development projects and expand their business offerings with a solution fully customizable according to their needs and ready to meet their goals.
                        </x-ui.card>
                        <x-ui.card class="mt-4">
        
                            <x-slot name="icon">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.5" y="0.5" width="39" height="39" rx="19.5" stroke="#F6FAFA"/>
                                    <g clip-path="url(#clip0_18_86)">
                                    <path d="M16.9565 17.8261L14.4471 20.104C14.3176 20.2233 14.3141 20.5595 14.4403 20.6897L16.8269 23.0435" stroke="#414141" stroke-miterlimit="10"/>
                                    <path d="M22.174 23.0435L25.5198 20.7656C25.6925 20.6463 25.6971 20.3101 25.5289 20.1799L22.3467 17.8261" stroke="#414141" stroke-miterlimit="10"/>
                                    <path d="M20.4348 16.087L19.5652 23.9131" stroke="#414141" stroke-miterlimit="10"/>
                                    <path d="M30 22.1964V17.7939H27.6923C27.5229 17.2037 27.2907 16.6376 27.0004 16.1103L28.6309 14.4799L25.5152 11.3643L23.8848 12.9947C23.3575 12.6996 22.7963 12.4722 22.2012 12.3029V10H17.7987V12.3077C17.2085 12.477 16.6425 12.7092 16.1152 12.9995L14.4848 11.3691L11.3691 14.4848L12.9995 16.1151C12.7044 16.6425 12.477 17.2037 12.3077 17.7987H10V22.2013H12.3077C12.477 22.7915 12.7092 23.3575 12.9995 23.8849L11.3691 25.5152L14.4848 28.6309L16.1152 27.0005C16.6425 27.2956 17.2036 27.523 17.7987 27.6923V30H22.2012V27.6923C22.7914 27.523 23.3575 27.2908 23.8848 27.0005L25.5152 28.6309L28.6309 25.5152L27.0004 23.8849C27.2956 23.3575 27.5229 22.7963 27.6923 22.2013H30V22.1964Z" stroke="#414141" stroke-miterlimit="10" stroke-linecap="round"/>
                                    </g>
                                    <defs>
                                    <clipPath id="clip0_18_86">
                                    <rect width="20" height="20" fill="white" transform="translate(10 10)"/>
                                    </clipPath>
                                    </defs>
                                </svg>                            
                            </x-slot>
        
                            <x-slot name="title">
                                Figma
                            </x-slot>
        
                            A dedicated service that allows agencies to outsource their web development projects and expand their business offerings with a solution fully customizable according to their needs and ready to meet their goals.
                        </x-ui.card>
                    </div>

                    <div class="swiper-slide flex gap-y-2 flex-col">
                        <x-ui.card>
        
                            <x-slot name="icon">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.5" y="0.5" width="39" height="39" rx="19.5" stroke="#F6FAFA"/>
                                    <g clip-path="url(#clip0_18_86)">
                                    <path d="M16.9565 17.8261L14.4471 20.104C14.3176 20.2233 14.3141 20.5595 14.4403 20.6897L16.8269 23.0435" stroke="#414141" stroke-miterlimit="10"/>
                                    <path d="M22.174 23.0435L25.5198 20.7656C25.6925 20.6463 25.6971 20.3101 25.5289 20.1799L22.3467 17.8261" stroke="#414141" stroke-miterlimit="10"/>
                                    <path d="M20.4348 16.087L19.5652 23.9131" stroke="#414141" stroke-miterlimit="10"/>
                                    <path d="M30 22.1964V17.7939H27.6923C27.5229 17.2037 27.2907 16.6376 27.0004 16.1103L28.6309 14.4799L25.5152 11.3643L23.8848 12.9947C23.3575 12.6996 22.7963 12.4722 22.2012 12.3029V10H17.7987V12.3077C17.2085 12.477 16.6425 12.7092 16.1152 12.9995L14.4848 11.3691L11.3691 14.4848L12.9995 16.1151C12.7044 16.6425 12.477 17.2037 12.3077 17.7987H10V22.2013H12.3077C12.477 22.7915 12.7092 23.3575 12.9995 23.8849L11.3691 25.5152L14.4848 28.6309L16.1152 27.0005C16.6425 27.2956 17.2036 27.523 17.7987 27.6923V30H22.2012V27.6923C22.7914 27.523 23.3575 27.2908 23.8848 27.0005L25.5152 28.6309L28.6309 25.5152L27.0004 23.8849C27.2956 23.3575 27.5229 22.7963 27.6923 22.2013H30V22.1964Z" stroke="#414141" stroke-miterlimit="10" stroke-linecap="round"/>
                                    </g>
                                    <defs>
                                    <clipPath id="clip0_18_86">
                                    <rect width="20" height="20" fill="white" transform="translate(10 10)"/>
                                    </clipPath>
                                    </defs>
                                </svg>                            
                            </x-slot>
        
                            <x-slot name="title">
                                Laravel
                            </x-slot>
        
                            A dedicated service that allows agencies to outsource their web development projects and expand their business offerings with a solution fully customizable according to their needs and ready to meet their goals. Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, nemo!
                        </x-ui.card>
                        <x-ui.card class="mt-4">
        
                            <x-slot name="icon">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.5" y="0.5" width="39" height="39" rx="19.5" stroke="#F6FAFA"/>
                                    <g clip-path="url(#clip0_18_86)">
                                    <path d="M16.9565 17.8261L14.4471 20.104C14.3176 20.2233 14.3141 20.5595 14.4403 20.6897L16.8269 23.0435" stroke="#414141" stroke-miterlimit="10"/>
                                    <path d="M22.174 23.0435L25.5198 20.7656C25.6925 20.6463 25.6971 20.3101 25.5289 20.1799L22.3467 17.8261" stroke="#414141" stroke-miterlimit="10"/>
                                    <path d="M20.4348 16.087L19.5652 23.9131" stroke="#414141" stroke-miterlimit="10"/>
                                    <path d="M30 22.1964V17.7939H27.6923C27.5229 17.2037 27.2907 16.6376 27.0004 16.1103L28.6309 14.4799L25.5152 11.3643L23.8848 12.9947C23.3575 12.6996 22.7963 12.4722 22.2012 12.3029V10H17.7987V12.3077C17.2085 12.477 16.6425 12.7092 16.1152 12.9995L14.4848 11.3691L11.3691 14.4848L12.9995 16.1151C12.7044 16.6425 12.477 17.2037 12.3077 17.7987H10V22.2013H12.3077C12.477 22.7915 12.7092 23.3575 12.9995 23.8849L11.3691 25.5152L14.4848 28.6309L16.1152 27.0005C16.6425 27.2956 17.2036 27.523 17.7987 27.6923V30H22.2012V27.6923C22.7914 27.523 23.3575 27.2908 23.8848 27.0005L25.5152 28.6309L28.6309 25.5152L27.0004 23.8849C27.2956 23.3575 27.5229 22.7963 27.6923 22.2013H30V22.1964Z" stroke="#414141" stroke-miterlimit="10" stroke-linecap="round"/>
                                    </g>
                                    <defs>
                                    <clipPath id="clip0_18_86">
                                    <rect width="20" height="20" fill="white" transform="translate(10 10)"/>
                                    </clipPath>
                                    </defs>
                                </svg>                            
                            </x-slot>
        
                            <x-slot name="title">
                                Figma
                            </x-slot>
        
                            A dedicated service that allows agencies to outsource their web development projects and expand their business offerings with a solution fully customizable according to their needs and ready to meet their goals.
                        </x-ui.card>
                    </div>

                    <div class="swiper-slide flex gap-y-2 flex-col">
                        <x-ui.card>
        
                            <x-slot name="icon">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.5" y="0.5" width="39" height="39" rx="19.5" stroke="#F6FAFA"/>
                                    <g clip-path="url(#clip0_18_86)">
                                    <path d="M16.9565 17.8261L14.4471 20.104C14.3176 20.2233 14.3141 20.5595 14.4403 20.6897L16.8269 23.0435" stroke="#414141" stroke-miterlimit="10"/>
                                    <path d="M22.174 23.0435L25.5198 20.7656C25.6925 20.6463 25.6971 20.3101 25.5289 20.1799L22.3467 17.8261" stroke="#414141" stroke-miterlimit="10"/>
                                    <path d="M20.4348 16.087L19.5652 23.9131" stroke="#414141" stroke-miterlimit="10"/>
                                    <path d="M30 22.1964V17.7939H27.6923C27.5229 17.2037 27.2907 16.6376 27.0004 16.1103L28.6309 14.4799L25.5152 11.3643L23.8848 12.9947C23.3575 12.6996 22.7963 12.4722 22.2012 12.3029V10H17.7987V12.3077C17.2085 12.477 16.6425 12.7092 16.1152 12.9995L14.4848 11.3691L11.3691 14.4848L12.9995 16.1151C12.7044 16.6425 12.477 17.2037 12.3077 17.7987H10V22.2013H12.3077C12.477 22.7915 12.7092 23.3575 12.9995 23.8849L11.3691 25.5152L14.4848 28.6309L16.1152 27.0005C16.6425 27.2956 17.2036 27.523 17.7987 27.6923V30H22.2012V27.6923C22.7914 27.523 23.3575 27.2908 23.8848 27.0005L25.5152 28.6309L28.6309 25.5152L27.0004 23.8849C27.2956 23.3575 27.5229 22.7963 27.6923 22.2013H30V22.1964Z" stroke="#414141" stroke-miterlimit="10" stroke-linecap="round"/>
                                    </g>
                                    <defs>
                                    <clipPath id="clip0_18_86">
                                    <rect width="20" height="20" fill="white" transform="translate(10 10)"/>
                                    </clipPath>
                                    </defs>
                                </svg>                            
                            </x-slot>
        
                            <x-slot name="title">
                                Laravel
                            </x-slot>
        
                            A dedicated service that allows agencies to outsource their web development projects and expand their business offerings with a solution fully customizable according to their needs and ready to meet their goals.
                        </x-ui.card>
                        <x-ui.card class="mt-4">
        
                            <x-slot name="icon">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.5" y="0.5" width="39" height="39" rx="19.5" stroke="#F6FAFA"/>
                                    <g clip-path="url(#clip0_18_86)">
                                    <path d="M16.9565 17.8261L14.4471 20.104C14.3176 20.2233 14.3141 20.5595 14.4403 20.6897L16.8269 23.0435" stroke="#414141" stroke-miterlimit="10"/>
                                    <path d="M22.174 23.0435L25.5198 20.7656C25.6925 20.6463 25.6971 20.3101 25.5289 20.1799L22.3467 17.8261" stroke="#414141" stroke-miterlimit="10"/>
                                    <path d="M20.4348 16.087L19.5652 23.9131" stroke="#414141" stroke-miterlimit="10"/>
                                    <path d="M30 22.1964V17.7939H27.6923C27.5229 17.2037 27.2907 16.6376 27.0004 16.1103L28.6309 14.4799L25.5152 11.3643L23.8848 12.9947C23.3575 12.6996 22.7963 12.4722 22.2012 12.3029V10H17.7987V12.3077C17.2085 12.477 16.6425 12.7092 16.1152 12.9995L14.4848 11.3691L11.3691 14.4848L12.9995 16.1151C12.7044 16.6425 12.477 17.2037 12.3077 17.7987H10V22.2013H12.3077C12.477 22.7915 12.7092 23.3575 12.9995 23.8849L11.3691 25.5152L14.4848 28.6309L16.1152 27.0005C16.6425 27.2956 17.2036 27.523 17.7987 27.6923V30H22.2012V27.6923C22.7914 27.523 23.3575 27.2908 23.8848 27.0005L25.5152 28.6309L28.6309 25.5152L27.0004 23.8849C27.2956 23.3575 27.5229 22.7963 27.6923 22.2013H30V22.1964Z" stroke="#414141" stroke-miterlimit="10" stroke-linecap="round"/>
                                    </g>
                                    <defs>
                                    <clipPath id="clip0_18_86">
                                    <rect width="20" height="20" fill="white" transform="translate(10 10)"/>
                                    </clipPath>
                                    </defs>
                                </svg>                            
                            </x-slot>
        
                            <x-slot name="title">
                                Figma
                            </x-slot>
        
                            A dedicated service that allows agencies to outsource their web development projects and expand their business offerings with a solution fully customizable according to their needs and ready to meet their goals. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deleniti eaque nostrum pariatur! Magni sint neque quam, non facere asperiores animi.
                        </x-ui.card>
                    </div>

                    <div class="swiper-slide flex gap-y-2 flex-col">
                        <x-ui.card>
        
                            <x-slot name="icon">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.5" y="0.5" width="39" height="39" rx="19.5" stroke="#F6FAFA"/>
                                    <g clip-path="url(#clip0_18_86)">
                                    <path d="M16.9565 17.8261L14.4471 20.104C14.3176 20.2233 14.3141 20.5595 14.4403 20.6897L16.8269 23.0435" stroke="#414141" stroke-miterlimit="10"/>
                                    <path d="M22.174 23.0435L25.5198 20.7656C25.6925 20.6463 25.6971 20.3101 25.5289 20.1799L22.3467 17.8261" stroke="#414141" stroke-miterlimit="10"/>
                                    <path d="M20.4348 16.087L19.5652 23.9131" stroke="#414141" stroke-miterlimit="10"/>
                                    <path d="M30 22.1964V17.7939H27.6923C27.5229 17.2037 27.2907 16.6376 27.0004 16.1103L28.6309 14.4799L25.5152 11.3643L23.8848 12.9947C23.3575 12.6996 22.7963 12.4722 22.2012 12.3029V10H17.7987V12.3077C17.2085 12.477 16.6425 12.7092 16.1152 12.9995L14.4848 11.3691L11.3691 14.4848L12.9995 16.1151C12.7044 16.6425 12.477 17.2037 12.3077 17.7987H10V22.2013H12.3077C12.477 22.7915 12.7092 23.3575 12.9995 23.8849L11.3691 25.5152L14.4848 28.6309L16.1152 27.0005C16.6425 27.2956 17.2036 27.523 17.7987 27.6923V30H22.2012V27.6923C22.7914 27.523 23.3575 27.2908 23.8848 27.0005L25.5152 28.6309L28.6309 25.5152L27.0004 23.8849C27.2956 23.3575 27.5229 22.7963 27.6923 22.2013H30V22.1964Z" stroke="#414141" stroke-miterlimit="10" stroke-linecap="round"/>
                                    </g>
                                    <defs>
                                    <clipPath id="clip0_18_86">
                                    <rect width="20" height="20" fill="white" transform="translate(10 10)"/>
                                    </clipPath>
                                    </defs>
                                </svg>                            
                            </x-slot>
        
                            <x-slot name="title">
                                Laravel
                            </x-slot>
        
                            A dedicated service that allows agencies to outsource their web development projects and expand their business offerings with a solution fully customizable according to their needs and ready to meet their goals.
                        </x-ui.card>
                        <x-ui.card class="mt-4">
        
                            <x-slot name="icon">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.5" y="0.5" width="39" height="39" rx="19.5" stroke="#F6FAFA"/>
                                    <g clip-path="url(#clip0_18_86)">
                                    <path d="M16.9565 17.8261L14.4471 20.104C14.3176 20.2233 14.3141 20.5595 14.4403 20.6897L16.8269 23.0435" stroke="#414141" stroke-miterlimit="10"/>
                                    <path d="M22.174 23.0435L25.5198 20.7656C25.6925 20.6463 25.6971 20.3101 25.5289 20.1799L22.3467 17.8261" stroke="#414141" stroke-miterlimit="10"/>
                                    <path d="M20.4348 16.087L19.5652 23.9131" stroke="#414141" stroke-miterlimit="10"/>
                                    <path d="M30 22.1964V17.7939H27.6923C27.5229 17.2037 27.2907 16.6376 27.0004 16.1103L28.6309 14.4799L25.5152 11.3643L23.8848 12.9947C23.3575 12.6996 22.7963 12.4722 22.2012 12.3029V10H17.7987V12.3077C17.2085 12.477 16.6425 12.7092 16.1152 12.9995L14.4848 11.3691L11.3691 14.4848L12.9995 16.1151C12.7044 16.6425 12.477 17.2037 12.3077 17.7987H10V22.2013H12.3077C12.477 22.7915 12.7092 23.3575 12.9995 23.8849L11.3691 25.5152L14.4848 28.6309L16.1152 27.0005C16.6425 27.2956 17.2036 27.523 17.7987 27.6923V30H22.2012V27.6923C22.7914 27.523 23.3575 27.2908 23.8848 27.0005L25.5152 28.6309L28.6309 25.5152L27.0004 23.8849C27.2956 23.3575 27.5229 22.7963 27.6923 22.2013H30V22.1964Z" stroke="#414141" stroke-miterlimit="10" stroke-linecap="round"/>
                                    </g>
                                    <defs>
                                    <clipPath id="clip0_18_86">
                                    <rect width="20" height="20" fill="white" transform="translate(10 10)"/>
                                    </clipPath>
                                    </defs>
                                </svg>                            
                            </x-slot>
        
                            <x-slot name="title">
                                Figma
                            </x-slot>
        
                            A dedicated service that allows agencies to outsource their web development projects and expand their business offerings with a solution fully customizable according to their needs and ready to meet their goals.
                        </x-ui.card>
                    </div>

                    <div class="swiper-slide flex gap-y-2 flex-col">
                        <x-ui.card>
        
                            <x-slot name="icon">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.5" y="0.5" width="39" height="39" rx="19.5" stroke="#F6FAFA"/>
                                    <g clip-path="url(#clip0_18_86)">
                                    <path d="M16.9565 17.8261L14.4471 20.104C14.3176 20.2233 14.3141 20.5595 14.4403 20.6897L16.8269 23.0435" stroke="#414141" stroke-miterlimit="10"/>
                                    <path d="M22.174 23.0435L25.5198 20.7656C25.6925 20.6463 25.6971 20.3101 25.5289 20.1799L22.3467 17.8261" stroke="#414141" stroke-miterlimit="10"/>
                                    <path d="M20.4348 16.087L19.5652 23.9131" stroke="#414141" stroke-miterlimit="10"/>
                                    <path d="M30 22.1964V17.7939H27.6923C27.5229 17.2037 27.2907 16.6376 27.0004 16.1103L28.6309 14.4799L25.5152 11.3643L23.8848 12.9947C23.3575 12.6996 22.7963 12.4722 22.2012 12.3029V10H17.7987V12.3077C17.2085 12.477 16.6425 12.7092 16.1152 12.9995L14.4848 11.3691L11.3691 14.4848L12.9995 16.1151C12.7044 16.6425 12.477 17.2037 12.3077 17.7987H10V22.2013H12.3077C12.477 22.7915 12.7092 23.3575 12.9995 23.8849L11.3691 25.5152L14.4848 28.6309L16.1152 27.0005C16.6425 27.2956 17.2036 27.523 17.7987 27.6923V30H22.2012V27.6923C22.7914 27.523 23.3575 27.2908 23.8848 27.0005L25.5152 28.6309L28.6309 25.5152L27.0004 23.8849C27.2956 23.3575 27.5229 22.7963 27.6923 22.2013H30V22.1964Z" stroke="#414141" stroke-miterlimit="10" stroke-linecap="round"/>
                                    </g>
                                    <defs>
                                    <clipPath id="clip0_18_86">
                                    <rect width="20" height="20" fill="white" transform="translate(10 10)"/>
                                    </clipPath>
                                    </defs>
                                </svg>                            
                            </x-slot>
        
                            <x-slot name="title">
                                Laravel
                            </x-slot>
        
                            A dedicated service that allows agencies to outsource their web development projects and expand their business offerings with a solution fully customizable according to their needs and ready to meet their goals. Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, nemo!
                        </x-ui.card>
                        <x-ui.card class="mt-4">
        
                            <x-slot name="icon">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.5" y="0.5" width="39" height="39" rx="19.5" stroke="#F6FAFA"/>
                                    <g clip-path="url(#clip0_18_86)">
                                    <path d="M16.9565 17.8261L14.4471 20.104C14.3176 20.2233 14.3141 20.5595 14.4403 20.6897L16.8269 23.0435" stroke="#414141" stroke-miterlimit="10"/>
                                    <path d="M22.174 23.0435L25.5198 20.7656C25.6925 20.6463 25.6971 20.3101 25.5289 20.1799L22.3467 17.8261" stroke="#414141" stroke-miterlimit="10"/>
                                    <path d="M20.4348 16.087L19.5652 23.9131" stroke="#414141" stroke-miterlimit="10"/>
                                    <path d="M30 22.1964V17.7939H27.6923C27.5229 17.2037 27.2907 16.6376 27.0004 16.1103L28.6309 14.4799L25.5152 11.3643L23.8848 12.9947C23.3575 12.6996 22.7963 12.4722 22.2012 12.3029V10H17.7987V12.3077C17.2085 12.477 16.6425 12.7092 16.1152 12.9995L14.4848 11.3691L11.3691 14.4848L12.9995 16.1151C12.7044 16.6425 12.477 17.2037 12.3077 17.7987H10V22.2013H12.3077C12.477 22.7915 12.7092 23.3575 12.9995 23.8849L11.3691 25.5152L14.4848 28.6309L16.1152 27.0005C16.6425 27.2956 17.2036 27.523 17.7987 27.6923V30H22.2012V27.6923C22.7914 27.523 23.3575 27.2908 23.8848 27.0005L25.5152 28.6309L28.6309 25.5152L27.0004 23.8849C27.2956 23.3575 27.5229 22.7963 27.6923 22.2013H30V22.1964Z" stroke="#414141" stroke-miterlimit="10" stroke-linecap="round"/>
                                    </g>
                                    <defs>
                                    <clipPath id="clip0_18_86">
                                    <rect width="20" height="20" fill="white" transform="translate(10 10)"/>
                                    </clipPath>
                                    </defs>
                                </svg>                            
                            </x-slot>
        
                            <x-slot name="title">
                                Figma
                            </x-slot>
        
                            A dedicated service that allows agencies to outsource their web development projects and expand their business offerings with a solution fully customizable according to their needs and ready to meet their goals.
                        </x-ui.card>
                    </div>

                    <div class="swiper-slide flex gap-y-2 flex-col">
                        <x-ui.card>
        
                            <x-slot name="icon">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.5" y="0.5" width="39" height="39" rx="19.5" stroke="#F6FAFA"/>
                                    <g clip-path="url(#clip0_18_86)">
                                    <path d="M16.9565 17.8261L14.4471 20.104C14.3176 20.2233 14.3141 20.5595 14.4403 20.6897L16.8269 23.0435" stroke="#414141" stroke-miterlimit="10"/>
                                    <path d="M22.174 23.0435L25.5198 20.7656C25.6925 20.6463 25.6971 20.3101 25.5289 20.1799L22.3467 17.8261" stroke="#414141" stroke-miterlimit="10"/>
                                    <path d="M20.4348 16.087L19.5652 23.9131" stroke="#414141" stroke-miterlimit="10"/>
                                    <path d="M30 22.1964V17.7939H27.6923C27.5229 17.2037 27.2907 16.6376 27.0004 16.1103L28.6309 14.4799L25.5152 11.3643L23.8848 12.9947C23.3575 12.6996 22.7963 12.4722 22.2012 12.3029V10H17.7987V12.3077C17.2085 12.477 16.6425 12.7092 16.1152 12.9995L14.4848 11.3691L11.3691 14.4848L12.9995 16.1151C12.7044 16.6425 12.477 17.2037 12.3077 17.7987H10V22.2013H12.3077C12.477 22.7915 12.7092 23.3575 12.9995 23.8849L11.3691 25.5152L14.4848 28.6309L16.1152 27.0005C16.6425 27.2956 17.2036 27.523 17.7987 27.6923V30H22.2012V27.6923C22.7914 27.523 23.3575 27.2908 23.8848 27.0005L25.5152 28.6309L28.6309 25.5152L27.0004 23.8849C27.2956 23.3575 27.5229 22.7963 27.6923 22.2013H30V22.1964Z" stroke="#414141" stroke-miterlimit="10" stroke-linecap="round"/>
                                    </g>
                                    <defs>
                                    <clipPath id="clip0_18_86">
                                    <rect width="20" height="20" fill="white" transform="translate(10 10)"/>
                                    </clipPath>
                                    </defs>
                                </svg>                            
                            </x-slot>
        
                            <x-slot name="title">
                                Laravel
                            </x-slot>
        
                            A dedicated service that allows agencies to outsource their web development projects and expand their business offerings with a solution fully customizable according to their needs and ready to meet their goals.
                        </x-ui.card>
                        <x-ui.card class="mt-4">
        
                            <x-slot name="icon">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.5" y="0.5" width="39" height="39" rx="19.5" stroke="#F6FAFA"/>
                                    <g clip-path="url(#clip0_18_86)">
                                    <path d="M16.9565 17.8261L14.4471 20.104C14.3176 20.2233 14.3141 20.5595 14.4403 20.6897L16.8269 23.0435" stroke="#414141" stroke-miterlimit="10"/>
                                    <path d="M22.174 23.0435L25.5198 20.7656C25.6925 20.6463 25.6971 20.3101 25.5289 20.1799L22.3467 17.8261" stroke="#414141" stroke-miterlimit="10"/>
                                    <path d="M20.4348 16.087L19.5652 23.9131" stroke="#414141" stroke-miterlimit="10"/>
                                    <path d="M30 22.1964V17.7939H27.6923C27.5229 17.2037 27.2907 16.6376 27.0004 16.1103L28.6309 14.4799L25.5152 11.3643L23.8848 12.9947C23.3575 12.6996 22.7963 12.4722 22.2012 12.3029V10H17.7987V12.3077C17.2085 12.477 16.6425 12.7092 16.1152 12.9995L14.4848 11.3691L11.3691 14.4848L12.9995 16.1151C12.7044 16.6425 12.477 17.2037 12.3077 17.7987H10V22.2013H12.3077C12.477 22.7915 12.7092 23.3575 12.9995 23.8849L11.3691 25.5152L14.4848 28.6309L16.1152 27.0005C16.6425 27.2956 17.2036 27.523 17.7987 27.6923V30H22.2012V27.6923C22.7914 27.523 23.3575 27.2908 23.8848 27.0005L25.5152 28.6309L28.6309 25.5152L27.0004 23.8849C27.2956 23.3575 27.5229 22.7963 27.6923 22.2013H30V22.1964Z" stroke="#414141" stroke-miterlimit="10" stroke-linecap="round"/>
                                    </g>
                                    <defs>
                                    <clipPath id="clip0_18_86">
                                    <rect width="20" height="20" fill="white" transform="translate(10 10)"/>
                                    </clipPath>
                                    </defs>
                                </svg>                            
                            </x-slot>
        
                            <x-slot name="title">
                                Figma
                            </x-slot>
        
                            A dedicated service that allows agencies to outsource their web development projects and expand their business offerings with a solution fully customizable according to their needs and ready to meet their goals. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deleniti eaque nostrum pariatur! Magni sint neque quam, non facere asperiores animi.
                        </x-ui.card>
                    </div>

                    <div class="swiper-slide flex gap-y-2 flex-col">
                        <x-ui.card>
        
                            <x-slot name="icon">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.5" y="0.5" width="39" height="39" rx="19.5" stroke="#F6FAFA"/>
                                    <g clip-path="url(#clip0_18_86)">
                                    <path d="M16.9565 17.8261L14.4471 20.104C14.3176 20.2233 14.3141 20.5595 14.4403 20.6897L16.8269 23.0435" stroke="#414141" stroke-miterlimit="10"/>
                                    <path d="M22.174 23.0435L25.5198 20.7656C25.6925 20.6463 25.6971 20.3101 25.5289 20.1799L22.3467 17.8261" stroke="#414141" stroke-miterlimit="10"/>
                                    <path d="M20.4348 16.087L19.5652 23.9131" stroke="#414141" stroke-miterlimit="10"/>
                                    <path d="M30 22.1964V17.7939H27.6923C27.5229 17.2037 27.2907 16.6376 27.0004 16.1103L28.6309 14.4799L25.5152 11.3643L23.8848 12.9947C23.3575 12.6996 22.7963 12.4722 22.2012 12.3029V10H17.7987V12.3077C17.2085 12.477 16.6425 12.7092 16.1152 12.9995L14.4848 11.3691L11.3691 14.4848L12.9995 16.1151C12.7044 16.6425 12.477 17.2037 12.3077 17.7987H10V22.2013H12.3077C12.477 22.7915 12.7092 23.3575 12.9995 23.8849L11.3691 25.5152L14.4848 28.6309L16.1152 27.0005C16.6425 27.2956 17.2036 27.523 17.7987 27.6923V30H22.2012V27.6923C22.7914 27.523 23.3575 27.2908 23.8848 27.0005L25.5152 28.6309L28.6309 25.5152L27.0004 23.8849C27.2956 23.3575 27.5229 22.7963 27.6923 22.2013H30V22.1964Z" stroke="#414141" stroke-miterlimit="10" stroke-linecap="round"/>
                                    </g>
                                    <defs>
                                    <clipPath id="clip0_18_86">
                                    <rect width="20" height="20" fill="white" transform="translate(10 10)"/>
                                    </clipPath>
                                    </defs>
                                </svg>                            
                            </x-slot>
        
                            <x-slot name="title">
                                Laravel
                            </x-slot>
        
                            A dedicated service that allows agencies to outsource their web development projects and expand their business offerings with a solution fully customizable according to their needs and ready to meet their goals.
                        </x-ui.card>
                        <x-ui.card class="mt-4">
        
                            <x-slot name="icon">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.5" y="0.5" width="39" height="39" rx="19.5" stroke="#F6FAFA"/>
                                    <g clip-path="url(#clip0_18_86)">
                                    <path d="M16.9565 17.8261L14.4471 20.104C14.3176 20.2233 14.3141 20.5595 14.4403 20.6897L16.8269 23.0435" stroke="#414141" stroke-miterlimit="10"/>
                                    <path d="M22.174 23.0435L25.5198 20.7656C25.6925 20.6463 25.6971 20.3101 25.5289 20.1799L22.3467 17.8261" stroke="#414141" stroke-miterlimit="10"/>
                                    <path d="M20.4348 16.087L19.5652 23.9131" stroke="#414141" stroke-miterlimit="10"/>
                                    <path d="M30 22.1964V17.7939H27.6923C27.5229 17.2037 27.2907 16.6376 27.0004 16.1103L28.6309 14.4799L25.5152 11.3643L23.8848 12.9947C23.3575 12.6996 22.7963 12.4722 22.2012 12.3029V10H17.7987V12.3077C17.2085 12.477 16.6425 12.7092 16.1152 12.9995L14.4848 11.3691L11.3691 14.4848L12.9995 16.1151C12.7044 16.6425 12.477 17.2037 12.3077 17.7987H10V22.2013H12.3077C12.477 22.7915 12.7092 23.3575 12.9995 23.8849L11.3691 25.5152L14.4848 28.6309L16.1152 27.0005C16.6425 27.2956 17.2036 27.523 17.7987 27.6923V30H22.2012V27.6923C22.7914 27.523 23.3575 27.2908 23.8848 27.0005L25.5152 28.6309L28.6309 25.5152L27.0004 23.8849C27.2956 23.3575 27.5229 22.7963 27.6923 22.2013H30V22.1964Z" stroke="#414141" stroke-miterlimit="10" stroke-linecap="round"/>
                                    </g>
                                    <defs>
                                    <clipPath id="clip0_18_86">
                                    <rect width="20" height="20" fill="white" transform="translate(10 10)"/>
                                    </clipPath>
                                    </defs>
                                </svg>                            
                            </x-slot>
        
                            <x-slot name="title">
                                Figma
                            </x-slot>
        
                            A dedicated service that allows agencies to outsource their web development projects and expand their business offerings with a solution fully customizable according to their needs and ready to meet their goals.
                        </x-ui.card>
                    </div>

                    <div class="swiper-slide flex gap-y-2 flex-col">
                        <x-ui.card>
        
                            <x-slot name="icon">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.5" y="0.5" width="39" height="39" rx="19.5" stroke="#F6FAFA"/>
                                    <g clip-path="url(#clip0_18_86)">
                                    <path d="M16.9565 17.8261L14.4471 20.104C14.3176 20.2233 14.3141 20.5595 14.4403 20.6897L16.8269 23.0435" stroke="#414141" stroke-miterlimit="10"/>
                                    <path d="M22.174 23.0435L25.5198 20.7656C25.6925 20.6463 25.6971 20.3101 25.5289 20.1799L22.3467 17.8261" stroke="#414141" stroke-miterlimit="10"/>
                                    <path d="M20.4348 16.087L19.5652 23.9131" stroke="#414141" stroke-miterlimit="10"/>
                                    <path d="M30 22.1964V17.7939H27.6923C27.5229 17.2037 27.2907 16.6376 27.0004 16.1103L28.6309 14.4799L25.5152 11.3643L23.8848 12.9947C23.3575 12.6996 22.7963 12.4722 22.2012 12.3029V10H17.7987V12.3077C17.2085 12.477 16.6425 12.7092 16.1152 12.9995L14.4848 11.3691L11.3691 14.4848L12.9995 16.1151C12.7044 16.6425 12.477 17.2037 12.3077 17.7987H10V22.2013H12.3077C12.477 22.7915 12.7092 23.3575 12.9995 23.8849L11.3691 25.5152L14.4848 28.6309L16.1152 27.0005C16.6425 27.2956 17.2036 27.523 17.7987 27.6923V30H22.2012V27.6923C22.7914 27.523 23.3575 27.2908 23.8848 27.0005L25.5152 28.6309L28.6309 25.5152L27.0004 23.8849C27.2956 23.3575 27.5229 22.7963 27.6923 22.2013H30V22.1964Z" stroke="#414141" stroke-miterlimit="10" stroke-linecap="round"/>
                                    </g>
                                    <defs>
                                    <clipPath id="clip0_18_86">
                                    <rect width="20" height="20" fill="white" transform="translate(10 10)"/>
                                    </clipPath>
                                    </defs>
                                </svg>                            
                            </x-slot>
        
                            <x-slot name="title">
                                Laravel
                            </x-slot>
        
                            A dedicated service that allows agencies to outsource their web development projects and expand their business offerings with a solution fully customizable according to their needs and ready to meet their goals. Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, nemo!
                        </x-ui.card>
                        <x-ui.card class="mt-4">
        
                            <x-slot name="icon">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.5" y="0.5" width="39" height="39" rx="19.5" stroke="#F6FAFA"/>
                                    <g clip-path="url(#clip0_18_86)">
                                    <path d="M16.9565 17.8261L14.4471 20.104C14.3176 20.2233 14.3141 20.5595 14.4403 20.6897L16.8269 23.0435" stroke="#414141" stroke-miterlimit="10"/>
                                    <path d="M22.174 23.0435L25.5198 20.7656C25.6925 20.6463 25.6971 20.3101 25.5289 20.1799L22.3467 17.8261" stroke="#414141" stroke-miterlimit="10"/>
                                    <path d="M20.4348 16.087L19.5652 23.9131" stroke="#414141" stroke-miterlimit="10"/>
                                    <path d="M30 22.1964V17.7939H27.6923C27.5229 17.2037 27.2907 16.6376 27.0004 16.1103L28.6309 14.4799L25.5152 11.3643L23.8848 12.9947C23.3575 12.6996 22.7963 12.4722 22.2012 12.3029V10H17.7987V12.3077C17.2085 12.477 16.6425 12.7092 16.1152 12.9995L14.4848 11.3691L11.3691 14.4848L12.9995 16.1151C12.7044 16.6425 12.477 17.2037 12.3077 17.7987H10V22.2013H12.3077C12.477 22.7915 12.7092 23.3575 12.9995 23.8849L11.3691 25.5152L14.4848 28.6309L16.1152 27.0005C16.6425 27.2956 17.2036 27.523 17.7987 27.6923V30H22.2012V27.6923C22.7914 27.523 23.3575 27.2908 23.8848 27.0005L25.5152 28.6309L28.6309 25.5152L27.0004 23.8849C27.2956 23.3575 27.5229 22.7963 27.6923 22.2013H30V22.1964Z" stroke="#414141" stroke-miterlimit="10" stroke-linecap="round"/>
                                    </g>
                                    <defs>
                                    <clipPath id="clip0_18_86">
                                    <rect width="20" height="20" fill="white" transform="translate(10 10)"/>
                                    </clipPath>
                                    </defs>
                                </svg>                            
                            </x-slot>
        
                            <x-slot name="title">
                                Figma
                            </x-slot>
        
                            A dedicated service that allows agencies to outsource their web development projects and expand their business offerings with a solution fully customizable according to their needs and ready to meet their goals.
                        </x-ui.card>
                    </div>

                    <div class="swiper-slide flex gap-y-2 flex-col">
                        <x-ui.card>
        
                            <x-slot name="icon">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.5" y="0.5" width="39" height="39" rx="19.5" stroke="#F6FAFA"/>
                                    <g clip-path="url(#clip0_18_86)">
                                    <path d="M16.9565 17.8261L14.4471 20.104C14.3176 20.2233 14.3141 20.5595 14.4403 20.6897L16.8269 23.0435" stroke="#414141" stroke-miterlimit="10"/>
                                    <path d="M22.174 23.0435L25.5198 20.7656C25.6925 20.6463 25.6971 20.3101 25.5289 20.1799L22.3467 17.8261" stroke="#414141" stroke-miterlimit="10"/>
                                    <path d="M20.4348 16.087L19.5652 23.9131" stroke="#414141" stroke-miterlimit="10"/>
                                    <path d="M30 22.1964V17.7939H27.6923C27.5229 17.2037 27.2907 16.6376 27.0004 16.1103L28.6309 14.4799L25.5152 11.3643L23.8848 12.9947C23.3575 12.6996 22.7963 12.4722 22.2012 12.3029V10H17.7987V12.3077C17.2085 12.477 16.6425 12.7092 16.1152 12.9995L14.4848 11.3691L11.3691 14.4848L12.9995 16.1151C12.7044 16.6425 12.477 17.2037 12.3077 17.7987H10V22.2013H12.3077C12.477 22.7915 12.7092 23.3575 12.9995 23.8849L11.3691 25.5152L14.4848 28.6309L16.1152 27.0005C16.6425 27.2956 17.2036 27.523 17.7987 27.6923V30H22.2012V27.6923C22.7914 27.523 23.3575 27.2908 23.8848 27.0005L25.5152 28.6309L28.6309 25.5152L27.0004 23.8849C27.2956 23.3575 27.5229 22.7963 27.6923 22.2013H30V22.1964Z" stroke="#414141" stroke-miterlimit="10" stroke-linecap="round"/>
                                    </g>
                                    <defs>
                                    <clipPath id="clip0_18_86">
                                    <rect width="20" height="20" fill="white" transform="translate(10 10)"/>
                                    </clipPath>
                                    </defs>
                                </svg>                            
                            </x-slot>
        
                            <x-slot name="title">
                                Laravel
                            </x-slot>
        
                            A dedicated service that allows agencies to outsource their web development projects and expand their business offerings with a solution fully customizable according to their needs and ready to meet their goals.
                        </x-ui.card>
                        <x-ui.card class="mt-4">
        
                            <x-slot name="icon">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.5" y="0.5" width="39" height="39" rx="19.5" stroke="#F6FAFA"/>
                                    <g clip-path="url(#clip0_18_86)">
                                    <path d="M16.9565 17.8261L14.4471 20.104C14.3176 20.2233 14.3141 20.5595 14.4403 20.6897L16.8269 23.0435" stroke="#414141" stroke-miterlimit="10"/>
                                    <path d="M22.174 23.0435L25.5198 20.7656C25.6925 20.6463 25.6971 20.3101 25.5289 20.1799L22.3467 17.8261" stroke="#414141" stroke-miterlimit="10"/>
                                    <path d="M20.4348 16.087L19.5652 23.9131" stroke="#414141" stroke-miterlimit="10"/>
                                    <path d="M30 22.1964V17.7939H27.6923C27.5229 17.2037 27.2907 16.6376 27.0004 16.1103L28.6309 14.4799L25.5152 11.3643L23.8848 12.9947C23.3575 12.6996 22.7963 12.4722 22.2012 12.3029V10H17.7987V12.3077C17.2085 12.477 16.6425 12.7092 16.1152 12.9995L14.4848 11.3691L11.3691 14.4848L12.9995 16.1151C12.7044 16.6425 12.477 17.2037 12.3077 17.7987H10V22.2013H12.3077C12.477 22.7915 12.7092 23.3575 12.9995 23.8849L11.3691 25.5152L14.4848 28.6309L16.1152 27.0005C16.6425 27.2956 17.2036 27.523 17.7987 27.6923V30H22.2012V27.6923C22.7914 27.523 23.3575 27.2908 23.8848 27.0005L25.5152 28.6309L28.6309 25.5152L27.0004 23.8849C27.2956 23.3575 27.5229 22.7963 27.6923 22.2013H30V22.1964Z" stroke="#414141" stroke-miterlimit="10" stroke-linecap="round"/>
                                    </g>
                                    <defs>
                                    <clipPath id="clip0_18_86">
                                    <rect width="20" height="20" fill="white" transform="translate(10 10)"/>
                                    </clipPath>
                                    </defs>
                                </svg>                            
                            </x-slot>
        
                            <x-slot name="title">
                                Figma
                            </x-slot>
        
                            A dedicated service that allows agencies to outsource their web development projects and expand their business offerings with a solution fully customizable according to their needs and ready to meet their goals. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deleniti eaque nostrum pariatur! Magni sint neque quam, non facere asperiores animi.
                        </x-ui.card>
                    </div>

                </div>

            </div>

        </section>

        <section class="mt-8">
            <div class="container mx-auto relative px-5">
                <div class="w-full rounded-2xl relative overflow-hidden">
                    <img src="{{ asset('images/homepage/hero_image_2.png')}}" class="w-full lg:object-cover lg:aspect-video lg:h-auto aspect-[9/16] object-cover" alt="">

                    <div class="absolute inset-0 z-10 p-5 bg-gradient-to-t from-primary-900 to-transparent text-white flex flex-col justify-end">
                        <div class="flex flex-col max-w-md">
                            <h2 class="text-white splits">
                                Amplia la tua offerta!
                            </h2>
                            <p class="mt-4 text-xl text-white font-light">
                                Non perdere clienti, amplia la tua offerta e affidati a dei professionisti. Prenota una consulenza senza nessun obbligo.
                            </p>
                            <x-link-button-secondary
                                class="w-full justify-center mt-2 hover:text-white hover:bg-white/10"
                                href="#ciao">                          
                                Contattaci
                            </x-link-button-secondary>
                        </div>
                    </div>

                </div>

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
            breakpoints: {
                720: {
                    slidesPerView: 5
                }
            }
        });

        var swiper = new Swiper(".services", {
            slidesPerView: 'auto',
            spaceBetween: 32,
            loop: true,
            speed: 4000,
            slidesPerView: '1',
            autoplay: {
                enabled: true,
                delay: 1,
            },
            breakpoints: {
                720: {
                    slidesPerView: 2.4
                }
            }
        });

        var swiper = new Swiper(".swiper-review", {
            slidesPerView: 'auto',
            spaceBetween: 16,
            loop: true,
            speed: 4000,
            slidesPerView: '1.2',
            autoplay: {
                enabled: true,
                delay: 1,
            },
            breakpoints: {
                720: {
                    slidesPerView: 4
                }
            }
        });

        var swiper = new Swiper(".classic-slider", {
            spaceBetween: 32,
            loop: true,
            speed: 300,
            slidesPerView: '1',
            // If we need pagination
            pagination: {
                el: '.swiper-pagination',
            },
            autoplay: true,
        });
    });
</script>
    
@endpush