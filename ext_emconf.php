<?php
/** @noinspection PhpUndefinedVariableInspection */

/***************************************************************
 * Extension Manager/Repository config file for ext "static_info_tables_tr".
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = [
    'title' => 'Static Info Tables (tr)',
    'description' => 'Turkish (tr) language pack for the Static Info Tables providing localized names for countries.',
    'version' => '14.3.0',
    'category' => 'misc',
    'constraints' => [
        'depends' => [
            'typo3' => '14.3.0-14.3.99',
            'php' => '8.2.0-8.5.99',
            'static_info_tables' => '14.3.0-14.3.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
    'state' => 'stable',
    'author' => 'Ephraim Härer',
    'author_email' => 'ephraim.haerer@renolit.com',
    'author_company' => 'RENOLIT SE',
    'autoload' => [
        'psr-4' => [
            'RENOLIT\\StaticInfoTablesTr\\' => 'Classes',
        ],
    ],
];
