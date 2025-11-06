@props(['active' => false])


<!-- It is never too late to be what you might have been. - George Eliot -->
<a {{ $attributes }} aria-current="{{ request()-> is('/') ? 'page' : false }}" class="{{ $active ? 'bg-gray-950/50 text-white' : 'text-gray-300  hover:text-white' }} rounded-md  px-3 py-2 text-sm font-medium">{{ $slot }}</a>
