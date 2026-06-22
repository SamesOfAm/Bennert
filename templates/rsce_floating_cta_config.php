<?php

return [
    'label' => ['Bennie CTA', '...'],
    'types' => ['content'],
    'contentCategory' => 'includes',

    'fields' => [

        'image' => [
            'label' => ['Image normale', '...'],
            'inputType' => 'fileTree',
            'eval' => [
                'filesOnly' => true,
                'fieldType' => 'radio',
                'extensions' => 'jpg,jpeg,png,webp,svg'
            ],
        ],

        'image_hover' => [
            'label' => ['Image hover', '...'],
            'inputType' => 'fileTree',
            'eval' => [
                'filesOnly' => true,
                'fieldType' => 'radio',
                'extensions' => 'jpg,jpeg,png,webp,svg'
            ],
        ],

        'question' => [
            'label' => ['Teaser'],
            'inputType' => 'text',
            'default' => 'FRAGEN?',
        ],

        'title' => [
            'label' => ['Titre'],
            'inputType' => 'text',
        ],

        'text' => [
            'label' => ['description'],
            'inputType' => 'textarea',
            'eval' => ['rte' => 'tinyMCE'],
        ],

        'phone' => [
            'label' => ['Telefon'],
            'inputType' => 'text',
        ],

        'email' => [
            'label' => ['Email'],
            'inputType' => 'text',
        ],

    ]
];