@props(['thead'=>null, 'tbody'=>null])
<table class="table-auto w-full dark:text-gray-300">
    @if($thead)
        {{$thead}}
    @endif
    @if($tbody)
        {{$tbody}}
    @endif
</table>
