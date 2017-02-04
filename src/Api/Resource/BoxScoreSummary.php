<?php

namespace Michaskruzelka\NBA\Api\Resource;

/**
 * @method array getPlayerTrack
 * @method array getPlayerTrackTeam
 * @method array getGameSummary
 * @method array getOtherStats
 * @method array getOfficials
 * @method array getInactivePlayers
 * @method array getGameInfo
 * @method array getLineScore
 * @method array getLastMeeting
 * @method array getAvailableVideo
 */
class BoxScoreSummary extends ResourceDefault
{
    /**
     * @var string
     */
    protected $name = 'boxscoresummary';

    /**
     * @var array
     */
    protected $resultSetNames = [
        'PlayerTrack',
        'PlayerTrackTeam',
        'GameSummary',
        'OtherStats',
        'Officials',
        'InactivePlayers',
        'GameInfo',
        'LineScore',
        'LastMeeting',
        'AvailableVideo'
    ];
}
