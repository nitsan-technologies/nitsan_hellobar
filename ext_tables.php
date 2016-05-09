<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'NITSAN - API HelloBar.com');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_nitsanhellobar_domain_model_hellobar', 'EXT:nitsan_hellobar/Resources/Private/Language/locallang_csh_tx_nitsanhellobar_domain_model_hellobar.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_nitsanhellobar_domain_model_hellobar');
