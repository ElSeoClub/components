@props(['href' => $slot,'active' => false,'label' => '', 'icon' => null])
<ul>
    <li class="pl-4 pr-3 py-2 rounded-lg mb-0.5 last:mb-0 bg-[linear-gradient(135deg,var(--tw-gradient-stops))] @if($active && Route::is($active)){{ 'from-neutral-500/[0.12] dark:from-neutral-500/[0.36] to-neutral-500/[0.04] dark:to-neutral-500/[0.12]' }}@endif">
        <a class="block text-gray-800 dark:text-gray-100 truncate transition @if($active && !Route::is($active)){{ 'hover:text-gray-900 dark:hover:text-white' }}@endif"
           @if($href) href="{{$href}}" @endif
        >
            <div class="flex items-center">
                @if($icon)
                    <x-dynamic-component
                        :component="'icons.' . $icon"
                        :class="implode(' ', [
            'shrink-0 fill-current',
            $active && Route::is($active) ? 'text-secondary-500' : 'text-gray-400 dark:text-gray-500'
        ])"
                        width="16"
                        height="16"
                    />
                @endif
                <span
                    class="text-sm font-medium ml-4 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">{{$label}}</span>
            </div>
        </a>
    </li>
</ul>
