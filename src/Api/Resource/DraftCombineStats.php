<?php

namespace Michaskruzelka\NBA\Api\Resource;

/**
 * @method array getDraftCombineStats
 */
class DraftCombineStats extends ResourceDefault
{
    /**
     * @var string
     */
    protected $name = 'draftcombinestats';

    /**
     * @var array
     */
    protected $resultSetNames = [
        'DraftCombineStats'
    ];
}
