@props([
    'isolate' => 'false',
])

<div {{ $attributes }}>
    @if ($isolate === 'true')
        <template shadowrootmode="open">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" crossorigin="anonymous">

            {{ $slot }}

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
            </script>
        </template>
    @else
        <div>
            {{ $slot }}
        </div>
    @endif
</div>
