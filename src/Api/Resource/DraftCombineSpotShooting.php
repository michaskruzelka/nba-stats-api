<?php

namespace Michaskruzelka\NBA\Api\Resource;

/**
 * @method array getResults
 * @method array getResultsByPlayerName($string)
 * @method array getResultsByPosition($string)
 */
class DraftCombineSpotShooting extends ResourceDefault
{
    /**
     * @var string
     */
    protected $name = 'draftcombinespotshooting';

    /**
     * @var array
     */
    protected $resultSetNames = [
        'Results'
    ];
}
