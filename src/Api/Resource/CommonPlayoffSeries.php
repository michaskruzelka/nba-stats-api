<?php

namespace Michaskruzelka\NBA\Api\Resource;

/**
 * Class CommonPlayoffSeries
 * @package Michaskruzelka\NBA\Api\Resource
 * @method getPlayoffSeries
 * @method getPlayoffSeriesByHomeTeamId($int)
 * @method getPlayoffSeriesByVisitorTeamId($int)
 */
class CommonPlayoffSeries extends ResourceDefault
{
    /**
     * @var string
     */
    protected $name = 'commonplayoffseries';

    /**
     * @var array
     */
    protected $resultSetNames = [
        'PlayoffSeries'
    ];
}
