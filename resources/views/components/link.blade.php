@props(['active'=> false, 'isMobile' => false])


<a class="{{ $active ? 'rounded-md bg-blue-800 px-3 py-2 text-sm font-medium bg-blue-50 text-white' : 'text-blue-500 hover:bg-blue-300 hover:text-white'}}  {{$isMobile ? 'block' : ''}}"
 aria-current="{{$active ? 'page' : 'false'}}" {{$attributes}}>
    {{$slot}}

</a>