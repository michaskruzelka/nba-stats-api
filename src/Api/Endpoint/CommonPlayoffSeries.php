<?php

namespace Michaskruzelka\NBA\Api\Endpoint;

class CommonPlayoffSeries extends EndpointDefault
{
    protected $point = 'commonplayoffseries';

    /**
     * @var string
     */
    protected $leagueID;

    /**
     * @var string
     */
    protected $season;

    /**
     * @var null|string
     */
    protected $seriesID;

    /**
     * CommonPlayoffSeries constructor.
     * @param string|null $leagueID
     * @param string|null $season
     * @param string|null $seriesID
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
