<?php

namespace Michaskruzelka\NBA\Api\Endpoint;

class CommonAllPlayers extends EndpointDefault
{
    /**
     * @var string
     */
    protected $point = 'commonallplayers';

    /**
     * @var string
     */
    protected $leagueID;

    /**
     * @var string
     */
    protected $season;

    /**
     * @var int
     */
    protected $onlyCurrent;

    /**
     * CommonTeamYears constructor.
     * @param string|null $leagueID
     * @param string|null $season
     * @param int|null $onlyCurrent
     */
    public function __construct($leagueID = null, $season = null, $onlyCurrent = 1) {
        $this->leagueID = $leagueID ? $leagueID : static::getDefaultLeagueID();
        $this->season = $season ? $season : static::getDefaultSeason();
        $this->onlyCurrent = $onlyCurrent;
    }

    /**
     * Implements Resource interface
     * @return array
     */
    public function getParams()
    {
        return [
            'LeagueID' => $this->leagueID,
            'Season' => $this->season,
            'IsOnlyCurrentSeason' => $this->onlyCurrent
        ];
    }
}
