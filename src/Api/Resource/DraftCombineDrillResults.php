<?php

namespace Michaskruzelka\NBA\Api\Resource;

/**
 * @method array getResults
 * @method array getResultsByPlayerName($string)
 * @method array getResultsByPosition($string)
 */
class DraftCombineDrillResults extends ResourceDefault
{
    /**
     * @var string
     */
    protected $name = 'draftcombinedrillresults';

    /**
     * @var array
     */
    protected $resultSetNames = [
        'Results'
    ];
}
