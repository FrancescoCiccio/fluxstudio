@props([])

<a 
    {{ $attributes->merge([
        'class' => 'inline-flex items-center px-5 py-2 bg-white border border-transparent rounded-md text-base font-[500] text-primary-900 hover:text-primary-600 hover:bg-transparent transition ease-in-out duration-150']) }}>

    @if(isset($icon))
        <span class="mr-2">
            {{ $icon }}
        </span>
    @endif

    <span>
        {{ $slot }}
    </span>
   
</a>
