<?php

namespace Michaskruzelka\NBA\Api\Endpoint;

class CommonTeamRoster extends EndpointDefault
{
    /**
     * @var string
     */
    protected $point = 'commonteamroster';

    /**
     * @var int
     */
    protected $teamID;

    /**
     * @var null|string
     */
    protected $leagueID;

    /**
     * @var string
     */
    protected $season;

    /**
     * CommonTeamRoster constructor.
     * @param string $teamID
     * @param string|null $season
     * @param string|null $leagueID
     */
    public function __construct($teamID, $season = null, $leagueID = null) {
        $this->teamID = $teamID;
        $this->leagueID = $leagueID;
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
