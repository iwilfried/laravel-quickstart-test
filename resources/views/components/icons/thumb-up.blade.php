@props(['size' => 5, 'color' => 'currentColor', 'class' => ''])
<svg xmlns="http://www.w3.org/2000/svg"
     {{ $attributes->merge(['class' => 'h-' . $size . ' w-' . $size . ' ' . $class]) }} viewBox="0 0 20 20"
     fill="{{ $color }}">
    <path
        d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z"/>
</svg>
