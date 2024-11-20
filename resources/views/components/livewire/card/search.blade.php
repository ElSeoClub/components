<div>
    <div class="col-span-full xl:col-span-8 bg-white dark:bg-gray-800 shadow-sm rounded-xl">
        <header class="p-3 border-b border-gray-100 dark:border-gray-700/60">
            <div class="relative">
                <input class="form-input w-full pl-9" type="search" placeholder="{{__('Search')}}"
                       wire:model.live.debounce.500ms="filter.search"/>
                <button class="absolute inset-0 right-auto group" type="submit" aria-label="Search">
                    <svg
                        class="shrink-0 fill-current text-gray-400 dark:text-gray-500 group-hover:text-gray-500 dark:group-hover:text-gray-400 ml-3 mr-2"
                        width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M7 14c-3.86 0-7-3.14-7-7s3.14-7 7-7 7.14 7 7 7zM7 2C4.243 2 2 4.243 2 7s2.243 5 5 5 5-2.243 5-5-2.243-5-5-5z"/>
                        <path
                            d="M15.707 14.293L13.314 11.9a8.019 8.019 0 01-1.414 1.414l2.393 2.393a.997.997 0 001.414 0 .999.999 0 000-1.414z"/>
                    </svg>
                </button>
            </div>
        </header>
        <div class="p-3">
            <div class="overflow-x-auto">
                @if($data->isEmpty())
                    <div class="flex items-center justify-center">
                        <span class="text-gray-500 dark:text-gray-400">{{__('No records found')}}</span>
                    </div>
                @else
                    <table class="table-auto w-full dark:text-gray-300">
                        <thead
                            class="text-xs uppercase text-gray-400 dark:text-gray-500 bg-gray-50 dark:bg-gray-700 dark:bg-opacity-50 rounded-sm">
                        <tr>
                            @foreach($columns as $column)
                                <th class="p-2  {{ $column['class'] ?? '' }}">
                                    <div class="font-semibold text-left">{{ __($column['label']) }}</div>
                                </th>
                            @endforeach
                        </tr>
                        </thead>
                        <tbody class="text-sm font-medium divide-y divide-gray-100 dark:divide-gray-700/60">
                        @foreach($data as $row)
                            <tr>
                                @foreach($columns as $column)
                                    <td class="p-2">
                                        @php($type = $column['type'] ?? 'text')
                                        @if($type === 'text')
                                            <div class="text-left">{{ data_get($row, $column['field']) }}</div>
                                        @elseif($type === 'image')
                                            <img src="{{ data_get($row, $column['field']) }}" alt="Logo"
                                                 class="w-12 h-12 object-contain aspect-square">
                                        @elseif($type === 'buttons')
                                            <div class="flex space-x-2">
                                                @foreach($column['buttons'] as $action)
                                                    <x-esc::button
                                                        href="{{ route(
                                                        $action['route'],
                                                        !empty($action['params'])
                                                            ? collect($action['params'])->mapWithKeys(fn($param) => [$param => data_get($row, $param)])
                                                            : []
                                                    ) }}"
                                                        class="{{ $action['class'] ?? '' }}">
                                                        {{ __($action['label']) }}
                                                    </x-esc::button>
                                                @endforeach
                                            </div>
                                        @endif
                                    </td>
                                @endforeach
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        </div>
    </div>
    <div class="mt-4">
        {{$data->links()}}
    </div>
</div>
