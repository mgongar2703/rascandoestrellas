@props(['value'])

<label {{ $attributes->merge(['class' => 'block text-sm font-bold uppercase text-sm text-gray-700 dark:text-gray-300 mb-2']) }}>
    {{ $value ?? $slot }}
</label>
