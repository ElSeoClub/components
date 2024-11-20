@props(['data' => null])

<div
    class="flex flex-nowrap overflow-x-scroll no-scrollbar md:block md:overflow-auto px-3 py-6 border-b md:border-b-0 md:border-r border-gray-200 dark:border-gray-700/60 min-w-60 md:space-y-3">
    @if($data)
        @foreach($data['menu'] as $group_name => $item)
            <x-esc::livewire.settings.sidebar-group :title="$item['label']">
                <x-esc::livewire.settings.sidebar-list>
                    @foreach($item['menu'] as $menu_name => $menu)
                        <x-esc::livewire.settings.sidebar-list-item :active="$menu_name"
                                                                    :current_active="$data['current_menu']"
                                                                    :icon="$menu['icon']">
                            {{$menu['label']}}
                        </x-esc::livewire.settings.sidebar-list-item>
                    @endforeach
                </x-esc::livewire.settings.sidebar-list>
            </x-esc::livewire.settings.sidebar-group>
        @endforeach
    @endif
    {{$slot}}
</div>
