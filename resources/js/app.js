import './bootstrap';

import Alpine from 'alpinejs';
import Lenis from 'lenis';
import 'lenis/dist/lenis.css'


import Swiper from 'swiper';
import { Autoplay, Pagination, Navigation } from 'swiper/modules';

import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';

// Registrazione del plugin ScrollTrigger
gsap.registerPlugin(ScrollTrigger);

// Rendi gsap disponibile globalmente

// configure Swiper to use modules
Swiper.use([Navigation, Pagination, Autoplay]);
import 'swiper/swiper-bundle.css'; // Importa il CSS di Swiper

const lenis = new Lenis()


lenis.on('scroll', ScrollTrigger.update)

gsap.ticker.add((time)=>{
  lenis.raf(time * 1000)
})

gsap.ticker.lagSmoothing(0)



window.Alpine = Alpine;
window.Swiper = Swiper;
window.gsap = gsap;

Alpine.start();

const fadeins = document.querySelectorAll('img.fadein');

fadeins.forEach((element) => {
    gsap.fromTo(element, 
        { 
            opacity: 0, 
            y: 50 
        }, // Stato iniziale
        {
            opacity: 1,
            duration: .800,
            y: 0,
            scrollTrigger: {
                trigger: element, // Elemento che attiva l'animazione
                start: "top 80%", // Quando inizia l'animazione
                toggleActions: "play none none none", // Azioni dell'animazione
            },
        },
    );
});

const parallaxes = document.querySelectorAll('img.parallax');

parallaxes.forEach((element) => {
    gsap.fromTo(element, 
        { 
            marginTop: 25,
            opacity: .85 
        }, // Stato iniziale
        {
            opacity: 1,
            marginTop: -75,
            scrollTrigger: {
                trigger: element, // Elemento che attiva l'animazione
                start: "top 80%",
                end: "top 30%",
                scrub: true, // Quando inizia l'animazione
            },
        },
    );
});

document.addEventListener('foo', (event) => {
    const opened  = event.detail; // Ottieni il valore di opened dall'evento

    
    if (opened) {
      
        document.body.style.height = '100vh';
        document.body.style.overflow = 'hidden'; // Blocca lo scroll
    } else {
       
        document.body.style.height = 'auto';
        document.body.style.overflow = 'auto'; // Sblocca lo scroll
    }

    console.log('Foo event received!', opened);
});