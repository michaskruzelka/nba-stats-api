<?php

namespace Michaskruzelka\NBA\Api\Resource;

/**
 * @method array getDraftHistory
 */
class DraftHistory extends ResourceDefault
{
    protected $name = 'drafthistory';

    protected $resultSetNames = [
        'DraftHistory'
    ];
}
