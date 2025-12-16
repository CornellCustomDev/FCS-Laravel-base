@props([
    'type' => 'button',
])

<flux:button
    type="{{ $type }}"
    {{ $attributes }}
>
    {{ $slot }}
</flux:button>
