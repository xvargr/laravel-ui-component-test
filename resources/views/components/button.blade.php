@props([
    'variant' => 'primary',
    'disabled' => false,

    'isolate' => 'true',
])

<x-cxs-ui-kit::base class="csx-ui cxs-alert" isolate="{{ $isolate }}">
    <button type="button" {{ $attributes->merge(['class' => "btn btn-{$variant}"]) }} {{ $disabled ? 'disabled' : '' }}>
        {{ $slot }}
    </button>
</x-cxs-ui-kit::base>
