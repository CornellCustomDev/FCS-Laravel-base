@props([
    'label',
    'options' => [],
    'badge' => null,
])

@php
$badge ??= $attributes->whereStartsWith('required')->isNotEmpty() ? 'Required' : null;
@endphp

<flux:select :$label :$badge :$attributes>
    <flux:select.option value="" label="" />
    @foreach ($options as $value => $text)
        <flux:select.option :$value :label="$text" />
    @endforeach
</flux:select>
