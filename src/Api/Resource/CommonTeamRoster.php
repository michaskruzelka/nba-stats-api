<?php

namespace Michaskruzelka\NBA\Api\Resource;

/**
 * @method array getCommonTeamRoster
 * @method array getCoaches
 */
class CommonTeamRoster extends ResourceDefault
{
    protected $name = 'commonteamroster';

    protected $resultSetNames = [
        'CommonTeamRoster',
        'Coaches'
    ];
}
