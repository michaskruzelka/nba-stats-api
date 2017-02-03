<?php

namespace Michaskruzelka\NBA\Api\Endpoint;

class DraftCombine extends EndpointDefault
{
    protected $leagueID;

    protected $seasonYear;

    /**
     * DraftCombine constructor.
     * @param string|null $seasonYear
     * @param string $leagueID
     */
    public function __construct($seasonYear = null, $leagueID = null) {
        $this->leagueID = $leagueID ? $leagueID : static::getDefaultLeagueID();
        $this->seasonYear = $seasonYear ? $seasonYear : static::getDefaultSeason();
    }

    /**
     * Implements Resource interface
     * @return array
     */
    public function getParams()
    {
        return [
            'LeagueID' => $this->leagueID,
            'SeasonYear' => $this->seasonYear
        ];
    }
}
