@props(['data' => null])

<div
    class="grow max-h-[calc(100svh-340px)] min-h-[calc(100svh-340px)] md:max-h-[calc(100svh-200px)] md:min-h-[calc(100svh-200px)]"
    wire:loading>
    <div
        class="max-h-[calc(100svh-340px)] min-h-[calc(100svh-340px)] md:max-h-[calc(100svh-200px)] md:min-h-[calc(100svh-200px)] w-full flex items-center justify-center gap-1">
        <span class='sr-only'>Loading...</span>
        <div class='h-3 w-3 bg-primary-300 rounded-full animate-bounce [animation-delay:-0.3s]'></div>
        <div class='h-3 w-3 bg-primary-400 rounded-full animate-bounce [animation-delay:-0.15s]'></div>
        <div class='h-3 w-3 bg-primary-500 rounded-full animate-bounce'></div>
    </div>
</div>
<div
    class="grow max-h-[calc(100svh-340px)] min-h-[calc(100svh-340px)] md:max-h-[calc(100svh-200px)] md:min-h-[calc(100svh-200px)]"
    wire:loading.remove>
    @if($data)
        @livewire($data['livewire_path'].'.'.$data['current_menu'], [$data['params']], key($data['current_menu']))
    @endif
    {{$slot}}
</div>
