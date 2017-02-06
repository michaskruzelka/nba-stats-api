<?php

namespace Michaskruzelka\NBA\Api\Resource;

/**
 * @method array getResults
 * @method array getResultsByPlayerName($string)
 * @method array getResultsByPosition($string)
 */
class DraftCombinePlayerAnthro extends ResourceDefault
{
    /**
     * @var string
     */
    protected $name = 'draftcombineplayeranthro';

    /**
     * @var array
     */
    protected $resultSetNames = [
        'Results'
    ];
}
