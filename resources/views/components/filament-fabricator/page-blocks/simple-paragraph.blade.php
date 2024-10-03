@aware(['page'])
<div class="container mx-auto px-5">
    <h2 class="">
        {{ $title }}
    </h2>
    <h3 class="text-primary-400 max-w-2xl mb-4">
        {{ $subtitle }}
    </h3>

    @if (isset($text))
        {!! $text !!}
    @endif
</div>
