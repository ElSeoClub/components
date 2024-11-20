@props([ 'active' => null, 'current_active'=> null, 'icon' => null])
@php
    $linkClassList = $active && $current_active && $active == $current_active ? 'bg-[linear-gradient(135deg,var(--tw-gradient-stops))] from-neutral-500/[0.12] dark:from-neutral-500/[0.36] to-neutral-500/[0.04] dark:to-neutral-500/[0.12]' : '';
    $iconClassList = $active && $current_active && $active == $current_active ? 'text-secondary-500' : 'text-gray-400 dark:text-gray-500';
    $spanClassList = 'text-gray-600 dark:text-gray-300 hover:text-gray-700 dark:hover:text-gray-200';
@endphp
<li class="mr-0.5 md:mr-0 md:mb-0.5">
    <button
        {{$attributes->merge(['class' => 'cursor-pointer w-full flex items-center px-2.5 py-2 rounded-lg whitespace-nowrap text-sm font-medium '.$linkClassList])}}
        wire:click="setCurrentMenu('{{$active}}')">
        @if($icon)
            @svg('tabler-'.$icon, ' mr-2 '.$iconClassList)
        @endif
        <span class="{{$spanClassList}}">{{$slot}}</span>
    </button>
</li>
