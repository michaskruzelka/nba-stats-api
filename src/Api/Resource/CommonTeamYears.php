<?php

namespace Michaskruzelka\NBA\Api\Resource;

/**
 * @method array getTeamYears
 */
class CommonTeamYears extends ResourceDefault
{
    /**
     * @var string
     */
    protected $name = 'commonteamyears';

    /**
     * @var array
     */
    protected $resultSetNames = [
        'TeamYears'
    ];
}
