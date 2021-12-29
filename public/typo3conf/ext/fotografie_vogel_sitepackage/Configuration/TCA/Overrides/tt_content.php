<?php
defined('TYPO3_MODE') or die();
call_user_func(function()
{
    $sixteen = [
        'default' => [
            'title' => 'Default',
            'allowedAspectRatios' => [
                '16 zu 9' => [
                    'title' => '16 zu 9',
                    'value' => 16 / 9
                ],
            ],
        ],
    ];

    $one = [
        'default' => [
            'title' => 'Default',
            'allowedAspectRatios' => [
                '1 zu 1' => [
                    'title' => '1 zu 1',
                    'value' => 1
                ],
            ],
        ],
    ];

    $table = 'tt_content';
    $galleryImage = 'tx_fotografievogelmaskexport_gallery_image_item';
    $cTypeImageBox = 'fotografievogelmaskexport_imagebox';
    $imageBox = 'tx_fotografievogelmaskexport_imagebox_image';

    $GLOBALS['TCA'][$table]['columns'][$galleryImage]['config']['overrideChildTca']['columns']['crop']['config']['cropVariants'] = $sixteen;
    $GLOBALS['TCA'][$table]['types'][$cTypeImageBox]['columnsOverrides'][$imageBox]['config']['overrideChildTca']['columns']['crop']['config']['cropVariants'] = $one;
});
