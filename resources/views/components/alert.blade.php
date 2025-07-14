@props([
    'type' => 'primary',
    'size' => 'normal',
    'dismissible' => false,
    'heading' => '',
    'centered' => false,

    'isolate' => false,
    'containerClass' => '',
])

<x-cxs-ui-kit::base class="csx-ui cxs-alert app-container container-xxl {{ $containerClass }}"
    isolate="{{ $isolate }}">
    <div {{ $attributes->merge([
        'class' =>
            "alert alert-{$type}" .
            ($size === 'normal' ? ' ' : ' border-0 rounded-0') .
            ($dismissible ? ' alert-dismissible fade show' : ''),
    ]) }}
        role="alert">
        @if (!empty($heading))
            <h4 class="alert-heading {{ $centered ? 'text-center' : '' }}">{{ $heading }}</h4>
        @endif

        <div class="{{ $centered ? 'text-center' : '' }}">
            {!! $slot !!}
        </div>

        @if ($dismissible)
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        @endif
    </div>
</x-cxs-ui-kit::base>
