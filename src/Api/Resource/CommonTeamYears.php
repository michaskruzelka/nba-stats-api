<?php

namespace Michaskruzelka\NBA\Api\Resource;

/**
 * @method array getTeamYears
 */
class CommonTeamYears extends ResourceDefault
{
    protected $name = 'commonteamyears';

    protected $resultSetNames = [
        'TeamYears'
    ];
}
