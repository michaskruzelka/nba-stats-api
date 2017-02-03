<?php

namespace Michaskruzelka\NBA\Api\Endpoint;

class CommonTeamRoster extends EndpointDefault
{
    protected $point = 'commonteamroster';

    protected $teamID;

    protected $leagueID;

    protected $season;

    /**
     * CommonTeamRoster constructor.
     * @param string $teamID
     * @param string|null $season
     * @param string $leagueID
     */
    public function __construct($teamID = null, $season = null, $leagueID = null) {
        $this->teamID = $teamID;
        $this->leagueID = $leagueID ? $leagueID : static::getDefaultLeagueID();
        $this->season = $season ? $season : static::getDefaultSeason();
    }

    /**
     * Implements Resource interface
     * @return array
     */
    public function getParams()
    {
        return [
            'TeamID' => $this->teamID,
            'Season' => $this->season,
            'LeagueID' => $this->leagueID
        ];
    }
}
