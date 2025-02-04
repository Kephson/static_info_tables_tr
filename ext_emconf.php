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
    'version' => '12.4.0',
    'category' => 'misc',
    'constraints' => [
        'depends' => [
            'typo3' => '12.4.0-13.4.99',
            'static_info_tables' => '12.4.0-13.4.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
    'state' => 'stable',
    'author' => 'Ephraim Härer',
    'author_email' => 'ephraim.haerer@renolit.com',
    'author_company' => 'RENOLIT SE',
];
