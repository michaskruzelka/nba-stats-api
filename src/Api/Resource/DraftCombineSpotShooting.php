<?php

namespace Michaskruzelka\NBA\Api\Resource;

/**
 * @method array getResults
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
