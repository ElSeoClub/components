<x-slot name="footer">
    <footer {{$attributes->merge(['class'=>'border-t border-gray-100 dark:border-gray-700/60 flex items-center justify-between px-3 py-3'])}}>
        {{$slot}}
    </footer>
</x-slot>
