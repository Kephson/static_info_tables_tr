<?php
declare(strict_types=1);

use SJBR\StaticInfoTables\Domain\Model\Country;

return [
    Country::class => [
        'tableName' => 'static_countries',
        'properties' => [
            'shortNameTr' => [
                'fieldName' => 'cn_short_tr',
            ],
        ],
    ],
];
