<?php

namespace Michaskruzelka\NBA\Api\Resource;

/**
 * @method array getCommonAllPlayers
 */
class CommonAllPlayers extends ResourceDefault
{
    /**
     * @var string
     */
    protected $name = 'commonallplayers';

    /**
     * @var array
     */
    protected $resultSetNames = [
        'CommonAllPlayers'
    ];
}
