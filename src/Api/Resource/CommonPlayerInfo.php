<?php

namespace Michaskruzelka\NBA\Api\Resource;

/**
 * @method array getCommonPlayerInfo
 * @method array getPlayerHeadlineStats
 */
class CommonPlayerInfo extends ResourceDefault
{
    protected $name = 'commonplayerinfo';

    protected $resultSetNames = [
        'CommonPlayerInfo',
        'PlayerHeadlineStats'
    ];
}
