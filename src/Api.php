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
}
