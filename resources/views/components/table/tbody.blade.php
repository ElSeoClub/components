<x-slot name="tbody">
    <tbody {{$attributes->merge(['class'=>'text-sm font-medium divide-y divide-gray-100 dark:divide-gray-700/60 text-left'])}}>
    {{$slot}}
    </tbody>
</x-slot>
