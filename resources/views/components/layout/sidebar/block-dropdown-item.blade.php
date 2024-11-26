@props(['label' => '', 'href' => null, 'isActive' => false, 'icon' => false, 'logo' => false])
<li class="mb-1 last:mb-0">
    <a class="pl-2 flex gap-1 items-center transition truncate {{ $isActive ?'text-secondary-600 dark:text-secondary-500 hover:text-secondary-700 dark:hover:text-secondary-400' : 'text-gray-500/90 dark:text-gray-400 hover:text-gray-600/90 dark:hover:text-gray-300' }} {{!$icon && !$logo ? 'pl-7' : ''}}"
       @if($href) href="{{ $href }}" @endif>
        @if($logo)
            <img class="w-4 h-4" src="{{ $logo }}" alt="{{ $label }}">
        @elseif($icon)
            @svg($icon, ($isActive ? 'w-4 h-4 text-secondary-500' : 'w-4 h-4 text-gray-400 dark:text-gray-500'))
        @endif
        <span
            class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">{{$label}}</span>
    </a>
</li>

