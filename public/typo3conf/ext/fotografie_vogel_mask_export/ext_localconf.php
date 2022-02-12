<?php
defined('TYPO3_MODE') || die();

call_user_func(function () {

// Register content element icons
$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
$iconRegistry->registerIcon(
    'tx_fotografievogelmaskexport_contentteaser',
    \TYPO3\CMS\Core\Imaging\IconProvider\BitmapIconProvider::class,
    [
        'source' => 'EXT:fotografie_vogel_mask_export/Resources/Public/Icons/Content/contentteaser.png',
    ]
);
$iconRegistry->registerIcon(
    'tx_fotografievogelmaskexport_gallery',
    \TYPO3\CMS\Core\Imaging\IconProvider\BitmapIconProvider::class,
    [
        'source' => 'EXT:fotografie_vogel_mask_export/Resources/Public/Icons/Content/gallery.png',
    ]
);
$iconRegistry->registerIcon(
    'tx_fotografievogelmaskexport_headerteaser',
    \TYPO3\CMS\Core\Imaging\IconProvider\BitmapIconProvider::class,
    [
        'source' => 'EXT:fotografie_vogel_mask_export/Resources/Public/Icons/Content/headerteaser.png',
    ]
);
$iconRegistry->registerIcon(
    'tx_fotografievogelmaskexport_heroteaser',
    \TYPO3\CMS\Core\Imaging\IconProvider\BitmapIconProvider::class,
    [
        'source' => 'EXT:fotografie_vogel_mask_export/Resources/Public/Icons/Content/heroteaser.png',
    ]
);
$iconRegistry->registerIcon(
    'tx_fotografievogelmaskexport_imagebox',
    \TYPO3\CMS\Core\Imaging\IconProvider\BitmapIconProvider::class,
    [
        'source' => 'EXT:fotografie_vogel_mask_export/Resources/Public/Icons/Content/imagebox.png',
    ]
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
    '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:fotografie_vogel_mask_export/Configuration/TsConfig/Page/NewContentElementWizard.tsconfig">'
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
    '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:fotografie_vogel_mask_export/Configuration/TsConfig/Page/BackendPreview.tsconfig">'
);
// Add backend preview hook
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['cms/layout/class.tx_cms_layout.php']['tt_content_drawItem']['fotografie_vogel_mask_export'] = 
    Vogelvlug\FotografieVogelMaskExport\Hooks\PageLayoutViewDrawItem::class;

});

