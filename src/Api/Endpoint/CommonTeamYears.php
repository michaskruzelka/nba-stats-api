<?php

namespace Michaskruzelka\NBA\Api\Endpoint;

class CommonTeamYears extends EndpointDefault
{
    protected $point = 'commonteamyears';

    protected $leagueID;

    /**
     * CommonTeamYears constructor.
     * @param string|null $leagueID
     */
    public function __construct($leagueID = '00') {
        $this->leagueID = $leagueID;
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
