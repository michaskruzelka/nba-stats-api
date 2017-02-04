<?php

namespace Michaskruzelka\NBA\Api\Resource;

/**
 * @method array getCommonPlayerInfo
 * @method array getPlayerHeadlineStats
 */
class CommonPlayerInfo extends ResourceDefault
{
    /**
     * @var string
     */
    protected $name = 'commonplayerinfo';

    /**
     * @var array
     */
    protected $resultSetNames = [
        'CommonPlayerInfo',
        'PlayerHeadlineStats'
    ];
}
