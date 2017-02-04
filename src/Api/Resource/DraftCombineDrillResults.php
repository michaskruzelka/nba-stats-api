<?php

namespace Michaskruzelka\NBA\Api\Resource;

/**
 * @method array getResults
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
