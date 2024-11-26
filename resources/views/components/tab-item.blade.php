@props(['label'=> '', 'href' => null, 'isActive' => false, 'icon' => null, 'logo' => null])
<li class="mr-6 last:mr-0 first:pl-4 sm:first:pl-6 lg:first:pl-8 last:pr-4 sm:last:pr-6 lg:last:pr-8">
    <a
        {{ $attributes->merge(['class'=> 'cursor-pointer flex items-center gap-2 pb-3 whitespace-nowrap ' . ($isActive ? 'text-secondary-700  border-b-2 border-secondary-600':'text-gray-500 dark:text-gray-400 hover:text-gray-600 dark:hover:text-gray-300')]) }}
    @if($href) href="{{$href}}" @endif>
        @if($logo)
            <img class="w-5 h-5" src="{{ $logo }}" alt="{{ $label }}">
        @elseif($icon)
            @svg($icon, 'w-5 h-5')
        @endif
        {{$label}}
    </a>
</li>
