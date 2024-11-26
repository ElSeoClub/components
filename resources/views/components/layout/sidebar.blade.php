<div class="min-w-fit">
    <div class="fixed inset-0 bg-gray-900 bg-opacity-30 z-40 lg:hidden lg:z-auto transition-opacity duration-200"
         :class="sidebarOpen ? 'opacity-100' : 'opacity-0 pointer-events-none'" aria-hidden="true" x-cloak></div>
    <div id="sidebar"
         class="flex lg:!flex flex-col absolute z-40 left-0 top-0 lg:static lg:left-auto lg:top-auto lg:translate-x-0 h-[100dvh] overflow-y-scroll lg:overflow-y-auto no-scrollbar w-64 lg:w-20 lg:sidebar-expanded:!w-64 2xl:!w-64 shrink-0 bg-white dark:bg-gray-800 p-4 transition-all duration-200 ease-in-out {{ $variant === 'v2' ? 'border-r border-gray-200 dark:border-gray-700/60' : 'rounded-r-2xl shadow-sm' }}"
         :class="sidebarOpen ? 'max-lg:translate-x-0' : 'max-lg:-translate-x-64'" @click.outside="sidebarOpen = false"
         @keydown.escape.window="sidebarOpen = false">
        <div class="flex justify-between mb-10 pr-3 sm:px-2">
            <button class="lg:hidden text-gray-500 hover:text-gray-400" @click.stop="sidebarOpen = !sidebarOpen"
                    aria-controls="sidebar" :aria-expanded="sidebarOpen">
                <span class="sr-only">Close sidebar</span>
                @svg('tabler-arrow-left', 'fill-current w-6 h-6')
            </button>
            <a class="block" href="{{ route('dashboard') }}">
                <svg class="fill-violet-500" xmlns="http://www.w3.org/2000/svg" width="32" height="32">
                    <path
                        d="M31.956 14.8C31.372 6.92 25.08.628 17.2.044V5.76a9.04 9.04 0 0 0 9.04 9.04h5.716ZM14.8 26.24v5.716C6.92 31.372.63 25.08.044 17.2H5.76a9.04 9.04 0 0 1 9.04 9.04Zm11.44-9.04h5.716c-.584 7.88-6.876 14.172-14.756 14.756V26.24a9.04 9.04 0 0 1 9.04-9.04ZM.044 14.8C.63 6.92 6.92.628 14.8.044V5.76a9.04 9.04 0 0 1-9.04 9.04H.044Z" />
                </svg>
            </a>
        </div>
        <div class="space-y-8">
            <x-esc::layout.sidebar.block label="Main">
                <x-esc::layout.sidebar.block-dropdown label="Dropdown with very large text"
                                                      logo="https://ui-avatars.com/api/?name=t&color=7F9CF5&background=EBF4FF">
                    <x-esc::layout.sidebar.block-dropdown-item label="Dashboard"
                                                               href="{{ route('dashboard') }}"
                                                               icon="tabler-users" />
                    <x-esc::layout.sidebar.block-dropdown-item label="Dashboard"
                                                               href="{{ route('dashboard') }}"
                                                               logo="https://ui-avatars.com/api/?name=t&color=7F9CF5&background=EBF4FF"
                                                               :is-active="true" />
                    <x-esc::layout.sidebar.block-dropdown-item label="Dashboard"
                                                               href="{{ route('dashboard') }}"
                                                               :is-active="false" />
                </x-esc::layout.sidebar.block-dropdown>
                <x-esc::layout.sidebar.block-dropdown label="Dropdown"
                                                      is-active="true"
                                                      icon="tabler-dashboard">
                    <x-esc::layout.sidebar.block-dropdown-item label="Dashboard"
                                                               href="{{ route('dashboard') }}"
                                                               icon="tabler-users" />
                    <x-esc::layout.sidebar.block-dropdown-item label="Dashboard"
                                                               href="{{ route('dashboard') }}"
                                                               logo="https://ui-avatars.com/api/?name=t&color=7F9CF5&background=EBF4FF"
                                                               :is-active="true" />
                    <x-esc::layout.sidebar.block-dropdown-item label="Dashboard"
                                                               href="{{ route('dashboard') }}"
                                                               :is-active="false" />
                </x-esc::layout.sidebar.block-dropdown>
                <x-esc::layout.sidebar.block-dropdown label="Dropdown with very large text"
                                                      icon="tabler-bug">
                    <x-esc::layout.sidebar.block-dropdown-item label="Dashboard"
                                                               href="{{ route('dashboard') }}"
                    />
                    <x-esc::layout.sidebar.block-dropdown-item label="Dashboard"
                                                               href="{{ route('dashboard') }}"
                                                               :is-active="true" />
                    <x-esc::layout.sidebar.block-dropdown-item label="Dashboard"
                                                               href="{{ route('dashboard') }}"
                                                               :is-active="false" />
                </x-esc::layout.sidebar.block-dropdown>
                <x-esc::layout.sidebar.block-item label="My profile"
                                                  href="{{ route('dashboard') }}"
                                                  :is-active="false"
                                                  icon="tabler-user"
                                                  badge-label="3" />
                <x-esc::layout.sidebar.block-item label="My profile very long text"
                                                  href="{{ route('dashboard') }}"
                                                  :is-active="false"
                                                  icon="tabler-user"
                                                  badge-label="1" />
                <x-esc::layout.sidebar.block-item label="Help"
                                                  href="{{ route('dashboard') }}"
                                                  icon="tabler-help" />
            </x-esc::layout.sidebar.block>
        </div>
        <div class="pt-3 hidden lg:inline-flex 2xl:hidden justify-end mt-auto">
            <div class="w-12 pl-4 pr-3 py-2">
                <button
                    class="text-gray-400 hover:text-gray-500 dark:text-gray-500 dark:hover:text-gray-400 transition-colors"
                    @click="sidebarExpanded = !sidebarExpanded">
                    <span class="sr-only">Expand / collapse sidebar</span>
                    @svg('tabler-arrow-bar-to-right', 'w-6 h-6 text-gray-400 dark:text-gray-500 sidebar-expanded:rotate-180 ')
                </button>
            </div>
        </div>
    </div>
</div>
