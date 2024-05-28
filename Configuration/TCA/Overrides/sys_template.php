<?php

defined('TYPO3_MODE') || defined('TYPO3') or die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'nitsan_hellobar',
    'Configuration/TypoScript',
    'API HelloBar.com'
);
