@if($attributes->has('href'))
    <a href="{{$attributes->get('href')}}" {{$attributes->merge(['class'=>'btn bg-gray-900 text-gray-100 hover:bg-gray-800 dark:bg-gray-100 dark:text-gray-800 dark:hover:bg-white'])}}>
        {{$slot}}
    </a>
@else
    <button
        {{$attributes->merge(['class'=>'btn bg-gray-900 text-gray-100 hover:bg-gray-800 dark:bg-gray-100 dark:text-gray-800 dark:hover:bg-white'])}}>
        {{$slot}}
    </button>
@endif
