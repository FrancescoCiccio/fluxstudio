<div 
    class="w-full h-screen flex items-end fixed top-0 left-0 z-50" 
    id="booking"
    x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="opacity-0 translate-y-10"
    x-transition:enter-end="opacity-100"
    x-transition:leave="transition ease-in duration-300"
    x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0 translate-y-10"
    x-show="opened"
    x-data="bookingComponent"
    @book.window="opened = true"
    x-show="opened"
>
    <div 
        @click="opened = false"
        class="absolute inset-0 bg-black/80"></div>

    <div class="bg-secondary-400 rounded-t-xl p-5 h-1/2 relative w-full flex flex-col">
        <h3>
            Prenota una 
            videochiamata per il tuo progetto
        </h3>
        <!-- Input per la data -->
        <div class="mt-4 relative">
            <input 
                placeholder="Seleziona una data"
                type="date" 
                id="date" 
                class="mt-1" 
                x-model="selectedDate"
            >
            <x-heroicon-o-calendar class="w-5 pointer-events-none h-5 text-primary-600 absolute right-4 top-1/2 transform -translate-y-1/2" />
        </div>

        <div x-show="!loading && !selectedDate"
            class="bg-white p-3 rounded-lg flex gap-x-2 mt-2 border border-secondary-900 border-solid">
            <p class="">
                Seleziona un giorno poi uno slot orario, lascia la tua mail e ricevi il promemoria di videochiamata
            </p>
            <div class="icon">
                <x-heroicon-o-information-circle class="w-5 h-5 text-primary-400" />
            </div>
        </div>
    
        <div class="mt-4 flex justify-center" x-show="loading">
            <div role="status">
                <svg aria-hidden="true" class="w-8 h-8 text-gray-200 animate-spin dark:text-secondary-900 fill-primary-900" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
                    <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
                </svg>
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <div class="flex-grow"></div>
        <div class="flex gap-x-4">
            <x-link-button-secondary @click="opened = false">
                Annulla
            </x-link-button-secondary>
            <x-link-button class="w-full text-center justify-center" @click="console.log('ciao')">
                <x-slot name="icon">
                    <x-heroicon-o-hand-thumb-up class="w-5 h-5 text-white" />
                </x-slot>
                Conferma
            </x-link-button>
        </div>
    </div>
</div>

@push('scripts')

    <script>

        
        const bookingComponent = () => {
            return {
                'loading': false,
                'opened': false,
                'selectedDate': null,
                'errorMessage': null,
                'availableSlots': [],

                fetchAvailableSlots() {
                    this.loading = true;
                    this.errorMessage = '';

                    // Recupera il CSRF token dalla meta tag
                    /* const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content'); */

                    fetch('{{ route('booking.slots') }}', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'Accept': 'application/json',
                        },
                        body: JSON.stringify({
                            date: this.selectedDate,
                        }),
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.length === 0) {
                            this.errorMessage = 'Non sono stati trovati slot per questa data';
                            this.availableSlots = [];
                        } else if (data.length === 0) {
                            this.availableSlots = [];
                        } else {
                            this.availableSlots = data;
                        }
                        this.loading = false;
                    })
                    .catch(error => {
                        console.error('Errore nel recupero degli slot disponibili:', error);
                        this.availableSlots = [];
                        this.errorMessage = 'Si è verificato un errore. Riprova più tardi.';
                        this.loading = false;
                        alert('Si è verificato un errore. Riprova più tardi.');
                    });
                },


                init() {
                // Osserva i cambiamenti di selectedDate
                    this.$watch('selectedDate', (value) => {

                        const self = this;

                        this.loading = true;

                        if (value) {
                            this.fetchAvailableSlots();
                        } else {
                            console.log('non ho value')
                        }

                        setTimeout(() => {
                            self.loading = false;
                        }, 2000);
                    });
                },
            }
        }


    </script>
    
@endpush