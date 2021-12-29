<?php

/**
 * Extension Manager/Repository config file for ext "fotografie_vogel_sitepackage".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Fotografie Vogel Sitepackage',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.0-10.4.99',
            'fluid_styled_content' => '10.4.0-10.4.99',
            'rte_ckeditor' => '10.4.0-10.4.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Vogelvlug\\FotografieVogelSitepackage\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Markus Vogel',
    'author_email' => 'markus@vogelvlug.de',
    'author_company' => 'VogelVlug',
    'version' => '1.0.0',
];
