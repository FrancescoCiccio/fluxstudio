@aware(['page'])

@php($class = '')

@if($pagination)
    @php($class = 'classic-slider pb-8')
@endif
<div class="container px-5 mx-auto relative">
    <div class="swiper  {{ $class }}" id="{{ $id }}">
        <div class="swiper-wrapper">
            @foreach($cards as $card)
            <x-ui.card class="swiper-slide">

                @if(isset($card['icon']))
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
                @endif

                <x-slot name="title">
                    {{ $card['title'] }}
                </x-slot>

                {{ $card['description'] }}
            </x-ui.card>
            @endforeach
            
        </div>

        @if ($pagination)
            <div class="swiper-pagination"></div>
        @endif
    </div>

    @if(!$pagination)
        <x-ui.mask />
    @endif
</div>


<script>
    document.addEventListener('DOMContentLoaded', function () {

        @if($pagination)
            var swiper = new Swiper("#{{ $id }}", {
                spaceBetween: 32,
                loop: true,
                speed: 300,
                slidesPerView: '1',
                // If we need pagination
                pagination: {
                    el: '.swiper-pagination',
                },
                breakpoints: {
                    720: {
                        slidesPerView: 3,
                        spaceBetween: 8,
                    }
                },
                autoplay: true,
            });
        @else 
        var swiper = new Swiper("#{{ $id }}", {
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
        @endif
    });
</script>