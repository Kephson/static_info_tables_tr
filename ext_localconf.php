<?php
/** @noinspection PhpFullyQualifiedNameUsageInspection */

defined('TYPO3') or die();

call_user_func(function ($extKey) {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScriptSetup(
        '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:' . $extKey . '/Configuration/TypoScript/Extbase/setup.typoscript">'
    );
}, 'static_info_tables_tr');