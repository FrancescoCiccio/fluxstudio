@aware(['page'])
<div class="px-5 container mx-auto">
    <h2 class="mb-4">
        {{ $title }}
    </h2>

    @foreach($faqs as $faq)
        <div class="bg-white transition-all max-w-xl mx-auto p-3 rounded-xl border-solid border-secondary-900 border mb-2" x-data="{opened: false}">
            <div class="flex justify-between cursor-pointer items-center text-primary-600" @click="opened = !opened">

                <h4 class="font-medium leading-normal text-primary-600 max-w-[90%]">
                    {{ $faq['question'] }}
                </h4>

                <div :class="opened ? 'transform rotate-180 ' : ''" class="transition-all">
                    <x-heroicon-o-chevron-down class="w-4 h-4 stroke-current" />
                </div>

            </div>

                <div class="mt-4" 
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 translate-y-10"
                x-transition:enter-end="opacity-100"
                x-transition:leave="transition ease-in duration-300"
                x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0 translate-y-10"
                x-show="opened">
                {{ $faq['answer'] }}
            </div>
        </div>
    @endforeach
</div>
