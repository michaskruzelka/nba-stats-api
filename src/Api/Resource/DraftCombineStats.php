<?php

namespace Michaskruzelka\NBA\Api\Resource;

/**
 * @method array getDraftCombineStats
 */
class DraftCombineStats extends ResourceDefault
{
    protected $name = 'draftcombinestats';

    protected $resultSetNames = [
        'DraftCombineStats'
    ];
}
