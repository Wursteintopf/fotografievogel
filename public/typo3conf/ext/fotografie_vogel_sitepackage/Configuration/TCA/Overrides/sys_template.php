<?php
defined('TYPO3_MODE') || die();
call_user_func(function()
{
    /**
     * Temporary variables
     */
    $extensionKey = 'fotografie_vogel_sitepackage';

    /**
     * Default TypoScript for FotografieVogelSitepackage
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        $extensionKey,
        'Configuration/TypoScript',
        'Fotografie Vogel Sitepackage'
    );
});
