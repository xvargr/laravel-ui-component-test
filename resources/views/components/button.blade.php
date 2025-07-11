@props([
  'variant' => 'primary',
  'disabled' => false
])

<button type="button" {{ $attributes->merge(['class' => "btn btn-{$variant}"]) }} {{ $disabled ? 'disabled' : '' }}>
  {{ $slot }}
</button>
