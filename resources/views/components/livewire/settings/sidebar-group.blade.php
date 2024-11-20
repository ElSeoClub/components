@props(['title' => ''])
<div>
    @if($title)
        <div class="text-xs font-semibold text-gray-400 dark:text-gray-500 uppercase mb-3">{{$title}}</div>
    @endif
    {{$slot}}
</div>
