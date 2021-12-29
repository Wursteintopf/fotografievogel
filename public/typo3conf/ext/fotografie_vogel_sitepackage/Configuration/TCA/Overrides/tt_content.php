<?php
defined('TYPO3_MODE') or die();
call_user_func(function()
{
    $cropVariants = [
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

    $table = 'tt_content';
    $column = 'tx_fotografievogelmaskexport_gallery_image_item';

    $GLOBALS['TCA'][$table]['columns'][$column]['config']['overrideChildTca']['columns']['crop']['config']['cropVariants'] = $cropVariants;
});
