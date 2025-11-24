@props([
    'label',
    'name' => $attributes->whereStartsWith('wire:model')->first(),
    'description' => null,
    'descriptionTrailing' => null,
    'badge' => null,
])

@php
$badge ??= $attributes->whereStartsWith('required')->isNotEmpty() ? 'Required' : null;
@endphp

{{-- @see https://fluxui.dev/components/input --}}
<flux:field :attributes="Flux::attributesAfter('field:', $attributes, [])">
    <flux:label
        :attributes="Flux::attributesAfter('label:', $attributes, ['badge' => $badge])"
    >{!! $label !!}</flux:label>

    @if ($description)
        <flux:description
            class="-mt-1! mb-1!"
            :attributes="Flux::attributesAfter('description:', $attributes, [])"
        >{!! $description !!}</flux:description>
    @endif

    <flux:input :$name :$attributes />

    <flux:error :attributes="Flux::attributesAfter('error:', $attributes, ['name' => $name])" />

    @if ($descriptionTrailing)
        <flux:description
            class="-mt-4! mb-5!"
            :attributes="Flux::attributesAfter('descriptionTrailing:', $attributes, [])"
        >{!! $descriptionTrailing !!}</flux:description>
    @endif

</flux:field>
