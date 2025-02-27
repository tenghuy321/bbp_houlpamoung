@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'border-gray-300 focus:border-[#580B0C] focus:ring-[#580B0C] rounded-md shadow-sm']) }}>
