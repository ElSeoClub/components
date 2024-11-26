@props(['label' => '', 'href' => null, 'icon' => false, 'logo' => false, 'isLast' => false])
<li class="flex items-center">
    <a class="flex items-center gap-2 text-gray-500 dark:text-gray-400 hover:text-secondary-500 dark:hover:text-secondary-500"
       @if($href) href="{{ $href }}" @endif>
        @if($logo)
            <img class="w-4 h-4" src="{{ $logo }}" alt="{{ $label }}">
        @elseif($icon)
            @svg($icon, 'w-4 h-4 text-gray-400 dark:text-gray-500')
        @endif
        {{ $label }}</a>
    @if(!$isLast)
        @svg('tabler-chevron-right', 'w-4 h-4 text-gray-400 dark:text-gray-500')
    @endif
</li>
