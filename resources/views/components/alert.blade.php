@props([
    'variation' => 'primary',
    'message' => 'message',
    'dismissible' => false,

    'isolate' => 'false',
])

<x-cxs-ui-kit::base class="csx-ui cxs-alert" isolate="{{ $isolate }}">
    <div {{ $attributes->merge(['class' => "app-container container-xxl alert alert-{$variation}" . ($dismissible ? ' alert-dismissible fade show' : '')]) }}
        role="alert">
        {!! $message !!}

        @if ($dismissible)
            <!-- <iconify-icon icon="iconamoon:close-bold" width="24" height="24" class="cursor-pointer"></iconify-icon> -->
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        @endif
    </div>
</x-cxs-ui-kit::base>
