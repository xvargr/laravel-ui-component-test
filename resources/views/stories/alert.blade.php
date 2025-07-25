@storybook([
    'status' => 'stable',
    'layout' => 'centererd',
    'args' => [
        'heading' => '',
        'message' => 'This is an alert!',
        'type' => 'primary',
        'size' => 'normal',
        'dismissible' => false,
        'centered' => false,

        'isolate' => false,
    ],
    'argTypes' => [
        'heading' => [
            'description' => 'The header for the alert',
            'defaultValue' => '',
            'table' => [
                'type' => [
                    'summary' => 'string',
                ],
                'defaultValue' => [
                    'summary' => '',
                ],
            ],
        ],
        'message' => [
            'description' => 'The message that should be displayed for the alert',
            'defaultValue' => '',
            'table' => [
                'type' => [
                    'summary' => 'string',
                ],
                'defaultValue' => [
                    'summary' => '',
                ],
            ],
        ],
        'type' => [
            'options' => ['primary', 'secondary', 'success', 'warning', 'danger', 'info', 'light', 'dark'],
            'control' => [
                'type' => 'select',
            ],
            'description' => 'The type of alert to be shown',
            'defaultValue' => 'primary',
            'table' => [
                'type' => [
                    'summary' => "'primary'|'secondary'|'success'|'warning'|'danger'|'info'|'light'|'dark'",
                ],
                'defaultValue' => [
                    'summary' => 'primary',
                ],
            ],
        ],
        'centered' => [
            'control' => [
                'type' => 'boolean',
            ],
            'description' => 'If the content of the alert should be justified to center',
            'defaultValue' => false,
            'table' => [
                'type' => [
                    'summary' => 'boolean',
                ],
                'defaultValue' => [
                    'summary' => 'false',
                ],
            ],
        ],
        'size' => [
            'options' => ['normal', 'full'],
            'control' => [
                'type' => 'select',
            ],
            'description' => 'The size of the alert of either floating or full',
            'defaultValue' => 'normal',
            'table' => [
                'type' => [
                    'summary' => "'normal'|'full'",
                ],
                'defaultValue' => [
                    'summary' => 'normal',
                ],
            ],
        ],
        'dismissible' => [
            'control' => [
                'type' => 'boolean',
            ],
            'description' => 'If the alert is dismisable',
            'defaultValue' => 'false',
            'table' => [
                'type' => [
                    'summary' => 'boolean',
                ],
                'defaultValue' => [
                    'summary' => 'false',
                ],
            ],
        ],
        'isolate' => [
            'control' => [
                'type' => 'boolean',
            ],
            'description' => 'Isolate the component in a shadowDOM preventing CSS pollution',
            'defaultValue' => 'false',
            'table' => [
                'type' => [
                    'summary' => 'boolean',
                ],
                'defaultValue' => [
                    'summary' => 'false',
                ],
            ],
        ],
    ],
])

<x-cxs-ui-kit::alert type="{{ $type }}" heading="{{ $heading }}" size="{{ $size }}"
    :dismissible="$dismissible" :centered="$centered" class="">
    {!! $message !!}
</x-cxs-ui-kit::alert>
