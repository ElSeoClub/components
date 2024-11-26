@props(['data' => [], 'back' => false])
<ul class="inline-flex flex-wrap text-sm font-medium">
    @if(count($data))
        @foreach($data as $key => $item)
            <x-esc::layout.breadcrumb-item :label="$item['label']"
                                           :href="$item['href']??null"
                                           :logo="$item['logo']??null"
                                           :icon="$item['icon']??null"
                                           :is-last="$item['isLast']??false"/>
        @endforeach
    @endif
    {{ $slot }}
</ul>
