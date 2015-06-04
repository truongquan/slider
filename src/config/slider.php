<?php
return [
    'image_path' => '/quandt/slider/images',
    'thumb_path' => '/quandt/slider/images/thumb',

    'type_label' => [
        'image' => 'Image',
        'custom' => 'Custom',
        'custom2' => 'Custom 2',
        'one_slide' => 'One Slide',
        'lazy_load' => 'Lazy Load',
        'auto_height' => 'Auto Height',
    ],

    'type' => [
        'image' => [
            'autoPlay' => 3000,
            'items' => 4,
            'itemsDesktop' => '[1199, 3]',
            'itemsDesktopSmall' => '[979, 3]',
        ],

        'custom' => [
            'items' => 10,
            'itemsDesktop' => '[1000,5]',
            'itemsDesktopSmall' => '[900,3]',
            'itemsTablet' => '[600,2]',
            'itemsMobile' => 'false',
        ],

        'custom2' => [
            'itemsCustom' => '[
                            [0, 2],
                            [450, 4],
                            [600, 7],
                            [700, 9],
                            [1000, 10],
                            [1200, 12],
                            [1400, 13],
                            [1600, 15]
                          ]',
              'navigation' => 'true',
        ],

        'one_slide' => [
            'navigation' => 'true', // Show next and prev buttons
            'slideSpeed' => 300,
            'paginationSpeed' => 400,
            'singleItem' => 'true',
        ],

        'lazy_load' => [
            'items' => 4,
            'lazyLoad' => 'true',
            'navigation' => 'true',
        ],

        'auto_height' => [
            'autoPlay' => 3000,
            'stopOnHover' => 'true',
            'navigation' => 'true',
            'paginationSpeed' => 1000,
            'goToFirstSpeed' => 2000,
            'singleItem' => 'true',
            'autoHeight' => 'true',
            'transitionStyle' => 'fade',
        ],
    ],

    'opt_label' => [
        'autoPlay' => 'Auto Play',
        'items' => 'Items',
        'itemsDesktop' => 'Items Desktop',
        'itemsDesktopSmall' => 'Items Desktop Small',
        'itemsTablet' => 'Items Tablet',
        'itemsMobile' => 'Items Mobile',
        'itemsCustom' => 'Items Custom',
        'navigation' => 'Navigation',
        'slideSpeed' => 'Slide Speed',
        'paginationSpeed' => 'Pagination Speed',
        'singleItem' => 'Single Item',
        'lazyLoad' => 'Lazy Load',
        'goToFirstSpeed' => 'Go To First Speed',
        'autoHeight' => 'Auto Height',
        'transitionStyle' => 'Transition Style',
    ],

    'opt_type' => [
        'autoPlay' => 'text',
        'items' => 'text',
        'itemsDesktop' => 'text',
        'itemsDesktopSmall' => 'text',
        'itemsTablet' => 'text',
        'itemsMobile' => 'select',
        'itemsCustom' => 'text',
        'navigation' => 'select',
        'slideSpeed' => 'text',
        'paginationSpeed' => 'text',
        'singleItem' => 'select',
        'lazyLoad' => 'select',
        'goToFirstSpeed' => 'text',
        'autoHeight' => 'select',
        'transitionStyle' => 'select',
    ],

    'boolean' => [
        'true' => 'True',
        'false' => 'False',
    ],
];