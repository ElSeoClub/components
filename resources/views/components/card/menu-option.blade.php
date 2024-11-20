<li>
    <a
        {{$attributes->merge(['class'=>'font-medium text-sm text-gray-600 dark:text-gray-300 hover:text-gray-800 dark:hover:text-gray-200 flex py-1 px-3 cursor-pointer'])}}
        @click="open = !open" @focusout="open = false">{{$slot}}</a>
</li>
