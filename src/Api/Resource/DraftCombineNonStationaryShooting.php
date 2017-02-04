<?php

namespace Michaskruzelka\NBA\Api\Resource;

/**
 * @method array getResults
 */
class DraftCombineNonStationaryShooting extends ResourceDefault
{
    /**
     * @var string
     */
    protected $name = 'draftcombinenonstationaryshooting';

    /**
     * @var array
     */
    protected $resultSetNames = [
        'Results'
    ];
}
