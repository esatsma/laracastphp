@props(['name', 'type' => 'text'])

<x-form.field>
    <x-form.label name="{{$name}}"></x-form.label>
    <input class="border border-gray-400 p-2 w-full rounded-full"
           type="{{ $type }}"
           name="{{ $name }}"
           id="{{ $name }}"
           required
           {{ $attributes(['value' => old($name)]) }}
    >

    <x-form.error name="{{$name}}"></x-form.error>
</x-form.field>
