<div 
{{ 
    $attributes->merge([
        'class' => 'bg-white rounded-lg border border-secondary-900 border-solid hover:bg-secondary-400 p-4'
    ]) 
}}>

    @if(isset($icon))
        {{ $icon }}
    @endif
    
    @if (isset($title))
        <h4 class="text-2xl font-semibold text-primary-400 my-2">
            {{ $title }}
        </h4>
    @endif
    
    <p class="text-primary-400 font-light">
        {{ $slot }}
    </p>

</div>