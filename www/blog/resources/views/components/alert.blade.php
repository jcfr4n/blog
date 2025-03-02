@props(['type' => 'info',
    ])
@php
    $class = '';
    switch ($type) {
        case 'danger':
            $class = 'bg-red-50 text-red-800';
            break;
        case 'success':
            $class = 'bg-green-50 text-green-800';
            break;
        case 'warning':
            $class = 'bg-yellow-50 text-yellow-800';
            break;
        case 'dark':
            $class = 'bg-gray-50 text-gray-800';
            break;
        default:
            $class = 'bg-blue-50 text-blue-800';
            break;
    }
    $margin = ($attributes['margin']);
@endphp

<div class="max-w-4xl mx-auto Px-4">
    <div class="flex items-center p-4 text-sm rounded-lg {{ $class }} {{$margin}}" role="alert">
        <svg class="shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
          <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
        </svg>
        <span class="sr-only">Info</span>
        <div>
          <span class="font-medium">{{$title ?? 'Info alert!!!'}} </span> {{$slot}}
        </div>
    </div>
    <p>hola mundo</p>
</div>
