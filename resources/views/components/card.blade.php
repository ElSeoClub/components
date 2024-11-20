@props(['title' => null, 'menu' => null, 'footer' => null])
<div class="flex flex-col bg-white dark:bg-gray-800 shadow-sm rounded-xl">
    @if($title || $menu)
        <header class="px-5 py-4 border-b border-gray-100 dark:border-gray-700/60 flex items-center justify-between">
            <h2
                class="font-semibold text-gray-800 dark:text-gray-100">{{$title??''}}</h2>
            @if($menu)
                {{$menu}}
            @endif
        </header>
    @endif
    <div class="grow flex flex-col justify-center">
        {{$slot}}
    </div>
    @if($footer)
        {{$footer}}
    @endif
</div>
