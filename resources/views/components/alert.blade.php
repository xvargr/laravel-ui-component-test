@props([
    'type' => 'primary',
    'size' => 'normal',
    'dismissible' => false,
    'heading' => '',

    'isolate' => false,
    'containerClass' => '',
])

<x-cxs-ui-kit::base class="csx-ui cxs-alert {{ $containerClass }}" isolate="{{ $isolate }}">
    <div {{ $attributes->merge([
        'class' =>
            "alert alert-{$type}" .
            ($size === 'normal' ? ' app-container container-xxl' : ' border-0 rounded-0') .
            ($dismissible ? ' alert-dismissible fade show' : ''),
    ]) }}
        role="alert">
        @if (!empty($heading))
            <h4 class="alert-heading">{{ $heading }}</h4>
        @endif

        {!! $slot !!}

        @if ($dismissible)
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        @endif
    </div>
</x-cxs-ui-kit::base>
