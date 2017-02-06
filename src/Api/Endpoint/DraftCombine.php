<?php

namespace Michaskruzelka\NBA\Api\Endpoint;

class DraftCombine extends EndpointDefault
{
    /**
     * @var string
     */
    protected $leagueID;

    /**
     * @var string
     */
    protected $seasonYear;

    /**
     * DraftCombine constructor.
     * @param string $leagueID
     * @param string|null $seasonYear
     */
    public function __construct($leagueID = null, $seasonYear = null) {
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
