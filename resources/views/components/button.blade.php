@props([
  'variant' => 'primary'
  'disabled' => false
])

<button type="button" {{ $attributes->merge(['class' => "btn btn-{$variation}")]) }} {{ $disabled ? 'disabled' : '' }}>
  {{ $slot }}
</button>
