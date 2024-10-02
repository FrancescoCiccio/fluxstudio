@props([])

<a 

    {{ $attributes->merge([
        'class' => 'inline-flex items-center px-5 py-2 bg-primary-900 border border-transparent rounded-md text-base font-[500] text-white hover:text-white hover:bg-primary-600 transition ease-in-out duration-150']) }}>

    @if(isset($icon))
        <span class="mr-2">
            {{ $icon }}
        </span>
    @endif

    <span>
        {{ $slot }}
    </span>
   
</a>
