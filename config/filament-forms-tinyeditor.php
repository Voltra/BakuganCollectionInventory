<?php

declare(strict_types=1);

return [
    /*
    |--------------------------------------------------------------------------
    | Profiles
    |--------------------------------------------------------------------------
    |
    | You can add as many as you want of profiles to use it in your application.
    |
    */

    'profiles' => [

        /*'default' => [
            'plugins' => 'advlist autoresize codesample directionality emoticons fullscreen hr image imagetools link lists media table toc wordcount',
            'toolbar' => 'undo redo removeformat | formatselect fontsizeselect | bold italic | rtl ltr | alignjustify alignright aligncenter alignleft | numlist bullist | forecolor backcolor | blockquote table toc hr | image link media codesample emoticons | wordcount fullscreen',
            'upload_directory' => null,
        ],*/

        'simple' => [
            'plugins' => 'autoresize directionality emoticons link lists wordcount code',
            'toolbar' => 'removeformat | bold italic | numlist bullist | link emoticons | code',
            'upload_directory' => null,
            'custom_configs' => [
                'default_link_target' => '_blank',
                'link_default_target' => '_blank',
                'link_default_protocol' => 'https',
            ],
        ],

        'content' => [
            'plugins' => 'autoresize directionality emoticons link lists wordcount code',
            'toolbar' => 'removeformat | formatselect bold italic | numlist bullist | link emoticons | code',
            'upload_directory' => null,
            'custom_configs' => [
                'default_link_target' => '_blank',
                'link_default_target' => '_blank',
                'link_default_protocol' => 'https',
                'target_list' => [
                    ['title' => 'None', 'value' => ''],
                    ['title' => 'New tab', 'value' => '_blank'],
                ],
                'formats' => [
                    'cust_h3' => [
                        'block' => 'h3',
                        'classes' => 'heading -h3',
                    ],
                    'cust_h4' => [
                        'block' => 'h4',
                        'classes' => 'heading -h4',
                    ],
                ],
                'block_formats' => 'Paragraph=p;Title=cust_h3;Sub-Title=cust_h4',
                'style_formats' => [
                    [
                        'format' => 'cust_h3',
                        'title' => 'Title',
                    ],
                    [
                        'format' => 'cust_h4',
                        'title' => 'Sub-Title',
                    ],
                ],
            ],
        ],

        /*'template' => [
            'plugins' => 'autoresize template',
            'toolbar' => 'template',
            'upload_directory' => null,
        ],*/
        /*
        |--------------------------------------------------------------------------
        | Custom Configs
        |--------------------------------------------------------------------------
        |
        | If you want to add custom configurations to directly tinymce
        | You can use custom_configs key as an array
        |
        */

        /*
          'default' => [
            'plugins' => 'advlist autoresize codesample directionality emoticons fullscreen hr image imagetools link lists media table toc wordcount',
            'toolbar' => 'undo redo removeformat | formatselect fontsizeselect | bold italic | rtl ltr | alignjustify alignright aligncenter alignleft | numlist bullist | forecolor backcolor | blockquote table toc hr | image link media codesample emoticons | wordcount fullscreen',
            'custom_configs' => [
                'allow_html_in_named_anchor' => true,
                'link_default_target' => '_blank',
                'codesample_global_prismjs' => true,
                'image_advtab' => true,
                'image_class_list' => [
                  [
                    'title' => 'None',
                    'value' => '',
                  ],
                  [
                    'title' => 'Fluid',
                    'value' => 'img-fluid',
                  ],
              ],
            ]
        ],
        */

    ],

    /*
    |--------------------------------------------------------------------------
    | Templates
    |--------------------------------------------------------------------------
    |
    | You can add as many as you want of templates to use it in your application.
    |
    | https://www.tiny.cloud/docs/plugins/opensource/template/#templates
    |
    | ex: TinyEditor::make('content')->profiles('template')->template('example')
    */

    'templates' => [

        'example' => [
            // content
            ['title' => 'Some title 1', 'description' => 'Some desc 1', 'content' => 'My content'],
            // url
            ['title' => 'Some title 2', 'description' => 'Some desc 2', 'url' => 'http://localhost'],
        ],

    ],
];
