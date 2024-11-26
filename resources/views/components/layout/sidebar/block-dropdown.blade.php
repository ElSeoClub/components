@props(['label' => '', 'href' => null, 'isActive' => false, 'icon' => false, 'logo' => false])
<ul>
    <li class="pl-4 pr-3 py-2 rounded-lg mb-0.5 last:mb-0 bg-[linear-gradient(135deg,var(--tw-gradient-stops))] {{ $isActive ? 'from-secondary-500/[0.12] dark:from-secondary-500/[0.24] to-secondary-500/[0.04]' : ''}}"
        x-data="{ open: {{ $isActive ? 1 : 0 }} }">
        <a class="block cursor-pointer truncate transition {{ !$isActive ? 'hover:text-gray-900 dark:hover:text-white' : 'text-gray-800 dark:text-gray-100' }}"
           @if($href) href="{{$href}}"
           @endif @click="sidebarExpanded ? (open = !open) : (open = sidebarExpanded = true)"
        >
            <div class="flex items-center justify-between">
                @if($logo)
                    <img src="{{ $logo }}" alt="{{ $label }}"
                         class="w-5 h-5 flex-none">
                @elseif($icon)
                    @svg($icon, ($isActive ? 'w-5 h-5 text-secondary-500 flex-none' : 'w-5 h-5 text-gray-400 dark:text-gray-500 flex-none'))
                @endif
                <div class="flex flex-1 items-center {{ !$logo && !$icon ? 'pl-5' : '' }} truncate">
                    <span
                        class="flex-1 truncate text-sm font-medium ml-4 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">{{ $label }}</span>
                </div>
                <div x-bind:class="{ 'rotate-180': open }"
                     class="flex flex-none shrink-0 ml-2 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200 {{ $isActive ? 'rotate-180' : '' }}">
                    @svg('tabler-chevron-down', 'w-4 h-4 text-gray-400 dark:text-gray-500')
                </div>
            </div>
        </a>
        <div class="lg:hidden lg:sidebar-expanded:block 2xl:block">
            <ul class="mt-1 {{ !$isActive ? 'hidden' : '' }}" :class="open ? '!block' : 'hidden'">
                {{$slot}}
            </ul>
        </div>
    </li>
</ul>
