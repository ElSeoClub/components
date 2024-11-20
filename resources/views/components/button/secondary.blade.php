@if($attributes->has('href'))
    <a href="{{$attributes->get('href')}}" {{$attributes->merge(['class'=>'btn bg-white dark:bg-gray-800 border-gray-200 dark:border-gray-700/60 hover:border-gray-300 dark:hover:border-gray-600 text-gray-800 dark:text-gray-300'])}}>
        {{$slot}}
    </a>
@else
    <button {{$attributes->merge(['class'=>'btn bg-white dark:bg-gray-800 border-gray-200 dark:border-gray-700/60 hover:border-gray-300 dark:hover:border-gray-600 text-gray-800 dark:text-gray-300'])}}>
        {{$slot}}
    </button>
@endif
