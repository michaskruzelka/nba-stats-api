<?php

namespace Michaskruzelka\NBA\Api\Resource;

/**
 * @method array getResults
 * @method array getResultsByPlayerName($string)
 * @method array getResultsByPosition($string)
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
