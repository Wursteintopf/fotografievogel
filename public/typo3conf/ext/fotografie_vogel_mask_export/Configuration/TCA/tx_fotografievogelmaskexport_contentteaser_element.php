<?php
return [
    'ctrl' => [
        'sortby' => 'sorting',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'editlock' => 'editlock',
        'versioningWS' => true,
        'origUid' => 't3_origuid',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'translationSource' => 'l10n_source',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
            'fe_group' => 'fe_group',
        ],
        'title' => 'LLL:EXT:fotografie_vogel_mask_export/Resources/Private/Language/locallang_db.xlf:tx_fotografievogelmaskexport_contentteaser_element',
        'label' => 'tx_fotografievogelmaskexport_contentteaser_title',
        'iconfile' => 'EXT:fotografie_vogel_mask_export/Resources/Public/Icons/Extension.png',
        'hideTable' => true,
    ],
    'palettes' => [
        'language' => [
            'showitem' => '
                        sys_language_uid;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:sys_language_uid_formlabel,l18n_parent
                    ',
        ],
        'hidden' => [
            'showitem' => '
                        hidden;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:field.default.hidden
                    ',
        ],
        'access' => [
            'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access',
            'showitem' => '
                        starttime;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:starttime_formlabel,
                        endtime;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:endtime_formlabel,
                        --linebreak--,
                        fe_group;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:fe_group_formlabel,
                        --linebreak--,editlock
                    ',
        ],
    ],
    'columns' => [
        'editlock' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:editlock',
            'config' => [
                'type' => 'check',
                'renderType' => 'checkboxToggle',
                'items' => [
                    [
                        '',
                        '',
                    ],
                ],
            ],
        ],
        'sys_language_uid' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'special' => 'languages',
                'items' => [
                    [
                        'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.allLanguages',
                        -1,
                        'flags-multiple',
                    ],
                ],
                'default' => 0,
            ],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    [
                        '',
                        0,
                    ],
                ],
                'default' => 0,
                'foreign_table' => 'tx_fotografievogelmaskexport_contentteaser_element',
                'foreign_table_where' => 'AND tx_fotografievogelmaskexport_contentteaser_element.pid=###CURRENT_PID### AND tx_fotografievogelmaskexport_contentteaser_element.sys_language_uid IN (-1, 0)',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.visible',
            'config' => [
                'type' => 'check',
                'renderType' => 'checkboxToggle',
                'items' => [
                    [
                        0 => '',
                        1 => '',
                        'invertStateDisplay' => true,
                    ],
                ],
            ],
        ],
        'starttime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime,int',
                'default' => 0,
            ],
            'l10n_mode' => 'exclude',
            'l10n_display' => 'defaultAsReadonly',
        ],
        'endtime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime,int',
                'default' => 0,
                'range' => [
                    'upper' => 2145916800,
                ],
            ],
            'l10n_mode' => 'exclude',
            'l10n_display' => 'defaultAsReadonly',
        ],
        'fe_group' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.fe_group',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectMultipleSideBySide',
                'size' => 5,
                'maxitems' => 20,
                'items' => [
                    [
                        'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.hide_at_login',
                        -1,
                    ],
                    [
                        'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.any_login',
                        -2,
                    ],
                    [
                        'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.usergroups',
                        '--div--',
                    ],
                ],
                'exclusiveKeys' => '-1,-2',
                'foreign_table' => 'fe_groups',
            ],
        ],
        'parentid' => [
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    [
                        '',
                        0,
                    ],
                ],
                'default' => 0,
                'foreign_table' => 'tt_content',
                'foreign_table_where' => 'AND tt_content.pid=###CURRENT_PID### AND tt_content.sys_language_uid IN (-1, ###REC_FIELD_sys_language_uid###)',
            ],
        ],
        'parenttable' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        'sorting' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        'tx_fotografievogelmaskexport_contentteaser_image' => [
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'sys_file_reference',
                'foreign_field' => 'uid_foreign',
                'foreign_sortby' => 'sorting_foreign',
                'foreign_table_field' => 'tablenames',
                'foreign_match_fields' => [
                    'fieldname' => 'tx_fotografievogelmaskexport_contentteaser_image',
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
            ],
            'exclude' => '1',
            'label' => 'LLL:EXT:fotografie_vogel_mask_export/Resources/Private/Language/locallang_db.xlf:tx_fotografievogelmaskexport_contentteaser_element.tx_fotografievogelmaskexport_contentteaser_image',
        ],
        'tx_fotografievogelmaskexport_contentteaser_link' => [
            'config' => [
                'autocomplete' => '0',
                'behaviour' => [
                    'allowLanguageSynchronization' => '0',
                ],
                'eval' => 'required',
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
            'label' => 'LLL:EXT:fotografie_vogel_mask_export/Resources/Private/Language/locallang_db.xlf:tx_fotografievogelmaskexport_contentteaser_element.tx_fotografievogelmaskexport_contentteaser_link',
        ],
        'tx_fotografievogelmaskexport_contentteaser_link_text' => [
            'config' => [
                'autocomplete' => '0',
                'behaviour' => [
                    'allowLanguageSynchronization' => '0',
                ],
                'eval' => 'required',
                'type' => 'input',
            ],
            'exclude' => '1',
            'label' => 'LLL:EXT:fotografie_vogel_mask_export/Resources/Private/Language/locallang_db.xlf:tx_fotografievogelmaskexport_contentteaser_element.tx_fotografievogelmaskexport_contentteaser_link_text',
        ],
        'tx_fotografievogelmaskexport_contentteaser_text' => [
            'config' => [
                'behaviour' => [
                    'allowLanguageSynchronization' => '0',
                ],
                'type' => 'text',
                'wrap' => 'off',
            ],
            'exclude' => '1',
            'label' => 'LLL:EXT:fotografie_vogel_mask_export/Resources/Private/Language/locallang_db.xlf:tx_fotografievogelmaskexport_contentteaser_element.tx_fotografievogelmaskexport_contentteaser_text',
        ],
        'tx_fotografievogelmaskexport_contentteaser_title' => [
            'config' => [
                'autocomplete' => '0',
                'behaviour' => [
                    'allowLanguageSynchronization' => '0',
                ],
                'eval' => 'required',
                'type' => 'input',
            ],
            'exclude' => '1',
            'label' => 'LLL:EXT:fotografie_vogel_mask_export/Resources/Private/Language/locallang_db.xlf:tx_fotografievogelmaskexport_contentteaser_element.tx_fotografievogelmaskexport_contentteaser_title',
        ],
        't3_origuid' => [
            'config' => [
                'type' => 'passthrough',
                'default' => 0,
            ],
        ],
        'l10n_source' => [
            'config' => [
                'type' => 'passthrough',
                'default' => 0,
            ],
        ],
    ],
    'types' => [
        1 => [
            'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,tx_fotografievogelmaskexport_contentteaser_title,tx_fotografievogelmaskexport_contentteaser_text,tx_fotografievogelmaskexport_contentteaser_link_text,tx_fotografievogelmaskexport_contentteaser_link,tx_fotografievogelmaskexport_contentteaser_image,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;;access',
        ],
    ],
];