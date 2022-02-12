<?php
defined('TYPO3_MODE') || die();

call_user_func(function () {

$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['fotografievogelmaskexport_contentteaser'] = 'tx_fotografievogelmaskexport_contentteaser';
$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['fotografievogelmaskexport_gallery'] = 'tx_fotografievogelmaskexport_gallery';
$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['fotografievogelmaskexport_headerteaser'] = 'tx_fotografievogelmaskexport_headerteaser';
$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['fotografievogelmaskexport_heroteaser'] = 'tx_fotografievogelmaskexport_heroteaser';
$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['fotografievogelmaskexport_imagebox'] = 'tx_fotografievogelmaskexport_imagebox';
$tempColumns = [
    'tx_fotografievogelmaskexport_contentteaser_description' => [
        'config' => [
            'behaviour' => [
                'allowLanguageSynchronization' => '0',
            ],
            'type' => 'text',
            'wrap' => 'off',
        ],
        'exclude' => '1',
        'label' => 'LLL:EXT:fotografie_vogel_mask_export/Resources/Private/Language/locallang_db.xlf:tt_content.tx_fotografievogelmaskexport_contentteaser_description',
    ],
    'tx_fotografievogelmaskexport_contentteaser_element' => [
        'config' => [
            'appearance' => [
                'collapseAll' => '0',
                'enabledControls' => [
                    'dragdrop' => '1',
                ],
                'expandSingle' => '0',
                'levelLinksPosition' => 'top',
                'showAllLocalizationLink' => '1',
                'showPossibleLocalizationRecords' => '1',
                'showRemovedLocalizationRecords' => '1',
                'showSynchronizationLink' => '0',
                'useSortable' => '0',
            ],
            'behaviour' => [
                'allowLanguageSynchronization' => '0',
            ],
            'foreign_field' => 'parentid',
            'foreign_sortby' => 'sorting',
            'foreign_table' => 'tx_fotografievogelmaskexport_contentteaser_element',
            'foreign_table_field' => 'parenttable',
            'maxitems' => '3',
            'minitems' => '1',
            'type' => 'inline',
        ],
        'exclude' => '1',
        'label' => 'LLL:EXT:fotografie_vogel_mask_export/Resources/Private/Language/locallang_db.xlf:tt_content.tx_fotografievogelmaskexport_contentteaser_element',
    ],
    'tx_fotografievogelmaskexport_contentteaser_header' => [
        'config' => [
            'autocomplete' => '0',
            'behaviour' => [
                'allowLanguageSynchronization' => '0',
            ],
            'type' => 'input',
        ],
        'exclude' => '1',
        'label' => 'LLL:EXT:fotografie_vogel_mask_export/Resources/Private/Language/locallang_db.xlf:tt_content.tx_fotografievogelmaskexport_contentteaser_header',
    ],
    'tx_fotografievogelmaskexport_gallery_image_item' => [
        'config' => [
            'type' => 'inline',
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => [
                'fieldname' => 'tx_fotografievogelmaskexport_gallery_image_item',
            ],
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'overrideChildTca' => [
                'columns' => [
                    'uid_local' => [
                        'config' => [
                            'appearance' => [
                                'elementBrowserType' => 'file',
                                'elementBrowserAllowed' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
                            ],
                        ],
                    ],
                ],
                'types' => [
                    [
                        'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette',
                    ],
                    [
                        'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette',
                    ],
                    [
                        'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette',
                    ],
                    [
                        'showitem' => '
                                --palette--;;audioOverlayPalette,
                                --palette--;;filePalette',
                    ],
                    [
                        'showitem' => '
                                --palette--;;videoOverlayPalette,
                                --palette--;;filePalette',
                    ],
                    [
                        'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette',
                    ],
                ],
            ],
            'filter' => [
                [
                    'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
                ],
            ],
            'appearance' => [
                'useSortable' => '1',
                'headerThumbnail' => [
                    'field' => 'uid_local',
                    'height' => '45m',
                ],
                'enabledControls' => [
                    'info' => true,
                    'new' => false,
                    'dragdrop' => true,
                    'sort' => false,
                    'hide' => true,
                    'delete' => true,
                ],
                'collapseAll' => '1',
                'expandSingle' => '1',
                'fileUploadAllowed' => '1',
                'showAllLocalizationLink' => '1',
                'showPossibleLocalizationRecords' => '1',
                'showRemovedLocalizationRecords' => '1',
                'showSynchronizationLink' => '0',
            ],
            'behaviour' => [
                'allowLanguageSynchronization' => '0',
            ],
            'minitems' => '1',
        ],
        'exclude' => '1',
        'label' => 'LLL:EXT:fotografie_vogel_mask_export/Resources/Private/Language/locallang_db.xlf:tt_content.tx_fotografievogelmaskexport_gallery_image_item',
    ],
    'tx_fotografievogelmaskexport_gallery_title' => [
        'config' => [
            'autocomplete' => '0',
            'behaviour' => [
                'allowLanguageSynchronization' => '0',
            ],
            'eval' => 'required',
            'type' => 'input',
        ],
        'exclude' => '1',
        'label' => 'LLL:EXT:fotografie_vogel_mask_export/Resources/Private/Language/locallang_db.xlf:tt_content.tx_fotografievogelmaskexport_gallery_title',
    ],
    'tx_fotografievogelmaskexport_headerteaser_image' => [
        'config' => [
            'type' => 'inline',
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => [
                'fieldname' => 'tx_fotografievogelmaskexport_headerteaser_image',
            ],
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'overrideChildTca' => [
                'columns' => [
                    'uid_local' => [
                        'config' => [
                            'appearance' => [
                                'elementBrowserType' => 'file',
                                'elementBrowserAllowed' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
                            ],
                        ],
                    ],
                ],
                'types' => [
                    [
                        'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette',
                    ],
                    [
                        'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette',
                    ],
                    [
                        'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette',
                    ],
                    [
                        'showitem' => '
                                --palette--;;audioOverlayPalette,
                                --palette--;;filePalette',
                    ],
                    [
                        'showitem' => '
                                --palette--;;videoOverlayPalette,
                                --palette--;;filePalette',
                    ],
                    [
                        'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette',
                    ],
                ],
            ],
            'filter' => [
                [
                    'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
                ],
            ],
            'appearance' => [
                'useSortable' => '0',
                'headerThumbnail' => [
                    'field' => 'uid_local',
                    'height' => '45m',
                ],
                'enabledControls' => [
                    'info' => true,
                    'new' => false,
                    'dragdrop' => true,
                    'sort' => false,
                    'hide' => true,
                    'delete' => true,
                ],
                'collapseAll' => '0',
                'expandSingle' => '0',
                'fileUploadAllowed' => '1',
                'showAllLocalizationLink' => '1',
                'showPossibleLocalizationRecords' => '1',
                'showRemovedLocalizationRecords' => '1',
                'showSynchronizationLink' => '0',
            ],
            'behaviour' => [
                'allowLanguageSynchronization' => '0',
            ],
        ],
        'exclude' => '1',
        'label' => 'LLL:EXT:fotografie_vogel_mask_export/Resources/Private/Language/locallang_db.xlf:tt_content.tx_fotografievogelmaskexport_headerteaser_image',
    ],
    'tx_fotografievogelmaskexport_headerteaser_title' => [
        'config' => [
            'autocomplete' => '0',
            'behaviour' => [
                'allowLanguageSynchronization' => '0',
            ],
            'type' => 'input',
        ],
        'exclude' => '1',
        'label' => 'LLL:EXT:fotografie_vogel_mask_export/Resources/Private/Language/locallang_db.xlf:tt_content.tx_fotografievogelmaskexport_headerteaser_title',
    ],
    'tx_fotografievogelmaskexport_heroteaser_cta' => [
        'config' => [
            'autocomplete' => '0',
            'behaviour' => [
                'allowLanguageSynchronization' => '0',
            ],
            'fieldControl' => [
                'linkPopup' => [
                    'options' => [
                        'title' => 'Link',
                    ],
                ],
            ],
            'renderType' => 'inputLink',
            'softref' => 'typolink',
            'type' => 'input',
        ],
        'exclude' => '1',
        'label' => 'LLL:EXT:fotografie_vogel_mask_export/Resources/Private/Language/locallang_db.xlf:tt_content.tx_fotografievogelmaskexport_heroteaser_cta',
    ],
    'tx_fotografievogelmaskexport_heroteaser_description' => [
        'config' => [
            'behaviour' => [
                'allowLanguageSynchronization' => '0',
            ],
            'enableRichtext' => '1',
            'type' => 'text',
            'wrap' => 'off',
            'softref' => 'typolink_tag,images,email[subst],url',
        ],
        'exclude' => '1',
        'label' => 'LLL:EXT:fotografie_vogel_mask_export/Resources/Private/Language/locallang_db.xlf:tt_content.tx_fotografievogelmaskexport_heroteaser_description',
    ],
    'tx_fotografievogelmaskexport_heroteaser_image' => [
        'config' => [
            'type' => 'inline',
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => [
                'fieldname' => 'tx_fotografievogelmaskexport_heroteaser_image',
            ],
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'overrideChildTca' => [
                'columns' => [
                    'uid_local' => [
                        'config' => [
                            'appearance' => [
                                'elementBrowserType' => 'file',
                                'elementBrowserAllowed' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
                            ],
                        ],
                    ],
                ],
                'types' => [
                    [
                        'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette',
                    ],
                    [
                        'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette',
                    ],
                    [
                        'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette',
                    ],
                    [
                        'showitem' => '
                                --palette--;;audioOverlayPalette,
                                --palette--;;filePalette',
                    ],
                    [
                        'showitem' => '
                                --palette--;;videoOverlayPalette,
                                --palette--;;filePalette',
                    ],
                    [
                        'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette',
                    ],
                ],
            ],
            'filter' => [
                [
                    'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
                ],
            ],
            'appearance' => [
                'useSortable' => '0',
                'headerThumbnail' => [
                    'field' => 'uid_local',
                    'height' => '45m',
                ],
                'enabledControls' => [
                    'info' => true,
                    'new' => false,
                    'dragdrop' => true,
                    'sort' => false,
                    'hide' => true,
                    'delete' => true,
                ],
                'collapseAll' => '0',
                'expandSingle' => '0',
                'fileUploadAllowed' => '1',
                'showAllLocalizationLink' => '1',
                'showPossibleLocalizationRecords' => '1',
                'showRemovedLocalizationRecords' => '1',
                'showSynchronizationLink' => '0',
            ],
            'behaviour' => [
                'allowLanguageSynchronization' => '0',
            ],
            'maxitems' => '1',
            'minitems' => '1',
        ],
        'exclude' => '1',
        'label' => 'LLL:EXT:fotografie_vogel_mask_export/Resources/Private/Language/locallang_db.xlf:tt_content.tx_fotografievogelmaskexport_heroteaser_image',
    ],
    'tx_fotografievogelmaskexport_heroteaser_tagline' => [
        'config' => [
            'autocomplete' => '0',
            'behaviour' => [
                'allowLanguageSynchronization' => '0',
            ],
            'type' => 'input',
        ],
        'exclude' => '1',
        'label' => 'LLL:EXT:fotografie_vogel_mask_export/Resources/Private/Language/locallang_db.xlf:tt_content.tx_fotografievogelmaskexport_heroteaser_tagline',
    ],
    'tx_fotografievogelmaskexport_heroteaser_title' => [
        'config' => [
            'autocomplete' => '0',
            'behaviour' => [
                'allowLanguageSynchronization' => '0',
            ],
            'type' => 'input',
        ],
        'exclude' => '1',
        'label' => 'LLL:EXT:fotografie_vogel_mask_export/Resources/Private/Language/locallang_db.xlf:tt_content.tx_fotografievogelmaskexport_heroteaser_title',
    ],
    'tx_fotografievogelmaskexport_imagebox_alignment' => [
        'config' => [
            'behaviour' => [
                'allowLanguageSynchronization' => '0',
            ],
            'items' => [
                [
                    'LLL:EXT:fotografie_vogel_mask_export/Resources/Private/Language/locallang_db.xlf:tt_content.tx_fotografievogelmaskexport_imagebox_alignment.I.0',
                    '1',
                ],
                [
                    'LLL:EXT:fotografie_vogel_mask_export/Resources/Private/Language/locallang_db.xlf:tt_content.tx_fotografievogelmaskexport_imagebox_alignment.I.1',
                    '2',
                ],
            ],
            'renderType' => 'selectSingle',
            'type' => 'select',
        ],
        'exclude' => '1',
        'label' => 'LLL:EXT:fotografie_vogel_mask_export/Resources/Private/Language/locallang_db.xlf:tt_content.tx_fotografievogelmaskexport_imagebox_alignment',
    ],
    'tx_fotografievogelmaskexport_imagebox_header' => [
        'config' => [
            'autocomplete' => '0',
            'behaviour' => [
                'allowLanguageSynchronization' => '0',
            ],
            'type' => 'input',
        ],
        'exclude' => '1',
        'label' => 'LLL:EXT:fotografie_vogel_mask_export/Resources/Private/Language/locallang_db.xlf:tt_content.tx_fotografievogelmaskexport_imagebox_header',
    ],
    'tx_fotografievogelmaskexport_imagebox_image' => [
        'config' => [
            'type' => 'inline',
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => [
                'fieldname' => 'tx_fotografievogelmaskexport_imagebox_image',
            ],
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'overrideChildTca' => [
                'columns' => [
                    'uid_local' => [
                        'config' => [
                            'appearance' => [
                                'elementBrowserType' => 'file',
                                'elementBrowserAllowed' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
                            ],
                        ],
                    ],
                ],
                'types' => [
                    [
                        'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette',
                    ],
                    [
                        'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette',
                    ],
                    [
                        'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette',
                    ],
                    [
                        'showitem' => '
                                --palette--;;audioOverlayPalette,
                                --palette--;;filePalette',
                    ],
                    [
                        'showitem' => '
                                --palette--;;videoOverlayPalette,
                                --palette--;;filePalette',
                    ],
                    [
                        'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette',
                    ],
                ],
            ],
            'filter' => [
                [
                    'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
                ],
            ],
            'appearance' => [
                'useSortable' => '0',
                'headerThumbnail' => [
                    'field' => 'uid_local',
                    'height' => '45m',
                ],
                'enabledControls' => [
                    'info' => true,
                    'new' => false,
                    'dragdrop' => true,
                    'sort' => false,
                    'hide' => true,
                    'delete' => true,
                ],
                'collapseAll' => '0',
                'expandSingle' => '0',
                'fileUploadAllowed' => '1',
                'showAllLocalizationLink' => '1',
                'showPossibleLocalizationRecords' => '1',
                'showRemovedLocalizationRecords' => '1',
                'showSynchronizationLink' => '0',
            ],
            'behaviour' => [
                'allowLanguageSynchronization' => '0',
            ],
        ],
        'exclude' => '1',
        'label' => 'LLL:EXT:fotografie_vogel_mask_export/Resources/Private/Language/locallang_db.xlf:tt_content.tx_fotografievogelmaskexport_imagebox_image',
    ],
    'tx_fotografievogelmaskexport_imagebox_text' => [
        'config' => [
            'behaviour' => [
                'allowLanguageSynchronization' => '0',
            ],
            'enableRichtext' => '1',
            'type' => 'text',
            'wrap' => 'off',
            'softref' => 'typolink_tag,images,email[subst],url',
        ],
        'exclude' => '1',
        'label' => 'LLL:EXT:fotografie_vogel_mask_export/Resources/Private/Language/locallang_db.xlf:tt_content.tx_fotografievogelmaskexport_imagebox_text',
    ],
];
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $tempColumns);
$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [
    'LLL:EXT:fotografie_vogel_mask_export/Resources/Private/Language/locallang_db.xlf:tt_content.CType.div._fotografievogelmaskexport_',
    '--div--',
];
$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [
    'LLL:EXT:fotografie_vogel_mask_export/Resources/Private/Language/locallang_db.xlf:tt_content.CType.fotografievogelmaskexport_contentteaser',
    'fotografievogelmaskexport_contentteaser',
    'tx_fotografievogelmaskexport_contentteaser',
];
$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [
    'LLL:EXT:fotografie_vogel_mask_export/Resources/Private/Language/locallang_db.xlf:tt_content.CType.fotografievogelmaskexport_gallery',
    'fotografievogelmaskexport_gallery',
    'tx_fotografievogelmaskexport_gallery',
];
$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [
    'LLL:EXT:fotografie_vogel_mask_export/Resources/Private/Language/locallang_db.xlf:tt_content.CType.fotografievogelmaskexport_headerteaser',
    'fotografievogelmaskexport_headerteaser',
    'tx_fotografievogelmaskexport_headerteaser',
];
$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [
    'LLL:EXT:fotografie_vogel_mask_export/Resources/Private/Language/locallang_db.xlf:tt_content.CType.fotografievogelmaskexport_heroteaser',
    'fotografievogelmaskexport_heroteaser',
    'tx_fotografievogelmaskexport_heroteaser',
];
$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [
    'LLL:EXT:fotografie_vogel_mask_export/Resources/Private/Language/locallang_db.xlf:tt_content.CType.fotografievogelmaskexport_imagebox',
    'fotografievogelmaskexport_imagebox',
    'tx_fotografievogelmaskexport_imagebox',
];
$tempTypes = [
    'fotografievogelmaskexport_contentteaser' => [
        'columnsOverrides' => [
            'bodytext' => [
                'config' => [
                    'enableRichtext' => 1,
                ],
            ],
        ],
        'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,tx_fotografievogelmaskexport_contentteaser_header,tx_fotografievogelmaskexport_contentteaser_description,tx_fotografievogelmaskexport_contentteaser_element,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
    ],
    'fotografievogelmaskexport_gallery' => [
        'columnsOverrides' => [
            'bodytext' => [
                'config' => [
                    'enableRichtext' => 1,
                ],
            ],
        ],
        'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,tx_fotografievogelmaskexport_gallery_title,tx_fotografievogelmaskexport_gallery_image_item,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
    ],
    'fotografievogelmaskexport_headerteaser' => [
        'columnsOverrides' => [
            'bodytext' => [
                'config' => [
                    'enableRichtext' => 1,
                ],
            ],
        ],
        'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,tx_fotografievogelmaskexport_headerteaser_title,tx_fotografievogelmaskexport_headerteaser_image,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
    ],
    'fotografievogelmaskexport_heroteaser' => [
        'columnsOverrides' => [
            'bodytext' => [
                'config' => [
                    'enableRichtext' => 1,
                ],
            ],
        ],
        'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,tx_fotografievogelmaskexport_heroteaser_tagline,tx_fotografievogelmaskexport_heroteaser_title,tx_fotografievogelmaskexport_heroteaser_description,tx_fotografievogelmaskexport_heroteaser_cta,tx_fotografievogelmaskexport_heroteaser_image,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
    ],
    'fotografievogelmaskexport_imagebox' => [
        'columnsOverrides' => [
            'bodytext' => [
                'config' => [
                    'enableRichtext' => 1,
                ],
            ],
        ],
        'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,tx_fotografievogelmaskexport_imagebox_alignment,tx_fotografievogelmaskexport_imagebox_header,tx_fotografievogelmaskexport_imagebox_text,tx_fotografievogelmaskexport_imagebox_image,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
    ],
];
$GLOBALS['TCA']['tt_content']['types'] += $tempTypes;
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'fotografie_vogel_mask_export',
    'Configuration/TypoScript/',
    'fotografie_vogel_mask_export'
);

});

