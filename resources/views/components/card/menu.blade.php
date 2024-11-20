<x-slot name="menu">
    <div class="relative inline-flex" x-data="{ open: false }">
        <button
            class="rounded-full"
            :class="open ? 'bg-gray-100 dark:bg-gray-700/60 text-gray-500 dark:text-gray-400': 'text-gray-400 hover:text-gray-500 dark:text-gray-500 dark:hover:text-gray-400'"
            aria-haspopup="true"
            @click.prevent="open = !open"
            :aria-expanded="open"
        >
            <span class="sr-only">Menu</span>
            <svg class="w-8 h-8 fill-current" viewBox="0 0 32 32">
                <circle cx="16" cy="16" r="2"/>
                <circle cx="10" cy="16" r="2"/>
                <circle cx="22" cy="16" r="2"/>
            </svg>
        </button>
        <div
            class="origin-top-right z-10 absolute top-full right-0 min-w-36 bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700/60 py-1.5 rounded-lg shadow-lg overflow-hidden mt-1"
            @click.outside="open = false"
            @keydown.escape.window="open = false"
            x-show="open"
            x-transition:enter="transition ease-out duration-200 transform"
            x-transition:enter-start="opacity-0 -translate-y-2"
            x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="transition ease-out duration-200"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            x-cloak
        >
            <ul>
                {{$slot}}
            </ul>
        </div>
    </div>
</x-slot>
