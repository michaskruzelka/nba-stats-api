<?php

namespace Michaskruzelka\NBA\Api\Resource;

/**
 * @method array getDraftHistory
 */
class DraftHistory extends ResourceDefault
{
    /**
     * @var string
     */
    protected $name = 'drafthistory';

    /**
     * @var array
     */
    protected $resultSetNames = [
        'DraftHistory'
    ];
}
