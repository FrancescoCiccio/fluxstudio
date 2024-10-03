@props(['page'])
<x-filament-fabricator::layouts.base :title="$page->title">
    {{-- Header Here --}}
    @include('layouts.navigation.main')

    <div class="hero-section min-h-[60vh] 2xl:min-h-[40vh]">
        <x-filament-fabricator::page-blocks :blocks="$page->heroBlocks" />
    </div>

    <div class="mt-8 flex flex-col lg:flex-row container mx-auto">
        <div class="lg:w-1/4 w-full px-5">
            QUI VA NAVIGATOR
        </div>
        <div class="lg:w-3/4 w-full mt-8 lg:mt-0">
            <x-filament-fabricator::page-blocks :blocks="$page->mainBlocks" />
        </div>
    </div>

     {{-- Footer Here --}}
     @include('layouts.footer.main')
</x-filament-fabricator::layouts.base>