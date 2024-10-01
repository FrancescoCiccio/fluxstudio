<div class="pl-4 border-l-2 border-l-secondary-900 flex gap-y-1 flex-col py-2">
    <h3 class="lg:text-3xl">
        {{ isset($title) ? $title : '' }}
    </h3>
    <p class="text-sm text-primary-400">
        {{ $slot }}
    </p>
</div>