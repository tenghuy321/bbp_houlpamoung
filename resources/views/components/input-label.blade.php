@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-[#580B0C]']) }}>
    {{ $value ?? $slot }}
</label>
