<?php

namespace Michaskruzelka\NBA\Api\Endpoint;

class CommonPlayoffSeries extends EndpointDefault
{
    protected $point = 'commonplayoffseries';

    protected $leagueID;

    protected $season;

    protected $seriesID;

    /**
     * CommonPlayoffSeries constructor.
     * @param string $leagueID
     * @param string $season
     */
    public function __construct($leagueID = null, $season = null, $seriesID = null) {
        $this->leagueID = $leagueID ? $leagueID : static::getDefaultLeagueID();
        $this->season = $season ? $season : static::getDefaultSeason();
        $this->seriesID = $seriesID;
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
            'SeriesID' => $this->seriesID
        ];
    }
}
