<?php

namespace Michaskruzelka\NBA\Api\Resource;

/**
 * @method array getCommonAllPlayers
 */
class CommonAllPlayers extends ResourceDefault
{
    protected $name = 'commonallplayers';

    protected $resultSetNames = [
        'CommonAllPlayers'
    ];
}
