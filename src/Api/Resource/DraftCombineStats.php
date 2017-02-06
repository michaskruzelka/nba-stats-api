<?php

namespace Michaskruzelka\NBA\Api\Resource;

/**
 * @method array getDraftCombineStats
 * @method array getDraftCombineStatsByPlayerName($string)
 * @method array getDraftCombineStatsByPosition($string)
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
