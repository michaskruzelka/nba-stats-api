<?php

namespace Michaskruzelka\NBA;

use Michaskruzelka\NBA\Api\Client;
use Michaskruzelka\NBA\Api\Endpoint;
use Michaskruzelka\NBA\Api\Resource;

final class Api
{
    /**
     * @var Api
     */
    protected static $instance;

    /**
     * @var Client
     */
    protected $client;

    /**
     * Api constructor.
     */
    protected function __construct()
    {
        $this->client = new Client();
    }

    protected function __clone()
    {
        // Forbidden outside
    }

    /**
     * @return Api
     */
    public static function instance()
    {
        return static::$instance ? static::$instance : (static::$instance = new static);
    }

    /**
     * @param null|string $leagueID
     * @return Resource\FranchiseHistory
     */
    public function franchiseHistory($leagueID = null)
    {
        return $this->client->send(
            new Endpoint\FranchiseHistory($leagueID),
            new Resource\FranchiseHistory()
        );
    }

    /**
     * @param null|string $leagueID
     * @param null|string|int $season Full Year (2016)
     * @param null|string|int $teamID
     * @param null|string|int $roundNum
     * @param null|string|int $roundPick
     * @param null|string|int $overallPick
     * @param null|string $topX
     * @param null|string $college
     * @return Resource\DraftHistory
     */
    public function draftHistory(
        $leagueID = null,
        $season = null,
        $teamID = null,
        $roundNum = null,
        $roundPick = null,
        $overallPick = null,
        $topX = null,
        $college = null
    ) {
        return $this->client->send(
            new Endpoint\DraftHistory(
                $leagueID,
                $season,
                $teamID,
                $roundNum,
                $roundPick,
                $overallPick,
                $topX,
                $college
            ),
            new Resource\DraftHistory()
        );
    }

    /**
     * @param string|null $leagueID
     * @param string|null $seasonYear Season (2015-16)
     * @return Resource\DraftCombineDrillResults
     */
    public function draftCombineDrillResults($leagueID = null, $seasonYear = null)
    {
        return $this->client->send(
            new Endpoint\DraftCombineDrillResults($leagueID, $seasonYear),
            new Resource\DraftCombineDrillResults()
        );
    }

    /**
     * @param string|null $leagueID
     * @param string|null $seasonYear
     * @return Resource\DraftCombineNonStationaryShooting
     */
    public function draftCombineNonStationaryShooting($leagueID = null, $seasonYear = null)
    {
        return $this->client->send(
            new Endpoint\DraftCombineNonStationaryShooting($leagueID, $seasonYear),
            new Resource\DraftCombineNonStationaryShooting()
        );
    }

    /**
     * @param string|null $leagueID
     * @param string|null $seasonYear
     * @return Resource\DraftCombinePlayerAnthro
     */
    public function draftCombinePlayerAnthro($leagueID = null, $seasonYear = null)
    {
        return $this->client->send(
            new Endpoint\DraftCombinePlayerAnthro($leagueID, $seasonYear),
            new Resource\DraftCombinePlayerAnthro()
        );
    }

    /**
     * @param string|null $leagueID
     * @param string|null $seasonYear
     * @return Resource\DraftCombineSpotShooting
     */
    public function draftCombineSpotShooting($leagueID = null, $seasonYear = null)
    {
        return $this->client->send(
            new Endpoint\DraftCombineSpotShooting($leagueID, $seasonYear),
            new Resource\DraftCombineSpotShooting()
        );
    }

    /**
     * @param string|null $leagueID
     * @param string|null $seasonYear
     * @return Resource\DraftCombineStats
     */
    public function draftCombineStats($leagueID = null, $seasonYear = null)
    {
        return $this->client->send(
            new Endpoint\DraftCombineStats($leagueID, $seasonYear),
            new Resource\DraftCombineStats()
        );
    }

    /**
     * @param null|string $leagueID
     * @return Resource\CommonTeamYears
     */
    public function commonTeamYears($leagueID = null)
    {
        return $this->client->send(
            new Endpoint\CommonTeamYears($leagueID),
            new Resource\CommonTeamYears()
        );
    }

    /**
     * @param null|string $leagueID
     * @param null|string $season
     * @param null|int $onlyCurrent
     * @return Resource\Resource
     */
    public function commonAllPlayers($leagueID = null, $season = null, $onlyCurrent = 1)
    {
        return $this->client->send(
            new Endpoint\CommonAllPlayers($leagueID, $season, $onlyCurrent),
            new Resource\CommonAllPlayers()
        );
    }

    /**
     * @param int $playerID
     * @return Resource\Resource
     */
    public function commonPlayerInfo($playerID)
    {
        return $this->client->send(
            new Endpoint\CommonPlayerInfo($playerID),
            new Resource\CommonPlayerInfo()
        );
    }

    /**
     * @param string|null $leagueID
     * @param string|null $season
     * @param string|null $seriesID
     * @return Resource\Resource
     */
    public function commonPlayoffSeries($leagueID = null, $season = null, $seriesID = null)
    {
        return $this->client->send(
            new Endpoint\CommonPlayoffSeries($leagueID, $season, $seriesID),
            new Resource\CommonPlayoffSeries()
        );
    }

    /**
     * @param int $teamID
     * @param null|string $season
     * @param null|string $leagueID
     * @return Resource\Resource
     */
    public function commonTeamRoster($teamID, $season = null, $leagueID = null)
    {
        return $this->client->send(
            new Endpoint\CommonTeamRoster($teamID, $season, $leagueID),
            new Resource\CommonTeamRoster()
        );
    }
}
