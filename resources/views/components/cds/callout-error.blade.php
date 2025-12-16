@props([
    'icon' => 'exclamation-triangle',
])

<flux:callout
    icon="{{ $icon }}"
    {{ $attributes }}
>
    {{ $slot }}
</flux:callout>
