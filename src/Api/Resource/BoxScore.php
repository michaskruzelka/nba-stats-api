<?php

namespace Michaskruzelka\NBA\Api\Resource;

/**
 * @method array getPlayerStats
 * @method array getTeamStats
 * @method array getTeamStarterBenchStats
 * @method array getsqlPlayersFourFactors
 * @method array getsqlTeamsFourFactors
 * @method array getsqlPlayersMisc
 * @method array getsqlTeamsMisc
 * @method array getsqlPlayersScoring
 * @method array getsqlTeamsScoring
 * @method array getsqlPlayersUsage
 * @method array getsqlTeamsUsage
 */
class BoxScore extends ResourceDefault
{
    protected $name = 'boxscore';

    protected $resultSetNames = [
        'PlayerStats',
        'TeamStats',
        'TeamStarterBenchStats',
        'sqlPlayersFourFactors',
        'sqlTeamsFourFactors',
        'sqlPlayersMisc',
        'sqlTeamsMisc',
        'sqlPlayersScoring',
        'sqlTeamsScoring',
        'sqlPlayersUsage',
        'sqlTeamsUsage'
    ];
}
