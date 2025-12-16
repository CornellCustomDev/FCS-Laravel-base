@props([
    'label',   // group label OR single checkbox label
    'name' => $attributes->whereStartsWith('wire:model')->first(),
    'options' => null,  // if array → group mode; if null → single mode
    'value' => null,
    'text' => null,
    'badge' => null,
])

@php
$badge ??= $attributes->whereStartsWith('required')->isNotEmpty() ? 'Required' : null;
$text ??= $value;
@endphp

{{-- Group Mode (options array is passed) --}}
@if (is_array($options))
    <flux:checkbox.group :$label :$badge :$attributes >
        @foreach ($options as $value => $text)
            <flux:checkbox
                :value="$value"
                :label="$text"
            />
        @endforeach
    </flux:checkbox.group>

{{-- Single Checkbox Mode --}}
@else
    <flux:checkbox.group :$label :$badge :$attributes >
        <flux:checkbox
            :value="$value"
            :label="$text"
        />
    </flux:checkbox.group>
@endif
