@props(['highlight' => false])

<div @class(['highlight'=>$highlight, 'card'])>
    {{ $slot }}
<a href="{{$attributes->get('href')}}">View tutorial</a>
</div>