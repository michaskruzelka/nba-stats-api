<?php

namespace Michaskruzelka\NBA\Api\Resource;

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
