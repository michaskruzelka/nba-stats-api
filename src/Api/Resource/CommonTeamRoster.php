<?php

namespace Michaskruzelka\NBA\Api\Resource;

/**
 * @method array getCommonTeamRoster
 * @method array getCoaches
 */
class CommonTeamRoster extends ResourceDefault
{
    /**
     * @var string
     */
    protected $name = 'commonteamroster';

    /**
     * @var array
     */
    protected $resultSetNames = [
        'CommonTeamRoster',
        'Coaches'
    ];
}
