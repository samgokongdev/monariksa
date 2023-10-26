@props(['active' => false])

@php
    $classes = $active ?? false ? 'text-black font-bold' : 'text-gray-500';
@endphp

<li>
    <a wire:navigate {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</a>
</li>
