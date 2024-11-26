@props(['label' => '', 'href' => null, 'isActive' => false, 'icon' => false, 'logo' => false, 'badgeLabel' => false])
<ul>
    <li class="pl-4 pr-3 py-2 rounded-lg mb-0.5 last:mb-0 bg-[linear-gradient(135deg,var(--tw-gradient-stops))] {{ $isActive ? 'from-secondary-500/[0.12] dark:from-secondary-500/[0.24] to-secondary-500/[0.04]' : ''}}">
        <a class="block text-gray-800 dark:text-gray-100 truncate transition {{ !$isActive ? 'hover:text-gray-900 dark:hover:text-white' : ''}}"
           @if($href) href="{{ $href }}" @endif>
            <div class="flex items-center justify-between">
                @if($logo)
                    <img class="flex-none w-5 h-5 rounded-full" src="{{ $logo }}" alt="{{ $label }}">
                @elseif($icon)
                    @svg($icon, ($isActive ? 'flex-none w-5 h-5 text-secondary-500' : 'flex-none w-5 h-5 text-gray-400 dark:text-gray-500'))
                @endif
                <div class="flex-1 flex items-center truncate"
                >
                    <span
                        class="text-sm truncate font-medium ml-4 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">{{$label}}</span>
                </div>
                @if($badgeLabel)
                    <x-esc::layout.sidebar.block-item-badge :label="$badgeLabel" />
                @endif
            </div>
        </a>
    </li>
</ul>
