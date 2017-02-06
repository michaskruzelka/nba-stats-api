<?php

namespace Michaskruzelka\NBA\Api\Endpoint;

class CommonTeamYears extends EndpointDefault
{
    /**
     * @var string
     */
    protected $point = 'commonteamyears';

    /**
     * @var string
     */
    protected $leagueID;

    /**
     * CommonTeamYears constructor.
     * @param string|null $leagueID
     */
    public function __construct($leagueID = null) {
        $this->leagueID = $leagueID ? $leagueID : static::getDefaultLeagueID();
    }

    /**
     * Implements Resource interface
     * @return array
     */
    public function getParams()
    {
        return [
            'LeagueID' => $this->leagueID
        ];
    }
}
